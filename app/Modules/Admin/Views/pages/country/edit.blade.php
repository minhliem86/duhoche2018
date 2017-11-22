@extends('Admin::layouts.main-layout')

@section('link')
    {!!  Html::link(URL::previous(), 'Cancel', ['class'=>'btn btn-danger'])!!}
    <button class="btn btn-primary" onclick="submitForm();">Save Changes</button>
@stop

@section('title','Country')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            {!!Form::model($inst, ['route'=>['admin.country.update',$inst->id], 'method'=>'put' ])  !!}
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
                        <textarea class="form-control my-editor" placeholder="Description" rows="15"
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
                    <label class="col-md-2 control-label">Video</label>
                    <div class="col-md-10">
                        {!! Form::text('video_url',old('video_url'), ['class' => 'form-control', 'required']) !!}
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
                    <label class="col-md-2 control-label">Image 540x355:</label>
                    <div class="col-md-10">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm-540x355" data-input="thumbnail-540x355" data-preview="540x355-preview" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            {!!Form::hidden('img_540x355',!empty($inst->media->where('type','540x355')->first()) ? $inst->media->where('type','540x355')->first()->img_url : '', ['class'=>'form-control', 'id'=>'thumbnail-540x355' ])!!}
                        </div>
                        <img id="540x355-preview" style="margin-top:15px;max-height:100px;"
                             src="{!! !empty($inst->media->where('type','540x355')->first()) ? asset($inst->media->where('type','540x355')->first()->img_url) : '' !!}" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Banner Image:</label>
                    <div class="col-md-10">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm-banner01" data-input="thumbnail-banner" data-preview="banner01-preview" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            {!!Form::hidden('img_banner01',!empty($inst->media->where('type','banner')->first()) ? $inst->media->where('type','banner')->first()->img_url : '', ['class'=>'form-control', 'id'=>'thumbnail-banner' ])!!}
                        </div>
                        <img id="banner01-preview" style="margin-top:15px;max-height:100px;"
                             src="{!! !empty($inst->media->where('type','banner')->first()) ? asset($inst->media->where('type','banner')->first()->img_url) : '' !!}" >
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
        /*IMAGE META*/
        init_btnImage(url, '#lfm-banner01');
        /*IMAGE 540x355*/
        init_btnImage(url,'#lfm-540x355');

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
