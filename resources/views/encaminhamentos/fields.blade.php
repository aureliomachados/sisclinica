<!-- Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paciente', 'Paciente:') !!}
    {!! Form::text('paciente', null, ['class' => 'form-control']) !!}
</div>

<!-- Idade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idade', 'Idade:') !!}
    {!! Form::text('idade', null, ['class' => 'form-control']) !!}
</div>

<!-- Endereco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco', 'Endereco:') !!}
    {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- Diagnostico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::textarea('diagnostico', null, ['class' => 'form-control']) !!}
</div>

<!-- Profissional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profissional', 'Profissional:') !!}
    {!! Form::text('profissional', null, ['class' => 'form-control']) !!}
</div>

<!-- Saida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('saida', 'Saida:') !!}
    {!! Form::text('saida', null, ['class' => 'form-control']) !!}
</div>

<!-- Chegada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chegada', 'Chegada:') !!}
    {!! Form::text('chegada', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('encaminhamentos.index') !!}" class="btn btn-default">Cancel</a>
</div>
