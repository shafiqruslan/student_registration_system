<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mode_study',
        'programme_id',
        'learning_centre_id',
        'status_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function programme(){
        return $this->belongsTo(Programme::class);
    }

    public function learning_centre(){
        return $this->belongsTo(LearningCentre::class);
    }
    
    public function status(){
        return $this->belongsTo(Status::class);
    }
}
