<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .category {
            margin-bottom: 20px;
        }
        .category h2 {
            font-size: 1.2em;
            color: #555;
        }
        .contestant {
            margin: 10px 0;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
        }
        .vote-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        .vote-btn:disabled {
            background-color: #ccc;
        }
        .vote-btn:hover {
            background-color: #45a049;
        }
        .category-buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .category-buttons button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .category-buttons button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vote for Your Favorite Contestants</h1>

        <form id="votingForm">
            <div class="category" id="category1">
                <h2>Category 1</h2>
                <div class="contestant">
                    <span>Contestant A</span>
                    <button type="button" class="vote-btn" onclick="vote('category1', 'Contestant A')">Vote</button>
                </div>
                <div class="contestant">
                    <span>Contestant B</span>
                    <button type="button" class="vote-btn" onclick="vote('category1', 'Contestant B')">Vote</button>
                </div>
                <div class="contestant">
                    <span>Contestant C</span>
                    <button type="button" class="vote-btn" onclick="vote('category1', 'Contestant C')">Vote</button>
                </div>
            </div>

            <div class="category" id="category2">
                <h2>Category 2</h2>
                <!-- Repeat similar structure for Category 2 -->
            </div>

            <div class="category" id="category3">
                <h2>Category 3</h2>
                <!-- Repeat similar structure for Category 3 -->
            </div>

            <div class="category" id="category4">
                <h2>Category 4</h2>
                <!-- Repeat similar structure for Category 4 -->
            </div>

            <div class="category" id="category5">
                <h2>Category 5</h2>
                <!-- Repeat similar structure for Category 5 -->
            </div>

            <div class="category" id="category6">
                <h2>Category 6</h2>
                <!-- Repeat similar structure for Category 6 -->
            </div>

            <div class="category-buttons">
                <button type="submit">Submit Votes</button>
            </div>
        </form>
    </div>

    <script>
        let votes = {
            category1: null,
            category2: null,
            category3: null,
            category4: null,
            category5: null,
            category6: null,
        };

        function vote(category, contestant) {
            votes[category] = contestant;
            alert(`You voted for ${contestant} in ${category}`);
        }

        document.getElementById('votingForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Votes submitted successfully!');
            console.log(votes); // Send votes to your backend here
        });
    </script>
</body>
</html>
