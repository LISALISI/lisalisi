              <?php require("lisatop.php"); $comp = $_GET['comp']; require("compnom.php"); ?>

              <div class="row">
                <div class="col-12 mb-4">
                  <div class="card h-100 w-100 p-3">
                  <h6 class="mb-0"><?php echo strtoupper($compnom); ?></h6>
                  </div>
                </div>
              </div>

              <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-4 text-primary">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">B&eacute;n&eacute;ficiaires</small>
                              <h6 class="mb-0">350642</h6>
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
                              <h6 class="mb-0">2426875245</h6>
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
                              <h6 class="mb-0">1</h6>
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
                              <h6 class="mb-0">7515</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
 
              <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                   <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">R&eacute;alisation des objectifs par op&eacute;rateurs</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart8'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">R&eacute;partition des B&eacute;n&eacute;ficiaires par op&eacute;rateurs</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart9'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">Parit&eacute; Genre par Op&eacute;rateur</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class='chart'><div id='chart10'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0 me-2">Comparaison des honoraires des Op&eacute;rateurs</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class='chart'><div id='chart11'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0 me-2">Evolution des TM par Op&eacute;rateur</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class='chart'><div id='chart12'></div></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php require("lisabot.php"); ?>