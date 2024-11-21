<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageSlider extends Component
{
    public array $images;

    public function __construct(array $images)
    {
        $this->images = $images;
    }

    public function render()
    {
        return view('components.image-slider');
    }
}

