@extends('layouts/master')
{{-- @section('idb_select', 'active') --}}
@section('title', 'Infrastructures de Base')
@section('content')
<!--
              <div class="row">
                <div class="col-12 mb-4">
                  <div class="card h-100 w-100 p-3">
                  <h6 class="mb-0">@yield('title')</h6>
                  </div>
                </div>
              </div> -->

<div class="card mb-4 px-3 pt-3 pb-2">

<div class="row mt-2">
    <div class="col-md-3 mb-1"><div class="m-1">Actions Contextuelles</div></div>
    <div class="col-md-7 mb-1"><a href="" type="button" class="btn-sm btn-outline-primary">Update</a> <a href="" type="button" class="btn-sm btn-outline-success">Imprimer</a></div>
    <div class="col-md-2 mb-1"><a href="" type="button" class="btn-sm btn-link">IDB / Update_IDB</a></div>
</div>
</div>

              <div class="row">
                    <div class="d-flex col-md-6 col-lg-4 mb-4 text-warning">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-city fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Provinces</small>
                              <h6 class="mb-0">5</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-md-6 col-lg-4 mb-4 text-info">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-users fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Communaut&eacute;s</small>
                              <h6 class="mb-0">445</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-md-6 col-lg-4 mb-4 text-secondary">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-building fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Chantiers</small>
                              <h6 class="mb-0">456</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-md-6 col-lg-4 mb-4 text-success">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-dollar fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Budget PTBA</small>
                              <h6 class="mb-0">69 084 000</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-md-6 col-lg-4 mb-4 text-success">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-dollar fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant Etudes</small>
                              <h6 class="mb-0">95 307 983</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-md-6 col-lg-4 mb-4 text-success">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-dollar fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant Travaux</small>
                              <h6 class="mb-0">2 015 710 252</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-md-6 col-lg-4 mb-4 text-success">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-dollar fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant Contr&ocirc;les</small>
                              <h6 class="mb-0">41 961 207</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-md-6 col-lg-4 mb-4 text-success">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-dollar fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant Equipements</small>
                              <h6 class="mb-0">356 707 235</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-md-6 col-lg-4 mb-4 text-success">
                      <div class="card h-100 w-100 px-3 py-2">
                        <div class="d-flex">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-dollar fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div>
                              <small class="text-muted d-block">Montant Global D&eacute;pens&eacute;</small>
                              <h6 class="mb-0">2 509 686 677</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">R&eacute;partition des Chantiers par Provinces</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart13'></div></div>
                    </div>
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">R&eacute;partition par Statut B&eacute;n&eacute;ficiaire</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class='chart'><div id='chart14'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                   <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h5 class="card-title m-0">R&eacute;alisation des objectifs par Provinces</h5>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart15'></div></div>
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


// Chart 13

var options = {
    labels: ['Ituri', 'Kasaï-Central', 'Nord-Kivu', 'Nord-Ubangi', 'Sud-Kivu'],
    series: [90, 111, 19, 138, 98],
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
  labels: ['Homme', 'Femme'],
	series: [587126, 685472],
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

  var chart = new ApexCharts(document.querySelector('#chart14'), options);
  chart.render();

// Chart 15

var options = {
    series: [{
    name: 'Prévus',
    data: ["600000000", "520000000", "200000", "1100000000", "300000000"]
    }, {
    name: 'Atteints',
    data: ["40000000", "35000000", "100000", "60000000", "20000000"]
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
    categories: ['Ituri', 'Kasaï-Central', 'Nord-Kivu', 'Nord-Ubangi', 'Sud-Kivu'],
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

    var chart = new ApexCharts(document.querySelector('#chart15'), options);
    chart.render();

</script>

@endsection
