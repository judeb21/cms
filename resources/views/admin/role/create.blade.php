@extends('layouts.admin.dashboard')

@section('content')

        <!--main contents start-->
        <main class="main-content" id="app">
            <!--page title start-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-title">
                            <h4 class="mb-0"> Create New Role
                            </h4>
                        </div>
                    </div>
                    

                </div>
            </div>

            <!--page title end-->
            <div class="container-fluid">
                <form class="category-form" action="{{ route('role.store')}}" method="POST">
                {{csrf_field()}}
                    <div class="row">

                        <div class="col-sm-8">
                            <div class="card card-shadow mb-4">

                                <div class="card-body" style="padding: 2.25rem;">

                                    <div class="form-group">
                                        <label for="name" class="sr-only">Role Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Full Name" required="" autocomplete="off" style="height: 48px;" value="{{ old('name')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class="sr-only">Role Display Name</label>
                                        <input type="text" id="display_name" class="form-control" name="display_name" placeholder="Display Name" required="" autocomplete="off" style="height: 48px;" value="{{ old('display_name')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class="sr-only">Role Description</label>
                                        <input type="text" id="description" class="form-control" name="description" placeholder="Description" required="" autocomplete="off" style="height: 48px;" value="{{ old('description')}}">
                                    </div>
                                    <div class="form-group">
                                    <!-- User Role section -->
                                    <p class="fw-600" style="margin-left: 10px;">Permissions:</p>
                                    @foreach($permissions as $permission)
                                    <label class="checkbox">
                                    <input type="checkbox" name='permission[]' value="{{$permission->id}}">
                                    {{$permission -> name}}
                                    </label>
                                    @endforeach
                                    </div>
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