@extends('admin.layouts.master')
@section('page-content')
<div class="content-wrapper" style="min-height: 2077.69px;">

       <section class="content-header">
              <div class="container-fluid">
                     <div class="row mb-2">
                            <div class="col-sm-6">
                                   <h1>homes list</h1>
                            </div>

                     </div>
              </div>
       </section>


       <section class="content">
              <div class="container-fluid">
                     <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                   <table class="table table-bordered">
                                          <thead>
                                                 <th>ID</th>
                                                 <th>Name</th>
                                                 <th>Logo</th>
                                                 <th>Speciality</th>
                                                 <th>Introduction</th>
                                                 <th>Edit</th>
                                                 <th>Delete</th>
                                          </thead>
                                          <tbody>
                                                 @foreach($home as $homes)
                                                 <tr>

                                                        <td>{{$homes->id}}</td>
                                                        <td>{{$homes->name}}</td>
                                                        <td>{{$homes->logo}}</td>
                                                        <td>{{$homes->speciality}}</td>
                                                        <td>{{$homes->intro}}</td>
                                                        <td><a class="btn btn-success" href="{{route('homes.edit',$homes->id)}}">Edit</a></td>
                                                        <td>Delete</td>
                                                 </tr>
                                                 @endforeach
                                          </tbody>
                                   </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                   <ul class="pagination pagination-sm m-0 float-right">
                                          <li class="page-item"><a class="page-link" href="#">«</a></li>
                                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                                          <li class="page-item"><a class="page-link" href="#">»</a></li>
                                   </ul>
                            </div>
                     </div>
              </div>
       </section>
       <!-- /.content -->
</div>

@endsection