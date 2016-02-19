<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 19/02/2016
 * Time: 10:41
 */

namespace CodePress\CodeDatabase\Test\CodeDatabase;


use CodePress\CodeDatabase\Tests\AbstractTestCase;
use CodePress\CodeDatabase\Repository\CategoryRepository;
use CodePress\CodeDatabase\Model\Category;

class CategoryRepositoryTest extends AbstractTestCase
{
    /**
     * @var CategoryRepository
     */
    private $repository;

    public function setUp()
    {
        parent::setUp();
        $this->migrate();
        $this->createCategory();
        $this->repository = new CategoryRepository();
    }

    public function test_can_model()
    {

        $this->assertEquals(Category::class,$this->repository->model());
    }

    public function test_can_makemodel()
    {

        $result = $this->repository->makeModel();
        $this->assertInstanceOf(Category::class,$result);

        $reflactionClass = new \ReflectionClass($this->repository);
        $reflectionPropriety = $reflactionClass->getProperty('model');
        $reflectionPropriety->setAccessible(true);

        $result = $reflectionPropriety->getValue($this->repository);
        $this->assertInstanceOf(Category::class,$result);

    }

    public function test_can_make_model_in_construct()
    {
        $repository = new CategoryRepository();

        $reflactionClass = new \ReflectionClass($repository);
        $reflectionPropriety = $reflactionClass->getProperty('model');
        $reflectionPropriety->setAccessible(true);

        $result = $reflectionPropriety->getValue($repository);
        $this->assertInstanceOf(Category::class,$result);

    }

    public function test_can_list_category()
    {
        $result = $this->repository->all();
        $this->assertCount(3,$result);
        $this->assertNotNull($result[0]->description);

        $result = $this->repository->all(['name']);
        $this->assertNull($result[0]->description);
    }

    private function createCategory()
    {
        Category::create([
            'name' => 'Categor1',
            'description'=> 'desc 1'
        ]);
        Category::create([
            'name' => 'Categor1',
            'description'=> 'desc 1'
        ]);
        Category::create([
            'name' => 'Categor1',
            'description'=> 'desc 1'
        ]);
    }
}