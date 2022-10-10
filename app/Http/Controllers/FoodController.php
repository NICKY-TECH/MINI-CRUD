<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Food;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food=Food::all();
       return view('food.index',['food'=>$food]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $food=Food::create(
            [
                'food'=>$request->input('food'),
                'ingredient'=>$request->input('ingredient'),
                'remark'=>$request->input('remark')
            ]
            

        );
        return redirect('/food');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($food)
    {
        // return view('food.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($food)
    {
        $dish=Food::find($food)->first();
        return view('food.edit',['food'=>$dish]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $food)
    {
        $dish=Food::where('id',$food);
        $dish->update([
             'food'=>$request->input('food'),
                'ingredient'=>$request->input('ingredient'),
                'remark'=>$request->input('remark')

        ]);
        return redirect('/food');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($food)
    {
        $dish=Food::where('id',$food);
        $dish->delete();
        return redirect('/food');
 ;   }
}
