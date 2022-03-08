 <x-guest-layout>
    <div class="login-form">
    <x-jet-validation-errors class="mb-4" />
            <form action="{{route('login')}}" method="POST">
                @csrf
                <h2 class="text-center">Prijavi se</h2>       
                <div class="form-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="E-mail":value="old('email')" required autofocus>
                </div>
                <div class="form-group mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="required" required autocomplete="curremt-passwprd">
                </div>
                <div class="clearfix">
                    <label class="pull-left checkbox-inline" name="remember"><input type="checkbox"> Zapamti me</label>
                </div> 
                <div class="form-group mb-2 mt-4">
                    <button type="submit" class="btn btn-dark btn-block">Prijavi se</button>
                </div>
                <div>
                    <p class="text-center "><a href="{{route('register')}}" class="link-dark">Napravite račun</a></p>
                </div>        
            </form>
    </div>

 </x-guest-layout>