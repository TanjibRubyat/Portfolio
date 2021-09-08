@extends('admin.layouts.master')
@section('page-content')
<div class="content-wrapper" style="min-height: 2077.69px;">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Home Page</h1>
                </div>

            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="card">
                @include('admin.layouts.inc.session-message')
                <form id="quickForm" novalidate="novalidate" action="{{route('home.create')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">logo</label>
                            <input type="text" name="logo" class="form-control" id="exampleInputEmail1" placeholder="Logo" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('logo')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="name">speciality</label>
                            <input type="text" name="speciality" class="form-control" id="exampleInputEmail1" placeholder="Skills" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('speciality')
                            <p class="text-danger">{{$message}}</p>
                            @enderror                            
                        </div>
                        <div class="form-group">
                            <label for="description">Introduction</label><br>
                            <textarea class ="form-control" name="intro" id="" cols="30" rows="10"></textarea>
                            @error('intro')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div>                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection