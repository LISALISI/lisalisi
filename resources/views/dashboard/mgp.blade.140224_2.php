@extends('layouts/master')
@section('mgp_select', 'active')
@section('title', 'mgp')
@section('content')


              <div class="row">
                <div class="d-flex col-xs-12 col-sm-12 col-md-6 col-lg-8">
                  <div class="row">
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-primary">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-database fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">TOTAL Plaintes</small>
                              <div class="mb-0">{{$complain}}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-success">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-thumbs-up fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">TOTAL R&eacute;solues</small>
                              <div class="mb-0">{{$close}}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-warning">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-gears fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">TOTAL En Cours</small>
                              <div class="mb-0">{{$complain_processing}}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-danger">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-thumbs-down fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">TOTAL Rejet&eacute;es</small>
                              <div class="mb-0">{{$reject}}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="d-flex col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2">
                        <div class="card-body px-3 py-2">
                          <div class="chart"><div id='chart30'></div></div>
                        </div>
                      </div>
                </div>
              </div>
              <div class="row">
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                      <div class="card h-100 w-100">
                        <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                          <div class="card-title m-0 me-2">Plaintes par Provinces</div>
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
                          <div class="chart"><div id='chart31'></div></div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                      <div class="card h-100 w-100">
                        <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                          <div class="card-title m-0 me-2">Plaintes par Composantes</div>
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
                          <div class="chart"><div id='chart32'></div></div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                      <div class="card h-100 w-100">
                        <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                          <div class="card-title m-0 me-2">Evolution des Plaintes</div>
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
                          <div class="chart"><div id='chart33'></div></div>
                        </div>
                      </div>
                    </div>
              </div>

<script type="text/javascript" src="{{asset('assets/apexcharts/js/apexcharts.min.js')}}"></script>

<script type='text/javascript'>

// Chart 30

        var options = {
          series: [0, {{$close}}, {{$complain_processing}}, {{$reject}}],
          chart: {
          type: 'pie',
        },
        labels: ['TOTAL', 'R&eacute;solues', 'En Cours', 'Rejet&eacute;es'],
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

        var chart = new ApexCharts(document.querySelector("#chart30"), options);
        chart.render();

// Chart 31

var options = {
				series: [{
				name: 'Nombre',
				data: [{{$nu}}, {{$it}}, {{$kc}}, {{$sk}}, {{$nk}}, {{$su}}]
			  }],
				chart: {
				type: 'bar',
				height: 350
			  },
			  plotOptions: {
				bar: {
				  horizontal: false,
				  columnWidth: '55%',
				  endingShape: 'rounded'
				},
			  },
			  dataLabels: {
				enabled: false
			  },
			  stroke: {
				show: true,
				width: 2,
				colors: ['transparent']
			  },
			  xaxis: {
				categories: ['Nord-Ubangi','Ituri','Kasaï-Central','Sud-Kivu','Nord-Kivu','Sud-Ubangi'],
			  },
			  yaxis: {
				title: {
				  text: ''
				}
			  },
			  fill: {
				opacity: 1
			  },
			  tooltip: {
				y: {
				  formatter: function (val) {
					return ' ' + val + ' '
				  }
				}
			  }
			  };

			  var chart = new ApexCharts(document.querySelector('#chart31'), options);
			  chart.render();


// Chart 32

        var options = {
          series: [{
          data: [{{$medac}}, {{$step}}, {{$tmi}}, {{$thimo}}, {{$cld}}, {{$idb}}]
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
        colors: ['#33b2df', '#546E7A', '#d4526e', '#13d8aa', '#2b908f',
          '#f48024'
        ],
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
        xaxis: {
          categories: ['MEDAC', 'STEP', 'TMI', 'THIMO', 'CLD', 'IDB'
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

        var chart = new ApexCharts(document.querySelector("#chart32"), options);
        chart.render();


// Chart 33

        var options = {
          series: [{
          name: 'Plaintes',
          data: [1.45, 5.42, 5.9, 0.42, 12.6, 18.1, 18.2, 14.16, 11.1, 6.09, 0.34, 3.88, 13.07, 5.8, 2, 7.37, 8.1, 13.57, 15.75, 17.1, 19.8, 27.03, 54.4, 47.2, 43.3, 18.6, 48.6, 41.1, 39.6, 37.6, 29.4, 21.4, 2.4]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            colors: {
              ranges: [{
                from: -100,
                to: -46,
                color: '#F15B46'
              }, {
                from: -45,
                to: 0,
                color: '#FEB019'
              }]
            },
            columnWidth: '80%',
          }
        },
        dataLabels: {
          enabled: false,
        },
        yaxis: {
          title: {
            text: 'Evolution',
          },
          labels: {
            formatter: function (y) {
              return y.toFixed(0);
            }
          }
        },
        xaxis: {
          type: 'datetime',
          categories: [
            '2011-01-01', '2011-02-01', '2011-03-01', '2011-04-01', '2011-05-01', '2011-06-01',
            '2011-07-01', '2011-08-01', '2011-09-01', '2011-10-01', '2011-11-01', '2011-12-01',
            '2012-01-01', '2012-02-01', '2012-03-01', '2012-04-01', '2012-05-01', '2012-06-01',
            '2012-07-01', '2012-08-01', '2012-09-01', '2012-10-01', '2012-11-01', '2012-12-01',
            '2013-01-01', '2013-02-01', '2013-03-01', '2013-04-01', '2013-05-01', '2013-06-01',
            '2013-07-01', '2013-08-01', '2013-09-01'
          ],
          labels: {
            rotate: -90
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart33"), options);
        chart.render();


</script>

@endsection
