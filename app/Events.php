<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{

  protected $table = 'events'; //กําหนดชื อตารางในฐานข้อมลู
  protected $fillable = ['name','price'];//กําหนดให้สามารถเพิ มข้อมลู ได้ในคําสงั   //
  //orgid should be the user that currently login.
}
