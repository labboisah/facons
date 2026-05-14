@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold text-primary">
                Result Checker
            </h2>

            <p class="text-muted mb-0">
                Check and print semester examination results
            </p>
        </div>

        <button class="btn btn-success shadow-sm">
            Print Result
        </button>

    </div>

    <!-- Result Filter Card -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-primary text-white py-3 rounded-top-4">
            <h5 class="mb-0">
                Result Information
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
                            <option>2023/2024</option>
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

                    <div class="col-md-4 mb-3 d-flex align-items-end">
                        <button class="btn btn-primary w-100 shadow-sm">
                            Check Result
                        </button>
                    </div>

                </div>

            </form>

        </div>

    </div>

    <!-- Student Information -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-light py-3">
            <h5 class="mb-0 text-primary">
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

    <!-- Result Table -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-primary text-white py-3 rounded-top-4">
            <h5 class="mb-0">
                Semester Results
            </h5>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover align-middle text-center">

                <thead class="table-primary">
                    <tr>
                        <th>S/N</th>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Unit</th>
                        <th>Score</th>
                        <th>Grade</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>NSC301</td>
                        <td>Medical Surgical Nursing</td>
                        <td>3</td>
                        <td>78</td>
                        <td>A</td>
                        <td>
                            <span class="badge bg-success">
                                Passed
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>NSC302</td>
                        <td>Community Health Nursing</td>
                        <td>2</td>
                        <td>69</td>
                        <td>B</td>
                        <td>
                            <span class="badge bg-success">
                                Passed
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>NSC303</td>
                        <td>Pharmacology</td>
                        <td>2</td>
                        <td>64</td>
                        <td>B</td>
                        <td>
                            <span class="badge bg-success">
                                Passed
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>NSC304</td>
                        <td>Mental Health Nursing</td>
                        <td>3</td>
                        <td>55</td>
                        <td>C</td>
                        <td>
                            <span class="badge bg-warning text-dark">
                                Fair
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>NSC305</td>
                        <td>Clinical Practice</td>
                        <td>4</td>
                        <td>82</td>
                        <td>A</td>
                        <td>
                            <span class="badge bg-success">
                                Passed
                            </span>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

    <!-- GPA Summary -->
    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-3">
                <h6 class="text-muted">Total Units</h6>
                <h3 class="fw-bold text-primary">14</h3>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-3">
                <h6 class="text-muted">Units Passed</h6>
                <h3 class="fw-bold text-success">14</h3>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-3">
                <h6 class="text-muted">Semester GPA</h6>
                <h3 class="fw-bold text-warning">4.25</h3>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-3">
                <h6 class="text-muted">CGPA</h6>
                <h3 class="fw-bold text-danger">4.10</h3>
            </div>
        </div>

    </div>

</div>

@endsection
