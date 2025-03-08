<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();
        $this->redirect('/');
    }
}; ?>

<nav class="bg-black text-white w-full">
    <!-- First Row: Profile & Dark Mode Toggle -->
    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between py-2 border-b border-gray-700 flex-row-reverse">
        <div class="flex items-center gap-4">
            @can('showAdminPanel')
                <div class="shrink-0 flex items-center pl-8 text-white-600">
                    <a href="/admin" wire:navigate>
                        <b>ADMIN PANEL</b>
                    </a>
                </div>
            @endcan
            <!-- Profile Dropdown -->
            <x-dropdown align="left" width="48">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-md text-black bg-white hover:text-gray-500 focus:outline-none transition ease-in-out duration-150">
                        <div x-data="{ name: '{{ auth()->user()->name ?? "Guest" }}' }" x-text="name"></div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile')"
                        class="bg-white text-white">{{ __('Profile') }}</x-dropdown-link>
                    <button wire:click="logout" class="w-full text-start">
                        <x-dropdown-link class="bg-white text-white">{{ __('Log Out') }}</x-dropdown-link>
                    </button>
                </x-slot>
            </x-dropdown>
        </div>
    </div>

    <!-- Second Row: Logo, Search Bar, Shopping Cart -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4 flex-row-reverse">
        <!-- Logo -->
        <a href="{{ route('welcome') }}" class="text-xl font-bold text-yellow-400">كلشي ستور</a>

        <!-- Search Bar -->
        <div class="flex-grow flex justify-center mx-4">
            <livewire:SearchComponent class="bg-black text-white" />
        </div>

        <!-- Shopping Cart -->
        <div class="relative flex flex-col items-center">
            <livewire:cartCounter class="bg-black text-white" />
        </div>
    </div>
</nav>