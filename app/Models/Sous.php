<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Sous extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $fillable = ['nom', 'description', 'prix_start', 'service_id'];

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function tarifs(){
        return $this->hasMany(Tarif::class, 'souse_id');
    }
}
