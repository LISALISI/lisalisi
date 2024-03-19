             </div>
            
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- ApexCharts -->
    <script type="text/javascript" src="../apexcharts/js/apexcharts.min.js"></script>

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>
    <script type='text/javascript'>

    // Chart 1

    var options = {
      series: [{ 
      name: 'Objectifs',      
      data: [44, 55, 41, 64, 22, 43]
    }, {
      name: 'Réalisations',    
      data: [53, 32, 33, 52, 13, 44]
    }],
      chart: {
      type: 'bar',
      height: 430
    },
    plotOptions: {
      bar: {
        horizontal: true,
        dataLabels: {
          position: 'top',
        },
      }
    },
    dataLabels: {
      enabled: true,
      offsetX: -6,
      style: {
        fontSize: '12px',
        colors: ['#fff']
      }
    },
    stroke: {
      show: true,
      width: 1,
      colors: ['#fff']
    },
    tooltip: {
      shared: true,
      intersect: false
    },
    xaxis: {
      categories: ['ITURI', 'NORD-KIVU', 'SUD-KIVU', 'KASAI-CENTRAL', 'NORD-UBANGI', 'SUD-UBANGI'],
    },
    };

    var chart = new ApexCharts(document.querySelector('#chart1'), options);
    chart.render();

    // Chart 2

    var options = {
      series: [{ 
      name: 'Objectifs',      
      data: [44, 55, 41, 64, 22, 43]
    }, {
      name: 'Réalisations',    
      data: [53, 32, 33, 52, 13, 44]
    }],
      chart: {
      type: 'bar',
      height: 430
    },
    plotOptions: {
      bar: {
        horizontal: true,
        dataLabels: {
          position: 'top',
        },
      }
    },
    dataLabels: {
      enabled: true,
      offsetX: -6,
      style: {
        fontSize: '12px',
        colors: ['#fff']
      }
    },
    stroke: {
      show: true,
      width: 1,
      colors: ['#fff']
    },
    tooltip: {
      shared: true,
      intersect: false
    },
    xaxis: {
      categories: ['ITURI', 'NORD-KIVU', 'SUD-KIVU', 'KASAI-CENTRAL', 'NORD-UBANGI', 'SUD-UBANGI'],
    },
    };

    var chart = new ApexCharts(document.querySelector('#chart2'), options);
    chart.render();

    // Chart 3

    var options = {
      series: [{ 
      name: 'Objectifs',      
      data: [44, 55, 41, 64, 22, 43]
    }, {
      name: 'Réalisations',    
      data: [53, 32, 33, 52, 13, 44]
    }],
      chart: {
      type: 'bar',
      height: 430
    },
    plotOptions: {
      bar: {
        horizontal: true,
        dataLabels: {
          position: 'top',
        },
      }
    },
    dataLabels: {
      enabled: true,
      offsetX: -6,
      style: {
        fontSize: '12px',
        colors: ['#fff']
      }
    },
    stroke: {
      show: true,
      width: 1,
      colors: ['#fff']
    },
    tooltip: {
      shared: true,
      intersect: false
    },
    xaxis: {
      categories: ['ITURI', 'NORD-KIVU', 'SUD-KIVU', 'KASAI-CENTRAL', 'NORD-UBANGI', 'SUD-UBANGI'],
    },
    };

    var chart = new ApexCharts(document.querySelector('#chart3'), options);
    chart.render();

    // Chart 4

    var options = {
      series: [{ 
      name: 'Objectifs',      
      data: [44, 55, 41, 64, 22, 43]
    }, {
      name: 'Réalisations',    
      data: [53, 32, 33, 52, 13, 44]
    }],
      chart: {
      type: 'bar',
      height: 430
    },
    plotOptions: {
      bar: {
        horizontal: true,
        dataLabels: {
          position: 'top',
        },
      }
    },
    dataLabels: {
      enabled: true,
      offsetX: -6,
      style: {
        fontSize: '12px',
        colors: ['#fff']
      }
    },
    stroke: {
      show: true,
      width: 1,
      colors: ['#fff']
    },
    tooltip: {
      shared: true,
      intersect: false
    },
    xaxis: {
      categories: ['ITURI', 'NORD-KIVU', 'SUD-KIVU', 'KASAI-CENTRAL', 'NORD-UBANGI', 'SUD-UBANGI'],
    },
    };

    var chart = new ApexCharts(document.querySelector('#chart4'), options);
    chart.render();

    // Chart 5

    var options = {
      series: [{ 
      name: 'Objectifs',      
      data: [44, 55, 41, 64, 22, 43]
    }, {
      name: 'Réalisations',    
      data: [53, 32, 33, 52, 13, 44]
    }],
      chart: {
      type: 'bar',
      height: 430
    },
    plotOptions: {
      bar: {
        horizontal: true,
        dataLabels: {
          position: 'top',
        },
      }
    },
    dataLabels: {
      enabled: true,
      offsetX: -6,
      style: {
        fontSize: '12px',
        colors: ['#fff']
      }
    },
    stroke: {
      show: true,
      width: 1,
      colors: ['#fff']
    },
    tooltip: {
      shared: true,
      intersect: false
    },
    xaxis: {
      categories: ['ITURI', 'NORD-KIVU', 'SUD-KIVU', 'KASAI-CENTRAL', 'NORD-UBANGI', 'SUD-UBANGI'],
    },
    };

    var chart = new ApexCharts(document.querySelector('#chart5'), options);
    chart.render();


    
    </script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- MDB -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script> -->
    <script type="text/javascript" src="mdb-ui-kit-6.4.1/js/mdb.min.js"></script>
    <script type="text/javascript" src="../mdb/js/admin.js"></script>

  </body>
</html>
