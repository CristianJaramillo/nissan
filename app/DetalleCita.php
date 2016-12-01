<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCita extends Model
{
    /**
     * The table associated with the model.
     *
     * @access protected
     * @var string
     */
    protected $table = 'detalle_citas';

    /**
     * The attributes that are mass assignable.
     *
     * @access protected
     * @var array
     */
    protected $fillable = [
        'id_cita',
        'id_servicio',
        'obser_servicio'
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
    protected $primaryKey = null;

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
    public function auto()
    {
        return $this->hasOne('App\Auto', 'num_placa', 'num_placa');
    }

    /**
     *
     *
     */
    public function servicio()
    {
        return $this->hasOne('App\servicio', 'id_servicio', 'id_servicio');
    }

}
