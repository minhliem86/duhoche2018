<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Course;

class CourseRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return get_class(new Course);
    }
  // END

    public function randomCourse($columns=['*'], $take = 4, $with=[])
    {
        $query = $this->make($with);
        return $query->where('status',1)->orderByRaw("RAND()")->take($take)->get($columns);
    }
}
