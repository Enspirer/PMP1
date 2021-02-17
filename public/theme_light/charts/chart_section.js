var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};
var option;
var timeData = [
    "12.00 AM",
    "01.00 AM",
    "02.00 AM",
    "03.00 AM",
    "04.00 AM",
    "05.00 AM",
    "06.00 AM",
    "07.00 AM",
    "08.00 AM",
    "09.00 AM",
    "10.00 AM",
    "11.00 AM",
    "12.00 AM",
    "01.00 PM",
    "02.00 PM",
    "03.00 PM",
    "04.00 PM",
    "05.00 PM",
    "06.00 PM",
    "07.00 PM",
    "08.00 PM",
    "09.00 PM",
    "10.00 PM",
    "11.00 PM",
    "12.00 PM",
];
var bidsData = [
    10,
    30,
    29,
    49,
    50,
    28,
    20,
    50,
    29,
    40,
    29,
    30,
    10,
    30,
    23,
    49,
    65,
    13,
];

//setInterval(function() {
//
//},  60 * 1000); // 60 * 1000 milsec

timeData = timeData.map(function (str) {
    return str.replace("2009/", "");
});

option = {
    title: {
        text: "Live Bids",
        left: "center",
        textStyle: {
            color: "#FFFF",
            fontSize: 18,
        },
    },
    tooltip: {
        trigger: "axis",
        axisPointer: {
            animation: false,
        },
    },
    legend: {
        data: ["流量", "降雨量"],
        left: 10,
        textStyle: {
            color: "red",
            fontSize: 18,
        },
    },
    toolbox: {
        feature: {
            dataZoom: {
                yAxisIndex: "none",
            },
            restore: {},
            saveAsImage: {},
        },
    },
    axisPointer: {
        link: { xAxisIndex: "all" },
    },
    dataZoom: [
        {
            show: true,
            realtime: true,
            start: 30,
            end: 70,
            xAxisIndex: [0, 1],
        },
        {
            type: "inside",
            realtime: true,
            start: 30,
            end: 70,
            xAxisIndex: [0, 1],
        },
    ],
    grid: [
        {
            left: 50,
            right: 50,
            height: "35%",
        },
        {
            left: 50,
            right: 50,
            top: "55%",
            height: "35%",
        },
    ],
    xAxis: [
        {
            type: "category",
            boundaryGap: false,
            axisLine: { onZero: false },
            data: timeData,
        },
        {
            gridIndex: 1,
            type: "category",
            boundaryGap: false,
            axisLine: { onZero: true },
            data: timeData,
            position: "top",
        },
    ],
    textStyle: {
        color: "#FFFF",
        fontSize: 18,
    },
    yAxis: [
        {
            name: "Bids Price",
            type: "value",
            max: 1300,
            splitLine: {
                show: false,
            },
        },
        {
            gridIndex: 1,
            name: "Time",
            type: "value",
            inverse: true,
            splitLine: {
                show: false,
            },
        },
    ],
    series: [
        {
            name: "Bids Price",
            type: "line",
            symbolSize: 8,
            hoverAnimation: false,
            fill: true,
            areaStyle: {
                color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                    {
                        offset: 1,
                        color: "#61BCFF",
                    },
                    {
                        offset: 0.5,
                        color: "#0093FF",
                    },
                ]),
            },
            data: [
                0,
                100,
                379,
                200,
                100,
                400,
                800,
                100,
                300,
                778,
                290,
                488,
                300,
                0,
                100,
                379,
                778,
                290,
                488,
                300,
                200,
                100,
                400,
                800,
                100,
                300,
                778,
                290,
                488,
                300,
            ],
        },
        {
            name: "Bids Count",
            type: "line",
            xAxisIndex: 1,
            yAxisIndex: 1,
            symbolSize: 8,
            hoverAnimation: false,
            textStyle: {
                color: "red",
                fontSize: 18,
            },
            fill: true,
            areaStyle: {
                color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                    {
                        offset: 1,
                        color: "#F44738",
                        borderColor: "#F44738",
                        lineStyle: {
                            color: "#F44738",
                        },
                    },
                    {
                        offset: 0.1,
                        color: "#FF9A89",
                    },
                ]),
            },
            data: bidsData,
        },
    ],
};

time = setInterval(function () {}, 60 * 1000);

if (option && typeof option === "object") {
    myChart.setOption(option);
}