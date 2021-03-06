<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hp extends Model
{
    protected $table = 'hp';
    protected $fillable = [
        'name', 'id_user', 'id_battery', 'id_camera', 'id_color', 'id_ram',
        'id_storage', 'id_dualsim', 'id_size', 'id_sound',
    ];

    public function battery()
    {
        return $this->belongsTo('App\Battery', 'id_battery');
    }

    public function camera()
    {
        return $this->belongsTo('App\Camera', 'id_camera');
    }

    public function color()
    {
        return $this->belongsTo('App\Color', 'id_color');
    }

    public function ram()
    {
        return $this->belongsTo('App\Ram', 'id_ram');
    }

    public function storage()
    {
        return $this->belongsTo('App\Storage', 'id_storage');
    }

    public function dualsim()
    {
        return $this->belongsTo('App\DualSim', 'id_dualsim');
    }

    public function size()
    {
        return $this->belongsTo('App\Size', 'id_size');
    }

    public function sound()
    {
        return $this->belongsTo('App\Sound', 'id_sound');
    }
}
