@extends('admin.master')

@section('content')
<div class="main-panel">
            <div class="page-header">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Bordered table</h4>
                        <p class="card-description"> Add class <code>.table-bordered</code>
                        </p>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th> # </th>
                                <th> Title </th>
                                <th> Slug </th>
                                <th> photo </th>
                                <th> status </th>
                                <th> Action </th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                    <tr>
                                        <td>{{ $brand->id }}</td>
                                        <td>{{ $brand->title }}</td>
                                        <td>{{ $brand->slug }}</td>
                                        <td><img src="brands_photo/{{ $brand->photo }}" height="40px" alt=""></td>
                                        <td>
                                          <input data-id="{{$brand->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $brand->status ? 'checked' : '' }}>
                                        </td>
                       
                                        <td>
                                          <a href="" class="btn btn-primary btn-sm">delete</a>
                                          <a href="{{ url('brands/edit',$brand->id) }}" class="btn btn-success btn-sm">edit</a>
                                        </td>
                                

                                    </tr>
                                @endforeach
                  
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
   
            </div>
        </div>

@endsection