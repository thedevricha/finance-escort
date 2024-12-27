<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'status'];
    
    public function expense(){
        return $this->hasMany(Expense::class);
    }
    public function budgets(){
        return $this->hasMany(Budget::class);
    }
}
