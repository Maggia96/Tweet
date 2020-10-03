<?php

namespace App\Http\Controllers;

use App\tweets;
use Illuminate\Http\Request;
use TwitterAPIExchange;


class TweetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: *");
        header("Access-Control-Allow-Methods: POST, PUT, GET, OPTIONS");

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        require_once('TwitterAPIExchange.php');

        $settings = array(
            'oauth_access_token' => "1104063783234879490-kY0DJFnHf29bT11WdvMspTqbGvHqST",
            'oauth_access_token_secret' => "DrHQf9AztSRwJPmDRXjURkFiLx8YmVM23A96C2Ac0xUwd",
            'consumer_key' => "L34y0Ez744ifincFlkzqLus57",
            'consumer_secret' => "c99M7ymvB5B74p16aAu70YZPbJaRx0VP48hW2UJoN8KNOs7hr8",
        );


        $cadena = $_GET['cadena'];


        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $getfield =  '?q=' . $cadena . '&count=10&lang=es&result_type=popular&tweet_mode=extended';
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        $json =  json_decode($twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest());



        $myArray = array();

        $myArray = $json;

        $data = [

            'success' => true,
            'tweets' => $myArray,
        ];
        echo json_encode(['data' => $data]);
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
     * @param  \App\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function show(tweets $tweets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function edit(tweets $tweets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tweets $tweets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function destroy(tweets $tweets)
    {
        //
    }
}
