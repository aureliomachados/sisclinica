@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Encaminhamento
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($encaminhamento, ['route' => ['encaminhamentos.update', $encaminhamento->id], 'method' => 'patch']) !!}

                        @include('encaminhamentos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection