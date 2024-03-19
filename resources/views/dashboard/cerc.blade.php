@extends('layouts/master')
@section('title', 'CERC')
@section('content')


              <div class="row">
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-4 text-primary">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-info">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="d-block">B&eacute;n&eacute;ficiaires</small>
                              <h6 class="mb-0">350642</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-4 text-success">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-success">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-thumbs-up fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="d-block">Montant distribu&eacute;</small>
                              <h6 class="mb-0"><span class="">$</span> 1 000 000</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-4 text-warning">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-warning">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-money-bill fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="d-block">Frais Retraits</small>
                              <h6 class="mb-0"><span class="">$</span> 200 000</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3 mb-4 text-info">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-primary">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-wallet fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="d-block">Montant Total</small>
                              <h6 class="mb-0"><span class="">$</span> 1 200 000</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
 
              <div class="row">
                <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">Objectifs par op&eacute;rateurs</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart16'></div></div>
                    </div>
                  </div>
                </div>
                <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0 me-2">Co&ucirc;ts par Op&eacute;rateurs</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class='chart'><div id='chart17'></div></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Responsive Table -->
              <div class="card">
                <h5 class="card-header">Responsive Table</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>#</th>
                        <th>Table heading</th>
                        <th>Table heading</th>
                        <th>Table heading</th>
                        <th>Table heading</th>
                        <th>Table heading</th>
                        <th>Table heading</th>
                        <th>Table heading</th>
                        <th>Table heading</th>
                        <th>Table heading</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->


<script type="text/javascript" src="{{asset('assets/apexcharts/js/apexcharts.min.js')}}"></script>

<script type='text/javascript'>


// Chart 16

    var options = {
    series: [{
    name: 'Prévus',
    data: ["130000", "100000", "70000", "40000"]
    }, {
    name: 'Atteints',
    data: ["140000", "90000", "80000", "20000"]
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
    categories: ['AfriMoney_CO2', 'AfriMoney_CO1', 'GiveDirectly_CO1', 'GeoPoll_CO1'],
    },
    yaxis: {
    title: {
      text: '$ (thousands)'
    }
    },
    fill: {
    opacity: 1
    },
    tooltip: {
    y: {
      formatter: function (val) {
      return '$ ' + val + ' thousands'
      }
    }
    }
    };

    var chart = new ApexCharts(document.querySelector('#chart16'), options);
    chart.render();

// Chart 17

var options = {
	series: [
	{
	  name: 'Série 1',
	  data: [13303950, 21294036, 5300, 7613060]
	},
	{
	  name: 'Série 2',
	  data: [0, 466536, 0, 213118]
	}
  ],
	chart: {
	height: 350,
	type: 'line',
	dropShadow: {
	  enabled: true,
	  color: '#000',
	  top: 18,
	  left: 7,
	  blur: 10,
	  opacity: 0.2
	},
	toolbar: {
	  show: false
	}
  },
  colors: ['#77B6EA', '#545454'],
  dataLabels: {
	enabled: true,
  },
  stroke: {
	curve: 'smooth'
  },
  title: {
	text: 'Comparatif',
	align: 'left',
	color: 'white'
  },
  grid: {
	borderColor: '#e7e7e7',
	row: {
	  colors: ['#f3f3f3', 'transparent'],
	  opacity: 0.5
	},
  },
  markers: {
	size: 1
  },
  xaxis: {
	categories: ['AfriMoney_CO2', 'AfriMoney_CO1', 'GiveDirectly_CO1', 'GeoPoll_CO1'],
	title: {
	  text: 'Opérateurs'
	}
  },
  yaxis: {
	title: {
	  text: 'Coûts'
	},
	min: 0,
	max: 25000000
  },
  legend: {
	position: 'top',
	horizontalAlign: 'right',
	floating: true,
	offsetY: -25,
	offsetX: -5
  }
  };

  var chart = new ApexCharts(document.querySelector('#chart17'), options);
  chart.render();

</script>

@endsection