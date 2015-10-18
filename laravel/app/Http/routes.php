<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// use namespace App;


Route::get('/abc', function()
{
    $game = new Game;
    $game->name = 'Assassins Creed';
    $game->description = 'Assassins VS templars.';
    $game->save();


    
    $game->name = 'Assassins Creed 2';
    $game->description = 'Requiescat in pace, Ezio.';
    $game->save();

});

Route::get('/', function()
{
    //$data['squirrel'] = $squirrel;

    return View('home');
});


// app/routes.php

Route::get('example', function()
{
    return URL::to('another/route');
});

// app/routes.php

Route::get('/current/url', function()
{
    return URL::current();
});

/*
Route::get('/test', function()
{


	$game = new Game;
    $game->name = 'Assassins Creed';
    $game->description = 'Assassins VS templars.';
    $game->save();
// 	Schema::create('example1', function($table)
// {
//     $table->integer('age');
//     $table->integer('weight');
//     $table->index(array('age', 'weight'));
// });
	//Schema::rename('example', 'idiots');
	//return view('simple');


});

*/

Route::get('/sec', array('https',function () {
        return 'Secret squirrel!';
    }
));

Route::get('/fr',function(){
		return Redirect::to('/framgia');

});

Route::get('/asd', 'ArticleController@showIndex');



Route::get('laptops/{brand?}',function($brand='HP'){
	//if ($brand==null)return 'all brands are good!!';
	 return "{$brand} is a good laptop";


});
/*
Route::get('/{squirrel}', function($squirrel)
{
    $data['squirrel'] = $squirrel;

    return View::make('simple', $data);
});
*/
/*
Route::get('/{test}',function($test){

		$data['test']=$test;
		return view('simple2',$data);

});
*/
$logic = function(){
	 $response=Response('Vanish!!!',200);
	 $response->setTtl(1);
	    //$response->setTtl(6);

	return $response;
	};

Route::get('my/page', $logic) ;

Route::get('/framgia',function(){

	  $data = array('iron', 'man', 'rocks');
    return Response::json($data);

	//return 'framgia Bangladesh !!!';
});

/*
Route::get('laptops/{brand?}',function($brand=null){
	if ($brand==null)return 'all brands are good!!';
	 return "{$brand} is a good laptop";

});*/
