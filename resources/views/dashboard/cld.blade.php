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
                      <tr align="center">
                        <th></th>
                        <th bgcolor="#fff2cc"></th>
                        <th bgcolor="#fff2cc">OBJECTIFS</th>
                        <th bgcolor="#fff2cc"></th>
                        <th></th>
                        <th colspan="3" bgcolor="#6fd0ff">SITUATION AU 30 AVRIL 2023</th>
                      </tr>
                      <tr align="center">
                        <th bgcolor="#dddddd">ACTIVITES</th>
                        <th bgcolor="#fff2cc">2020-2021</th>
                        <th bgcolor="#fff2cc">2022</th>
                        <th bgcolor="#fff2cc">2023-2024</th>
                        <th bgcolor="#fbe5d6">TOTAL AJUSTE</th>
                        <th bgcolor="#79e7b4">ACHEVES</th>
                        <th bgcolor="#fff137">EN COURS</th>
                        <th bgcolor="#ff7888">NON REALISES</th>
                      </tr>
                      <tr>
                        <td bgcolor="#bdd7ee">CHARTES SIGNEES</td>
                        <td align="center">{{$cible_chartes2021}}</td>
                        <td align="center">{{$cible_chartes2022}}</td>
                        <td align="center">{{$cible_chartes2023}}</td>
                        <td align="center">{{$Tota_ciblecharte}}</td>
                        <td align="center">{{$Nbrechartes}}</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                      </tr>
                      <tr>
                        <td bgcolor="#bdd7ee">FORMATIONS CLD</td>
                        <td align="center">{{$cibleforma_realisation2021}}</td>
                        <td align="center">{{$cibleforma_realisation2022}}</td>
                        <td align="center">{{$cibleforma_realisation2023}}</td>
                        <td align="center">{{$cibleNbreforma}}</td>
                        <td align="center">{{$Nbreforma}}</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                      </tr>
                      <tr>
                        <td bgcolor="#bdd7ee">CONSTRUCTION BUREAUX</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">{{$Total_cld}}</td>
                        <td align="center">{{$bureaux_cld_acheves}}</td>
                        <td align="center">{{$Nbre_cld_encours}}</td>
                        <td align="center">{{$cld_en_attente}}</td>
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
			temp_link.download = "CLD.csv";
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
