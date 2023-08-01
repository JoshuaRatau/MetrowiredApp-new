<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function assigned()
    {
        return $this->belongsTo(User::class, 'assigned_to');
        return $this->belongsTo(User::class, 'assigned_by');
    }

    

    public function setStatusAttribute($value)
{
    $this->attributes['status'] = $value ?: 'Active';
}

}
