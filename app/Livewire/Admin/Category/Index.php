<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $category= Category::orderBy('id','DESC')->paginate(5);
        return view('livewire.admin.category.index',["category" => $category]);
    }
}
