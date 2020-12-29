<div>
    <h1>Upload with Livewire</h1>

    <form wire:submit.prevent="upload">
        <input type="file" wire:model="newFile">
        <button type="submit">Enviar</button>

        @if($errors->has('newFile'))
            <p class="error">{{ $errors->first('newFile') }}</p>
        @endif
    </form>

    <div class="files">
        @if(isset($files) && count($files))
            @foreach($files as $file)
                <div>
                    <img src="{{ \Storage::disk('files')->url($file->filename) }}" alt="">
                    <p class="filename">
                        {{ $file->filename }}
                    </p>
                </div>
            @endforeach
        @endif
    </div>

</div>
