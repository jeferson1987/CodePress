<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 28/01/2016
 * Time: 08:25
 */

namespace CodePress\CodeTag\Models;


use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to' => 'slug',
        'unique' => true
    ];
    protected $table = "codepress_tag";

    protected $fillable = [
        'name',
        'slug'
    ];
    /**
     * Power taguear anything, Joker package
     * which can put tag in other items from other models
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function taggable()
    {
        return $this->morphTo();
    }

}