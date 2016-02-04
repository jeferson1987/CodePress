<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 18/01/2016
 * Time: 20:04
 */

namespace CodePress\CodeCategory\Models;


use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Validator;

class Category extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $table = "codepress_categories";

   protected $sluggable = [
        'build_from' => 'name',
        'save_to' => 'slug',
        'unique' => true

    ];
    protected $fillable = [
        'name',
        'slug',
        'active',
        'parent_id'
    ];
    private $validator;

    public function setValidator($validator)
    {
        $this->validator = $validator;
    }

    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Power categorize anything, Joker package
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function categorizable()
    {
        return $this->morphTo();
    }

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }




}