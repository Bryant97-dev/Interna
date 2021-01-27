<x-app-layout>
    <x-slot name="header">
        Company Data
    </x-slot>
    <div class="relative md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
                <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 w-full">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Address
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                User
                                            </th>
                                            <th scope="col" width="200" class="px-6 py-3 bg-gray-50">

                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($companies as $company)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $company->name }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $company->address }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $company->email }}
                                                </td>

                                                @foreach ($users as $user)
                                                    @if ($company->user_id == $user->id)
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            {{ $user->name }}
                                                        </td>
                                                    @endif
                                                @endforeach

                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    <form action={{ route('company.markasapproved', $company->id) }} method="POST">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button type="submit" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Approve</button>
                                                    </form>
                                                    <form action={{ route('company.markasrejected', $company->id) }} method="POST">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button type="submit" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Reject</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">No Data</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
