@extends('layouts.adminmaster')

@section('title', 'LISTE DES STAFFS ADINISTRATION')


@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">STAFFS ADINISTRATION</h1>
          </div><!-- /.col -->
          </div>
      
      </div>



            </div>
          <section class="content">
      <div class="container-fluid">
    <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">LISTE DES STAFFS ADINISTRATION</h3>
                <div class="float-lg-right">

                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                      Ajouter Un Administrateur
                      </button>
              </div>
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
                    <th>Poste</th>
                    <th>Supprimer</th>
                  </tr>
                  </thead>
                  <tbody>

                  @foreach ($staffadmin as $staffadmin)
                  <tr>
                    <td>{{ $staffadmin -> admin_id}}</td>
                    <td>{{ $staffadmin -> lname}}</td>
                    <td>{{ $staffadmin -> name}}</td>
                    <td>{{ $staffadmin -> gender}}</td>
                    <td>{{ $staffadmin -> phone}}</td>
                    <td>{{ $staffadmin -> poste}}</td>
    

                    <td> 
                    <a href="{{ route('deletestaffadmin',$staffadmin->id)}}"  
                    class="btn btn-danger" 
                    onclick="return confirm('Voulez vous vraiment supprimer cet administrateur?')">
                   
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
                    <th>Poste</th>
                    <th>Supprimer</th>

                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           <!-- /.card-body -->
           </div>
             <!-- /.card -->
             <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ajouter Un Administrateur</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="main-block">
      <div class="left-part">
        <img src="{{ asset('assets/dist/img/admin.png')}}" class="img-circle img-fluid mx-auto d-block">
      </div>
      <form action="{{url('admin/addstaffadmin')}}" method="get">
      @csrf
              <div class="title">
        
        </div>
        <div class="info">
          
              <input required  type="text" name="name" placeholder="Prénom">
              <input required  type="text" name="lname" placeholder="Nom">
              <input required  type="text" name="admin_id" placeholder="Numéro Carte Nationale">

              <select required name="gender" id="">

              <option value="" disabled selected>Sexe</option>
              <option value="Femme">Femme</option>
              <option value="Homme">Homme </option>
              </select>
              <input required  type="phone" name="phone" placeholder="Phone">
              <select required name="poste" id="">
              <option value="" disabled selected>Poste</option>
              <option value="Conseillé">Conseillé</option>
              <option value="Administrateur Principal">Administrateur Principal</option>
              <option value="Administrateur">Administrateur </option>
              <option value="Administrateur">Aide Administrateur </option>
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