<?php

include_once("konfig.php");

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $judul=$_POST['judul'];
    $chapter=$_POST['chapter'];

    $result = mysqli_query($mysqli, "UPDATE manhwa SET judul='$judul',chapter='$chapter' WHERE id=$id");

    header("Location: indek.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM manhwa WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $judul = $user_data['judul'];
    $chapter = $user_data['chapter'];
}
?>
<html>
<head>	
<title>Edit Manhwa Data</title>
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
    </style>
</head>
 
<body>
<div class="container">
        <a class="back-link" href="indek.php">Home</a>
        
        <form name="update_user" method="post" action="ubah.php">
            <table>
                <tr>
                    <td>Judul</td>
                    <td><input type="text" name="judul" value="<?php echo $judul;?>"></td>
                </tr>
                <tr>
                    <td>Chapter</td>
                    <td><input type="text" name="chapter" value="<?php echo $chapter;?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>