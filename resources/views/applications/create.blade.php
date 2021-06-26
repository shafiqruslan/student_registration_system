<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Application') }}
        </h2>
    </x-slot>

    @permission('applications-create')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">    
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Create</h3>
                        <p class="mt-1 text-sm text-gray-600">
                        This information need to be created.
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
                    <form method="POST" action="{{ route('applications.store') }}">
                    @csrf
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div>
                                    <x-label for="mode_study" :value="__('Mode Study')" />
                                    <x-select id="mode_study" name="mode_study" autocomplete="mode_study" class="w-full">
                                        <option disabled selected>Select your option</option>
                                        <option>Fully Online</option>
                                        <option>Weekend Class</option>
                                    </x-select>
                                </div>
                                <div>
                                    <x-label for="programme" :value="__('Programme')" />
                                    <x-select id="programme" name="programme" autocomplete="programme" class="w-full">
                                        <option disabled selected>Select your option</option>
                                        @foreach ($programmes as $programme)
                                            <option value={{ $programme->id }}>{{ $programme->name }}</option>
                                        @endforeach
                                    </x-select>
                                </div>
                                <div>
                                    <x-label for="learning_centre" :value="__('Learning Centre')" />
                                    <x-select id="learning_centre" name="learning_centre" autocomplete="learning_centre" class="w-full">
                                        <option disabled selected>Select your option</option>
                                        @foreach ($learning_centres as $learning_centre)
                                            <option value={{ $learning_centre->id }}>{{ $learning_centre->name}}</option>
                                        @endforeach
                                    </x-select>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <x-submit-button class="ml-4">
                                    {{ __('Submit') }}
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
