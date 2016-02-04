<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 20/01/2016
 * Time: 17:16
 */

namespace CodePress\CodeTag\Tests\CodeTag\Models;

use CodePress\CodeTag\Models\Tag;
use CodePress\CodeTag\Tests\AbstractTestCase;


class TagTest extends AbstractTestCase
{
    /**
     * method performed before any test
     */
    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function test_if_tag_can_be_persisted()
    {
        $tag = Tag::create(['name' => 'Tag 1']);
        $this->assertEquals('Tag 1', $tag->name);

        $tag = Tag::all()->first();
        $this->assertEquals('Tag 1', $tag->name);
        $this->assertEquals('tag-1', $tag->slug);


    }
}