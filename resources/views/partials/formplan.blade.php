<div class="form-group">
    {!! Form::input('hidden','topic',null,['class' => 'form-control','id' => 'topic']) !!}
</div>
<div class="form-group">
    {!! Form::input('hidden','app_url',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::input('hidden','app_title',null,['class' => 'form-control','id' => 'app_title']) !!}
    {!! Form::input('hidden','app_description',null,['class' => 'form-control','id' => 'app_description']) !!}
    {!! Form::input('hidden','app_image',null,['class' => 'form-control','id' => 'app_image']) !!}
</div>
<div class="form-group">
    {!! Form::input('hidden','ebook_url',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::input('hidden','ebook_title',null,['class' => 'form-control','id' => 'ebook_title']) !!}
    {!! Form::input('hidden','ebook_description',null,['class' => 'form-control','id' => 'ebook_description']) !!}
    {!! Form::input('hidden','ebook_image',null,['class' => 'form-control','id' => 'ebook_image']) !!}
</div>
<div class="form-group">
    {!! Form::input('hidden','video_url',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::input('hidden','video_title',null,['class' => 'form-control','id' => 'video_title']) !!}
    {!! Form::input('hidden','video_description',null,['class' => 'form-control','id' => 'video_description']) !!}
    {!! Form::input('hidden','video_image',null,['class' => 'form-control','id' => 'video_image']) !!}
</div>
<div class="form-group">
    {!! Form::input('hidden','how_to_use',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitBtnTxt,['class' => 'btn btn-success form-control']) !!}
</div>