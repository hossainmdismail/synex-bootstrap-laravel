<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class projectCard extends Component
{
    /**
     * Create a new component instance.
     */
    // public array $project;
    public function __construct(
        public string $name,
        public string $title,
        public string $description,
        public string $category,
        public string $image,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project-card');
    }
}
