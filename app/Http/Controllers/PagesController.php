<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $photos = [
            ['name' => 'Stationary',
            'description' => 'A yellow pencil with envelopes on a clean, blue backdrop!',
            'image' => 'portfolio-1.jpg'],

            ['name' => 'Ice Cream',
            'description' => 'A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!',
            'image' => 'portfolio-2.jpg'],

            ['name' => 'Strawberries',
            'description' => 'Strawberries are such a tasty snack, especially with a little sugar on top!',
            'image' => 'portfolio-3.jpg'],

            ['name' => 'Workspace',
            'description' => 'A yellow workspace with some scissors, pencils, and other objects.',
            'image' => 'portfolio-4.jpg'],
        ];
        return view('index')->with('photos',$photos);
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function contact(){
        return view('contact');
    }
}
