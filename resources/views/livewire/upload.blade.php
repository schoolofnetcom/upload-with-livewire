<div>
    <h1>Upload with Livewire</h1>

    <form>
        <input type="file">
        <button type="submit">Enviar</button>
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
