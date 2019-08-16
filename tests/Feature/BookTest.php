<?php namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    public function testHome()
    {
        $this->get('/')
            ->assertOk();
    }

    public function testAbout()
    {
        $this->get('/about')
            ->assertOk();
    }

    public function testBooks()
    {
        $this->get('books')
            ->assertOk();
    }

    public function testBook()
    {
        // #todo #cathat #implement test for individual book page
        // #todo #cathat #implement test for individual book page
        // #todo #cathat #implement test for individual book page
        $this->assertTrue(true);
    }

    public function testNow()
    {
        $this->get('/now')
            ->assertOk();
    }
}
