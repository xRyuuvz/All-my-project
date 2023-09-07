<html>
<head>
    <title>Add Manhwa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .container {
            margin: 0 auto;
            width: 25%;
            padding: 20px;
        }
        
        .back-link {
            display: block;
            margin-bottom: 10px;
        }
        
        form {
            width: 100%;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        td {
            padding: 8px;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ddd;
        }
        
        input[type="submit"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .success-message {
            margin-top: 10px;
            color: green;
        }
        
        .error-message {
            margin-top: 10px;
            color: red;
        }
    </style>
</head>
 
<body>
<div class="container">
        <a class="back-link" href="indek.php">Go to Home</a>
        
        <form action="tambah.php" method="post" name="form1">
            <table>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="judul"></td>
                </tr>
                <tr>
                    <td>Chapter</td>
                    <td><input type="text" name="chapter"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>
        
        <?php
        if(isset($_POST['Submit'])) {
            $judul = $_POST['judul'];
            $chapter = $_POST['chapter'];
            include_once("konfig.php");
                    
            $result = mysqli_query($mysqli, "INSERT INTO manhwa(judul, chapter) VALUES('$judul', '$chapter')");
            
            if ($result) {
                echo "<p class='success-message'>Manhwa added successfully. <a href='indek.php'>View Manhwa</a></p>";
            } else {
                echo "<p class='error-message'>Error: " . mysqli_error($mysqli) . "</p>";
            }
        }
        ?>
</body>
</html>