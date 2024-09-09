<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class serviceCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $title;
    public $description;
    public $url;
    public $icon;

    public function __construct($id, $title, $description, $url, $icon)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->url = $url;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.service-card');
    }
}
