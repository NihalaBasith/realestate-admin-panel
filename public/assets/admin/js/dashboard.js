function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    if (sidebar) {
        sidebar.classList.toggle("active");
    }
}
function toggleDropdown(button) {
const dropdown = button.nextElementSibling;
if (dropdown && dropdown.classList.contains("dropdown")) {
    dropdown.classList.toggle("show-dropdown");
}
}

// Preview for single images (thumbnail, banner)
function previewSingleImage(input, previewSelector) {
    const preview = document.querySelector(previewSelector);
    preview.innerHTML = '';

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.width = 150;
            preview.appendChild(img);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function previewMultipleMedia(input, previewSelector) {
    const preview = document.querySelector(previewSelector);
    preview.innerHTML = '';

    Array.from(input.files).forEach(file => {
        const reader = new FileReader();
        reader.onload = function (e) {
            const wrapper = document.createElement('div');
            wrapper.classList.add('col-md-3', 'mb-2');

            if (file.type.startsWith('image/')) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100%';
                wrapper.appendChild(img);
            } else if (file.type.startsWith('video/')) {
                const video = document.createElement('video');
                video.src = e.target.result;
                video.controls = true;
                video.style.width = '100%';
                wrapper.appendChild(video);
            }

            preview.appendChild(wrapper);
        };
        reader.readAsDataURL(file);
    });
}