@extends('layouts.admin.dashboard')

@section('content')
        <!--main contents start-->
        <main class="main-content" id="app">
            <!--page title start-->
            <div class="page-title">
                <h4 class="mb-0"> Add New Category</h4>
            </div>
            <!--page title end-->
            <div class="container-fluid">
                <!-- state start-->

 
                <div class="row">
                    <div class=" col-sm-6">
                        <form class="category-form" action="{{ route('category.store')}}" method="POST">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputEmail" class="sr-only">Category name</label>
                                <input type="text" id="CategoryName" class="form-control" v-model ="title" placeholder="Name" name="title" required="" autocomplete="off" style="height: 48px;">
                            </div>
                            <div class="form-group">
                            <slug-widget url="{{url('/')}}" subdirectory="category" :title="title" @slug-changed="updateSlug"></slug-widget>
                            <input type="hidden" v-model ="slug" name="slug"/>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Add new category</button>
                        </form>

                    </div>
                    <div class=" col-sm-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-body no-container">

                                <table id="bs4-table" class="table table-bordered table-striped " cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Slugs</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->title }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                <button class="btn Edit success" data-toggle="modal" data-target="#exampleModal4" data-whatever="@mdo" data-id="{{$category->id}}">Edit </button>
                                                <button class="btn Delete danger">
                                                <form id="delete-form-{{ $category->id }}" method="POST" action="{{ route('category.destroy', $category -> id) }}"
                                                style="display:none">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                </form>
                                                Delete </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- state end-->
            </div>
        </main>
        <!--main contents end-->
        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-id="{{$category->id}}">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                </div>
                <div class="modal-body" id="app">
                    <form class="category-form" action="{{ route('category.update', $category->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">Category name</label>
                            <input type="text" id="CategoryName" value="{{ $category->title }}" name="title" class="form-control" placeholder="Category name" required="" autocomplete="off" style="height: 48px;">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn actionBtn" data-dismiss="modal">Save changes</button>  
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
<script src="{{asset('js/app.js')}}"></script>
<script>
        $(document).ready(function() {
            $('#bs4-table').DataTable({

                "ordering": false,
                "info": false

            });
        });
        $('.Delete').on('click', function() {
            swal({
                title: 'Are you sure?',
                text: "This category cant be reverted back!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    event.preventDefault(); document.getElementById('delete-form-{{ $category->id}}').submit();
                    swal(
                        'Deleted!',
                        'This Post has been deleted.',
                        'success'
                    )
                }
            })
        });
       
    </script>
@endsection