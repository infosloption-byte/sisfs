@extends('master.master')

@section('css')
<link rel="stylesheet" href="{{('assets/admin_panel/dist/morrisjs/morris.min.css')}}" />
<style type="text/css">
    
    .excercise{
        background: #FCFDFA !important;
    }
    .hydrated{
        background: #F6F2FF !important;
    }
    .breakfast{
        background: #47DD9C !important;
    }

    input.largerCheckbox
    {
        width: 30px;
        height: 30px;
    }
 

</style>
@stop


@section('content')
<div ng-app="ngApp" ng-controller="DashboardController" ng-init="loadData()">

    <div class="block-header">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h2>
                    <a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth">
                    <i class="fa fa-arrow-left"></i></a> Dashboard
                </h2>
                
            </div>            
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb float-right">
                            <li style="display: inline;" class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                           
                            <li style="display: inline;" class="breadcrumb-item">Dashboard</li>
                        </ul>                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        @if(\Entrust::hasRole('Admin'))
        <div class="col-lg-3 col-md-6">
            <div class="card top_counter currency_state">
                <div class="body">
                    <div class="icon">
                        <i class="icon-fire"></i>
                    </div>
                    <div class="content">
                        <div class="text">Total Jobs</div>
                        <h5 class="number">@{{job_data.total_jobs}}</h5>
                    </div>
                </div>                        
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card top_counter currency_state">
                <div class="body">
                        <div class="icon">
                            <i class="icon-ghost" style="color: #f79319"></i>
                        </div>
                    <div class="content">
                        <div class="text">Pending Jobs</div>
                        <h5 class="number">@{{job_data.pending_jobs}}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card top_counter currency_state">
                <div class="body">
                        <div class="icon">
                            <i class="icon-pie-chart" style="color: #43b3e1"></i>
                        </div>
                    <div class="content">
                        <div class="text">In-Progress Jobs</div>
                        <h5 class="number">@{{job_data.inprogress_jobs}}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card top_counter currency_state">
                <div class="body">
                        <div class="icon">
                            <i class="icon-check" style="color: #6fb92c"></i>
                        </div>
                    <div class="content">
                        <div class="text">Completed Jobs</div>
                        <h5 class="number">@{{job_data.completed_jobs}}</h5>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="col-lg-3 col-md-6">
            <div class="card top_counter currency_state">
                <div class="body">
                    <div class="icon">
                        <i class="icon-calendar"></i>
                    </div>
                    <div class="content">
                        <div class="text">Total Tasks</div>
                        <h5 class="number">@{{task_data.total_tasks}}</h5>
                    </div>
                </div>                        
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card top_counter currency_state">
                <div class="body">
                    <div class="icon">
                        <i class="icon-list" style="color: #f79319"></i>
                    </div>
                    <div class="content">
                        <div class="text">Pending Tasks</div>
                        <h5 class="number">@{{task_data.pending_tasks}}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card top_counter currency_state">
                <div class="body">
                    <div class="icon">
                        <i class="icon-note" style="color: #43b3e1"></i>
                    </div>
                    <div class="content">
                        <div class="text">In-Progress Task</div>
                        <h5 class="number">@{{task_data.inprogress_tasks}}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card top_counter currency_state">
                <div class="body">
                    <div class="icon">
                        <i class="icon-lock" style="color: #6fb92c"></i>
                    </div>
                    <div class="content">
                        <div class="text">Completed Task</div>
                        <h5 class="number">@{{task_data.completed_tasks}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        @if(\Entrust::hasRole('Admin'))
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2>Job Summary</h2>
                </div>
                <div class="body">
                    <div id="job_m_bar_chart" class="graph m-t-20"></div>                            
                </div>
            </div>
        </div>
        @endif

        @if(\Entrust::hasRole('Admin'))
        <div class="col-lg-6 col-md-6 col-sm-12">
        @else
        <div class="col-lg-12 col-md-12 col-sm-12">
        @endif
            <div class="card">
                <div class="header">
                    <h2>Task Summary</h2>
                </div>
                <div class="body">
                    <div id="task_m_bar_chart" class="graph m-t-20"></div>                            
                </div>
            </div>
        </div>
    </div>

    @if(\Entrust::hasRole('Admin'))
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="header">
                    <h2>Cost Summary Data</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <span class="text-muted">Current Month</span>
                            <label class="text-warning">@{{current | number:2}}<small class="text-muted" style="font-size: 8px"> AUD</small></label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <span class="text-muted">Last 3 Month</span>
                            <label class="text-info">@{{last_3 | number:2}}<small class="text-muted" style="font-size: 8px"> AUD</small></label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <span class="text-muted">Last 6 Month</span>
                            <label class="text-success">@{{last_6 | number:2}}<small class="text-muted" style="font-size: 8px"> AUD</small></label>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <span class="text-muted">Last 12 Month</span>
                            <label class="text-danger">@{{last_12 | number:2}}<small class="text-muted" style="font-size: 8px"> AUD</small></label>
                        </div>
                    </div>
                    <canvas width="400" height="400" id="cost_chart" class="graph"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="header">
                    <h2>Cost Summary Data</h2>
                </div>
                <div class="body">
                    <div id="m_donut_chart"></div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@stop

@section('js')
<script src="{{asset('assets/admin_panel/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->
<script src="{{asset('assets/admin_panel/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.0/dist/chart.min.js"></script> <!-- Jquery Knob-->

<script type="text/javascript">

    $(document).ready(function()
    {
        
    });

    var app = angular.module("ngApp",['angularMoment','dualmultiselect','angularImgFallback','ui.bootstrap','ngSanitize','bw.paging']);


    app.config(['$tooltipProvider', function ($tooltipProvider) {
        $tooltipProvider.options({
            appendToBody: true, // 
            appendToBody: true, // 
            placement:'bottom' // Set Default Placement
        });
    }]);

    //controller
    app.controller("DashboardController", function($scope,$http)
    {
        $scope.job_data = [];
        $scope.job_chart_data = [];
        
        $scope.task_data = [];
        $scope.task_chart_data = [];

        $scope.cost_chart_data = [];
        $scope.cost_type_chart_data = [];

        $scope.current = 0;
        $scope.last_3 = 0;
        $scope.last_6 = 0;
        $scope.last_12 = 0;

        $scope.loadData = function()
        {
            $scope.loadJobData();
            $scope.loadTaskData();
            $scope.loadCostData();
            $scope.loadCostTypeData();
        }

        $scope.loadJobData = function()
        {
            $.ajax({
                url: "{{url('admin/jobSumeryJson')}}",
                type: 'GET',
                success: function (data) {
                    $scope.job_data = data.json;
                    $scope.job_chart_data = data.chart;
                    $scope.$apply();

                    Morris.Bar({
                        element: 'job_m_bar_chart',
                        data: $scope.job_chart_data,
                        xkey: 'a',
                        ykeys: ['b', 'c', 'd'],
                        labels: ['Total', 'Pending', 'Completed'],
                        barColors: ['#4978b1', '#7e9bc8', '#b6c3dc'],
                        hideHover: 'auto',
                        gridLineColor: '#eef0f2',
                        resize: true
                    });

                },
                error:function(data) {
                  $('.dialog-loader').hide();
                }
            });    
        }

        $scope.loadTaskData = function()
        {
            $.ajax({
                url: "{{url('admin/taskSumeryJson')}}",
                type: 'GET',
                success: function (data) {
                    $scope.task_data = data.json;
                    $scope.task_chart_data = data.chart;
                    $scope.$apply();

                    Morris.Bar({
                        element: 'task_m_bar_chart',
                        data: $scope.task_chart_data,
                        xkey: 'a',
                        ykeys: ['b', 'c', 'd'],
                        labels: ['Total', 'Pending', 'Completed'],
                        barColors: ['#43aaa5','#5d9895','#778685'],
                        hideHover: 'auto',
                        gridLineColor: '#eef0f2',
                        resize: true
                    });
                },
                error:function(data) {
                  $('.dialog-loader').hide();
                }
            });    
        }

        $scope.loadCostData = function()
        {
            $.ajax({
                url: "{{url('admin/costSumeryChartJson')}}",
                type: 'GET',
                success: function (data) {
                    $scope.cost_chart_data = data;
                    $scope.current = data.others.current_month;
                    $scope.last_3 = data.others.last_three_month;
                    $scope.last_6 = data.others.last_six_month;
                    $scope.last_12 = data.others.last_year;
                    $scope.$apply();

                    var ctx = document.getElementById('cost_chart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: $scope.cost_chart_data.labels,
                            
                            datasets: $scope.cost_chart_data.jsonData
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                },
                error:function(data) {
                  $('.dialog-loader').hide();
                }
            });

            // var dataset = [{
            //     type: 'bar',
            //     label: 'Month Cost',
            //     data: [10, 20, 30, 40],
            //     backgroundColor: 'rgb(255, 99, 132, 0.2)'
            // },{
            //     type: 'bar',
            //     label: 'Month Cost',
            //     data: [100, 60, 70, 20],
            //     backgroundColor: 'rgb(25, 80, 32, 0.2)'
            // }, {
            //     type: 'line',
            //     label: 'Month Task Count',
            //     data: [20, 15, 55, 18],
            //     fill: false,
            //     borderColor: 'rgb(54, 162, 235)'
            // }, {
            //     type: 'line',
            //     label: 'Month Task Count',
            //     data: [30, 40, 20, 38],
            //     fill: false,
            //     borderColor: 'rgb(90, 62, 35)'
            // }];  
        }

        $scope.loadCostTypeData = function()
        {
            $.ajax({
                url: "{{url('admin/costTypeSumeryChartJson')}}",
                type: 'GET',
                success: function (data)
                {
                    $scope.cost_type_chart_data = data;
                    $scope.$apply();

                    Morris.Donut({
                        element: 'm_donut_chart',
                        data: $scope.cost_type_chart_data.jsonData,

                        resize: true,
                        colors: $scope.cost_type_chart_data.colors
                    });
                },
                error:function(data) {
                  $('.dialog-loader').hide();
                }
            });

            // [{
            //     label: "Online Sales",
            //     value: 45,
            // }, {
            //     label: "Store Sales",
            //     value: 35
            // },{
            //     label: "Email Sales",
            //     value: 8
            // }, {
            //     label: "Agent Sales",
            //     value: 12
            // }]
        }

    });//end controller

</script>

@stop
