<?php
require_once 'config/config.php';

class Menu {
    public function getAllMenus() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM menus");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMenu($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM menus WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createMenu($data) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO menus (name, price) VALUES (?, ?)");
        return $stmt->execute([$data['name'], $data['price']]);
    }

    public function updateMenu($id, $data) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE menus SET name = ?, price = ? WHERE id = ?");
        return $stmt->execute([$data['name'], $data['price'], $id]);
    }

    public function deleteMenu($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM menus WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
