<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Hobbies</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 font-sans">
<header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">🔧⚙️ Unique Mechanic ⛓️🛠️</h1>
        <nav>
            <a href="./hobbies" class="text-gray-300 hover:text-white mx-2">Hobbies</a>
            <a href="./contact" class="text-gray-300 hover:text-white mx-2">Contact</a>
            <a href="./cookbook" class="text-gray-300 hover:text-white mx-2">Cookbook</a>
        </nav>
    </div>
</header>

<main class="max-w-4xl mx-auto mt-8">
    <!-- Hobbies Section -->
    <section class="bg-white shadow-lg rounded-lg p-6 mb-8">
        <h2 class="text-2xl font-semibold mb-4">Hobbies</h2>
        <ul class="list-disc list-inside text-lg space-y-2">
            <li>Enjoy a hot cup of coffee ☕ and long walks 🚶‍♂️</li>
            <li>Lift weights and stay fit 🔱</li>
            <li>
                <strong>
                    <a href="https://www.w3schools.com" class="text-blue-600 hover:underline">
                        Code and Create 🖥️
                    </a>
                </strong>
            </li>
            <li>Catch up on sleep 😴</li>
            <li>Repeat and thrive 🚀</li>
        </ul>
        <img src="{{ asset('images/hobbies.jpg') }}" alt="Hobbies" class="mt-4 w-full rounded-lg shadow-md">
    </section>

</main>

<footer class="bg-gray-800 text-white text-center py-4 mt-8">
    <p>&copy; 2025 Your Name. All Rights Reserved.</p>
</footer>

</body>
</html>
