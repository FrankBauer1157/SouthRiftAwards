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

  @extends('layouts.main')

    <div class="flex flex-col items-center justify-center min-h-screen bg-background text-primary-foreground">
    <div class="grid w-full grid-cols-1 gap-4 p-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
        <div class="overflow-hidden text-white transition-transform transform bg-blue-500 rounded-lg shadow-lg hover:scale-105">
            <div class="p-4">
                <h2 class="text-xl font-bold">Category 1: Best Matatu</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 1</span>
                    <span class="px-3 py-1 text-blue-500 bg-white rounded-full shadow">45 Nominations</span>
                </div>
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 2</span>
                    <span class="px-3 py-1 text-blue-500 bg-white rounded-full shadow">30 Nominations</span>
                </div>
            </div>
        </div>
        <div class="overflow-hidden text-white transition-transform transform bg-green-500 rounded-lg shadow-lg hover:scale-105">
            <div class="p-4">
                <h2 class="text-xl font-bold">Category 2: Best Restaurant</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 1</span>
                    <span class="px-3 py-1 text-green-500 bg-white rounded-full shadow">55 Nominations</span>
                </div>
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 2</span>
                    <span class="px-3 py-1 text-green-500 bg-white rounded-full shadow">40 Nominations</span>
                </div>
            </div>
        </div>

        <div class="overflow-hidden text-white transition-transform transform bg-yellow-500 rounded-lg shadow-lg hover:scale-105">
            <div class="p-4">
                <h2 class="text-xl font-bold">Category 3: Best Coffee Shop</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 1</span>
                    <span class="px-3 py-1 text-yellow-500 bg-white rounded-full shadow">35 Nominations</span>
                </div>
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 2</span>
                    <span class="px-3 py-1 text-yellow-500 bg-white rounded-full shadow">25 Nominations</span>
                </div>
            </div>
        </div>
        <div class="overflow-hidden text-white transition-transform transform bg-purple-500 rounded-lg shadow-lg hover:scale-105">
            <div class="p-4">
                <h2 class="text-xl font-bold">Category 4: Best Park</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 1</span>
                    <span class="px-3 py-1 text-purple-500 bg-white rounded-full shadow">50 Nominations</span>
                </div>
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 2</span>
                    <span class="px-3 py-1 text-purple-500 bg-white rounded-full shadow">45 Nominations</span>
                </div>
            </div>
        </div>
        <div class="overflow-hidden text-white transition-transform transform bg-red-500 rounded-lg shadow-lg hover:scale-105">
            <div class="p-4">
                <h2 class="text-xl font-bold">Category 5: Best Bookstore</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 1</span>
                    <span class="px-3 py-1 text-red-500 bg-white rounded-full shadow">40 Nominations</span>
                </div>
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 2</span>
                    <span class="px-3 py-1 text-red-500 bg-white rounded-full shadow">35 Nominations</span>
                </div>
            </div>
        </div>
        <div class="overflow-hidden text-white transition-transform transform bg-indigo-500 rounded-lg shadow-lg hover:scale-105">
            <div class="p-4">
                <h2 class="text-xl font-bold">Category 6: Best Cinema</h2>
            </div>
            <div class="p-4">
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 1</span>
                    <span class="px-3 py-1 text-indigo-500 bg-white rounded-full shadow">60 Nominations</span>
                </div>
                <div class="flex items-center justify-between py-2">
                    <span class="text-lg font-semibold">Awardee 2</span>
                    <span class="px-3 py-1 text-indigo-500 bg-white rounded-full shadow">55 Nominations</span>
                </div>
            </div>
        </div>
    </div>
</div>

</html>
