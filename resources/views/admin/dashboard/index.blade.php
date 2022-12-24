@extends('layouts.adminmaster')

@section('title', 'ADMIN HOME')


@section('content')


<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          </div>
            </div>
            </div>
          <section class="content ">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="myrow">
          <h1 class="m-0"></h1>

          </div>      
      </div>
      <br>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$cmedecin}}</h3>

                <p>Médecins</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-stethoscope"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$cmalades}}</h3>

                <p> Patients Hôspitalisés</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-user-injured"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$cinfirmiers}}</h3>

                <p>Infirmiers</p>
              </div>
              <div class="icon">
              <i class="nav-icon fa-sharp fa-solid fa-user-nurse"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$cpharmaciens}}</h3>

                <p>Pharmaciens</p>
              </div>
              <div class="icon">
              <i class="nav-icon fa-solid fa-user-doctor"></i>
              </div>
            </div>
          </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$claborantines}}</h3>

                <p>Laborantines</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-vial"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>0</h3>

                <p>Rendez-vous à arriver</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-calendar-week"></i>              
              </div>
            </div>
          </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$cchambre}}</h3>

                <p>Chambres occupées</p>
              </div>
              <div class="icon">
              <i class="fas fa-hospital-alt"></i>
                          </div>
            </div>
          </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$cservices}}</h3>

                <p> Services </p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
        
        </div>

            </div>
</section>

@endsection