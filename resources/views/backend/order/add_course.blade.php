@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Course</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <!-- end timeline content-->
                        <div class="tab-pane" id="settings">
                            <!--  -->
                            <form method="post" action="{{ route('store.course') }}">
                                @csrf
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Add Course
                                </h5>
                                <div class="row">               
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="course_name" class="form-label">Course Name</label>
                                            <input type="text" name="course_name" id="course_name"
                                                class="form-control @error('course_name') is-invalid @enderror">
                                            @error('course_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="course_code" class="form-label">Course Code</label>
                                            <input type="text" name="course_code" id="course_code"
                                                class="form-control @error('course_code') is-invalid @enderror">
                                            @error('course_code')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="duration" class="form-label">Course Duration</label>
                                            <input type="text" name="duration" id="duration"
                                                class="form-control @error('duration') is-invalid @enderror">
                                            @error('duration')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="resources" class="form-label">Course Resources</label>
                                            <input type="text" name="attendence" id="attendence"
                                                class="form-control @error('course_resources') is-invalid @enderror">
                                            @error('resources')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div> <!-- end row -->
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2">
                                        <i class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->


                    </div>
                </div> <!-- end card-->

            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->



<script type="text/javascript">
    $(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload =  function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});

</script>


@endsection