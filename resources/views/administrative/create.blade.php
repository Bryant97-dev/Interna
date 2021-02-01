<x-app-layout>
    <x-slot name="header">
        Add Administrative Data
    </x-slot>
    <div class="relative md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
                <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form method="post" action="{{ route('administrative.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="title" class="block font-medium text-sm text-gray-700">Title<label class="text-red-600">*</label></label>
                                    <input type="text" name="title" id="title" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('title', '') }}" />
                                    @error('title')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="file" class="block font-medium text-sm text-gray-700">File<label class="text-red-600">*</label></label>
                                    <input type="file" name="file" id="file" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('file', '') }}" />
                                    @error('file')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                                    <input type="text" name="description" id="description" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('description', '') }}" />
                                    @error('description')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6" hidden>
                                    <label for="user_id" class="block font-medium text-sm text-gray-700">User</label>
                                    <input type="text" name="user_id" id="user_id" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ $user_id }}" />
                                    @error('user_id')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
