<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use App\Models\Worker;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        return view('worker.index', compact('workers'));

    }

     public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));
                         
    }
      public function store(StoreRequest $request)
      {
        $data = $request->validated();
        
        $data['is_married'] = isset($data['is_married']) ? true : false;

        Worker::create($data);
        
        return redirect()->route('worker.index');
      }
     
     
      public function create()
    {
       return view('worker.create');
        
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
