<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('admin.register');
    }

    // Handle User Registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        // Create user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    // Show Login Form
    public function showLogin()
    {
        return view('admin.login');
    }

    // Handle Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('user', $user);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['Invalid credentials']);
    }

    // Show Dashboard (Protected Page)
    public function dashboard()
    {
        if (!Session::has('user')) {
            return redirect()->route('login');
        }

        return view('admin.dashboard', ['user' => Session::get('user')]);
    }

    // Logout User
    public function logout()
    {
        Session::forget('user');
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
   // Controller: AuthController
public function getUsers()
{
    $users = User::all();
    return view('admin.user.index', compact('users'));
}


    public function getBlogs()
    {
        // Fetch all blogs from the database
        $blogs = Blog::all();
        return response()->json($blogs);  // Return blogs as JSON
    }
}
