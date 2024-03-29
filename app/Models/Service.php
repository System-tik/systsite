<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Service extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $fillable = ["titre", "description"];

    public function sous(){
        return $this->hasMany(Sous::class);
    }

}
