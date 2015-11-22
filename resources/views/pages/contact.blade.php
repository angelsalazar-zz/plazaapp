@extends('app')

@section('content')
    <!--contact-->
    <div class="contact">
        <div class="container">
            <h3>Contactanos</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.5754858195196!2d-97.86029408504677!3d22.21823368536625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d7f747030450bb%3A0x8800e96098d0d998!2sFlorer%C3%ADa+Plaza+Centro!5e0!3m2!1sen!2smx!4v1447212937701" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="contact-form">
                <div class="col-md-4 contact-form-left">
                    <h4>Dirección :</h4>
                    <p>20 de Noviembre 224 Norte</p>
                    <p>Tampico, Tamps.</p>
                    <p>Telefonos : +52 (833) 212-3184 y 214-5801</p>
                    <a href="#">www.plazaapp.com</a>
                </div>
                <div class="col-md-8 contact-form-right">
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {!! Session::get('flash_message') !!}
                        </div>
                    @endif

                        @include('partials.errors')
                    <h4>Envianos un mensaje</h4>
                    {!! Form::open(array('url' => 'messages')) !!}
                        {!! Form::input('text','name',null,['placeholder' => 'Nombre']) !!}
                        {!! Form::input('email','email',null,['placeholder' => 'Email']) !!}
                        {!! Form::input('text','phone',null,['placeholder' => 'Teléfono']) !!}
                        {!! Form::textarea('message',null,['placeholder' => 'Mensaje']) !!}
                        {!! Form::input('hidden','seen','false',null) !!}
                        {!! Form::submit('Enviar',['class' => 'btn btn-success form-control']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//contact-->

@endsection