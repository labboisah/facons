@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

        <div>
            <h2 class="fw-bold text-primary">
                E-Library
            </h2>

            <p class="text-muted mb-0">
                Access nursing books, journals, lecture materials and research resources
            </p>
        </div>

        <button class="btn btn-primary shadow-sm">
            Upload Material
        </button>

    </div>

    <!-- Search & Filter -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-body">

            <form>

                <div class="row align-items-end">

                    <div class="col-md-5 mb-3">
                        <label class="form-label fw-semibold">
                            Search Material
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search books, journals or lecture notes...">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label fw-semibold">
                            Category
                        </label>

                        <select class="form-select">
                            <option>All Categories</option>
                            <option>Nursing Books</option>
                            <option>Medical Journals</option>
                            <option>Lecture Notes</option>
                            <option>Research Materials</option>
                        </select>
                    </div>

                    <div class="col-md-2 mb-3">
                        <label class="form-label fw-semibold">
                            Level
                        </label>

                        <select class="form-select">
                            <option>All Levels</option>
                            <option>100 Level</option>
                            <option>200 Level</option>
                            <option>300 Level</option>
                            <option>400 Level</option>
                        </select>
                    </div>

                    <div class="col-md-2 mb-3">
                        <button class="btn btn-primary w-100 shadow-sm">
                            Search
                        </button>
                    </div>

                </div>

            </form>

        </div>

    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">

        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-3">
                <h6 class="text-muted">Books Available</h6>
                <h3 class="fw-bold text-primary">120</h3>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-3">
                <h6 class="text-muted">Lecture Notes</h6>
                <h3 class="fw-bold text-success">85</h3>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-3">
                <h6 class="text-muted">Research Journals</h6>
                <h3 class="fw-bold text-warning">45</h3>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-3">
                <h6 class="text-muted">Downloads</h6>
                <h3 class="fw-bold text-danger">320</h3>
            </div>
        </div>

    </div>

    <!-- Library Materials -->
    <div class="row">

        <!-- Material Card -->
        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body d-flex flex-column">

                    <div class="d-flex justify-content-between align-items-start mb-3">

                        <div>
                            <h5 class="fw-bold text-primary">
                                Medical Surgical Nursing
                            </h5>

                            <p class="text-muted mb-0">
                                By Dr. John Smith
                            </p>
                        </div>

                        <span class="badge bg-primary">
                            PDF
                        </span>

                    </div>

                    <p class="text-muted flex-grow-1">
                        Comprehensive guide covering surgical and medical nursing procedures for students.
                    </p>

                    <div class="d-flex justify-content-between align-items-center mt-3">

                        <span class="badge bg-success">
                            Nursing Book
                        </span>

                        <div class="d-flex gap-2">

                            <button class="btn btn-outline-primary btn-sm">
                                Preview
                            </button>

                            <button class="btn btn-primary btn-sm">
                                Download
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Material Card -->
        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body d-flex flex-column">

                    <div class="d-flex justify-content-between align-items-start mb-3">

                        <div>
                            <h5 class="fw-bold text-primary">
                                Community Health Nursing
                            </h5>

                            <p class="text-muted mb-0">
                                Nursing Department
                            </p>
                        </div>

                        <span class="badge bg-success">
                            DOC
                        </span>

                    </div>

                    <p class="text-muted flex-grow-1">
                        Lecture note covering community diagnosis, family care and preventive health.
                    </p>

                    <div class="d-flex justify-content-between align-items-center mt-3">

                        <span class="badge bg-warning text-dark">
                            Lecture Note
                        </span>

                        <div class="d-flex gap-2">

                            <button class="btn btn-outline-primary btn-sm">
                                Preview
                            </button>

                            <button class="btn btn-primary btn-sm">
                                Download
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Material Card -->
        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow-sm rounded-4 h-100">

                <div class="card-body d-flex flex-column">

                    <div class="d-flex justify-content-between align-items-start mb-3">

                        <div>
                            <h5 class="fw-bold text-primary">
                                Clinical Pharmacology Journal
                            </h5>

                            <p class="text-muted mb-0">
                                International Nursing Journal
                            </p>
                        </div>

                        <span class="badge bg-danger">
                            Journal
                        </span>

                    </div>

                    <p class="text-muted flex-grow-1">
                        Latest research publication on drug administration and pharmacological safety.
                    </p>

                    <div class="d-flex justify-content-between align-items-center mt-3">

                        <span class="badge bg-info text-dark">
                            Research Journal
                        </span>

                        <div class="d-flex gap-2">

                            <button class="btn btn-outline-primary btn-sm">
                                Preview
                            </button>

                            <button class="btn btn-primary btn-sm">
                                Download
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Recent Uploads -->
    <div class="card border-0 shadow-sm rounded-4 mt-4">

        <div class="card-header bg-light py-3">
            <h5 class="mb-0 text-primary">
                Recent Uploads
            </h5>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-primary">
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Uploaded By</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Mental Health Nursing</td>
                        <td>Lecture Note</td>
                        <td>Dr. Ibrahim Musa</td>
                        <td>12 May 2026</td>
                        <td>
                            <button class="btn btn-sm btn-primary">
                                Download
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Advanced Midwifery</td>
                        <td>Nursing Book</td>
                        <td>Library Admin</td>
                        <td>10 May 2026</td>
                        <td>
                            <button class="btn btn-sm btn-primary">
                                Download
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Nutrition and Dietetics</td>
                        <td>Research Journal</td>
                        <td>Research Unit</td>
                        <td>08 May 2026</td>
                        <td>
                            <button class="btn btn-sm btn-primary">
                                Download
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection