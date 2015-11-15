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
    {!! Form::submit($submitBtnTxt,['class' => 'btn btn-primary form-control']) !!}
</div>