<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    use HasFactory;

    public function vacation_type(){
        return $this->belongsTo(VacationType::class);
    }

    public function user(){
        return $this->belongsTo(User::class , 'employee_id' ,'id' );
    }
}
