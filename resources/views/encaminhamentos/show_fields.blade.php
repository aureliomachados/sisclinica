<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('data', 'Data:') !!}
    <p>{!! $encaminhamento->data->format('m/m/Y') !!}</p>
</div>
{{--<!-- Id Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $encaminhamento->id !!}</p>--}}
{{--</div>--}}

<!-- Paciente Field -->
<div class="form-group">
    {!! Form::label('paciente', 'Paciente:') !!}
    <p>{!! $encaminhamento->paciente !!}</p>
</div>

<!-- Idade Field -->
<div class="form-group">
    {!! Form::label('idade', 'Idade:') !!}
    <p>{!! $encaminhamento->idade !!}</p>
</div>

<!-- Endereco Field -->
<div class="form-group">
    {!! Form::label('endereco', 'Endereco:') !!}
    <p>{!! $encaminhamento->endereco !!}</p>
</div>

<!-- Diagnostico Field -->
<div class="form-group">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    <p>{!! $encaminhamento->diagnostico !!}</p>
</div>

<!-- Profissional Field -->
<div class="form-group">
    {!! Form::label('profissional', 'Profissional:') !!}
    <p>{!! $encaminhamento->profissional !!}</p>
</div>

<!-- Saida Field -->
<div class="form-group">
    {!! Form::label('saida', 'Saida:') !!}
    <p>{!! $encaminhamento->saida !!}</p>
</div>

<!-- Chegada Field -->
<div class="form-group">
    {!! Form::label('chegada', 'Chegada:') !!}
    <p>{!! $encaminhamento->chegada !!}</p>
</div>

{{--<!-- Created At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('created_at', 'Created At:') !!}--}}
    {{--<p>{!! $encaminhamento->created_at !!}</p>--}}
{{--</div>--}}
