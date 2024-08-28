<?php

use App\Http\Controllers\CarController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use App\Models\Product;

Route::get('/', function () {
  return view('welcome');
});

// Route::get('/w', function () {
//     return "Hello Larevel";
// });

// Route::get('cars/{id?}', function ($id = 0) {
//     return "car number is " . $id;
// })->wherenumber('id');

// Route::get('user/{name}/{age}', function ($name, $age) {

//     if ($age == 0) {
//         return "username is " . $name;

//     } else {
//         return "username is " . $name . " and age is " . $age;
//     }
// })->where(
//     [
//         'age' => '[0-9]+',
//         'name' => '[a-zA-Z]+',
//     ]
// );

// Route::get('date/{month}', function ($month) {
//     return "month is " . $month;

// })->whereIn('month', ['January', 'February', 'March']);


// Route::prefix('company')->group(function(){
//   Route::get('', function(){
//     return 'company index';

// });
// Route::get('IT', function(){
//   return 'company IT';

// });Route::get('Users', function(){
//   return 'company Users';

// });
// });


// Route::prefix('accounts')->group(function(){
//   Route::get('', function(){
//       return 'accounts index';
//   });

//   Route::get('admin', function(){
//       return 'accounts admin';
//   });

//   Route::get('users', function(){
//       return 'accounts users';
//   });
// });

// Route::prefix('cars')->group(function(){
//   Route::get('', function(){
//       return 'cars index';
//   });

//   Route::get('usa/ford', function(){
//       return 'usa ford';
//   });

//   Route::get('usa/tesla', function(){
//       return 'usa tesla';
//   });

//   Route::get('ger/merecedes', function(){
//     return 'ger merecedes';
// });

// Route::get('ger/audi', function(){
//   return 'ger audi';
// });

// Route::get('ger/volkswagen', function(){
//   return 'ger volkswagen';
// });
// });

// Route::fallback(function(){
//   return redirect('/');
// });

// Route::get('cv', function(){
//   return view('cv');
// });

// route::view('cv', 'cv');

// Route::get('link', function(){
//   $url = route('welcome');
//   return "<a href='$url'> go to welcome</a>";
// });
// Route::get('welcome', function(){
//   return 'welcome to Laravel';
// })->name('welcome');

// Route::get('login', function(){
//   return view('login');
// });

// Route::post('logincheck', function(){

//   return view('logincheck');
  
// })->name('logincheck');

// route::get('login', [Examplecontroller::class, 'login']);
// route::get('cv', [Examplecontroller::class, 'cv']);

Route::get('task3', function(){
  return view('task3');
});

Route::get('logged', function($name, $email, $subject, $message){
  return view('logged');

})->name('logged');

// if ($name == 0)
// if ($email == 0)
// if ($subject == 0)
// if ($message == 0)
// Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
// Route::post('cars', [CarController::class, 'store'])->name('cars.store');

Route::get('', function () {

  return view('welcome');
});




Route::get('', function () {

  return view('welcome');
});
Route::get('classes/create', [ClassesController::class, 'create'])->name('class.create');
Route::post('classes', [ClassesController::class, 'store'])->name('class.store');
Route::get('classes/{id}/edit', [ClassesController::class, 'edit'])->name('class.edit');
Route::get('classes', [ClassesController::class, 'index'])->name('class.index');
Route::put('Classes/{id}', [ClassesController::class, 'update'])->name('class.update');
Route::get('Classes/{id}/show', [ClassesController::class, 'show'])->name('class.show');
Route::get('Classes/{id}/delete', [ClassesController::class, 'destroy'])->name('class.destroy');
Route::get('Classes/trashed', [ClassesController::class, 'showdeleted'])->name('class.showdeleted');
Route::delete('delete', [classesController::class,'destroy'])->name('class.delete');

Route::patch('classes/{id}', [ClassesController::class, 'restore'])->name('class.restore');
Route::delete('classes/{id}', [ClassesController::class, 'forcedelete'])->name('class.forcedelete');

Route:: prefix('cars')->middleware('verified')->group(function(){
// Route::get('create', [CarController::class, 'create'])->name('cars.create');
Route::get('', [CarController::class, 'index'])->name('cars.index');
Route::post('', [CarController::class, 'store'])->name('cars.store');
Route::get('{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::post('', [CarController::class, 'store'])->name('cars.store');
Route::put('{id}', [CarController::class, 'update'])->name('cars.update');
Route::get('{id}/show', [CarController::class, 'show'])->name('cars.show');
Route::get('{id}/delete', [CarController::class, 'destroy'])->name('cars.destroy');
Route::get('trashed', [CarController::class, 'showdeleted'])->name('cars.showdeleted');

Route::patch('{id}', [CarController::class, 'restore'])->name('cars.restore');
Route::delete('{id}', [CarController::class, 'forcedelete'])->name('cars.forcedelete');
});
Route::group(
  [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
  ], function(){ 
    Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
  });

// Route::resource('cars', CarController::class);


Route::get('uploadform', [ExampleController::class, 'uploadform']);
Route::post('uploadform', [ExampleController::class, 'upload'])->name('uploadform');

Route::get('index', [ExampleController::class, 'index']);
Route::get('product/create', [ExampleController::class, 'create'])->name('product.create');
Route::post('product', [ExampleController::class, 'store'])->name('product.store');
Route::get('about', [ExampleController::class, 'about']);

Route::get('index', [ProductController::class, 'index']);
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product', [ProductController::class, 'store'])->name('product.store');
Route::get('about', [ProductController::class, 'about']);
Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::get('testonetoone', [ExampleController::class, 'test']);
Route::get('/download', function (Illuminate\Http\Request $request) {
  // $file = $request->input('file');
  // $path = public_path('assets/images/' . $file);
  // if (file_exists($path)) {
  //     return response()->download($path);
  // } else {
  //     abort(404, 'File not found');
  // }
});
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', function () {return view('contact');
});

Route::post('/contact', [App\Http\Controllers\HomeController::class, 'sendEmail'])->name('contact.send');
