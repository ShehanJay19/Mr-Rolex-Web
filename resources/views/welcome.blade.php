<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vite + Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-purple-500 via-pink-500 to-red-500 min-h-screen flex items-center justify-center p-4">

    <!-- Main Test Card -->
    <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-2xl w-full transform hover:scale-105 transition-all duration-300">

        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600 mb-4">
                🚀 Vite is Working!
            </h1>
            <p class="text-gray-600 text-lg">
                Testing Vite + Tailwind CSS + Hot Module Replacement
            </p>
        </div>

        <!-- Status Indicators -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">

            <!-- CSS Test -->
            <div class="bg-gradient-to-r from-green-400 to-blue-500 rounded-xl p-6 text-white transform hover:rotate-2 transition-transform">
                <div class="flex items-center space-x-3 mb-2">
                    <span class="text-3xl">🎨</span>
                    <h3 class="text-xl font-bold">Tailwind CSS</h3>
                </div>
                <p class="text-sm opacity-90">Utility classes loaded ✓</p>
            </div>

            <!-- JS Test -->
            <div class="bg-gradient-to-r from-yellow-400 to-orange-500 rounded-xl p-6 text-white transform hover:-rotate-2 transition-transform">
                <div class="flex items-center space-x-3 mb-2">
                    <span class="text-3xl">⚡</span>
                    <h3 class="text-xl font-bold">Vite HMR</h3>
                </div>
                <p class="text-sm opacity-90" id="hmr-status">Hot reload active ✓</p>
            </div>

        </div>

        <!-- Interactive Test Button -->
        <div class="text-center mb-6">
            <button
                id="testButton"
                class="bg-gradient-to-r from-purple-600 to-pink-600 text-white font-bold py-4 px-8 rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200 active:scale-95">
                Click to Test JavaScript!
            </button>
            <p id="clickCount" class="mt-4 text-gray-600 text-lg font-semibold"></p>
        </div>

        <!-- Instructions -->
        <div class="bg-gray-50 rounded-xl p-6 border-2 border-gray-200">
            <h4 class="font-bold text-gray-800 mb-3 flex items-center">
                <span class="text-2xl mr-2">📝</span>
                How to Test HMR (Hot Module Replacement):
            </h4>
            <ol class="list-decimal list-inside space-y-2 text-gray-700">
                <li>Run <code class="bg-gray-200 px-2 py-1 rounded text-sm">npm run dev</code> in terminal</li>
                <li>Run <code class="bg-gray-200 px-2 py-1 rounded text-sm">php artisan serve</code> in another terminal</li>
                <li>Edit this file or <code class="bg-gray-200 px-2 py-1 rounded text-sm">resources/css/app.css</code></li>
                <li>Save and watch the page update instantly! 🎉</li>
            </ol>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8 text-gray-500 text-sm">
            <p>Change any color in this file and save to see HMR in action!</p>
        </div>

    </div>

</body>
</html>
