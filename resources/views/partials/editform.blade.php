<div class="form-group">
    <label for="level">Nivel: *{!! \App\Level::find($suggestion->level)->name !!}</label>
    <select name="level" id="level" class="form-control input-sm">
        <option value="">- Seleciona un nivel -</option>
        @foreach($levels as $level)
            <option value="{{ $level->id }}">{{ $level->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="grade">Grado: *{!! \App\Grade::find($suggestion->grade)->name !!}</label>
    <select name="grade" id="grade" class="form-control input-sm">
            <option value=""></option>
    </select>
</div>
<div class="form-group">
    <label for="subject">Materia: *{!! \App\Subject::find($suggestion->subject)->name !!}</label>
    <select name="subject" id="subject" class="form-control input-sm">
        <option value=""></option>
    </select>
</div>
<div class="form-group">
    {!! Form::label('topic','Tema: *'.\App\Topic::find($suggestion->topic)->name)!!}
    {!! Form::select('topic',[''=>''],null,['class' => 'form-control input-sm']) !!}
</div>

<div class="form-group">
    {!! Form::label('device','Dispositivo: ')!!}
    {!! Form::select('device',[''=>'- Selecciona un dispositivo -','Ipad' => 'IPad Apple','Tablet' => 'Tablet Android','both' => 'Indistinto'],null,['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group">
    {!! Form::label('app_url','Aplicación:')!!}
    {!! Form::input('url','app_url',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::input('hidden','app_title',null,['class' => 'form-control','id' => 'app_title']) !!}
    {!! Form::input('hidden','app_description',null,['class' => 'form-control','id' => 'app_description']) !!}
    {!! Form::input('hidden','app_image',null,['class' => 'form-control','id' => 'app_image']) !!}
</div>
<div class="form-group">
    {!! Form::label('ebook_url','Ebook:')!!}
    {!! Form::input('url','ebook_url',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::input('hidden','ebook_title',null,['class' => 'form-control','id' => 'ebook_title']) !!}
    {!! Form::input('hidden','ebook_description',null,['class' => 'form-control','id' => 'ebook_description']) !!}
    {!! Form::input('hidden','ebook_image',null,['class' => 'form-control','id' => 'ebook_image']) !!}
</div>
<div class="form-group">
    {!! Form::label('video_url','Video:')!!}
    {!! Form::input('url','video_url',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::input('hidden','video_title',null,['class' => 'form-control','id' => 'video_title']) !!}
    {!! Form::input('hidden','video_description',null,['class' => 'form-control','id' => 'video_description']) !!}
    {!! Form::input('hidden','video_image',null,['class' => 'form-control','id' => 'video_image']) !!}
</div>
<div class="form-group">
    {!! Form::label('how_to_use','Sugerencia de Uso:')!!}
    {!! Form::textarea('how_to_use',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitBtnTxt,['class' => 'btn btn-primary form-control', 'id' => 'edit-btn']) !!}
</div>