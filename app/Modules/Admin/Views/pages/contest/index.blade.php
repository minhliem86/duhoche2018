@extends('Admin::layouts.main-layout')

@section('link')
    {!! Html::link(route('admin.contest.download'),'Download',['class'=>'btn btn-primary']) !!}
@stop

@section('title','CONTESTS')

@section('content')
    @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissable">
            <p>{{Session::get('error')}}</p>
        </div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissable">
            <p>{{Session::get('success')}}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>DOB</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Register Date</th>
                </tr>
                </thead>
                <tbody>
                    @if(!$data->isEmpty())
                        @foreach($data as $item_data)
                        <tr>
                            <td>{!! $item_data->id !!}</td>
                            <td>{!! $item_data->fullname !!}</td>
                            <td>{!! date_format(date_create($item_data->dob),"d/m/Y") !!}</td>
                            <td>{!! $item_data->phone !!}</td>
                            <td>{!! $item_data->name_city !!}</td>
                            <td>{!! $item_data->quocgia !!}</td>
                            <td>{!! date_format(date_create($item_data->create_date), 'd/m/Y') !!}</td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No Data</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    @if(!$data->isEmpty())
    <div class="row">
        <div class="col-sm-12">
            <div class="pagination-container text-right">
                {!! $data->render() !!}
            </div>
        </div>
    </div>
    @endif
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/bootflat-admin/js/jquery-1.10.1.min.js"></script>
    {{----}}

    <!-- ALERTIFY -->
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/dist/js/plugins/alertify/alertify.css">
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/dist/js/plugins/alertify/bootstrap.min.css">
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/dist/js/plugins/alertify/alertify.js"></script>
    <script>
        $(document).ready(function(){

            hideAlert('.alert');
            // REMOVE ALL
            /*SELECT ROW*/
            $('table tbody').on('click','tr',function(){
                $(this).toggleClass('selected');
            })
        })

        function confirm_remove(a){
            alertify.confirm('You can not undo this action. Are you sure ?', function(e){
                if(e){
                    a.parentElement.submit();
                }
            });
        }

        function hideAlert(a){
            setTimeout(function(){
                $(a).fadeOut();
            },2000)
        }
    </script>
@stop
