@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-primary">
                Academic Calendar
            </h2>

            <p class="text-muted mb-0">
                School of Nursing Academic Activities Schedule
            </p>
        </div>

        <button class="btn btn-primary">
            Download PDF
        </button>
    </div>

    <!-- Session Information -->
    <div class="card shadow-sm border-0 rounded-4 mb-4">
        <div class="card-body">
            <div class="row">

                <div class="col-md-4 mb-3">
                    <h6 class="text-muted">Academic Session</h6>
                    <h5 class="fw-bold">2025/2026</h5>
                </div>

                <div class="col-md-4 mb-3">
                    <h6 class="text-muted">Semester</h6>
                    <h5 class="fw-bold">First Semester</h5>
                </div>

                <div class="col-md-4 mb-3">
                    <h6 class="text-muted">Programme</h6>
                    <h5 class="fw-bold">Nursing Science</h5>
                </div>

            </div>
        </div>
    </div>

    <!-- Academic Calendar Table -->
    <div class="card shadow-sm border-0 rounded-4">

        <div class="card-header bg-primary text-white py-3 rounded-top-4">
            <h5 class="mb-0">
                Academic Activities
            </h5>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-primary">
                    <tr>
                        <th>S/N</th>
                        <th>Activity</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Registration for Fresh Students</td>
                        <td>01 Sept 2025</td>
                        <td>14 Sept 2025</td>
                        <td>
                            <span class="badge bg-success">
                                Completed
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Registration for Returning Students</td>
                        <td>08 Sept 2025</td>
                        <td>20 Sept 2025</td>
                        <td>
                            <span class="badge bg-success">
                                Completed
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Lectures Begin</td>
                        <td>22 Sept 2025</td>
                        <td>22 Sept 2025</td>
                        <td>
                            <span class="badge bg-primary">
                                Active
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Clinical Practical Training</td>
                        <td>15 Oct 2025</td>
                        <td>20 Nov 2025</td>
                        <td>
                            <span class="badge bg-warning text-dark">
                                Upcoming
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Mid-Semester Examination</td>
                        <td>10 Nov 2025</td>
                        <td>14 Nov 2025</td>
                        <td>
                            <span class="badge bg-warning text-dark">
                                Upcoming
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>Revision Week</td>
                        <td>05 Jan 2026</td>
                        <td>09 Jan 2026</td>
                        <td>
                            <span class="badge bg-secondary">
                                Pending
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>First Semester Examination</td>
                        <td>12 Jan 2026</td>
                        <td>23 Jan 2026</td>
                        <td>
                            <span class="badge bg-danger">
                                Important
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>Semester Break</td>
                        <td>26 Jan 2026</td>
                        <td>15 Feb 2026</td>
                        <td>
                            <span class="badge bg-info text-dark">
                                Holiday
                            </span>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>
    </div>

    <!-- Notes Section -->
    <div class="card shadow-sm border-0 rounded-4 mt-4">

        <div class="card-header bg-light">
            <h5 class="mb-0 text-primary">
                Important Notes
            </h5>
        </div>

        <div class="card-body">

            <ul class="mb-0">
                <li>All students must complete course registration before lectures commence.</li>
                <li>Clinical practical attendance is compulsory for all nursing students.</li>
                <li>Students with outstanding payments may not sit for examinations.</li>
                <li>Changes in dates will be communicated through the student portal.</li>
            </ul>

        </div>

    </div>

</div>

@endsection
