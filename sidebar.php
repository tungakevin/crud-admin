<a href="index.php" class="brand-link bg-dark">
    <!-- <img src="./dist/img/miner-with-mining-equipment-design-character-on-white-background-free-vector.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="fas fa-user-circle text-lg flex flex-column"></span>
    <span class="brand-text font-weight-light"><?php print $_SESSION['user']['username'];?></span>
</a>

<!-- Sidebar -->
<div class="sidebar bg-dark">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="./index.php" class="nav-link"><i class="fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>



            
            <!-- Services -->
            <?php 
                if($_SESSION['user']['type'] == 'admin'){
                    ?>
                    <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-database"></i>
                    <p>
                        Users
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./createUser.php" class="nav-link">
                            <i class="fa fa-user-plus nav-icon"></i>
                            <p>Add New User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./user.php" class="nav-link">
                            <i class="fa fa-users nav-icon"></i>
                            <p>Users</p>
                        </a>
                    </li>
                </ul>
            </li>
                    <?php
                }
            ?>
            <!-- Settings -->
            <li class="nav-item">
                <a href="ibirego.php" class="nav-link">
                    <i class="nav-icon fa fa-balance-scale"></i>
                    <p>
                        Ibirego
                        <!-- <i class="fas fa-angle-left right"></i> -->
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-cog"></i>
                    <p>
                        Settings
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./profileSetting.php" class="nav-link">
                            <i class="fas fa-user nav-icon"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="./logout.php" class="nav-link">
                            <i class="fas fa-sign-out-alt nav-icon"></i>
                            <p>Sign Out</p>
                        </a>
                    </li>
                </ul>
            </li>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->