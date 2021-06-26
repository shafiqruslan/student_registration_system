<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student') }}
        </h2>
    </x-slot>

    @permission('users-update')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">    
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Edit</h3>
                        <p class="mt-1 text-sm text-gray-600">
                        This information can be updated.
                        </p>
                    </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                    @if ($errors->any())
                        <x-alert-danger>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </x-alert-danger>
                    @endif
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div>
                                <x-label for="name" :value="__('Name')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}" required autofocus />
                            </div>
                            <div>
                                <x-label for="email" :value="__('Email')" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" required />
                            </div>
                            <div>
                                <x-label for="address" :value="__('Address')" />
                                <x-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ $user->address }}"/>
                            </div>
                            <div>
                                <x-label for="postcode" :value="__('Postcode')" />
                                <x-input id="postcode" class="block mt-1 w-full" type="text" name="postcode" value="{{ $user->postcode }}"/>
                            </div>
                            <div>
                                <x-label for="state" :value="__('State')" />
                                <x-input id="state" class="block mt-1 w-full" type="text" name="state" value="{{ $user->state }}"/>
                            </div>
                            <div>
                                <x-label for="phone_number" :value="__('Phone Number')" />
                                <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" value="{{ $user->phone_number }}"/>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <x-submit-button class="ml-4">
                                {{ __('Edit') }}
                            </x-submit-button>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    @endpermission

</x-app-layout>
