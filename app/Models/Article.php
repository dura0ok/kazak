<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $id)
 */
class Article extends Model
{
    use HasFactory;
    protected $table = "news";
    protected $fillable = ['name', 'text', 'date'];


    public function additionalImages(){
        return $this->hasMany(AdditionalImage::class, "article_id", "id");
    }
}
