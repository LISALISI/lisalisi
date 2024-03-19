// SIDEBAR DROPDOWN
const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');
const sidebar = document.getElementById('sidebar');

allDropdown.forEach(item=> {
	const a = item.parentElement.querySelector('a:first-child');
	a.addEventListener('click', function (e) {
		e.preventDefault();

		if(!this.classList.contains('active')) {
			allDropdown.forEach(i=> {
				const aLink = i.parentElement.querySelector('a:first-child');

				aLink.classList.remove('active');
				i.classList.remove('show');
			})
		}

		this.classList.toggle('active');
		item.classList.toggle('show');
	})
})





// SIDEBAR COLLAPSE
const toggleSidebar = document.querySelector('nav .toggle-sidebar');
const allSideDivider = document.querySelectorAll('#sidebar .divider');

if(sidebar.classList.contains('hide')) {
	allSideDivider.forEach(item=> {
		item.textContent = '-'
	})
	allDropdown.forEach(item=> {
		const a = item.parentElement.querySelector('a:first-child');
		a.classList.remove('active');
		item.classList.remove('show');
	})
} else {
	allSideDivider.forEach(item=> {
		item.textContent = item.dataset.text;
	})
}

toggleSidebar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');

	if(sidebar.classList.contains('hide')) {
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})

		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
	} else {
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




sidebar.addEventListener('mouseleave', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})
	}
})



sidebar.addEventListener('mouseenter', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})



// LISA DROPDOWN
const lisa = document.querySelector('nav #lisa');
const imgLisa = lisa.querySelector('img');
const dropdownLisa = lisa.querySelector('#lisa-link');

imgLisa.addEventListener('click', function () {
	dropdownLisa.classList.toggle('show');
})


// PROF DROPDOWN
const prof = document.querySelector('nav #prof');
const imgProf = prof.querySelector('img');
const dropdownProf = prof.querySelector('#prof-link');

imgProf.addEventListener('click', function () {
	dropdownProf.classList.toggle('show');
})



// MENU
const allMenu = document.querySelectorAll('main .content-data .head .menu');

allMenu.forEach(item=> {
	const icon = item.querySelector('.icon');
	const menuLink = item.querySelector('.menu-link');

	icon.addEventListener('click', function () {
		menuLink.classList.toggle('show');
	})
})


window.addEventListener('hover', function (e) {
	if(e.target !== imgLisa) {
		if(e.target !== dropdownLisa) {
			if(dropdownLisa.classList.contains('show')) {
				dropdownLisa.classList.remove('show');
			}
		}
	}
	if(e.target !== imgProf) {
		if(e.target !== dropdownProf) {
			if(dropdownProf.classList.contains('show')) {
				dropdownProf.classList.remove('show');
			}
		}
	}

	allMenu.forEach(item=> {
		const icon = item.querySelector('.icon');
		const menuLink = item.querySelector('.menu-link');

		if(e.target !== icon) {
			if(e.target !== menuLink) {
				if (menuLink.classList.contains('show')) {
					menuLink.classList.remove('show')
				}
			}
		}
	})
})

// PROGRESSBAR
const allProgress = document.querySelectorAll('main .card .progress');

allProgress.forEach(item=> {
	item.style.setProperty('--value', item.dataset.value)
})






// APEXCHART

/*
var options = {
  series: [{
  name: 'series1',
  data: [31, 40, 28, 51, 42, 109, 100]
}, {
  name: 'series2',
  data: [11, 32, 45, 32, 34, 52, 41]
}],
  chart: {
  height: 350,
  type: 'area'
},
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'smooth'
},
xaxis: {
  type: 'datetime',
  categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
},
tooltip: {
  x: {
    format: 'dd/MM/yy HH:mm'
  },
},
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

*/


      
var options = {
    labels: ['ITURI', 'KASAI-CENTRAL', 'NORD-KIVU', 'NORD-UBANGI', 'SUD-KIVU'],
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

  var chart = new ApexCharts(document.querySelector("#chart1"), options);
  chart.render();

      
  var options = {
    labels: ['EN COURS'],
	series: [456],
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

  var chart = new ApexCharts(document.querySelector("#chart2"), options);
  chart.render();

    
  var options = {
	series: [{
	name: 'Prévus',
	data: [602242407, 521549796, 0, 1086638342, 297079842]
  }, {
	name: 'Atteints',
	data: [13625000, 16816500, 0, 20907000, 14847000]
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
	categories: ['ITURI', 'KASAI-CENTRAL', 'NORD-KIVU', 'NORD-UBANGI', 'SUD-KIVU'],
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
		return "$ " + val + " thousands"
	  }
	}
  }
  };

  var chart = new ApexCharts(document.querySelector("#chart3"), options);
  chart.render();




