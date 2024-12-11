<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
  </head>
  <body>
    <div class="bg-background text-foreground min-h-screen flex flex-col items-center justify-center p-6">
      <h1 class="text-5xl font-extrabold mb-10 text-center text-gradient">Vote for Your Favorite Contestants</h1>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        @foreach($categories as $category)
        <div class="bg-card p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-2xl">
            <h2 class="text-3xl font-semibold mb-6 text-primary">{{ $category->name }}</h2>
            <div class="grid grid-cols-1 gap-4">
                @foreach($category->contestants as $contestant)
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-6 w-6 text-primary border-primary rounded focus:ring focus:ring-primary/50" name="contestants[]" value="{{ $contestant->id }}">
                    <span class="ml-3 text-lg font-medium">{{ $contestant->name }}</span>
                </label>
                @endforeach
            </div>
        </div>
        @endforeach
      </div>

      <button id="submit-vote" class="bg-primary text-primary-foreground px-8 py-4 mt-10 rounded-lg shadow-md hover:bg-primary/80 transition-colors duration-200 text-xl font-semibold">Submit Vote</button>
    </div>

    <script>
      document.getElementById('submit-vote').addEventListener('click', function() {
        const selectedContestants = [];
        document.querySelectorAll('input[name="contestants[]"]:checked').forEach(function(checkbox) {
          selectedContestants.push(checkbox.value);
        });

        if (selectedContestants.length > 0) {
          fetch('{{ route('submit.vote') }}', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ contestants: selectedContestants })
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              alert('Your vote has been submitted!');
            } else {
              alert('Something went wrong. Try again!');
            }
          });
        } else {
          alert('Please select at least one contestant to vote for.');
        }
      });
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

  </body>
</html>
