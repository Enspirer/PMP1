var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};
var option;

var bidsData = [12343,99233,29190,48588,20000,40000,50000,30000,20000];
var time_range = ['12.00 PM','01.00 AM','02.00 AM','03.00 AM','04.00 AM','05.00 AM'];
var bidcount = [13,22,75,33,44,20,90];
var zoom_start;
var zoom_end;
option = {
    grid: {
        top:    100,
        bottom: 60,
        left:   '10%',
        right:  '10%',
    },
    tooltip: {
        trigger: 'axis',
        axisPointer: {
            type: 'cross',
            crossStyle: {
                color: '#999'
            }
        }
    },
    toolbox: {
        feature: {
            magicType: {show: true, type: ['line', 'bar']},
            restore: {show: false},
            saveAsImage: {show: false},
            dataZoom: {
                yAxisIndex: false
            },
        }
    },
    dataZoom: [{
        type: 'inside'
    }, {
        type: 'slider',
        realtime : true,
        minValueSpan: 3600 * 24 * 1000 * 7,
        start : 1,
        end : 2,
        rangeMode: 'value'
    }],
    legend: {
        data: ['Price', 'Bid Count', '平均温度'],
        marginBottom:{

        }
    },
    xAxis: [
        {
            type: 'category',
            // data: ['12:00 AM', '1:00 AM', '2:00 AM', '3:00 AM', '4:00 AM', '5:00 AM', '6:00 AM', '7:00 AM', '8:00 AM', '9:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '1:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '5:00 PM', '6:00 PM', '7:00 PM', '9:00 PM', '10:00 PM','11:00 PM','12:00 PM'],
            data:time_range,
            axisPointer: {
                type: 'shadow'
            },
            boundaryGap: true,
            axisTick: {
            show: true,
        },
        }
    ],
    yAxis: [
        {
            type: 'value',
            name: 'Bid Range',
            min: 0,
            max: 100000,
            interval: 20000,
            splitLine: {
                show: false
            },
            axisLabel: {
                formatter: '{value}'
            }
        },
        {
            type: 'value',
            name: 'Bid Count',
            min: 0,
            max: 100,
            interval: 10,
            splitLine: {
                show: false
            },
            axisLabel: {
                formatter: '{value}'
            }
        }
    ],
    series: [
        {
            name: 'Price',
            type: 'line',
            fill: 'true',
            areaStyle: {
                color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                    offset: 0,
                    color: '#2F8FEB'
                }, {
                    offset: 1,
                    color: '#fffF'
                }])
            },
            data: bidsData
        },
        {
            name: 'Bid Count',
            type: 'line',
            yAxisIndex: 1,
            data: bidcount
        }
    ]
};
if (option && typeof option === 'object') {
    myChart.setOption(option);
}

function removeOLDTime() {
    time_range.shift();
    bidsData.shift();
}

function erverysectound() {
    var today = new Date();

    zoom_start = formatAMPMMiniteR(today);
    zoom_end = formatAMPM(today);

    bidsData.push(Math.floor(Math.random() * 100000));
    time_range.push(formatAMPM(today));
    bidcount.push(Math.floor(Math.random() * 100));
    myChart.setOption(option);
}

function formatAMPM(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var secounds = date.getSeconds();
    var ampm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ':' + secounds + ' ' + ampm;
    return strTime;
}

function formatAMPMMiniteR(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var rminutes = minutes - 1;
    var ampm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    rminutes = rminutes < 10 ? '0'+rminutes : rminutes;
    var strTime = hours + ':' + rminutes + ' ' + ampm;
    return strTime;
}

setInterval(erverysectound, 1000 * 60);
setInterval(removeOLDTime, 2000 * 60);

