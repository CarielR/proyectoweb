<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'clientes';

    protected $fillable = ['genero_id','nombre_cli','fecha_nac_cli','telefono1_cli','telefono2_cli','email_cli','titulo_cli','rol_cli','experiencia_cli'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursoscaps()
    {
        return $this->hasMany('App\Models\Cursoscap', 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleos()
    {
        return $this->hasMany('App\Models\Empleo', 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'id', 'genero_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function provincias()
    {
        return $this->hasMany('App\Models\Provincia', 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio', 'cliente_id', 'id');
    }
    
}
