<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Mail\EmailController;
use Illuminate\Support\Facades\Mail;

class PublicConctroller extends Controller
{
    public function homepage() {
        $films = array_slice($this->movies, 0, 3);
        return view('welcome', ['movies' => $films]);
    }

    public function contact(){
        return view('contact');
    }
    
    public function contactSubmit(Request $request){
        $title = $request->input('title');
        $director = $request->director;
        $description = $request->description;

        try{
            Mail::to('bot@bot.com')->send(new EmailController($title, $director, $description));
            return redirect(route('homepage'))->with('success');
        }catch(Exception $error){
            return redirect()->back()->with('error');
        }
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
}
