<div class="form-group">
     {!!Form::label('','Titulo:')!!}
     {!!Form::text('titulo',null,['id'=>'titulo','class'=>'form-control','placeholder'=>'Ingrese Titulo de la Noticia'])!!}
     {!!Form::label('','Contenido:')!!}
     {!!Form::textarea('contenido',null,['id'=>'contenido','class'=>'form-control','placeholder'=>'Ingrese Descripcion'])!!}
     {!!Form::hidden('user_id',Auth::user()->id,['id'=>'id','class'=>'form-control'])!!}
   
</div>