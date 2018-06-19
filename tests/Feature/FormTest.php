<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FormTests extends TestCase
{

    /**
     * A basic test example.
     *
     * 
     */
    use WithoutMiddleware;


    public function testAddStoreForm()
    {
        $this->visit('/stores/create')
             ->type('Elgiganten', 'name')
             ->type('Malmö', 'city')
             ->press('Spara butik')
             ->seePageIs('/stores');
    }

    public function testAddProductForm()
    {
        $this->visit('/products/create')
             ->type('iPhone', 'title')
             ->type('111', 'price')
             ->type('Apple', 'brand')
             ->type('Mycket bra telefax', 'description')
             ->type('image.jpeg', 'image')
             ->press('Spara produkt')
             ->seePageIs('/products');
    }

    public function testAddReviewForm()
    {
        $this->visit('/reviews/create/3')
             ->type('Anders', 'name')
             ->type('Micket fin telebobo', 'comment')
             ->select('1', 'grade')
             ->press('Spara recension')
             ->seePageIs('/products/3');
    }

    public function testUpdateReviewForm()
        {
            $this->visit('/reviews/1/edit')
                ->type('Sofia', 'name')
                ->type('Love it', 'comment')
                ->select('5', 'grade')
                ->press('Uppdatera recension')
                ->seePageIs('/products/1');
        }

}

