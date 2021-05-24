<?php

namespace App\View\Components;

use App\Model\Catalog;
use Illuminate\View\Component;

class Footer extends Component
{
    protected $catalog;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Catalog $catalog)
    {
        $this->catalog = $catalog->all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.footer', ['catalog' => $this->catalog]);
    }
}
