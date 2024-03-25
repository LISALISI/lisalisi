@extends('layouts/master')
@section('title', 'thimo')
@section('content')

              <div class="row">
                    <div class="d-flex col-md-6 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-primary">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-city fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">TOTAL Chantiers</small>
                              <h6 class="mb-0 text-white">{{$chantier_thimo}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-md-6 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-info">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user-group fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">TOTAL B&eacute;n&eacute;ficiaires</small>
                              <h6 class="mb-0 text-white">{{$benef_thimo}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-secondary">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user-check fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">B&eacute;n&eacute;ficiaires en service</small>
                              <h6 class="mb-0 text-white">{{$enservice_thimo}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-secondary">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user-graduate fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">B&eacute;n&eacute;ficiaires Gradu&eacute;s</small>
                              <h6 class="mb-0 text-white">{{$gradue_thimo}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-secondary">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user-slash fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">B&eacute;n&eacute;ficiaires Remplac&eacute;s</small>
                              <h6 class="mb-0 text-white">{{$benef_remplace}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-secondary">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-user-lock fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">B&eacute;n&eacute;ficiaires non mis en service</small>
                              <h6 class="mb-0 text-white">{{$passervice_thimo}}</h6>
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
                              <h6 class="mb-0 text-white">{{$chantier_acheve}}</h6>
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
                              <h6 class="mb-0 text-white">{{$chantier_encours}}</h6>
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
                              <small class="d-block">Chantiers non ex&eacute;cut&eacute;s</small>
                              <h6 class="mb-0 text-white">0</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-dark">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-thumbs-up fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Kilom&egrave;tres R&eacute;alis&eacute;s</small>
                              <h6 class="mb-0 text-white">0</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-secondary">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-thumbs-up fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Infrastructures R&eacute;alis&eacute;s</small>
                              <h6 class="mb-0 text-white">0</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-dark">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-gears fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Kilom&egrave;tres En Cours</small>
                              <h6 class="mb-0 text-white">0</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex col-sm-6 col-md-3 mb-4">
                      <div class="card h-100 w-100 d-flex justify-content-center px-3 py-2 bg-secondary">
                        <div class="d-flex text-white">
                          <div class="avatar flex-shrink-0 me-3 pt-1">
                            <i class="fas fa-gears fa-2x"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="fw-bold">
                              <small class="d-block">Infrastructures En Cours</small>
                              <h6 class="mb-0 text-white">0</h6>
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
                      <div class="card-title m-0 me-2 fw-bold">Chantiers</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart49'></div></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="card h-100 w-100">
                    <div class="card-header d-flex align-items-center justify-content-between px-3 py-2">
                      <div class="card-title m-0 me-2 fw-bold">R&eacute;partition</div>
                    </div>
                    <div class="card-body border px-3 py-2">
                      <div class="chart"><div id='chart50'></div></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Responsive Table -->
              <div class="card p-3 mb-2">
              <div class="mb-2"><h4><span class="badge badge-primary">THIMO</span></h4></div>
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
                        <th bgcolor="#dddddd">ANTENNES</th>
                        <th bgcolor="#fff2cc">2020-2021</th>
                        <th bgcolor="#fff2cc">2022</th>
                        <th bgcolor="#fff2cc">2023-2024</th>
                        <th bgcolor="#fbe5d6">TOTAL</th>
                        <th bgcolor="#79e7b4">DEJA GRADUES</th>
                        <th bgcolor="#fff137">MIS EN SERVICE</th>
                        <th bgcolor="#ff7888">NON MIS EN SERVICE</th>
                      </tr>
                      @foreach($data as $row)
                      <tr>
                        <td bgcolor="#bdd7ee">{{$row->province}}</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">{{$row->Nbre_benef}}</td>
                        <td align="center">{{$row->Nbre_benef}}</td>
                        <td align="center">{{$gradue_thimo}}</td>
                        <td align="center">{{$row->Actifs}}</td>
                        <td align="center">{{$row->Inactif}}</td>
                      </tr>
                      @endforeach
                      <tr align="center">
                        <th bgcolor="#dddddd">TOTAL</th>
                        <th bgcolor="#eeeeee">0</th>
                        <th bgcolor="#eeeeee">0</th>
                        <th bgcolor="#eeeeee">{{$benef_thimo}}</th>
                        <th bgcolor="#eeeeee">{{$benef_thimo}}</th>
                        <th bgcolor="#eeeeee">{{$gradue_thimo}}</th>
                        <th bgcolor="#eeeeee">{{$enservice_thimo}}</th>
                        <th bgcolor="#eeeeee">{{$passervice_thimo}}</th>
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
			temp_link.download = "THIMO.csv";
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

              <!-- Responsive Table
              <div class="card p-3 mb-2">
              <div class="mb-2"><h4><span class="badge badge-primary">THIMO | IDB</span></h4></div>
                <div class="table-responsive-lg">
                  <table width="100%" cellpadding="3" border="2">
                      <tr align="center">
                        <th></th>
                        <th bgcolor="#fff2cc"></th>
                        <th bgcolor="#fff2cc">OBJECTIFS</th>
                        <th bgcolor="#fff2cc"></th>
                        <th colspan="3" bgcolor="#6fd0ff">SITUATION AU 30 AVRIL 2023</th>
                      </tr>
                      <tr align="center">
                        <th bgcolor="#dddddd">ACTIVITES</th>
                        <th bgcolor="#fff2cc">2020-2021</th>
                        <th bgcolor="#fff2cc">2022</th>
                        <th bgcolor="#fff2cc">2023-2024</th>
                        <th bgcolor="#79e7b4">ACHEVES</th>
                        <th bgcolor="#fff137">EN COURS</th>
                        <th bgcolor="#ff7888">NON MIS EN EXECUTION</th>
                      </tr>
                      <tr>
                        <td bgcolor="#bdd7ee">ITURI</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                      </tr>
                      <tr>
                        <td bgcolor="#bdd7ee">KASAI CENTRAL</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                      </tr>
                      <tr>
                        <td bgcolor="#bdd7ee">NORD-KIVU</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                      </tr>
                      <tr>
                        <td bgcolor="#bdd7ee">NORD-UBANGI</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                      </tr>
                      <tr>
                        <td bgcolor="#bdd7ee">SUD-KIVU</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                      </tr>
                      <tr>
                        <td bgcolor="#bdd7ee">SUD-UBANGI</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                        <td align="center">0</td>
                      </tr>
                      <tr align="center">
                        <th bgcolor="#dddddd">S/TOTAL</th>
                        <th bgcolor="#eeeeee">0</th>
                        <th bgcolor="#eeeeee">0</th>
                        <th bgcolor="#eeeeee">0</th>
                        <th bgcolor="#eeeeee">0</th>
                        <th bgcolor="#eeeeee">0</th>
                        <th bgcolor="#eeeeee">0</th>
                      </tr>
                      <tr align="center">
                        <th bgcolor="#dddddd">TOTAL GENERAL</th>
                        <th bgcolor="#eeeeee"></th>
                        <th bgcolor="#eeeeee">0</th>
                        <th bgcolor="#eeeeee"></th>
                        <th bgcolor="#eeeeee"></th>
                        <th bgcolor="#eeeeee">0</th>
                        <th bgcolor="#eeeeee"></th>
                      </tr>
                  </table>
                  <div class="text-center mt-2"><button type="button" class="btn btn-sm btn-secondary" onclick="tableToCSV2()">download CSV</button></div>
                </div>
              </div> -->
              <!--/ Responsive Table -->

	<script type="text/javascript">
/*		function tableToCSV2() {

			// Variable to store the final csv data
			let csv_data2 = [];

			// Get each row data
			let rows2 = document.getElementsByTagName('tr');
			for (let i = 0; i < rows2.length; i++) {

				// Get each column data
				let cols2 = rows2[i].querySelectorAll('td,th');

				// Stores each csv row data
				let csvrow2 = [];
				for (let j = 0; j < cols2.length; j++) {

					// Get the text data of each cell
					// of a row and push it to csvrow
					csvrow2.push(cols2[j].innerHTML);
				}

				// Combine each column value with comma
				csv_data2.push(csvrow2.join(","));
			}

			// Combine each row data with new line character
			csv_data2 = csv_data2.join('\n');

			// Call this function to download csv file 
			downloadCSVFile(csv_data2);

		}

		function downloadCSVFile(csv_data2) {

			// Create CSV file object and feed
			// our csv_data into it
			CSVFile2 = new Blob([csv_data2], {
				type: "text/csv"
			});

			// Create to temporary link to initiate
			// download process
			let temp_link2 = document.createElement('a');

			// Download csv file
			temp_link2.download = "THIMOIDB.csv";
			let url2 = window.URL.createObjectURL(CSVFile2);
			temp_link2.href = url2;

			// This link should not be displayed
			temp_link2.style.display = "none";
			document.body.appendChild(temp_link2);

			// Automatically click the link to
			// trigger download
			temp_link2.click();
			document.body.removeChild(temp_link2);
		} */
	</script>


<script type="text/javascript" src="{{asset('assets/apexcharts/js/apexcharts.min.js')}}"></script>

<script type='text/javascript'>

// Chart 49

var options = {
          series: [{
          data: [{{$it}}, {{$kc}}, {{$nk}}, {{$nu}}, {{$sk}}, {{$su}}]
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

        var chart = new ApexCharts(document.querySelector("#chart49"), options);
        chart.render();

// Chart 50

var options = {
          series: [{
          name: 'TOTAL AJUST',
          data: [{{$benef_thimo}}, 0]
        }, {
          name: 'GRADU&Eacute;S',
          data: [0, {{$gradue_thimo}}]
        }, {
          name: 'EN SERVICE 2022',
          data: [0, {{$enservice_thimo}}]
        }, {
          name: 'NON EN SERVICE',
          data: [0, {{$passervice_thimo}}]
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

        var chart = new ApexCharts(document.querySelector("#chart50"), options);
        chart.render();
      

</script>


@endsection
