<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Nursing Student Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body{
      background:#f4f7fb;
    }

    .sidebar{
      height:100vh;
      background: #fff;;
      color:black;
      position:fixed;
      width:250px;
    }

    .sidebar a{
      color:black;
      text-decoration:none;
      display:block;
      padding:12px 20px;
      transition:0.3s;
    }

    .sidebar a:hover{
      background:rgba(134, 185, 109, 0.2);
      padding-left:25px;
    }

    .main-content{
      margin-left:250px;
      padding:20px;
    }

    .card-box{
      border:none;
      border-radius:15px;
      color:white;
    }

    .welcome-box{
      background:linear-gradient(to right,#b7df50,#ebf2bb);
      color:white;
      border-radius:20px;
      padding:30px;
    }

    .table{
      background:white;
      border-radius:10px;
      overflow:hidden;
    }

    .profile-img{
      width:45px;
      height:45px;
      border-radius:50%;
      object-fit:cover;
    }

  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar p-3">
    <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
            <img src="{{ asset('images/logo.png') }}" alt="FACONS Logo" class="w-10 sm:w-12 h-auto">
            <h1 class="font-bold text-green-700 text-base sm:text-lg">FACONS</h1>
          </div>
    <div class="border-top my-3"></div>

    <a href="#"><i class="bi bi-house-door-fill me-2"></i> Dashboard</a>
    <a href="{{ route('student.bills') }}"><i class="bi bi-file-earmark-text me-2"></i>Bills & Payment</a>
    <a href="{{ route('student.courses-registration') }} "><i class="bi bi-journal-medical me-2"></i> Courses Registration</a>
    <a href="{{ route('student.academic-calendar') }}"><i class="bi bi-calendar me-2"></i> Academic Calendar</a>
    <a href="{{ route('student.check-results') }}"><i class="bi bi-bar-chart-fill me-2"></i>Check Results</a>
    <a href="{{ route('student.e-library') }} "><i class="bi bi-laptop me-2"></i>E-Library</a>
    <a href="{{ route('student.manage-profile') }}"><i class="bi bi-person-fill me-2"></i> Manage Profile</a>
    <a href="{{ route('student.logout') }}"><i class="bi bi-box-arrow-right me-2"></i> Logout 
    </a>
  </div>

  <!-- Main Content -->
  <div class="main-content">

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-white shadow-sm rounded px-3 mb-4">
      <div>
        <h4 class="mb-0">Student Dashboard</h4>
      </div>

      <div class="d-flex align-items-center">
        <img src="https://i.pravatar.cc/100" class="profile-img me-2">
        <strong>{{ Auth::user()->name }}</strong>
      </div>
    </nav>

    <!-- Welcome -->
   

        @yield('content')
     
    </div>

  </div>

</body>
</html>