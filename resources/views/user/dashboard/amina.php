@extends('layouts.usermaster')

@section('title', 'USER HOME')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
              <h3 class="card-title float-right">  طلب   </h3>
              <h3 class="card-title float-left">     demande </h3>
              </div> 
            <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" dir="rtl">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Informations personelles | معلومات شخصية</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#test-part">
                      <button type="button" class="step-trigger"   aria-controls="v-part" id="test-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label"> Informations | معلومات حول الحركة</span>
                      </button>
                    </div>

                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Projet de recherche | مشروع البحث </span>
                      </button>
                    </div>
                  </div>

                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
            <div id="logins-part" class="content"   aria-labelledby="logins-part-trigger">
                  <div class="row">
                    <div class="col">
                          <div class="form-group form-outline">
                          <label for="exampleInputEmail1"> Prénom </label>
                            <input type="text" class="form-control" placeholder="" value="{{ $demande -> prenomfr}}" disabled>

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Nom  </label> 
                            <input type="text" class="form-control" placeholder="" value="{{ $demande -> nomfr}}" disabled>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Fonction  </label>
                            <input type="text" class="form-control" placeholder="" value="{{ $demande -> fonctionfr}}" disabled>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Grade Actuel  </label>
                            <input type="text" class="form-control" placeholder="" value="{{ $demande -> gradefr}}" disabled>
                          </div>
                        
                          </div>
                        <div class="col float-right">
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> الإسم </label>
                            <input type="text" class="form-control" dir="rtl" placeholder="" value="{{ $demande -> nomar}}" disabled>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> اللقب </label>
                            <input type="text" class="form-control" dir="rtl" placeholder="" value="{{ $demande -> prenomar}}" disabled>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> الوظيفة </label>
                            <input type="text" class="form-control" dir="rtl" placeholder="" value="{{ $demande -> fonctionar}}" disabled>
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> الرتبة الحالية </label>
                            <input type="text" class="form-control" dir="rtl" placeholder="" value="{{ $demande -> gradear}}" disabled> 
                          </div>
                        </div>
                        <div class="row">
                          <fieldset class="border p-3">
                              <legend align="right" class="w-auto float-none" >Contact | معلومات الإتصال </legend>
                                <div class="form-group">
                                <label for="exampleInputEmail1" class="float-right"> Numéro de telephone |رقم الهاتف </label>
                                <input type="text" class="form-control" dir="rtl" placeholder="" value="{{ $demande -> numtel}}" disabled>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1" class="float-right"> Email | البريد الالكتروني  </label>
                                <input type="text" class="form-control" dir="rtl" placeholder="" value="{{ $demande -> email}}" disabled>
                              </div>
                          </fieldset>
                        </div>
                   </div>
                   <br>
                      <div class="col-md-12 text-center">
                        <a class="btn btn-primary center" onclick="stepper.next()"> Suivant | متابعة </a>
                      </div>
                </div>

                    <div id="test-part" class="content"   aria-labelledby="test-part-trigger">
                      <div class="row">
                          <div class="col"> 
                              <div class="form-group">
                                <label for="exampleInputEmail1"> Déterminer le type de ... requis </label>
                                <input type="text" class="form-control" placeholder="" value="{{ $demande -> typefr}}" disabled>
                              </div>
                              <fieldset class="border p-3">
                                <legend  class="w-auto float-none"> Future Destination </legend>
                                <div class="form-group">
                                  <label for="exampleInputEmail1"> Pays </label>
                                  <input type="text" class="form-control"  dir="rtl" placeholder="" value="{{ $demande -> paysfr}}" disabled>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1"> Université </label>
                                  <input type="text" class="form-control"  dir="rtl" placeholder="" value="{{ $demande -> univfr}}" disabled>
                                </div>
                              </fieldset>
                         </div>
                        <div class="col"> 
                                <div class="form-group">
                                  <label for="exampleInputEmail1" class="float-right"> تحديد نوع الحركة المطلوبة </label>
                                  <input type="text" class="form-control"  dir="rtl" placeholder="" value="{{ $demande -> typear}}" disabled>
                                </div>
                                <fieldset class="border p-3">
                                  <legend align="right" class="w-auto float-none" >الوجهة المستقبلية</legend>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1" class="float-right"> البلد </label>
                                      <input type="text" class="form-control"  dir="rtl" placeholder="" value="{{ $demande -> paysar}}" disabled>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1" class="float-right"> الجامعة </label>
                                      <input type="text" class="form-control"  dir="rtl" placeholder="" value="{{ $demande -> univar}}" disabled>
                                    </div>
                                </fieldset>
                                      <br>

                        </div>  
                      </div>
                        <div class="row">
                          <div class="form-group">
                            <label for="exampleInputEmail1">La durée du séjour | مدة الإقامة   </label>
                            <input type="text" class="form-control" type="number"  placeholder="" value="{{ $demande -> durefr}}" disabled>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> هل استفدتم من المنحة من قبل ؟  </label>
                            <select  id="ouinon" class="form-control"  dir="rtl" disabled>
                                <option value=""  class="form-control  " disabled selected> {{ $demande -> ouinon}} </option>
                            </select>   
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1" class="float-right" disabled>  السنة  </label>
                              <input type="text" class="form-control" value="{{ $demande -> annee}}"  dir="rtl" placeholder="" id="reservationdate" >
                          </div>  
                          <div class="form-group">
                                      <label for="exampleInputEmail1" class="float-right">  هل تم استهلاك هذه المنحة ؟  </label>
                                      <select  id="" class="form-control"  dir="rtl"  disabled>
                                          <option value="{{ $demande -> bourse}}" class="form-control  " disabled selected>  </option>
                                       </select>   
                          </div>
                        </div>
                        <br>
                        <div class="col-md-12 text-center">
                            <a class="btn btn-primary" onclick="stepper.previous()">Précédent | عودة </a>

                            <a class="btn btn-primary" onclick="stepper.next()">Suivant | متابعة </a>

                        </div>
                      </div>

                    <div id="information-part" class="content"   aria-labelledby="information-part-trigger">
                          <div class="row">
                            <div class="col"> 
                                <div class="form-group">
                                  <label for="exampleInputEmail1" > Le but </label>
                                  <textarea   class="form-control"  value="" disabled>{{ $demande -> butfr}}</textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1"  > Méthodologie </label>
                                  <textarea   class="form-control"  value="" disabled>{{ $demande -> methofr}}</textarea>
                                </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1"  >  Résultats attendus</label>
                                  <textarea   class="form-control" value="" disabled >{{ $demande -> resfr}}</textarea>
                              </div>
                            </div>
                            <div class="col"> 
                                <div class="form-group">
                                  <label for="exampleInputEmail1" class="float-right"> الهدف من الحركة </label>
                                  <textarea   class="form-control"  dir="rtl" value="" disabled>{{ $demande -> butar}}</textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1" class="float-right"> المنهجية </label>
                                  <textarea   class="form-control"  dir="rtl" value="" disabled > {{ $demande -> methoar}}</textarea>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1" class="float-right">  النتائج المنتظرة</label>
                                  <textarea   class="form-control"  dir="rtl" value="" disabled>{{ $demande -> nomfr}}</textarea>
                                </div>
                             </div>
                            </div>
                            <div class="col-md-12 text-center">
                                 <a class="btn btn-primary" onclick="stepper.previous()">Précédent | عودة </a>
                            </div>
                        </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->          
              <div class="card-footer">
              <button type="submit" class="btn btn-primary center"> Imprimer | طباعة</button>

          </div>
            </div><!-- /.col -->
        </div>
    </div>
</div>


@endsection