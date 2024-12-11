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
                    <a href="https://twitter.com/share?text=South-Rift%20Matatu%20Awards%202024%20-%20Vote%20now%20at%20@SRMA2024&url=https://srma2024.com/vote" target="_blank" rel="noopener noreferrer" class="ml-2 text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4H0C0 2.20914 2.20914 0 4.5 0H23.5C25.7908 0 28 2.20914 28 4V20C28 21.7908 25.7908 24 23.5 24H4.5C2.20914 24 0 21.7908 0 20V4ZM19.5 16C19.5 15.6716 19.1716 15.3431 18.8431 15.3431H11.1569C10.8
                            15.3431 10.5284 10.8 16 11.1569 16H18.8431C19.1716 16 19.5 15.6716 19.5 15.3431ZM11.1569 21C10.8284
                            21 10.5284 20.8284 10.3431 20.5 10.3431H16C16.3284 10.3431 16.6569 10.6716 16.6569 11.1569C16.6569
                            11.6431 16.3284 11.6431 16 11.1569 16ZM18.8431 21C19.1716 21 19.5 20.8284 19.5 20.5C19.5 20.1716 19.
                            19.8284 19.1716 19.8284 18.8431C19.8284 18.5146 19.5 18.5146 19.1716
                            18.5146 18.2854 18.5146 18.2854 18.8431 18.2854C19.1716 18.2854 19.5 18.5146 19.5 18.8431C19.5 19.1

                            18.2854 19.8284 18.5146 19.8284 18.8431 19.8284C19.1716 19.8284 19.5 19.5 19.5 19.1716C19.5 18.843
                            18.5146 18.5146 18.2854 18.2854 18.2854 18.8431C18.2854 19.1716 18.5146 19.8284 18.8431"></path>

                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://srma2024.com/vote" target="_blank" rel="noopener noreferrer" class="ml-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23 18H16V16H23V18ZM16 14C16 13.4477 16.4477 13 17 13H19V11H17V9H16V11H14V13H16ZM1 2C0.44772 2 0 2.44772 0 3V6C0 6.55228 0.44772 7 1 7H22C22.5523 7 23 6.55228 23 6V3C23 2.44772 22.5523 2 22 2H1Z" fill="#
                                    FFF"/>
                                    <path d="M18.5 10.7071C18.7761 10.9315 19 11.25 19 11.6V13H17V11.6C17 11.25 17.2239 10.9315 17.5 10.
                                    7.07107C17.6569 6.58579 18.1431 6 18.8431 6H23.1569C23.8569 6 24.3431 6.58579 24.9284 7.07107C25.10
                                    7.65685 25.1069 7 25.6922 7 26.3431V28C7 28.5523 7.44772 29 8 29H23C23.5523 29 24 28.5523 24 28V26.
                                    3C24.5523 3 25 2.55228 25 2V11.6C25 11.25 24.7761 10.9315 24.5
                                    10.7071ZM18.5 18H23V20H18.5V18ZM18.5 22H23V24H18.5V22ZM1 13H2V15H1V13ZM1 17H2V19H1V17ZM1 21H2V23H1V21ZM18
                                    25H23V27H18.5V25ZM18.5 29H23V31H18.5V29Z" fill="#
                                    FFF"/>
                                </path>
                                

            </div>


        </section>
        <!-- Footer -->
        <footer class="py-6 text-center text-gray-200 bg-gray-800">
            <p>Patron: Kenda Vin</p>
        </footer>
    </div>
</body>
</html>
