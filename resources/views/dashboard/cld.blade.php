@extends('layouts/master')
@section('title', 'CLD')
@section('content')

                <div class="row">
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-primary">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-people-carry-box fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">TOTAL CLD</small>
                              <h6 class="mb-0 text-white">{{$Total_cld}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-info">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-people-arrows fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">CLD Mise en oeuvre</small>
                              <h6 class="mb-0 text-white">{{$cld_mise_en_oeuvre}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-success">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-thumbs-up fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">CLD achev&eacute;s</small>
                              <h6 class="mb-0 text-white">{{$bureaux_cld_acheves}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-warning">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-gears fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">En cours d'ex&eacute;cution</small>
                              <h6 class="mb-0 text-white">{{$Nbre_cld_encours}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-danger">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-thumbs-down fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">En attente</small>
                              <h6 class="mb-0 text-white">{{$cld_en_attente}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-dark">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-file-lines fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Chartes</small>
                              <h6 class="mb-0 text-white">{{$Nbrechartes}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-dark">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-graduation-cap fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Formations</small>
                              <h6 class="mb-0 text-white">{{$Nbreforma}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-dark">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-building fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Constructions</small>
                              <h6 class="mb-0 text-white">6</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">Bureaux CLD achevés</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart47'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">Objectifs par province</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart48'></div></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Responsive Table -->
              <div class="card p-3 mb-2">
              <div class="mb-2"><h4><span class="badge badge-primary">CLD</span></h4></div>
                <div class="table-responsive-lg">
                  <table width="100%" cellpadding="3" border="2">
                      <tr>
                        <td rowspan="2"><div class="p-2 text-dark text-center bggris fw-bold">Activit&eacute;s</div></td>
                        <td colspan="3"><div class="p-2 text-dark text-center bgora1 fw-bold">OBJECTIFS</div></td>
                        <td rowspan="2"><div class="p-2 text-dark text-center bgora2 fw-bold h-100">Total Ajust&eacute;</div></td>
                        <td colspan="4"><div class="p-2 text-white text-center bg-primary fw-bold">Situation au 30 Avril 2023</div></td>
                      </tr>
                      <tr>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">2020-2021</div></td>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">2022</div></td>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">2022-2023</div></td>
                        <td><div class="p-2 text-white text-center bg-success fw-bold">Achev&eacute;s</div></td>
                        <td><div class="p-2 text-white text-center bg-warning fw-bold">En cours</div></td>
                        <td><div class="p-2 text-white text-center bg-danger fw-bold">Non r&eacute;alis&eacute;s</div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div class="bono text-dark text-center p-1 bgblu1 fw-bold">Chartes Sign&eacute;s</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$cible_chartes2021}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$cible_chartes2022}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$cible_chartes2023}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$Tota_ciblecharte}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$Nbrechartes}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">0</div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div class="bono text-dark text-center p-1 bgblu1 fw-bold">Formations CLD</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$cibleforma_realisation2021}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$cibleforma_realisation2022}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$cibleforma_realisation2023}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$cibleNbreforma}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$Nbreforma}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">0</div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div class="bono text-dark text-center p-1 bgblu1 fw-bold">Construction Bureaux</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$Total_cld}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$bureaux_cld_acheves}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$Nbre_cld_encours}}</div></td>
                        <td valign="middle"><div class="bono p-1 text-center">{{$cld_en_attente}}</div></td>
                      </tr>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->

<script type="text/javascript" src="{{asset('assets/apexcharts/js/apexcharts.min.js')}}"></script>

<script type='text/javascript'>

// Chart 47

var options = {
          series: [{
          data: [{{$ITbureaux_cld_acheves}},{{$KCbureaux_cld_acheves}},{{$NKbureaux_cld_acheves}},{{$NUbureaux_cld_acheves}},{{$SKbureaux_cld_acheves}},{{$SUbureaux_cld_acheves}}]
        }],
          chart: {
          type: 'bar',
          height: 380
        },
        plotOptions: {
          bar: {
            barHeight: '100%',
            distributed: true,
            horizontal: true,
            dataLabels: {
              position: 'bottom'
            },
          }
        },
        colors: ['#2196f3', '#dc4c64', '#4caf50', '#e4a11b', '#54b4d3', '#9c27b0'],
        dataLabels: {
          enabled: true,
          textAnchor: 'start',
          style: {
            colors: ['#fff']
          },
          formatter: function (val, opt) {
            return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val
          },
          offsetX: 0,
          dropShadow: {
            enabled: true
          }
        },
        stroke: {
          width: 1,
          colors: ['#fff']
        },
        title: {
          text: 'Par Provinces'
        },
        xaxis: {
          categories: ['Ituri','Kasaï-Central','Nord-Kivu','Nord-Ubangi','Sud-Kivu','Sud-Ubangi'
          ],
        },
        yaxis: {
          labels: {
            show: false
          }
        },
        tooltip: {
          theme: 'dark',
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function () {
                return ''
              }
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart47"), options);
        chart.render();

// Chart 47

var options = {
    series: [{
    name: 'Prévus',
    data: [{{$Tota_ciblecharte}}, 0,{{$Total_cld}}]
    }, {
    name: 'Achev&eacute;s',
    data: [{{$Nbrechartes}},{{$Nbreforma}}, {{$bureaux_cld_acheves}}]
    }, {
    name: 'En cous',
    data: [0, 0,{{$Nbre_cld_encours}}]
    }, {
    name: 'En attente',
    data: [0, 0,{{$cld_en_attente}}]
    }],
    chart: {
    type: 'bar',
    height: 350
    },
    plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '80%',
      endingShape: 'rounded'
    },
    },
    dataLabels: {
    enabled: false
    },
    stroke: {
    show: true,
    width: 4,
    colors: ['transparent']
    },
    xaxis: {
    categories: ['Chartes signées', 'Formations CLD', 'Bureaux CLD'],
    },
    yaxis: {
    },
    fill: {
    opacity: 1
    },
    tooltip: {
    y: {
      formatter: function (val) {
      return ' ' + val
      }
    }
    }
    };

    var chart = new ApexCharts(document.querySelector('#chart48'), options);
    chart.render();


</script>


@endsection
