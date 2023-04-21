<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Stat extends Model
{
    use HasFactory;
    protected $fillable = ['wins','losts', 'player_id'];
    public function category(){
        return $this->belongsTo(Player::class);
    }
}
