@extends('layouts.adminmaster')

@section('title', 'LISTE DES INFIRMIERS')


@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Infirmiers</h1>
          </div><!-- /.col -->
          </div>
      
      </div>



            </div>
          <section class="content">
      <div class="container-fluid">
    <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">LISTE DES INFIRMIERS</h3>
                <div class="float-lg-right">

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                Ajouter Un infirmier
                </button>
                </div><br>
              </div>
              <!-- /.card-header -->
              @if (session('txt3')) 
                <div class="alert alert-success"> {{(session('txt3'))}}
                   </div>
            @endif
            @if (session('txt1')) 
                <div class="alert alert-danger"> {{(session('txt1'))}}
                   </div>
            @endif           
             @if (session('txt')) 
                <div class="alert alert-danger"> {{(session('txt'))}}
                   </div>
            @endif
              <div class="card-body">

              <table id="example1" class="table table-borderless">
                  <thead>
                  <tr  class="table-info">
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Phone</th>
                    <th>Service</th>
                    <th>Supprimer</th>
                  </tr>
                  </thead>
                  <tbody>


                  @foreach ($infirmier as $infirmier)
                  <tr>
                    <td>{{ $infirmier -> inf_id}}</td>
                    <td>{{ $infirmier -> lname}}</td>
                    <td>{{ $infirmier -> name}}</td>
                    <td>{{ $infirmier -> gender}}</td>
                    <td>{{ $infirmier -> phone}}</td>
                    <td>{{ $infirmier -> service}}</td>

                    <td> 
                    <a href="{{ route('deleteinfirmiers',$infirmier->id)}}"  
                    class="btn btn-danger" 
                    onclick="return confirm('Voulez vous vraiment supprimer cet infirmier?')">
                   
                      <i class="fa-solid fa-ban red" title="supprimer"></i></a>
                  
                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr  class="table-info">
                  <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Phone</th>
                    <th>Service</th>
                    <th>Supprimer</th>

                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
             <!-- /.card -->

             <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ajouter Un Infirmier</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="main-block">
      <div class="left-part">
        <img src="{{ asset('assets/dist/img/infirmier.png')}}" class="img-circle img-fluid mx-auto d-block">
      </div>
      <form action="{{url('admin/addinfirmeirs')}}" method="get">
      @csrf
        <div class="title">

        </div>
        <div class="info">
          
              <input required type="text" name="name" placeholder="Prénom">
              <input required  type="text" name="lname" placeholder="Nom">
              <input required type="text" name="inf_id" placeholder="Numéro Carte Nationale">

              <select required name="gender" id="">
              <option value="" disabled selected>Sexe</option>
              <option value="Femme">Femme</option>
              <option value="Homme">Homme </option>
              </select>
              <input required type="phone" name="phone" placeholder="Phone">

              <select required name="service" id="">
              <option value="" disabled selected>Choisissez un service</option>
              @foreach ($service as $service )
              <option value="{{$service ->name}}">{{$service ->name}} </option>
              @endforeach
              </select>
            </div>

    </div>
    </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-add">VALIDER</button>
            </div>
          </div>
          </form>

          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
            </div>
</section>


@endsection