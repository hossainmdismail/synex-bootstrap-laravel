<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class indexBlog extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $author,
        public $title,
        public $image,
        public $slug,
        public $count
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.index-blog');
    }
}
