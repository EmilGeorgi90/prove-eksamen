<?php
include "connect.php";
//select all from db
                    $sql = "SELECT * FROM content ORDER BY id desc";
//prepare the sql statement
$stmt = $conn->prepare($sql);
//executes the sql statement
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$_SESSION["cardName"] = $row = $stmt->fetchAll();

//while there are text in array
                    for($i = 0; $i < count($row); $i++){
//takes the input from $row into the tables;    
$_SESSION["currentCard"][$i] = $row[$i];
?>
    <articel class="articel"> 

        <h2 class="articel-title">card title: <?php echo $row[$i][ 'cardName']?></h2>
        <hr class="style14">
        <div>
        <p class="articel-p">type:
            <?php echo $row[$i][ 'type']?>
        </p>
        <p class="articel-p">class:
            <?php echo $row[$i][ 'class']?>
        </p>
        <p class="articel-p">set:
            <?php echo $row[$i][ 'cardSet']?>
        </p>
        <p class="articel-p">card description:
            <?php echo $row[$i][ 'description']?>
        </p>
        <p class="articel-p">uploaded:
            <?php echo $row[$i][ 'published']?>
        </p>
        <p class="articel-p">username:
            <?php echo $row[$i][ 'username']?>
        </p>
        </div>
        
        <img src="<?php echo $row[$i][ 'imgSrc']?>" alt="
                      <?php echo $row[$i][ 'imgAlt']?>" class="articel-img">
        <?php 
    //check if the cookies is set
                            if(isset($_COOKIE[$cookie_name])){
                                //checking if the username are the same as blogger
            if($row[$i]['username'] == $_COOKIE[$cookie_name] || $_COOKIE["userLevel"] > 1)
    {
        //the delete form        
        ?>
            <form action="include/delete.php" method="post" class="form-control">
                <input type="text" name="cardName" hidden value="<?php echo $row[$i]['cardName'] ?>">  
                <input type="submit" value="delete" class="submit"> </form>
                <div class="">
                <button class="submit" value="update">update
                <form action="include/updateContent.php" class="update form-control" method="post" class="form-control" enctype="multipart/form-data" style="display: none">
                <input type="text" class="username" value="<?php echo $row[$i]['imgAlt']?>" name="imgAlt" placeholder="img alt" required>
        <input type="text" class="username" name="description" value="<?php echo $row[$i]['description'] ?>" placeholder="description" required>
        <label class="username" for="">type:
            <select name="type" id="" value="<?php echo $row[$i][ 'type']?>">
                <option value="minion">minion</option>
                <option value="spell">spell</option>
                <option value="weapon">weapon</option>
                <option value="quest">quest</option>
            </select>
        </label>
        <label for="" class="username">class:
            <select name="class" id="" value="<?php echo $row[$i][ 'class']?>">
                <option value="warrior">warrior</option>
                <option value="shamen">shamen</option>
                <option value="mage">mage</option>
                <option value="hunter">hunter</option>
                <option value="druid">druid</option>
                <option value="paladin">paladin</option>
                <option value="rogue">rogue</option>
                <option value="priest">priest</option>
                <option value="warlock">warlock</option>
            </select>
        </label>
        <label class="username">expantion:
            <select name="cardSet" id="" value="<?php echo $row[$i][ 'cardSet']?>">
                <option value="naxramax">naxramax</option>
                <option value="goblin vs gnomes">goblin vs gnomes</option>
                <option value="blackrock">blackrock</option>
                <option value="the grand tournement">the grand tournement</option>
                <option value="the league of explorers">the league of explorers</option>
                <option value="whispers of the old gods">whispers of the old gods</option>
                <option value="one night of karazhan">one night of karazhan</option>
                <option value="mean street of gadgetzan">mean street of gadgetzan</option>
                <option value="explore the ungoro">explore the ungoro</option>
                <option value="knigth of the frozen throne">knigth of the frozen throne</option>
            </select>
        </label>
        <label class="username"> Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $row[$i][ 'imgSrc']?>" required> </label>
        <input type="text" class="username" name="cardName" placeholder="card name" value="<?php echo $row[$i][ 'cardName']?>" required>
        <input type="submit" value="upload article " class="submit " name="submit " required>
                </form>
                </button>
                </div>
            <?php
            //if userlevel is bigger then 1 then you can delete anyway
                    }}
            ?>
    </articel>
    <?php
                        
                    }
                    ?>