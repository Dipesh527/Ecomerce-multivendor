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
                                <th> price </th>
                                <th> offer_price </th>
                                <th> Action </th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->slug }}</td>
                                        <td><img src="categories_photo/{{ $product->photo }}" height="40px" alt=""></td>
                                        <td>
                                          <input data-id="{{$product->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $product->status ? 'checked' : '' }}>
                                        </td>
                                        </td>
                                        <td>
                                        {{ $product->is_parent == 1 ? 'Yes' : 'No' }}
                                        </td>
                                        <td>
                                            {{ \App\Models\Categories::where('id',$product->parent_id)->value('title') }}
                                        </td>
                                        <td>
                                          <a href="" class="btn btn-primary btn-sm">delete</a>
                                          <a href="{{ url('categories/edit',$product->id) }}" class="btn btn-success btn-sm">edit</a>
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