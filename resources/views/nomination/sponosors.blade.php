<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
		<script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
		<script type="text/javascript">
			window.tailwind.config = {
				darkMode: ['class'],
				theme: {
					extend: {
						colors: {
							border: 'hsl(var(--border))',
							input: 'hsl(var(--input))',
							ring: 'hsl(var(--ring))',
							background: 'hsl(var(--background))',
							foreground: 'hsl(var(--foreground))',
							primary: {
								DEFAULT: 'hsl(var(--primary))',
								foreground: 'hsl(var(--primary-foreground))'
							},
							secondary: {
								DEFAULT: 'hsl(var(--secondary))',
								foreground: 'hsl(var(--secondary-foreground))'
							},
							destructive: {
								DEFAULT: 'hsl(var(--destructive))',
								foreground: 'hsl(var(--destructive-foreground))'
							},
							muted: {
								DEFAULT: 'hsl(var(--muted))',
								foreground: 'hsl(var(--muted-foreground))'
							},
							accent: {
								DEFAULT: 'hsl(var(--accent))',
								foreground: 'hsl(var(--accent-foreground))'
							},
							popover: {
								DEFAULT: 'hsl(var(--popover))',
								foreground: 'hsl(var(--popover-foreground))'
							},
							card: {
								DEFAULT: 'hsl(var(--card))',
								foreground: 'hsl(var(--card-foreground))'
							},
						},
					}
				}
			}
		</script>
		<style type="text/tailwindcss">
			@layer base {
				:root {
					--background: 0 0% 100%;
--foreground: 240 10% 3.9%;
--card: 0 0% 100%;
--card-foreground: 240 10% 3.9%;
--popover: 0 0% 100%;
--popover-foreground: 240 10% 3.9%;
--primary: 240 5.9% 10%;
--primary-foreground: 0 0% 98%;
--secondary: 240 4.8% 95.9%;
--secondary-foreground: 240 5.9% 10%;
--muted: 240 4.8% 95.9%;
--muted-foreground: 240 3.8% 46.1%;
--accent: 240 4.8% 95.9%;
--accent-foreground: 240 5.9% 10%;
--destructive: 0 84.2% 60.2%;
--destructive-foreground: 0 0% 98%;
--border: 240 5.9% 90%;
--input: 240 5.9% 90%;
--ring: 240 5.9% 10%;
--radius: 0.5rem;
				}
				.dark {
					--background: 240 10% 3.9%;
--foreground: 0 0% 98%;
--card: 240 10% 3.9%;
--card-foreground: 0 0% 98%;
--popover: 240 10% 3.9%;
--popover-foreground: 0 0% 98%;
--primary: 0 0% 98%;
--primary-foreground: 240 5.9% 10%;
--secondary: 240 3.7% 15.9%;
--secondary-foreground: 0 0% 98%;
--muted: 240 3.7% 15.9%;
--muted-foreground: 240 5% 64.9%;
--accent: 240 3.7% 15.9%;
--accent-foreground: 0 0% 98%;
--destructive: 0 62.8% 30.6%;
--destructive-foreground: 0 0% 98%;
--border: 240 3.7% 15.9%;
--input: 240 3.7% 15.9%;
--ring: 240 4.9% 83.9%;
				}
			}
		</style>
  </head>
  <body>
    <div class="flex flex-col justify-between min-h-screen bg-background text-foreground">
        <header class="py-3 text-center">
            <h3 class="text-4xl font-bold text-primary">SOUTH-RIFT MATATU AWARDS - 2024</h3>
            <p class="mb-8 text-lg text-center text-gray-600">
                Nominations have ended. Thank you for participating! Please stay tuned—voting will begin in a short while."
            </p>
        </header>
    <main class="container py-8 mx-auto">
        <header class="py-8 text-center">
            <h1 class="text-4xl font-bold text-primary">Our Valued Sponsors</h1>
            <p class="mb-8 text-lg text-center text-gray-600">
                A heartfelt thank you to all our sponsors for their invaluable support and commitment to the success of the South-Rift Matatu Awards 2024!
            </p>
        </header>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
            <div class="flex flex-col items-center">
                <img src="{{ asset('SMRA/pumc.jpg') }}" alt="Sponsor 1 Logo" class="object-contain w-32 h-32 mb-4">
                {{-- <h3 class="text-lg font-semibold text-gray-700">PUMC</h3> --}}
                {{-- <p class="text-sm text-center text-gray-600">
                    Proud sponsor of the South-Rift Matatu Awards 2024, supporting excellence and community growth.
                </p> --}}
            </div>


            <div class="flex flex-col items-center">
                <img src="{{ asset('SMRA/Eangle Nest.png') }}" alt="Sponsor 1 Logo" class="object-contain w-32 h-32 mb-4">

            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('SMRA/1.jpg') }}" alt="Sponsor 1 Logo" class="object-contain w-32 h-32 mb-4">

            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('SMRA/Media.jpg') }}" alt="Sponsor 1 Logo" class="object-contain w-32 h-32 mb-4">

            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('SMRA/security.png') }}" alt="Sponsor 1 Logo" class="object-contain w-32 h-32 mb-4">

            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('SMRA/swam.png') }}" alt="Sponsor 1 Logo" class="object-contain w-32 h-32 mb-4">

            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('SMRA/Triple Kay.png') }}" alt="Sponsor 1 Logo" class="object-contain w-32 h-32 mb-4">

            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('SMRA/f2.jpeg') }}" alt="Sponsor 1 Logo" class="object-contain w-32 h-32 mb-4">

            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('SMRA/fg.jpeg') }}" alt="Sponsor 1 Logo" class="object-contain w-32 h-32 mb-4">

            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('SMRA/fgg.jpeg') }}" alt="Sponsor 1 Logo" class="object-contain w-32 h-32 mb-4">

            </div>

        </div>

    </main>
    <footer class="py-4 text-center bg-card text-card-foreground">
        <p>Patron Kenda Vin.</p>
    </footer>
</div>


  </body>
</html>
