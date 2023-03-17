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
                                                Add Sub Category
                                            </a>
                                            <!-- Modal -->
                                            <div aria-hidden="true" role="dialog" tabindex="-1" id="myModal"
                                                class="modal fade" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                            <h4 class="modal-title" id="myModalLabel"> Add new Sub Category
                                                                </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal form-material">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 mb-20">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Type name">
                                                                    </div>
                                                               
                                                            
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn btn-info waves-effect"
                                                                data-dismiss="modal">Save</button>
                                                            <button type="button"
                                                                class="btn btn-default waves-effect"
                                                                data-dismiss="modal">Cancel</button>
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

                                      
                                        <div id="myModal_1" class="modal fade in" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                        <h5 class="modal-title" id="myModalLabel">Add Lable</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">Name of
                                                                    Label</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Type name">
                                                            </div>
                                                       
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                            class="btn btn-success waves-effect"
                                                            data-dismiss="modal">Save</button>
                                                        <button type="button"
                                                            class="btn btn-default waves-effect"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    </aside>

                                    <aside class="col-lg-10 col-md-8 pl-0">
                                        <div class="panel pa-0">
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body  pa-0">
                                                    <div class="table-responsive mb-30">
                                                        <table id="datable_1"
                                                            class="table  display table-hover mb-30"
                                                            data-page-size="10">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Name</th>
                                                                
                                                                    <th>Role</th>
                                                                  
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td><a href="#">Jens Brincker</a></td>
                                                                  
                                                                    <td><span
                                                                            class="label label-danger">Designer</span>
                                                                    </td>
                                                                  
                                                                    <td><a href="javascript:void(0)"
                                                                            class="text-inverse pr-10"
                                                                            title="Edit" data-toggle="modal" data-target="#myModal_1"
                                                                            data-toggle="tooltip"><i
                                                                                class="zmdi zmdi-edit txt-warning"></i></a><a
                                                                            href="javascript:void(0)"
                                                                            class="text-inverse" title="Delete"
                                                                            data-toggle="tooltip"><i
                                                                                class="zmdi zmdi-delete txt-danger"></i></a>
                                                                    </td>
                                                                </tr>
                                                 
                                                               
                                                     
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