@extends('layout.dashboard')

@section('body')
<div class="grid grid-cols-1">
    <div
        class="flex items-center justify-center w-full p-5 bg-white rounded-md col-span-full dark:bg-gray-900">
        <form action="{{ route('students.update', [$students->id]) }}" method="post" class="flex flex-col w-3/4 space-y-5">
            <div class="flex flex-col w-full divide-y-2 divide-gray-500 divide-opacity-50">
                <span class="text-2xl font-bold ">
                    Add Student
                </span>
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="w-full pt-3">
                    <div class="grid grid-cols-2 gap-5 text-black dark:text-white ">
                        <div class="flex justify-start w-full col-span-1 md:flex-col">
                            <label for="firstname" class="text-sm font-bold ">First Name</label>
                            <input type="text" name="firstname" id="firstname" value="{{$students->firstname ?? ""}}"
                                class="w-full p-3 bg-gray-100 border border-gray-400 focus:bg-transparent dark:bg-gray-700">
                        </div>
                        <div class="flex flex-col justify-start w-full col-span-1">
                            <label for="lastname" class="text-sm font-bold">Last Name</label>
                            <input type="text" name="lastname" id="lastname" value="{{$students->lastname ?? ""}}"
                                class="w-full p-3 bg-gray-100 border border-gray-400 focus:bg-transparent dark:bg-gray-700">
                        </div>
                        <div class="flex flex-col justify-start w-full col-span-1">
                            <label for="middlename" class="text-sm font-bold">Middle Name</label>
                            <input type="text" name="middlename" id="middlename" value="{{$students->middlename ?? ""}}"
                                class="w-full p-3 bg-gray-100 border border-gray-400 focus:bg-transparent dark:bg-gray-700">
                        </div>
                        <div class="flex flex-col justify-start w-full col-span-1">
                            <label for="date_of_birth" class="text-sm font-bold">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ \Carbon\Carbon::parse($students->date_of_birth)->format('Y-m-d') ?? ""}}"
                                class="w-full p-3 bg-gray-100 border border-gray-400 focus:bg-transparent dark:bg-gray-700">
                        </div>
                        <div class="flex flex-col justify-start w-full col-span-1">
                            <label for="state_of_origin" class="text-sm font-bold">State of Origin</label>
                            <input type="text" name="state_of_origin" id="state_of_origin" value="{{$students->state_of_origin ?? ""}}"
                                class="w-full p-3 bg-gray-100 border border-gray-400 focus:bg-transparent dark:bg-gray-700">
                        </div>
                        <div class="flex flex-col justify-start w-full col-span-1">
                            <label for="nationality" class="text-sm font-bold">Nationality</label>
                            <input type="text" name="nationality" id="nationality" value="{{$students->nationality ?? ""}}"
                                class="w-full p-3 bg-gray-100 border border-gray-400 focus:bg-transparent dark:bg-gray-700">
                        </div>
                        <div class="flex flex-col justify-start w-full col-span-1">
                            <label for="home_address" class="text-sm font-bold">Home Address</label>
                            <input type="text" name="home_address" id="home_address" value="{{$students->home_address ?? ""}}"
                                class="w-full p-3 bg-gray-100 border border-gray-400 focus:bg-transparent dark:bg-gray-700">
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-5 text-black dark:text-white ">
                <div class="flex justify-start w-full col-span-1 col-start-2 space-x-2">
                    <button type="reset" class="flex-none p-2 bg-transparent border-2 border-purple-500">Reset</button>
                    <button type="submit" class="flex-grow p-2 text-white bg-purple-900 hover:bg-opacity-50">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection