<?php

namespace App\Http\Livewire;
use App\Models\Post;
use Livewire\Component;

class Createpost extends Component
{
    public $open=false;
    public $title,$content;
    protected $rules=[
        'title'=>'required|max:10',
        'content'=>'required|min:10'

    ];
    public function render()
    {
        return view('livewire.createpost');
    }
    public function updated($propertyName){
      $this->validateOnly($propertyName);
    }
    public function save(){
        $this->validate();
        Post::create([
            'title'=> $this->title,
            'content'=>$this->content
        ]);
        $this->reset(['open','title','content']);
        $this->emitTo('showpost','render');
        $this->emit('alert','El post se registó correctamente');
       
    }
   
}
