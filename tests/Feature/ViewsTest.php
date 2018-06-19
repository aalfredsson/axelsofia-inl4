<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewsTest extends TestCase
{

    /**
     * A basic test example.
     *
     * 
     */

    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Välkommen')
             ->dontSee('Rails');
    }

    public function testProductsWorking()
    {
        $this->visit('/products')
             ->see('Alla produkter')
             ->click('Recensioner')
             ->seePageIs('/reviews');
    }

    public function testReviewsWorking()
    {
        $this->visit('/reviews')
             ->see('Alla recensioner')
             ->dontsee('Alla produkter')
             ->click('Butiker')
             ->seePageIs('/stores');
    }

    public function testStoresWorking()
    {
        $this->visit('/stores')
             ->see('Alla butiker')
             ->dontsee('Alla produkter')
             ->dontsee('Alla recensioner')
             ->click('Start')
             ->seePageIs('/');
    }

    



    

}

