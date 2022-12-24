@extends('layouts.adminmaster')

@section('title', 'LISTE DES PATIENTS HÔSPITALISÉS')


@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">PATIENTS HÔSPITALISÉS </h1>
          </div><!-- /.col -->
          </div>
      
      </div>



            </div>
          <section class="content">
      <div class="container-fluid">
    <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">LISTE DES PATIENTS HÔSPITALISÉS</h3>
                <div class="float-lg-right">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                      Ajouter Un Patients
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
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>ID</th>
                    <th>Phone</th>
                    <th>Adresse</th>
                    <th>Groupe sanguin</th>
                    <th>Sexe</th>
                    <th>Age</th>
                    <th>Chambre</th>
                    <th>Maladies</th>
                    <th>Médecin DÉSIGNÉ</th>

                    <th>Supprimer</th>

                  </tr>

                  </thead>
                  <tbody>
                  @foreach ($malade as $malade)
                  <tr>
                    <td>{{ $malade -> name}}</td>
                    <td>{{ $malade -> lname}}</td>
                    <td>{{ $malade -> pat_id }}</td>
                    <td>{{ $malade -> phone}}</td>
                    <td>{{ $malade -> address}}</td>
                    <td>{{ $malade -> bloodgroup}}</td>
                    <td>{{ $malade -> gender}}</td>
                    <td>{{ $malade -> age}}</td>
                    <td>{{ $malade -> chambre}}</td>
                    <td>{{ $malade -> maladie}}</td>
                    <td>{{ $malade -> id_medecin}}</td>
                    <td>{{ $malade -> date_hosp}}</td>


                    <td> 
                    <a href="{{ route('deletepatients',$malade->id)}}"  
                    class="btn btn-danger" 
                    onclick="return confirm('Voulez vous vraiment supprimé ce Patient?')">
                   
                      <i class="fa-solid fa-ban red" title="supprimer"></i></a>
                  
                  </td>
                  </tr>
                  @endforeach

                  </tr>

                  </tbody>
                  <tfoot>
                  <tr  class="table-info">
                  <th>Nom</th>
                    <th>Prénom</th>
                    <th>ID</th>
                    <th>Phone</th>
                    <th>Adresse</th>
                    <th>Groupe sanguin</th>
                    <th>Sexe</th>
                    <th>Age</th>
                    <th>Chambre</th>
                    <th>Maladies</th>
                    <th>Médecin DÉSIGNÉ</th>

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
              <h4 class="modal-title">Ajouter Un Malade</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="main-block">
      <div class="left-part">
        <img src="{{ asset('assets/dist/img/malades.png')}}" class="img-circle img-fluid mx-auto d-block">
      </div>
        <div class="title">

        </div>
        <form action="{{url('admin/addmalades')}}" method="get">
      @csrf

        <div class="info">
          
              <input required type="text" name="name" placeholder="Prénom">
              <input required type="text" name="lname" placeholder="Nom">
              <input required type="text" name="pat_id" placeholder="Numéro Carte Nationale">
              <select required name="gender" id="">
              <option value="" disabled selected>Sexe</option>
              <option value="Femme">Femme</option>
              <option value="Homme">Homme </option>
              </select>
              <input required type="text" name="phone" placeholder="Phone">
              <input required type="text" name="address" placeholder="Adresse">
              <input required type="text" name="chambre" placeholder="Chambre">
              <input required type="number" name="age" placeholder="age">
              <select required name="bloodgroup" id="">
              <option value="" disabled selected>Groupe sanguin</option>
              <option value="A-">A-</option>
              <option value="A+">A+ </option>
              <option value="B-">B-</option>
              <option value="B+">B+</option>
              <option value="AB-">AB-</option>
              <option value="AB+">AB+</option>
              <option value="O-">O-</option>
              <option value="O+">O+</option>
              </select>
              <select required name="id_medecin" id="">
              <option value="" disabled selected>MEDECIN DÉSIGNÉ</option>
              @foreach ($med as $med)
              <option value="{{$med -> fname}} {{ $med -> lname}}">{{ $med -> fname}} {{ $med -> lname}}</option>
              @endforeach
              </select>
              <select required name="maladie" id="">
              <option value="" disabled selected>Type de Cancer</option>
              @foreach ($type as $type)
              <option value="{{$type -> typedecancer}}">{{ $type -> typedecancer}}</option>
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