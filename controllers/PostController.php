<?php 


class PostController 
{
    public function index() 
    {
        $posts = App::get('database')->SelectAll('post');

        return view('admin', compact('posts')); 
    }

    public function store()
    {
        
        App::get('database')->insert('post', [      
            'title' => $_POST['title'],
            'date' => $_POST['date'],
            'description' => $_POST['message'],
            // 'image' => $_POST['image']
         
        ]);
        
        
        header('Location: /admin');
    }

    public function delete()
    {
        App::get('database')->deletePost('post', $_POST);

        header('Location: /admin');
    }

    public function update() 
    {
        App::get('database')->updatePost('post', [
            'title' => $_POST['title'],
            'message' => $_POST['description'],
            'date' => $_POST['date']
        ]);
    }
}