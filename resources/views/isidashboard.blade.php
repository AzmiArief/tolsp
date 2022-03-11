@extends('dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container mt-lg-5 mt-3">
        <div class="row">
            <div class="col-lg-12 col-12 text-center">
                <a href="#"style="text-decoration: none ;"><h1 class="title"><span class="my">MY</span> <span class="blog">BLOG</span></h1> </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12 text-center">
               
            </div>
        </div>
        <div class="row mt-lg-4 mt-4 mb-4">   
            <div class="col-lg-4 col-12 mb-3">
                <div class="card">
                    <img src="../../assets/images/awok.jpg" class="card-img-top"  alt="">
                    <div class="card-body">
                       
                       <h4 class="card-title font-weight-bold mr-5"></h4>                 
                        <p class="card-text"></p>
                        <div class="row">
                            <div class="col-4">
                                <a href="" class="btn btn-primary">Read more &rarr;</a>
                            </div>
                            <div class="col-8">
                                <p class="text-gray small ml-5">
                                    <i class="far fa-calendar-alt"></i> 
                                    <a href="" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-user-edit"></i> 
                                    </a>
                                  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-3">
                <div class="card">
                    <img src="../../assets/images/bocil.jpg" class="card-img-top"  alt="">
                    <div class="card-body">
                       
                       <h4 class="card-title font-weight-bold mr-5"></h4>                 
                        <p class="card-text"></p>
                        <div class="row">
                            <div class="col-4">
                                <a href="" class="btn btn-primary">Read more &rarr;</a>
                            </div>
                            <div class="col-8">
                                <p class="text-gray small ml-5">
                                    <i class="far fa-calendar-alt"></i> 
                                    <a href="" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-user-edit"></i> 
                                    </a>
                                  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-3">
                <div class="card">
                    <img src="../../assets/images/tak.png" class="card-img-top"  alt="">
                    <div class="card-body">
                       
                       <h4 class="card-title font-weight-bold mr-5"></h4>                 
                        <p class="card-text"></p>
                        <div class="row">
                            <div class="col-4">
                                <a href="" class="btn btn-primary">Read more &rarr;</a>
                            </div>
                            <div class="col-8">
                                <p class="text-gray small ml-5">
                                    <i class="far fa-calendar-alt"></i> 
                                    <a href="" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-user-edit"></i> 
                                    </a>
                                  </p>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- /.content -->
@endsection