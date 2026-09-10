<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <h1>Customers</h1>
    <table>
        <tr>
            <th>Profile</th>
            <th>Name</th>
            <th>Contact</th>
        </tr>
        <?php 
        foreach ($customers as $customer): ?>
            <tr>
                <td><img src="<?= $customer['image'] ?>"></td>
                <td><?= $customer['name'] ?></td>
                <td><?= $customer['contact'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>