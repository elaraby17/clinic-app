<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'image',
        'major_id',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
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
