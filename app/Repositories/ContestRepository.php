<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Contest;

class ContestRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return get_class(new Contest);
    }
  // END

    public function getDataJoinCity($columns = ['*'])
    {
        $data = \DB::table('duhoche2018.contests as contests');
        $data->join('corporat_ref.city as cities', 'cities.id', '=', 'contests.city')
          ->select($columns);
        return $data;
    }

    public function collectDataCity()
    {
        return $this->model->join('corporat_ref.city as cities','city', '=', 'cities.id')->select(['contests.id', 'contests.fullname', 'contests.dob', 'contests.email', 'contests.phone', 'contests.school', 'contests.quocgia', 'cities.name as name_city', 'contests.created_at', 'contests.user_post'])->get();
    }
}
