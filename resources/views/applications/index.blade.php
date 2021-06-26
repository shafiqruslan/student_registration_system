<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Application') }}
        </h2>
    </x-slot>
    <x-list.layout>
        @permission('applications-create')
            <x-list.button
            name="Add Application"
            route_to="{{ route('applications.create')}}">
            </x-list.button>
            @if ($message = Session::get('success'))
                <x-alert-success>
                    <p>{{ $message }}</p>
                </x-alert-success>
            @endif
        @endpermission
            <div class="my-8 flow-root">
                <x-select id="status" name="status" class="w-40 float-right">
                    <option>Waiting for Review</option>
                    <option>Admit</option>
                    <option>Deny</option>
                </x-select>
            </div>
            <x-list.header>
                <x-list.row class="w-6">Id</x-list.row>
                <x-list.row class="w-36">Mode Study</x-list.row>
                <x-list.row class="w-72">Programme</x-list.row>
                <x-list.row class="w-64">Learning Centre</x-list.row>
                <x-list.row class="w-20">Status</x-list.row>
                <x-list.row class="w-20">Action</x-list.row>
            </x-list.header>
            @foreach ($applications as $application)
                <x-list.content>
                    <x-list.row class="w-6">
                        {{ ++$i }}
                    </x-list.row>
                    <x-list.row class="w-36">
                        {{$application->mode_study}}
                    </x-list.row>
                    <x-list.row class="w-72">
                        {{$application->programme->name}}
                    </x-list.row>
                    <x-list.row class="w-64">
                        {{$application->learning_centre->name}}
                    </x-list.row>
                    <x-list.row class="w-20">
                        {{$application->status->name}}
                    </x-list.row>
                    <x-list.row class="w-20">
                        <x-list.action.layout route_to_delete="{{ route('applications.destroy', $application->id) }}">
                            <x-list.action.button-view
                                route_to_view="{{ route('applications.show', $application->id) }}"
                            />
                            @permission('applications-update')
                                <x-list.action.button-update
                                    route_to_edit="{{ route('applications.edit', $application->id) }}"
                                />
                            @endpermission
                            @permission('applications-delete')
                                <x-list.action.button-delete/>
                            @endpermission
                        </x-list.action.layout>
                    </x-list.row>
                </x-list.content>
            @endforeach
            <x-list.pagination>
                {{$applications->links()}}
            </x-list.pagination>
    </x-list.layout>
</x-app-layout>
