<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory;


    protected $fillable = [
        'title','price','description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function toBeRevisionedCount()
    {
        return Ad::where('is_accepted', null)->count();
    }
    public function setAccepted($bool)
    {
        $this->is_accepted = $bool;
        $this->save();
        return true;
    }
    
}
