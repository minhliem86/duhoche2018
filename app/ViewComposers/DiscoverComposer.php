<?php
namespace App\ViewComposers;
use Illuminate\View\View;
use App\Repositories\CountryRepository;

class DiscoverComposer{

    public $country;

    public function __construct(CountryRepository $country)
    {
        $this->country = $country;
    }

    public function compose(View $view)
    {
        $country_composer = $this->country->getComposer(['title','slug', 'img_url']);
        $view->with('country_composer', $country_composer);
    }
}
