@extends('layouts.adminmaster')

@section('title', 'LISTE DES CONTRACTUELS')


@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contractuels</h1>
          </div><!-- /.col -->
          </div>
      
      </div>



            </div>
          <section class="content">
      <div class="container-fluid">
    <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">LISTE DES CONTRACTUELS</h3>
                <div class="float-lg-right">

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                Ajouter Un contractuel
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
                    <th>Poste</th>
                    <th>Supprimer</th>
                  </tr>
                  </thead>
                  <tbody>


                  @foreach ($contractuel as $contractuel)
                  <tr>
                    <td>{{ $contractuel -> contract_id}}</td>
                    <td>{{ $contractuel -> lname}}</td>
                    <td>{{ $contractuel -> name}}</td>
                    <td>{{ $contractuel -> gender}}</td>
                    <td>{{ $contractuel -> phone}}</td>
                    <td>{{ $contractuel -> poste}}</td>
                    <td> 
                    <a href="{{ route('deletestaffcontract',$contractuel->id)}}"  
                    class="btn btn-danger" 
                    onclick="return confirm('Voulez vous vraiment supprimer ce contractuel?')">
                   
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
             <!-- /.card -->

             <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ajouter Un Contractuel</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="main-block">
      <div class="left-part">
        <img src="{{ asset('assets/dist/img/contractuel.png')}}" class="img-circle img-fluid mx-auto d-block">
      </div>
      <form action="{{url('admin/addstaffcontract')}}" method="get">
      @csrf
        <div class="title">

        </div>
        <div class="info">
          
              <input required  type="text" name="name" placeholder="Prénom">
              <input required   type="text" name="lname" placeholder="Nom">
              <select required name="gender" id="">
              <option value="" disabled selected>Sexe</option>
              <option value="Femme">Femme</option>
              <option value="Homme">Homme </option>
              </select>
              <input required  type="phone" name="phone" placeholder="Phone">
              <input required  type="text" name="contract_id" placeholder="Numéro Carte Nationale">

              <select required name="poste" id="">
              <option value="" disabled selected>Type de Contrat</option>
              <option value="OP 1">OP 1 </option>
              <option value="OP 2">OP 2 </option>
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