@extends('home')

@yield('student-navbar')

@section('head-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Team</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">members</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
                <form action="{{ url('student.display') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail4">Team Name</label>
                        <input type="text" class="form-control" name="teamName">

                    </div>
                    <hr>
                    <h5>Team Leader</h5>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="LastName">Last Name</label>
                            <input type="text" class="form-control" name="lastName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress">First Name</label>
                            <input type="text" class="form-control" name="firstName">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress">MI</label>
                            <input type="text" class="form-control" name="mi">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Course</label>
                            <input type="text" class="form-control" name="course">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Year</label>
                            <input type="text" class="form-control" name="year">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Section</label>
                            <input type="text" class="form-control" name="section">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">CREATE</button>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Team Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">MI</th>
                        <th scope="col">Course</th>
                        <th scope="col">Year</th>
                        <th scope="col">Section</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(isset($groups))
                            @foreach($groups as $group)
                                <tr>
                                    <td>{{ $group->teamName }}</td>
                                    <td>{{ $group->lastName }}</td>
                                    <td>{{ $group->firstName }}</td>
                                    <td>{{ $group->mi }}</td>
                                    <td>{{ $group->course }}</td>
                                    <td>{{ $group->year }}</td>
                                    <td>{{ $group->section }}</td>
                                    <td><a href="{{ route('student.edit') }}"><i class="far fa-edit"></i></a></td>
                                    <td><a href="#" style="color: red;"><i class="far fa-trash-alt"></i></a></td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
