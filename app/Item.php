<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $id_category
 * @property string $video_code
 * @property string $source
 * @property string $created_at
 * @property string $updated_at
 */
class Item extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'item';

    /**
     * @var array
     */
    protected $fillable = ['title', 'content', 'id_category', 'video_code', 'source', 'created_at', 'updated_at'];

}
