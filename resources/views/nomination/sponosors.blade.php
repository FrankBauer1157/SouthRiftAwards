<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
</head>
<body>
    <div class="flex flex-col justify-between min-h-screen bg-background text-foreground">
        <!-- Header -->
        <header class="py-3 text-center">
            <h3 class="text-3xl font-bold text-primary">SOUTH-RIFT MATATU AWARDS - 2024</h3>
            <p class="mt-2 text-base text-gray-600">
                Nominations have ended. Thank you for participating! Please stay tuned—voting will begin shortly.
            </p>
        </header>

        <!-- Main Content -->
        <main class="container px-4 py-8 mx-auto">
            <!-- Sponsors Section -->
            <header class="text-center">
                <h1 class="text-3xl font-bold text-primary">Our Valued Sponsors</h1>
                <p class="mt-2 mb-8 text-base text-gray-600">
                    A heartfelt thank you to all our sponsors for their invaluable support and commitment to the success of the South-Rift Matatu Awards 2024!
                </p>
            </header>

            <!-- Sponsors Grid -->
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('SMRA/pumc.jpg') }}" alt="PUMC Logo" class="object-contain w-24 h-24 mb-4 sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('SMRA/Eangle Nest.png') }}" alt="Eagle Nest Logo" class="object-contain w-24 h-24 mb-4 sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('SMRA/1.jpg') }}" alt="Sponsor 1 Logo" class="object-contain w-24 h-24 mb-4 sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('SMRA/Media.jpg') }}" alt="Media Logo" class="object-contain w-24 h-24 mb-4 sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('SMRA/security.png') }}" alt="Security Logo" class="object-contain w-24 h-24 mb-4 sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('SMRA/swam.png') }}" alt="SWAM Logo" class="object-contain w-24 h-24 mb-4 sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('SMRA/Triple Kay.png') }}" alt="Triple Kay Logo" class="object-contain w-24 h-24 mb-4 sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('SMRA/f2.jpeg') }}" alt="Sponsor 2 Logo" class="object-contain w-24 h-24 mb-4 sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('SMRA/fg.jpeg') }}" alt="Sponsor 3 Logo" class="object-contain w-24 h-24 mb-4 sm:w-32 sm:h-32">
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('SMRA/fgg.jpeg') }}" alt="Sponsor 4 Logo" class="object-contain w-24 h-24 mb-4 sm:w-32 sm:h-32">
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="py-4 text-center bg-card text-card-foreground">
            <p>Patron: Kenda Vin</p>
        </footer>
    </div>
</body>
</html>
