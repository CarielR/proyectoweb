<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datoshome extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'datoshome';

    protected $fillable = ['vision','mision','contactos','email','quienes_somos','Cultura_Org'];

}
