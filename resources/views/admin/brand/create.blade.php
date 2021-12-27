@extends('admin.master')

@section('content')
<div class="main-panel">
    <div class="page-header">

        <div class="col-md-10 grid-margin stretch-card">
            <div class="card mr-10">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form  action="{{ url('brands') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="slug">slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control show-tick">
                                <option value="active" {{ old('status'=='active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ old('status'=='inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                        </div>

                     
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"> Remember me </label>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection