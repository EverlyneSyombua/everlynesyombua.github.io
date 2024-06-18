<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            padding: 100px 400px;
            color: white;
            font-family: Arial, sans-serif;
            background: linear-gradient(rgba(0,0,0,0.5), #000), url('KATOTO.JPG'); /* Specify the path to your image */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
           
        }
        .container {
            width: 50%;
            margin: 50px 20px;
            background-color: #fff;
            padding: 20px auto 0 auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .submitted-details {
            margin-top: 20px;
            padding: 10px;
            background-color: #333;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        /* Added image style input */
        input[type="image"] {
            max-width: 100%;
            height: auto;
            display: block;
            margin-top: 10px; /* Adjust this margin as needed */
        }
    </style>
</head>
<!-- <backgroundimgimg src="KATOTO.JPG" height="800px" width="100%">> -->
<body>

<div class="container">
    <h2>Application Form</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Format: 123-456-7890" required>
        </div>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Display submitted details
        echo "<div class='submitted-details'>";
        echo "<h2>Submitted Details</h2>";
        echo "<p><strong>Name:</strong> " . $_POST['name'] . "</p>";
        echo "<p><strong>Email:</strong> " . $_POST['email'] . "</p>";
        echo "<p><strong>Date:</strong> " . $_POST['date'] . "</p>";
        echo "<p><strong>Phone:</strong> " . $_POST['phone'] . "</p>";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>
