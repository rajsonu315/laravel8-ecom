@extends('admin.include.layout')
@section('master')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        .ui-sortable-placeholder {
            border: 1px dashed black !important;
            visibility: visible !important;
            background: #eeeeee78 !important;
        }

        .ui-sortable-placeholder * {
            visibility: hidden;
        }

        .RearangeBox.dragElemThumbnail {
            opacity: 0.6;
        }

        .RearangeBox {
            width: 180px;
            height: 240px;
            padding: 10px 5px;
            cursor: all-scroll;
            float: left;
            border: 1px solid #9E9E9E;
            font-family: sans-serif;
            display: inline-block;
            margin: 5px !important;
            text-align: center;
            color: #673ab7;
            background: #ffc107;
            /*color: rgb(34, 34, 34);
                        background: #f3f2f1;     */
        }





        .IMGthumbnail {
            max-width: 168px;
            height: 220px;
            margin: auto;
            background-color: #ececec;
            padding: 2px;
            border: none;
        }

        .IMGthumbnail img {
            max-width: 100%;
            max-height: 100%;
        }

        .imgThumbContainer {

            margin: 4px;
            border: solid;
            display: inline-block;
            justify-content: center;
            position: relative;
            border: 1px solid rgba(0, 0, 0, 0.14);
            -webkit-box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 4px 0 rgba(0, 0, 0, .2);
        }



        .imgThumbContainer>.imgName {
            text-align: center;
            padding: 2px 6px;
            margin-top: 4px;
            font-size: 13px;
            height: 15px;
            overflow: hidden;
        }

        .imgThumbContainer>.imgRemoveBtn {
            position: absolute;
            color: #e91e63ba;
            right: 2px;
            top: 2px;
            cursor: pointer;
            display: none;
        }

        .RearangeBox:hover>.imgRemoveBtn {
            display: block;
        }
    </style>


    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">add-products</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index-2.html">Dashboard</a></li>
                        <li><a href="#"><span>e-commerce</span></a></li>
                        <li class="active"><span>add-products</span></li>
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
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form action="{{ route('admin.add_products') }}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <h6 class="txt-dark capitalize-font"><i
                                                class="zmdi zmdi-info-outline mr-10"></i>about product</h6>
                                        <hr class="light-grey-hr" />
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Product Name</label>
                                                    <input type="text" name="product_name" class="form-control"
                                                        placeholder="Rounded Chair">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            {{-- <div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Sub text</label>
													<input type="text" id="lastName" class="form-control"
														placeholder="globe type chair for rest">
												</div>
											</div> --}}
                                            <!--/span-->
                                        </div>
                                        <!-- Row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Category</label>
                                                    <select class="form-control" name="product_category"
                                                        data-placeholder="Choose a Category" tabindex="1">
                                                        @foreach ($category as $categorys)
                                                            <option value="{{ $categorys->id }}">{{ $categorys->name }}
                                                            </option>
                                                        @endforeach


                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            {{-- <div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Status</label>
													<div class="radio-list">
														<div class="radio-inline pl-0">
															<div class="radio radio-info">
																<input type="radio" name="radio" id="radio1"
																	value="option1">
																<label for="radio1">Published</label>
															</div>
														</div>
														<div class="radio-inline">
															<div class="radio radio-info">
																<input type="radio" name="radio" id="radio2"
																	value="option2">
																<label for="radio2">Draft</label>
															</div>
														</div>
													</div>
												</div>
											</div> --}}
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label mb-10">Price</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="ti-money"></i>
                                                        </div>
                                                        <input type="text" name="product_price" class="form-control"
                                                            id="exampleInputuname" placeholder="153">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            {{-- <div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Discount</label>
													<div class="input-group">
														<div class="input-group-addon"><i class="ti-cut"></i></div>
														<input type="text" class="form-control"
															id="exampleInputuname_1" placeholder="36%">
													</div>
												</div>
											</div> --}}
                                            <!--/span-->
                                        </div>
                                        <div class="seprator-block"></div>
                                        <h6 class="txt-dark capitalize-font"><i
                                                class="zmdi zmdi-comment-text mr-10"></i>Product Description</h6>
                                        <hr class="light-grey-hr" />
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="product_description" rows="4">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        {{-- <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Meta Title</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Meta Keyword</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div> --}}
                                        <div class="seprator-block"></div>
                                        <h6 class="txt-dark capitalize-font"><i
                                                class="zmdi zmdi-collection-image mr-10"></i>upload image</h6>
                                        <div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span
                                                class="btn-text">Upload new
                                                image</span>
                                            <input type="file" id="files" multiple name="product_image"
                                                class="upload">
                                        </div>
                                        <hr class="light-grey-hr" />
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="img-upload-wrap">
                                                    <div id="sortableImgThumbnailPreview"></div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="seprator-block"></div>





                                        {{-- <h6 class="txt-dark capitalize-font"><i
												class="zmdi zmdi-calendar-note mr-10"></i>general info</h6>
										<hr class="light-grey-hr" />

										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Brand">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Stellar">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control"
														placeholder="Delivery Condition">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control"
														placeholder="Knock Down">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control"
														placeholder="Seat Lock Included">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Yes">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Type">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control"
														placeholder="Office Chair">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Style">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control"
														placeholder="Contemporary & Modern">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control"
														placeholder="Wheels Included">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Yes">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control"
														placeholder="Upholstery Included">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Yes">
												</div>
											</div>
										</div> --}}
                                        <div class="form-actions">
                                            <button type="submir"
                                                class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i
                                                    class="fa fa-check"></i> <span>save</span></button>
                                            <button type="button" class="btn btn-warning pull-left">Cancel</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->

        </div>

        <!-- Footer -->
        <footer class="footer container-fluid pl-30 pr-30">
            <div class="row">
                <div class="col-sm-12">
                    <p>2017 &copy; Hound. Pampered by Hencework</p>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->


    <script>
        $(function() {
            $("#sortableImgThumbnailPreview").sortable({
                connectWith: ".RearangeBox",


                start: function(event, ui) {
                    $(ui.item).addClass("dragElemThumbnail");
                    ui.placeholder.height(ui.item.height());

                },
                stop: function(event, ui) {
                    $(ui.item).removeClass("dragElemThumbnail");
                }
            });
            $("#sortableImgThumbnailPreview").disableSelection();
        });




        document.getElementById('files').addEventListener('change', handleFileSelect, false);

        function handleFileSelect(evt) {


            var files = evt.target.files;
            var output = document.getElementById("sortableImgThumbnailPreview");

            // Loop through the FileList and render image files as thumbnails.
            for (var i = 0, f; f = files[i]; i++) {

                // Only process image files.
                if (!f.type.match('image.*')) {
                    continue;
                }

                var reader = new FileReader();

                // Closure to capture the file information.
                reader.onload = (function(theFile) {
                    return function(e) {
                        // Render thumbnail.
                        var imgThumbnailElem =
                            "<div class='RearangeBox imgThumbContainer'><i class='material-icons imgRemoveBtn' onclick='removeThumbnailIMG(this)'>cancel</i><div class='IMGthumbnail' ><img  src='" +
                            e.target.result + "'" + "title='" + theFile.name +
                            "'/></div><div class='imgName'>" + theFile.name + "</div></div>";

                        output.innerHTML = output.innerHTML + imgThumbnailElem;

                    };
                })(f);

                // Read in the image file as a data URL.
                reader.readAsDataURL(f);
            }
        }

        function removeThumbnailIMG(elm) {
            elm.parentNode.outerHTML = '';
        }
    </script>
@endsection
