<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 19/02/2016
 * Time: 10:40
 */

namespace CodePress\CodeDatabase\Repository;


use CodePress\CodeDatabase\AbstractRepository;
use CodePress\CodeDatabase\Model\Category;

class CategoryRepository extends AbstractRepository
{


    public function model()
    {
        return Category::class;
    }
}