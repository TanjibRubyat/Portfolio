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
                <form id="quickForm" novalidate="novalidate" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div> 
                        
                        <div class="form-group">
                            <label for="name">Description</label>
                            <textarea name="description" id="" cols="30" rows="10"></textarea>
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div> 

                        <div class="form-group">
                            <label for="">Images</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div> 

                        <div class="form-group">
                            <label for="category_id">Users</label>
                            <select name="category_id" id="">
                                <option value="">Select a user</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
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