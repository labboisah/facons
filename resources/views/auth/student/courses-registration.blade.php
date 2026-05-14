@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold text-primary">
                Course Registration
            </h2>

            <p class="text-muted mb-0">
                Register semester courses for Nursing students
            </p>
        </div>

        <button class="btn btn-success shadow-sm">
            Print Course Form
        </button>

    </div>

    <!-- Student Information -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-primary text-white py-3 rounded-top-4">
            <h5 class="mb-0">
                Student Information
            </h5>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-3 mb-3">
                    <h6 class="text-muted">Student Name</h6>
                    <h6 class="fw-bold">Maryam Bello</h6>
                </div>

                <div class="col-md-3 mb-3">
                    <h6 class="text-muted">Matric Number</h6>
                    <h6 class="fw-bold">NS2026/001</h6>
                </div>

                <div class="col-md-3 mb-3">
                    <h6 class="text-muted">Department</h6>
                    <h6 class="fw-bold">Nursing Science</h6>
                </div>

                <div class="col-md-3 mb-3">
                    <h6 class="text-muted">Level</h6>
                    <h6 class="fw-bold">300 Level</h6>
                </div>

            </div>

        </div>

    </div>

    <!-- Session Information -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-light py-3">
            <h5 class="mb-0 text-primary">
                Registration Information
            </h5>
        </div>

        <div class="card-body">

            <form>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">
                            Academic Session
                        </label>

                        <select class="form-select">
                            <option>2025/2026</option>
                            <option>2024/2025</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">
                            Semester
                        </label>

                        <select class="form-select">
                            <option>First Semester</option>
                            <option>Second Semester</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">
                            Registration Status
                        </label>

                        <input type="text" class="form-control bg-success text-white fw-bold" value="Open" readonly>
                    </div>

                </div>

            </form>

        </div>

    </div>

    <!-- Courses Table -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-primary text-white py-3 rounded-top-4 d-flex justify-content-between align-items-center">

            <h5 class="mb-0">
                Available Courses
            </h5>

            <span class="badge bg-light text-primary">
                Select Courses
            </span>

        </div>

        <div class="card-body table-responsive">

            <form>

                <table class="table table-bordered table-hover align-middle text-center">

                    <thead class="table-primary">
                        <tr>
                            <th>Select</th>
                            <th>S/N</th>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Unit</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                            <td>1</td>
                            <td>NSC301</td>
                            <td>Medical Surgical Nursing</td>
                            <td>3</td>
                            <td>
                                <span class="badge bg-danger">
                                    Core
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                            <td>2</td>
                            <td>NSC302</td>
                            <td>Community Health Nursing</td>
                            <td>2</td>
                            <td>
                                <span class="badge bg-danger">
                                    Core
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                            <td>3</td>
                            <td>NSC303</td>
                            <td>Pharmacology</td>
                            <td>2</td>
                            <td>
                                <span class="badge bg-danger">
                                    Core
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input">
                            </td>
                            <td>4</td>
                            <td>GST301</td>
                            <td>Entrepreneurship Studies</td>
                            <td>2</td>
                            <td>
                                <span class="badge bg-warning text-dark">
                                    Elective
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input" checked>
                            </td>
                            <td>5</td>
                            <td>NSC304</td>
                            <td>Clinical Practice</td>
                            <td>4</td>
                            <td>
                                <span class="badge bg-danger">
                                    Core
                                </span>
                            </td>
                        </tr>

                    </tbody>

                </table>

                <!-- Registration Summary -->
                <div class="row mt-4">

                    <div class="col-md-4 mb-3">
                        <div class="card bg-primary text-white border-0 shadow-sm rounded-4 text-center p-3">
                            <h6>Total Courses</h6>
                            <h3 class="fw-bold">5</h3>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card bg-success text-white border-0 shadow-sm rounded-4 text-center p-3">
                            <h6>Total Registered Units</h6>
                            <h3 class="fw-bold">13</h3>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card bg-warning border-0 shadow-sm rounded-4 text-center p-3">
                            <h6>Maximum Units Allowed</h6>
                            <h3 class="fw-bold">18</h3>
                        </div>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="mt-4 d-flex gap-2">

                    <button class="btn btn-primary shadow-sm">
                        Submit Registration
                    </button>

                    <button type="reset" class="btn btn-secondary shadow-sm">
                        Reset
                    </button>

                </div>

            </form>

        </div>

    </div>

    <!-- Important Notice -->
    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-header bg-light py-3">
            <h5 class="mb-0 text-primary">
                Important Notice
            </h5>
        </div>

        <div class="card-body">

            <ul class="mb-0">
                <li>All students must complete course registration before the closing date.</li>
                <li>Only students who complete payment can register courses.</li>
                <li>Core courses are compulsory for all nursing students.</li>
                <li>Students are advised to print and keep a copy of their course form.</li>
            </ul>

        </div>

    </div>

</div>

@endsection
