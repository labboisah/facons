@extends('layouts.app')

@section('content') 

 <!-- Main Content -->
        <div class="col-md-10 p-4">

            <div class="card shadow profile-card">

                <!-- Profile Body -->
                <div class="card-body p-4">

                    <!-- Admission Information -->
                    <fieldset class="border p-4 mb-4 rounded">
                        <legend class="float-none w-auto px-3 text-primary fw-bold">
                            Admission Information
                        </legend>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><span class="info-label">Matric Number:</span> NS2026/001</p>
                            </div>

                            <div class="col-md-6">
                                <p><span class="info-label">Department:</span> Nursing Science</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><span class="info-label">Faculty:</span> College of Nursing</p>
                            </div>

                            <div class="col-md-6">
                                <p><span class="info-label">Level:</span> 300 Level</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><span class="info-label">Session:</span> 2025/2026</p>
                            </div>

                            <div class="col-md-6">
                                <p><span class="info-label">Admission Date:</span> 15 Sept 2025</p>
                            </div>
                        </div>
                    </fieldset>

                    <!-- Personal Information -->
                    <fieldset class="border p-4 mb-4 rounded">
                        <legend class="float-none w-auto px-3 text-success fw-bold">
                            Personal Information
                        </legend>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><span class="info-label">Full Name:</span> Maryam Bello</p>
                            </div>

                            <div class="col-md-6">
                                <p><span class="info-label">Gender:</span> Female</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><span class="info-label">Date of Birth:</span> 12 Jan 2002</p>
                            </div>

                            <div class="col-md-6">
                                <p><span class="info-label">State:</span> Edo State</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><span class="info-label">Email:</span> maryam@gmail.com</p>
                            </div>

                            <div class="col-md-6">
                                <p><span class="info-label">Phone:</span> 08012345678</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <p><span class="info-label">Address:</span> Benin City, Edo State, Nigeria</p>
                            </div>
                        </div>
                    </fieldset>

                    <!-- Next of Kin Details -->
                    <fieldset class="border p-4 mb-4 rounded">
                        <legend class="float-none w-auto px-3 text-danger fw-bold">
                            Next of Kin Details
                        </legend>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><span class="info-label">Name:</span> Ibrahim Bello</p>
                            </div>

                            <div class="col-md-6">
                                <p><span class="info-label">Relationship:</span> Father</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><span class="info-label">Phone Number:</span> 08098765432</p>
                            </div>

                            <div class="col-md-6">
                                <p><span class="info-label">Occupation:</span> Civil Servant</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <p><span class="info-label">Address:</span> Auchi Road, Benin City</p>
                            </div>
                        </div>
                    </fieldset>

                    <!-- Buttons -->
                    <div class="mt-4">
                        <button class="btn btn-primary">Edit Profile</button>
                        <button class="btn btn-success">Print ID Card</button>
                    </div>

                </div>
            </div>

        </div>

@endsection()
