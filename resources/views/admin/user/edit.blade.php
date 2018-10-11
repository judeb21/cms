@extends('layouts.admin.dashboard')

@section('content')

        <!--main contents start-->
        <main class="main-content" id="app">
            <!--page title start-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-title">
                            <h4 class="mb-0"> Update User
                            </h4>
                        </div>
                    </div>
                    

                </div>
            </div>

            <!--page title end-->
            <div class="container-fluid">
                <form class="category-form" action="{{ route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}
                    <div class="row">

                        <div class="col-sm-8">
                            <div class="card card-shadow mb-4">

                                <div class="card-body" style="padding: 2.25rem;">

                                    <div class="form-group">
                                        <label for="Post Title" class="sr-only">Full Name</label>
                                        <input type="text" id="FullNanme" name="name" class="form-control" placeholder="Full Name" required="" autocomplete="off" style="height: 48px;" value="@if(old('name')){{ old('name')}}@else{{$user->name}}@endif">
                                    </div>

                                    <div class="form-group">
                                        <label for="Post Title" class="sr-only">Job Title</label>
                                        <input type="text" id="JobTitle" class="form-control" name="jobTitle" placeholder="Job Title" required="" autocomplete="off" style="height: 48px;" value="@if(old('jobTitle')){{ old('jobTitle')}}@else{{$user->jobTitle}}@endif">
                                    </div>

                                    <div class="form-group">
                                        <label for="Subtitle" class="sr-only">Email</label>
                                        <input type="email" id="Email" class="form-control" name="email" placeholder="Email address" required="" style="height: 48px;"value="@if(old('email')){{ old('email')}}@else{{$user->email}}@endif">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" id="JDescription" name="description" placeholder="Job description" rows="3" value="@if(old('description')){{ old('description')}}@else{{$user->description}}@endif"></textarea>
                                    </div>

                                    <!-- User Role section -->
                                    <p class="fw-600">User Role</p>
                                    @foreach($roles as $role)
                                    <label class="custom-control custom-radio">
                                        <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                        <input type="hidden" name="roles[]" :value="rolesSelected" />
                                        
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description" value="{{$role->id}}" @foreach($user->roles as $user_role)
                                          @if($user_role->id == $role->id)
                                          checked
                                          @endif
                                          @endforeach>{{$role->display_name}}</span>
                                       
                                    </label>
                                    @endforeach

                                    <!-- User Status -->
                                    <br>
                                    <br>
                                    <p class="fw-600">User Status</p>
                                    <div class="form-check">
                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="status" @if (old('status')==1 || $user->status==1)
                                          checked 
                                          @endif value="1">
                                                        Activate User
                                                    </label>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card lobicard-custom-control lobi-light  mb-4">
                                <div class="card-header bg-info">
                                    <div class="card-title text-white">
                                        Profile Image
                                    </div>
                                </div>
                                <div class="card-body">

                                    <input type="file" class="dropify" data-max-file-size="1M" />

                                </div>
                            </div>
                            <div class="col-md-6">
                            <span>  <button class="btn btn-primary Publish">Update User</button></span>
                        
                    </div>
                        </div>
                    </div>
                </form>


        </main>
        <!--main contents end-->

@endsection

@section('footer')
<script src="{{ asset('admin/assets/js/dropify.js')}}"></script>
<script>
            $(document).ready(function() {
                $('#bs4-table').DataTable({

                    "ordering": false,
                    "info": false
                });
            });

            $('.dropify').dropify();
</script>
<script>
    var app = new Vue({
      el: '#app',
      data: {
        rolesSelected: {!! $user->roles->pluck('id') !!}
      }
    });
</script>
@endsection