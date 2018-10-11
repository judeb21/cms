@extends('layouts.admin.dashboard')

@section('headSection')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset ('admin/assets/vendor/summernote/summernote-bs4.css') }}" rel="stylesheet">
<link href="{{ asset ('admin/assets/css/dropify.css')}}" rel="stylesheet">
@endsection

@section('content')

        <main class="main-content" id="app">
            <!--page title start-->
            <div class="row">
                <div class="col-md-6">
                    <div class="page-title">
                        <h4 class="mb-0"> Create New post
                        </h4>
                        @include('includes.messages')
                    </div>
                </div>
            </div>


            <!--page title end-->
            <div class="container-fluid">
            <form class="category-form" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card card-shadow mb-4">

                            <div class="card-body">
                                
                                    <div class="form-group">
                                        <label for="Post Title" class="sr-only">Post Title</label>
                                        <input type="text" id="PostTitle" name="title" class="form-control" v-model ="title" placeholder="Post Title" required="" autocomplete="off" style="height: 48px;">
                                        
                                    </div>
                                    <div class="form-group">
                                        <slug-widget url="{{url('/')}}" subdirectory="post" :title="title" @slug-changed="updateSlug"></slug-widget>
                                        <input type="hidden" v-model ="slug" name="slug">
                                    </div>

                                    <div>
                                    <textarea id="summernote" name="body">Hello Summernote</textarea>
                                    </div>

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
                            <input type="hidden" name="categories[]"/>
                            @foreach ($categories as $category)
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="{{ $category->id }}"/>{{ $category->title }}
                                    </label>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="card lobicard-custom-control lobi-light  mb-4">
                            <div class="card-header bg-info">
                                <div class="card-title text-white">
                                    Featured Image
                                </div>
                            </div>
                            <div class="card-body">

                                <input type="file" name="image" class="dropify" data-max-file-size="1M">

                            </div>
                        </div>
                        <div>
                                <span>  <input type="submit" name='publish' class="btn btn-success" value = "Publish"/></span>
                                <span>  <input type="submit" name='save' class="btn btn-default" value = "Save Draft" style="margin-left:10px;" /></span>
                        </div>
                    </div>
                </div>
            </form>
            </div>

        </main>

@endsection

@section('footer')
<script src="{{ asset('js/app.js')}}"></script>
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