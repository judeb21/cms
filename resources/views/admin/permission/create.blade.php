@extends('layouts.admin.dashboard')

@section('headSection')

@endsection

@section('content')

<main class="main-content" id="app">
            <!--page title start-->
            <div class="row">
                <div class="col-md-6">
                    <div class="page-title">
                        <h4 class="mb-0"> Create New Permission
                        </h4>
                    </div>
                </div>
            </div>


            <!--page title end-->
            
            <div class="container-fluid">
            <form role="form" action="{{ route('permission.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="col-lg-offset-2 col-lg-6">
                              <div class="form-group">
                                <label for="name">Permission</label>
                                <input type="text" class="form-control" id="permission" name="name" placeholder="Permission name">
                              </div>

                              <div class="form-group">
                                <label for="name">Permission</label>
                                <input type="text" class="form-control" id="display_name" name="display_name" placeholder="Permission display name">
                              </div>
    
                              <div class="form-group">
                                <label for="name">Permission</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Permission description">
                              </div>                         
                                    
                                    <button type="submit" class="btn btn-success">Submit</button>
                              <a type="submit" href="{{ route('permission.index') }}" class="btn btn-primary">Back</a>
                              
                            </div>
                            </div>
                          </form>
            </div>

        </main>
 
@endsection

@section('footer')

@endsection