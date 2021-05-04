@extends('layout.dashboard')

@section('body')
    {{-- Table --}}
    <div class="grid grid-cols-12">
        <div class="p-5 bg-white rounded-md col-span-full dark:bg-gray-900">
            <div class="flex justify-between mb-2">
                <form action="" method="get" class="flex items-center px-1 bg-gray-100 rounded-md">
                    <input type="search" name="q" class="p-1 text-black bg-transparent border-none outline-none"
                        placeholder="Search">
                    <button type="submit" class="bg-transparent border-none outline-none">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
                <a href="{{ route('students.create') }}"
                    class="flex items-center justify-center px-2 py-1 bg-purple-900 rounded-md hover:bg-purple-700">
                    <span>
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </span>
                    <span class="text-lg text-white">Add</span>
                </a>
            </div>
            <table class="table w-full text-base font-normal border-collapse table-auto">
                <thead class="font-semibold text-left">
                    <tr>
                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">ID</th>
                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">Firstname</th>
                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">Lastname</th>
                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">Middle Name</th>
                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">D. O. B.</th>
                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">State Of Origin</th>
                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">Nationality</th>
                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">Home Address</th>
                        <th class="px-2 py-2 border-b border-gray-500 border-opacity-50">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">{{ $student->id }}</td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">{{ $student->firstname }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">{{ $student->lastname }}</td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">{{ $student->middlename }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">
                                {{ \Carbon\Carbon::parse($student->date_of_birth)->format('Y-m-d') ?? '' }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">
                                {{ $student->state_of_origin }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">{{ $student->nationality }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">{{ $student->home_address }}
                            </td>
                            <td class="px-2 py-2 border-b border-gray-500 border-opacity-50">

                                <x-action viewOne="{{ route('students.show', [$student->id]) }}"
                                    edit="{{ route('students.edit', [$student->id]) }}"
                                    delete="{{ route('students.destroy', [$student->id]) }}" >
                                </x-action>

                            </td>
                        </tr>
                    @empty
                        <span>No data Available</span>
                    @endforelse
                </tbody>
            </table>
            @if ($students->hasMorePages())
                <div class="flex items-center justify-start py-2">
                    <a href="{{ $students->previousPageUrl() }}" class="p-1 bg-purple-400 rounded-full">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </a>
                    <span class="p-1 rounded-full">$results->currentPage()</span>
                    <a href="{{ $students->nextPageUrl() }}"
                        class="p-1 bg-purple-900 rounded-full {{ $student->lastPage() ? 'bg-opacity-50' : '' }}">
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
@endsection
