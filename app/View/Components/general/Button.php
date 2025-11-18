<?php

namespace App\View\Components\general;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $title;
    public ?string $icon;
    public string $color;
    
    /**
     * Create a new component instance.
     */
    public function __construct(
        string $title,
        string $color = "",
        string $icon =  "",
    ) {
        $this->title = $title;
        $this->icon = $icon;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.general.button');
    }
}
