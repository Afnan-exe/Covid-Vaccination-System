//[Dashboard Javascript]

//Project:  Rhythm Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
  
  
    var options = {
          series: [
          {
            name: "This week",
            data: [28, 29, 33, 36, 32, 32, 33, 25, 30, 40, 32, 36]
          },
          {
            name: "This month",
            data: [22, 20, 25, 40, 36, 28, 40, 32, 30, 25, 40, 25]
          }
        ],
          chart: {
          height: 250,
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
        colors: ['#77B6EA', '#02A9D6'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth'
        },
        title: {
          text: '.',
          offsetY: -25,
        },
        grid: {
          borderColor: '#e7e7e7',
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov' , 'Dec'],
          title: {
            text: '',
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
          },       
        },
        legend: {
          position: 'top',
          horizontalAlign: 'center',
          floating: false,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart-1"), options);
        chart.render();

  
  $('.chat-box-one2').slimScroll({
      height: '215px'
      });

  $(document).slimScroll(function(){

    if ($(window).width() < 2500) {   
      location.slimScroll();
      $('.chat-box-one2').slimScroll({
      height: '500px'
      });  // refresh page 
    }
    else {  
      // width more than 768px for PC  
    }

});


  var options = {
          series: [
          {
            name: "This week",
      data: [28, 15, 30, 18, 35 , 13, 43]
          },
          {
            name: "This month",            
            data: [10, 39, 20, 36, 15, 32, 17]
          }
        ],
          chart: {
          height: 200,
          type: 'line',
          toolbar: {
            show: false
          }
        },
        colors: ['#ee3158', '#1dbfc1'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth'
        },
        grid: {
          show: true,  
        },
        xaxis: {
          categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Set', 'Sun'],
        },
        legend: {
          show: false,
        },
        xaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
          }        
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
          }        
        },
        };

        var chart = new ApexCharts(document.querySelector("#hospital-revenue"), options);
        chart.render();
  
  
}); // End of use strict
