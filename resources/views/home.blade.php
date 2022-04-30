@extends('layouts.master')

@section('head-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">dashboard</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

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
            <a href="{{ route('student.display') }}" class="nav-link">
                <i class="fa-solid fa-user-group nav-icon"></i>
                <p>Group</p>
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

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>File Submitted</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-file"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Room Join</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>All Room</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Unsubmitted File</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-file"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>

    </div>
@endsection
