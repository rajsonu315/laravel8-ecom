@extends('admin.include.layout')
@section('master')
    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">contact</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index-2.html">Dashboard</a></li>
                        <li><a href="#"><span>apps</span></a></li>
                        <li class="active"><span>contact list</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <div class="contact-list">
                                    <div class="row">
                                        <aside class="col-lg-2 col-md-4 pr-0">
                                            <div class="mt-20 mb-20 ml-15 mr-15">
                                                <a href="#myModal" data-toggle="modal" title="Compose"
                                                    class="btn btn-danger btn-block">
                                                    Add new Category
                                                </a>
                                                <!-- Modal -->
                                                <div aria-hidden="true" role="dialog" tabindex="-1" id="myModal"
                                                    class="modal fade" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×</button>
                                                                <h4 class="modal-title" id="myModalLabel"> Add new Category
                                                                </h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('admin.store') }}" method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">
                                                                            Category</label>
                                                                        <input type="text" name="name"
                                                                            class="form-control" placeholder="Type name">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10">Select Sub
                                                                            Category
                                                                        </label>
                                                                        <select class="form-control" name="category_id">
                                                                            <option value="">No Category</option>
                                                                            @foreach ($category as $categorys)
                                                                                <option value="{{ $categorys->name }}">
                                                                                    {{ $categorys->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit"
                                                                            class="btn btn-info waves-effect">Save</button>
                                                                        <button type="button"
                                                                            class="btn btn-default waves-effect"
                                                                            data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                            </div>
                                            <ul class="inbox-nav mb-30">
                                                <li class="active">
                                                    <a href="#">Work <span
                                                            class="label label-primary ml-10">12</span></a>
                                                </li>
                                                <li>
                                                    <a href="#">design <span
                                                            class="label label-danger ml-10">20</span></a>
                                                </li>

                                            </ul>



                                        </aside>

                                        <aside class="col-lg-10 col-md-8 pl-0">
                                            <div class="panel pa-0">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body  pa-0">
                                                        <div class="table-responsive mb-30">
                                                            <table id="datable_1" class="table  display table-hover mb-30"
                                                                data-page-size="10">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Category Name</th>
                                                                        <th>Parant Category Name</th>


                                                                        <th>Status</th>

                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($category as $key => $categorys)
                                                                        <tr>
                                                                            <td>{{ $key + 1 }}</td>
                                                                            <td>{{ $categorys->name }}</td>
                                                                            <td>
                                                                                @if ($categorys->category_id)
                                                                                    {{ $categorys->category_id }}
                                                                                @else
                                                                                    no parant categry
                                                                                @endif
                                                                            </td>


                                                                            <td><span
                                                                                    class="label label-danger">{{ $categorys->status }}</span>
                                                                            </td>

                                                                            <td><a href="javascript:void(0)"
                                                                                    class="text-inverse pr-10"
                                                                                    title="Edit" data-toggle="modal"
                                                                                    data-target="#{{$categorys->id}}myModal_1"
                                                                                    data-toggle="tooltip"><i
                                                                                        class="zmdi zmdi-edit txt-warning"></i></a>
                                                                                <a href="{{route('admin.category_delete',$categorys->id)}}"
                                                                                    class="text-inverse" title="Delete"
                                                                                    data-toggle="tooltip"><i
                                                                                        class="zmdi zmdi-delete txt-danger"></i></a>
                                                                            </td>
                                                                        </tr>


                                                                        <div id="{{$categorys->id}}myModal_1" class="modal fade in" tabindex="-1" role="dialog"
                                                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                                            aria-hidden="true">×</button>
                                                                                        <h5 class="modal-title" id="myModalLabel">Add Lable</h5>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="{{ route('admin.update_categorys',$categorys->id) }}" method="POST">
                                                                                            {{-- @method('PUT'); --}}
                                                                                            @csrf
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10">
                                                                                                    Category</label>
                                                                                                <input type="text" name="name"
                                                                                                    class="form-control" value="{{$categorys->name}}" placeholder="Type name">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label mb-10">Select Sub
                                                                                                    Category
                                                                                                </label>
                                                                                                <select class="form-control" name="category_id" value='{{$categorys->category_id}}'>
                                                                                                    <option value="" >No Category</option>
                                                                                                    @foreach ($category as $categorys)
                                                                                                        <option value="{{ $categorys->name }}">
                                                                                                            {{ $categorys->name }}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="submit"
                                                                                                    class="btn btn-info waves-effect">Save</button>
                                                                                                <button type="button"
                                                                                                    class="btn btn-default waves-effect"
                                                                                                    data-dismiss="modal">Cancel</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>

                                                                                </div>
                                                                                <!-- /.modal-content -->
                                                                            </div>
                                                                            <!-- /.modal-dialog -->
                                                                        </div>
                                                                    @endforeach



                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </aside>
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
