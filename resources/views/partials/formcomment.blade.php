<div class="form-group">
    {!! Form::input('hidden','user_id',$userId,['class' => 'form-control']) !!}
</div>
<div class="form-group">
        {!! Form::textarea('content',null,['class' => 'form-control','rows' => 3,'placeholder' => "Da una opinion"]) !!}
</div>
<div class="form-group">
        {!! Form::submit($submitBtnTxt,['class' => 'btn btn-primary form-control']) !!}
</div>


