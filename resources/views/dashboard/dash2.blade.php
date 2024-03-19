@extends('layouts/master')
@section('title', 'Dashboard')
@section('content')

              <div class="row">
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-4 text-primary">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">B&eacute;n&eacute;ficiaires directs</small>
                              {{-- <h6 class="mb-0">{{$globalbenef}}</h6> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-4 text-success">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-dollar fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant allou&eacute;</small>
                              {{-- <h6 class="mb-0">{{$globalmontant}}</h6> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-4 text-warning">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-city fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Provinces</small>
                              {{-- <h6 class="mb-0">{{$totalprov}}</h6> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-4 text-info">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-users fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Communaut&eacute;s</small>
                              {{-- <h6 class="mb-0">{{$globalcommunaute}}</h6> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                   <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <h5 class="card-title m-0 me-2">CERC-KINSHASA</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Voir plus</a>
                          <a class="dropdown-item" href="javascript:void(0);">T&eacute;l&eacute;charger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Actions</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-2 pb-1 text-success">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-money-bill fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant distribu&eacute;</small>
                              {{-- <h6 class="mb-0"><span class="text-muted">$</span> {{$cerctotalmontant}}</h6> --}}
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-warning">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                          <i class="fas fa-user-group fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Partenaires</small>
                              {{-- <h6 class="mb-0">{{$partenairecerc}}</h6> --}}
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-info">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-users fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Communaut&eacute;s</small>
                              {{-- <h6 class="mb-0">{{$communautecerc}}</h6> --}}
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-primary">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user-group fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">B&eacute;n&eacute;ficiaires</small>
                              {{-- <h6 class="mb-0">{{$benefcerc}}</h6> --}}
                            </div>
                          </div>
                        </li>
                      </ul>
                      <hr class="m-0" />
                      <div class="chart"><div id='chart1'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <h5 class="card-title m-0 me-2">IDB</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Voir plus</a>
                          <a class="dropdown-item" href="javascript:void(0);">T&eacute;l&eacute;charger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Actions</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-2 pb-1 text-secondary">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-building fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Chantiers</small>
                              {{-- <h6 class="mb-0">{{$nombrechantier}}</h6> --}}
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-warning">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-city fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Provinces</small>
                              {{-- <h6 class="mb-0">{{$providb}}</h6> --}}
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-info">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-users fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Communaut&eacute;s</small>
                              {{-- <h6 class="mb-0">{{$communauteidb}}</h6> --}}
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-success">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                          <i class="fas fa-money-bill fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Budget pr&eacute;visionnel</small>
                              {{-- <h6 class="mb-0"><span class="text-muted">$</span> {{$previsionidb}}</h6> --}}
                            </div>
                          </div>
                        </li>

                        <li class="d-flex mb-2 pb-1 text-success">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                          <i class="fas fa-money-bill fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Budget de r&eacute;alisation</small>
                              {{-- <h6 class="mb-0"><span class="text-muted">$</span> {{$coutrealisation}}</h6> --}}
                            </div>
                          </div>
                        </li>

                      </ul>
                      <hr class="m-0" />
                      <div class="chart"><div id='chart2'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <h5 class="card-title m-0 me-2">TMI</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Voir plus</a>
                          <a class="dropdown-item" href="javascript:void(0);">T&eacute;l&eacute;charger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Actions</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-2 pb-1 text-success">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-money-bill fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant distribu&eacute;</small>
                              {{-- <h6 class="mb-0"><span class="text-muted">$</span> {{$totalmontanttmi}}</h6> --}}
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-warning">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-city fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Provinces</small>
                              {{-- <h6 class="mb-0">{{$prov}}</h6> --}}
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-info">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-users fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Communaut&eacute;s</small>
                              {{-- <h6 class="mb-0">{{$communautetmi}}</h6> --}}
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-primary">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user-group fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">B&eacute;n&eacute;ficiaires</small>
                              {{-- <h6 class="mb-0">{{$beneftmi}}</h6> --}}
                            </div>
                          </div>
                        </li>
                      </ul>
                      <hr class="m-0" />
                    <div class='chart'><div id='chart3'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <h5 class="card-title m-0 me-2">THIMO</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Voir plus</a>
                          <a class="dropdown-item" href="javascript:void(0);">T&eacute;l&eacute;charger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Actions</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-2 pb-1 text-success">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-money-bill fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant distribu&eacute;</small>
                              <h6 class="mb-0"><span class="text-muted">$</span> 173 041</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-warning">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-city fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Provinces</small>
                              <h6 class="mb-0">1</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-info">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-users fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Communaut&eacute;s</small>
                              <h6 class="mb-0">8 258</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-primary">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user-group fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Partenaires</small>
                              <h6 class="mb-0">2</h6>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <hr class="m-0" />
                      <div class='chart'><div id='chart4'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <h5 class="card-title m-0 me-2">MGP</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Voir plus</a>
                          <a class="dropdown-item" href="javascript:void(0);">T&eacute;l&eacute;charger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Actions</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body border px-3 py-2">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-2 pb-1 text-success">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-money-bill fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant distribu&eacute;</small>
                              <h6 class="mb-0"><span class="text-muted">$</span> 173 041</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-warning">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-city fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Provinces</small>
                              <h6 class="mb-0">1</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-info">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-users fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Communaut&eacute;s</small>
                              <h6 class="mb-0">8 258</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-primary">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user-group fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Partenaires</small>
                              <h6 class="mb-0">2</h6>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <hr class="m-0" />
                      <div class='chart'><div id='chart5'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <h5 class="card-title m-0 me-2">CLD</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Voir plus</a>
                          <a class="dropdown-item" href="javascript:void(0);">T&eacute;l&eacute;charger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Actions</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-2 pb-1 text-success">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-money-bill fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant distribu&eacute;</small>
                              <h6 class="mb-0"><span class="text-muted">$</span> 173 041</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-warning">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-city fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Provinces</small>
                              <h6 class="mb-0">1</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-info">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-users fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Communaut&eacute;s</small>
                              <h6 class="mb-0">8 258</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-primary">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user-group fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Partenaires</small>
                              <h6 class="mb-0">2</h6>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <hr class="m-0" />
                      <div class='chart'><div id='chart6'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <h5 class="card-title m-0 me-2">MEDAC</h5>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Voir plus</a>
                          <a class="dropdown-item" href="javascript:void(0);">T&eacute;l&eacute;charger</a>
                          <a class="dropdown-item" href="javascript:void(0);">Actions</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body border px-3 py-2">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-2 pb-1 text-success">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-money-bill fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant distribu&eacute;</small>
                              <h6 class="mb-0"><span class="text-muted">$</span> 173 041</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-warning">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-city fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Provinces</small>
                              <h6 class="mb-0">1</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-info">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-users fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Communaut&eacute;s</small>
                              <h6 class="mb-0">8 258</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-2 pb-1 text-primary">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user-group fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Partenaires</small>
                              <h6 class="mb-0">2</h6>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <hr class="m-0" />
                      <div class='chart'><div id='chart7'></div></div>
                    </div>
                  </div>
                </div>
              </div>

<script type="text/javascript" src="{{asset('assets/apexcharts/js/apexcharts.min.js')}}"></script>





@endsection
