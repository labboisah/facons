<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="FACONS Multi-Role Authentication Portal">
  <title>FACONS Portal Login - Student, Lecturer, Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">

  <!-- Skip to main content -->
  <a href="#login-form" class="sr-only focus:not-sr-only focus:fixed focus:top-0 focus:left-0 focus:z-50 bg-green-700 text-white px-4 py-2 rounded-b-lg">
    Skip to login form
  </a>

  <!-- ================= HEADER ================= -->
  <header class="bg-white shadow-sm">
    <div class="container mx-auto px-4 sm:px-6 py-4 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/logo.png') }}" alt="FACONS Logo" class="w-10 sm:w-12 h-auto">
        <h1 class="font-bold text-green-700 text-lg sm:text-xl">FACONS</h1>
      </div>
      <a href="/" class="text-gray-600 hover:text-green-700 flex items-center gap-2 transition">
        <i class="bi bi-arrow-left" aria-hidden="true"></i>
        <span class="hidden sm:inline">Back to Home</span>
      </a>
    </div>
  </header>

  <!-- ================= MAIN CONTENT ================= -->
  <main class="container mx-auto px-4 sm:px-6 py-8 sm:py-12">

    <!-- AUTHENTICATION SECTION -->
    <div class="max-w-4xl mx-auto">

      <!-- AUTHENTICATION HEADER -->
      <div class="text-center mb-10 sm:mb-12">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-3">Welcome Back</h2>
        <p class="text-gray-600 text-sm sm:text-base">Sign in to your FACONS portal as a student, lecturer, or administrator</p>
      </div>

      <!-- ROLE SELECTION TABS -->
      <div class="flex gap-4 mb-8 overflow-x-auto pb-2">
        <button 
          onclick="toggleRole('student')" 
          aria-selected="true"
          class="role-tab px-4 sm:px-6 py-3 rounded-lg font-semibold text-sm whitespace-nowrap transition-all duration-200 student-tab bg-green-600 text-white"
        >
          <i class="bi bi-mortarboard mr-2" aria-hidden="true"></i>
          <span>Student</span>
        </button>

        <button 
          onclick="toggleRole('lecturer')" 
          aria-selected="false"
          class="role-tab px-4 sm:px-6 py-3 rounded-lg font-semibold text-sm whitespace-nowrap transition-all duration-200 lecturer-tab bg-gray-200 text-gray-700 hover:bg-gray-300"
        >
          <i class="bi bi-person-fill mr-2" aria-hidden="true"></i>
          <span>Lecturer</span>
        </button>

        <button 
          onclick="toggleRole('admin')" 
          aria-selected="false"
          class="role-tab px-4 sm:px-6 py-3 rounded-lg font-semibold text-sm whitespace-nowrap transition-all duration-200 admin-tab bg-gray-200 text-gray-700 hover:bg-gray-300"
        >
          <i class="bi bi-shield-lock mr-2" aria-hidden="true"></i>
          <span>Administrator</span>
        </button>
      </div>

      <!-- LOGIN FORM -->
      <div class="bg-white rounded-2xl shadow-lg p-6 sm:p-10" id="login-form">

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
          @csrf

          <!-- Hidden Role Input -->
          <input type="hidden" id="roleInput" name="role" value="student">

          <!-- Role Description -->
          <div id="roleDescription" class="p-4 rounded-lg bg-green-50 border border-green-200">
            <div class="flex gap-3">
              <i class="bi bi-mortarboard text-2xl text-green-700 flex-shrink-0" aria-hidden="true"></i>
              <div>
                <h3 class="font-semibold text-green-900">Student Portal</h3>
                <p class="text-sm text-green-700">Access your grades, courses, and academic records</p>
              </div>
            </div>
          </div>

          <!-- EMAIL ADDRESS -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
              <i class="bi bi-envelope mr-2" aria-hidden="true"></i>
              Email Address
            </label>
            <input 
              id="email" 
              type="email" 
              name="email" 
              value="{{ old('email') }}"
              required 
              autofocus 
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:border-transparent transition"
              placeholder="you@example.com"
              aria-label="Email address"
            >
            @error('email')
              <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                <i class="bi bi-exclamation-circle" aria-hidden="true"></i>
                {{ $message }}
              </p>
            @enderror
          </div>

          <!-- PASSWORD -->
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
              <i class="bi bi-lock mr-2" aria-hidden="true"></i>
              Password
            </label>
            <div class="relative">
              <input 
                id="password" 
                type="password" 
                name="password" 
                required 
                class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:border-transparent transition"
                placeholder="Enter your password"
                aria-label="Password"
              >
              <button 
                type="button" 
                onclick="togglePasswordVisibility()" 
                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700 transition"
                aria-label="Toggle password visibility"
              >
                <i id="passwordToggleIcon" class="bi bi-eye" aria-hidden="true"></i>
              </button>
            </div>
            @error('password')
              <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                <i class="bi bi-exclamation-circle" aria-hidden="true"></i>
                {{ $message }}
              </p>
            @enderror
          </div>

          <!-- REMEMBER ME & FORGOT PASSWORD -->
          <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
            <label class="flex items-center gap-2">
              <input 
                type="checkbox" 
                name="remember" 
                class="w-4 h-4 rounded border-gray-300 text-green-600 focus:ring-green-600"
              >
              <span class="text-sm text-gray-600">Remember me</span>
            </label>

            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}" class="text-sm text-green-700 hover:text-green-600 font-medium transition">
                Forgot your password?
              </a>
            @endif
          </div>

          <!-- LOGIN BUTTON -->
          <button 
            type="submit" 
            class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg transition duration-200 flex items-center justify-center gap-2"
          >
            <i class="bi bi-box-arrow-in-right" aria-hidden="true"></i>
            Sign In
          </button>

          <!-- SESSION STATUS -->
          @if ($errors->any())
            <div class="p-4 rounded-lg bg-red-50 border border-red-200">
              <div class="flex gap-3">
                <i class="bi bi-exclamation-triangle text-xl text-red-600 flex-shrink-0 mt-0.5" aria-hidden="true"></i>
                <div>
                  <h4 class="font-semibold text-red-900 mb-1">Login Failed</h4>
                  <p class="text-sm text-red-700">Please check your email and password are correct for the selected role.</p>
                </div>
              </div>
            </div>
          @endif
        </form>

        <!-- DIVIDER -->
        <div class="mt-8 pt-8 border-t border-gray-200">
          <p class="text-center text-gray-600 text-sm mb-4">Don't have an account?</p>
          <a 
            href="{{ route('register') }}" 
            class="block w-full text-center py-3 border-2 border-green-600 text-green-600 font-semibold rounded-lg hover:bg-green-50 transition duration-200"
          >
            <i class="bi bi-person-plus mr-2" aria-hidden="true"></i>
            Create Student Account
          </a>
        </div>
      </div>

      <!-- ROLE OPTIONS INFO -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10 sm:mt-12">

        <!-- STUDENT CARD -->
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
              <i class="bi bi-mortarboard text-xl text-blue-600" aria-hidden="true"></i>
            </div>
            <h3 class="font-semibold text-gray-900">Student</h3>
          </div>
          <ul class="space-y-2 text-sm text-gray-600">
            <li class="flex items-center gap-2">
              <i class="bi bi-check2 text-green-600 flex-shrink-0" aria-hidden="true"></i>
              View courses & grades
            </li>
            <li class="flex items-center gap-2">
              <i class="bi bi-check2 text-green-600 flex-shrink-0" aria-hidden="true"></i>
              Access course materials
            </li>
            <li class="flex items-center gap-2">
              <i class="bi bi-check2 text-green-600 flex-shrink-0" aria-hidden="true"></i>
              Submit assignments
            </li>
          </ul>
        </div>

        <!-- LECTURER CARD -->
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
              <i class="bi bi-person-fill text-xl text-purple-600" aria-hidden="true"></i>
            </div>
            <h3 class="font-semibold text-gray-900">Lecturer</h3>
          </div>
          <ul class="space-y-2 text-sm text-gray-600">
            <li class="flex items-center gap-2">
              <i class="bi bi-check2 text-green-600 flex-shrink-0" aria-hidden="true"></i>
              Manage courses
            </li>
            <li class="flex items-center gap-2">
              <i class="bi bi-check2 text-green-600 flex-shrink-0" aria-hidden="true"></i>
              Grade students
            </li>
            <li class="flex items-center gap-2">
              <i class="bi bi-check2 text-green-600 flex-shrink-0" aria-hidden="true"></i>
              Upload materials
            </li>
          </ul>
        </div>

        <!-- ADMIN CARD -->
        <div class="bg-white rounded-lg shadow p-6">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
              <i class="bi bi-shield-lock text-xl text-red-600" aria-hidden="true"></i>
            </div>
            <h3 class="font-semibold text-gray-900">Administrator</h3>
          </div>
          <ul class="space-y-2 text-sm text-gray-600">
            <li class="flex items-center gap-2">
              <i class="bi bi-check2 text-green-600 flex-shrink-0" aria-hidden="true"></i>
              Manage all users
            </li>
            <li class="flex items-center gap-2">
              <i class="bi bi-check2 text-green-600 flex-shrink-0" aria-hidden="true"></i>
              System settings
            </li>
            <li class="flex items-center gap-2">
              <i class="bi bi-check2 text-green-600 flex-shrink-0" aria-hidden="true"></i>
              View reports
            </li>
          </ul>
        </div>

      </div>

    </div>

  </main>

  <!-- ================= FOOTER ================= -->
  <footer class="bg-gray-900 text-gray-300 py-6 mt-10 sm:mt-16">
    <div class="container mx-auto px-4 sm:px-6 text-center text-sm">
      <p>&copy; 2026 Fatima College of Nursing Science Sifawa. All rights reserved.</p>
    </div>
  </footer>

  <!-- SCRIPTS -->
  <script>
    const roleDescriptions = {
      student: {
        icon: 'bi-mortarboard',
        title: 'Student Portal',
        description: 'Access your grades, courses, and academic records',
        color: 'green'
      },
      lecturer: {
        icon: 'bi-person-fill',
        title: 'Lecturer Portal',
        description: 'Manage your courses and view student performance',
        color: 'purple'
      },
      admin: {
        icon: 'bi-shield-lock',
        title: 'Administrator Portal',
        description: 'System administration and user management',
        color: 'red'
      }
    };

    function toggleRole(role) {
      // Update role input
      document.getElementById('roleInput').value = role;

      // Update button states
      document.querySelectorAll('.role-tab').forEach(btn => {
        btn.classList.remove('bg-green-600', 'text-white');
        btn.classList.add('bg-gray-200', 'text-gray-700');
      });

      const activeBtn = document.querySelector('.' + role + '-tab');
      activeBtn.classList.remove('bg-gray-200', 'text-gray-700');
      activeBtn.classList.add('bg-green-600', 'text-white');

      // Update role description
      const desc = roleDescriptions[role];
      const descElement = document.getElementById('roleDescription');
      descElement.innerHTML = `
        <div class="flex gap-3">
          <i class="bi ${desc.icon} text-2xl text-${desc.color}-700 flex-shrink-0" aria-hidden="true"></i>
          <div>
            <h3 class="font-semibold text-${desc.color}-900">${desc.title}</h3>
            <p class="text-sm text-${desc.color}-700">${desc.description}</p>
          </div>
        </div>
      `;
    }

    function togglePasswordVisibility() {
      const passwordInput = document.getElementById('password');
      const toggleIcon = document.getElementById('passwordToggleIcon');

      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.className = 'bi bi-eye-slash';
      } else {
        passwordInput.type = 'password';
        toggleIcon.className = 'bi bi-eye';
      }
    }

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
      toggleRole('student');
    });
  </script>

</body>
</html>
