<x-app-layout>
    <x-slot name="header">
        Company Data
    </x-slot>
    <div class="relative md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
                <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="py-12 bg-white">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="lg:text-center">
                                @if(empty($status))
                                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                                        Status : Pending
                                    </p>
                                @else
                                    @if($status == 1)
                                        <p class="mt-4 max-w-2xl text-xl text-green-500 lg:mx-auto">
                                            Status : Approved
                                        </p>
                                    @else
                                        <p class="mt-4 max-w-2xl text-xl text-red-500 lg:mx-auto">
                                            Status : Rejected
                                        </p>
                                    @endif
                                @endif
                                <h2 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                                    {{ $name ?: 'There is no Company Name' }}
                                </h2>
                                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                                    {{ $address ?: 'There is no Company Address' }}
                                </p>
                            </div>

                            <div class="mt-10 pt-8">
                                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                                Supervisor Name
                                            </dt>
                                            <dd class="mt-2 text-base text-gray-500">
                                                {{ $supervisor ?: 'There is no Supervisor Name' }}
                                            </dd>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                                Supervisor Phone
                                            </dt>
                                            <dd class="mt-2 text-base text-gray-500">
                                                {{ $supervisor_phone ?: 'There is no Supervisor Phone' }}
                                            </dd>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                                Company Phone
                                            </dt>
                                            <dd class="mt-2 text-base text-gray-500">
                                                {{ $company_phone ?: 'There is no Company Phone' }}
                                            </dd>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                                Company Email
                                            </dt>
                                            <dd class="mt-2 text-base text-gray-500">
                                                {{ $email ?: 'There is no Company Email' }}
                                            </dd>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                                Company NPWP
                                            </dt>
                                            <dd class="mt-2 text-base text-gray-500">
                                                {{ $npwp ?: 'There is no Company NPWP' }}
                                            </dd>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                                Company SIUP
                                            </dt>
                                            <dd class="mt-2 text-base text-gray-500">
                                                {{ $siup ?: 'There is no Company SIUP' }}
                                            </dd>
                                        </div>
                                    </div>
                                </dl>
                            </div>
                            <br/>
                            <br/>
                            <br/>
                            <center>
                                @if(empty($id))
                                    <div class="block mb-8">
                                        <a href="{{ route('company.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create Data</a>
                                    </div>
                                @else
                                    <div class="block mb-8">
                                        <a href="{{ route('company.edit', $id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit Data</a>
                                    </div>
                                @endif
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
