<div>
    @if ($successMessage)
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif
    <form wire:submit.prevent="submitForm" id="form">
        <h1>Contact Us</h1>
        <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" wire:model="name" class="form-control" id="name" placeholder="Enter user name">
            @error('name')
                <div class="col-sm-6">
                    <small id="passwordHelp" class="text-danger">
                        {{ $message }}
                    </small>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" wire:model="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Enter email">
            @error('email')
                <div class="col-sm-6">
                    <small id="passwordHelp" class="text-danger">
                        {{ $message }}
                    </small>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" wire:model="contacts" id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('contacts')
                <div class="col-sm-6">
                    <small id="passwordHelp" class="text-danger">
                        {{ $message }}
                    </small>
                </div>
            @enderror
        </div>
        <button wire:loading.attr="disabled" wire:target="submitForm" class="btn btn-primary">
            <span wire:loading.remove wire:target="submitForm">Save</span>
            <span wire:loading wire:target="submitForm">Saving.............</span>
        </button>

    </form>

</div>

   
    
</div>
