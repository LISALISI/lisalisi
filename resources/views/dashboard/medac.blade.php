@extends('layouts/master')
@section('title', 'medac')
@section('content')

              <div class="row">
                    <div class="d-flex col-md-6 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-primary">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-chalkboard-user fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">TOTAL MEDAC</small>
                              <h6 class="mb-0 text-white">{{$Cible_globales}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-md-6 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-info">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-chalkboard-user fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">MEDAC Mise en oeuvre</small>
                              <h6 class="mb-0 text-white">{{$realisation_globales}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-success">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-thumbs-up fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Form&eacute;s</small>
                              <h6 class="mb-0 text-white">{{$realisation_globales}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-warning">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-gears fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Ex&eacute;cutions</small>
                              <h6 class="mb-0 text-white">0</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-danger">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-thumbs-down fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">&Agrave; former</small>
                              <h6 class="mb-0 text-white">{{$En_attente}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">MEDAC ACHEVES</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart51'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">R&eacute;partition</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart52'></div></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Responsive Table -->
              <div class="card p-3 mb-2">
              <div class="mb-2"><h4><span class="badge badge-primary">MEDAC</span></h4></div>
                <div class="table-responsive-lg">
                  <table width="100%" cellpadding="3" border="2">
                      <tr class="">
                        <th align="center" rowspan="3"><div class="text-center text-white bg-secondary p-2">Antenes</div></th>
                        <th align="center" colspan="6"><div class="text-center bgora1 p-2">Objectif Annuels</div></th>
                        <th align="center" colspan="6"><div class="text-center text-white bg-primary p-2">Situation au 30 Avril 2023</div></th>
                      </tr>
                      <tr class="">
                        <th align="center" colspan="2"><div class="text-center bgora1 p-2">2020-2021</div></th>
                        <th align="center" colspan="2"><div class="text-center bgora1 p-2">2022</div></th>
                        <th align="center" colspan="2"><div class="text-center bgora1 p-2">2023-2024</div></th>
                        <th align="center" colspan="2"><div class="text-center text-white bg-success p-2">D&eacute;j&agrave; form&eacute;s</div></th>
                        <th align="center" colspan="2"><div class="text-center text-white bg-warning p-2">En cours</div></th>
                        <th align="center" colspan="2"><div class="text-center text-white bg-danger p-2">&Agrave; former</div></th>
                      </tr>
                      <tr class="">
                        <th align="center"><div class="text-center bgora2 p-2">THIMO</div></th>
                        <th align="center"><div class="text-center bgora2 p-2">TMI</div></th>
                        <th align="center"><div class="text-center bgora2 p-2">THIMO</div></th>
                        <th align="center"><div class="text-center bgora2 p-2">TMI</div></th>
                        <th align="center"><div class="text-center bgora2 p-2">THIMO</div></th>
                        <th align="center"><div class="text-center bgora2 p-2">TMI</div></th>
                        <th align="center"><div class="text-center bgora2 p-2">THIMO</div></th>
                        <th align="center"><div class="text-center bgora2 p-2">TMI</div></th>
                        <th align="center"><div class="text-center bgora2 p-2">THIMO</div></th>
                        <th align="center"><div class="text-center bgora2 p-2">TMI</div></th>
                        <th align="center"><div class="text-center bgora2 p-2">THIMO</div></th>
                        <th align="center"><div class="text-center bgora2 p-2">TMI</div></th>
                      </tr>
                      <tr>
                        <td valign="middle"><div class="bono text-dark p-1 text-center bgblu1 fw-bold">IT</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$ITmedaccible_2022}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$ITmedaccible_2023}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$ITtotmedacforme}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$ITattente_medac}}</div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div class="bono text-dark p-1 text-center bgblu1 fw-bold">KC</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$KCmedaccible_2022}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$KCmedaccible_2023}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$KCtotmedacforme}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$KCattente_medac}}</div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div class="bono text-dark p-1 text-center bgblu1 fw-bold">NK</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$NKmedaccible_2022}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$NKmedaccible_2023}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$NKtotmedacforme}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$NKattente_medac}}</div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div class="bono text-dark p-1 text-center bgblu1 fw-bold">NU</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$NUmedaccible_2022}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$NUmedaccible_2023}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$NUtotmedacforme}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$NUattente_medac}}</div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div class="bono text-dark p-1 text-center bgblu1 fw-bold">SK</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$SKmedaccible_2022}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$SKmedaccible_2023}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$SKtotmedacforme}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$SKattente_medac}}</div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div class="bono text-dark p-1 text-center bgblu1 fw-bold">SU</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$SUmedaccible_2022}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$SUmedaccible_2023}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$SUtotmedacforme}}</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">{{$SUattente_medac}}</div></td>
                      </tr>
                      <!-- <tr>
                        <td valign="middle"><div class="bono text-dark p-1 text-center fw-bold">S/TOTAL</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                        <td valign="middle"><div class="bono text-dark p-1 text-center">0</div></td>
                      </tr> -->
                      <tr>
                        <td valign="middle"><div class="bono text-white p-1 text-center bg-dark fw-bold">TOTAL</div></td>
                        <td valign="middle" colspan="2"><div class="bono text-white p-1 text-center bg-dark fw-bold">0</div></td>
                        <td valign="middle" colspan="2"><div class="bono text-white p-1 text-center bg-dark fw-bold">{{$totaux_cible_2022}}</div></td>
                        <td valign="middle" colspan="2"><div class="bono text-white p-1 text-center bg-dark fw-bold">{{$totaux_cible_2023}}</div></td>
                        <td valign="middle" colspan="2"><div class="bono text-white p-1 text-center bg-dark fw-bold">0</div></td>
                        <td valign="middle" colspan="2"><div class="bono text-white p-1 text-center bg-dark fw-bold">0</div></td>
                        <td valign="middle" colspan="2"><div class="bono text-white p-1 text-center bg-dark fw-bold">0</div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div class="bono text-white p-1 text-center bg-dark fw-bold">TOTAL G&Eacute;N&Eacute;RAL</div></td>
                        <td valign="middle" colspan="6"><div class="bono text-white p-1 text-center bg-dark fw-bold">{{$totaux_cible}}</div></td>
                        <td valign="middle" colspan="6"><div class="bono text-white p-1 text-center bg-dark fw-bold">0</div></td>
                      </tr>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->

<script type="text/javascript" src="{{asset('assets/apexcharts/js/apexcharts.min.js')}}"></script>

<script type='text/javascript'>

// Chart 49

var options = {
          series: [{
          data: [{{$ITtotmedacforme}},{{$KCtotmedacforme}}, {{$NKtotmedacforme}}, {{$NUtotmedacforme}}, {{$SKtotmedacforme}}, {{$SUtotmedacforme}}]
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

        var chart = new ApexCharts(document.querySelector("#chart51"), options);
        chart.render();

// Chart 50

var options = {
          series: [{
          name: 'TOTAL AJUST',
          data: [{{$Cible_globales}}, 0]
        }, {
          name: 'FORM&Eacute;S',
          data: [0,{{$realisation_globales}}]
        }, {
          name: 'Encours',
          data: [0, 0]
        }, {
          name: 'En attente',
          data: [0,{{$En_attente}}]
        }],
          chart: {
          type: 'bar',
          height: 350,
          stacked: true,
          stackType: '100%'
        },
        plotOptions: {
          bar: {
            horizontal: true,
          },
        },
        stroke: {
          width: 1,
          colors: ['#fff']
        },
        title: {
          text: 'Par Statuts'
        },
        xaxis: {
          categories: ['TOTAL', 'STATUT'],
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val
            }
          }
        },
        fill: {
          opacity: 1
        
        },
        legend: {
          position: 'top',
          horizontalAlign: 'left',
          offsetX: 40
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart52"), options);
        chart.render();
      

</script>

@endsection
