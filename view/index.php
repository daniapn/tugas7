<!DOCTYPE html>
<html>
<head>
    <title>Menu Restoran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Menu Restoran</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($menus as $menu): ?>
        <tr>
            <td><?= $menu['id'] ?></td>
            <td><?= $menu['name'] ?></td>
            <td><?= $menu['price'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $menu['id'] ?>">Edit</a>
                <a href="index.php?action=delete&id=<?= $menu['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a class="add-menu" href="index.php?action=create">Tambah Menu</a>
</body>
</html>
