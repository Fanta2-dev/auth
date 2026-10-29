<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-indigo-600 dark:text-indigo-400 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-8">
                <div class="flex items-center space-x-4">
                    <div class="text-indigo-500 dark:text-indigo-400">
                        <!-- Une icône sympa (Heroicons - check circle) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2l4 -4" />
                          <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" fill="none"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                            Bienvenue, <span class="capitalize">{{ Auth::user()->name }}</span> !
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-gray-300">
                            Vous êtes connecté avec succès à votre tableau de bord.
                        </p>
                    </div>
                </div>
                <div class="mt-6 flex space-x-4">
    <a href="{{ route('profile.edit') }}"
       class="px-5 py-2 bg-indigo-600 text-white rounded-md shadow hover:bg-indigo-700 transition">
        Voir Profil
    </a>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
       class="px-5 py-2 bg-red-500 text-white rounded-md shadow hover:bg-red-600 transition">
        Se déconnecter
    </a>
</div>


                {{-- <div class="mt-6 flex space-x-4">
                    <a href="{{ route('profile.show') }}"
                       class="px-5 py-2 bg-indigo-600 text-white rounded-md shadow hover:bg-indigo-700 transition">
                        Voir Profil
                    </a>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="px-5 py-2 bg-red-500 text-white rounded-md shadow hover:bg-red-600 transition">
                        Se déconnecter
                    </a>
                </div> --}}

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
