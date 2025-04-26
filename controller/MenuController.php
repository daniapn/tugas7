<?php
require_once 'model/Menu.php';

class MenuController {
    private $menuModel;

    public function __construct() {
        $this->menuModel = new Menu();
    }

    public function index() {
        $menus = $this->menuModel->getAllMenus();
        include 'view/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->menuModel->createMenu($_POST);
            header('Location: index.php');
        }
        include 'view/create.php';
    }

    public function edit($id) {
        $menu = $this->menuModel->getMenu($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->menuModel->updateMenu($id, $_POST);
            header('Location: index.php');
        }
        include 'view/edit.php';
    }

    public function delete($id) {
        $this->menuModel->deleteMenu($id);
        header('Location: index.php');
    }
}
?>
