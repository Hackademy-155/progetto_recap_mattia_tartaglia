<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        return view("movies.index", ['movies' => $this->movies]);
    }
    
    public $movies=[
        
        [
            'id' => 1,
            'title' => 'Inception',
            'img' => '/img/inception.jpg',
            'description' => 'Un viaggio all\'interno del subconscio umano',
            'director' => 'Nolan',
            'released_at' => 2010,
            'genre' => 'Fantasy'
        ],
        [
            'id'=>2,
            'title' => 'Il grande Gatsby',
            'img' => '/img/gatsby.jpg',
            'description' => 'La storia di Jack Gatsby',
            'director' => 'Luhrmann',
            'released_at' => 2013,
            'genre' => 'Drama'
        ],
        [
            'id'=>3,
            'title' => 'Batman Begins',
            'img' => '/img/batman.jpg',
            'description' => 'L\'origine del guardiano notturno di Gotham',
            'director' => 'Nolan',
            'released_at' => 2005,
            'genre' => 'Azione'
        ],
    ];

    public function show($id){
        foreach($this->movies as $movie){
            if($movie['id']==$id){
                return view('movies.show', ['movie'=>$movie]);
            }
        }
    }
}
