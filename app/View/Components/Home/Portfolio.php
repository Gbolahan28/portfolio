<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Css', 'VueJs'],
                'title' => 'Full Stack app with Laravel, Css and Vue 3',
                'image' => url('/img/providus.jpg'),
                'github' => 'https://providusbank.com/'
            ],
            [
                'category' => ['Laravel', 'Mysql'],
                'title' => 'Institute Portal',
                'image' => url('/img/cibn.jpg'),
                'github' => 'https://www.cibng.org/'
            ],
            [
                'category' => ['PHP', 'Laravel'],
                'title' => 'Providus bank website built with php',
                'image' => url('/img/laravel-rest-api.png'),
                'github' => 'https://providusbank.com/'
            ],
            [
                'category' => ['Bootstrap'],
                'title' => 'Tin dog app with bootstrap',
                'image' => url('/img/download.png'),
                'github' => 'https://github.com/Gbolahan28/tindog'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
