@extends('admin.layouts.master')
@section('page-content')
<div class="content-wrapper" style="min-height: 2077.69px;">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Payment methods</h1>
                </div>

            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="card">
                @include('admin.layouts.inc.session-message')
                <form id="quickForm" novalidate="novalidate" action="{{route('payment.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Payment Method Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Method Name" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
                            @error('name')
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