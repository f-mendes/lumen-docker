<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Vila extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome','pais','simbolo'];
    protected $appends = ['links'];

    public function clas()
    {
        return $this->hasMany(Cla::class);
    }

    public function getLinksAttribute()
    {

        return [
          'self' => '/api/vila/'.$this->id,
          'clas' => '/api/vila/'.$this->id . '/clas'
        ];
    }
}
