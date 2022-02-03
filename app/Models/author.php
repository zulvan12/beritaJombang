<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class author extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use HasFactory;

    protected $guarded = ['id'];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
