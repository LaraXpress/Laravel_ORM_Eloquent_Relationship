<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::get('/user', function(){
    //factory(\App\User::class, 3)->create();
    $users = \App\User::all();
    return view('users.index', compact('users'));
});
*/

// Route::get('/user', function(){
//     $user    = factory(\App\User::class)->create();
//     $address = new \App\Address([
//         'state'   => 'LV',
//         'country' => 'USA'
//     ]);
//     $address->user()->associate($user);
//     $address->save();
//     //$users = \App\User::all();
//     //$users = \App\User::with('address')->get();
//     $users = \App\User::with('addresses')->get();
//     $users[0]->address()->create([
//         'state'   => 'LV',
//         'country' => 'USA'
//     ]);
//     return view('users.index', compact('users'));
// });

Route::get('/address', function(){
    /*
    \App\Address::create([
        'user_id' => 1,
        'state'   => 'NY',
        'country' => 'USA'
    ]);

    \App\Address::create([
        'user_id' => 2,
        'state'   => 'AZ',
        'country' => 'USA'
    ]);

    \App\Address::create([
        'user_id' => 3,
        'state'   => 'WC',
        'country' => 'USA'
    ]);
    */
    $address = \App\Address::all();
    return view('users.address', compact('address'));
});

Route::get('/post', function(){
    /*
    \App\Post::create([
        'user_id' => 1,
        'title'   => 'Bangladesh is beloved country'
    ]);

    \App\Post::create([
        'user_id' => 2,
        'title'   => 'India is beloved country'
    ]);
    \App\Post::create([
        'user_id' => 3,
        'title'   => 'Pakistan is beloved country'
    ]);
    */
    // $posts = \App\Post::all();
    // \App\Post::create([       
    //     'title'   => 'India is beloved country'
    // ]);
    $posts = \App\Post::get();
    return view('users.post', compact('posts'));    
});


Route::get('/user', function(){
    //$users =  \App\User::has('posts')->with('posts')->get();
    $users =  \App\User::doesntHave('posts')->with('posts')->get();
    // $users[2]->posts()->create([
    //     'title' => 'Bangladesh vs Maldives SAAF Tournament today'
    // ]);
    return view('users.index', compact('users'));
});