<?php

// use App\Model\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// // database raw sql query
// Route::get('/read', function() {
//     $results = DB::select('select * from users');
//     foreach ($results as $user) {
//         echo "name is ".$user->name . "and email is ".$user->email ."</br>";
//     }
// });

// // insert data

// Route::get('/insert', function() {
//     DB::insert('insert into users (name, email, password) value (?,?,?)', ['dev_test', 'dev@gmail.com', '12345']);
// });

// // update data 

// Route::get('/update', function() {
//     $affected = DB::update('update users set name = "QA" where id = ?', ['1']);
//     return "there is".$affected ."update";
// });

// // delete data

// Route::get('/delete', function() {
//     $deleted = DB::delete('delete from users where id = ?', [2]);
//     return "there is ".$deleted ."delete";
// });

// // Eloquent Database ORM 
// Route::get('/basicinert', function() {
//     $post =new Post;
//     $post->title = 'New Eloquent title insert here';
//     $post->content = 'Eloquent is not difficult';
//     $post->save();
// });

// // Eloquent update
// Route::get('basicinsertupdate', function() {
//     $post = Post::find(1);
//     $post->title = 'New Eloquent title insert here';
//     $post->content = 'Eloquent is easy';
//     $post->save();
// });

// // Eloquent create as mass 
// Route::get('createmass', function() {
//     Post::create(['title'=>'the create mass assignment', 
//                     'content'=>'here is the mass assignment creation']);
// });

// // Eloquent read all 
// Route::get('/readall', function() {
//     $posts=Post::all();
//     foreach($posts as $post) {
//         echo "Read title" . $post->time . " content ". $post->content ."<br>";
//     }
// });

// // Eloquent reading / finding with constraints
// Route::get('/find', function() {
//     $post=Post::find(2);
//     return "this is title : ". $post->title;
// });

// // the other way
// Route::get('/findwhere', function() {
//     $post = Post::where('id', 1)->orderBy('id', 'desc')->take(1)->get();
//     foreach($posts as $post) {
//         echo $post->title . $post->content . $post->id;
//     }
// });
// // more way to retrieve data 
// Route::get('findmore', function() {
//     $posts=Post::where('title', 'New Eloquent title insert 2')->firstOrFail();
//     return $posts;
// });

// // update data with Eloquent
// Route::get('updateeloquent', function() {
//     Post::where('id', 3)->where('title', 'abc')->update(['content'=>'this is update from eloquent', 
//             'title'=>'the create mass assignment']);
// });

// // delete eloquent 
// Route::get('deleteeloquent', function() {
//     $post=Post::find(2);
//     $post->delete();
// });
// // the other way
// Route::get('destroyeloquent', function() {
//     Post::destroy([1,2,3]);
// });

// // soft deleting 
// Route::get('softdelete', function() {
//     Post::find(2)->delete();
// });

// // the other way
// Route::get('readsoftdelete', function() {
//     $posts = Post::onlyTrashed()->get();
//     foreach($posts as $post) {
//         echo "read title" . $post->time . "content: ". $post->content. "deleted_at" .$post->deleted_at;
//     }
// });

// // restoreing deleted 
// Route::get('restore', function() {
//     Post::withTrashed()->restore();
// });

// // the other way
// Route::get('softdelete', function() {
//     Post::find(3)->delete();
// });

// // the other way is 
// Route::get('restore_id', function() {
//     Post::withTrashed()->where('id', 2)->restore();
// });

// // Eloquent relationship of post
// Route::get('user/{id}/post', function() {
//     return User::find($id)->post->title;
// });

// // Eloquent one relationship of user 
// Route::get('post/{id}/user', function($id) {
//     return Post::find($id)->user->name;
// });

// // Eloquent one to many relationship of post 
// Route::get('posts', function() {
//     $user = User::find(1);
//     foreach($user->posts as $post) {
//         echo $post->title . $post->content;
//     }
// });