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
{   /*
   *não persistir dados no banco na hora dos testes
   */
    use DatabaseTransactions;

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

    public function test_click_creat_new_category()
    {
        $this->visit('/admin/categories')
            ->click('Create Category')
            ->seePageIs('/admin/categories/create')
            ->see('Create Category');
    }

    public function test_creat_new_category()
    {
        $this->visit('/admin/categories/create')
            ->type('Category Test','name')
            ->check('active')
            ->press('Submit')
            ->seePageIs('/admin/categories')
            ->see('Category Test');
    }

}