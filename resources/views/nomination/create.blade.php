@extends('layouts.app')

 <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fb;
            color: var(--dark-color);
            line-height: 1.6;
        }

        .container-main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .card-custom {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            margin-bottom: 24px;
        }

        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .card-header-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 16px 20px;
            border-bottom: none;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 8px;
            padding: 12px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
        }

        .info-icon {
            color: var(--primary-color);
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .step-indicator {
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }

        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            width: 100px;
        }

        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 8px;
            z-index: 2;
        }

        .step.active .step-circle {
            background-color: var(--primary-color);
            color: white;
        }

        .step.completed .step-circle {
            background-color: var(--secondary-color);
            color: white;
        }

        .step-line {
            position: absolute;
            top: 20px;
            left: 70px;
            width: 60px;
            height: 2px;
            background-color: #e9ecef;
            z-index: 1;
        }

        .step:last-child .step-line {
            display: none;
        }

        .step.active .step-line,
        .step.completed .step-line {
            background-color: var(--primary-color);
        }

        .step-text {
            font-size: 0.85rem;
            text-align: center;
            color: #6c757d;
        }

        .step.active .step-text {
            color: var(--primary-color);
            font-weight: 600;
        }

        .illustration {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }

        .form-control-custom {
            border-radius: 8px;
            padding: 12px 16px;
            border: 1px solid #dee2e6;
            transition: all 0.3s ease;
        }

        .form-control-custom:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(76, 201, 240, 0.25);
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark-color);
        }

        .note-text {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 8px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 16px;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .success-icon {
            color: #28a745;
            font-size: 4rem;
            margin-bottom: 20px;
        }

        /* Mobile-specific styles */
        @media (max-width: 768px) {
            .container-main {
                padding: 15px;
            }

            .card-custom {
                margin-bottom: 20px;
            }

            .step {
                width: 80px;
            }

            .step-line {
                width: 40px;
                left: 60px;
            }

            .step-text {
                font-size: 0.75rem;
            }

            .btn-primary-custom {
                padding: 14px 20px;
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .step {
                width: 70px;
            }

            .step-line {
                width: 30px;
                left: 50px;
            }

            .step-circle {
                width: 36px;
                height: 36px;
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
