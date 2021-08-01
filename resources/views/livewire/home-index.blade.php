<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <form wire:submit.prevent="save">
        <input type="file" wire:model="photo">
    
        @error('photo') <span class="error">{{ $message }}</span> @enderror
    
        <button type="submit">Convert Photo</button>
    </form>

    @if ($photo)
        Photo Preview:
        <br>
        <img src="{{ $photo->temporaryUrl() }}" width="540px">

        <br>
        <p>{{$result}}</p>
    @endif
</div>
