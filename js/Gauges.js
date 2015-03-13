var langWindDir = new Array("N", "NNE", "NE", "ENE","E", "ESE", "SE", "SSE","S", "SSW", "SW", "WSW","W", "WNW", "NW", "NNW");
function windDirLang ($winddir)
{
  return langWindDir[Math.floor(((parseInt($winddir,10) + 11.25) / 22.5))];
}

function InitWindDirGauge(id)
{

  $(id).highcharts({
    chart: {
      type: 'gauge',
      plotBackgroundColor: null,
      plotBackgroundImage: null,
      plotBorderWidth: 0,
      plotShadow: false
    },
    title: null,
    credits: {
      enabled: false
    },
    exporting: { enabled: false },
    pane: {
      /* startAngle: -180, */
      /* endAngle: 180, */
      size: "90%",
      background: [{
        backgroundColor: {
          linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
          stops: [
          [0, '#FFF'],
          [1, '#333']
          ]
        },
        borderWidth: 0,
        outerRadius: '109%'
      }, {
        backgroundColor: {
          linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
          stops: [
          [0, '#333'],
          [1, '#FFF']
          ]
        },
        borderWidth: 1,
        outerRadius: '107%'
      }, {
        // default background
      }, {
        backgroundColor: '#DDD',
        borderWidth: 0,
        outerRadius: '105%',
        innerRadius: '103%'
      }]
    },
    // the value axis
    yAxis: {
      min: 0,
      max: 360,

      /* minorTickInterval: 'auto',
      minorTickWidth: 1,
      minorTickLength: 10,
      minorTickPosition: 'inside',
      minorTickColor: '#666', */

      tickInterval: 22.5,
      tickWidth: 2,
      tickPosition: 'inside',
      tickLength: 3,
      tickColor: '#666',
      labels: {
        step: 2,
        rotation: 'auto',
        formatter:
        function() {
          return windDirLang(this.value);
        }
      }
    },
    series: [{
      name: 'Wind Direction',
      data: [{
      y:0,
      dial: {
        radius: "60%",
      },
      dataLabels: {
        formatter: function () {}
      }
      }],
      tooltip: {
        /* valueSuffix: ' km/h' */
        enabled: false
      },

    },{
      name: 'Gust Direction',
      data: [{
      y:180,
      dial:{
        radius: "80%",
        backgroundColor: "red",
        borderColor: "red",
      },
      dataLabels: {
        formatter: function () {}
      }
    }],
      tooltip: {
        /* valueSuffix: ' km/h' */
        enabled: false
      },

    }]
  });
  return $(id).highcharts();
}


function InitBarometerGauge(id)
{

  $(id).highcharts({

    chart: {
      type: 'gauge',
      plotBackgroundColor: null,
      plotBackgroundImage: null,
      plotBorderWidth: 0,
      plotShadow: true
    },

    title: {
      text: null
    },
    credits: {
      enabled: false
    },
    exporting: { enabled: false },
    pane: {
      startAngle: -140,
      endAngle: 140,
      size: "90%",
      background: [{
        backgroundColor: {
          linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
          stops: [
          [0, '#FFF'],
          [1, '#333']
          ]
        },
        borderWidth: 0,
        outerRadius: '109%'
      }, {
        backgroundColor: {
          linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
          stops: [
          [0, '#333'],
          [1, '#FFF']
          ]
        },
        borderWidth: 1,
        outerRadius: '107%'
      }, {
        // default background
      }, {
        backgroundColor: '#DDD',
        borderWidth: 0,
        outerRadius: '105%',
        innerRadius: '103%'
      }]
    },

    // the value axis
    yAxis: {
      min: 950,
      max: 1070,

      minorTickInterval: 'auto',
      minorTickWidth: 1,
      minorTickLength: 10,
      minorTickPosition: 'inside',
      minorTickColor: '#666',

      tickPixelInterval: 30,
      tickWidth: 2,
      tickPosition: 'inside',
      tickLength: 10,
      tickColor: '#666',
      labels: {
        step: 3,
        rotation: 'auto'
      },
      title: {
        text: 'mBar',
        y:10
      },

    },

    series: [{
      name: 'Pressure',
      data: [    {
        y:1015,
        dial:{
          radius: "60%"
        },
        dataLabels: {
          formatter: function () {}
        }
        }],
      tooltip: {
        valueSuffix: ' mBar'
      }
    },{
      name: 'Min Pressure',
      data: [    {
        y:960,
        dial:{
          radius: "80%",
          backgroundColor: "blue",
          borderColor: "blue",
        },
        dataLabels: {
          formatter: function () {}
        }
        }],
        tooltip: {
          valueSuffix: ' mBar'
        }
      },{
      name: 'Max Pressure',
      data: [    {
        y:1070,
        dial:{
          radius: "80%",
          backgroundColor: "red",
          borderColor: "red",
        },
        dataLabels: {
          formatter: function () {}
          }
        }],
        tooltip: {
          valueSuffix: ' mBar'
        }
      }]

  });
  return $(id).highcharts();

}

function InitWindSpeedGauge(id){

  $(id).highcharts({

    chart: {
      type: 'gauge',
      plotBackgroundColor: null,
      plotBackgroundImage: null,
      plotBorderWidth: 0,
      plotShadow: true
    },
    backgroundColor: 'transparent',
    title: {
      text: null
    },
    credits: {
      enabled: false
    },
    exporting: { enabled: false },
    pane: {
      startAngle: -150,
      endAngle: 150,
    //  center: ['50%', '100%'],
      size: "90%",
      background: [{
        backgroundColor: {
          linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
          stops: [
          [0, '#FFF'],
          [1, '#333']
          ]
        },
        borderWidth: 0,
        outerRadius: '109%'
      }, {
        backgroundColor: {
          linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
          stops: [
          [0, '#333'],
          [1, '#FFF']
          ]
        },
        borderWidth: 1,
        outerRadius: '107%'
      }, {
        // default background
      }, {
        backgroundColor: '#DDD',
        borderWidth: 0,
        outerRadius: '105%',
        innerRadius: '103%'
      }]
    },

    // the value axis
    yAxis: {
      min: 0,
      max: 150,

      minorTickInterval: 'auto',
      minorTickWidth: 1,
      minorTickLength: 10,
      minorTickPosition: 'inside',
      minorTickColor: '#666',

      tickPixelInterval: 30,
      tickWidth: 2,
      tickPosition: 'inside',
      tickLength: 10,
      tickColor: '#666',
      labels: {
        step: 2,
        rotation: 'auto'
      },
      title: {
        text: 'km/h'
      },

    },
    series: [{
      name: 'Wind Speed',
      data: [    {
        y:0,
        dial:{
          radius: "60%",
          baseWidth: 4
        },
        dataLabels: {
          formatter: function () {}
        }
        }],
      tooltip: {
        valueSuffix: ' km/h'
      }
    },{
      name: 'Gust Speed',
      data: [    {
        y:150,
        dial:{
          radius: "80%",
          backgroundColor: "red",
          borderColor: "red",
        },
        dataLabels: {
          formatter: function () {}
        }
        }],
        tooltip: {
          valueSuffix: ' km/h'
        }
      }]

      });
      return $(id).highcharts();

}

function InitHumidityGauge(id)
{

  $(id).highcharts({

    chart: {
      type: 'gauge',
      plotBackgroundColor: null,
      plotBackgroundImage: null,
      plotBorderWidth: 0,
      plotShadow: true
    },

    title: {
      text: null
    },
    credits: {
      enabled: false
    },
    exporting: { enabled: false },
    pane: {
      startAngle: -140,
      endAngle: 140,
      size: "90%",
      background: [{
        backgroundColor: {
          linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
          stops: [
          [0, '#FFF'],
          [1, '#333']
          ]
        },
        borderWidth: 0,
        outerRadius: '109%'
      }, {
        backgroundColor: {
          linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
          stops: [
          [0, '#333'],
          [1, '#FFF']
          ]
        },
        borderWidth: 1,
        outerRadius: '107%'
      }, {
        // default background
      }, {
        backgroundColor: '#DDD',
        borderWidth: 0,
        outerRadius: '105%',
        innerRadius: '103%'
      }]
    },

    // the value axis
    yAxis: {
      min: 0,
      max: 100,

      minorTickInterval: 'auto',
      minorTickWidth: 1,
      minorTickLength: 10,
      minorTickPosition: 'inside',
      minorTickColor: '#666',

      tickPixelInterval: 30,
      tickWidth: 2,
      tickPosition: 'inside',
      tickLength: 10,
      tickColor: '#666',
      labels: {
        step: 2,
        rotation: 'auto'
      },
      title: {
        text: '%'
      },

    },

    series: [{
      name: 'Humidity',
      data: [    {
        y:50,
        dial:{
          radius: "60%"
        }
      }],
      tooltip: {
        valueSuffix: ' %'
      }
    },{
      name: 'Min Humidity',
      data: [    {
        y:0,
        dial:{
          radius: "80%",
          backgroundColor: "blue",
          borderColor: "blue",
        },
        dataLabels: {
          formatter: function () {}
        }
        }],
        tooltip: {
          valueSuffix: ' %'
        }
      },{
        name: 'Max Humidity',
        data: [    {
          y:100,
          dial:{
            radius: "80%",
            backgroundColor: "red",
            borderColor: "red",
          },
          dataLabels: {
            formatter: function () {}
          }
          }],
          tooltip: {
            valueSuffix: ' %'
          }
        }]

      });
      return $(id).highcharts();

    }
