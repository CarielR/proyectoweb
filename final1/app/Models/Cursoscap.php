<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursoscap extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'cursoscaps';

    protected $fillable = ['cliente_id','nombre_cursoscaps','descipcion_cursoscaps','publicacion_cursoscaps','edadmin_cursoscaps','edadmax_cursoscaps','link_cursoscaps','cupos_cursoscaps','costo_cursoscaps'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
}
