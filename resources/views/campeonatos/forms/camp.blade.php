<div class="form-group">
		{!!Form::label('nomb_camp','Nombre de Campeonato:',array('class' => 'col-sm-2 control-label'))!!}
		<div class="col-sm-10">
			{!!Form::text('nombre_campeonato',null,['class'=>'form-control','placeholder'=>'Ingrese nombre del Campeonato'])!!}
		</div>
	</div>
        <div class="form-group">
		{!!Form::label('alias','Alias del Campeonato:',array('class' => 'col-sm-2 control-label'))!!}
		<div class="col-sm-10">
			{!!Form::text('alias',null,['class'=>'form-control','placeholder'=>'Ingrese Alias'])!!}
		</div>
	</div>
	<div class="form-group">
		{!!Form::label('num_partidos','Numero de Partidos:',array('class' => 'col-sm-2 control-label'))!!}
		<div class="col-sm-10">
			{!!Form::text('num_partidos',null,['class'=>'form-control','placeholder'=>'Ingrese Numero de Partidos'])!!}
		</div>
	</div>
        <div class="form-group">
		{!!Form::label('','Fecha de Inicio:',array('class' => 'col-sm-2 control-label'))!!}
		<div class="col-sm-10">
			{!!Form::date('fecha_inic',null,['class'=>'form-control'])!!}
		</div>
	</div>
         <div class="form-group">
		{!!Form::label('','Fecha Fin:',array('class' => 'col-sm-2 control-label'))!!}
		<div class="col-sm-10">
			{!!Form::date('fecha_fin',null,['class'=>'form-control'])!!}
		</div>
	</div>
