@extends('layouts.master')

@section('head-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Member</h1>
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
                <form action="member" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail4">Team Name</label>
                        <input type="text" class="form-control" name="teamLeader">
                        <label for="inputEmail4">Team Leader</label>
                        <input type="text" class="form-control" name="teamLeader">

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Course</label>
                            <input type="text" class="form-control" name="course">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Section</label>
                            <input type="email" class="form-control" name="section">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="LastName">Last Name</label>
                            <input type="text" class="form-control" name="lastName1">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress">First Name</label>
                            <input type="text" class="form-control" name="firstName1">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress">MI</label>
                            <input type="text" class="form-control" name="mI1">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="lastName2">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="firstName2">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="mI2">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="lastName3">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="firstName3">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="mI3">
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
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div></br>
@endsection
