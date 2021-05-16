<div class="border-blue link is-rounded p-2 mb-4">
    <form method="POST" action="/tweets">
        @csrf
        <textarea 
            class="width-100 textarea border-none" 
            name="body" 
            placeholder="What's up Doc?"
            required
                
        ></textarea>

        <hr class="my-4" />
    
        <div class="field">
            <label class="label" for="body">Tags</label>

            <div class="control">
                <select 
                {{-- Return array "tags[]" for multiple choice --}}
                    name="tags[]"
                    {{-- multiple --}}
                > 

                    @foreach ($tags as $tag)
                        <option value={{ $tag->id }}>{{ $tag->name }}</option>
                    @endforeach
                </select>

                @if ($errors->has('tags')) 
                {{-- @error('tags') @enderror --}}
                    <p class="help id-danger">{{ $errors->first('tags') }}</p>
                @endif
            </div>
        </div>


        @if ($errors->has('tags')) 
        {{-- @error('tags') @enderror --}}
            <p class="help id-danger">{{ $errors->first('tags') }}</p>
        @endif

        <div class="is-flex is-justify-content-space-between">
            
            <img 
                src="{{ auth()->user()->avatar }}" 
                alt="Profile picture" 
                class="rounded-full p-1 width-8 shadow"
            >
            <button type="submit" class="button has-background-info-dark shadow py-2 px-2 text-white">Tweety !</button>
        </div>
    </form>

    @error('body')
        <p class="is-danger text-sm">{{ $message }}</p>
    @enderror

</div>