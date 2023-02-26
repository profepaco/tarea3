<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion','categoria_id','precio'];

    public function categoria(): BelongsTo{
        return $this->belongsTo(Categoria::class);
    }

    public function pedidos(): BelongsToMany
    {
        return $this->belongsToMany(Pedido::class)->withTimestamps();;
    }
}
