<?php
require_once 'controller/MenuController.php';

$controller = new MenuController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'edit':
        if ($id) {
            $controller->edit($id);
        } else {
            echo "ID tidak ditemukan.";
        }
        break;
    case 'delete':
        if ($id) {
            $controller->delete($id);
        } else {
            echo "ID tidak ditemukan.";
        }
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>
