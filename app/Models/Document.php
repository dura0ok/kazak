<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['title', 'category_id'];

    public function setCategoryIdAttribute($value)
    {
        if ($value == 'none') {
            $this->attributes['category_id'] = null;
            return;
        }
        $this->attributes['category_id'] = $value;
    }

    public function category()
    {
        return $this->belongsTo('App\Models\DocumentCategory', 'category_id', 'id');
    }
}
