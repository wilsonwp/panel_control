<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Hincha extends Model
{
   protected $fillable =['nombre','email','fecha_nacimiento','sexo','num_celular','user_id'];

   public function usuario(){
   	return $this->belongsTo('\futboleros\User');
   }

}
