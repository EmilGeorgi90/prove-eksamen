<?php
include "connect.php";
//select all from db
                    $sql = "SELECT * FROM content ORDER BY id desc";
//prepare the sql statement
$stmt = $conn->prepare($sql);
//executes the sql statement
$stmt->execute();
//while there are text in array
                    while($row = $stmt->fetch()){
//takes the input from $row into the tables;    
?>
    <articel class="articel"> <img src="<?php echo $row[ 'imgSrc']?>" alt="
                           <?php echo $row[ 'imgAlt']?>" class="articel-img">
        <hr class="style14">
        <h2 class="articel-title">card title: <?php echo $row[ 'cardName']?></h2>
        <p class="articel-p">type:
            <?php echo $row[ 'type']?>
        </p>
        <p class="articel-p">class:
            <?php echo $row[ 'class']?>
        </p>
        <p class="articel-p">set:
            <?php echo $row[ 'cardSet']?>
        </p>
        <p class="articel-p">card description:
            <?php echo $row[ 'description']?>
        </p>
        <p class="articel-p">uploaded:
            <?php echo $row[ 'published']?>
        </p>
        <p class="articel-p">username:
            <?php echo $row[ 'username']?>
        </p>
        <?php 
    //check if the cookies is set
                            if(isset($_COOKIE[$cookie_name])){
                                //checking if the username are the same as blogger
            if($row['username'] == $_COOKIE[$cookie_name])
    {
        //the delete form        
        ?>
            <form action="include/delete.php" method="post">
                <input type="text" name="cardName" hidden value="<?php echo $row['cardName'] ?>">
                <input type="submit" value="delete"> </form>
            <?php
            //if userlevel is bigger then 1 then you can delete anyway
    }elseif ($_COOKIE["userLevel"] > 1){
                ?>
                <form action="include/delete.php" method="post">
                    <input type="text" name="cardName" hidden value="<?php echo htmlspecialchars($row['cardName']) ?>">
                    <input type="submit" value="delete"> </form>
                <?php } } ?>
    </articel>
    <?php
                    }
                        
                    
                    ?>