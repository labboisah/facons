<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fatima College of Nursing Science Sifawa - Excellence in nursing education">
    <title>Fatima College of Nursing Science Sifawa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      #menuBtn.open span:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
      }
      #menuBtn.open span:nth-child(2) {
        opacity: 0;
      }
      #menuBtn.open span:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
      }
    </style>
  </head>

  <body class="bg-gray-50">

    <!-- Skip navigation link for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-0 focus:left-0 focus:z-50 bg-green-700 text-white px-4 py-2 rounded-b-lg">
      Skip to main content
    </a>

    <!-- ================= NAVBAR ================= -->
    <header id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 bg-white">
      <div class="backdrop-blur-md bg-white/70 shadow-sm">
        <div class="container mx-auto px-4 sm:px-6 py-3 sm:py-4 flex items-center justify-between">
          <!-- LOGO -->
          <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
            <img src="{{ asset('images/logo.png') }}" alt="FACONS Logo" class="w-10 sm:w-12 h-auto">
            <h1 class="font-bold text-green-700 text-base sm:text-lg">FACONS</h1>
          </div>
          <!-- DESKTOP NAV -->
          <nav class="hidden lg:flex items-center gap-8 font-medium text-gray-700" aria-label="Main navigation">
            <a href="#home" class="flex items-center gap-2 hover:text-green-700 transition duration-200">
              <i class="bi bi-house-door" aria-hidden="true"></i>
              <span>Home</span>
            </a>
            <a href="#about" class="flex items-center gap-2 hover:text-green-700 transition duration-200">
              <i class="bi bi-info-circle" aria-hidden="true"></i>
              <span>About</span>
            </a>
            <!-- PROGRAMS DROPDOWN -->
            <div class="relative group">
              <button aria-label="Toggle programs menu" class="flex items-center gap-2 hover:text-green-700 transition duration-200">
                <i class="bi bi-mortarboard" aria-hidden="true"></i>
                <span>Programs</span>
                <i class="bi bi-chevron-down text-sm" aria-hidden="true"></i>
              </button>
              <!-- MEGA MENU -->
              <div class="absolute left-0 top-8 hidden group-hover:block group-focus-within:block bg-white shadow-xl rounded-xl p-6 sm:p-8 w-96 sm:w-[600px]" role="menu">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8">
                  <div>
                    <h3 class="font-semibold text-green-700 mb-3 text-sm sm:text-base">Nursing Programs</h3>
                    <ul class="space-y-2 text-gray-600 text-xs sm:text-sm">
                      <li class="flex items-center gap-2">
                        <i class="bi bi-hospital flex-shrink-0" aria-hidden="true"></i>
                        <a href="#" class="hover:text-green-700 transition duration-200">Basic Nursing</a>
                      </li>
                      <li class="flex items-center gap-2">
                        <i class="bi bi-heart-pulse flex-shrink-0" aria-hidden="true"></i>
                        <a href="#" class="hover:text-green-700 transition duration-200">Midwifery</a>
                      </li>
                      <li class="flex items-center gap-2">
                        <i class="bi bi-clipboard2-pulse flex-shrink-0" aria-hidden="true"></i>
                        <a href="#" class="hover:text-green-700 transition duration-200">Post Basic Nursing</a>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <h3 class="font-semibold text-green-700 mb-3 text-sm sm:text-base">Professional Training</h3>
                    <ul class="space-y-2 text-gray-600 text-xs sm:text-sm">
                      <li class="flex items-center gap-2">
                        <i class="bi bi-people flex-shrink-0" aria-hidden="true"></i>
                        <a href="#" class="hover:text-green-700 transition duration-200">Community Nursing</a>
                      </li>
                      <li class="flex items-center gap-2">
                        <i class="bi bi-journal-medical flex-shrink-0" aria-hidden="true"></i>
                        <a href="#" class="hover:text-green-700 transition duration-200">Clinical Training</a>
                      </li>
                      <li class="flex items-center gap-2">
                        <i class="bi bi-graph-up flex-shrink-0" aria-hidden="true"></i>
                        <a href="#" class="hover:text-green-700 transition duration-200">Research Programs</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <a href="#admissions" class="flex items-center gap-2 hover:text-green-700 transition duration-200">
              <i class="bi bi-file-earmark-text" aria-hidden="true"></i>
              <span>Admissions</span>
            </a>
            <a href="#campus" class="flex items-center gap-2 hover:text-green-700 transition duration-200">
              <i class="bi bi-building" aria-hidden="true"></i>
              <span>Campus</span>
            </a>
            <a href="#contact" class="flex items-center gap-2 hover:text-green-700 transition duration-200">
              <i class="bi bi-envelope" aria-hidden="true"></i>
              <span>Contact</span>
            </a>
            
          </nav>
          <!-- CTA BUTTONS -->
          <div class="hidden lg:flex items-center gap-2">
            <a href="{{ route('student.login') }}" class="flex items-center gap-1 px-3 py-2 rounded-lg bg-green-100 text-green-700 hover:bg-green-200 transition duration-200 text-sm font-medium">
              <i class="bi bi-backpack" aria-hidden="true"></i>
              <span>Student</span>
            </a>
            <a href="{{ route('lecturer.login') }}" class="flex items-center gap-1 px-3 py-2 rounded-lg bg-purple-100 text-purple-700 hover:bg-purple-200 transition duration-200 text-sm font-medium">
              <i class="bi bi-mortarboard" aria-hidden="true"></i>
              <span>Lecturer</span>
            </a>
            <a href="{{ route('admin.login') }}" class="flex items-center gap-1 px-3 py-2 rounded-lg bg-blue-100 text-blue-700 hover:bg-blue-200 transition duration-200 text-sm font-medium">
              <i class="bi bi-shield-lock" aria-hidden="true"></i>
              <span>Admin</span>
            </a>
          </div>
          <!-- HAMBURGER MENU BUTTON -->
          <button 
            id="menuBtn" 
            aria-label="Toggle mobile menu" 
            aria-expanded="false"
            aria-controls="mobileMenu"
            class="lg:hidden text-lg flex flex-col gap-1.5 hover:text-green-700 transition"
          >
            <span class="w-6 h-0.5 bg-gray-700 transition duration-300 block"></span>
            <span class="w-6 h-0.5 bg-gray-700 transition duration-300 block"></span>
            <span class="w-6 h-0.5 bg-gray-700 transition duration-300 block"></span>
          </button>
        </div>
      </div>
      <!-- MOBILE MENU -->
      <div id="mobileMenu" class="hidden lg:hidden bg-white shadow-lg" role="navigation" aria-label="Mobile navigation">
        <nav class="flex flex-col p-4 sm:p-6 gap-1">
          <a href="#home" class="flex items-center gap-3 hover:text-green-700 py-3 px-3 rounded-lg transition duration-200">
            <i class="bi bi-house flex-shrink-0" aria-hidden="true"></i>
            <span>Home</span>
          </a>
          <a href="#about" class="flex items-center gap-3 hover:text-green-700 py-3 px-3 rounded-lg transition duration-200">
            <i class="bi bi-info-circle flex-shrink-0" aria-hidden="true"></i>
            <span>About</span>
          </a>
          <a href="#programs" class="flex items-center gap-3 hover:text-green-700 py-3 px-3 rounded-lg transition duration-200">
            <i class="bi bi-mortarboard flex-shrink-0" aria-hidden="true"></i>
            <span>Programs</span>
          </a>
          
          <a href="#campus" class="flex items-center gap-3 hover:text-green-700 py-3 px-3 rounded-lg transition duration-200">
            <i class="bi bi-building flex-shrink-0" aria-hidden="true"></i>
            <span>Campus</span>
          </a>
          <a href="#contact" class="flex items-center gap-3 hover:text-green-700 py-3 px-3 rounded-lg transition duration-200">
            <i class="bi bi-envelope flex-shrink-0" aria-hidden="true"></i>
            <span>Contact</span>
          </a>
          <div class="border-t border-gray-200 pt-3 mt-3">
            <a href="{{ route('student.login') }}" class="flex items-center gap-3 hover:text-green-700 py-3 px-3 rounded-lg transition duration-200">
              <i class="bi bi-person-circle flex-shrink-0" aria-hidden="true"></i>
              <span>Student Portal</span>
            </a>
            <a href="{{ route('lecturer.login') }}" class="flex items-center gap-3 hover:text-purple-700 py-3 px-3 rounded-lg transition duration-200">
              <i class="bi bi-mortarboard flex-shrink-0" aria-hidden="true"></i>
              <span>Lecturer Portal</span>
            </a>
            <a href="{{ route('admin.login') }}" class="flex items-center gap-3 hover:text-blue-700 py-3 px-3 rounded-lg transition duration-200">
              <i class="bi bi-shield-lock flex-shrink-0" aria-hidden="true"></i>
              <span>Admin Portal</span>
            </a>
          </div>
          
        </nav>
      </div>
    </header>


    <!-- MAIN CONTENT -->
    <main id="main-content">

      <!-- ================= HERO ================= -->
      <section id="home" class="relative min-h-screen flex items-center pt-20 p-4 sm:p-6 md:p-8 bg-cover bg-center" style="background-image: url('/images/bg.png');">
        <div class="absolute inset-0 bg-gradient-to-r from-green-900/80 via-green-900/60 to-transparent"></div>

        <div class="relative container mx-auto max-w-4xl text-white">
          <div class="space-y-4 sm:space-y-6 pt-16 sm:pt-20">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
              
              <span class="text-yellow-400 block mt-2">Fatima College of Nursing Science Sifawa</span>
            </h1>

            <div class="inline-block bg-green-600 px-4 sm:px-5 py-2 rounded-full text-sm sm:text-base font-medium">
              Learning for Service
            </div>

            <p class="max-w-2xl text-base sm:text-lg text-gray-100 leading-relaxed">
              Dedicated to excellence in nursing education, preparing competent healthcare professionals with compassion and clinical expertise.
            </p>

            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-4">
              <a href="#programs" class="inline-flex justify-center items-center bg-green-600 hover:bg-green-500 px-6 sm:px-8 py-3 rounded-lg font-semibold transition duration-200 text-sm sm:text-base">
                Explore Programs
              </a>

              <a href="#" class="inline-flex justify-center items-center bg-yellow-500 hover:bg-yellow-400 text-black px-6 sm:px-8 py-3 rounded-lg font-semibold transition duration-200 text-sm sm:text-base">
                Apply Now
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- ================= ABOUT ================= -->
      <section id="about" class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 lg:gap-10 items-center">
            <img src="{{ asset('images/about.png') }}" alt="FACONS Campus" class="rounded-xl shadow-lg w-full h-auto">

            <div class="space-y-4 sm:space-y-6">
              <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-green-700">
                About FACONS
              </h2>

              <p class="text-gray-600 text-base leading-relaxed">
                Fatima College of Nursing Science Sifawa is committed to producing highly skilled and compassionate nurses equipped with modern healthcare knowledge and professional ethics.
              </p>

              <a href="#" class="inline-flex items-center text-green-700 font-semibold hover:text-green-600 transition duration-200">
                Learn More
                <i class="bi bi-arrow-right ml-2" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- ================= PROGRAMS ================= -->
      <section id="programs" class="py-12 sm:py-16 lg:py-20 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center text-green-700 mb-8 sm:mb-12">
            Our Programs
          </h2>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Basic Nursing Card -->
            <article class="bg-white p-6 sm:p-8 rounded-xl shadow-md hover:shadow-lg transition duration-200">
              <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                  <i class="bi bi-hospital text-green-700 text-lg" aria-hidden="true"></i>
                </div>
                <h3 class="font-bold text-lg">Basic Nursing</h3>
              </div>
              <p class="text-gray-600 text-sm leading-relaxed">
                Professional nursing training focused on clinical practice and patient care.
              </p>
            </article>

            <!-- Community Nursing Card -->
            <article class="bg-white p-6 sm:p-8 rounded-xl shadow-md hover:shadow-lg transition duration-200">
              <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                  <i class="bi bi-people text-green-700 text-lg" aria-hidden="true"></i>
                </div>
                <h3 class="font-bold text-lg">Community Nursing</h3>
              </div>
              <p class="text-gray-600 text-sm leading-relaxed">
                Training nurses to provide healthcare services within communities and rural areas.
              </p>
            </article>

            <!-- Midwifery Card -->
            <article class="bg-white p-6 sm:p-8 rounded-xl shadow-md hover:shadow-lg transition duration-200">
              <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                  <i class="bi bi-heart-pulse text-green-700 text-lg" aria-hidden="true"></i>
                </div>
                <h3 class="font-bold text-lg">Midwifery</h3>
              </div>
              <p class="text-gray-600 text-sm leading-relaxed">
                Specialized training in maternal healthcare and childbirth.
              </p>
            </article>
          </div>
        </div>
      </section>

      <!-- ================= WHY CHOOSE US ================= -->
      <section class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center text-green-700 mb-8 sm:mb-12">
            Why Choose FACONS
          </h2>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
            <!-- Feature 1 -->
            <article class="text-center">
              <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 flex-shrink-0">
                <i class="bi bi-mortarboard text-green-700 text-2xl" aria-hidden="true"></i>
              </div>
              <h3 class="font-bold text-lg mb-2">Qualified Lecturers</h3>
              <p class="text-gray-600 text-sm">
                Experienced healthcare professionals.
              </p>
            </article>

            <!-- Feature 2 -->
            <article class="text-center">
              <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 flex-shrink-0">
                <i class="bi bi-beaker text-green-700 text-2xl" aria-hidden="true"></i>
              </div>
              <h3 class="font-bold text-lg mb-2">Modern Labs</h3>
              <p class="text-gray-600 text-sm">
                Fully equipped nursing laboratories.
              </p>
            </article>

            <!-- Feature 3 -->
            <article class="text-center">
              <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 flex-shrink-0">
                <i class="bi bi-hospital text-green-700 text-2xl" aria-hidden="true"></i>
              </div>
              <h3 class="font-bold text-lg mb-2">Clinical Practice</h3>
              <p class="text-gray-600 text-sm">
                Hands-on training in hospitals.
              </p>
            </article>

            <!-- Feature 4 -->
            <article class="text-center">
              <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 flex-shrink-0">
                <i class="bi bi-award text-green-700 text-2xl" aria-hidden="true"></i>
              </div>
              <h3 class="font-bold text-lg mb-2">Accredited Programs</h3>
              <p class="text-gray-600 text-sm">
                Recognized by nursing regulatory bodies.
              </p>
            </article>
          </div>
        </div>
      </section>

      <!-- ================= NEWS ================= -->
      <section class="py-12 sm:py-16 lg:py-20 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center text-green-700 mb-8 sm:mb-12">
            Latest News
          </h2>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- News Card 1 -->
            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-200">
              <img src="{{ asset('images/admission.png') }}" alt="Admission announcement" class="w-full h-48 sm:h-56 object-cover">
              <div class="p-6">
                <h3 class="font-bold text-lg mb-2">Admission Open for 2026</h3>
                <p class="text-gray-600 text-sm">
                  Applications are now open for the new academic session.
                </p>
              </div>
            </article>

            <!-- News Card 2 -->
            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-200">
              <img src="{{ asset('images/train.png') }}" alt="Clinical training program" class="w-full h-48 sm:h-56 object-cover">
              <div class="p-6">
                <h3 class="font-bold text-lg mb-2">Clinical Training Program</h3>
                <p class="text-gray-600 text-sm">
                  Students undergo intensive hospital training.
                </p>
              </div>
            </article>

            <!-- News Card 3 -->
            <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-200">
              <img src="{{ asset('images/outreach.png') }}" alt="Community health outreach" class="w-full h-48 sm:h-56 object-cover">
              <div class="p-6">
                <h3 class="font-bold text-lg mb-2">Community Health Outreach</h3>
                <p class="text-gray-600 text-sm">
                  FACONS students participate in community healthcare programs.
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- ================= CALL TO ACTION ================= -->
      <section class="py-12 sm:py-16 lg:py-20 bg-green-700 text-white text-center">
        <div class="container mx-auto px-4 sm:px-6">
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4 sm:mb-8">
            Start Your Nursing Career Today
          </h2>
          <p class="max-w-2xl mx-auto text-base sm:text-lg text-green-100 mb-6 sm:mb-8">
            Join FACONS and become part of a legacy of excellence in nursing education.
          </p>
          <a href="#" class="inline-flex items-center gap-2 bg-yellow-400 hover:bg-yellow-300 text-black px-6 sm:px-8 py-3 rounded-lg font-bold transition duration-200 text-sm sm:text-base">
            <i class="bi bi-arrow-right" aria-hidden="true"></i>
            Apply for Admission
          </a>
        </div>
      </section>

      <!-- ================= PORTAL ACCESS ================= -->
      <section class="py-16 sm:py-20 lg:py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
          <div class="text-center mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 sm:mb-4">
              Access Your Portal
            </h2>
            <p class="max-w-2xl mx-auto text-base sm:text-lg text-gray-600">
              Secure login portals for students, lecturers, and administrators to manage academics, grades, and institutional operations.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            <!-- Student Portal -->
            <div class="bg-gradient-to-br from-green-50 to-emerald-50 border-2 border-green-200 rounded-xl p-8 hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
              <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-5">
                <i class="bi bi-backpack text-green-700 text-2xl"></i>
              </div>
              <h3 class="text-xl sm:text-2xl font-bold text-green-900 mb-3">Student Portal</h3>
              <p class="text-gray-600 mb-6">
                Access your courses, view grades, submit assignments, and track your academic progress.
              </p>
              <div class="space-y-2 mb-6 text-sm text-gray-600">
                <p class="flex items-center gap-2"><i class="bi bi-check-circle text-green-600"></i> View enrolled courses</p>
                <p class="flex items-center gap-2"><i class="bi bi-check-circle text-green-600"></i> Check grades and results</p>
                <p class="flex items-center gap-2"><i class="bi bi-check-circle text-green-600"></i> Download materials</p>
              </div>
              <a href="{{ route('student.login') }}" class="inline-flex items-center gap-2 w-full justify-center bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-lg transition duration-200">
                <i class="bi bi-box-arrow-in-right"></i>
                Student Login
              </a>
            </div>

            <!-- Lecturer Portal -->
            <div class="bg-gradient-to-br from-purple-50 to-pink-50 border-2 border-purple-200 rounded-xl p-8 hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
              <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center mb-5">
                <i class="bi bi-mortarboard text-purple-700 text-2xl"></i>
              </div>
              <h3 class="text-xl sm:text-2xl font-bold text-purple-900 mb-3">Lecturer Portal</h3>
              <p class="text-gray-600 mb-6">
                Manage your courses, grade assignments, track student progress, and communicate with students.
              </p>
              <div class="space-y-2 mb-6 text-sm text-gray-600">
                <p class="flex items-center gap-2"><i class="bi bi-check-circle text-purple-600"></i> Manage class roster</p>
                <p class="flex items-center gap-2"><i class="bi bi-check-circle text-purple-600"></i> Record grades & feedback</p>
                <p class="flex items-center gap-2"><i class="bi bi-check-circle text-purple-600"></i> Upload course materials</p>
              </div>
              <a href="{{ route('lecturer.login') }}" class="inline-flex items-center gap-2 w-full justify-center bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 rounded-lg transition duration-200">
                <i class="bi bi-box-arrow-in-right"></i>
                Lecturer Login
              </a>
            </div>

            <!-- Admin Portal -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl p-8 hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
              <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-5">
                <i class="bi bi-shield-lock text-blue-700 text-2xl"></i>
              </div>
              <h3 class="text-xl sm:text-2xl font-bold text-blue-900 mb-3">Admin Portal</h3>
              <p class="text-gray-600 mb-6">
                Manage users, monitor system performance, configure settings, and generate institutional reports.
              </p>
              <div class="space-y-2 mb-6 text-sm text-gray-600">
                <p class="flex items-center gap-2"><i class="bi bi-check-circle text-blue-600"></i> User management</p>
                <p class="flex items-center gap-2"><i class="bi bi-check-circle text-blue-600"></i> System analytics</p>
                <p class="flex items-center gap-2"><i class="bi bi-check-circle text-blue-600"></i> Institution settings</p>
              </div>
              <a href="{{ route('admin.login') }}" class="inline-flex items-center gap-2 w-full justify-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition duration-200">
                <i class="bi bi-box-arrow-in-right"></i>
                Admin Login
              </a>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-gray-900 text-gray-300 py-8 sm:py-10">
      <div class="container mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 lg:gap-10">

          <!-- About Column -->
          <div>
            <h3 class="font-bold text-white mb-3 text-lg">FACONS</h3>
            <p class="text-sm text-gray-400 leading-relaxed">
              Fatima College of Nursing Science Sifawa<br>
              Sokoto State, Nigeria
            </p>
          </div>

          <!-- Quick Links Column -->
          <div>
            <h3 class="font-bold text-white mb-3 text-lg">Quick Links</h3>
            <ul class="space-y-2 text-sm">
              <li><a href="#admissions" class="text-gray-400 hover:text-white transition">Admissions</a></li>
              <li><a href="#programs" class="text-gray-400 hover:text-white transition">Programs</a></li>
              <li><a href="#campus" class="text-gray-400 hover:text-white transition">Campus</a></li>
              <li><a href="#contact" class="text-gray-400 hover:text-white transition">Contact</a></li>
            </ul>
          </div>

          <!-- Contact Column -->
          <div>
            <h3 class="font-bold text-white mb-3 text-lg">Contact</h3>
            <p class="text-sm text-gray-400">
              <span class="flex items-center gap-2 mb-2">
                <i class="bi bi-envelope-at flex-shrink-0" aria-hidden="true"></i>
                <a href="mailto:info@facons.edu.ng" class="hover:text-white transition">info@facons.edu.ng</a>
              </span>
              <span class="flex items-center gap-2">
                <i class="bi bi-telephone flex-shrink-0" aria-hidden="true"></i>
                <a href="tel:+234" class="hover:text-white transition">+234 XXX XXX XXXX</a>
              </span>
            </p>
          </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-800 mt-8 pt-6 text-center text-sm text-gray-400">
          <p>&copy; 2026 Fatima College of Nursing Science Sifawa. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script>
      const navbar = document.getElementById("navbar");
      const menuBtn = document.getElementById("menuBtn");
      const mobileMenu = document.getElementById("mobileMenu");

      // Sticky navbar effect
      window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
          navbar.classList.add("shadow-lg");
        } else {
          navbar.classList.remove("shadow-lg");
        }
      });

      // Mobile menu toggle
      menuBtn.addEventListener("click", () => {
        const isOpen = !mobileMenu.classList.contains("hidden");
        mobileMenu.classList.toggle("hidden");
        menuBtn.classList.toggle("open");
        menuBtn.setAttribute("aria-expanded", isOpen ? "false" : "true");
      });

      // Close menu when a link is clicked
      document.querySelectorAll("#mobileMenu a").forEach(link => {
        link.addEventListener("click", () => {
          mobileMenu.classList.add("hidden");
          menuBtn.classList.remove("open");
          menuBtn.setAttribute("aria-expanded", "false");
        });
      });

      // Close menu when clicking outside
      document.addEventListener("click", (e) => {
        if (!navbar.contains(e.target)) {
          mobileMenu.classList.add("hidden");
          menuBtn.classList.remove("open");
          menuBtn.setAttribute("aria-expanded", "false");
        }
      });
    </script>
  </body>
</html>


<a href="#" class="flex items-center gap-2 hover:text-green-700">

<i class="bi bi-info-circle"></i>
About

</a>



<!-- PROGRAMS DROPDOWN -->
<div class="relative group">

<button class="flex items-center gap-2 hover:text-green-700">

<i class="bi bi-mortarboard"></i>
Programs
<i class="bi bi-chevron-down text-sm"></i>

</button>


<!-- MEGA MENU -->
<div class="absolute left-0 top-8 hidden group-hover:block bg-white shadow-xl rounded-xl p-8 w-[600px]">

<div class="grid grid-cols-2 gap-8">

<div>

<h3 class="font-semibold text-green-700 mb-3">
Nursing Programs
</h3>

<ul class="space-y-2 text-gray-600">

<li class="flex items-center gap-2">
<i class="bi bi-hospital"></i>
<a href="#" class="hover:text-green-700">Basic Nursing</a>
</li>

<li class="flex items-center gap-2">
<i class="bi bi-heart-pulse"></i>
<a href="#" class="hover:text-green-700">Midwifery</a>
</li>

<li class="flex items-center gap-2">
<i class="bi bi-clipboard2-pulse"></i>
<a href="#" class="hover:text-green-700">Post Basic Nursing</a>
</li>

</ul>

</div>

<div>

<h3 class="font-semibold text-green-700 mb-3">
Professional Training
</h3>

<ul class="space-y-2 text-gray-600">

<li class="flex items-center gap-2">
<i class="bi bi-people"></i>
<a href="#" class="hover:text-green-700">Community Nursing</a>
</li>

<li class="flex items-center gap-2">
<i class="bi bi-journal-medical"></i>
<a href="#" class="hover:text-green-700">Clinical Training</a>
</li>

<li class="flex items-center gap-2">
<i class="bi bi-graph-up"></i>
<a href="#" class="hover:text-green-700">Research Programs</a>
</li>

</ul>

</div>

</div>

</div>

</div>



<a href="#" class="flex items-center gap-2 hover:text-green-700">

<i class="bi bi-file-earmark-text"></i>
Admissions

</a>


<a href="#" class="flex items-center gap-2 hover:text-green-700">

<i class="bi bi-building"></i>
Campus

</a>


<a href="#" class="flex items-center gap-2 hover:text-green-700">

<i class="bi bi-envelope"></i>
Contact

</a>

</nav>



<!-- APPLY BUTTON -->
<a href="#" class="hidden lg:flex items-center gap-2 bg-yellow-400 hover:bg-yellow-300 px-6 py-2 rounded-full font-semibold">

<i class="bi bi-send"></i>
Apply Now

</a>



<!-- HAMBURGER -->
<button id="menuBtn" class="lg:hidden text-2xl">

<i class="bi bi-list"></i>

</button>

</div>
</div>



<!-- MOBILE MENU -->
<div id="mobileMenu" class="hidden lg:hidden bg-white shadow-lg">

<nav class="flex flex-col p-6 gap-4 font-medium">

<a href="#" class="flex items-center gap-3">
<i class="bi bi-house"></i> Home
</a>

<a href="#" class="flex items-center gap-3">
<i class="bi bi-info-circle"></i> About
</a>

<a href="#" class="flex items-center gap-3">
<i class="bi bi-mortarboard"></i> Programs
</a>

<a href="#" class="flex items-center gap-3">
<i class="bi bi-file-earmark-text"></i> Admissions
</a>

<a href="#" class="flex items-center gap-3">
<i class="bi bi-building"></i> Campus
</a>

<a href="#" class="flex items-center gap-3">
<i class="bi bi-envelope"></i> Contact
</a>

<a href="#" class="flex items-center justify-center gap-2 bg-yellow-400 px-5 py-2 rounded-lg font-semibold">

<i class="bi bi-send"></i>
Apply Now

</a>

</nav>

</div>

</header>



<!-- ================= HERO ================= -->

<section class="relative h-screen bg-cover bg-center flex items-center p-8"
style="background-image:url('/images/bg.png')">

<div class="absolute inset-0 bg-gradient-to-r from-green-900/80 via-green-900/60 to-transparent"></div>

<div class="relative container mx-auto px-6 text-white">

<h1 class="text-5xl font-bold leading-tight mb-4">
<br>
<br>
Welcome to<br>  
<span class="text-yellow-400">

Fatima College <br>of Nursing Science Sifawa

</span>

</h1>

<div class="bg-green-600 inline-block px-5 py-2 rounded-full mb-5">

Learning for Service

</div>

<p class="max-w-xl text-lg mb-8">

Dedicated to excellence in nursing education, preparing competent
healthcare professionals with compassion and clinical expertise.

</p>

<div class="flex gap-4">

<a href="#" class="bg-green-600 px-6 py-3 rounded-lg font-semibold hover:bg-green-500">
Explore Programs
</a>

<a href="#" class="bg-yellow-500 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400">
Apply Now
</a>

</div>

</div>

</section>



<!-- ================= ABOUT ================= -->

<section class="py-20 bg-white">

<div class="container mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

<img src="{{ asset('images/about.png') }}" class="rounded-xl shadow-lg">

<div>

<h2 class="text-3xl font-bold text-green-700 mb-4">

About FACONS

</h2>

<p class="text-gray-600 mb-4">

Fatima College of Nursing Science Sifawa is committed to producing
highly skilled and compassionate nurses equipped with modern
healthcare knowledge and professional ethics.

</p>

<a href="#" class="text-green-700 font-semibold">

Learn More →

</a>

</div>

</div>

</section>



<!-- ================= PROGRAMS ================= -->

<section class="py-20 bg-gray-100">

<div class="container mx-auto px-6">

<h2 class="text-3xl font-bold text-center text-green-700 mb-12">

Our Programs

</h2>

<div class="grid md:grid-cols-3 gap-8">

<div class="bg-white p-6 rounded-xl shadow">

<h3 class="font-bold text-lg mb-2">

Basic Nursing

</h3>

<p class="text-gray-600">

Professional nursing training focused on clinical practice
and patient care.

</p>

</div>

<div class="bg-white p-6 rounded-xl shadow">

<h3 class="font-bold text-lg mb-2">

Community Nursing

</h3>

<p class="text-gray-600">

Training nurses to provide healthcare services within
communities and rural areas.

</p>

</div>

<div class="bg-white p-6 rounded-xl shadow">

<h3 class="font-bold text-lg mb-2">

Midwifery

</h3>

<p class="text-gray-600">

Specialized training in maternal healthcare and childbirth.

</p>

</div>

</div>

</div>

</section>



<!-- ================= WHY CHOOSE US ================= -->

<section class="py-20 bg-white">

<div class="container mx-auto px-6">

<h2 class="text-3xl font-bold text-center text-green-700 mb-12">

Why Choose FACONS

</h2>

<div class="grid md:grid-cols-4 gap-8 text-center">

<div>

<h3 class="font-bold text-xl">Qualified Lecturers</h3>

<p class="text-gray-600">
Experienced healthcare professionals.
</p>

</div>

<div>

<h3 class="font-bold text-xl">Modern Labs</h3>

<p class="text-gray-600">
Fully equipped nursing laboratories.
</p>

</div>

<div>

<h3 class="font-bold text-xl">Clinical Practice</h3>

<p class="text-gray-600">
Hands-on training in hospitals.
</p>

</div>

<div>

<h3 class="font-bold text-xl">Accredited Programs</h3>

<p class="text-gray-600">
Recognized by nursing regulatory bodies.
</p>

</div>

</div>

</div>

</section>



<!-- ================= NEWS ================= -->

<section class="py-20 bg-gray-100">

<div class="container mx-auto px-6">

<h2 class="text-3xl font-bold text-center text-green-700 mb-12">

Latest News

</h2>

<div class="grid md:grid-cols-3 gap-8">

<div class="bg-white rounded-xl shadow overflow-hidden">

<img src="{{ asset('images/admission.png') }}" class="w-full h-auto">

<div class="p-6">

<h3 class="font-bold mb-2">
Admission Open for 2026
</h3>

<p class="text-gray-600">
Applications are now open for the new academic session.
</p>

</div>

</div>

<div class="bg-white rounded-xl shadow overflow-hidden">

<img src="{{ asset('images/train.png') }}" class="w-full h-auto">

<div class="p-6">

<h3 class="font-bold mb-2">
Clinical Training Program
</h3>

<p class="text-gray-600">
Students undergo intensive hospital training.
</p>

</div>

</div>

<div class="bg-white rounded-xl shadow overflow-hidden">

<img src="{{ asset('images/outreach.png') }}" class="w-full h-auto">

<div class="p-6">

<h3 class="font-bold mb-2">
Community Health Outreach
</h3>

<p class="text-gray-600">
FACONS students participate in community healthcare programs.
</p>

</div>

</div>

</div>

</div>

</section>



<!-- ================= CALL TO ACTION ================= -->

<section class="py-20 bg-green-700 text-white text-center">

<h2 class="text-3xl font-bold mb-6">

Start Your Nursing Career Today

</h2>

<a href="#" class="bg-yellow-400 text-black px-8 py-3 rounded-lg font-bold">

Apply for Admission

</a>

</section>



<!-- ================= FOOTER ================= -->

<footer class="bg-gray-900 text-gray-300 py-10">

<div class="container mx-auto px-6 grid md:grid-cols-3 gap-10">

<div>

<h3 class="font-bold text-white mb-3">

FACONS

</h3>

<p>

Fatima College of Nursing Science Sifawa  
Sokoto State Nigeria

</p>

</div>

<div>

<h3 class="font-bold text-white mb-3">

Quick Links

</h3>

<ul class="space-y-2">

<li>Admissions</li>
<li>Programs</li>
<li>Campus</li>
<li>Contact</li>

</ul>

</div>

<div>

<h3 class="font-bold text-white mb-3">

Contact

</h3>

<p>

Email: info@facons.edu.ng  
Phone: +234 XXX XXX XXXX

</p>

</div>

</div>

</footer>

<script>

const navbar = document.getElementById("navbar")
const menuBtn = document.getElementById("menuBtn")
const mobileMenu = document.getElementById("mobileMenu")

/* Sticky Scroll Effect */

window.addEventListener("scroll", () => {

if (window.scrollY > 50) {

navbar.classList.add("shadow-lg")

} else {

navbar.classList.remove("shadow-lg")

}

})


/* Mobile Toggle */

menuBtn.addEventListener("click", () => {

mobileMenu.classList.toggle("hidden")

menuBtn.classList.toggle("open")

})

</script>
<script>

const menuBtn = document.getElementById("menuBtn")
const mobileMenu = document.getElementById("mobileMenu")

menuBtn.addEventListener("click", () => {

mobileMenu.classList.toggle("hidden")

})

</script>
</body>
</html>