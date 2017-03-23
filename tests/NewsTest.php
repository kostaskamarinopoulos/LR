<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use \App\User;
class UsersTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        Session::start();
    }

     /** @test */
    public function DataExistInDB()
    {   
        // assertDatabaseHas(newer version)
        $this->seeInDatabase('news', [
        'title' => 'Maths'
        ]);
    } 
 
}
