<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 18/01/2016
 * Time: 20:04
 */

namespace CodePress\CodeDatabase\Model;



use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = "codepress_categories";


    protected $fillable = [
        'name',
        'description'

    ];




}