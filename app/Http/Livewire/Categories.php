<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    public $search;
    public $isOpen = 0;
    public $categoryId,$name;

    public function render()
    {
        $searchParams = '%'.$this->search.'%';
        return view('livewire.categories',[
            'categories' => Category::where('name','like',$searchParams)->paginate(5)
        ]);
    }

    public function showModal()
    {
        $this->isOpen = true;
    }

    public function hideModal()
    {
        $this->isOpen = false;
    }

    public function store()
    {
        $this->validate(
            [
                'name' => 'required',
            ]
        );
        Category::updateOrCreate(['id'=>$this->categoryId],[
            'name' => $this->name,
        ]);
        $this->hideModal();
        session()->flash('info' , $this->categoryId ? 'Update Kategori berhasil!' : 'Kategori berhasil dibuat!');
        $this->categoryId = "";
        $this->name = "";
    }

    public function edit($id)
    {
        $post = Category::findOrFail($id);
        $this->categoryId = $id;
        $this->name = $post->name;
        $this->showModal();
    }

}
