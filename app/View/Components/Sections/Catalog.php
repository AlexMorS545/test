<?php

namespace App\View\Components\Sections;

use App\Model\Catalog as AppCatalog;
use Illuminate\View\Component;

class Catalog extends Component
{
    protected $catalog;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(AppCatalog $catalog)
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
        return view('components.sections.catalog', ['catalog' => $this->catalog]);
    }
}
