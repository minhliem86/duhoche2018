@extends('Admin::layouts.main-layout')

@section('link')
    <button class="btn btn-primary" onclick="submitForm();">Save</button>
@stop

@section('title','Promotion')

@section('content')
    <div class="row">
      <div class="col-sm-12">
        <form method="POST" action="{{route('admin.promotion.store')}}" id="form" role="form" class="form-horizontal">
          {!! Form::token()!!}
            <fieldset>
                <legend class="legend">Page Config</legend>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="title">Title</label>
                    <div class="col-md-10">
                        <input type="text" required="" placeholder="Title" id="title" class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="description">Description</label>
                    <div class="col-md-10">
                        <textarea required="" class="form-control my-editor" placeholder="Description" rows="15" id="description" name="description"></textarea>
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
                <div class="form-group">
                    <label class="col-md-2 control-label">Cirlce Image 257x257:</label>
                    <div class="col-md-10">
                        <div class="input-group">
                         <span class="input-group-btn">
                           <a id="lfm-cirlce" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary">
                             <i class="fa fa-picture-o"></i> Choose
                           </a>
                         </span>
                            <input id="thumbnail2" class="form-control" type="hidden" name="img_homepage">
                        </div>
                        <img id="holder2" style="margin-top:15px;max-height:100px;">
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
        // BUTTON ALONE
        init_btnImage(url,'#lfm-cirlce');
        // SUBMIT FORM
        function submitForm(){
         $('form').submit();
        }
    </script>
@stop
