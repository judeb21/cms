@extends('layouts.admin.dashboard')

@section('content')

        <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-title">
                            <h4 class="mb-0"> Edit {{$role->name}}
                            </h4>
                        </div>
                    </div>
                    

                </div>
            </div>

            <!--page title end-->
            <div class="container-fluid">
                <form class="category-form" action="{{ route('role.update',$role->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('PUT')}}
                    <div class="row">

                        <div class="col-sm-8">
                            <div class="card card-shadow mb-4">

                                <div class="card-body" style="padding: 2.25rem;">

                                    <div class="form-group">
                                        <label for="name" class="sr-only">Role Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Full Name" required="" autocomplete="off" style="height: 48px;" value="@if(old('name')){{ old('name')}}@else{{$role->name}}@endif">
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class="sr-only">Role Display Name</label>
                                        <input type="text" id="display_name" class="form-control" name="display_name" placeholder="Display Name" required="" autocomplete="off" style="height: 48px;" value="@if(old('display_name')){{ old('display_name')}}@else{{$role->display_name}}@endif">
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class="sr-only">Role Description</label>
                                        <input type="text" id="description" class="form-control" name="description" placeholder="Description" required="" autocomplete="off" style="height: 48px;" value="@if(old('description')){{ old('description')}}@else{{$role->description}}@endif">
                                    </div>
                                    
                                    <!-- User Role section -->
                                    <p class="fw-600">Permissions:</p>
                                    @foreach($permissions as $permission)
                                    <label class="checkbox">
                                    <input type="checkbox" name='permission[]' value="{{$permission->id}}"
                                    @foreach($role->permissions as $role_permit)
                                    @if($role_permit->id == $permission->id)
                                    checked
                                    @endif
                                    @endforeach
                                  >{{$permission -> name}}</label>
                       
                                    </label>
                                    @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>


        </main>
        <!--main contents end-->

@endsection