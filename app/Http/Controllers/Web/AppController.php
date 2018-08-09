<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
    // It simply just returns our app view. Vue will be initialized and Vue/VueRouter will take care of the rest.
    public function getApp() {
        return view('app');
    }
}
