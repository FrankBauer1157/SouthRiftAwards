<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <style>
        .gradient-title {
            background: linear-gradient(90deg, #3b82f6, #1d4ed8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #93c5fd, #2563eb, #1e3a8a);
        }
    </style>
</head>
<body class="text-gray-800 bg-gray-50">
    <div class="flex flex-col justify-between min-h-screen">
        <!-- Header -->
        <header class="py-12 text-center text-white gradient-bg">
            <h1 class="text-4xl font-bold gradient-title bg-clip-text">
                SOUTH-RIFT MATATU AWARDS - 2024
            </h1>
            <p class="mt-4 text-lg">
                Nominations have ended. Thank you for participating! Stay tuned—voting will begin soon.
            </p>
        </header>

        <!-- Main Content -->
        <main class="container px-4 py-8 mx-auto">
            <!-- Sponsors Section -->
            <section class="text-center">
                <h2 class="text-3xl font-bold text-blue-600">
                    Our Valued Sponsors
                </h2>
                <p class="mt-2 mb-8 text-base text-gray-600">
                    A heartfelt thank you to all our sponsors for their invaluable support and commitment to the success of the South-Rift Matatu Awards 2024!
                </p>
            </section>

            <!-- Sponsors Grid -->
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                <!-- Sponsor Card -->
                <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('SMRA/pumc.jpg') }}" alt="PUMC Logo" class="object-contain w-24 h-24 mb-4 rounded-lg sm:w-32 sm:h-32">
                </div>
                <!-- Additional Sponsor Cards -->
                <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('SMRA/Eangle Nest.png') }}" alt="Eagle Nest Logo" class="object-contain w-24 h-24 mb-4 rounded-lg sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('SMRA/1.jpg') }}" alt="Sponsor 1 Logo" class="object-contain w-24 h-24 mb-4 rounded-lg sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('SMRA/Media.jpg') }}" alt="Media Logo" class="object-contain w-24 h-24 mb-4 rounded-lg sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('SMRA/security.png') }}" alt="Security Logo" class="object-contain w-24 h-24 mb-4 rounded-lg sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('SMRA/swam.png') }}" alt="SWAM Logo" class="object-contain w-24 h-24 mb-4 rounded-lg sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('SMRA/Triple Kay.png') }}" alt="Triple Kay Logo" class="object-contain w-24 h-24 mb-4 rounded-lg sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('SMRA/f2.jpeg') }}" alt="Sponsor 2 Logo" class="object-contain w-24 h-24 mb-4 rounded-lg sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('SMRA/fg.jpeg') }}" alt="Sponsor 3 Logo" class="object-contain w-24 h-24 mb-4 rounded-lg sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('SMRA/fgg.jpeg') }}" alt="Sponsor 4 Logo" class="object-contain w-24 h-24 mb-4 rounded-lg sm:w-32 sm:h-32">
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="py-6 text-center text-gray-200 bg-gray-800">
            <p>Patron: Kenda Vin</p>
        </footer>
    </div>
</body>
</html>
