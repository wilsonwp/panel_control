<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
   protected $fillable= ['user_id','titulo','contenido'];
   
   public function user(){
       return $this->belongsTo('futboleros\User');
   }
}
