<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\DataItems;

class ShowItem extends Component
{
    public $dataItem;

    public function __construct(DataItems $dataItem)
    {
        $this->dataItem = $dataItem;
    }

    public function render()
    {
        return view('components.show-item');
    }
}
