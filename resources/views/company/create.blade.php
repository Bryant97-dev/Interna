<x-app-layout>
    <x-slot name="header">
        Create Company Data
    </x-slot>
    <div class="relative md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
                <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form method="post" action="{{ route('company.store') }}">
                            @csrf
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                                    <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('name', '') }}" />
                                    @error('name')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="address" class="block font-medium text-sm text-gray-700">Address</label>
                                    <input type="text" name="address" id="address" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('address', '') }}" />
                                    @error('address')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                                    <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('email', '') }}" />
                                    @error('email')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="company_phone" class="block font-medium text-sm text-gray-700">Company Phone</label>
                                    <input type="number" name="company_phone" id="company_phone" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('company_phone', '') }}" />
                                    @error('company_phone')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="supervisor" class="block font-medium text-sm text-gray-700">Supervisor</label>
                                    <input type="text" name="supervisor" id="supervisor" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('supervisor', '') }}" />
                                    @error('supervisor')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="supervisor_phone" class="block font-medium text-sm text-gray-700">Supervisor Phone</label>
                                    <input type="number" name="supervisor_phone" id="supervisor_phone" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('supervisor_phone', '') }}" />
                                    @error('supervisor_phone')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="npwp" class="block font-medium text-sm text-gray-700">NPWP</label>
                                    <input type="text" name="npwp" id="npwp" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('npwp', '') }}" />
                                    @error('npwp')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="siup" class="block font-medium text-sm text-gray-700">SIUP</label>
                                    <input type="text" name="siup" id="siup" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('siup', '') }}" />
                                    @error('siup')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="px-4 py-5 bg-white sm:p-6" hidden>
                                    <label for="user_id" class="block font-medium text-sm text-gray-700">User</label>
                                    <input type="text" name="user_id" id="user_id" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ \Illuminate\Support\Facades\Auth::id() }}" />
                                    @error('user_id')
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
</x-app-layout>
