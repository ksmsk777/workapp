<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Models\Worker;
use Doctrine\Inflector\Rules\Word;
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

  public function update(UpdateRequest $request, Worker $worker)
  {
    $data = $request->validated();
    $data['is_married'] = isset($data['is_married']) ? true : false;
    
    $worker->update($data);

     return redirect()->route('worker.show', $worker->id);
   
  }

  public function edit(Worker $worker)
  {
    return view('worker.edit', compact('worker'));
  }

  public function delete(Worker $worker)
  {
    $worker->delete();

    return redirect()->route('worker.index');
  }
}
