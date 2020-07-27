Route::get('/posts/{post}', function () {
    return view('post');
});

Route::get('/posts/{post}', function ($post) {
    return $post;
});

Route::get('/posts/{post}', function ($post) {

    $post = [

        'my-first-post' => 'Hello,this is my first blog post'

        'my-second-post' => 'How I am getting the hang if this blogging thing!'

    ];

    if(! array_key_exists($post, $posts)) {
        abort(404,'Sorry,that post was not here ')
    }

    return view('post', [

        'post' => $posts[$post]

    ]);

});
*/

Route::get('/posts/{post}', 'PostController@show');