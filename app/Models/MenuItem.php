<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $table = 'menu_items';
    public $timestamps = false;
    protected $fillable = ['title', 'parent_id', 'url', 'sort'];


    public function descendants()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function parents()
    {
        return $this->parent()->with('parent');
    }

}
