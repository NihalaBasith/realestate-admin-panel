<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = [
        'page_name',
        'heading',
        'subheading',
        'content',
        'banner_image',
        'section2_heading',
        'section2_subheading',
        'section2_content',
        'section2_image',
        // Add other fields you allow for mass assignment
    ];
}
