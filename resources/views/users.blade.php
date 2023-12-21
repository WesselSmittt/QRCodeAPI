<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    @section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
        @foreach($users as $user)
            <div class="bg-gray-200 dark:bg-gray-700 p-4 rounded-lg shadow mb-4">
                <p class="font-bold">{{ $user->name }}</p>
                <p>{{ $user->email }}</p>
                <div class="flex items-center justify-end">
                    <button class="toggleButton px-4 py-2 rounded-full text-white font-bold focus:outline-none bg-red-500" data-state="false">
                        User
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        const toggleButtons = document.querySelectorAll(".toggleButton");

        toggleButtons.forEach(button => {
            button.addEventListener("click", function() {
                const currentState = this.dataset.state === "true"; 
                const nextState = !currentState;

                if (nextState) {
                    this.textContent = "Admin";
                    this.classList.remove("bg-red-500");
                    this.classList.add("bg-green-500");
                } else {
                    this.textContent = "User";
                    this.classList.remove("bg-green-500");
                    this.classList.add("bg-red-500");
                }

                this.dataset.state = nextState.toString(); 
            });
        });
    </script>

@endsection
</x-app-layout>