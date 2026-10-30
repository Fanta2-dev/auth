<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Accueil - Mon Application</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Navbar -->
<nav class="bg-gray-900 shadow-md p-4 flex justify-between items-center">
    <a href="{{ url('/') }}" class="text-2xl font-bold text-yellow-400">MonProjet</a>
    <div class="space-x-2">
        @auth
            <span class="mr-4 text-white">Bonjour, {{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">
                    Déconnexion
                </button>
            </form>
        @else
            <a href="{{ route('login') }}"
               class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
               Login
            </a>
            <a href="{{ route('register') }}"
               class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">
               Register
            </a>
        @endauth
    </div>
</nav>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-purple-400 via-pink-400 to-red-400 py-16 text-white">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h1 class="text-5xl font-extrabold mb-4">Bienvenue sur Mon Application</h1>
        <p class="text-lg mb-8">
            Une application Laravel moderne avec authentification, inscription et gestion de profil.
        </p>
        <div class="space-x-4">
            @auth
                <a href="{{ route('dashboard') }}"
                   class="px-6 py-3 bg-white text-purple-700 font-semibold rounded hover:bg-gray-100 transition">
                   Aller au tableau de bord
                </a>
            @else
                <a href="{{ route('register') }}"
                   class="px-6 py-3 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500 transition">
                   Créer un compte
                </a>
                <a href="{{ route('login') }}"
                   class="px-6 py-3 bg-gray-200 text-gray-800 font-semibold rounded hover:bg-gray-300 transition">
                        Se connecter
                </a>
            @endauth
        </div>
    </div>
</section>

<!-- Section Caractéristiques -->
<section class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-12">Fonctionnalités</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Carte 1 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition border-l-4 border-purple-500">
                <h3 class="text-xl font-semibold mb-2 text-purple-700">Authentification</h3>
                <p class="text-gray-600">Inscription, connexion et gestion des profils utilisateurs facilement.</p>
            </div>
            <!-- Carte 2 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition border-l-4 border-green-500">
                <h3 class="text-xl font-semibold mb-2 text-green-700">Gestion des données</h3>
                <p class="text-gray-600">Ajout et modification des informations utilisateurs et autres fonctionnalités.</p>
            </div>
            <!-- Carte 3 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition border-l-4 border-pink-500">
                <h3 class="text-xl font-semibold mb-2 text-pink-700">Interface moderne</h3>
                <p class="text-gray-600">Une interface responsive et moderne grâce à TailwindCSS et Breeze.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 py-6 mt-16 shadow-inner text-gray-300">
    <div class="max-w-6xl mx-auto text-center">
        &copy; {{ date('Y') }} MonProjet. Tous droits réservés.
    </div>
</footer>

</body>
</html>
