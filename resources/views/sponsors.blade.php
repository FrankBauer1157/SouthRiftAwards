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
        <header class="py-12 text-center text-white" style="background: linear-gradient(135deg, #0d47a1, #1976d2, #64b5f6);">
            <h3 class="text-4xl font-bold" style="
                background: linear-gradient(to right, #ff9800, #ffc107, #fdd835);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            ">
                        SRMA - 2024
                    </h3>
                    <p class="mt-4 text-lg text-gray-200">
                        @if(session('message'))
                        <div class="alert alert-info">
                          {{ session('message') }}
                        </div>
                      @endif
                    </p>
                </header>


                <!-- Main Content -->
                <main class="container px-4 py-8 mx-auto">
                    <!-- Sponsors Section -->

                    <section class="text-center">
                        {{-- vote now button --}}

                        <h3 class="text-3xl font-bold text-blue-600">
                            Our Valued Sponsors
                        </h3>
                        <p class="mt-2 mb-8 text-base text-gray-600">
                            A heartfelt thank you to all our sponsors for their invaluable support and commitment to the success of the South-Rift Matatu Awards 2024!
                        </p>
                    </section>

            <!-- Sponsors Grid -->
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                <!-- Sponsor Card -->
                <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                    <img src="{{ asset('SMRA/bomet.jpeg') }}" alt="PUMC Logo" class="object-contain w-24 h-24 mb-4 rounded-lg sm:w-32 sm:h-32">
                </div>
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
        <section class="text-center">
            {{-- vote now button --}}
            <div class="flex flex-col items-center p-4 bg-white rounded-lg shadow-md">
                {{-- share voting link  --}}
                <a href="{{ route('vote.index') }}" class="inline-block px-8 py-3 text-lg font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-700">
                    Vote Now
                </a>
                <p class="mt-2 text-sm text-gray-500">
                    Share this voting link with your friends and family to encourage participation!
                  </p>
                  <div class="flex items-center justify-center mt-2">
                    <!-- WhatsApp -->
                    <a href="https://southriftmatatuawards.co.ke/"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="ml-2 text-gray-400 hover:text-gray-600">
                      <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0C5.373 0 0 5.373 0 12c0 2.065.526 4.003 1.528 5.738L0 24l6.403-1.507A11.936 11.936 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm5.635 16.218l-.768.807c-.297.312-.698.357-1.08.203-.91-.377-1.932-.884-3.064-1.942-1.125-1.056-1.822-2.206-2.166-2.94-.22-.495.05-.775.322-1.003l.694-.615c.223-.2.393-.465.547-.756.05-.1.082-.173.122-.25.122-.25.095-.473-.066-.745-.169-.287-.585-.67-.839-.864-.365-.275-.693-.26-.96-.184-.395.112-.81.423-1.235.926-.435.513-.98 1.276-.876 2.434.091 1.07.676 2.146 1.232 2.856.016.022.054.071.054.071 1.545 2.053 3.465 3.601 5.352 4.371.222.09.366.13.493.13.295 0 .566-.184.773-.403.57-.613.863-1.062 1.154-1.506.23-.35.068-.648-.015-.732z"></path>
                      </svg>
                    </a>

                    <!-- Facebook -->
                    <a href="https://southriftmatatuawards.co.ke/"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="ml-2 text-gray-400 hover:text-gray-600">
                      <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.324 0 2.462.099 2.794.143v3.24l-1.916.001c-1.504 0-1.794.714-1.794 1.76v2.309h3.587l-.467 3.622h-3.12V24h6.116c.729 0 1.325-.593 1.325-1.324V1.325C24 .593 23.407 0 22.675 0z"></path>
                      </svg>
                    </a>
                  </div>



        </section>
        <!-- Footer -->
        <footer class="py-6 text-center text-gray-200 bg-gray-800">
            <p>Patron: Kenda Vin</p>
        </footer>
    </div>
</body>
</html>
