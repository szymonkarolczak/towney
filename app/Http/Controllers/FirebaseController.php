<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/towney-1e728-firebase-adminsdk-4mekb-101902dd90.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://towney-1e728-default-rtdb.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('blog/posts')
        ->push([
        'title' => 'Test title' ,
        'category' => 'Towney'
        ]);
        echo '<pre>';
        print_r($newPost->getvalue());
    }

}
