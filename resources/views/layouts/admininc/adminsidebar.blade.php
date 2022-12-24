<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link">
        <i class="fa-thin fa-users-medical"></i>
              <span class="brand-text font-weight-light"> GRH - <br></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">    {{ Auth::user()->name }}</a>
        </div>
      </div>




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="{{ url('admin/dashboard')}}" class="nav-link {{ 'admin/dashboard' == request() -> path() ? 'active' : ''}}">
              <i class="nav-icon  fas fa-tachometer-alt"></i>
              <p>
                ACCEUIL
              </p>
            </a>
            
          </li>
          <li class="nav-item  menu-open {{ (request()->is('admin/medecins'))
            ||(request()->is('admin/patients'))
            ||(request()->is('admin/infirmiers'))
            ||(request()->is('admin/pharmaciens'))
            ||(request()->is('admin/laborantines'))
            ||(request()->is('admin/staffadmin'))
            ||(request()->is('admin/stafftech'))
            ||(request()->is('admin/staffcontract'))
            
            ? 'menu-open' : '' }}" >
          <a href="#" class="nav-link ">
          <i class="nav-icon fas fa-users"></i>
                        <p>
                Personnel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item" 
         
          >
          <a href="{{ url('admin/medecins')}}" class="nav-link {{ 'admin/medecins' == request() -> path() ? 'active' : ''}}">
          <i class="nav-icon fas fa-stethoscope"></i>
                      <p>
                Medecins
              </p>
            </a>
            </li>
          
            <li class="nav-item">
          <a href="{{ url('admin/patients')}}" class="nav-link {{ 'admin/patients' == request() -> path() ? 'active' : ''}}">
          <i class="nav-icon fas fa-user-injured"></i>
                                  <p>
                Patients Hôspitalisés
              </p>
            </a>
            </li>
            <li class="nav-item">
          <a href="{{ url('admin/infirmiers')}}" class="nav-link {{ 'admin/infirmiers' == request() -> path() ? 'active' : ''}}">
          <i class="nav-icon fa-sharp fa-solid fa-user-nurse"></i>

<p>
                Infirmiers
              </p>
            </a>
            </li>
            <li class="nav-item">
          <a href="{{ url('admin/pharmaciens')}}" class="nav-link {{ 'admin/pharmaciens' == request() -> path() ? 'active' : ''}}">
          <i class="nav-icon fa-solid fa-user-doctor"></i>

<p>
                Pharmaciens
              </p>
            </a>
            </li>
            <li class="nav-item">
          <a href="{{ url('admin/laborantines')}}" class="nav-link {{ 'admin/laborantines' == request() -> path() ? 'active' : ''}}">
          <i class="nav-icon fas fa-vial"></i>
<p>
Laborantines
              </p>
            </a>
            </li>
            <li class="nav-item">
          <a href="{{ url('admin/staffadmin')}}" class="nav-link {{ 'admin/staffadmin' == request() -> path() ? 'active' : ''}}">
          <i class="nav-icon fas fa-user-tie"></i>
<p>
Staff Administrateur
              </p>
            </a>
            </li>
            <li class="nav-item">
          <a href="{{ url('admin/stafftech')}}" class="nav-link {{ 'admin/stafftech' == request() -> path() ? 'active' : ''}}">
          <i class="nav-icon fas fa-user-cog"></i>
<p>
Staff Technique

              </p>
            </a>
            </li>
            <li class="nav-item">
          <a href="{{ url('admin/staffcontract')}}" class="nav-link {{ 'admin/staffcontract' == request() -> path() ? 'active' : ''}}">
          <i class="nav-icon fas fa-user-alt"></i>
<p>
Contractuels
              </p>
            </a>
            </li>
          </ul>
        </li>
            <li class="nav-item">
          <a href="{{ url('admin/services')}}" class="nav-link {{ 'admin/services' == request() -> path() ? 'active' : ''}}">
            <i class="nav-icon fas fa-book"></i>
              <p>
                Services
              </p>
            </a>
            </li>
            <li class="nav-item">
          <a href="{{ url('admin/rendezvous')}}" class="nav-link {{ 'admin/rendezvous' == request() -> path() ? 'active' : ''}}">
          <i class="nav-icon fas fa-calendar-week"></i>              
          <p>
                Rendez-vous et événements
              </p>
            </a>
            </li>

        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>