<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    /**
     * The table associated with the model.
     *
     * @access protected
     * @var string
     */
    protected $table = 'citas';

    /**
     * The attributes that are mass assignable.
     *
     * @access protected
     * @var array
     */
    protected $fillable = [
        'num_placa',
        'fecha'
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
    protected $primaryKey = 'id_cita';

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
    public function detalles()
    {
        return $this->hasMany('App\DetalleCita', 'id_cita', 'id_cita');
    }

}
