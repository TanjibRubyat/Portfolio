@extends('admin.layouts.master')
@section('page-content')
<div class="content-wrapper" style="min-height: 2077.69px;">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Products</h1>
                </div>

            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="card">
                @include('admin.layouts.inc.session-message')
                <form id="quickForm" novalidate="novalidate" action="{{route('service.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Services</label>
                            <input type="text" name="services" class="form-control" id="exampleInputEmail1" placeholder="Services" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('services')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div> 
                        
                        <div class="form-group">
                            <label for="description">Description</label><br>
                            <textarea class ="form-control" name="description" id="" cols="30" rows="10"></textarea>
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div> 

                        <div class="form-group">
                            <label for="home_id">Users</label>
                            <select name="home_id" id="">
                                <option value="">Select a user</option>
                                @foreach($home as $homes)
                                <option value="{{$homes->id}}">{{$homes->name}}</option>
                                @endforeach
                            </select>
                            @error('home_id')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div>
                       
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection