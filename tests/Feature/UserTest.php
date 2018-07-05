<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
class UserTest extends TestCase
{

    /**
     * A basic test example.
     *
     * 
     */

    public function testCreateLoginRequired()
    {

        $this->visit('/stores/create')
             ->seePageIs('/login');

        $this->visit('/products/create')
             ->seePageIs('/login');

        $this->visit('/reviews/create')
             ->seePageIs('/login');
    }

    public function testEditLoginRequired()
    {

        $this->visit('/products/1/edit')
             ->seePageIs('/login');

        $this->visit('/stores/1/edit')
             ->seePageIs('/login');

        $this->visit('/reviews/1/edit')
             ->seePageIs('/login');
    }

    public function testDeleteLoginRequired()
    {

        $this->visit('/stores')
             ->press('Radera')
             ->seePageIs('/login');

        $this->visit('/reviews')
             ->press('Radera')
             ->seePageIs('/login');

        $this->visit('/products')
             ->press('Radera')
             ->seePageIs('/login');
    }


    



    

}

