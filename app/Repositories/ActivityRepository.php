<?php

namespace App\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use App\Models\Activity;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Throwable;

class ActivityRepository implements BaseRepositoryInterface {

    protected $model;

    function __construct(Activity $model){
        $this->model = $model;
    }

    function all(){
        return $this->model->all();
    }

    function create($data){
        // Organizamos el consecutivo
        $next = count($this->all())+1;
        $data['consecutive'] = 'F'.$next;
        $this->validateTime($data['final_hour'], $data['start_time']);
        return $this->model->create($data);
    }

    function update($data, $id){
        $this->validateTime($data['final_hour'], $data['start_time']);
        return $this->model->where('id',$id)->update($data);
    }

    function delete($id){
        return $this->model->destroy($id);
    }

    function find($id){
        $activity = $this->model->find($id);
        if (null == $activity) throw new BadRequestException('Not found.', 206);
        return $activity;
    }

    // La hora final debe ser mayor a la hora inicial
    function validateTime($end, $start){
        $dateEnd = new Carbon($end);
        $dateStart = new Carbon($start);
        if ($dateStart >= $dateEnd) throw new BadRequestException('The end time must be greater than the start time.',400);
    }

}

?>
