<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App
 * @property string $title
 * @property string $body
 */
class Article extends Model
{
    protected $fillable = ['title', 'body'];
}
