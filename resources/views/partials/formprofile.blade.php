<div class="form-group">
    {!! Form::label('username','Name:')!!}
    {!! Form::input('text','username',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('position','Rol:')!!}
    {!! Form::select('position',['' => '','Profesor'=>'Profesor','Director'=>'Director'],null,['class' => 'form-control input-sm']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitBtnTxt,['class' => 'btn btn-primary form-control']) !!}
</div>