<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{
    use HasFactory;

    protected $table = 'categories_documents';
    public $timestamps = false;
    protected $fillable = ['title'];

    public function documents()
    {
        return $this->hasMany('App\Models\Document', 'category_id', 'id');
    }

}
