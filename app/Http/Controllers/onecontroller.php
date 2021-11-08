<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\http;

use Illuminate\Http\Request;
use App\Models\account;
use App\Models\contact;

class onecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $req)
    {
        $data = new account;
        $data->name = $req->name;
        $data->phone = $req->phone;
        $data->email = $req->email;
        $data->password = $req->password;
        $result = $data->save();
        if($result){
            return redirect('/login');
        }
        else{
            // $error = true;
            echo "Try again to signup!";
         }
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
    public function show()
    {
        if(session()->has('email')){
            return redirect('welcome');
        
    }
    else{
        return view('login');

    }
    }
    public function entryto(request $req)
    {
        
        $email =  $req->input('email');
        $pass = $req->input('password');
        $email1 = DB::table('accounts')->where('email', $email)->get();
        $password = DB::table('accounts')->where('password', $pass)->get();
        $req->session()->put('email', $email);
        // echo session('email');
        // echo $email1;
        // $data = account::find($email);
        // $data2 = account::find($pass);
        // // echo (($data && $data2));
        if($email1 !==[])
        {
            if($password !==[])
            {
                return view('welcome');

            }
            else{
            return view('login');
        }
        }
        else{
            return view('login');
        }

        // return view('welcome');
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
    //     $api_key = '6c4630f655aa49d8b9b312920d48c493';
    //     // $data = http::get('https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=API_KEY')->json();
    //     // echo $data;
    //      $urlArticles = file_get_contents('https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=API_KEY');
    //      $urlArticlesArray = json_decode($urlArticles, true);

    //    $articles = $urlArticlesArray['articles'];
    //    for($i = 0; $i < count($articles); $i++) {
    //      $sites = $urlArticlesArray['articles'][$i];
    //      echo '<img src="'.$sites['urlToImage'].'">';
        //  echo '<li> . {{$sites['author']}} . </li>';
        return view('jsnews');




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
    public function data1(request $req)
    {
        $data = new contact;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->mobile;
        $data->data = $req->data;
        $result = $data->save();
        if($result){
          
            // $alert = "<div class='alert alert-success' role='alert'>
            //     Your request has been submitted!
            //     </div>";
            
                
                // return redirect()->route('contact', [$user]);
                return view('welcome'); 
               
        }
        else{
            // $error = true;
            echo "Try again to contact us!";
         }
    }
}