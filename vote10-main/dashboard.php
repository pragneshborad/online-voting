<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}
$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-success">Voted</b>';
}
else{
    $status='<b class="text-danger">Not Voted</b>';
}
?>
<!DOCTYPE html>
<html lang="en" class="laxit">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system -dashboard</title>
    <link rel="stylesheet" href="voto14.css">
    <link rel="stylesheet" href="logsign.css">
    <link rel="stylesheet" href="main_pg.css">
    <link rel="stylesheet" href="footer1.css">
</head>
<body class="prince">
    <!-- navbar sections starts  -->
    <header class="header">
        <div class="logo">
            <a href="index.php">
            <img src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/null/external-vote-activism-flaticons-flat-flat-icons.png" alt="logo-bookmark">  
            VOTO.COM
            </a>
        </div>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#footer">Contact</a>
            <a href="index.php" class="btn">Log Out</a>
        </nav>


        <div class="fas fa-bars" id="menu-btn"></div>
    </header>
  <!-- navbar sections ends  -->

<div>
<div class="aman">
                <?php
                $i=0;
                if(isset($_SESSION['groups'])){
                    $groups=$_SESSION['groups'];
                    while($i<count($groups)){
                        ?>
                        <div class="grid" id="create">
                            <div class="grid-item">
                                <div class="card">
                                    <img class="card-img" src="uploads/<?php echo $groups[$i]['photo']?>" alt="Group image">
                                    <div class="card-content">
                                        <h1 class="card-header"><?php echo $groups[$i]['username']?></h1>
                                        <h3 class="card-header"><?php echo $groups[$i]['votes']?></h1>
                                        <form action="voting.php" method = "post">
                                            <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']?>">
                                            <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']?>">
                                            <?php
                                            if($_SESSION['status']==1){
                                                ?>
                                                <div class="voted">voted</div>
                                                <?php
                                            }
                                            else{
                                                ?>
                                                <button class="card-btn">VOTE <span>&rarr;</span></button>
                                                <?php
                                            }
                                            ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                $i++;
                }
            }
            else{
                ?>
                <div>
                <p>no groups to display</p>
                </div>
                <?php
            }
            ?>
</div>
</div>
<script src="main.js"></script>
</body> 
</html>