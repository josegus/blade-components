<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\AnonymousComponent;
use Illuminate\View\DynamicComponent;

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

Route::get('/biz/dashboard', function () {
    return view('business.dashboard');
});

Route::get('test', function () {
    /** @var \Illuminate\View\FileViewFinder $finder */
    $finder = app('view.finder');
    //dd($finder->);
    //view('components.button.primary')->render();

    $dc = new \Illuminate\View\AnonymousComponent('<x-button.primary>', []);
    dd($dc->render());

    /** @var \Illuminate\View\Compilers\BladeCompiler $bc */
    $bc = app('blade.compiler');
    //$bc->component(resource_path('button.primary'), DynamicComponent::class);
    //dd($bc->compile());

    //dd(view()->file(resource_path('views/components/button/primary.blade.php')))

    ob_start();
    //require resource_path('views/components/button/primary.blade.php');
    require storage_path('framework/views/4cb5237ca780628f9471420b32bed511ef83db65.php');
    $vars = ob_get_contents();
    ob_get_clean();
    dd($vars);

    dd(
        Blade::getClassComponentAliases(),
        Blade::getCustomDirectives(),
        Blade::getExtensions(),
        //Blade::check('hi', ['foo' => 'bar']),
        Blade::compileString('test'),
        Blade::getPath(),
    );
});
