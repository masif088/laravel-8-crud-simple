<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormBlog extends Component
{
    use WithFileUploads;

    public $action;
    public $data;
    public $dataId;
    public $file;

    protected function getRules()
    {
        if ($this->action=="create"){
            $rules=[
                'data.title' => 'required|max:256',
                'data.content' => 'required',
                'file'=> 'required'
            ];
        }else{
            $rules=[
                'data.title' => 'required|max:256',
                'data.content' => 'required',
            ];
        }
        return $rules;
    }

    public function mount(){
        if (!!$this->dataId){
            $this->data=Blog::findOrFail($this->dataId);
        }
    }

    public function create(){
//        dd($this->data);
        $this->resetErrorBag();
        $this->validate();

        $this->data['slug']=Str::slug($this->data['title']);
        $this->data['user_id']=Auth::id();
        $this->data['thumbnail'] = md5($this->data['title']).'.'.$this->file->getClientOriginalExtension();
        $this->file->storeAs('public/blog', $this->data['thumbnail']);
//        unset($this->data['thumbnail_photo']);
        Blog::create($this->data);

        $this->reset('data');
        $this->redirect('http://google.com');
    }

    public function render()
    {
        return view('livewire.form-blog');
    }
}
