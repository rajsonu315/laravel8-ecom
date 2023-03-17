@extends('admin.include.layout')
@section('master')

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">product orders</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index-2.html">Dashboard</a></li>
                        <li><a href="#"><span>e-commerce</span></a></li>
                        <li class="active"><span>product-orders</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body row">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table display responsive product-overview mb-30" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Order ID</th>
                                                    <th>Photo</th>
                                                    <th>Product</th>
                                                    <th>Price</th>

                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @foreach ($Product as $key=> $Products )
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td class="txt-dark"> {{$Products->product_name}} </td>
                                                    <td class="txt-dark">{{$Products->product_category}} </td>
                                                    <td>
                                                        <img src="{{asset('/upload/'.$Products->product_image)}}" alt="iMac" width="80">
                                                    </td>
                                                    <td>{{$Products->product_price}}</td>

                                                    <td>{{$Products->created_at}}</td>
                                                    <td>
                                                        <span class="label label-success font-weight-100">Paid</span>
                                                    </td>
                                                    <td><a href="{{route('admin.product_edit',$Products->id)}}" class="text-inverse pr-10"
                                                            title="Edit" data-toggle="tooltip"><i
                                                                class="zmdi zmdi-edit txt-warning"></i></a>
                                                                <a href="{{route('admin.product_delete',$Products->id)}}" class="text-inverse" title="Delete"
                                                            data-toggle="tooltip"><i
                                                                class="zmdi zmdi-delete txt-danger"></i></a></td>
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
            </div>
            <!-- /Row -->
        </div>



    </div>
    <!-- /Main Content -->
@endsection
