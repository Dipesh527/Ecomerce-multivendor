@extends('admin.master')

@section('content')
<div class="main-panel">
    <div class="page-header">

        <div class="col-md-10 grid-margin stretch-card">
            <div class="card mr-10">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form  action="{{ url('products') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="summary">summary</label>
                            <input type="text" class="form-control" id="summary"  name="summary" placeholder="summary">
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
                        <div class="form-group">
                            <label for="is_parent">Is Parent</label>
                            <input type="checkbox" id="is_parent" name="is_parent" value="1" checked>
                        </div>
                        <div class="form-group d-none" id="parent_cat_div">
                            <label for="parent_id">Parent Category</label>
                            <select name="parent_id" id="parent_id" class="form-control show-tick">
                                <option value="">--Parent Category--</option>
                                @foreach ($parent_cats as $parent_id)
                                    <option value="{{ $parent_id->id }}">{{ $parent_id->title }}</option>
                                @endforeach
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

@section('scripts')
    <script>
        $('#is_parent').change(function(e)
        {
            e.preventDefault();
            var is_checked = $('#is_parent').prop('checked');
            alert(is_checked);
            if(is_checked)
            {
                $('#parent_cat_div').addClass('d-none');
            }
            else{
                $('#parent_cat_div').removeClass('d-none');

            }
        })
    </script>
@endsection