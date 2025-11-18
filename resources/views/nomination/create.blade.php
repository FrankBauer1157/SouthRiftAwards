@extends('layouts.app')

<style>
    .col-md-4 {
  /* //  text-align: center; */
    padding: 20px;
    background-color: #f9f9f9; /* Light background for contrast */
    border-radius: 8px; /* Soft rounded corners */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    margin: 20px 0;
}

.col-md-4 img {
    max-width: 100%;
    height: auto;
    border-radius: 8px; /* Rounded corners for the image */
    margin-bottom: 20px; /* Space between image and text */
}

.col-md-4 p {
    font-size: 14px;
    color: #6c757d; /* Muted text color */
    line-height: 1.6; /* Better line spacing for readability */
    margin-bottom: 10px; /* Space between paragraphs */
}

.col-md-4 p.text-muted {
    font-weight: bold; /* Lighter font weight for the muted text */
}

/* Add some responsiveness for smaller screens */
@media (max-width: 767px) {
    .col-md-4 {
        padding: 15px;
    }

    .col-md-4 p {
        font-size: 13px;
    }
}

.container {
    max-width: 960px; /* Limit the container width for better readability */
    margin: 0 auto; /* Center the container horizontally */
    padding: 20px;
}

.container h1 {
    font-size: 36px; /* Large text for the heading */
    font-weight: bold;
    color: #343a40; /* Dark text color */
    margin-bottom: 20px; /* Space below the heading */
    text-align: center; /* Center the heading */
}

.container p.lead {
    font-size: 18px; /* Slightly larger text for the paragraph */
    color: #6c757d; /* Muted color for the text */
    line-height: 1.6; /* Increase line height for readability */
    text-align: center; /* Center the paragraph */
    margin-bottom: 40px; /* Space below the paragraph */
}

/* Responsive Design for Small Screens */
@media (max-width: 767px) {
    .container h1 {
        font-size: 28px; /* Slightly smaller heading on mobile */
    }

    .container p.lead {
        font-size: 16px; /* Slightly smaller text for better mobile readability */
    }
}



</style>
@section('content')



{{-- image --}}

    <div class="container-main">
        <div class="text-center mb-4">
            <h1 class="display-5 fw-bold text-primary">South-Rift Matatu Awards 2024</h1>
            <p class="lead">Nominate your favorite personalities for the South-Rift Matatu Awards</p>
        </div>

        <!-- Step Indicator -->
        <div class="step-indicator">
            <div class="step active" id="step1">
                <div class="step-circle">1</div>
                <div class="step-line"></div>
                <div class="step-text">Information</div>
            </div>
            <div class="step" id="step2">
                <div class="step-circle">2</div>
                <div class="step-line"></div>
                <div class="step-text">Nomination</div>
            </div>
            <div class="step" id="step3">
                <div class="step-circle">3</div>
                <div class="step-text">Complete</div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="section active" id="info-section">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-custom">
                        <div class="card-header card-header-custom text-center">
                            <h3 class="mb-0">Nomination Information</h3>
                        </div>
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-5 text-center mb-4 mb-md-0">
                                    <img src="{{ asset('success.png') }}" alt="Nomination" class="illustration">
                                </div>
                                <div class="col-md-7">
                                    <h4 class="mb-3">How It Works</h4>
                                    <div class="info-item">
                                        <span class="info-icon">✓</span>
                                        <div>
                                            <h6 class="mb-1">Nomination Phase</h6>
                                            <p class="mb-0 text-muted">Submit your nominations for your favorite personalities.</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-icon">✓</span>
                                        <div>
                                            <h6 class="mb-1">Judging Process</h6>
                                            <p class="mb-0 text-muted">All nominations will be reviewed by our panel of judges.</p>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-icon">✓</span>
                                        <div>
                                            <h6 class="mb-1">Voting Phase</h6>
                                            <p class="mb-0 text-muted">Voting will begin immediately after nominations are complete.</p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-primary-custom w-100" onclick="showNominationForm()">Start Nomination</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nomination Form Section -->
        <div class="section" id="nomination-section">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-custom">
                        <div class="card-header card-header-custom text-center">
                            <h3 class="mb-0">Submit Your Nomination</h3>
                        </div>
                        <div class="card-body p-4">
                            <form id="nominationForm" action="{{ route('nomination.store') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="category" class="form-label">Award Category</label>
                                    <select name="category_id" id="category" class="form-select form-control-custom" required>
                                        <option value="">-- Select a Category --</option>
                                        <!-- Categories will be populated here -->
                                    </select>
                                    <p class="note-text mt-2">
                                        <strong>Note:</strong> Categories you've already nominated for will not appear in this list.
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <label for="name" class="form-label">Nominee Name</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-custom" placeholder="Enter the nominee's full name" required>
                                </div>

                                <div class="mb-4">
                                    <label for="reason" class="form-label">Reason for Nomination</label>
                                    <textarea name="reason" id="reason" class="form-control form-control-custom" rows="5" placeholder="Please explain why this nominee deserves to win in this category..." required></textarea>
                                    <div class="form-text">Be specific about the nominee's achievements and contributions.</div>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-outline-secondary me-md-2" onclick="showInfoSection()">Back</button>
                                    <button type="submit" class="btn btn-primary-custom">Submit Nomination</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Completion Section -->
        <div class="section" id="completion-section">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-custom">
                        <div class="card-body text-center p-5">
                            <div class="success-icon">✓</div>
                            <h3 class="mb-3">Thank You for Your Nomination!</h3>
                            <p class="mb-4">Your nomination has been successfully submitted and is now under review by our judges.</p>
                            <div class="alert alert-info">
                                <h5>What's Next?</h5>
                                <p class="mb-0">Nominations have ended. Thank you for participating! Please stay tuned—voting for the South-Rift Matatu Awards 2025 will begin soon.</p>
                            </div>
                            <button class="btn btn-primary-custom mt-3" onclick="showInfoSection()">Return to Home</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="responseModal" tabindex="-1" aria-labelledby="responseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="responseModalLabel">Nomination Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <input type="text" name="phone" style="display:none;">
            </div>
            <div class="modal-body">
                <!-- Image to display based on success/failure -->
                <img id="responseImage" src="" alt="Response Image" class="mb-3 img-fluid" />
                <div id="responseMessage" class="alert" style="display: block;"></div> <!-- This will display the message -->
            </div>
            <div class="modal-footer">
                <label>Patron: Kenda Vin</label>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection


<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
//done()
   loadcategories()


    const form = document.getElementById('nominationForm');
    const responseModal = new bootstrap.Modal(document.getElementById('responseModal'));
    const responseMessage = document.getElementById('responseMessage');
    const responseImage = document.getElementById('responseImage');  // Ensure you have this element

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission behavior

        const formData = new FormData(form);

        // Send the AJAX request
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        })
        .then(response => response.json()) // Parse the JSON response
        .then(data => {
            // Display the message in the modal
            responseMessage.textContent = data.message;
            responseMessage.style.color = data.success ? 'black' : 'red'; // Success = green, error = red

            // Set the image based on success/failure
            if (data.success) {
                responseImage.src = "/thisok.png";  // Correct path to image in public folder
            } else {
                responseImage.src = "/failed2.jpg"; // Set error image
            }

            responseModal.show();
            loadcategories()

            // Reset the form only if the submission is successful
            if (data.success) {
                form.reset();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            responseMessage.textContent = 'An error occurred. Please try again.';
            responseMessage.style.color = 'red';

            // Show error image if there is an issue
            responseImage.src = "/path_to_error_image.png"; // Error image
            responseModal.show();
        });
    });
});





//showcategories onclick
function showcategories() {
    const categories = document.getElementById('categories');
    const info = document.getElementById('info');
    if (categories.style.display === 'none') {

        categories.style.display = 'block';
        info.style.display = 'none';
    } else {
        categories.style.display = 'none';
        info.style.display = 'block';
    }
}

function loadcategories() {
    const categorySelect = document.getElementById('category');

        // Fetch categories based on IP check
        fetch('/categories/check')
    .then(response => response.json())
    .then(data => {
        // Clear existing options
        const categorySelect = document.getElementById('category');
        categorySelect.innerHTML = '<option value="">-- Select a Category. --</option>';

        if (data.length === 0) {
            // If no categories are returned, call the done() function
            done();
        } else {
            undone();
            // Add fetche;d categories to the select dropdown
            data.forEach(category => {
                const option = document.createElement('option');
                option.value = category.id;
                option.textContent = category.name;
                categorySelect.appendChild(option);
            });
        }
    })
    .catch(error => {
        console.error('Error fetching categories:', error);
        // Optional: Handle errors if needed
    });



}

function done() {
    const done = document.getElementById('done');
    const info = document.getElementById('info');
    const categories = document.getElementById('categories');
  info.style.display = 'none';
  categories.style.display = 'none';
  done.style.display = 'block';
}

function undone() {
    const done = document.getElementById('done');
    const info = document.getElementById('info');
    const categories = document.getElementById('categories');
//   info.style.display = 'block';
//   categories.style.display = 'block';
  done.style.display = 'none';
}







// function done() {
//     const done = document.getElementById('done');
//     const info = document.getElementById('info');
//     const categories = document.getElementById('categories');
//   info.style.display = 'none';
//   categories.style.display = 'none';
//   done.style.display = 'block';
// }

// function undone() {
//     const done = document.getElementById('done');
//     const info = document.getElementById('info');
//     const categories = document.getElementById('categories');
// //   info.style.display = 'block';
// //   categories.style.display = 'block';
//   done.style.display = 'none';
// }



</script>
