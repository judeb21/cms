@extends('layouts.admin.dashboard')

@section('content')

        <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <h4 class="mb-0"> Draft</h4>
            </div>
            <!--page title end-->


            <div class="container-fluid">
                <!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="addnew-btn" style="float:right;">
                                    <a href="New-post.html" class=" btn btn-primary New_post">Publish Post</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0" width="100% ">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Post Date</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($drafts as $draft)
                                        <tr>
                                            <td></td>
                                            <td>{{$draft->title}} </td>
                                            <td>{{$draft->user->name}}</td>
                                            <td>{{$draft->categories->name}}</td>
                                            <td>{{$draft->created_at}}</td>
                                            <td>
                                                <button class="btn Edit success ">Edit </button>
                                                <button class="btn Delete danger ">Delete </button>
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

@endsection
@section('footer')
<script src="{{ asset('admin/assets/vendor/data-tables/dataTables.select.min.js') }}"></script>
<script>
        $(document).ready(function() {
            $('#bs4-table').DataTable({
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }],
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },
                order: [
                    [1, 'asc']
                ]
            });
        });
    </script>
        <script>
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