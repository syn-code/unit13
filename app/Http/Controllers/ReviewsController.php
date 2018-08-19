<?php

namespace App\Http\Controllers;

use App\ReviewsModel;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('reviews');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $review = new ReviewsModel;
        $review->fullname = $request->fullname;
        $review->email = $request->email;
        $review->message = $request->message;
        $review->rating = $request->rating;
        //dd($review);
        $review->save();
        return redirect('reviews');

        // ReviewModel::$request()->all();
        // $request->store();
        // dd($request);
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReviewsModel  $reviewsModel
     * @return \Illuminate\Http\Response
     */
    public function show(ReviewsModel $reviewsModel)
    {
        //



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReviewsModel  $reviewsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ReviewsModel $reviewsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReviewsModel  $reviewsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReviewsModel $reviewsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReviewsModel  $reviewsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReviewsModel $reviewsModel)
    {
        //
    }
}
