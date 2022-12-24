@extends('layouts.usermaster')

@section('title', 'USER HOME')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                @if (session('txt')) 
                <div class="alert alert-warning"> {{(session('txt'))}} </div>
            @endif
    <div class="content-header">
      
      <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
              <h3 class="card-title float-right"> إضافة طلب   </h3>
              <h3 class="card-title float-left">    Ajouter une demande </h3>
              </div>
              <form class="user" action="" method="POST">
              {{csrf_field()}}  
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
                            <input type="text" class="form-control" placeholder="" name="prenomfr" required>

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Nom  </label>
                            <input type="text" class="form-control" placeholder="" name="nomfr" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Fonction  </label>
                            <input type="text" class="form-control" placeholder="" name="fonctionfr" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Grade Actuel  </label>
                            <input type="text" class="form-control" placeholder="" name="gradefr" required>
                          </div>
                        
                          </div>
                          <div class="col float-right">
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> الإسم </label>
                            <input type="text" class="form-control" dir="rtl" placeholder="" name="nomar" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> اللقب </label>
                            <input type="text" class="form-control" dir="rtl" placeholder="" name="prenomar" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> الوظيفة </label>
                            <input type="text" class="form-control" dir="rtl" placeholder="" name="fonctionar" required> 
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> الرتبة الحالية </label>
                            <input type="text" class="form-control" dir="rtl" placeholder="" name="gradear" required> 
                          </div>
                   </div>
                   <div class="row">
                   
                          <fieldset class="border p-3">
                        <legend align="right" class="w-auto float-none" >Contact | معلومات الإتصال </legend>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> Numéro de telephone |رقم الهاتف </label>
                            <input type="text"  pattern="[0]{1}[5-7]{1}[0-9]{8}" class="form-control" dir="rtl" placeholder="" name="numtel" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> Email | البريد الالكتروني  </label>
                            <input type="text" class="form-control" dir="rtl" placeholder="" aria-invalid="true" name="email" required>
                          </div>
                  </fieldset>
                    </div>
                   </div>
                   <br>

                   <div class="col-md-12 text-center">

                      <a class="btn btn-orange center" onclick="stepper.next()"> Suivant | متابعة </a>
                      </div>
                    </div>

                    <div id="test-part" class="content"   aria-labelledby="test-part-trigger">
                      <div class="row">

                        
                         </div>
                      <div class="col"> 
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> Déterminer le type de ... requis | تحديد نوع الحركية المطلوبة </label>
                            <select name="typear" id="" class="form-control"  dir="rtl"  >
                                          <option value=""  class="form-control  " disabled selected="selected"> اختر </option>
                                          <option value="1"  class="form-control" > 1 </option>
                                          <option value="2"  class="form-control">2 </option>
                                          <option value="3"  class="form-control"> 3</option>

                                       </select>   
                          </div>

                          <fieldset class="border p-3">
                        <legend align="right" class="w-auto float-none" > Future Destination | الوجهة المستقبلية </legend>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> البلد </label>
                            <input type="text" class="form-control"  dir="rtl" placeholder="" name="paysar">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> Etablissement universitaire | المؤسسة الجامعية </label>
                            <input type="text" class="form-control"  dir="rtl" placeholder="" name="univar">
                          </div>

                        </fieldset>
<br>


</div>
<div class="row">
<div class="form-group center">
                            <label for="exampleInputEmail1">La durée du séjour | مدة الإقامة   </label>
                            <input type="text" class="form-control" type="number"  placeholder="" name="durefr">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> هل استفدتم من المنحة من قبل ؟  </label>

                            <select name="ouinon" id="ouinon" class="form-control"  dir="rtl"  >
                                <option value=""  class="form-control  " disabled selected="selected"> اختر </option>
                                <option value="Oui | نعم "  class="form-control  " onclick="myFunction()"> Oui | نعم </option>
                                <option value=" Non | لا "  class="form-control  " onclick="myFunction1()"> Non | لا </option>

                            </select>   
                            <br>
                          <div id="ouinonDIV"> 
                            <div class="form-group">

                              <label for="exampleInputEmail1" class="float-right">  السنة  </label>
                              <input type="text" class="form-control" name="annee"  dir="rtl" placeholder="" id="reservationdate" >

                            </div>  

                            <div class="form-group">

                                      <label for="exampleInputEmail1" class="float-right">  هل تم استهلاك هذه المنحة ؟  </label>
                                      <select name="bourse" id="" class="form-control"  dir="rtl"  >
                                          <option value=""  class="form-control  " disabled selected="selected"> اختر </option>
                                          <option value="Oui | نعم"  class="form-control" > Oui | نعم  </option>
                                          <option value="Non | لا"  class="form-control"> Non | لا </option>

                                       </select>   
                          </div>  
                        </div>
                      </div>
                    </div>
                        <br>
                        <div class="col-md-12 text-center">
                            <a class="btn btn-orange" onclick="stepper.previous()">Précédent | عودة </a>

                            <a class="btn btn-orange" onclick="stepper.next()">Suivant | متابعة </a>

                        </div>
                      </div>

                    <div id="information-part" class="content"   aria-labelledby="information-part-trigger">

                      <div class="row"> 
                      <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> Les objectifs | الهدف من الحركية </label>
                            <textarea   class="form-control"  dir="rtl" name="butar"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right">Méthodologie | المنهجية </label>
                            <textarea   class="form-control"  dir="rtl" name="methoar" ></textarea>

                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="float-right"> Résultats attendus | النتائج المنتظرة</label>
                            <textarea   class="form-control"  dir="rtl" name="resar"></textarea>

                          </div>
                      </div>
                    <div class="col-md-12 text-center">

                      <button type="submit" class="btn btn-orange"> Envoyer | إرسال</button>
                      <a class="btn btn-orange" onclick="stepper.previous()">Précédent | عودة </a>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->          
              <div class="card-footer">
           NOTHING
          </div>
          </form>
            </div><!-- /.col -->
        </div>
    </div>
</div>


@endsection