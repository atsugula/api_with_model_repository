<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Repositories\ActivityRepository;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class ActivityController extends Controller
{

    private $repository;

    function __construct(ActivityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return json_encode($this->repository->all());
    }

    public function store(Request $request)
    {
        $this->validateData(count($request->all()));
        $this->repository->create($request->all());
        return json_encode(['message'=>'Activity has been saved.']);
    }

    public function show($id)
    {
        $activity = $this->repository->find($id);
        return json_encode($activity);
    }

    public function update(Request $request, Activity $activity)
    {
        $this->validateData(count($request->all()));
        $this->show($activity['id']);
        $this->repository->update($request->all(), $activity->id);
        return json_encode(['message'=>'Activity '.$activity['id'].' has been updated.']);
    }

    public function destroy($id)
    {
        $this->show($id);
        $this->repository->delete($id);
        return json_encode(['message'=>'Activity '.$id.' has been remove.']);
    }

    // Validar informacion o request vacio
    private function validateData($const){
        if ($const == 0) throw new BadRequestException('Empty data.', 400);
    }

}
