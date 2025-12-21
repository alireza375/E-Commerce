@extends('teacher.dashboard')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">User Profile</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @php
        $id = Auth::user()->id;
        $userData = App\Models\User::where('user_id', $id)->first();
        @endphp
        <div class="row">

            <!-- Teacher Profile -->
            <div class="col-lg-4 col-xl-4">
                <div class="text-center card">
                    <div class="card-body">
                        <img src="{{ (!empty($userData->image)) ? url($userData->image) : url('upload/no_image.jpg') }}"
                            class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                        <h4 class="mb-0">{{ $userData->name }}</h4>
                        <p class="text-muted">{{ $userData->email}}</p>

                        <div class="mt-3 text-start">
                            <p class="mb-2 text-muted font-13"><strong>Full Name :</strong> <span class="ms-2">{{
                                    $userData->name}}</span>
                            </p>
                            <p class="mb-2 text-muted font-13"><strong>Phone :</strong><span class="ms-2">{{
                                    $userData->phone}}</span>
                            </p>
                            <p class="mb-2 text-muted font-13"><strong>Email :</strong> <span class="ms-2">{{
                                    $userData->email}}</span>
                            </p>
                        </div>

                        <ul class="mt-3 mb-0 social-list list-inline">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                        class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                        class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                        class="mdi mdi-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col-->

            <div class="col-lg-8 col-xl-8">

                <div class="row">

                </div>
            </div> <!-- content -->
        </div>
    </div>

</div>

@endsection
