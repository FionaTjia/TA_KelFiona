<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'produks';

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
    protected $fillable = ['id_produk', 'nama_produk', 'hargaJual_produk', 'modal_produk', 'id_category'];

    
}
