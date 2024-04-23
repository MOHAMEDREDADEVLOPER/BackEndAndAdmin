<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes ;
    public function ville()
    {
        return $this->belongsTo(Ville::class, 'id_ville');
    }

public function messages()
{
return $this->hasMany(Message::class);
}

public function visits()
{
return $this->hasMany(Visit::class);
}

public function favori()
{
return $this->hasMany(Favoris::class);
}

public function annonces()
{
return $this->hasMany(Annonce::class);
}
}
