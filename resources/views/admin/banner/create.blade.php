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
                                <th> Description </th>
                                <th> photo </th>
                                <th> status </th>
                                <th> condition </th>
                                <th> Action </th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $banner)
                                    <tr>
                                        <td>{{ $banner->id }}</td>
                                        <td>{{ $banner->title }}</td>
                                        <td>{{ $banner->description }}</td>
                                        <td><img src="banners_photo/{{ $banner->photo }}" height="40px" alt=""></td>
                                        <td>
                                          <input data-id="{{$banner->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $banner->status ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                          @if($banner->condition == 'banner')
                                              <span class="badge badge-success">{{ $banner->condition }}</span>
                                                  
                                              @else
                                              <span class="badge badge-primary">{{ $banner->condition }}</span>

                                                  
                                          @endif
                                        </td>
                                        <td>
                                          <a href="{{ url('banners/delete',$banner->id) }}" class="btn btn-primary btn-sm">delete</a>
                                          <a href="{{ url('banners/edit',$banner->id) }}" class="btn btn-success btn-sm">edit</a>
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