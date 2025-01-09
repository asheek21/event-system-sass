<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Talks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul>
                        @foreach ($talks as $talk)
                            <li>
                                <div class="px-4 py-5 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">{{$talk->title}}</h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">{{$talk->length}} Minutes / {{$talk->type->getLabel()}}</p>
                                    </div>
                                    <div class="mt-4 flex items-center justify-between">
                                        <p class="text-sm font-medium text-gray-500">Created At: <span class="text-green-600">{{$talk->created_at}}</span></p>
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Edit</a>
                                    </div>
                                </div>
                            </li>
                            <hr>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
