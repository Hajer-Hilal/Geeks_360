@extends('dashboard.layout.layout')

@section('page-title', 'STUDENTS')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Students</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">update student</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('register.view') }}" class="btn btn-dark"> Add New  <i class="fas fa-user-plus nav-icon"></i></a>
                                
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width:10px">id</th>
                                            <th style="width:10px">fullname</th>
                                            <th style="width:10px">email</th>
                                            <th style="width:10px">phone</th>
                                            <th style="width:10px">gender</th>
                                            <th style="width:10px">major</th>
                                            <th style="width:10px">course</th>
                                            <th style="width:10px">university</th>
                                            <th style="width:10px">university_location</th>
                                            <th style="width:10px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($trainee as $tr )
                                          
                                     
                                            <tr>
                                                <td>{{ $tr->trainee_id }}</td>
                                                <td>{{ $tr->full_name }}</td>
                                                <td> {{ $tr->email }}</td>
                                                <td>{{ $tr->phone }}</td>
                                                <td>{{ $tr->gender }}</td>
                                                @foreach($majors as $mj)
                                                @if($tr->major==$mj->id)
                                                <td>{{ $mj->name }}</td>
                                                @endif
                                                @endforeach
                                                @foreach($courses as $co)
                                                @if($tr->Course_id==$co->id)
                                                <td> {{ $co->name}}</td>
                                                @endif
                                                @endforeach
                                                @foreach($university as $un)
                                              @if($tr->University_id==$un->id)
                                                <td>{{ $un->name }}</td>
                                                 <td>{{ $un->location}}</td> 
                                                 @endif
                                                 @endforeach
                                                <td>
                                                  {{-- {{ route('edit.view',['id'=>$tr->id]) }} --}}
                                                    <a href="{{ route('edit.view',['id'=>$tr->id]) }}"
                                                        class="btn btn-outline-warning btn-xs">
                                                    <i class="fas fa-user-edit nav-icon"></i>
                                                    </a>
                                                         
                                                           
                                                    <br />
                                                    {{-- {{ route('delete',['id'=>$tr->id]) }} --}}
                                                    <form action="{{ route('delete',['id'=>$tr->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-xs">
                                                        <i class="fas fa-user-times nav-icon"></i>
                                                        </button>
                                                    </form>
                                                </td> 
                                            </tr>
                                       
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                               
                                 {{-- <ul class="pagination pagination-sm m-0 float-right">
                                  <li>{{ $tr->links('pagination::bootstrap-4') }}</li>
                                   
                                </ul>   --}}
                                
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection