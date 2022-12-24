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
              <h3 class="card-title float-left">     DEMANDE DE {{ $demande -> nom}} {{ $demande -> prenomfr}}</h3>
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
                  <form action="{{url('user/generate-demande')}}" method="GET">
              @csrf
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content"   aria-labelledby="logins-part-trigger">
                    <div class="row">
                    <div class="col">
                          <div class="form-group form-outline">
                          <label for="exampleInputEmail1"> Prénom </label>
                            <input type="text" class="form-control" name="prenomfrimp" id="prenomfrimp" value="{{ $demande -> prenomfr}}" readonly>

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Nom  </label> 
                            <input type="text" class="form-control"  name="nomfrimp" value="{{ $demande -> nomfr}}" readonly>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Fonction  </label>
                            <input type="text" class="form-control"  name="fonctionfrimp" value="{{ $demande -> fonctionfr}}" readonly>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Grade Actuel  </label>
                            <input type="text" class="form-control"  name="gradefrimp" value="{{ $demande -> gradefr}}" readonly>
                          </div>
                        
                          </div>
                          <div class="col float-right">
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> الإسم </label>
                            <input type="text" class="form-control" dir="rtl"  name="nomarimp"  value="{{ $demande -> nomar}}" readonly>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> اللقب </label>
                            <input type="text" class="form-control" dir="rtl"  name="prenomarimp"  value="{{ $demande -> prenomar}}" readonly>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> الوظيفة </label>
                            <input type="text" class="form-control" dir="rtl"  name="fonctionarimp"  value="{{ $demande -> fonctionar}}" readonly>
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> الرتبة الحالية </label>
                            <input type="text" class="form-control" dir="rtl"  name="gradearimp"  value="{{ $demande -> gradear}}" readonly> 
                          </div>
                   </div>
                   <div class="row">
                   
                          <fieldset class="border p-3">
                        <legend align="right" class="w-auto float-none" >Contact | معلومات الإتصال </legend>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> Numéro de telephone |رقم الهاتف </label>
                            <input type="text" class="form-control" dir="rtl"  name="numtelimp"  value="{{ $demande -> numtel}}" readonly>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> Email | البريد الالكتروني  </label>
                            <input type="text" class="form-control" dir="rtl"  name="emailimp"  value="{{ $demande -> email}}" readonly>
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
                            <label for="exampleInputEmail1" class="float-right"> Déterminer le type de ... requis | تحديد نوع الحركية المطلوبة </label>
                            <input type="text" class="form-control"  dir="rtl"  name="typearimp" value="{{ $demande -> typear}}" readonly>
                          </div>

                          <fieldset class="border p-3">
                        <legend align="right" class="w-auto float-none"> Future Destination |الوجهة المستقبلية</legend>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> Pays |البلد </label>
                            <input type="text" class="form-control"  dir="rtl"  name="paysarimp"  value="{{ $demande -> paysar}}" readonly>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> Etablissement universitaire | المؤسسة الجامعية </label>
                            <input type="text" class="form-control"  dir="rtl"  name="univarimp"  value="{{ $demande -> univar}}" readonly>
                          </div>

                        </fieldset>
<br>

</div>  
</div>
<div class="row">
<div class="form-group center">
                            <label for="exampleInputEmail1">La durée du séjour | مدة الإقامة   </label>
                            <input type="text" class="form-control" type="number"   name="durefrimp" value="{{ $demande -> durefr}}" readonly>
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> هل استفدتم من المنحة من قبل ؟  </label>
                            <select  id="ouinon" class="form-control"  name="ouinonimp"  dir="rtl" readonly>
                                <option value=""  class="form-control  " readonly selected> {{ $demande -> ouinon}} </option>
                            </select>   
                            <br>
                          <div id="ouinonDIV"> 
                            <div class="form-group">
                              <label for="exampleInputEmail1" class="float-right">  السنة  </label>
                              <input type="text" class="form-control"  name="anneeimp" value="{{ $demande -> annee}}"   dir="rtl" readonly>
                            </div>  
                            <div class="form-group">
                                      <label for="exampleInputEmail1" class="float-right">  هل تم استهلاك هذه المنحة ؟  </label>
                                      <select  id="" class="form-control"  name="bourseimp"   dir="rtl"  readonly>
                                          <option class="form-control  " readonly selected> {{ $demande -> bourse}} </option>
                                       </select>   
                          </div>  
                        </div>
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
                            <label for="exampleInputEmail1" class="float-right"> Les objectifs | الهدف من الحركية </label>
                            <textarea   class="form-control"  dir="rtl" value="" name="butarimp"  readonly>{{ $demande -> butar}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> Méthodologie | المنهجية </label>
                            <textarea   class="form-control"  dir="rtl" value=""  name="butarimp" readonly > {{ $demande -> butar}}</textarea>

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right">  Résultats attendus |النتائج المنتظرة</label>
                            <textarea   class="form-control"  dir="rtl" value=""  name="nomfr"  readonly>{{ $demande -> nomfr}}</textarea>

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

          </div>

            </div><!-- /.col -->
        </div>
    </div>
    </form>

</div>


@endsection