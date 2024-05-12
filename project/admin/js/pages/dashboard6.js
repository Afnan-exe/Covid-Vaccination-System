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
          // {
          //   name: "This month",
          //   data: [22, 20, 25, 40, 36, 28, 40, 32, 30, 25, 40, 25]
          // }
        ],
          chart: {
          height: 290,
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
        colors: ['#3464FE'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth'
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
  
   var options = {
      chart: {
      height: 213,
      type: "radialBar"
      },

      series: [65],
      colors: ['#0052cc'],
      plotOptions: {
      radialBar: {
        hollow: {
        margin: 0,
        size: "30%"
        },
        track: {
        background: '#e4e6ef',

        },

        dataLabels: {
        showOn: "always",
        name: {
          offsetY: -10,
          show: false,
          color: "#2F61FB",
          fontSize: "13px"
        },
        value: {
          offsetY: 5,
          color: "#2F61FB",
          fontSize: "20px",
          show: true
        }
        }
      }
      },

      stroke: {
      lineCap: "",
      },
      labels: ["Progress"]
    };

    var chart = new ApexCharts(document.querySelector("#revenue5"), options);

    chart.render();


      
  
}); // End of use strict

$('a').hover(
  function(){ 
    $("a.active").addClass('inactive').removeClass('active');
  },
  function(){ 
    $("a.inactive").addClass('active').removeClass('inactive'); 
  }
);