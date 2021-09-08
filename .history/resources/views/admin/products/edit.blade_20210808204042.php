@extends('admin.layouts.master')
@section('page-content')
<div class="content-wrapper" style="min-height: 2077.69px;">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Products</h1>
                </div>

            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="card">
                @include('admin.layouts.inc.session-message')
                <form id="quickForm" novalidate="novalidate" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                  @method('PUT')   
                  @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$product->name}}" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="name">Product Slug</label>
                            <input type="text" name="slug" class="form-control" id="exampleInputEmail1" value="{{$product->slug}}" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('slug')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            
                        </div>

                        <div class="form-group">
                            <label for="price">Product price</label>
                            <input type="integer" name="price" class="form-control" id="exampleInputEmail1" value="{{$product->price}}" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="description">Product Description</label><br>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$product->description}}</textarea>
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </div><br><br>
                        
                        <div class="form-group">
                            <label for="name">Product Image   </label>
                            <img src="{{asset('storage/images/'.$product->image)}}" width="80" alt="">
                            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="quantity">Product Quantity</label>
                            <input type="number" name="quantity" class="form-control" value="{{$product->quantity}}" id="exampleInputEmail1" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </div>


                        <div class="form-group">
                            <label for="name">Product gallery</label>
                            <input type="file" name="gallery[]" multiple class="form-control" id="exampleInputEmail1" placeholder="Product gallery" aria-describedby="exampleInputEmail1-error" aria-invalid="true">

                            @foreach($product->gallery as $gImage)
                            <img class ="pl-5 pb-4" src="{{'/storage/galleries/'.$gImage}}" width="200px" height="300px" alt="">
                            @endforeach
                        </div>

                        <div class="form-group">
                            <label for="category_id">Product Category</label>
                            <select name="category_id" id="">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" {{ $category->id == $product->category_id ? 'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('name')
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