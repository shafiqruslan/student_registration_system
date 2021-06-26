<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    
    use HasFactory;

    const WAITING = 'Waiting for Review';
    const ADMIT = 'Admit';
    const DENY = 'Deny';

    public function waiting(){
        return $this->where('name', self::WAITING)->first()->id;
    }
    public function admit(){
        return $this->where('name', self::ADMIT)->first()->id;
    }

    public function deny(){
        return $this->where('name', self::DENY)->first()->id;
    }
}
