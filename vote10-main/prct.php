<div class="grid" id="create">
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="uploads/<?php echo $groups[$i]['photo']?>" alt="Group image">
          <div class="card-content">
            <h1 class="card-header"><?php echo $groups[$i]['username']?></h1>
            <h3 class="card-header"><?php echo $groups[$i]['votes']?></h1>
            <button class="card-btn">VOTE <span>&rarr;</span></button>
          </div>
        </div>
      </div>
    </div>
    <button class="bg-danger my-3 text-white px-3" type="submit">vote</button>



                      <div class="row">
                        <div class="col-md-4">
                            <img src="uploads/<?php echo $groups[$i]['photo']?>" alt="Group image">
                        </div>
                        <div class="col-md-8">
                            <strong class="text-dark h5">Group name:</strong>
                            <?php echo $groups[$i]['username']?><br>
                            <strong class="text-dark h5">votes:</strong>
                            <?php echo $groups[$i]['votes']?><br>
                        </div>















                        <div class="col-md-5">
                <img src="uploads/<?php echo $data['photo'] ?>" alt="User image">
                <br>
                <br>
                <strong class="text-dark h5">Name:</strong>
                <?php echo $data['username'];?><br><br>
                <strong class="text-dark h5">mobile:</strong>
                <?php echo $data['mobile'];?><br><br>
                <strong class="text-dark h5">Status:</strong>
                <?php echo $status;?><br><br>

            </div>


















            <form action="voting.php" method = "post">
                    <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']?>">
                    <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']?>">
                    <?php
                    if($_SESSION['status']==1){
                        ?>
                        <div class="bg-success my-3 text-white px-3">voted</div>
                        <?php
                    }
                    else{
                        ?>
                        <?php
                    }
                    ?>
                    </form>