@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
   


@if(is_mobile(request()->header('user-agent')) != true)
        @include('projects::desktop.project_auction')
    @else
    @include('projects::mobile.project_auctions')
    @endif


@endsection

@push('after-scripts')
<script type="text/javascript">
    var dom = document.getElementById("containernew");
    var myChart = echarts.init(dom);
    var app = {};
    var option;
    option = {
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
                dataView: {show: true, readOnly: false},
                magicType: {show: true, type: ['line', 'bar']},
                restore: {show: true},
                saveAsImage: {show: true},
            }
        },
        legend: {
            data: ['Price', 'Bid Count', '平均温度']
        },
        xAxis: [
            {
                type: 'category',
                data: ['12:00 AM', '1:00 AM', '2:00 AM', '3:00 AM', '4:00 AM', '5:00 AM', '6:00 AM', '7:00 AM', '8:00 AM', '9:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '1:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '5:00 PM', '6:00 PM', '7:00 PM', '9:00 PM', '10:00 PM','11:00 PM','12:00 PM'],
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
                interval: 10000,
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
                max: 25,
                interval: 5,
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
                data: [10000, 12000,13000, 13050, 13560, 30000, 50000, 50000, 60000, 70000.6, 750000, 750000,80000,60000,70000,50000,40000,37000,70000,78000,78000,69999,40000, 3.3]
            },
            {
                name: 'Bid Count',
                type: 'line',
                yAxisIndex: 1,
                data: [2.0, 2.2, 3.3, 4.5, 6.3, 10.2, 20.3, 23.4, 23.0, 16.5, 12.0, 6.2,10,23,21,42,14,56,74,7,40,10,25,]
            }
        ]
    };
    if (option && typeof option === 'object') {
        myChart.setOption(option);
    }
</script>
@endpush





