{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('First_name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- LastName -->
        <div>
            <x-input-label for="last_name" :value="__('Last_Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="lastname" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Country -->
        <div class="mt-4">
            <x-input-label for="country" :value="__('Country')" />
            <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autocomplete="country" />
            <x-input-error :messages="$errors->get('country')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<x-app-layout>
 <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{route('register')}}" rel="nofollow">Home</a>                    
                    <span></span> Register
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Create an Account</h3>
                                        </div>                                        
                                        <form method="post" action="{{route('register')}}>
                                        @csrf
                                            <div class="form-group">
                                                <input type="text" required="" name="first-name" placeholder="First-Name" :value="old('first-name')" required autofocus autocomplete="first-name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="last-name" placeholder="Last-Name" :value="old('last-name')" required autofocus autocomplete="last-name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="address" placeholder="Address" :value="old('address')" required autofocus autocomplete="address">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="country" placeholder="Country" :value="old('country')" required autofocus autocomplete="country">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" name="email" placeholder="Email" :value="old('email')" required>
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                                            </div>
                                            <div class="form-group">
                                                <input required="" type="password" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="">
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
                                                    </div>
                                                </div>
                                                <a href="privacy-policy.html"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Submit &amp; Register</button>
                                            </div>
                                        </form>                                        
                                        <div class="text-muted text-center">Already have an account? <a href="{{route('login')}}">Sign in now</a></div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-6">
                               <img src="assets/imgs/login.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
