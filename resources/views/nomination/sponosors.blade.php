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
    <header class="py-8 text-center">
        <h1 class="text-4xl font-bold text-primary">Our Valued Sponsors</h1>
        <p class="mb-6 text-center text-muted-foreground">
            We are grateful for the support of our sponsors who make this event possible.
          </p>
    </header>
    <main class="container py-8 mx-auto">
        <p class="mb-8 text-lg text-center text-muted">Thank you to all our sponsors for their generous support!</p>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">

            <div class="flex flex-col items-center justify-center p-4 transition duration-300 rounded-lg shadow-lg bg-secondary hover:bg-secondary/80">
                <img src="SRMA/pumc.jpg" alt="Sponsor 1" class="object-contain w-32 h-32 mb-4">
                <h2 class="mb-2 text-lg font-bold text-secondary-foreground">PUMC</h2>
                <p class="text-center text-muted-foreground">Pkulel Univercity Meta Campus</p>
            </div>

            <div class="flex flex-col items-center justify-center p-4 transition duration-300 rounded-lg shadow-lg bg-accent hover:bg-accent/80">
                <img src="https://openui.fly.dev/openui/200x200.svg?text=Sponsor2" alt="Sponsor 2" class="object-contain w-32 h-32 mb-4">
                <h2 class="mb-2 text-lg font-bold text-accent-foreground">Sponsor 2</h2>
                <p class="text-center text-muted-foreground">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="flex flex-col items-center justify-center p-4 transition duration-300 rounded-lg shadow-lg bg-destructive hover:bg-destructive/80">
                <img src="https://openui.fly.dev/openui/200x200.svg?text=Sponsor3" alt="Sponsor 3" class="object-contain w-32 h-32 mb-4">
                <h2 class="mb-2 text-lg font-bold text-destructive-foreground">Sponsor 3</h2>
                <p class="text-center text-muted-foreground">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class="flex flex-col items-center justify-center p-4 transition duration-300 rounded-lg shadow-lg bg-muted hover:bg-muted/80">
                <img src="https://openui.fly.dev/openui/200x200.svg?text=Sponsor4" alt="Sponsor 4" class="object-contain w-32 h-32 mb-4">
                <h2 class="mb-2 text-lg font-bold text-muted-foreground">Sponsor 4</h2>
                <p class="text-center text-muted-foreground">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>

            <div class="flex flex-col items-center justify-center p-4 transition duration-300 rounded-lg shadow-lg bg-primary hover:bg-primary/80">
                <img src="https://openui.fly.dev/openui/200x200.svg?text=Sponsor5" alt="Sponsor 5" class="object-contain w-32 h-32 mb-4">
                <h2 class="mb-2 text-lg font-bold text-primary-foreground">Sponsor 5</h2>
                <p class="text-center text-muted-foreground">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </main>
    <footer class="py-4 text-center bg-card text-card-foreground">
        <p>Thank you to all our sponsors for their generous support!</p>
    </footer>
</div>


  </body>
</html>
