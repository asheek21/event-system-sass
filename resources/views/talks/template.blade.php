<div class="p-6 space-y-6">
    <form action="{{route('talks.store')}}" method="post">
        @csrf
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <label for="title" class="text-sm font-medium text-gray-900 block mb-2">Title</label>
                <input type="text" value="{{old('title')}}" name="title" id="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Talk About Title" required="">
                @error('title')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <label for="length" class="text-sm font-medium text-gray-900 block mb-2">Length</label>
                    <input type="text" name="length" value="{{old('length')}}" id="length" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                    @error('length')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <label for="type" class="text-sm font-medium text-gray-900 block mb-2">Type</label>
                    <select name="type" id="type" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                        @foreach($types as $type)
                            <option value="{{ $type }}">{{ $type->getLabel() }}</option>
                        @endforeach
                    </select>
                    @error('type')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-span-full">
                <label for="abstract" class="text-sm font-medium text-gray-900 block mb-2">Abstract</label>
                <textarea id="abstract" value="{{old('abstract')}}" name="abstract" rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" ></textarea>
                @error('abstract')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-full">
                <label for="organizer_notes" class="text-sm font-medium text-gray-900 block mb-2">Organizer Notes</label>
                <textarea id="organizer_notes" value="{{old('organizer_notes')}}" name="organizer_notes" rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"></textarea>
                @error('organizer_notes')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mt-8 flex justify-end">
            <button class="bg-teal-500 text-black px-4 py-2 rounded-lg hover:bg-teal-700 dark:bg-teal-600 dark:text-white dark:hover:bg-teal-900" style="background-color: rgba(20, 184, 161, 1);">
                Place Order
            </button>
        </div>

    </form>
</div>
