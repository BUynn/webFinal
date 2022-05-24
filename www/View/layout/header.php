<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">E-wallet</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="./" class="navbar-brand">E-wallet</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
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
      <ul class="nav navbar-nav navbar-right">
       
        <li>
         
          <a href="../View/manageAccount.php">Manage Account</a>

        </li>
        <li>
            <li><a href="../View/changePWD.php">Change Password</a></li>
        </li>
        <li>
            <li><a href="../View/recharge.php">Recharge</a></li>
        </li>
        
        <li class="active">
            <li><a href="../View/withDraw.php">Withdraw</a></li>
        </li>
        <li>
            <li><a href="../View/transfer.php">Transfer Money</a></li>
        </li>
        <li>
            <li><a href="../View/account_detail.php">My Profile</a> </li>
        </li>
        <li>
            <li><a a href="../Controller/Logout.php">Log out </a> </li>
        </li>
      </ul>
      <?php
                                }
                            }
                        }
        ?>

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
                    if($role == 0){
        ?> 
           <ul class="nav navbar-nav navbar-right">
       <li>
           <li><a href="../View/changePWD.php">Change Password</a></li>
       </li>
       <li>
           <li><a href="../View/recharge.php">Recharge</a></li>
       </li>
       
       <li class="active">
           <li><a href="../View/withDraw.php">Withdraw</a></li>
       </li>
       <li>
           <li><a href="../View/transfer.php">Transfer Money</a></li>
       </li>
       <li>
           <li><a href="../View/account_detail.php">My Profile</a> </li>
       </li>
       <li>
           <li><a a href="../Controller/Logout.php">Log out </a> </li>
       </li>
     </ul> 
     <?php
                                }
                            }
                        }
        ?>
    </nav>
  </div>
</header>