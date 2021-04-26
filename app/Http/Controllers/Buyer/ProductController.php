<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductRating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    
    {
        $query = Product::where('type', $request->input('type'));
        if($request->has('type')){
            $query->where('type','=',  $request->type );
            $product=$query->get();
        }      
        else{
        $product = Product::all();
        }
        return view('buyer.index')->with('product', $product);

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', '=', $id)->firstOrFail();
        $productRating= ProductController::getRating($id);
        $comments=ProductController::getComments($id);
        $seller=ProductController::getSeller($product->user_id)[0];

        return view('buyer.show', compact('product','productRating','comments','seller'));
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
    }
    public function addRating(Request $request){
       

        $productRating = new ProductRating();
        $productRating->product_id = $request->product_id;
        $productRating->user_id = Auth::user()->id;
        $productRating->rate = $request->rating;
        $productRating->comment = $request->comment;


        

        $productRating->save();
        return redirect('/products/'.$request->product_id);
    }

    public static function getSeller($id){
        $seller = DB::table('users')
                   ->select('users.name','users.id','users.phone_number','users.profile_photo','users.email')
                   ->where('id', '=',$id)
                   ->get();
                   return $seller;


    }
    public static function getRating($product_id){
       $avgRate= DB::table('product_ratings')
             ->select(DB::raw('AVG(rate) AS rating_average'))
             ->where('product_id', '=', $product_id)
             ->get();
             return $avgRate;

    }
    public static function getComments($id){
   

        $ratings = DB::table('product_ratings')
                   ->select('*')
                   ->where('product_id', $id);

$users = DB::table('users')
->select('users.profile_photo','users.id','users.name','ratings.comment','ratings.created_at')
        ->joinSub($ratings, 'ratings', function ($join) {
            $join->on('users.id', '=', 'ratings.user_id');
        })->get();
             return $users;


    }
}
