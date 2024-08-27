<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class blog extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $title,
        public $slug,
        public $category,
        public $date,
        public $views,
        public $image,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog');
    }
}
