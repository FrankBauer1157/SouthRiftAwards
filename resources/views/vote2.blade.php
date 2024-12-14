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
    {{-- <h2 class="mb-10 text-5xl font-extrabold text-center text-gradient">Vote for Your Favorite Contestants</h2> --}}
    {{-- <h4 class="text-4xl font-bold" style="
    background: linear-gradient(to right, #ff9800, #ffc107, #fdd835);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
">
Vote for Your Favorite Contestants
</h4> --}}
    <div id="notification" class="notification" style="display: none;">
        <span id="notification-message"></span>
        <button id="notification-close" onclick="hideNotification()"></button>
      </div>
      <style>
        .notification {
          position: fixed;
          top: 0;
          left: 0;
          right: 0;
          background-color: #f44336; /* Error background */
          color: rgb(17, 17, 17);
          text-align: center;
          padding: 15px;
          font-size: 16px;
          z-index: 1000;
        }
        .notification.success {
          background-color: #4CAF50; /* Success background */
        }
        .notification.warning {
          background-color: #FFC107; /* Warning background */
        }
        .notification.info {
          background-color: #2196F3; /* Info background */
        }
        #notification-close {
          background: none;
          border: none;
          color: white;
          font-weight: bold;
          font-size: 16px;
          margin-left: 15px;
          cursor: pointer;
        }
      </style>

<div class="flex flex-col items-center p-12 bg-white">
  <img src="{{ asset('logo.jpeg') }}"
       alt="PUMC Logo"
       class="object-contain w-64 h-64 mb-4 rounded-lg sm:w-80 sm:h-80 md:w-96 md:h-96">
</div>

  <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
    @foreach($categories as $category)
    <div class="p-4 transition-transform transform rounded-lg shadow-lg category-group bg-card hover:scale-105 hover:shadow-2xl">
        <h2 class="mb-4 text-xl font-semibold text-primary md:text-2xl">{{ $category->name }}</h2>
        <div class="grid grid-cols-1 gap-3">
            @foreach($category->contestants as $contestant)
            <label class="flex items-center">
                <input type="radio" class="w-5 h-5 rounded form-radio text-primary border-primary focus:ring focus:ring-primary/50"
                       name="contestants[{{ $category->id }}]"
                       value="{{ $contestant->id }}">
                @if ($contestant->image_url)
                    <img src="{{ asset('drivers/' . $contestant->image_url) }}"
                         alt="{{ $contestant->name }}"
                         class="object-cover w-10 h-10 ml-3 border rounded-full">
                @else
                    <img src="{{ asset('default.png') }}"
                         alt="Default Image"
                         class="object-cover w-10 h-10 ml-3 border rounded-full">
                @endif
                <span class="ml-4 text-sm font-medium md:text-base">{{ $contestant->name }}</span>
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
  const categories = document.querySelectorAll('.category-group');
  const selectedContestants = [];
  let allCategoriesValid = true;

  categories.forEach(category => {
    const selectedRadio = category.querySelector('input[type="radio"]:checked');
    if (!selectedRadio) {
      allCategoriesValid = false;
      const categoryName = category.querySelector('h2').textContent;
      showNotification(`Please select a contestant for the category: ${categoryName}`, 'warning');
    } else {
      selectedContestants.push(selectedRadio.value);
    }
  });

  if (allCategoriesValid && selectedContestants.length > 0) {
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
        return response.json().then(err => {
          throw err; // Pass error object
        });
      }
      return response.json();
    })
    .then(data => {
      if (data.success) {
        showNotification('Your vote has been submitted!', 'success');
      } else if (data.redirect) {
        // Redirect the user if the response contains a redirect URL
        window.location.href = data.redirect;
      } else {
        showNotification(data.message || 'Something went wrong. Try again!', 'error');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      if (error.redirect) {
        window.location.href = error.redirect; // Redirect if error contains redirect
      } else {
        showNotification('Error: ' + (error.message || 'Unknown error occurred'), 'error');
      }
    });
  }

  function showNotification(message, type = 'error') {
  const notification = document.getElementById('notification');
  const messageElement = document.getElementById('notification-message');

  messageElement.textContent = message;
  notification.className = `notification ${type}`; // Add the type class
  notification.style.display = 'block';

  // Auto-hide after 5 seconds
  setTimeout(() => {
    hideNotification();
  }, 5000);
}

function hideNotification() {
  const notification = document.getElementById('notification');
  notification.style.display = 'none';
}




});


</script>

</html>
