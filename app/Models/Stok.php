<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'stoks';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_stok', 'stok_id_produk', 'stok'];

    
}
