<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;


class UserModel extends Authenticatable implements JWTSubject
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }


    protected $primaryKey = 'user_id'; //mendefinisikan nama tabel yang digunakan oleh model ini
    protected $table = 'm_user'; //mendefinisikan primary key dari tabel yang digunakan

    protected $fillable = ['level_id', 'username', 'nama', 'password'];

    // public function level(): BelongsTo
    // {
        // return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    // }
}