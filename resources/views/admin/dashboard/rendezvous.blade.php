@extends('layouts.scripts')

@section('title', 'Rendz-vous')


@section('content')


<div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Rendez-vous</h1>
          </div><!-- /.col -->
          </div>
            </div>
            </div>
          <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
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
      <div id="calendar">
        <form action="{{url('admin/addrdv')}}" method="get" style="background:transparent;">
      @csrf
                    <div id="fullCalModal" class="modal fade">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                      <span class="sr-only">close</span></button>
                                                  <h4 id="modalTitle" class="modal-title">Ajouter un rendez-vous</h4>
                                                  </div>
                                                  <div id="modalBody" class="modal-body"> 
                                                    <input type="text"  placeholder="Nom" name="name_p">
                                                    <input type="text"  placeholder="Prénom" name="fname_p">  
                                                    <input type="text" name="id_p" placeholder="Numéro Carte Nationale" style="width:100%;">
                                                      <br>                                
                                                      <select required name="sexe" id="">

                                                              <option value="" disabled selected>Sexe</option>
                                                              <option value="Femme">Femme</option>
                                                              <option value="Homme">Homme </option>
                                                      </select>
                                                    <input type="text" name="age_p" placeholder="age">
                                                    <select required name="bloodtype_p" id="">
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
                                                      <input type="text" name="date" id='id1' readonly>                           
                                                      <textarea name="remarque_event" id="" style="width:100%;"  placeholder="Remarques"></textarea>                 
                                                  </div>
                                                  <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-add">VALIDER</button>
                                                  </div>
                                              </form>
                                              </div>

                                          </div>
            </div>
            <div id="infoModal" class="modal fade">

            <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                      <span class="sr-only">close</span></button>
                                                  <h4 id="modalTitle" class="modal-title"> Info Rendez-Vous</h4>
                                                  </div>
                                                  <div id="modalBody" class="modal-body"> 
                                                  Nom Patient :  
                                                  </div>

                                                  <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  </div>
            </div>

         
</section>

@endsection

