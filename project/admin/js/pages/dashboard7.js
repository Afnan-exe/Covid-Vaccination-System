//[Dashboard Javascript]

//Project:  Rhythm Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
  
  
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
        colors: ['#5156be', '#da123b'],
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
          categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        },
        legend: {
          show: false,
      position: 'top',
        }
        };

        var chart = new ApexCharts(document.querySelector("#statistics"), options);
        chart.render();

  
  $('.chat-box-one2').slimScroll({
      height: '215px'
      });
  
   


      
  
}); // End of use strict

$('a').hover(
  function(){ 
    $("a.active").addClass('inactive').removeClass('active');
  },
  function(){ 
    $("a.inactive").addClass('active').removeClass('inactive'); 
  }
);