<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['title', 'description', 'article_id'];

    public function article()
    {
        return $this->belongsTo('App\Article', 'id', 'article_id');
    }

    public function setArticleIdAttribute($value)
    {
        if ($value == 'none') {
            $this->attributes['article_id'] = null;
            return;
        }
        $this->attributes['article_id'] = $value;
    }
}
