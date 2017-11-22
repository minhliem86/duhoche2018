<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Country;

class CountryRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return get_class(new Country);
    }
  // END

    public function getComposer($columns=['*'])
    {
        return $this->model->where('status',1)->get($columns);
    }
}
