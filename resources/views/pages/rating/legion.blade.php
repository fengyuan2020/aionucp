<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Legions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white dark:bg-gray-800 border-gray-700">
                    <div class="min-w-full align-middle">
                        <table class="min-w-full divide-y divide-gray-700 border border-gray-700">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-left">
                                        <span class="text-xs leading-4 font-medium text-gray-400 uppercase tracking-wider">{{ __('Name') }}</span>
                                    </th>
                                    <th class="px-6 py-3 text-left">
                                        <span class="text-xs leading-4 font-medium text-gray-400 uppercase tracking-wider">{{ __('Level') }}</span>
                                    </th>
                                    <th class="px-6 py-3 text-left">
                                        <span class="text-xs leading-4 font-medium text-gray-400 uppercase tracking-wider">{{ __('Rank') }}</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($legions as $legion)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-600 dark:text-gray-400">
                                            {{ $legion->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-600 dark:text-gray-400">
                                            {{ $legion->level }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-600 dark:text-gray-400">
                                            {{ $legion->rank_pos }}
                                        </td>
                                    </tr>
                                @empty
                                    {{ __('Nothing to show') }}
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                        {{ $legions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
