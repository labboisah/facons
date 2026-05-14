@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- Welcome Section -->
    <div class="card border-0 shadow-sm rounded-4 mb-4 bg-primary text-white overflow-hidden">

        <div class="card-body p-4">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <h2 class="fw-bold mb-2">
                        Welcome Back,  {{ auth()->user()->name }}👋
                    </h2>

                    <p class="mb-0 opacity-75">
                        Manage your academic activities, payments, course registration and results from your nursing student dashboard.
                    </p>

                </div>

                <div class="col-md-4 text-md-end mt-3 mt-md-0">

                    <span class="badge bg-light text-primary px-4 py-2 fs-6">
                        300 Level Student
                    </span>

                </div>

            </div>

        </div>

    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">

        <div class="col-md-3 mb-3">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    <div class="mb-3">
                        <i class="bi bi-book-fill fs-1 text-primary"></i>
                    </div>

                    <h6 class="text-muted">Registered Courses</h6>
                    <h2 class="fw-bold text-primary">8</h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    <div class="mb-3">
                        <i class="bi bi-cash-stack fs-1 text-success"></i>
                    </div>

                    <h6 class="text-muted">Outstanding Fees</h6>
                    <h2 class="fw-bold text-success">₦70k</h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    <div class="mb-3">
                        <i class="bi bi-award-fill fs-1 text-warning"></i>
                    </div>

                    <h6 class="text-muted">Current CGPA</h6>
                    <h2 class="fw-bold text-warning">4.10</h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-3">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body text-center p-4">

                    <div class="mb-3">
                        <i class="bi bi-calendar-check-fill fs-1 text-danger"></i>
                    </div>

                    <h6 class="text-muted">Upcoming Events</h6>
                    <h2 class="fw-bold text-danger">5</h2>

                </div>

            </div>

        </div>

    </div>

    <!-- Quick Access -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-light py-3">
            <h5 class="mb-0 text-primary">
                Quick Access
            </h5>
        </div>

        <div class="card-body">

            <div class="row g-3">

                <div class="col-md-3 col-6">
                    <a href="{{ route('student.courses-registration') }}" class="text-decoration-none">

                        <div class="card border-0 shadow-sm rounded-4 text-center p-4 h-100 dashboard-link">

                            <div class="mb-3">
                                <i class="bi bi-journal-text fs-1 text-primary"></i>
                            </div>

                            <h6 class="fw-bold text-dark">
                                Course Registration
                            </h6>

                        </div>

                    </a>
                </div>

                <div class="col-md-3 col-6">
                    <a href="{{ route('student.check-results') }}" class="text-decoration-none">

                        <div class="card border-0 shadow-sm rounded-4 text-center p-4 h-100 dashboard-link">

                            <div class="mb-3">
                                <i class="bi bi-file-earmark-text-fill fs-1 text-success"></i>
                            </div>

                            <h6 class="fw-bold text-dark">
                                Check Results
                            </h6>

                        </div>

                    </a>
                </div>

                <div class="col-md-3 col-6">
                    <a href="{{ route('student.bills') }}" class="text-decoration-none">

                        <div class="card border-0 shadow-sm rounded-4 text-center p-4 h-100 dashboard-link">

                            <div class="mb-3">
                                <i class="bi bi-credit-card-fill fs-1 text-danger"></i>
                            </div>

                            <h6 class="fw-bold text-dark">
                                Bills & Payments
                            </h6>

                        </div>

                    </a>
                </div>

                <div class="col-md-3 col-6">
                    <a href="{{ route('student.e-library') }}" class="text-decoration-none">

                        <div class="card border-0 shadow-sm rounded-4 text-center p-4 h-100 dashboard-link">

                            <div class="mb-3">
                                <i class="bi bi-book-half fs-1 text-warning"></i>
                            </div>

                            <h6 class="fw-bold text-dark">
                                E-Library
                            </h6>

                        </div>

                    </a>
                </div>

            </div>

        </div>

    </div>

    <!-- Recent Activities & Notifications -->
    <div class="row">

        <!-- Recent Activities -->
        <div class="col-lg-8 mb-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-header bg-light py-3 d-flex justify-content-between align-items-center">

                    <h5 class="mb-0 text-primary">
                        Recent Activities
                    </h5>

                    <button class="btn btn-sm btn-outline-primary">
                        View All
                    </button>

                </div>

                <div class="card-body">

                    <div class="border-bottom pb-3 mb-3">
                        <h6 class="fw-bold mb-1">
                            Course Registration Completed
                        </h6>

                        <small class="text-muted">
                            You successfully registered your semester courses.
                        </small>
                    </div>

                    <div class="border-bottom pb-3 mb-3">
                        <h6 class="fw-bold mb-1">
                            School Fees Payment Updated
                        </h6>

                        <small class="text-muted">
                            ₦100,000 payment was received successfully.
                        </small>
                    </div>

                    <div class="border-bottom pb-3 mb-3">
                        <h6 class="fw-bold mb-1">
                            New Lecture Note Uploaded
                        </h6>

                        <small class="text-muted">
                            Community Health Nursing material uploaded to E-Library.
                        </small>
                    </div>

                    <div>
                        <h6 class="fw-bold mb-1">
                            Examination Timetable Released
                        </h6>

                        <small class="text-muted">
                            First semester examination timetable is now available.
                        </small>
                    </div>

                </div>

            </div>

        </div>

        <!-- Notifications -->
        <div class="col-lg-4 mb-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-header bg-light py-3">
                    <h5 class="mb-0 text-primary">
                        Notifications
                    </h5>
                </div>

                <div class="card-body">

                    <div class="alert alert-warning shadow-sm">
                        Outstanding school fees balance due before examination.
                    </div>

                    <div class="alert alert-success shadow-sm">
                        Clinical posting schedule has been updated.
                    </div>

                    <div class="alert alert-info shadow-sm">
                        Mid-semester test begins next week.
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<style>
.dashboard-link {
    transition: 0.3s;
}

.dashboard-link:hover {
    transform: translateY(-5px);
}
</style>

@endsection