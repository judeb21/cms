@extends('layouts.admin.dashboard')

@section('content')

        <!--main contents start-->
        <main class="main-content" id="app">
            <!--page title start-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-title">
                            <h4 class="mb-0"> Edit {{$permission->name}}
                            </h4>
                        </div>
                    </div>
                    

                </div>
            </div>

            <!--page title end-->
            <div class="container-fluid">
                <form class="category-form" action="{{ route('permission.update',$permission->id)}}" method="POST">
                {{csrf_field()}}
                {{method_field('PUT')}}
                    <div class="row">

                        <div class="col-sm-8">
                            <div class="card card-shadow mb-4">

                                <div class="card-body" style="padding: 2.25rem;">

                                    <div class="form-group">
                                        <label for="name" class="sr-only">Permission Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Full Name" required="" autocomplete="off" style="height: 48px;" value="@if(old('name')){{ old('name')}}@else{{$permission->name}}@endif">
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class="sr-only">Permission Display Name</label>
                                        <input type="text" id="display_name" class="form-control" name="display_name" placeholder="Display Name" required="" autocomplete="off" style="height: 48px;" value="@if(old('display_name')){{ old('display_name')}}@else{{$permission->display_name}}@endif">
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class="sr-only">Permission Description</label>
                                        <input type="text" id="description" class="form-control" name="description" placeholder="Description" required="" autocomplete="off" style="height: 48px;" value="@if(old('description')){{ old('description')}}@else{{$permission->description}}@endif">
                                    </div>
                                    

                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        
                    </div>
                </form>

            </div>


        </main>
        <!--main contents end-->

@endsection