
<header id="header">
    <a class="site-logo" href="#">Logo</a>
    <nav role="navigation" id="nav-main" class="okayNav">
        <?php
            require_once '../Controller/CheckLogin.php';
            if(isset($_SESSION['username'])){
                        //select role
                $username = $_SESSION['username'];
                $sql = "SELECT role FROM __account WHERE username = '$username'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $role = $row['role'];
                    if($role == 1){
        ?>  
        <ul>
            <li><a href="../View/manageAccount.php">Manage Account</a></li>
            <li><a href="../View/changePWD.php">Change Password</a></li>
            <li><a href="../View/recharge.php">Recharge</a></li>
            <li><a href="../View/withDraw.php">Withdraw</a></li>
            <li><a href="../View/transfer.php">Transfer Money</a></li>
            <li><a href="../View/account_detail.php">My Profile</a> </li>
            <li><a a href="../Controller/Logout.php">Log out </a> </li>
        </ul>
        <?php
                                }
                            }
                        }
        ?>
    </nav>
</header>
<!-- /header -->

