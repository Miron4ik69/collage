<?php 

class PagesController
{
    public function home() 
    {
        
       $results = App::get('database')->selectLast('post');

       return view('index', compact('results')); 
    }

    public function news() 
    {
        $results = App::get('database')->selectAll('post');
        return view('news', compact('results'));
    }

    public function post()
    {
        return view('post', '');
    }

    public function faculties() 
    {
        return view('faculties', '');
    }   

    public function login() 
    {
        return view('login', '');
    }

}