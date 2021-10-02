<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
class Showpost extends Component
{
    public $buscar;
    public $sort='id';
    public $direction='desc';
    protected $listeners=['render'=>'render'];
    public function render()
    {
        $posts= Post::where('title','like','%'.$this->buscar.'%')
        ->orWhere('content','like','%'.$this->buscar.'%')
        ->orderBy($this->sort,$this->direction)
        ->get();
        return view('livewire.showpost',compact('posts'));
    }
    public function order($sort){
        if ($this->sort== $sort) {
            if ($this->direction=='desc') {
                $this->direction='asc';
            } else {
                $this->derection='desc';
            }
            
        } else {
            $this->sort=$sort;
            $this->direction='desc';
        }
        
        
    }
}
