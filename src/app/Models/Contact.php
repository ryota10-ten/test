<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'gender','email','tell','address','building','detail', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeCategory($query, $category_id)
    {
        if (!empty($category_id)) {
            $query->where('category_id', $category_id);
        }
    }

    public function scopeGender($query, $gender)
    {
        if (!empty($gender)) {
            $query->where('gender', $gender);
        }
    }

    public function scopeDate($query, $date)
    {
        if (!empty($date)) {
            $query->where('created_at', $date);
        }
    }

    public function scopeKeyword($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('first_name', 'like', '%' . $keyword . '%')->orWhere('last_name', 'like', '%' . $keyword . '%')->orWhere('email', 'like', '%' . $keyword . '%');
        }
    }
}
