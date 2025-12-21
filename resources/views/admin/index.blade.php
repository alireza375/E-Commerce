@extends('admin.admin_dashboard')
@section('admin')

@php
$date = date('d-F-Y');

@endphp

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">

                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @php
        $users = App\Models\User::all()->where('role', 'user');
        {{-- $courses = App\Models\Course::all(); --}}
        @endphp

        <div class="row">
            {{-- Total Teachers count --}}
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-6">

                                <i class="text-white fa-sharp fa-solid fa-person-chalkboard font-22 avatar-title"></i>

                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="mt-1 text-dark">
                                        <span data-plugin="counterup">
                                            {{ $users->count() }}
                                        </span>
                                    </h3>
                                    <p class="mb-1 text-muted text-truncate">Total Users </p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            {{-- Total Courses count --}}
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <i class="text-white fe-bar-chart-line- font-22 avatar-title"></i>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="mt-1 text-dark">
                                        <span data-plugin="counterup">
                                            {{-- {{ $Orders->count() }} --}}
                                        </span>
                                    </h3>
                                    <p class="mb-1 text-muted text-truncate">Total Order </p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        @php
        {{-- $id = Auth::user()->id; --}}
        @endphp

        <!-- end col -->
    </div>
    <!-- end row -->


</div> <!-- content -->
@endsection
