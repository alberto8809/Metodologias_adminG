function graf(array,tam) {
    
var id=document.getElementById('content2');
Highcharts.chart(id, {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Inventario de Juegos'
    },
    
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Juegos'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f} disponibles'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y} personas</b><br/>'
    },

    series: [{
        name: 'Taller',
        colorByPoint: true,
        data: [{
            name: content[0],
            y: tam[0],
            drilldown: ''
        }, {
            name: content[1],
            y: tam[1],
            drilldown: ''
        }, {
            name: content[2],
            y: tam[2],
            drilldown: ''
        }, {
            name: content[3],
            y: tam[3],
            drilldown: ''
        }, {
            name: content[4],
            y: tam[4],
            drilldown: ''
        }, {
            name: content[5],
            y: tam[5],
            drilldown: null
        }]
    }]
});



}



function graf2(content,tam) {
    
var id=document.getElementById('content3');
// Create the chart
Highcharts.chart(id, {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Alumnos por Taller'
    },
    
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Alumnos'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f} personas'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y} personas</b><br/>'
    },

    series: [{
        name: 'Taller',
        colorByPoint: true,
        data: [{
            name: content[0],
            y: tam[0],
            drilldown: ''
        }, {
            name: content[1],
            y: tam[1],
            drilldown: ''
        }, {
            name: content[2],
            y: tam[2],
            drilldown: ''
        }, {
            name: content[3],
            y: tam[3],
            drilldown: ''
        }, {
            name: content[4],
            y: tam[4],
            drilldown: ''
        }, {
            name: content[5],
            y: tam[5],
            drilldown: null
        }]
    }]
});


}