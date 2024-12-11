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
--foreground: 224 71.4% 4.1%;
--card: 0 0% 100%;
--card-foreground: 224 71.4% 4.1%;
--popover: 0 0% 100%;
--popover-foreground: 224 71.4% 4.1%;
--primary: 220.9 39.3% 11%;
--primary-foreground: 210 20% 98%;
--secondary: 220 14.3% 95.9%;
--secondary-foreground: 220.9 39.3% 11%;
--muted: 220 14.3% 95.9%;
--muted-foreground: 220 8.9% 46.1%;
--accent: 220 14.3% 95.9%;
--accent-foreground: 220.9 39.3% 11%;
--destructive: 0 84.2% 60.2%;
--destructive-foreground: 210 20% 98%;
--border: 220 13% 91%;
--input: 220 13% 91%;
--ring: 224 71.4% 4.1%;
--radius: 0.35rem;
				}
				.dark {
					--background: 224 71.4% 4.1%;
--foreground: 210 20% 98%;
--card: 224 71.4% 4.1%;
--card-foreground: 210 20% 98%;
--popover: 224 71.4% 4.1%;
--popover-foreground: 210 20% 98%;
--primary: 210 20% 98%;
--primary-foreground: 220.9 39.3% 11%;
--secondary: 215 27.9% 16.9%;
--secondary-foreground: 210 20% 98%;
--muted: 215 27.9% 16.9%;
--muted-foreground: 217.9 10.6% 64.9%;
--accent: 215 27.9% 16.9%;
--accent-foreground: 210 20% 98%;
--destructive: 0 62.8% 30.6%;
--destructive-foreground: 210 20% 98%;
--border: 215 27.9% 16.9%;
--input: 215 27.9% 16.9%;
--ring: 216 12.2% 83.9%;
				}
			}
		</style>
  </head>

   <body>
  <div class="flex flex-col items-center justify-center min-h-screen p-6 bg-background text-foreground">
    <h2 class="mb-10 text-5xl font-extrabold text-center text-gradient">Vote for Your Favorite Contestants</h2>

    <div class="grid grid-cols-1 gap-10 md:grid-cols-3">
      @foreach($categories as $category)
      <div class="p-6 transition-transform transform rounded-lg shadow-lg category-group bg-card hover:scale-105 hover:shadow-2xl">
          <h2 class="mb-6 text-3xl font-semibold text-primary">{{ $category->name }}</h2>
          <div class="grid grid-cols-1 gap-4">
              @foreach($category->contestants as $contestant)
              <label class="flex items-center">
                  <input type="radio" class="w-6 h-6 rounded form-radio text-primary border-primary focus:ring focus:ring-primary/50" name="contestants[{{ $category->id }}]" value="{{ $contestant->id }}">
                  <span class="ml-3 text-lg font-medium">{{ $contestant->name }}</span>
              </label>
              @endforeach
          </div>
      </div>
      @endforeach
    </div>

    <button id="submit-vote" class="px-8 py-4 mt-10 text-xl font-semibold transition-colors duration-200 rounded-lg shadow-md bg-primary text-primary-foreground hover:bg-primary/80">Submit Vote</button>
  </div>

  <meta name="csrf-token" content="{{ csrf_token() }}">
</body>

<script>
  document.getElementById('submit-vote').addEventListener('click', function() {
    console.log('Submit button clicked');
    const categories = document.querySelectorAll('.category-group');
    const selectedContestants = [];
    let allCategoriesValid = true;

    categories.forEach(category => {
      const selectedRadio = category.querySelector('input[type="radio"]:checked');
      if (!selectedRadio) {
        allCategoriesValid = false;
        const categoryName = category.querySelector('h2').textContent;
        alert(`Please select a contestant for the category: ${categoryName}`);
      } else {
        selectedContestants.push(selectedRadio.value);
      }
    });

    if (allCategoriesValid && selectedContestants.length > 0) {
      console.log('Selected Contestants:', selectedContestants);

      fetch('{{ route('submit.vote') }}', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ contestants: selectedContestants })
      })
      .then(response => {
  if (!response.ok) {
    // If response status is not OK, throw an error with the status code
    throw new Error('Something went wrong: ' + response.statusText);
  }
  return response.json();
})
.then(data => {
  console.log('Response:', data);
  if (data.success) {
    alert('Your vote has been submitted!');
  } else {
    alert('Something went wrong: ' + (data.message || 'Try again!'));
  }
})
.catch(error => {
  console.error('Error:', error);
  alert('Error: ' + error.message);
});

      
    }
  });
</script>

</html>
