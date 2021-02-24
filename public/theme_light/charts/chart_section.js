var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};
var option;

var bidsData = [1234,9933,2990,4888,20000,40000,50000,30000,20000,10000];
var time_range = [];
var bidcount = [];
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
        }
    },
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
            }
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

    bidsData.push(Math.floor(Math.random() * 100000));
    time_range.push(formatAMPM(today));
    bidcount.push(Math.floor(Math.random() * 100));
    myChart.setOption(option);
}

function formatAMPM(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}

setInterval(erverysectound, 1000);
setInterval(removeOLDTime, 2000);

