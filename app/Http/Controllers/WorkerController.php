<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        dd($workers);

    }

     public function show()
    {
         $worker = Worker::find(2);
         dd($worker->toarray() );
                
    }
      public function create()
    {
        $worker =    [
        'name' => 'Mark',
        'surname' => 'Markov',
        'email' => 'marko@ya.ru',
        'age' => '20',
        'description' => 'some  t amet.', 
        'is_married' => 'false',
        ];     

        Worker::create($worker);
        
        return 'Worker was created';
        
    }
      public function update()
    {
          $worker = Worker::find(2);
          
            $worker->update([
                'name' => 'Gavril',
            ]);
         
            return 'was updated';

        
    }
      public function delete()
    {
         $worker = Worker::find(2);

        return 'Worker was deleted';

        
    }
}
