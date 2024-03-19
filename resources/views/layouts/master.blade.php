<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-assets-path="../assets/">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- call here the project title -->

        <title>LIS@LISI</title>

        <!-- from william -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
  <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- bootstrap
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-5.3.2-dist/css/bootstrap.min.css" id="bootstrap-css" /> -->
  <!-- MDB -->
  <link rel="stylesheet" href="{{asset('assets/b5at/css/mdb.min.css')}}" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{asset('assets/b5at/css/admin.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/b5at/css/style_mq.css')}}" />

  <!-- ApexCharts -->
  <link rel="stylesheet" href="{{asset('assets/apexcharts/css/apexcharts.css')}}" />

         <!-- end willima -->

        <!-- call here all css link and favicon  -->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />

        <style>

            .active1 { background-color: rgba(255, 255, 255, 0.4); padding: 2px; }
            .bggris { background-color: #dddddd !important; }
            .bgora1 { background-color: rgb(255, 242, 204) }
            .bgora2 { background-color: rgb(251, 229, 214) }
            .bgblu1 { background-color: rgb(189, 215, 238) }
            .bgver1 { background-color: rgb(197, 224, 180) }
            .tero { color: ff0000 !important; }
            .bono { border: solid 2px #000000; }
            .bono1 { border: solid 1px #000000; }
            .bgpurple { background-color: #dddddd !important; }

        </style>
    </head>

    <body>
  <!--Main Navigation-->
  <header>
        <!-- Menu -->
        @include('layouts/menu')
        <!-- / Menu -->

        <!-- Navbar -->
        @include('layouts/navbar')
        <!-- / Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">{{Route::current()->getName()}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>

        <div class="tb">
  {{-- test the url requested for displaying the south menu --}}

  @if (!(request()->is('dashboard')))

        <div class="mb-4">

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


        <!-- content -->
        @yield('content')
        <!-- / content -->

        <!-- Footer -->
        @include('layouts/footer')
        <!-- / Footer -->

        </div>
  </main>
  <!--Main layout-->

    <!-- MDB -->
    <script type="text/javascript" src="{{asset('assets/b5at/js/mdb.umd.min.js')}}"></script>
    <!-- bootstrap
    <script src="assets/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="{{asset('assets/b5at/js/admin.js')}}"></script>

    </body>

</html>
