@extends('layouts.master')

@section('student-navbar')
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link">
                <i class="fa-solid fa-gauge-high nav-icon"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/add-group') }}" class="nav-link">
                <i class="fa-solid fa-user-group nav-icon"></i>
                <p>Members</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/room') }}" class="nav-link">
                <i class="fa-solid fa-users nav-icon" aria-hidden="true"></i>
                <p>
                    Room
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-file nav-icon"></i>
                <p>File Submission</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-star nav-icon"></i>
                <p>Ratings</p>
            </a>
        </li>
    </ul>
@endsection

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
                <form action="{{ url('add-group') }}" method="POST">
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
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Course</label>
                            <input type="text" class="form-control" name="course">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Section</label>
                            <input type="text" class="form-control" name="section">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">CREATE</button>
                    <button type="submit" class="btn btn-secondary">EDIT</button>
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
                        <th scope="col">Section</th>
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
                                    <td>{{ $group->section }}</td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus-circle"> ADD MEMBERS</i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Members</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('add-members') }}" method="POST">
                                    @csrf
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="lastName">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="firstName">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="exampleFormControlInput1" class="form-label">MI</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="mi">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">ADD</button>
                                        </div>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Last Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">MI</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($members))
                        @foreach($members as $member)
                            <tr>
                                <td>{{ $member->lastName }}</td>
                                <td>{{ $member->firstName }}</td>
                                <td>{{ $member->mi }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>

        </div>

    </div></br>
@endsection
