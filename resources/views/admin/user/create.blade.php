@extends('layouts.admin.dashboard')

@section('content')

        <!--main contents start-->
        <main class="main-content" id="app">
            <!--page title start-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-title">
                            <h4 class="mb-0"> Add New User
                            </h4>
                        </div>
                    </div>
                    

                </div>
            </div>

            <!--page title end-->
            <div class="container-fluid">
                <form class="category-form" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="row">

                        <div class="col-sm-8">
                            <div class="card card-shadow mb-4">

                                <div class="card-body" style="padding: 2.25rem;">

                                    <div class="form-group">
                                        <label for="name" class="sr-only">Full Name</label>
                                        <input type="text" id="FullNanme" name="name" class="form-control" placeholder="Full Name" required="" autocomplete="off" style="height: 48px;" value="{{ old('name')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class="sr-only">Job Title</label>
                                        <input type="text" id="JobTitle" class="form-control" name="jobTitle" placeholder="Job Title" required="" autocomplete="off" style="height: 48px;" value="{{ old('jobTitle')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="text" id="Email" class="form-control" name="email" placeholder="Email address" required="" style="height: 48px;"value="{{ old('email')}}">
                                    </div>
                                        

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password" class="sr-only">Password</label>
                                                <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required="" autocomplete="off" style="height: 48px;">
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password-confirm" class="sr-only">Confirm password</label>
                                                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Confirm password" required="" autocomplete="off" style="height: 48px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="description" class="form-control" id="JDescription" placeholder="Job description" rows="3"></textarea>
                                    </div>

                                    <!-- User Role section -->
                                    <p class="fw-600">User Role</p>
                                    @foreach($roles as $role)
                                    <label class="custom-control custom-radio">
                                        <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                        <input type="hidden" name="roles[]" />
                                        
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description" value="{{$role->id}}">{{$role->display_name}}</span>
                                       
                                    </label>
                                    @endforeach

                                    <!-- User Status -->
                                    <br>
                                    <br>
                                    <p class="fw-600">User Status</p>
                                    <div class="form-check">
                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="status" @if (old('status') == 1)
                                          checked 
                                          @endif
                                          value="1">
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

                                    <input type="file" name="image" class="dropify" data-max-file-size="1M" />

                                </div>
                            </div>
                            <div class="col-md-6">
                            <span>  <button class="btn btn-primary Publish">Add New User</button></span>
                            </div>
                    
                        </div>
                    </div>
                </form>

                </div>

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
        rolesSelected: [{!! old('roles[]') ? old('roles[]') : '' !!}]
      }
    });
</script>
@endsection