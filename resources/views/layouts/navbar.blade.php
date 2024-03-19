    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #9dc3e6 !important;">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="{{url('dashboard')}}">
            <img src="../assets/img/step_logo.png" class="rounded" height="36" alt="" loading="lazy" />
          </a>
          <!-- Search form -->
          <form class="d-none d-md-flex input-group w-auto my-auto">
          <a href="{{url('dashboard')}}"><img src="../assets/img/lisalisi_dark.png" height="36" /><img src="../assets/img/lisalisi.png" class="rounded-circle" height="36" /></a>
          </form>

<div class="gttb">
  {{-- test the url requested for displaying the south menu --}}

  @if (!(request()->is('dashboard')))

        <div class="mx-4">

  @endif

  @if (request()->is('mgp') or
         request()->is('mgpafficher') or
                   request()->is('mgptraiter') or
                   request()->is('mgpinserer') or
                   request()->is('mgplistes') or
                   request()->is('mgprapports') or
                   request()->is('mgpsensibles') or
                   request()->is('treat_plainte/*') or
                   request()->is('show_plainte/*') or
                   request()->is('show_plainte_hsensible/*') or
                   request()->is('treat_plainte_hsensible/*') or
                   request()->is('mgpliste_hsensible')
        )

               <a href="{{url('mgp')}}" type="button" class="my-1 btn btn-sm btn-primary active">Dashboard</a>
                          {{-- <a href="{{url('mgptraiter')}}" type="button" class="my-1 btn btn-sm btn-primary">Traiter</a> --}}
                          <a href="{{url('mgpinserer')}}" type="button" class="my-1 btn btn-sm btn-primary">Ins&eacute;rer</a>
                          <a href="{{url('mgplistes')}}" type="button" class="my-1 btn btn-sm btn-primary">Listes</a>
                          <a href="{{url('mgprapports')}}" type="button" class="my-1 btn btn-sm btn-primary">Rapports</a>
                          <a href="{{url('mgpliste_hsensible')}}" type="button" class="my-1 btn btn-sm btn-danger">HSensibles</a>


   @endif

    @if (request()->is('idb') or
              request()->is('idbsuiviinfra') or
              request()->is('idblistes') or
              request()->is('idbinserer') or
              request()->is('idbmodifier') or
              request()->is('idbrapports') or
              request()->is('idbbeneficiaires')
              )
                    <a href="{{url('idb')}}" type="button" class="my-1 btn btn-sm btn-primary active">Dashboard</a>
                    <a href="{{url('idblistes')}}" type="button" class="my-1 btn btn-sm btn-primary">Liste IDB</a>
                    <a href="{{url('idbinserer')}}" type="button" class="my-1 btn btn-sm btn-primary">Ins&eacute;rer IDB</a>
                    <a href="{{url('idbmodifier')}}" type="button" class="my-1 btn btn-sm btn-primary">Modifier IDB</a>
                    <a href="{{url('idbrapports')}}" type="button" class="my-1 btn btn-sm btn-primary">Rapports</a>
                    <a href="{{url('idbbeneficiaires')}}" type="button" class="my-1 btn btn-sm btn-primary">B&eacute;n&eacute;ficiaires</a>
             @endif

              @if (request()->is('param') or
                   request()->is('paramgroupes') or
                   request()->is('paramgroupesmodifier') or
                   request()->is('paramgroupesmodifier/*') or
                   request()->is('paramutilisateurs') or
                   request()->is('paramlocalites') or
                   request()->is('parametre_import_mgp')  or
                   request()->is('import_mgp_data')  or
                   request()->is('insert_mgp_hsensible')
                  )

                          <a href="{{url('param')}}" type="button" class="my-1 btn btn-sm btn-primary active">Dashboard</a>
                          <a href="{{url('paramgroupes')}}" type="button" class="my-1 btn btn-sm btn-primary">Groupes</a>
                          <a href="{{url('paramutilisateurs')}}" type="button" class="my-1 btn btn-sm btn-primary">Utilisateurs</a>
                          <a href="{{url('paramlocalites')}}" type="button" class="my-1 btn btn-sm btn-primary">Localit&eacute;s</a>
                          <a href="{{url('parametre_import_mgp')}}" type="button" class="my-1 btn btn-sm btn-primary">Import MGP</a>

              @endif
              @if (!(request()->is('dashboard')))

      </div>

  @endif

  {{-- end test --}}

  </div>
          <!-- Right links -->
          <ul class="navbar-nav ms-auto d-flex flex-row">
            <!-- Icon
            <li class="nav-item">
              <a class="nav-link me-3 me-lg-0" href="#">
                <i class="fas fa-home"></i>
              </a>
            </li> -->
            <!-- Notification dropdown
            <li class="nav-item dropdown">
              <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                role="button" data-mdb-dropdown-init aria-expanded="false">
                <i class="fas fa-bell"></i>
                <span class="badge rounded-pill badge-notification bg-danger">1</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Some news</a></li>
                <li><a class="dropdown-item" href="#">Another news</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else</a>
                </li>
              </ul>
            </li>
             -->
            <!-- Avatar -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                id="navbarDropdownMenuLink" role="button" data-mdb-dropdown-init aria-expanded="false">
                <img src="../assets/img/avatars/adm.jpg" class="rounded-circle" height="36" alt="" loading="lazy" />
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">{{Auth::user()->name}}</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="{{ url('logout') }}">D&eacute;connexion</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Container wrapper -->
      </nav>
      <!-- Navbar -->

  <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
     @csrf
  </form>

