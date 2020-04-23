<?php 


class PostController 
{
    public function index() 
    {
        $results = App::get('database')->SelectAll('post');

        return view('admin', compact('results')); 
    }
    public function store()
    {
        App::get('database')->insert('post', [

            'title' => $_POST['title'],
            // 'date' => $_POST['date'],
            'description' => $_POST['message'],
            // 'image' => $_POST['image']
         
        ]);
        
        
        header('Location: /admin');
    }
}