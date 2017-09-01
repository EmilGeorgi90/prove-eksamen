<?php
    for ($i = 0; $i < count($_SESSION['Articel']); $i++){
?>
    <articel class="articel"> <img src="<?php echo $_SESSION['Articel'][$i][ 'imgSrc']?>" alt="
                        <?php echo $_SESSION['Articel'][$i][ 'imgAlt']?>" class="articel-img">
        <hr class="style14">
        <h2 class="articel-title">card title: <?php echo $_SESSION['Articel'][$i][ 'cardName']?></h2>
        <p class="articel-p">type:
            <?php echo $_SESSION['Articel'][$i][ 'type']?>
        </p>
        <p class="articel-p">class:
            <?php echo $_SESSION['Articel'][$i][ 'class']?>
        </p>
        <p class="articel-p">set:
            <?php echo $_SESSION['Articel'][$i][ 'cardSet']?>
        </p>
        <p class="articel-p">card description:
            <?php echo $_SESSION['Articel'][$i][ 'description']?>
        </p>
        <p class="articel-p">uploaded:
            <?php echo $_SESSION['Articel'][$i][ 'published']?>
        </p>
        <p class="articel-p">username:
            <?php echo $_SESSION['Articel'][$i][ 'username']?>
        </p>
        <?php 
    //check if the cookies is set
                            if(isset($_COOKIE[$cookie_name])){
                                //checking if the username are the same as blogger
            if($_SESSION['Articel'][$i]['username'] == $_COOKIE[$cookie_name])
    {
        //the delete form        
        ?>
            <form action="include/delete.php" method="post">
                <input type="text" name="cardName" hidden value="<?php echo $_SESSION['Articel'][$i]['cardName'] ?>">
                <input type="submit" value="delete"> </form>
            <?php
            //if userlevel is bigger then 1 then you can delete anyway
    }elseif ($_COOKIE["userLevel"] > 1){
                ?>
                <form action="include/delete.php" method="post">
                    <input type="text" name="cardName" hidden value="<?php echo htmlspecialchars($_SESSION['Articel'][$i]['cardName']) ?>">
                    <input type="submit" value="delete"> </form>
                <?php } } ?>
    </articel>
    <?php
                                                      }
                                       ?>