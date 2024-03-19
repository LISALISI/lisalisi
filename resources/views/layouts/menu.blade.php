    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse" style="background-color: #203864 !important;">
        <div class="position-sticky">
          <div class="list-group list-group-flush mx-3 mt-4">
            <a href="{{url('dashboard')}}" class="text-light py-2 {{ request()->is('dashboard') ? 'active1' : ''}}" data-mdb-ripple-init aria-current="true">
              <img src="../assets/img/home.png" class="rounded mx-2" height="25" width="25" /><span>Acceuil</span>
            </a>
            <a href="{{url('dash')}}" class="text-light py-2 {{ request()->is('dash') ? 'active1' : ''}}" data-mdb-ripple-init aria-current="true">
              <img src="../assets/img/dash.png" class="rounded mx-2" height="25" width="25" /><span>Dashboard</span>
            </a>
            <a href="{{url('idbsuiviinfra')}}" class="text-light py-2 {{ request()->is('idbsuiviinfra') ? 'active1' : ''}}
                                                            {{ request()->is('idblistes') ? 'active1' : '' }}
                                                            {{ request()->is('idbinserer') ? 'active1' : '' }}
                                                            {{ request()->is('idbmodifier') ? 'active1' : '' }}
                                                            {{ request()->is('idbrapports') ? 'active1' : '' }}
                                                            {{ request()->is('idbbeneficiaires') ? 'active1' : '' }}
            " data-mdb-ripple-init aria-current="true">
              <img src="../assets/img/idb.png" class="rounded mx-2" height="25" width="25" /><span>IDB</span>
            </a>
            <a href="{{url('cld')}}" class="text-light py-2 {{ request()->is('cld') ? 'active1' : ''}}" data-mdb-ripple-init aria-current="true">
              <img src="../assets/img/cld.png" class="rounded mx-2" height="25" width="25" /><span>CLD</span>
            </a>
            <a href="{{url('thimo')}}" class="text-light py-2 {{ request()->is('thimo') ? 'active1' : ''}}" data-mdb-ripple-init aria-current="true">
              <img src="../assets/img/thimo.png" class="rounded mx-2" height="25" width="25" /><span>THIMO</span>
            </a>
            <a href="{{url('tmi')}}" class="text-light py-2 {{ request()->is('tmi') ? 'active1' : ''}}" data-mdb-ripple-init aria-current="true">
              <img src="../assets/img/tmi.png" class="rounded mx-2" height="25" width="25" /><span>TMI</span>
            </a>
            <a href="{{url('cerc')}}" class="text-light py-2 {{ request()->is('cerc') ? 'active1' : ''}}" data-mdb-ripple-init aria-current="true">
              <img src="../assets/img/cerc.png" class="rounded mx-2" height="25" width="25" /><span>CERC</span>
            </a>
            <a href="{{url('medac')}}" class="text-light py-2 {{ request()->is('medac') ? 'active1' : ''}}" data-mdb-ripple-init aria-current="true">
              <img src="../assets/img/medac.png" class="rounded mx-2" height="25" width="25" /><span>MEDAC</span>
            </a>
            <a href="{{url('mgp')}}" class="text-light py-2 {{ request()->is('mgp') ? 'active1' : '' }}
                                                            {{ request()->is('mgptraiter') ? 'active1' : '' }}
                                                            {{ request()->is('mgpinserer') ? 'active1' : '' }}
                                                            {{ request()->is('mgplistes') ? 'active1' : '' }}
                                                            {{ request()->is('mgprapports') ? 'active1' : '' }}
                                                            {{ request()->is('mgpsensibles') ? 'active1' : '' }}
                                                            {{ request()->is('treat_plainte/*') ? 'active1' : '' }}
                                                            {{ request()->is('show_plainte/*') ? 'active1' : '' }}
                                                            {{ request()->is('show_plainte_hsensible/*') ? 'active1' : '' }}
                                                            {{ request()->is('treat_plainte_hsensible/*') ? 'active1' : '' }}
                                                            {{ request()->is('mgpliste_hsensible') ? 'active1' : '' }}
                " data-mdb-ripple-init aria-current="true">
              <img src="../assets/img/mgp.png" class="rounded mx-2" height="25" width="25" /><span>MGP</span>
            </a>
            <a href="{{url('param')}}" class="text-light py-2 {{ request()->is('param') ? 'active1' : ''}}
                                                            {{ request()->is('paramgroupes') ? 'active1' : '' }}
                                                            {{ request()->is('paramutilisateurs') ? 'active1' : '' }}
                                                            {{ request()->is('paramlocalites') ? 'active1' : '' }}
                                                            {{ request()->is('parametre_import_mgp') ? 'active1' : '' }}
                                                            {{ request()->is('import_mgp_data') ? 'active1' : '' }}
                                                            {{ request()->is('insert_mgp_hsensible') ? 'active1' : '' }}
                " data-mdb-ripple-init aria-current="true">
              <img src="../assets/img/param.png" class="rounded mx-2" height="25" width="25" /><span>Param&egrave;tres</span>
            </a>
          </div>
        </div>
      </nav>
      <!-- Sidebar -->
