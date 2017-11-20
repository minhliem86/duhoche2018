@extends('Admin::layouts.main-layout')

@section('link')
    <button class="btn btn-primary" onclick="submitForm();">Save</button>
@stop

@section('title','Course')

@section('content')
    <div class="row">
      <div class="col-sm-12">
        <form method="POST" action="{{route('admin.course.store')}}" id="form" role="form" class="form-horizontal">
          {!! Form::token()!!}
            <fieldset>
                <legend class="legend">Page Config</legend>
                <div class="form-group">
                    <label class="col-md-2 control-label">Country</label>
                    <div class="col-md-10">
                        {!! Form::select('country_id', ['' => 'Select a Country'] + $country,old('country_id'),['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Title</label>
                    <div class="col-md-10">
                        <input type="text" required="" placeholder="Title" id="title" class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="code">Code</label>
                    <div class="col-md-10">
                        <input type="text" required="" placeholder="Code" id="code" class="form-control" name="code">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="age">Age</label>
                    <div class="col-md-10">
                        <input type="text" required="" placeholder="Age" id="age" class="form-control" name="age">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="time">Time</label>
                    <div class="col-md-10">
                        <input type="text" required="" placeholder="Time" id="time" class="form-control" name="time">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="description">Short Description</label>
                    <div class="col-md-10">
                        <textarea  class="form-control " placeholder="Description" rows="3" id="description" name="description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="content">Content</label>
                    <div class="col-md-10">
                        <textarea required="" class="form-control my-editor" placeholder="Content" rows="15" id="content" name="content"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="schedule">Schedule</label>
                    <div class="col-md-10">
                        <textarea required="" class="form-control my-editor" placeholder="Content" rows="15" id="schedule" name="schedule"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Image:</label>
                    <div class="col-md-10">
                        <div class="input-group">
                 <span class="input-group-btn">
                   <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                     <i class="fa fa-picture-o"></i> Image
                   </a>
                 </span>
                            <input id="thumbnail" class="form-control" type="hidden" name="img_url">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend class="legend">FB-ADS Config</legend>
                <div class="form-group">
                    <label class="col-md-2 control-label">META Configuration</label>
                    <div class="col-md-10">
                        <div class="form-group-addon">
                            <input type="text" name="m_keywords" class="form-control" placeholder="Meta Keywords">
                        </div>
                        <div class="form-group-addon">
                            <textarea name="m_description" class="form-control" rows="3" placeholder="Meta Description"></textarea>
                        </div>
                        <div class="form-group-addon">
                            <div class="input-group">
                             <span class="input-group-btn">
                               <a id="lfm-meta" data-input="thumbnail2" data-preview="meta-img-preview" class="btn btn-primary">
                                 <i class="fa fa-picture-o"></i> Meta Image
                               </a>
                             </span>
                                <input id="thumbnail2" class="form-control" type="hidden" name="m_img">
                            </div>
                            <img id="meta-img-preview" style="margin-top:15px;max-height:100px;">
                        </div>
                    </div>
                </div>
            </fieldset>

        </form>
      </div>
    </div>
@endsection

@section('script')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{asset('public')}}/vendor/laravel-filemanager/js/lfm.js"></script>
    <script src="{{asset('public/assets/admin/dist/js/script.js')}}"></script>
    <script>
        const url = "{{url('/')}}"
        init_tinymce(url);
        // BUTTON ALONE
        init_btnImage(url,'#lfm');
        // SUBMIT FORM
        function submitForm(){
         $('form').submit();
        }
        /*IMAGE META*/
        init_btnImage(url,'#lfm-meta');
    </script>
@stop
