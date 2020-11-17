<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sendings extends Model
{
     
    protected $table = "sendings";
    public function divreceive()
    {
        return $this->belongsTo('App\Divreceive','id');
    }
}
