 @extends('layouts/master')
 {{-- @section('dashboard_select', 'active') --}}
 @section('title', 'Dashboard')
 @section('content')

              <div class="row">
                <div class="col-12 mb-4">
                  <div class="card">
                    <div class="d-flex align-items-center row">
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body px-md-4">
                          <img src="/img/step_logo.png" height="120" alt="" />
                        </div>
                      </div>
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Le Projet STEP a pour but d’am&eacute;liorer l’acc&egrave;s aux infrastructures socio-&eacute;conomiques et aux moyens de subsistance des communaut&eacute;s vuln&eacute;rables ...</h5>
                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">En savoir plus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <a href="{{url('idb')}}">
                   <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">IDB</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <p>Les Infrastructures de Base sont construits ou rehabilités dans 5 provinces de la RDC.</p>
                    </div>
                   </div>
                  </a>
                </div>
                <div class="col-md-6 mb-4">
                  <a href="{{url('cld')}}">
                   <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">CLD</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <p>Les Comit&eacute;s Locaux de D&eacute;veloppement ont pour but de promouvoir les activit&eacute;s à impact rapide dans les communaut&eacute;s rurales.</p>
                    </div>
                   </div>
                  </a>
                </div>
                <div class="col-md-6 mb-4">
                  <a href="{{url('thimo')}}">
                   <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">THIMO</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <p>Les Travaux &agrave; Haute Intensit&eacute; de Main d'oeuvre guarantit des emplois ponctuels à une grande partie de la population.</p>
                    </div>
                   </div>
                  </a>
                </div>
                <div class="col-md-6 mb-4">
                  <a href="{{url('tmi')}}">
                   <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">TMI</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <p>Le Transfert Mon&eacute;taire Inconditionel a pour but de réduire la pauvreté des personnes les plus vulnérables.</p>
                    </div>
                   </div>
                  </a>
                </div>
                <div class="col-md-6 mb-4">
                  <a href="{{url('cerc')}}">
                   <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">CERC</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <p>Aussi appelée STEP-KIN, cette composante a été déployée à Kinshasa dans le contexte de la pandémie COVID-19.</p>
                    </div>
                   </div>
                  </a>
                </div>
                <div class="col-md-6 mb-4">
                  <a href="{{url('medac')}}">
                   <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">MEDAC</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <p>Les mesures d'accompagnement permettent de capaciter les bénéficiaires en vue de transformer l'aide reçue en activité generatrice de revenus.</p>
                    </div>
                   </div>
                  </a>
                </div>
                <div class="col-md-12 mb-4">
                  <a href="{{url('mgp')}}">
                   <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">MGP</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <p>Les M&eacute;canismes de Gestion de Plaintes permettent au projet de rester à l'écoute des bénéficiaires pour le signalement de toute irrégularité dans la mise en oeuvre des composantes.</p>
                    </div>
                   </div>
                  </a>
                </div>
              </div>

@endsection






