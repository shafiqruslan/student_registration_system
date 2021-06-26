<x-guest-layout>
    <x-auth-card class="sm:max-w-xl">
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-64" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
        
        <div class="grid grid-cols-2 gap-x-6">
            <!-- Name -->
            <div class="mt-4">
                <x-auth-label for="name" :value="__('Name')" />

                <x-auth-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-auth-label for="email" :value="__('Email')" />

                <x-auth-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-auth-label for="password" :value="__('Password')" />

                <x-auth-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-auth-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-auth-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Address -->
            <div class="mt-4">
                <x-auth-label for="address" :value="__('Address')" />
                <x-auth-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" />
            </div>

            <!-- Postcode -->
            <div class="mt-4">
                <x-auth-label for="postcode" :value="__('Postcode')" />
                <x-auth-input id="postcode" class="block mt-1 w-full" type="text" name="postcode" :value="old('postcode')" />
            </div>

            <!-- State -->
            <div class="mt-4">
                <x-auth-label for="state" :value="__('State')" />
                <x-auth-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" />
            </div>

            <!-- Phone Number -->
            <div class="mt-4">
                <x-auth-label for="phone_number" :value="__('Phone Number')" />
                <x-auth-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" />
            </div>
        </div>

            <div class="flex items-center justify-end mt-12">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-submit-button class="ml-4">
                    {{ __('Register') }}
                </x-submit-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
