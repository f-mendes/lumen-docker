<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Cla extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome','simbolo','vila_id'];
    protected $appends = ['links'];

    public function vila()
    {
        return $this->belongsTo(Vila::class);
    }

    public function personagens()
    {
        return $this->hasMany(Personagen::class);
    }

    public function getLinksAttribute()
    {
        return [
          'self' => '/api/cla/'.$this->id ,
          'personagens' => '/api/cla/'.$this->id.'/personagens',
           'vila' => '/api/vila/'.$this->vila_id
        ];
    }

}
