<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image'
    ];

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
    public function imageUrl()
    {
        if ($this->image && filter_var($this->image, FILTER_VALIDATE_URL)) {
            return $this->image;
        } elseif ($this->image) {
            return asset('storage/' . $this->image);
        } else {
            return asset('client/assets/images/major.jpg');
        }
    }
}
