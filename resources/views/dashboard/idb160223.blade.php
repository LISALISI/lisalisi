@extends('layouts/master')
@section('idb_select', 'active')
@section('title', 'Infrastructures de Base')
@section('content')

            <div class="row">
                    <div class="d-flex col-sm-6 col-md-4 col-lg-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-primary">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-city fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">TOTAL Chantiers</small>
                              <h6 class="mb-0 text-white">{{$allchantieridb}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-4 col-lg-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-info">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-building fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Chantiers mis en oeuvre</small>
                              <h6 class="mb-0 text-white">{{$idb_enoeuvre}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-4 col-lg-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-success">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-thumbs-up fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Chantiers achev&eacute;s</small>
                              <h6 class="mb-0 text-white">{{$achevedchantier}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-4 col-lg-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-warning">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-gears fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Chantiers en cours</small>
                              <h6 class="mb-0 text-white">{{$idb_encours}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-4 col-lg-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-danger">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-thumbs-down fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Chantiers en attente</small>
                              <h6 class="mb-0 text-white">{{$idb_attente}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-4 col-lg-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-dark">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-users fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Communaut&eacute;s</small>
                              <h6 class="mb-0 text-white">{{$communauteidb}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">R&eacute;partition Chantiers</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart14'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">R&eacute;partition Chantiers</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart40'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">R&eacute;partition Chantiers</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart42'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">Chantiers achev&eacute;s par Provinces</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart13'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">Objectifs par Provinces</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart15'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold"></div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id=''></div></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Responsive Table -->
              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table">
                      <tr>
                        <td></td>
                        <td colspan="3"><div class="p-2 text-dark text-center bgora1 fw-bold">OBJECTIFS</div></td>
                        <td rowspan="2"><div class="p-2 text-dark text-center bgora2 fw-bold h-100">Total Ajust&eacute;</div></td>
                        <td colspan="4"><div class="p-2 text-dark text-center bggris fw-bold">REALISATION</div></td>
                      </tr>
                      <tr>
                        <td><div class="p-2 text-dark text-center bggris fw-bold">Provinces</div></td>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">2020-2021</div></td>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">2021-2022</div></td>
                        <td><div class="p-2 text-dark text-center bgora1 fw-bold">2022-2023</div></td>
                        <td><div class="p-2 text-dark text-center bggris fw-bold">M.en Oeuvre</div></td>
                        <td><div class="p-2 text-dark text-center bggris fw-bold">En cours</div></td>
                        <td><div class="p-2 text-dark text-center bggris fw-bold">Achev&eacute;s</div></td>
                        <td><div class="p-2 text-dark text-center bggris fw-bold">En attente</div></td>
                      </tr>
                      @foreach($data as $row)  

                      <tr>
                        <td><div class="bono text-dark text-center p-1 bgblu1 fw-bold">{{$row->province}}</div></td>
                        <td><div class="bono text-dark text-center p-1 bgora1">{{$row->P2020_2021}}</div></td>
                        <td><div class="bono text-dark text-center p-1 w-100 bgora1">{{$row->P2021_2022}}</div></td>
                        <td><div class="bono text-dark text-center p-1 bgora1">{{$row->P2022_2023}}</div></td>
                        <td><div class="bono text-dark text-center p-1 bgora1">{{$row->Total_Idbs}}</div></td>
                        <td><div class="bono text-dark text-center p-1 bgora2 fw-bold">{{$row->Idb_enoeuvre}}</div></td>
                        <td><div class="bono text-dark text-center p-1">{{$row->Idb_execution}}</div></td>
                        <td><div class="bono text-dark text-center p-1">{{$row->Chantier_Acheve}}</div></td>
                        <td><div class="bono text-dark text-center p-1">{{$row->Idb_attente}}</div></td>
                       </tr>

                      @endforeach

                      <tr>
                        <td><div class="bono text-dark text-center p-1 bgblu1 fw-bold">Totaux</div></td>
                        <td><div class="bono text-dark text-center p-1 bgora1">{{$obj2020_2021}}</div></td>
                        <td><div class="bono text-dark text-center p-1 w-100 bgora1">{{$obj2021_2022}}</div></td>
                        <td><div class="bono text-dark text-center p-1 bgora1">{{$obj2022_2023}}</div></td>
                        <td><div class="bono text-dark text-center p-1 bgora1">{{$total_idbs}}</div></td>
                        <td><div class="bono text-dark text-center p-1 bgora2 fw-bold">{{$enoeuvre_idbs}}</div></td>
                        <td><div class="bono text-dark text-center p-1">{{$execution_idbs}}</div></td>
                        <td><div class="bono text-dark text-center p-1">{{$acheved_idbs}}</div></td>
                        <td><div class="bono text-dark text-center p-1">{{$attente_idbs}}</div></td>
                       </tr>
                      
                  </table>
              
            </div>
            

<script type="text/javascript" src="{{asset('assets/apexcharts/js/apexcharts.min.js')}}"></script>

<script type='text/javascript'>


// Chart 13

var options = {
    labels: ['IT', 'KC', 'NK', 'NU', 'SK','SU'],
    series: [{{$realisationit}}, {{$realisationkc}}, {{$realisationnk}}, {{$realisationnu}}, {{$realisationsk}}, {{$realisationsu}}],
    chart: {
    type: 'donut',
    },
    responsive: [{
    breakpoint: 480,
    options: {
      chart: {
      width: 200
      },
      legend: {
      position: 'bottom'
      }
    }
    }]
    };

    var chart = new ApexCharts(document.querySelector('#chart13'), options);
    chart.render();

// Chart 14
      
var options = {
          series: [{
          name: 'TOTAL',
          data: [{{$allchantieridb}}, 0]
        }, {
          name: 'ACHEV&Eacute;S',
          data: [0, {{$achevedchantier}}]
        }, {
          name: 'EN COURS',
          data: [0,{{$idb_encours}}]
        }, {
          name: 'EN ATTENTE',
          data: [0,{{$idb_attente}}]
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

        var chart = new ApexCharts(document.querySelector("#chart14"), options);
        chart.render();
      
    
// Chart 15

var options = {
    series: [{
    name: 'Prévus',
    data: [{{$objectif_idb_it}}, {{$objectif_idb_kc}}, {{$objectif_idb_nk}}, {{$objectif_idb_nu}}, {{$objectif_idb_sk}}, {{$objectif_idb_su}}]
    }, {
    name: 'Atteints',
    data: [{{$realisationit}}, {{$realisationkc}}, {{$realisationnk}}, {{$realisationnu}}, {{$realisationsk}}, {{$realisationsu}}]
    }, {
    name: 'En cours',
    data: [{{$chantierit}}, {{$chantierkc}}, {{$chantiernk}}, {{$chantiernu}}, {{$chantiersk}}, {{$chantiersu}}]
    }, {
    name: 'En attente',
    data: [{{$a_chantierit}}, {{$a_chantierkc}}, {{$a_chantiernk}}, {{$a_chantiernu}}, {{$a_chantiersk}}, {{$a_chantiersu}}]
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
    categories: ['IT', 'KC', 'NK', 'NU', 'SK','SU'],
    },
    yaxis: {
    title: {
      text: ' IDB'
    }
    },
    fill: {
    opacity: 1
    },
    tooltip: {
    y: {
      formatter: function (val) {
      return ' ' + val + ' IDB'
      }
    }
    }
    };

    var chart = new ApexCharts(document.querySelector('#chart15'), options);
    chart.render();


// Chart 40
      
    var options = {
          series: [{
          name: 'WASH',
          data: [44, 55, 41, 37, 22, 0]
        }, {
          name: 'SANTE',
          data: [53, 32, 33, 52, 13, 0]
        }, {
          name: 'EDUCATION',
          data: [12, 17, 11, 9, 15, 0]
        }, {
          name: 'TBD',
          data: [9, 7, 5, 8, 6, 0]
        }, {
          name: 'AUTRES',
          data: [25, 12, 19, 32, 25, 0]
        }],
          chart: {
          type: 'bar',
          height: 350,
          stacked: true,
        },
        plotOptions: {
          bar: {
            horizontal: true,
            dataLabels: {
              total: {
                enabled: true,
                offsetX: 0,
                style: {
                  fontSize: '13px',
                  fontWeight: 900
                }
              }
            }
          },
        },
        stroke: {
          width: 1,
          colors: ['#fff']
        },
        title: {
          text: 'Par Provinces par Secteurs'
        },
        xaxis: {
          categories: ["IT", "KC", "NK", "NU", "SK", "SU"],
          labels: {
            formatter: function (val) {
              return val
            }
          }
        },
        yaxis: {
          title: {
            text: undefined
          },
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

        var chart = new ApexCharts(document.querySelector("#chart40"), options);
        chart.render();
      
// Chart 41
      
var options = {
          series: [{
          name: 'IT',
          data: [44, 55, 41, 37, 22]
        }, {
          name: 'KC',
          data: [53, 32, 33, 52, 13]
        }, {
          name: 'NK',
          data: [12, 17, 11, 9, 15]
        }, {
          name: 'NU',
          data: [9, 7, 5, 8, 6]
        }, {
          name: 'SK',
          data: [25, 12, 19, 32, 25]
        }, {
          name: 'SU',
          data: [0, 0, 0, 0, 0]
        }],
          chart: {
          type: 'bar',
          height: 350,
          stacked: true,
        },
        plotOptions: {
          bar: {
            horizontal: true,
            dataLabels: {
              total: {
                enabled: true,
                offsetX: 0,
                style: {
                  fontSize: '13px',
                  fontWeight: 900
                }
              }
            }
          },
        },
        stroke: {
          width: 1,
          colors: ['#fff']
        },
        title: {
          text: 'Par Secteurs par Provinces'
        },
        xaxis: {
          categories: ["WASH", "SANTE", "EDUCATION", "TBD", "AUTRES"],
          labels: {
            formatter: function (val) {
              return val
            }
          }
        },
        yaxis: {
          title: {
            text: undefined
          },
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

        var chart = new ApexCharts(document.querySelector("#chart41"), options);
        chart.render();
      
      
// Chart 42
      
        var options = {
          series: [{
          name: 'IT',
          data: [44, 55, 41, 67, 22]
        }, {
          name: 'KC',
          data: [13, 23, 20, 8, 13]
        }, {
          name: 'NK',
          data: [11, 17, 15, 15, 21]
        }, {
          name: 'NU',
          data: [21, 7, 25, 13, 22]
        }, {
          name: 'SK',
          data: [21, 7, 25, 13, 22]
        }, {
          name: 'SU',
          data: [21, 7, 25, 13, 22]
        }],
          colors : ['#2196f3', '#dc4c64', '#4caf50', '#e4a11b', '#54b4d3', '#9c27b0'],
          chart: {
          type: 'bar',
          height: 350,
          stacked: true,
          toolbar: {
            show: true
          },
          zoom: {
            enabled: true
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],
        plotOptions: {
          bar: {
            horizontal: false,
            borderRadius: 10,
            dataLabels: {
              total: {
                enabled: true,
                style: {
                  fontSize: '13px',
                  fontWeight: 900
                }
              }
            }
          },
        },
        title: {
          text: 'Par Secteurs par Provinces'
        },
        xaxis: {
          categories: ['WASH', 'SANTE', 'EDUCATION', 'TBD',
            'AUTRES'
          ],
        },
        legend: {
          position: 'right',
          offsetY: 40
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart42"), options);
        chart.render();

    
</script>

@endsection
