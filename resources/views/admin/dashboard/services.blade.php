@extends('layouts.adminmaster')

@section('title', 'ADMIN HOME')


@section('content')


<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
   
    <div class="content-header">
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

      <div class="container-fluid">
        
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          </div>
            </div>
            </div>
          <section class="content ">
      <div class="container-fluid">
      @foreach ($service as $service)

      <div class="col">
            <div class="card card-info collapsed-card">
              <div class="card-header">
                <h3 class="card-title">{{$service->name}}</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
 
                    Medecins:            
                    {{$medecin->where('service','=',$service->name)->count()}}
                    <br>
                    Infirmiers : 
                    {{$infirmiers->where('service','=',$service->name)->count()}}
                    <div class="float-lg-right">
                    <a href="{{ route('deleteservice',$service->name)}}"  
                    class="btn btn-danger" 
                    onclick="return confirm('Voulez vous vraiment supprimer ce service?')">
                   
                      <i class="fa-solid fa-ban red" title="supprimer"></i></a>
                    </div>
                    </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>       
          @endforeach

        </div>
        <div class="center">

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl">
Ajouter Un Service
</button>
<!-- /.card -->
<div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ajouter Un Services</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="main-block">
    
      <form action="{{url('admin/adservice')}}" method="get">
      @csrf
              <div class="title">
        
        </div>
        <div class="info">
          
            <input required type="text" name="name" placeholder="Service">
           

            </div>

    </div>
    </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-add">VALIDER</button>
            </div>
          </form>

          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>
</section>
</div>
</div>
</div>

@endsection