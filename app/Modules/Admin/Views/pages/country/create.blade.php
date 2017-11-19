@extends('Admin::layouts.main-layout')

@section('link')
    <button class="btn btn-primary" onclick="submitForm();">Save</button>
@stop

@section('title','Country')

@section('content')
    <div class="row">
      <div class="col-sm-12">
        <form method="POST" action="{{route('admin.country.store')}}" id="form" role="form" class="form-horizontal">
          {!! Form::token()!!}
            <fieldset>
                <legend class="col-md-offset-2 legend">Page Config</legend>
                <div class="form-group">
                    <label class="col-md-2 control-label">Title</label>
                    <div class="col-md-10">
                        <input type="text" required placeholder="Title" id="title" class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="description">Description</label>
                    <div class="col-md-10">
                        <textarea class="form-control my-editor" placeholder="Description" rows="15" id="description" name="description"></textarea>
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
                            <input id="thumbnail" class="form-control" type="hidden" name="img_url">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend class="col-md-offset-2 legend">FB-ADS Config</legend>
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
                               <a id="lfm-meta" data-input="thumbnail" data-preview="meta-img-preview" class="btn btn-primary">
                                 <i class="fa fa-picture-o"></i> Meta Image
                               </a>
                             </span>
                                <input id="thumbnail" class="form-control" type="hidden" name="m_img">
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
