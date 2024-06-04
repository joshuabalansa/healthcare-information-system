<?php

class Sidebar
{
    private $routes;

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function render()
    {
?>
        <div class="sidebar-menu">
            <div class="sidebar-menu-inner">
                <header class="logo-env">
                    <div class="logo">
                        <a href="dashboard.php">
                            <p class="lead">ADMIN</p>
                            <p>@<?= $_SESSION['username'] ?></p>
                        </a>
                    </div>
                    <div class="sidebar-collapse">
                        <a href="#" class="sidebar-collapse-icon">
                            <i class="entypo-menu"></i>
                        </a>
                    </div>
                    <div class="sidebar-mobile-menu visible-xs">
                        <a href="#" class="with-animation">
                            <i class="entypo-menu"></i>
                        </a>
                    </div>
                </header>
                <ul id="main-menu" class="main-menu">
                    <?php foreach ($this->routes as $menu => [$url, $icon]) : ?>
                        <li>
                            <a href="<?= $url ?>">
                                <i class="entypo-<?= $icon ?>"></i>
                                <span class="title"><?= $menu ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <li class="has-sub">
                        <a href="#">
                            <i class="entypo-vcard"></i>
                            <span class="title">Profile</span>
                        </a>
                        <ul>
                            <li>
                                <a href="<?= $_SESSION['base_url'] ?>pages/profile/index.php">
                                    <span class="title">Edit Information</span>
                                </a>
                            </li>
                            <li>
                                <a href="../class/Logout">
                                    <span class="title">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
<?php
    }
}
?>