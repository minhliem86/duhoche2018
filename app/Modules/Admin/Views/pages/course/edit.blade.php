@extends('Admin::layouts.main-layout')

@section('link')
    {!!  Html::link(URL::previous(), 'Cancel', ['class'=>'btn btn-danger'])!!}
    <button class="btn btn-primary" onclick="submitForm();">Save Changes</button>
@stop

@section('title','Course Edit')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            {!!Form::model($inst, ['route'=>['admin.course.update',$inst->id], 'method'=>'put' ])  !!}
            <fieldset>
                <legend class="legend">Page Config</legend>
                <div class="form-group">
                    <label class="col-md-2 control-label">Country</label>
                    <div class="col-md-10">
                        {!! Form::select('country_id', ['' => 'Select a Country'] + $country,old($inst->country_id),['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Title</label>
                    <div class="col-md-10">
                        {!! Form::text('title',old('title'), ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="code">Code</label>
                    <div class="col-md-10">
                        {!! Form::text('code',old('code'), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="age">Age</label>
                    <div class="col-md-10">
                        {!! Form::text('age',old('age'), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="time">Time</label>
                    <div class="col-md-10">
                        {!! Form::text('time',old('time'), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="description">Short Description</label>
                    <div class="col-md-10">
                        <textarea  class="form-control " placeholder="Description" rows="3" id="description" name="description">{!! old('description', $inst->description) !!}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="description">Content</label>
                    <div class="col-md-10">
                        <textarea required="" class="form-control my-editor" placeholder="Content" rows="15"
                                  id="content"
                                  name="content">{!! old('content', $inst->content) !!}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="content_column2">Content Column 2</label>
                    <div class="col-md-10">
                        <textarea required="" class="form-control my-editor" placeholder="Content Column 2" rows="15"
                                  id="content_column2"
                                  name="content_column2">{!! old('content_column2', $inst->content_column2) !!}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="schedule">Schedule</label>
                    <div class="col-md-10">
                        <textarea required="" class="form-control my-editor" placeholder="Content" rows="15" id="schedule" name="schedule">{!! old('schedule', $inst->schedule) !!}</textarea>
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
                             <i class="fa fa-picture-o"></i> Avatar
                           </a>
                         </span>
                            {!!Form::hidden('img_url',old('img_url'), ['class'=>'form-control', 'id'=>'thumbnail' ])!!}
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;"
                             src="{!! !empty($inst->img_url) ? asset($inst->img_url) : ''!!}">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend class="legend">FB-ADS Config</legend>
                <div class="form-group">
                    <label class="col-md-2 control-label">META Configuration</label>
                    <div class="col-md-10">
                        <div class="form-group-addon">
                            {!! Form::text('m_keywords',old('m_keywords'), ['class' => 'form-control', 'Placeholder' => 'Meta Keywords']) !!}
                        </div>
                        <div class="form-group-addon">
                            <textarea class="form-control" placeholder="Meta Description" rows="3"
                                      name="m_description">{!!old('m_description', $inst->m_description)!!}</textarea>
                        </div>
                        <div class="form-group-addon">
                            <div class="input-group">
                             <span class="input-group-btn">
                               <a id="lfm-meta" data-input="thumbnail2" data-preview="meta-img-preview"
                                  class="btn btn-primary">
                                 <i class="fa fa-picture-o"></i> Meta Image
                               </a>
                             </span>
                                {!!Form::hidden('m_img',old('m_img'), ['class'=>'form-control', 'id'=>'thumbnail2' ])!!}
                            </div>
                            <img id="meta-img-preview" style="margin-top:15px;max-height:100px;"
                                 src="{!!!empty($inst->m_img) ? asset($inst->m_img) : ''!!}">
                        </div>
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
        /*IMAGE META*/
        init_btnImage(url, '#lfm-meta');

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
