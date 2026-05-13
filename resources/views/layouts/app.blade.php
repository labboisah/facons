<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursing Student Profile</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  

    <style>
        body {
            background-color: #f4f7fc;
        }

        .profile-card {
            border-radius: 15px;
            overflow: hidden;
        }

        .profile-header {
            background: linear-gradient(to right, #3dfd0d, #8acc48);
            color: white;
            padding: 20px;
            text-align: center;
            height: 200px;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid white;
            object-fit: cover;
        }

        .info-label {
            font-weight: bold;
            color: #090d15;
        }

        .sidebar {
            min-height: 100vh;
            background: #d8d9da;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 15px;
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: rgba(148, 236, 89, 0.2);
        }
    </style>
</head>
<body>

<!-- Mobile Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-white d-md-none">
        <div class="container-fluid">
            <div class="offcanvas-header">
            <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
                <img src="{{ asset('images/logo.png') }}" alt="FACONS Logo" class="w-10 sm:w-12 h-auto">
                <h1 class="font-bold text-green-700 text-base sm:text-lg">FACONS</h1>
            </div>
        </div>

        <button class="navbar-toggler bg-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Mobile Sidebar -->
<div class="offcanvas offcanvas-start bg-white text-black" tabindex="-1" id="mobileSidebar">
    <div class="offcanvas-header">
        <div class="offcanvas-header">
          <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
              <img src="{{ asset('images/logo.png') }}" alt="FACONS Logo" class="w-10 sm:w-12 h-auto">
              <h1 class="font-bold text-green-700 text-base sm:text-lg">FACONS</h1>
          </div>
       </div>
       <div class="border-top my-3"></div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body p-0">
        <a href="{{ route('student.dashboard') }}" class="d-block text-black p-3 text-decoration-none"><i class="bi bi-house-door-fill me-2"></i> Dashboard</a>
        <a href="{{ route('student.bills') }}" class="d-block text-black p-3 text-decoration-none"><i class="bi bi-file-earmark-text me-2"></i>Bills & Payment</a>
        <a href="{{ route('student.courses-registration') }} " class="d-block text-black p-3 text-decoration-none"><i class="bi bi-journal-medical me-2"></i> Courses Registration</a>
        <a href="{{ route('student.academic-calendar') }}" class="d-block text-black p-3 text-decoration-none"><i class="bi bi-calendar me-2"></i> Academic Calendar</a>
        <a href="{{ route('student.check-results') }}" class="d-block text-black p-3 text-decoration-none"><i class="bi bi-bar-chart-fill me-2"></i>Check Results</a>
        <a href="{{ route('student.e-library') }} " class="d-block text-black p-3 text-decoration-none"><i class="bi bi-laptop me-2"></i>E-Library</a>
        <a href="{{ route('student.manage-profile') }}" class="d-block text-black p-3 text-decoration-none"><i class="bi bi-person-fill me-2"></i> Manage Profile</a>
        <div class="d-block text-black p-3">
          <form method="POST" action="{{ route('student.logout') }}">
            @csrf
            <button type="submit" class="w-full text-start">
              <i class="bi bi-box-arrow-right me-2"></i> Logout
            </button>
          </form>
        </div> 
    </div>
</div>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar p-0 d-none d-md-block bg-white">
            <div class="offcanvas-header gap-2 sm:gap-3 flex-shrink-0 p-3">
              <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
                <img src="{{ asset('images/logo.png') }}" alt="FACONS Logo" class="w-10 sm:w-12 h-auto">
                <h1 class="font-bold text-green-700 text-base sm:text-lg">FACONS</h1>
              </div>
              <div class="border-top my-3"></div>
            </div>
            <a href="{{ route('student.dashboard') }}" class="d-block text-black p-3 text-decoration-none"><i class="bi bi-house-door-fill me-2"></i> Dashboard</a>
            <a href="{{ route('student.bills') }}" class="d-block text-black p-3 text-decoration-none"><i class="bi bi-file-earmark-text me-2"></i>Bills & Payment</a>
            <a href="{{ route('student.courses-registration') }} " class="d-block text-black p-3 text-decoration-none"><i class="bi bi-journal-medical me-2"></i> Courses Registration</a>
            <a href="{{ route('student.academic-calendar') }}" class="d-block text-black p-3 text-decoration-none"><i class="bi bi-calendar me-2"></i> Academic Calendar</a>
            <a href="{{ route('student.check-results') }}" class="d-block text-black p-3 text-decoration-none"><i class="bi bi-bar-chart-fill me-2"></i>Check Results</a>
            <a href="{{ route('student.e-library') }} " class="d-block text-black p-3 text-decoration-none"><i class="bi bi-laptop me-2"></i>E-Library</a>
            <a href="{{ route('student.manage-profile') }}" class="d-block text-black p-3 text-decoration-none"><i class="bi bi-person-fill me-2"></i> Manage Profile</a>
            <div class="d-block text-black p-3">
              <form method="POST" action="{{ route('student.logout') }}">
                @csrf
                <button type="submit" class="w-full text-start">
                  <i class="bi bi-box-arrow-right me-2"></i> Logout
                </button>
              </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <div class="card shadow profile-card">

                <!-- Profile Header -->
                <div class="profile-header flex flex-col items-center justify-center">
                    <img src="https://via.placeholder.com/120" alt="Student" class="profile-img mb-3 collapsed:hidden">
                    <h2 class="text-xl font-bold">{{ auth()->user()->name }}</h2>
                    <p class="text-gray-600">Student Nurse</p>

                </div>

                <!-- Profile Body -->
                    @yield('content')

                
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

