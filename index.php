<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Generators</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-4xl mx-auto" x-data="generator">
        <h1 class="text-3xl font-bold text-center mb-8">Random Generators</h1>

        <!-- Business Name Generator -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Random Business Name</h2>
            <button @click="generateBusinessName" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Generate Business Name
            </button>
            <p class="mt-4 text-gray-700" x-text="businessName"></p>
        </div>

        <!-- Random Boy Name -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Random Boy Name</h2>
            <button @click="generateBoyName" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Generate Boy Name
            </button>
            <p class="mt-4 text-gray-700" x-text="boyName"></p>
        </div>

        <!-- Random Girl Name -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Random Girl Name</h2>
            <button @click="generateGirlName" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">
                Generate Girl Name
            </button>
            <p class="mt-4 text-gray-700" x-text="girlName"></p>
        </div>

        <!-- Lorem Ipsum Generator -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Lorem Ipsum Generator</h2>
            <button @click="generateLoremIpsum" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                Generate Lorem Ipsum
            </button>
            <p class="mt-4 text-gray-700" x-text="loremIpsum"></p>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('generator', () => ({
                businessName: '',
                boyName: '',
                girlName: '',
                loremIpsum: '',

                async generateBusinessName() {
                    const response = await fetch('random_data.php?type=business');
                    this.businessName = await response.text();
                },

                async generateBoyName() {
                    const response = await fetch('random_data.php?type=boy');
                    this.boyName = await response.text();
                },

                async generateGirlName() {
                    const response = await fetch('random_data.php?type=girl');
                    this.girlName = await response.text();
                },

                async generateLoremIpsum() {
                    const response = await fetch('random_data.php?type=lorem');
                    this.loremIpsum = await response.text();
                }
            }));
        });
    </script>
</body>
</html>
