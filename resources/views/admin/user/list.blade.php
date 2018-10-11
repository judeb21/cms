@extends('layouts.admin.dashboard')

@section('content')

        <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <h4 class="mb-0"> All Current Users</h4>
            </div>
            <!--page title end-->

            <div class="container-fluid">
                <!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="addnew-btn">
                                    <a href="{{route('user.create')}}" class=" btn btn-primary New_post">Add New Users</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0 " width="100% ">
                                    <thead>
                                        <tr>
                                            <th>Profile image</th>
                                            <th>Name</th>
                                            <th>Email address</th>
                                            <th>Phone Number</th>
                                            <th>Role</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>
                                                <div class="avatar_img">
                                                    <img src="assets/img/user.png" alt="John Doe">
                                                </div>
                                            </td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>08160455544</td>
                                            @foreach($user->roles as $role)
                                            <td>{{$role->display_name}}</td>
                                            @endforeach
                                            <td>
                                            <a href="{{ route('user.edit', $user->id) }}"><button class="btn Edit success ">Edit </button></a>
                                                <button class="btn Delete danger ">
                                                <form id="delete-form-{{ $user->id }}" method="POST" action="{{ route('user.destroy', $user->id) }}"
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
                    event.preventDefault(); document.getElementById('delete-form-{{ $user->id}}').submit();
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