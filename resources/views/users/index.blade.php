<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student') }}
        </h2>
    </x-slot>
    <x-list.layout>
        @role('superadministrator' || 'administrator')
            @if ($message = Session::get('success'))
                <x-alert-success>
                    <p>{{ $message }}</p>
                </x-alert-success>
            @endif
            <x-list.header>
                <x-list.row class="w-6">Id</x-list.row>
                <x-list.row class="w-36">Name</x-list.row>
                <x-list.row class="w-72">Email</x-list.row>
                <x-list.row class="w-64">Phone Number</x-list.row>
                <x-list.row class="w-20">Action</x-list.row>
            </x-list.header>
            {{Debugbar::info($users)
            }}
            @foreach ($users as $user)
                <x-list.content>
                    <x-list.row class="w-6">
                        {{ ++$i }}
                    </x-list.row>
                    <x-list.row class="w-36">
                        {{$user->name}}
                    </x-list.row>
                    <x-list.row class="w-72">
                        {{$user->email}}
                    </x-list.row>
                    <x-list.row class="w-64">
                        {{$user->phone_number}}
                    </x-list.row>
                    <x-list.row class="w-20">
                        <x-list.action.layout route_to_delete="{{ route('users.destroy', $user->id) }}">
                            <x-list.action.button-view
                                route_to_view="{{ route('users.show', $user->id) }}"
                            />
                            <x-list.action.button-update
                                route_to_edit="{{ route('users.edit', $user->id) }}"
                            />
                            <x-list.action.button-delete/>
                        </x-list.action.layout>
                    </x-list.row>
                </x-list.content>
            @endforeach
            <x-list.pagination>
                {{$users->links()}}
            </x-list.pagination>
        @endrole
        @role('student')
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You cannot access this module as a student!
                </div>
            </div>
        @endrole
    </x-list.layout>
</x-app-layout>

