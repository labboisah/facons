@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

        <div>
            <h2 class="fw-bold text-primary">
                Bills & Payment
            </h2>

            <p class="text-muted mb-0">
                Manage school fees, acceptance fees and other nursing student payments
            </p>
        </div>

        <button class="btn btn-success shadow-sm">
            Print Receipt
        </button>

    </div>

    <!-- Student Information -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-green-700 text-white py-3 rounded-top-4">
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

    <!-- Payment Summary Cards -->
    <div class="row mb-4">

        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-4 bg-primary text-white">
                <h6>Total Bill</h6>
                <h2 class="fw-bold">₦250,000</h2>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-4 bg-success text-white">
                <h6>Amount Paid</h6>
                <h2 class="fw-bold">₦180,000</h2>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card border-0 shadow-sm rounded-4 text-center p-4 bg-danger text-white">
                <h6>Outstanding Balance</h6>
                <h2 class="fw-bold">₦70,000</h2>
            </div>
        </div>

    </div>

    <!-- Bills Table -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-green-700 text-white py-3 rounded-top-4 d-flex justify-content-between align-items-center">

            <h5 class="mb-0">
                Bills Information
            </h5>

            <span class="badge bg-light text-green-700 px-4 py-2 fs-6">
                2025/2026 Session
            </span>

        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover align-middle text-center">

                <thead class="table-primary">
                    <tr>
                        <th>S/N</th>
                        <th>Payment Type</th>
                        <th>Amount</th>
                        <th>Amount Paid</th>
                        <th>Balance</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>School Fees</td>
                        <td>₦150,000</td>
                        <td>₦100,000</td>
                        <td>₦50,000</td>
                        <td>
                            <span class="badge bg-warning text-dark">
                                Part Payment
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary">
                                Pay Now
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Clinical Training Fee</td>
                        <td>₦50,000</td>
                        <td>₦50,000</td>
                        <td>₦0</td>
                        <td>
                            <span class="badge bg-success">
                                Paid
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" disabled>
                                Completed
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Library Fee</td>
                        <td>₦20,000</td>
                        <td>₦20,000</td>
                        <td>₦0</td>
                        <td>
                            <span class="badge bg-success">
                                Paid
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-secondary" disabled>
                                Completed
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Examination Fee</td>
                        <td>₦30,000</td>
                        <td>₦0</td>
                        <td>₦30,000</td>
                        <td>
                            <span class="badge bg-danger">
                                Unpaid
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary">
                                Pay Now
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

    <!-- Payment Form -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">

        <div class="card-header bg-light py-3">
            <h5 class="mb-0 text-primary">
                Make Payment
            </h5>
        </div>

        <div class="card-body">

            <form>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">
                            Select Payment Type
                        </label>

                        <select class="form-select">
                            <option>School Fees</option>
                            <option>Clinical Training Fee</option>
                            <option>Library Fee</option>
                            <option>Examination Fee</option>
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">
                            Amount
                        </label>

                        <input
                            type="number"
                            class="form-control"
                            placeholder="Enter amount">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-semibold">
                            Payment Method
                        </label>

                        <select class="form-select">
                            <option>Online Payment</option>
                            <option>Bank Transfer</option>
                            <option>POS</option>
                        </select>
                    </div>

                </div>

                <div class="mt-3 d-flex gap-2">

                    <button class="btn btn-primary shadow-sm">
                        Proceed to Payment
                    </button>

                    <button type="reset" class="btn btn-secondary shadow-sm">
                        Reset
                    </button>

                </div>

            </form>

        </div>

    </div>

    <!-- Payment History -->
    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-header bg-light py-3">
            <h5 class="mb-0 text-primary">
                Payment History
            </h5>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-hover align-middle text-center">

                <thead class="table-primary">
                    <tr>
                        <th>Receipt No</th>
                        <th>Payment Type</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Receipt</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>RCPT2026001</td>
                        <td>School Fees</td>
                        <td>₦100,000</td>
                        <td>12 May 2026</td>
                        <td>
                            <span class="badge bg-success">
                                Successful
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">
                                View
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>RCPT2026002</td>
                        <td>Clinical Training Fee</td>
                        <td>₦50,000</td>
                        <td>10 May 2026</td>
                        <td>
                            <span class="badge bg-success">
                                Successful
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">
                                View
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection