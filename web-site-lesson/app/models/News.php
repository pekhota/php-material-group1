<?php

namespace App\Models;

/**
 * @property $id
 * @property $title
 * @property $date
 * @property $author
 * @property $body
 */
class News extends Model
{
    protected string $table = "news";
}