@extends('layouts.admin.dashboard')

@section('headSection')
<link href="{{ asset ('admin/assets/vendor/summernote/summernote-bs4.css') }}" rel="stylesheet">
<link href="{{ asset ('admin/assets/css/dropify.css')}}" rel="stylesheet">
@endsection

@section('content')

        <main class="main-content">
            <!--page title start-->
            <div class="row">
                <div class="col-md-6">
                    <div class="page-title">
                        <h4 class="mb-0"> Create New post
                        </h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="upper-btn">
                        <span>  <button class="btn btn-default Draft">Save as Draft</a></span>
                        <span>  <button class="btn btn-primary Publish">Publish Post</a></span>
                    </div>
                </div>
            </div>



            <!--page title end-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card card-shadow mb-4">

                            <div class="card-body">
                                <form class="category-form" action="" method="">
                                    <div class="form-group">
                                        <label for="Post Title" class="sr-only">Post Title</label>
                                        <input type="text" id="PostTitle" class="form-control" placeholder="Post Title" required="" autocomplete="off" style="height: 48px;">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Subtitle" class="sr-only">Subtitle</label>
                                                <input type="text" id="Subtitle" class="form-control" placeholder="Subtitle" required="" autocomplete="off" style="height: 48px;">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Slug" class="sr-only">Slug</label>
                                                <input type="text" id="SlugName" class="form-control" placeholder="Slug" required="" autocomplete="off" style="height: 48px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="summernote">Hello Summernote</div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card lobicard-custom-control lobi-light  mb-4">
                            <div class="card-header bg-info">
                                <div class="card-title text-white">
                                    Blog Categories
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked>
                                                Design
                                            </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox">
                                                    Travels and Lifestyle
                                                </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox">
                                                        Behind the scene
                                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox">
                                                            Angular js tech
                                                        </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox">
                                                                Technologies
                                                            </label>
                                </div>
                            </div>
                        </div>
                        <div class="card lobicard-custom-control lobi-light  mb-4">
                            <div class="card-header bg-info">
                                <div class="card-title text-white">
                                    Featured Image
                                </div>
                            </div>
                            <div class="card-body">

                                <input type="file" class="dropify" data-max-file-size="1M" />

                            </div>
                        </div>
                    </div>


                </div>


        </main>

@endsection

@section('footer')
<script src="{{ asset('admin/assets/js/dropify.js')}}"></script>
<!--summernote-->
<script src="{{ asset('admin/assets/vendor/summernote/summernote-bs4.min.js')}}"></script>
<script>
            $(document).ready(function() {
                $('#bs4-table').DataTable({

                    "ordering": false,
                    "info": false
                });
            });

            $('.dropify').dropify();

            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true // set focus to editable area after initializing summernote
                });
            });
        </script>
@endsection