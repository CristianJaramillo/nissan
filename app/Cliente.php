<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    /**
     * The table associated with the model.
     *
     * @access protected
     * @var string
     */
    protected $table = 'clientes';

    /**
     * The attributes that are mass assignable.
     *
     * @access protected
     * @var array
     */
    protected $fillable = [
        'nombre_cliente',
        'direc_cliente',
        'tel_cliente'
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
    protected $primaryKey = 'id_cliente';

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
    public function autos()
    {
        return $this->hasMany('App\Auto', 'id_cliente', 'id_cliente');
    }

}
