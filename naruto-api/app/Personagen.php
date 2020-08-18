<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Personagen extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome','sexo','idade','altura','peso','cla_id'];
    protected $appends = ['links'];

    public function cla()
    {
        return $this->belongsTo(Cla::class);
    }

    public function getLinksAttribute()
    {
        return [
            'self' => '/api/personagem/'.$this->id ,
            'cla' => '/api/cla/'.$this->cla_id,
        ];
    }

}
