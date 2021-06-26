<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student') }}
        </h2>
    </x-slot>

@permission('users-read')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">    
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">View</h3>
                    <p class="mt-1 text-sm text-gray-600">
                    This information can be read only
                    </p>
                </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                 <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form>
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div>
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full bg-gray-100" type="text" name="name" value="{{ $user->name }}" required autofocus readonly/>
                        </div>
                        <div>
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full bg-gray-100" type="email" name="email" value="{{ $user->email }}" required readonly/>
                        </div>
                        <div>
                            <x-label for="address" :value="__('Address')" />
                            <x-input id="address" class="block mt-1 w-full bg-gray-100" type="text" name="address" value="{{ $user->address }}" readonly/>
                        </div>
                        <div>
                            <x-label for="postcode" :value="__('Postcode')" />
                            <x-input id="postcode" class="block mt-1 w-full bg-gray-100" type="text" name="postcode" value="{{ $user->postcode }}" readonly/>
                        </div>
                        <div>
                            <x-label for="state" :value="__('State')" />
                            <x-input id="state" class="block mt-1 w-full bg-gray-100" type="text" name="state" value="{{ $user->state }}" readonly/>
                        </div>
                        <div>
                            <x-label for="phone_number" :value="__('Phone Number')" />
                            <x-input id="phone_number" class="block mt-1 w-full bg-gray-100" type="text" name="phone_number" value="{{ $user->phone_number }}" readonly/>
                        </div>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endpermission

</x-app-layout>
