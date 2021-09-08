@extends('admin.layouts.master')
@section('page-content')
<div class="content-wrapper" style="min-height: 2077.69px;">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Projects</h1>
                </div>

            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="card">
                @include('admin.layouts.inc.session-message')
                <form id="quickForm" novalidate="novalidate" action="{{route('project.store',$project->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$project->name}}" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div> 
                        
                        <div class="form-group">
                            <label for="name">Description</label>
                            <textarea name="description" id="" cols="30" rows="10">value="{{$project->description}}"</textarea>
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div> 

                        <div class="form-group">
                            <label for="exampleInputEmail1">Images</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div> 

                        <div class="form-group">
                            <label for="home_id">Users</label>
                            <select name="home_id" id="">
                                <option value="">Select a user</option>
                                @foreach($homes as $home)
                                <option value="{{$home->id}}">{{$home->name}}</option>
                                @endforeach
                            </select>
                            @error('home_id')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div>

                        <div class="form-group">
                            <label for="portfolio_id">Portfolio</label>
                            <select name="portfolio_id" id="">
                                <option value="">Select a user</option>
                                @foreach($portfolios as $portfolio)
                                <option value="{{$portfolio->id}}">{{$portfolio->name}}</option>
                                @endforeach
                            </select>
                            @error('portfolio_id')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div>
                       
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection