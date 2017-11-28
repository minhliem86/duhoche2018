@extends('Admin::layouts.main-layout')

@section('title','Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">PageViews</h3>
                </div>
                <div class="panel-body-dashboard">
                    <div class="wrap-icon text-center">
                        <i class="fa fa-list-alt"></i>
                        <h5><span class="badge badge-info badge-md">{!! $total_pageviews !!}</span> Pageviews</h5>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Users</h3>
                </div>
                <div class="panel-body-dashboard">
                    <div class="wrap-icon text-center">
                        <i class="fa  fa-users"></i>
                        <h5><span class="badge badge-info badge-md">{!! $total_users !!}</span> Users</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="dashboard-container">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Thống kê website</h3>
                    </div>
                    <div class="panel-body-dashboard">
                        <div class="wrap-selectdate">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <div class="input-group input-daterange">
                                                        <input type="text" class="form-control" value="" name="from" required>
                                                        <div class="input-group-addon">to</div>
                                                        <input type="text" class="form-control" value="" name="to" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button class="btn btn-primary btn-sm" id="btn-date" type="button">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="text-right">
                                            <button type="button" class="btn btn-primary btn-sm" id="btn-week">Week</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end wrap select Date -->
                        <div class="wrap-chart">
                            @include('Admin::ajax.ajaxChart')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!--  DATE PICKER -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--CHART-->
    <script src="{{asset('/public/assets/admin')}}/dist/js/Chart.js"></script>

    <script>
        $(document).ready(function(){
            // DATETIME
            $('.input-daterange input').each(function() {
                $(this).datepicker({
                    maxDate: '0',
                    dateFormat: 'dd-mm-yy'
                });
            });
            // SET DATE
            $('#btn-date').click(function(){
                var from = $('input[name="from"]').val();
                var to = $('input[name="to"]').val();
                $.ajax({
                    // url: "",
                    data:{from: from, to: to, _token:$('meta[name="csrf-token"]').attr('content') },
                    type: 'GET',
                    beforeSend: function(){
                        $('#btn-date, #btn-week').prop('disabled', true);
                    },
                    success:function(data){
                        $('.wrap-chart').html(data);
                    },
                    complete: function(){
                        $('#btn-date, #btn-week').prop('disabled', false);
                    },
                    error:function(jqXHR, textStatus, errorThrown){
                        if(textStatus){
                            alert('Select date to get Data');
                        }
                    }
                })
            });
            // SET WEEK
            $('#btn-week').click(function(){
                var week = 7;
                $.ajax({
                    data:{week: week, _token:$('meta[name="csrf-token"]').attr('content') },
                    type: 'GET',
                    beforeSend: function(){
                        $('#btn-date, #btn-week').prop('disabled', true);
                    },
                    success:function(data){
                        $('.wrap-chart').html(data);
                    },
                    complete: function(){
                        $('#btn-date, #btn-week').prop('disabled', false);
                        $('.input-daterange input').each(function() {
                            $(this).datepicker("setDate", null);
                        });
                    }
                })
            })

        });
    </script>
@stop