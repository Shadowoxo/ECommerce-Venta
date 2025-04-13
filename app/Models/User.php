<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// 👇 Importa los modelos relacionados
use App\Models\Cart;
use App\Models\Compra;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Los campos que se pueden asignar en masa.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // ejemplo: 'admin', 'cliente'
    ];

    /**
     * Los campos que deben ocultarse al serializar.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Relación: un usuario tiene muchos elementos en el carrito.
     */
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

  
    public function compras()
    {
        return $this->hasMany(Compra::class);
    }

 
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
