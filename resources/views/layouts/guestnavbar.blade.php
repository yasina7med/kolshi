<nav x-data="{ open: false }" class="bg-black text-white w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- First Row: Login & Register -->
        <div class="flex justify-between py-2 border-b border-gray-700 flex-row-reverse">
            <div class="flex items-center gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-400">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-white hover:text-gray-400">
                        {{ __('Login') }}
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ms-4 text-white hover:text-gray-400">
                            {{ __('Register') }}
                        </a>
                    @endif
                @endauth
            </div>
        </div>

        <!-- Second Row: Logo & Search Bar -->
        <div class="flex justify-between items-center py-4 flex-row-reverse">
            <!-- Logo -->
            <a href="{{ route('welcome') }}" class="text-xl font-bold text-yellow-200">
                كلشي ستور
            </a>

            <!-- Search Bar -->
            <div class="flex-grow flex justify-center mx-4">
                <livewire:SearchComponent class="bg-black text-white" />
            </div>
        </div>
    </div>
</nav>