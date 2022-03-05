 <x-guest-layout>
 <div class="register-form">
        <x-jet-validation-errors class="mb-4" />
        <form action="{{route('register')}}" method="POST">
            @csrf
            <h2 class="text-center mb-3">Registriraj se</h2> 
            <div class="form-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Ime" :value="name" required="required" required autofocus autocomplete="name">
            </div>      
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="email" placeholder="E-mail" :value="email" required="required">
            </div>
            <div class="form-group mb-4">
                <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="new-password" required="required">
            </div>
            <div class="form-group mb-4">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new_password" required="required">
            </div>
            <div class="form-group mb-4">
                <button type="submit" class="btn btn-dark btn-block">Potvrdi</button>
            </div>      
        </form>
    </div>
 </x-guest-layout>