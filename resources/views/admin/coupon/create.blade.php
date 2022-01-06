@extends('admin.master')

@section('content')
<div class="main-panel">
    <div class="page-header">

        <div class="col-md-10 grid-margin stretch-card">
            <div class="card mr-10">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form  action="{{ url('coupon') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="code">Code </label>
                            <input type="text" class="form-control" id="title" name="code" placeholder="eg. HNY">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control show-tick">
                                <option value="active" {{ old('status'=='active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ old('status'=='inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" id="status" class="form-control show-tick">
                                <option value="fixed" {{ old('type'=='fixed' ? 'selected' : '') }}>fixed</option>
                                <option value="percentage" {{ old('type'=='percentage' ? 'selected' : '') }}>Percentage</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="text" name="value" id="" class="form-control" placeholder="eg. 12">
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
