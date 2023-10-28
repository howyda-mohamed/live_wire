<div>
    <div>

        @if ($successMessage)
            <div class="alert alert-success">
                {{ $successMessage }}
            </div>
        @endif
        <form wire:submit.prevent="submitForm" id="form">
            <h1> comment</h1>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" wire:model="body" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('body')
                    <div class="col-sm-6">
                        <small id="passwordHelp" class="text-danger">
                            {{ $message }}
                        </small>
                    </div>
                @enderror
            </div>
            <button wire:loading.attr="disabled"  class="btn btn-primary">
                <span wire:loading.remove >Save</span>
                <span wire:loading >Saving.............</span>
            </button>

        </form>

    </div>



</div>
<div>
    <div>
        <h1>Comments</h1>

        @foreach ($comments as $com)

            <div class="card">
                <div class="card-body">
                    <h2>{{ $com->name }}</h2>
                    <p class="card-text">{{ $com->body }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>
