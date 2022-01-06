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
                                <th> Code </th>
                                <th> Value </th>
                                <th> status </th>
                                <th> Type </th>
                                <th> Action </th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                <td>{{ $coupon->id }}</td>
                                <td>{{ $coupon->code }}</td>
                                <td>{{ $coupon->value }}</td>
                                <td>
                                    <input data-id="{{$coupon->id}}" class="toggle-class"
                                     type="checkbox" data-onstyle="success" data-offstyle="danger"
                                      data-toggle="toggle" data-on="Active" data-off="InActive"
                                      {{ $coupon->status ? 'checked' : '' }}>
                                  </td>
                                  <td>
                                    @if($coupon->type == 'fixed')
                                        <span class="badge badge-success">{{ $coupon->type }}</span>

                                        @else
                                        <span class="badge badge-primary">{{ $coupon->type }}</span>


                                    @endif
                                  </td>

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
