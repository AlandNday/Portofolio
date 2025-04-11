<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .success-message {
            color: green;
        }
        .error-message {
            color: red;
        }
        
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            max-width: 600px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover {
            color: black;
        }
        .add-education-btn {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .add-education-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Education Records</h1>

    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p class="error-message">{{ session('error') }}</p>
    @endif

    <button class="add-education-btn" onclick="openModal()">
        <i class="fas fa-plus"></i> Add Education
    </button>

    <div id="educationModal" class="modal">

        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Add Education</h2>
            <form action="{{ route('Educations.store') }}" method="POST">
                @csrf
                <label for="school_name">School Name:</label><br>
                <input type="text" id="school_name" name="school_name" required><br><br>

                <label for="start_date">Start Date:</label><br>
                <input type="date" id="start_date" name="start_date" required><br><br>

                <label for="end_date">End Date:</label><br>
                <input type="date" id="end_date" name="end_date" required><br><br>

                <label for="major">Major:</label><br>
                <input type="text" id="major" name="major" required><br><br>

                <button type="submit">Add Education</button>
            </form>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>School Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Major</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($educations as $education)
                <tr>
                    <td>{{ $education->school_name }}</td>
                    <td>{{ $education->start_date }}</td>
                    <td>{{ $education->end_date }}</td>
                    <td>{{ $education->major }}</td>
                    <td>
                        <a href="{{ route('Educations.edit', $education) }}">Edit</a>
                        <form action="{{ route('Educations.destroy', $education) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // Get the modal
        const modal = document.getElementById("educationModal");

        // Function to open the modal
        function openModal() {
            modal.style.display = "block";
        }

        // Function to close the modal
        function closeModal() {
            modal.style.display = "none";
        }

        // Close the modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>