<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 20/01/2016
 * Time: 14:16
 */

namespace CodePress\CodeCategory\Tests\Models;


use CodePress\CodeCategory\Models\Category;
use CodePress\CodeCategory\Tests\AbstractTestCase;
use Mockery as m;
use Illuminate\Validation\Validator;


class CategoryTest extends AbstractTestCase
{

     // method performed before any test

    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function test_validator_in_category_model()
    {
        $category =new Category();
        $validator =m::mock(Validator::class);
        $category->setValidator($validator);

        $this->assertEquals($category->getValidator(),$validator);
    }

    //teste funcionais e de integração

    public function test_check_if_category_can_be_persisted()
    {
        $category = Category::create(['name'=>'Category test','active'=>true]);
        $this->assertEquals('Category test', $category->name);

        $category =Category::all()->first();
        $this->assertEquals('Category test', $category->name);


    }

   public function test_check_if_can_assign_a_parent_category()
    {
        $parentCategory = Category::create(['name'=>'Parent test','active'=>true]);
        $category = Category::create(['name'=>'Category test','active'=>true]);
        $category->parent()->associate($parentCategory)->save();
        $children =  $parentCategory->children->first();

            $this->assertEquals('Category test', $children->name);
        $this->assertEquals('Parent test', $category->parent->name);




    }

}