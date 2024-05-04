<?php

namespace App\Repositories;

use App\Models\Task;
use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class TaskRepo extends Repository
{
    /**
     * @inheritDoc
     */
    public function model()
    {
        return Task::class;
    }

    public function getByPaginate($request) : LengthAwarePaginator
    {
        $pagination = $request->per_page ?? 10;
        $filter = $request->keyword;
        $userId  = $request->user_id;
        return $this->query()
            ->when($filter,function (Builder $task) use ($filter) {
                return $task->where('status', 'like', "%$filter%")
                    ->orWhere('due_date', 'like', "%$filter%");
            })
            ->where('user_id','=',$userId)
            ->orderBy(sortBy($request)->column, sortBy($request)->sort)
            ->paginate($pagination);
    }


}
?>
