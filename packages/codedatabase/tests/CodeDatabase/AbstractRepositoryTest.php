<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 19/02/2016
 * Time: 09:55
 */

namespace CodePress\CodeDatabase\Test\CodeDatabase;


use CodePress\CodeDatabase\Model\Category;
use CodePress\CodeDatabase\Tests\AbstractTestCase;
use Mockery as m;
use CodePress\CodeDatabase\AbstractRepository;
use CodePress\CodeDatabase\Contracts\RepositoryInterface;



class AbstractRepositoryTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->migrate();
        Category::create([
            'name'=> 'name categegory',
            'description'=> '123esdfr'
        ]);

        echo Category::all()->first()->name;
    }

    public function test_is_implements_repositoryinterface()
    {
        $mock = m::mock(AbstractRepository::class);
        $this->assertInstanceOf(RepositoryInterface::class,$mock);


    }

}