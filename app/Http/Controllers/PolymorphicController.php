<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Comment;
use Illuminate\Http\Request;

class PolymorphicController extends Controller
{
    public function index(){
        $comments = Comment::all();
        $total_comments = $comments->count();
        return view('comments/index', compact('comments', 'total_comments'));
    }

    public function comment_city(){
        $city = City::where('name','Rio de Janeiro')->get()->first();

        $comment = $city->comments()->create([
            'description' => "{$city->name}: Cidade maravilhosa!",
        ]);

        return view('comments/city', compact('city', 'comment'));
    }

    public function comment_state(){
        $state = State::where('name','São Paulo')->get()->first();

        $comment = $state->comments()->create([
            'description' => "{$state->name}: A locomotiva do País!",
        ]);

        return view('comments/state', compact('state', 'comment'));
    }

    public function comment_country(){
        $country = Country::where('name','Brasil')->get()->first();

        $comment = $country->comments()->create([
            'description' => "{$country->name}: Ame ou deixe-o!",
        ]);

        return view('comments/country', compact('country', 'comment'));
    }

    public function show_comments_city($name='São Paulo'){
        $city = City::where('name', $name)->get()->first();
        $comments = $city->comments;
        $total_comments = $comments->count();
        return view('comments/city_comments', compact('city', 'comments', 'total_comments'));
    }    

    public function show_comments_state($name='São Paulo'){
        $state = State::where('name', $name)->get()->first();
        $comments = $state->comments;
        $total_comments = $comments->count();
        return view('comments/state_comments', compact('state', 'comments', 'total_comments'));
    }    

    public function show_comments_country($name='Brasil'){
        $country = Country::where('name', $name)->get()->first();
        $comments = $country->comments;
        $total_comments = $comments->count();
        return view('comments/country_comments', compact('country', 'comments', 'total_comments'));
    }    

}
