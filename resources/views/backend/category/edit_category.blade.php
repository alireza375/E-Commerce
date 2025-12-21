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
                    <h4 class="page-title">Edit Category</h4>
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
                            <form method="POST" action="{{ route('category.update', $category->id) }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $category->id }}">
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Edit Category
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Name</label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ $category->name }}">
                                            @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Description</label>
                                            <input type="description" name="description"
                                                class="form-control @error('description') is-invalid @enderror"
                                                value="{{ $category->description }}">
                                            @error('description')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select name="status">
                                                <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>

                                    </div>


                                </div> <!-- end row -->

                                <div class="text-end">
                                    <button type="submit" class="mt-2 btn btn-success waves-effect waves-light"><i
                                            class="mdi mdi-content-save"></i> Update</button>
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
