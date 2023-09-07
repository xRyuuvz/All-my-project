<?php
include_once("konfig.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM manhwa ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
        }
        
        .container {
            margin: 0 auto;
            width: 60%;
            padding: 20px;
        }
        
        .add-link {
            display: block;
            text-align: right;
            margin-bottom: 10px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        td a {
            text-decoration: none;
            margin-right: 5px;
        }
        
        td a:hover {
            font-weight: bold;
        }
    </style>

</head>
 
<body>
<div class="container">
        <h1>Manhwa List</h1>
        <a class="add-link" href="tambah.php">Add New Manhwa</a>
    <table>
            <tr>
                <th>Judul</th>
                <th>Chapter</th>
                <th>Actions</th>
            </tr>
            
            <?php while($user_data = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $user_data['judul']; ?></td>
                    <td><?php echo $user_data['chapter']; ?></td>
                    <td>
                        <a href="ubah.php?id=<?php echo $user_data['id']; ?>">Edit</a>
                        |
                        <a href="hapus.php?id=<?php echo $user_data['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>