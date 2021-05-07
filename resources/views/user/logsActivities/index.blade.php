@extends('layout.dashboard')

@section('body')
    {{-- Table --}}
    <div class="grid grid-cols-12">
        <div class="w-full p-5 overflow-x-scroll bg-white rounded-md col-span-full dark:bg-gray-900" id="table-responsive">
            <div class="flex justify-between w-full mb-2 space-y-2 ">
                <form action="" method="get" class="flex items-center px-1 bg-gray-100 rounded-md ">
                    <input type="search" name="q" class="p-1 text-black bg-transparent border-none outline-none"
                        placeholder="Search">
                    <button type="submit" class="hidden bg-transparent border-none outline-none md:block">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <table class="table w-full text-base font-normal border-collapse table-auto">
                <thead class="font-semibold text-left">
                    <tr class="">
                        <div class="block mb-5 text-lg font-bold lg:hidden">activities</div>
                        <th class="hidden px-2 py-2 border-b border-gray-500 border-opacity-50 lg:table-cell">ID</th>
                        <th class="hidden px-2 py-2 border-b border-gray-500 border-opacity-50 lg:table-cell">activityname</th>
                        <th class="hidden px-2 py-2 border-b border-gray-500 border-opacity-50 lg:table-cell">Email</th>
                        <th class="hidden px-2 py-2 border-b border-gray-500 border-opacity-50 lg:table-cell">Role
                        </th>
                        <th class="hidden px-2 py-2 border-b border-gray-500 border-opacity-50 lg:table-cell">Status</th>
                        <th class="hidden px-2 py-2 border-b border-gray-500 border-opacity-50 lg:table-cell">Created At</th>
                        <th class="hidden px-2 py-2 border-b border-gray-500 border-opacity-50 lg:table-cell">Action</th>
                    </tr>
                </thead>
                <tbody class="flex flex-col space-y-5 lg:table-row-group">
                    @forelse ($activities as $activity)
                        <tr class="border-b border-gray-500 border-opacity-50" x-data="collapsible()">
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50 bloc lg:table-cell"
                                :class="{'hidden lg:table-cell' : isOpen() == false, 'block': isOpen() == true }">
                                {{ $activity->id }}</td>
                            <td class="block border-b border-gray-500 border-opacity-50 ploy-2 bpx-2 lg:table-cell"
                                x-on:click="open">
                                {{ $activity->log_name }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50 bloc lg:table-cell"
                                :class="{'hidden lg:table-cell' : isOpen() == false, 'block': isOpen() == true }">
                                {{ $activity->description }}</td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50 bloc lg:table-cell"
                                :class="{'hidden lg:table-cell' : isOpen() == false, 'block': isOpen() == true }">
                                {{ $activity->roles }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50 bloc lg:table-cell"
                                :class="{'hidden lg:table-cell' : isOpen() == false, 'block': isOpen() == true }">
                                Active
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50 bloc lg:table-cell"
                                :class="{'hidden lg:table-cell' : isOpen() == false, 'block': isOpen() == true }">
                                {{ \Carbon\Carbon::parse($activity->created_at)->format('Y-m-d') ?? '' }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50 bloc lg:table-cell"
                                :class="{'hidden lg:table-cell' : isOpen() == false, 'block': isOpen() == true }">
                                {{ $activity->state_of_origin }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50 bloc lg:table-cell"
                                :class="{'hidden lg:table-cell' : isOpen() == false, 'block': isOpen() == true }">
                                {{ $activity->nationality }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50 bloc lg:table-cell"
                                :class="{'hidden lg:table-cell' : isOpen() == false, 'block': isOpen() == true }">
                                {{ $activity->home_address }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50 bloc lg:table-cell"
                                :class="{'hidden lg:table-cell' : isOpen() == false, 'block': isOpen() == true }">

                                <x-action viewOne="null"
                                    edit="null"
                                    delete="{{ route('logsActivity.destroy', [$activity->id]) }}">
                                </x-action>

                            </td>
                        </tr>
                    @empty
                        <span>No data Available</span>
                    @endforelse
                </tbody>
            </table>
            @if ($activities->hasPages())
                <div class="flex items-center justify-start py-2">
                    <a href="{{ $activities->previousPageUrl() }}" class="p-1 bg-purple-900 rounded-full {{ $activities->currentPage() === 1 ? 'hidden' : '' }}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </a>
                    <span class="p-1 rounded-full">{{$activities->currentPage()}} of {{$activities->lastPage()}} </span>
                    <a href="{{ $activities->nextPageUrl() }}"
                        class="p-1 bg-purple-900 rounded-full {{ $activities->currentPage() === $activities->lastPage() ? 'hidden' : '' }}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </div>
    {{-- end Table --}}

    <script>
        function collapsible() {
            return {
                tab: false,
                open() {
                    this.tab = !this.tab
                },
                isOpen() {
                    return this.tab
                }
            }
        }

    </script>
@endsection
