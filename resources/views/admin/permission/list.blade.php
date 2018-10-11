@extends('layouts.admin.dashboard')

@section('content')
<main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <h4 class="mb-0"> All Permissions</h4>
            </div>
            <!--page title end-->


            <div class="container-fluid">
                <!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="addnew-btn">
                                    <a href="{{route('permission.create')}}" class=" btn btn-primary New_post">Create New Role</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0 " width="100% ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Display name</th>
                                            <th>Description</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($permissions as $permission)
                                        <tr>
                                            <td>{{$permission->name}} </td>
                                            <td>{{$permission->display_name}}</td>
                                            <td>{{$permission->description}}</td>
                                            <td>
                                            <a href="{{ route('permission.edit', $permission->id) }}"><button class="btn Edit default">Edit </button> </a>
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
