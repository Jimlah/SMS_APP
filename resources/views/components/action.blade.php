<div class="flex items-center justify-start space-x-2 ">
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <a href="{{ $viewOne }}" class="p-1 bg-green-500">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
            </path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
            </path>
        </svg>
    </a>
    <a href="{{ $edit }}" class="p-1 bg-blue-500">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
            </path>
        </svg>
    </a>
    <div class="static flex" x-data="modal()">
        <button class="p-1 bg-red-500" x-on:click="open">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                </path>
            </svg>
        </button>
        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full bg-purple-700 bg-opacity-25" :class="{ 'hidden': isOpen() === false }">
            <div class="flex flex-col items-center justify-center p-5 space-y-5 text-lg text-black bg-white rounded-md" x-on:click.away="close">
                <span>
                    <svg class="w-10 h-10 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </span>
                <span>Are you sure you want to delete</span>
                <span>
                    <form action="{{ $delete }}" method="post" class="flex space-x-2 text-sm font-bold text-white">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="px-2 py-1 bg-red-500">Yes, delete!</button>
                        <button type="reset" class="px-2 py-1 bg-green-500" x-on:click="close">No, do not!</button>
                    </form>
                </span>
            </div>
        </div>
        
        <script>
            function modal() {
                return {
                    show: false,
                    open(){ this.show = true},
                    close(){this.show = false}, 
                    isOpen() {return this.show}
                }
            }
        </script>
    </div>
</div>
