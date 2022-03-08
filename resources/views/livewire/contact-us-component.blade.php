
<div class="contact-clean">
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
    @endif
    <form name="frm-contact" wire:submit.prevent="sendMessage">
        <h2 class="text-center">Kontaktirajte nas</h2>
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Ime" wire:model="name" >
            @error('name') <p class="text-danger">{{$message}}</p> @enderror
        </div>

        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" wire:model="email">
            @error('email') <p class="text-danger">{{$message}}</p> @enderror
        </div>

        <div class="form-group">
            <textarea class="form-control" name="comment" placeholder="Poruka" rows="14" wire:model="comment"></textarea>
            @error('comment') <p class="text-danger">{{$message}}</p> @enderror
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Posalji </button>
        </div>
     </form>
</div>
