@extends('layouts/master')
@section('title', 'Transfert Monétaire Inconditionel')
@section('content')

              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <div class="card w-100 d-flex justify-content-center px-3 py-2 bg-primary mb-4">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">B&eacute;n&eacute;ficiaires</small>
                              <h6 class="mb-0">{{$beneftmi}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card w-100 d-flex justify-content-center px-3 py-2 bg-success mb-4">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-dollar fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Montant allou&eacute;</small>
                              <h6 class="mb-0">{{$totalmontanttmi}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <div class="card w-100 d-flex justify-content-center px-3 py-2 bg-danger mb-4">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-city fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Provinces</small>
                              <h6 class="mb-0">{{$prov}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card w-100 d-flex justify-content-center px-3 py-2 bg-info mb-4">
                        <div class="d-flex align-items-center justify-content-center text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-users fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Communaut&eacute;s</small>
                              <h6 class="mb-0">{{$communautetmi}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="d-flex col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2">
                        <div class="card-body px-3 py-2">
                          <div class="chart"><div id='chart10'></div></div>
                        </div>
                      </div>
                </div>
              </div>
              <div class="row">
                <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">Objectifs par Provinces</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart8'></div></div>
                    </div>
                  </div>
                </div>
                <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">B&eacute;n&eacute;ficiaires par Provinces</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart9'></div></div>
                    </div>
                  </div>
                </div>
                <div class="d-flex col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">B&eacute;n&eacute;ficiaires par Statuts</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class='chart'><div id='chart11'></div></div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between p-3">
                      <h15 class="card-title m-0 me-2">Evolution par TM</h15>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class='chart'><div id='chart12'></div></div>
                    </div>
                  </div>
                </div> -->
              </div>


            <!-- Responsive Table -->
            <div class="card p-3 mb-2">
              <div class="mb-2"><h4><span class="badge badge-primary">Evolution des paiements individuels par distribution et par Province</span></h4></div>
                <div class="table-responsive-lg">
                  <table width="100%" cellpadding="3" border="2">
                    <tr align="center">

                      <th bgcolor="#dddddd">Provinces</th>
                      <th bgcolor="#fff2cc">Communaut&eacute;s</th>
                      <th bgcolor="#fbe5d6">B&eacute;n&eacute;ficiaires</th>
                      <th bgcolor="#fff2cc">Mont_TOTAL</th>
                      <th bgcolor="#fbe5d6">Nbr_TM1</th>
                      <th bgcolor="#fff2cc">Mont_TM1</th>
                      <th bgcolor="#fbe5d6">Nbr_TM2</th>
                      <th bgcolor="#fff2cc">Mont_TM2</th>
                      <th bgcolor="#fbe5d6">Nbr_TM3</th>
                      <th bgcolor="#fff2cc">Mont_TM3</th>
                      <th bgcolor="#fbe5d6">Nbr_TM4</th>
                      <th bgcolor="#fff2cc">Mont_TM4</th>
                    </tr>
@foreach($data as $row)
          <tr>
          <td bgcolor="#bdd7ee">{{$row->Province}}</td>
          <td align="center">{{$row->Communaute}}</td>
          <td align="center">{{$row->Nbre_benef}}</td>
          <td align="center">{{$row->Montant_total}}</td>
          <td align="center">{{$row->Nbre_TM1}}</td>
          <td align="center">{{$row->Montant_TM1}}</td>
          <td align="center">{{$row->Nbre_TM2}}</td>
          <td align="center">{{$row->Montant_TM2}}</td>
          <td align="center">{{$row->Nbre_TM3}}</td>
          <td align="center">{{$row->Montant_TM3}}</td>
          <td align="center">{{$row->Nbre_TM4}}</td>
          <td align="center">{{$row->Montant_TM4}}</td>
          </tr>
@endforeach
<tr align="center">
          <th bgcolor="#dddddd">Totaux</th>
          <th bgcolor="#fff2cc">{{$Tot_communaute}}</th>
          <th bgcolor="#fbe5d6">{{$Tot_benef}}</th>
          <th bgcolor="#fff2cc">{{$Tot_Montant}}</th>
          <th bgcolor="#fbe5d6">{{$Nbre_tm1}}</th>
          <th bgcolor="#fff2cc">{{$Montant_tm1}}</th>
          <th bgcolor="#fbe5d6">{{$Nbre_tm2}}</th>
          <th bgcolor="#fff2cc">{{$Montant_tm2}}</th>
          <th bgcolor="#fbe5d6">{{$Nbre_tm3}}</th>
          <th bgcolor="#fff2cc">{{$Montant_tm3}}</th>
          <th bgcolor="#fbe5d6">{{$Nbre_tm4}}</th>
          <th bgcolor="#fff2cc">{{$Montant_tm4}}</th>
</tr>
                </table>
                <div class="text-center mt-2"><button type="button" class="btn btn-sm btn-secondary" onclick="tableToCSV()">download CSV</button></div>
              </div>
            </div>
            <!--/ Responsive Table -->

	<script type="text/javascript">
		function tableToCSV() {

			// Variable to store the final csv data
			let csv_data = [];

			// Get each row data
			let rows = document.getElementsByTagName('tr');
			for (let i = 0; i < rows.length; i++) {

				// Get each column data
				let cols = rows[i].querySelectorAll('td,th');

				// Stores each csv row data
				let csvrow = [];
				for (let j = 0; j < cols.length; j++) {

					// Get the text data of each cell
					// of a row and push it to csvrow
					csvrow.push(cols[j].innerHTML);
				}

				// Combine each column value with comma
				csv_data.push(csvrow.join(","));
			}

			// Combine each row data with new line character
			csv_data = csv_data.join('\n');

			// Call this function to download csv file 
			downloadCSVFile(csv_data);

		}

		function downloadCSVFile(csv_data) {

			// Create CSV file object and feed
			// our csv_data into it
			CSVFile = new Blob([csv_data], {
				type: "text/csv"
			});

			// Create to temporary link to initiate
			// download process
			let temp_link = document.createElement('a');

			// Download csv file
			temp_link.download = "TMI.csv";
			let url = window.URL.createObjectURL(CSVFile);
			temp_link.href = url;

			// This link should not be displayed
			temp_link.style.display = "none";
			document.body.appendChild(temp_link);

			// Automatically click the link to
			// trigger download
			temp_link.click();
			document.body.removeChild(temp_link);
		}
	</script>


<script type="text/javascript" src="{{asset('assets/apexcharts/js/apexcharts.min.js')}}"></script>

<script type='text/javascript'>


// Chart 8

    var options = {
    series: [{
    name: 'Prévus',
    data: [{{$nuobjectif}}, {{$itobjectif}}, {{$kcobjectif}}, {{$skobjectif}}, {{$nkobjectif}}, {{$suobjectif}}]
    }, {
    name: 'Atteints',
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
    categories: ['NU', 'IT', 'KC', 'SK','NK','SU'],
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

    var chart = new ApexCharts(document.querySelector('#chart8'), options);
    chart.render();

// Chart 9

    var options = {
          series: [{
          data: [{{$nu}}, {{$it}}, {{$kc}}, {{$sk}}, {{$nk}}, {{$su}}]
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
        xaxis: {
          categories: ['NU', 'IT', 'KC', 'SK','NK','SU'
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
    
    var chart = new ApexCharts(document.querySelector('#chart9'), options);
    chart.render();

// Chart 10

  var options = {
  labels: ['TOTAL BENEFICIAIRES', 'Homme', 'Femme'],
	series: [0, {{$homme}}, {{$femme}}],
	chart: {
	type: 'pie',
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

  var chart = new ApexCharts(document.querySelector('#chart10'), options);
  chart.render();

// Chart 11

	var options = {
				series: [{
				name: 'Nombre',
				data: [{{$ch}},{{$depla}},{{$dm}},{{$pygme}},{{$r}},{{$rf}},{{$rt}},{{$refo}},{{$rfl}},{{$p}},{{$d}}]
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
				categories: ['Communauté Hôte', 'Déplacé', 'Démobilisé', 'Pygmé','R','RF','RT','REFO','RFL','P','D'],
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

			  var chart = new ApexCharts(document.querySelector('#chart11'), options);
			  chart.render();

// Chart 12

        var options = {
				series: [{
				name: 'Bénéficiaires',
				data: [54651510, 845212562, 358696450, 47852660]
			  }, {
				name: 'TM1',
				data: [54651510, 845212562, 358696450, 47852660]
			  }, {
				name: 'TM2',
				data: [54651510, 845212562, 358696450, 47852660]
			  }, {
				name: 'TM3',
				data: [54651510, 845212562, 358696450, 47852660]
			  }, {
				name: 'TM4',
				data: [54651510, 845212562, 358696450, 47852660]
			  }, {
				name: 'TM5',
				data: [54651510, 845212562, 358696450, 47852660]
			  }, {
				name: 'TM6',
				data: [54651510, 845212562, 358696450, 47852660]
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
				categories: ['AfriMoney', 'Airtel', 'GiveDirectly', 'GeoPoll'],
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

			  var chart = new ApexCharts(document.querySelector('#chart12'), options);
			  chart.render();


</script>

@endsection
