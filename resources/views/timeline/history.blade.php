<x-app-layout>
    <x-slot name="header">
        Timeline History
    </x-slot>
    <div class="relative md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
                <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="block mb-8">
                        <a href="{{ route('timeline.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Back</a>
                    </div>
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 w-full">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Date
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Time
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Description
                                            </th>
                                            @can('admin_timeline_access')
                                                <th scope="col" width="200" class="px-6 py-3 bg-gray-50">

                                                </th>
                                            @endcan
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($timelines as $timeline)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $timeline->date }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $timeline->time }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $timeline->title }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $timeline->description }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    <a href="{{ route('timeline.edit', $timeline->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                                    <form class="inline-block" action="{{ route('timeline.destroy', $timeline->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                                    </form>
                                                    <form action={{ route('timeline.markasundone', $timeline->id) }} method="POST">
                                                        @method('PATCH')
                                                        @csrf
                                                        <input type="hidden" name="status" value="0" />
                                                        <button     type="submit">Mark as undone</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
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
