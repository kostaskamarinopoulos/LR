<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTeamsTest extends TestCase
{    
	public function setUp()
    {
        parent::setUp();
        Session::start();
    }
    
    private function testTeamData()
    {
    	return [
            ['0741246', 'name', 'text']
        ];
    }

    /**
     * @dataProvider testTeamData
     */
    public function testSendEmail($tel, $name, $text)
    {
        $this->visit('/')
         ->type($tel, 'phone')
         ->type($name, 'name')
         ->type($text, 'msg')
         ->press('Send')
         ->see('Successful');
  
    }

  
}
