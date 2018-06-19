<?php

namespace App\Http\Controllers;

use App\Review;
use App\Product;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reviews = Review::all();

        return view("reviews.index", [
            "reviews" => $reviews
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id)
    {
        //
        $product = Product::find($product_id);

        return view("reviews.create", [
            "product" => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $store = new Review;
        $store->comment = $request->input("comment");
        $store->name = $request->input("name");
        $store->grade = $request->input("grade");
        $store->product_id = $id;

        $store->save();

        return redirect()->route('products.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $reviews = Review::all();
        return view("reviews.show", [
            "reviews" => $reviews
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $review = Review::find($id);

        return view("reviews.edit", [
            "review" => $review
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $review = Review::find($id);
        $review->comment = $request->input("comment");
        $review->name = $request->input("name");
        $review->grade = $request->input("grade");
        $review->product_id = $review->product_id;

        $review->save();

        return redirect()->route('products.show', $review->product_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Review::destroy($id);
        
        return redirect()->route('reviews.index');
    }
}
