<?php

namespace App\View\Components\Sections;

use App\Model\News as AppNews;
use Illuminate\View\Component;

class News extends Component
{
    protected $news;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(AppNews $news)
    {
        $this->news = $news->all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $this->title = 'Новости';
        return view('components.sections.news', ['news' => $this->news, 'title' => $this->title]);
    }
}
