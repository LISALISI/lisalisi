@extends('layouts/master')
@section('idb_select', 'active')
@section('title', 'Infrastructures de Base')
@section('content')

            <div class="row">
                    <div class="d-flex col-sm-6 col-md-4 mb-4">
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
                    <div class="d-flex col-sm-6 col-md-4 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-info">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-building fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Chantiers mis en oeuvre</small>
                              <h6 class="mb-0 text-white">{{$allchantieridb}}</h6>
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
                              <small class="d-block">Chantiers achev&eacute;s</small>
                              <h6 class="mb-0 text-white">{{$achevedchantier}}</h6>
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
                              <small class="d-block">Chantiers en cours</small>
                              <h6 class="mb-0 text-white">{{$idb_encours}}</h6>
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
                              <small class="d-block">Chantiers en attente</small>
                              <h6 class="mb-0 text-white">{{$idb_attente}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-4 mb-4">
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
                      <div class="card-title m-0 me-2 fw-bold">Chantiers achev&eacute;s</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart46'></div></div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">Chantiers achev&eacute;s par Provinces</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart13'></div></div>
                    </div>
                  </div>
                </div> -->
                <div class="col-md-12 col-lg-8 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">Objectifs par Provinces</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart15'></div></div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Responsive Table -->
              <div class="card p-3 mb-2">
                <div class="mb-2"><h4><span class="badge badge-primary">IDB</span></h4></div>
                <div class="table-responsive-lg">
                  <table width="100%" cellpadding="3" border="2">
                  <tr align="center">
                        <th></th>
                        <th bgcolor="#fff2cc"></th>
                        <th bgcolor="#fff2cc">OBJECTIFS</th>
                        <th bgcolor="#fff2cc"></th>
                        <th></th>
                        <th colspan="4" bgcolor="#6fd0ff">REALISATIONS</th>
                      </tr>
                      <tr align="center">
                        <th bgcolor="#dddddd">PROVINCES</th>
                        <th bgcolor="#fff2cc">2020-2021</th>
                        <th bgcolor="#fff2cc">2022</th>
                        <th bgcolor="#fff2cc">2022-2023</th>
                        <th bgcolor="#fbe5d6">TOTAL AJUSTE</th>
                        <th bgcolor="#2eeaff">MIS EN OEUVRE</th>
                        <th bgcolor="#fff137">EN COURS</th>
                        <th bgcolor="#79e7b4">ACHEVES</th>
                        <th bgcolor="#ff7888">EN ATTENTE</th>
                      </tr>

                      @foreach($data as $row)  

                      <tr>
                        <td bgcolor="#bdd7ee">{{$row->province}}</td>
                        <td align="center">{{$row->P2020_2021}}</td>
                        <td align="center">{{$row->P2021_2022}}</td>
                        <td align="center">{{$row->P2022_2023}}</td>
                        <td align="center">{{$row->Total_Idbs}}</td>
                        <td align="center">{{$row->Idb_enoeuvre}}</td>
                        <td align="center">{{$row->Idb_execution}}</td>
                        <td align="center">{{$row->Chantier_Acheve}}</td>
                        <td align="center">{{$row->Idb_attente}}</td>
                      </tr>

                      @endforeach

                      <tr align="center">
                        <th bgcolor="#dddddd">TOTAUX</th>
                        <th bgcolor="#eeeeee">{{$obj2020_2021}}</th>
                        <th bgcolor="#eeeeee">{{$obj2021_2022}}</th>
                        <th bgcolor="#eeeeee">{{$obj2022_2023}}</th>
                        <th bgcolor="#eeeeee">{{$total_idbs}}</th>
                        <th bgcolor="#eeeeee">{{$enoeuvre_idbs}}</th>
                        <th bgcolor="#eeeeee">{{$execution_idbs}}</th>
                        <th bgcolor="#eeeeee">{{$acheved_idbs}}</th>
                        <th bgcolor="#eeeeee">{{$attente_idbs}}</th>
                      </tr>
                    
                  </table>
                  <div class="text-center mt-2"><button type="button" class="btn btn-sm btn-secondary" onclick="tableToCSV()">download CSV</button></div>
              </div>
            </div>
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
			temp_link.download = "IDB.csv";
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

// Chart 13

var options = {
    labels: ['IT', 'KC', 'NK', 'NU', 'SK'],
    series: [{{$chantierit}}, {{$chantierkc}}, {{$chantiernk}}, {{$chantiernu}}, {{$chantiersk}}],
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
          data: [0, {{$idb_encours}}]
        }, {
          name: 'NON EX&Eacute;CUT&Eacute;S',
          data: [0, {{$idb_attente}}]
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
    categories: ['IT', 'KC', 'NK', 'NU', 'SK'],
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
          data: [{{$washit}}, {{$washkc}}, {{$washnk}}, {{$washnu}}, {{$washsk}}, {{$washsu}}]
          }, {
          name: 'SANTE',
          data: [{{$santit}}, {{$santkc}}, {{$santnk}}, {{$santnu}}, {{$santsk}}, {{$santsu}}]
        }, {
          name: 'EDUCATION',
          data: [{{$educit}}, {{$educkc}}, {{$educnk}}, {{$educnu}}, {{$educsk}}, {{$educsu}}]
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
          data: [{{$washit}}, {{$educit}}, {{$santit}}]
        }, {
          name: 'KC',
          data: [{{$washkc}}, {{$educkc}}, {{$santkc}}]
        }, {
          name: 'NK',
          data: [{{$washnk}}, {{$educnk}}, {{$santnk}}]
        }, {
          name: 'NU',
          data: [{{$washnu}}, {{$educnu}}, {{$santnu}}]
        }, {
          name: 'SK',
          data: [{{$washsk}}, {{$educsk}}, {{$santsk}}]
        }, {
          name: 'SU',
          data: [{{$washsu}}, {{$educsu}}, {{$santsu}}]
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
          categories: ["WASH", "SANTE", "EDUCATION"],
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
          data: [{{$washit}}, {{$educit}}, {{$santit}}]
        }, {
          name: 'KC',
          data: [{{$washkc}}, {{$educkc}}, {{$santkc}}]
        }, {
          name: 'NK',
          data: [{{$washnk}}, {{$educnk}}, {{$santnk}}]
        }, {
          name: 'NU',
          data: [{{$washnu}}, {{$educnu}}, {{$santnu}}]
        }, {
          name: 'SK',
          data: [{{$washsk}}, {{$educsk}}, {{$santsk}}]
        }, {
          name: 'SU',
          data: [{{$washsu}}, {{$educsu}}, {{$santsu}}]
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
          categories: ['WASH', 'SANTE', 'EDUCATION'
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

// Chart 46

var options = {
          series: [{
          data: [{{$chantierit}}, {{$chantierkc}}, {{$chantiernk}}, {{$chantiernu}}, {{$chantiersk}}, {{$chantiersu}}]
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

        var chart = new ApexCharts(document.querySelector("#chart46"), options);
        chart.render();

    
</script>

@endsection
