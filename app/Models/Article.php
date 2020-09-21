<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = "news";
    protected $fillable = ['name', 'text', 'date'];


    public function additionalImages(){
        return $this->hasMany(AdditionalImage::class, "article_id", "id");
    }
}
