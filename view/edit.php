<!DOCTYPE html>
<html>
<head>
    <title>Edit Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Edit Menu</h1>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="name" value="<?= $menu['name'] ?>" required>
        <br>
        <label>Harga:</label>
        <input type="number" name="price" value="<?= $menu['price'] ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a class="back-link" href="index.php">Kembali</a>
</body>
</html>
