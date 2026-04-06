<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>FACONS @yield('title')</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<!-- TOASTR NOTIFICATIONS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<style>
/* Custom Toastr styling for FACONS theme */
.toast {
    font-family: 'Inter', sans-serif !important;
    border-radius: 8px !important;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
}

.toast-success {
    background-color: #10b981 !important;
    border-left: 4px solid #059669 !important;
}

.toast-error {
    background-color: #ef4444 !important;
    border-left: 4px solid #dc2626 !important;
}

.toast-warning {
    background-color: #f59e0b !important;
    border-left: 4px solid #d97706 !important;
}

.toast-info {
    background-color: #3b82f6 !important;
    border-left: 4px solid #2563eb !important;
}

.toast-title {
    font-weight: 600 !important;
    font-size: 14px !important;
}

.toast-message {
    font-size: 14px !important;
    line-height: 1.4 !important;
}

.toast-close-button {
    opacity: 0.8 !important;
}

.toast-close-button:hover {
    opacity: 1 !important;
}
</style>

<!-- PARTICLES -->
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

</head>


<body class="h-screen flex">


<!-- LEFT SIDE (UNIVERSITY HERO) -->

<div class="hidden lg:flex w-1/2 bg-green-900 text-white relative overflow-hidden">

<!-- PARTICLES -->
<div id="particles-js" class="absolute inset-0"></div>

<div class="relative z-10 flex flex-col justify-center px-16">



<h1 class="text-4xl font-bold leading-tight mb-4">

Fatima College of  
Nursing Science Sifawa

</h1>

<p class="text-lg text-green-200 max-w-md">

Empowering future healthcare professionals through
excellence in nursing education and compassionate service.

</p>

</div>

</div>



<!-- RIGHT SIDE LOGIN -->

<div class="flex w-full lg:w-1/2 items-center justify-center bg-gray-100">


<div class="bg-white shadow-2xl rounded-2xl p-10 w-full max-w-md">

<div class="logo flex items-center justify-center mb-6">
    <img src="{{ asset('images/logo.png') }}" class="w-24 mb-6">
</div>

    
@yield('content')
</div>

</div>



<!-- PASSWORD TOGGLE -->

<script>

function togglePassword() {

const password = document.getElementById("password")
const icon = document.getElementById("eyeIcon")

if(password.type === "password"){

password.type = "text"
icon.classList.replace("bi-eye","bi-eye-slash")

}else{

password.type = "password"
icon.classList.replace("bi-eye-slash","bi-eye")

}

}

</script>



<!-- PARTICLE BACKGROUND -->

<script>
// TOASTR CONFIGURATION
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "400",
    "hideDuration": "1000",
    "timeOut": "6000",
    "extendedTimeOut": "2000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "slideDown",
    "hideMethod": "slideUp",
    "escapeHtml": false
};

// SHOW FLASH MESSAGES
// Usage in controllers:
// toast_success('Your success message here');
// toast_error('Your error message here');
// toast_warning('Your warning message here');
// toast_info('Your info message here');
// Or: toast('Your message', 'success');

@if(session('success'))
    toastr.success('{{ session("success") }}');
@endif

@if(session('error'))
    toastr.error('{{ session("error") }}');
@endif

@if(session('warning'))
    toastr.warning('{{ session("warning") }}');
@endif

@if(session('info'))
    toastr.info('{{ session("info") }}');
@endif

// SHOW VALIDATION ERRORS AS TOASTS
@if($errors->any())
    @foreach($errors->all() as $error)
        toastr.error('{{ $error }}');
    @endforeach
@endif

tsParticles.load("particles-js", {

particles: {

number: { value: 80 },

color: { value: "#ffffff" },

shape: { type: "circle" },

opacity: { value: 0.4 },

size: { value: 3 },

move: { enable: true, speed: 1 }

},

background: {

color: "transparent"

}

})

</script>


</body>
</html>