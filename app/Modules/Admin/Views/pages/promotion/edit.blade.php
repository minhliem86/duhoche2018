@extends('Admin::layouts.main-layout')

@section('link')
    {!!  Html::link(URL::previous(), 'Cancel', ['class'=>'btn btn-danger'])!!}
    <button class="btn btn-primary" onclick="submitForm();">Save Changes</button>
@stop

@section('title','Promotion')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            {!!Form::model($inst, ['route'=>['admin.promotion.update',$inst->id], 'method'=>'put' ])  !!}
            <fieldset>
                <legend class="legend">Page Config</legend>
                <div class="form-group">
                    <label class="col-md-2 control-label">Title</label>
                    <div class="col-md-10">
                        {!! Form::text('title',old('title'), ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="description">Description</label>
                    <div class="col-md-10">
                        <textarea required="" class="form-control my-editor" placeholder="Description" rows="15"
                                  id="description"
                                  name="description">{!! old('description', $inst->description) !!}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="order">Order</label>
                    <div class="col-md-10">
                        {!!  Form::text('order',old('order'), ['class'=>'form-control', 'placeholder'=>'order'])!!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="description">Status</label>
                    <div class="col-md-10">
                        <label class="toggle">
                            <input type="checkbox" name="status" value="1" {!!$inst->status == 1 ? 'checked' : '' !!} >
                            <span class="handle"></span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Image:</label>
                    <div class="col-md-10">
                        <div class="input-group">
                         <span class="input-group-btn">
                           <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                             <i class="fa fa-picture-o"></i> Choose
                           </a>
                         </span>
                            {!!Form::hidden('img_url',old('img_url'), ['class'=>'form-control', 'id'=>'thumbnail' ])!!}
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;"
                             src="{!! !empty($inst->img_url) ? asset($inst->img_url) : ''!!}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Circle Image 257x257:</label>
                    <div class="col-md-10">
                        <div class="input-group">
                         <span class="input-group-btn">
                           <a id="lfm-cirlce" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary">
                             <i class="fa fa-picture-o"></i> Choose
                           </a>
                         </span>
                            {!!Form::hidden('img_homepage',old('img_homepage'), ['class'=>'form-control', 'id'=>'thumbnail2' ])!!}
                        </div>
                        <img id="holder2" style="margin-top:15px;max-height:100px;"
                             src="{!! $inst->img_homepage ? asset($inst->img_homepage) : ''!!}">
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('script')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{!!asset('public')!!}/vendor/laravel-filemanager/js/lfm.js"></script>
    <script src="{!!asset('public/assets/admin/dist/js/script.js')!!}"></script>
    <script>
        const url = "{!!url('/')!!}"
        init_tinymce(url);
        // BUTTON ALONE
        init_btnImage(url, '#lfm');
        // BUTTON ALONE
        init_btnImage(url,'#lfm-cirlce');

        // SUBMIT FORM
        function submitForm() {
            $('form').submit();
        }
        $(document).ready(function () {
            $('radio[name="status"]').change(function () {

            })
        })
    </script>
@stop
