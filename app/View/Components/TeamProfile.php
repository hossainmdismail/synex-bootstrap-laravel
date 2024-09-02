<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TeamProfile extends Component
{
    /**
     * Create a new component instance.
     */

    public $name;
    public $path;
    public $bio;
    public $profile;
    public $links;

    public function __construct($name, $path, $bio, $profile, $links)
    {
        $this->name = $name;
        $this->path = $path;
        $this->bio = $bio;
        $this->profile = $profile;
        $this->links = $links; // Assign the new array to the property
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.team-profile');
    }
}
