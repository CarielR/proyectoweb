<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleo extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'empleos';

    protected $fillable = ['cliente_id','nombre_emp','descripcion_emp','modalidad_emp','horario_emp','fechapub_emp','experiencia_emp'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
}
