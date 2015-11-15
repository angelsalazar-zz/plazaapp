<div class="form-group">
    <label for="level_create">Nivel:</label>
    <select name="level" id="level_create" class="form-control input-sm">
        <option value="0">- Seleciona un nivel -</option>
        @foreach($levels as $level)
            <option value="{{ $level->id }}">{{ $level->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="grade_create">Grado:</label>
    <select name="grade" id="grade_create" class="form-control input-sm">
        <option value=""></option>
    </select>
</div>
<div class="form-group">
    <label for="subject_create">Matería:</label>
    <select name="subject" id="subject_create" class="form-control input-sm">
        <option value=""></option>
    </select>
</div>
<div class="form-group">
    <label for="topic_create">Tema:</label>
    <select name="topic" id="topic_create" class="form-control input-sm">
        <option value=""></option>
    </select>
</div>
<div class="form-group">
    <label for="device">Dispositivo:</label>
    <select name="device" id="device" class="form-control input-sm">
        <option value="0">- Selecciona un dispositivo -</option>
        <option value="Ipad">Ipad</option>
        <option value="Tablet">Tablet</option>
    </select>
</div>
<div class="form-group">
    <label for="app_url_create">Aplicación:</label>
    <input type="url" class="form-control" name="app_url" id="app_url_create"/>
</div>
<div class="form-group">
    {!! Form::input('hidden','app_title',null,['class' => 'form-control','id' => 'app_title']) !!}
    {!! Form::input('hidden','app_description',null,['class' => 'form-control','id' => 'app_description']) !!}
    {!! Form::input('hidden','app_image',null,['class' => 'form-control','id' => 'app_image']) !!}
</div>
<div class="form-group">
    <label for="ebook_url_create">Ebook:</label>
    <input type="url" class="form-control" name="ebook_url" id="ebook_url_create"/>
</div>
<div class="form-group">
    {!! Form::input('hidden','ebook_title',null,['class' => 'form-control','id' => 'ebook_title']) !!}
    {!! Form::input('hidden','ebook_description',null,['class' => 'form-control','id' => 'ebook_description']) !!}
    {!! Form::input('hidden','ebook_image',null,['class' => 'form-control','id' => 'ebook_image']) !!}
</div>

<div class="form-group">
    <label for="video_url_create">Video:</label>
    <input type="url" class="form-control" name="video_url" id="video_url_create"/>
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
    {!! Form::submit($submitBtnTxt,['class' => 'btn btn-primary form-control']) !!}
</div>