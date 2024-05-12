//[Dashboard Javascript]

//Project:	Doclinic - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


 // donut chart
        
    Morris.Donut({
        element: 'donut-chart',
        data: [{
            label: "Oxygen",
            value: 45,

        }, {
            label: "Carbon",
            value: 20,

        },{
            label: "Hydrogen",
            value: 16
        },{
            label: "Calcium",
            value: 7
        },{
            label: "Nitrogen",
            value: 10
        }, {
            label: "Other",
            value: 5
        }],
        resize: true,
        colors:['#A3B385', '#FFBD8F', '#B385A6', '#D48FFF', '#DBC761', '#8ABBB2']
    });



$(function () {

  'use strict';
  
  var options = {
          series: [{
          name: 'Calories',
          data: [8, 9, 2, 4, 7, 1.5, 6, 5, 3, 2,5,6]
        }],
          chart: {
      foreColor:"#bac0c7",
          type: 'bar',
          height: 320,
          stacked: false,
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: 0,
              offsetY: 0,
            }
          }
        }],   
    grid: {
      show: true,
      borderColor: '#f7f7f7',      
    },
    colors:['#A3B385'],
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '20%',
        endingShape: 'rounded',
        colors: {
        backgroundBarColors: ['#FFBD8F'],
        backgroundBarOpacity: 0,
      },
          },
        },
        dataLabels: {
          enabled: false
        },
 
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct','Nov','Dec'],
        },
        legend: {
          show: false,
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#charts_widget_1_chart"), options);
        chart.render();
  
  
  
    
        // var options = {
        //   series: [85],
        //   chart: {
        //   height: 320,
        //   type: 'radialBar'

        // },
        // plotOptions: {
        //   responsive: true,
        //   radialBar: {
        //     startAngle: -135,
        //     endAngle: 135,
        //     dataLabels: {
        //       name: {
        //         fontSize: '16px',
        //         color: '#b5b5c3',
        //       },
        //       value: {
        //         offsetY: 0,
        //         fontSize: '22px',
        //         color: '#000',
        //         formatter: function (val) {
        //           return val + "%";
        //         }
        //       }
        //     }
        //   }
        // },
        // colors: ['#A3B385'],
        // fill: {
        //   type: 'gradient',
        //   gradient: {
        //       shade: 'dark',
        //       shadeIntensity: 0.15,
        //       inverseColors: false,
        //       opacityFrom: 1,
        //       opacityTo: 1,
        //       stops: [0, 50, 65, 91]
        //   },
        // },
        // stroke: {
        //   dashArray: 4
        // },
        // labels: [''],
        
        // };


        // var chart = new ApexCharts(document.querySelector("#chart-1"), options);
        // chart.render();

          var options = {
          series: [85],
          chart: {
          height: 375,
          type: 'radialBar',
          offsetY: -20,
          sparkline: {
            enabled: true
          }
        },
        plotOptions: {
          radialBar: {
            startAngle: -135,
            endAngle: 135,
            track: {
              background: "#F6F8FD",
              strokeWidth: '100%',
              margin: 5, // margin is in pixels
              dropShadow: {
                enabled: false,
                top: 0,
                left: 0,
                color: '#999',
                opacity: 1,
                blur: 2
              }
            },
            dataLabels: {
              name: {
                show: false
              },
              value: {
                offsetY: 10,
                fontSize: '22px'
              }
            }
          }
        },
        grid: {
          padding: {
            top: 0
          }
        },
        colors: ['#A3B385'],
        fill: {
          type: 'gradient',
          gradient: {
            shade: 'light',
            shadeIntensity: 0.4,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 50, 53, 91]
          },
        },
        stroke: {
          dashArray: 4
        },
        labels: ['Average Results'],
        };

        var chart = new ApexCharts(document.querySelector("#chart-1"), options);
        chart.render();
      
  
}); // End of use strict