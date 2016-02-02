<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 30/01/2016
 * Time: 20:33
 */

namespace CodePress\CodeCategory\Testing;


use CodePress\CodeCategory\Models\Category;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminCategoriesTest extends \TestCase
{
    use DatabaseTransactions
    public function test_can_visit_admin_categories_page()
    {
        $this->visit('/admin/categories')
            ->see('Categories');
    }

    public function test_categories_listign()
    {
        Category::create(['name' => 'Category 1', 'active' => true ]);
        Category::create(['name' => 'Category 2', 'active' => true ]);
        Category::create(['name' => 'Category 3', 'active' => true ]);

// o teste não passa porque não lista em tela as categorias criadas, não teve a explicação de como fazer isso.
        $this->visit('/admin/categories')
            ->see('Category 1')
            ->see('Category 2')
            ->see('Category 3');

    }

}