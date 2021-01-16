<x-app-layout>
    @section('header', 'Edit Company Data')
    @section('content')
        <div class="relative md:pt-32 pb-32 pt-12">
            <div class="px-4 md:px-10 mx-auto w-full">
                <div>
                    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form method="post" action="{{ route('company.update', $company->id) }}">
                                @csrf
                                @method('put')
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                                        <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('name', $company->name) }}" />
                                        @error('name')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="address" class="block font-medium text-sm text-gray-700">Address</label>
                                        <input type="text" name="address" id="address" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('address', $company->address) }}" />
                                        @error('address')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="supervisor" class="block font-medium text-sm text-gray-700">Supervisor</label>
                                        <input type="text" name="supervisor" id="supervisor" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('supervisor', $company->supervisor) }}" />
                                        @error('supervisor')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="supervisor_contact" class="block font-medium text-sm text-gray-700">Supervisor Contact</label>
                                        <input type="number" name="supervisor_contact" id="supervisor_contact" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('supervisor_contact', $company->supervisor_contact) }}" />
                                        @error('supervisor_contact')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                                        <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('email', $company->email) }}" />
                                        @error('email')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="phone" class="block font-medium text-sm text-gray-700">Phone</label>
                                        <input type="number" name="phone" id="phone" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('phone', $company->phone) }}" />
                                        @error('phone')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <label for="npwp" class="block font-medium text-sm text-gray-700">NPWP</label>
                                        <input type="text" name="npwp" id="npwp" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                               value="{{ old('npwp', $company->npwp) }}" />
                                        @error('npwp')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
