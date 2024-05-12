//[Dashboard Javascript]

//Project:	Doclinic - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	
		var options = {
          series: [{
          name: 'OPD',
          data: [76, 85, 101, 98, 87, 105, 91]
        }, {
          name: 'Admitted',
          data: [44, 55, 57, 56, 61, 58, 63]
        }],
          chart: {
          type: 'bar',
		  foreColor:"#bac0c7",
          height: 260,
		  stacked: true,
		  toolbar: {
			show: false,
		  }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '30%',
          },
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: true,			
		},
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
		colors: ['#5156be', '#ffa800'],
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July'],
			
        },
        yaxis: {
          
        },
		 legend: {
      		show: true,
			position: 'top',
		 },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          },
			marker: {
			  show: false,
		  },
        }
        };

        var chart = new ApexCharts(document.querySelector("#patient_statistics"), options);
        chart.render();
	
	
		
		
	
		var options = {
          series: [
          {
            name: "Heart",
			data: [12, 22, 14, 18, 22 , 13, 17]
          },
          {
            name: "Fracture",            
            data: [28, 39, 23, 36, 45, 32, 43]
          },
          {
            name: "Cold",            
            data: [17, 12, 28, 12, 33, 26, 23]
          }
        ],
          chart: {
          height: 260,
          type: 'line',
		  foreColor:"#bac0c7",
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
        colors: ['#5156be', '#da123b', '#ffa800'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth'
        },
        grid: {
          borderColor: '#e7e7e7',
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        },
        legend: {
      		show: true,
			position: 'top',
        }
        };

        var chart = new ApexCharts(document.querySelector("#recovery_statistics"), options);
        chart.render();
	
	
	
		 var options = {
          series: [{
          name: 'Total Patient',
          type: 'column',
          data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
        }, {
          name: 'Discharge Patient',
          type: 'line',
          data: [223, 242, 235, 327, 143, 322, 117, 131, 422, 222, 112, 116]
        }],
          chart: {
          height: 350,
          type: 'line',
		  toolbar: {
			show: false,
		  }
        },
        stroke: {
          width: [0, 4],
		  curve: 'smooth'
        },
		colors: ['#E7E4FF', '#5156be'],
        dataLabels: {
          enabled: false,
        },
        labels: ['01 Jan 2021', '02 Jan 2021', '03 Jan 2021', '04 Jan 2021', '05 Jan 2021', '06 Jan 2021', '07 Jan 2021', '08 Jan 2021', '09 Jan 2021', '10 Jan 2021', '11 Jan 2021', '12 Jan 2021'],
        xaxis: {
          type: 'datetime'
        },
        legend: {
      		show: true,
			position: 'top',
        }
        };

        var chart = new ApexCharts(document.querySelector("#total_patient"), options);
        chart.render();
	
		$('.inner-user-div3').slimScroll({
			height: '310px'
		});
	
		$('.inner-user-div4').slimScroll({
			height: '127px'
	    });
	
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 0,
			responsiveClass: true,
			autoplay: true,
			dots: false,
			nav: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  600: {
				items: 1,
			  },
			  1000: {
				items: 1,
			  }
			}
		  });
	
}); // End of use strict
