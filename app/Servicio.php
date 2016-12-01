<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    /**
     * The table associated with the model.
     *
     * @access protected
     * @var string
     */
    protected $table = 'servicios';

    /**
     * The attributes that are mass assignable.
     *
     * @access protected
     * @var array
     */
    protected $fillable = [
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
    protected $primaryKey = 'id_servicio';

    /**
     *
     *
     * @access public
     * @var boolean
     */
    public $timestamps = false;

}
