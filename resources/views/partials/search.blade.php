<div class="form-group">
    <label for="level">Nivel:</label>
    <select name="level" id="level" class="form-control input-sm">
        <option value="">- Seleciona un nivel -</option>
        @foreach($levels as $level)
            <option value="{{ $level->id }}">{{ $level->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="grade">Grado:</label>
    <select name="grade" id="grade" class="form-control input-sm">
        <option value=""></option>
    </select>
</div>
<div class="form-group">
    <label for="subject">Matería:</label>
    <select name="subject" id="subject" class="form-control input-sm">
        <option value=""></option>
    </select>
</div>
<div class="form-group">
    <label for="topic">Tema:</label>
    <select name="topic" id="topic" class="form-control input-sm">
        <option value=""></option>
    </select>
</div>
<div class="form-group">
    <label for="device">Dispositivo:</label>
    <select name="device" id="device" class="form-control input-sm">
        <option value="">- Selecciona un dispositivo -</option>
        <option value="Ipad">IPad Apple</option>
        <option value="Tablet">Tablet Android</option>
        <option value="both">Indistinto</option>

    </select>
</div>
<div class="form-group">
    {!! Form::submit($submitBtnTxt,['class' => 'btn btn-primary form-control', 'id' => 'search-btn']) !!}
</div>