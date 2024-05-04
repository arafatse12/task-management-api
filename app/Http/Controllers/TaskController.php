<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Repositories\TaskRepo;
use Auth;
class TaskController extends Controller
{
    private $taskRepo;

    public function __construct(TaskRepo $taskRepo)
    {
        $this->taskRepo = $taskRepo;
    }

    public function index(Request $request)
    {
        $userId  = Auth::user()->id;
        $request['user_id'] = $userId;
        $task = $this->taskRepo->getByPaginate($request);
        return response()->json(returnData(2000, $task));
    }

    public function store(TaskRequest $request)
    {
        $validatedData = $request->all();
        $userId = Auth::id();
        $validatedData['user_id'] = $userId;
        $task = $this->taskRepo->create($validatedData);
        return response()->json(returnData(2000, $task, 'New task inserted successfully'));
    }

    public function update(TaskRequest $request, $primaryKey)
    {
        $task = $this->taskRepo->find($primaryKey);
        $this->taskRepo->update($task, $request->all());
        return response()->json(returnData(2000, $task, 'Successfully Task Update'));
    }


    public function destroy($primaryKey)
    {
        $this->taskRepo->delete($primaryKey);
        return response()->json(returnData(2000, null, 'Successfully Task deleted'));
    }
}
