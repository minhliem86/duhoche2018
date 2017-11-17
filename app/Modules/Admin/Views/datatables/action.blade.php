<a href="{!! $route_edit !!}" class="btn btn-info btn-xs inline-block-span">Edit</a>
{!! Form::open(['url'=>$route_destroy, 'method'=>'DELETE', 'class'=>'inline-block-span']) !!}
    <button class="btn  btn-danger btn-xs remove-btn" type="button" attrid="{!! $route_destroy !!}" onclick="confirm_remove(this);" > Remove </button>
{!! Form::close() !!}