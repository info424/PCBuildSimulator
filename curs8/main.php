<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("tema8.php"); ?>
<table border="1">
    <tr>
        <?php foreach($menu as $m): ?>
            <td><?php echo $m; ?> </td>
        <?php endforeach; ?>
    </tr>
</table>
</body>
</html>