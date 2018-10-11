@extends('layouts.admin.dashboard')

@section('content')

<main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <h4 class="mb-0"> Blog Posts</h4>
            </div>
            <!--page title end-->


            <div class="container-fluid">
                <!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="addnew-btn">
                                    <a href="{{route('post.create')}}" class=" btn btn-primary New_post">Create New Post</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0 " width="100% ">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Post Date</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->title}} </td>
                                            <td>{{$post->user->name}}</td>
                                            @foreach($post->categories as $category)
                                            <td>{{$category->name}}</td>
                                            @endforeach
                                            <td>{{$post->created_at}}</td>
                                            <td>
                                                <button class="btn Edit success"><a href="{{ route('post.edit', $post->id) }}"> Edit </button>
                                                <button class="btn Delete danger">
                                                <form id="delete-form-{{ $post->id }}" method="POST" action="{{ route('post.destroy', $post->id) }}"
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
@endsection
@section('footer')
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
                    event.preventDefault(); document.getElementById('delete-form-{{ $post->id}}').submit();
                    swal(
                        'Deleted!',
                        'This User has been deleted.',
                        'success'
                    )
                }
            })
        });
       
    </script>
@endsection
