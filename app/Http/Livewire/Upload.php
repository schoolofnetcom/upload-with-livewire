<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\File;
use Livewire\WithFileUploads;
class Upload extends Component
{
    use WithFileUploads;

    public $files = [];
    public $newFile;

    public function mount() {
        $this->files = File::all();
    }

    // public function updatedNewFile() {
    //     $this->validate(['newFile' => 'image|max:20']);
    // }

    public function upload() {
        // dd($this->newFile);
        $this->validate(['newFile' => 'image|max:50']);
        $filename = $this->newFile->store('/', 'files');
        File::create(['filename' => $filename]);
        $this->files = File::all();
    }

    public function render()
    {
        return view('livewire.upload');
    }
}
