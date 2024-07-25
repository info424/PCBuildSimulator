<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PCBuild extends Model
{
    use HasFactory;

    protected $table = 'pc_builds';

    protected $fillable = ['user_id', 'cpu_id', 'gpu_id', 'motherboard_id', 'ram_id', 'storage_id', 'power_supply_id', 'cooling_system_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cpu()
    {
        return $this->belongsTo(Component::class, 'cpu_id');
    }

    public function gpu()
    {
        return $this->belongsTo(Component::class, 'gpu_id');
    }

    public function motherboard()
    {
        return $this->belongsTo(Component::class, 'motherboard_id');
    }

    public function ram()
    {
        return $this->belongsTo(Component::class, 'ram_id');
    }

    public function storage()
    {
        return $this->belongsTo(Component::class, 'storage_id');
    }

    public function powerSupply()
    {
        return $this->belongsTo(Component::class, 'power_supply_id');
    }

    public function coolingSystem()
    {
        return $this->belongsTo(Component::class, 'cooling_system_id');
    }
}

