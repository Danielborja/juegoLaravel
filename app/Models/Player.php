<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stat;
class Player extends Model
{
    use HasFactory;
    protected $fillable = ['name','password'];
    public function user(){
        return $this->hasOne(Stat::class);
    }
}
