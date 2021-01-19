<x-app-layout>
    <x-slot name="header">
        Edit Report
    </x-slot>
    <div class="relative md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
                <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form method="post" action="{{ route('report.update', $report->id) }}" enctype="multipart/form-data"z>
                            @csrf
                            @method('PUT')
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                                    <input type="text" name="title" id="title" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('title', $report->title) }}" />
                                    @error('title')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <a href="/storage/{{ $report->path }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">{{ $report->file }}</a>
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="file" class="block font-medium text-sm text-gray-700">Or Upload New File</label>
                                    <input type="file" name="file" id="file" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('file', $report->file) }}" />
                                    @error('file')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="description" class="block font-medium text-sm text-gray-700">Description</label>
                                    <input type="text" name="description" id="description" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('description', $report->description) }}" />
                                    @error('description')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                        Edit
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