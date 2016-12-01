<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @access protected
     * @var string
     */
    protected $table = 'autos';

    /**
     * The attributes that are mass assignable.
     *
     * @access protected
     * @var array
     */
    protected $fillable = [
        'num_placa',
        'nombre_auto',
        'color_auto',
        'id_cliente'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @access protected
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * 
     *
     * @access protected
     * @var string
     */
    protected $primaryKey = 'num_placa';

    /**
     *
     *
     * @access public
     * @var boolean
     */
    public $incrementing = false;

    /**
     *
     *
     * @access public
     * @var boolean
     */
    public $timestamps = false;

    /**
     *
     *
     */
    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'id_cliente', 'id_cliente');
    }

}
