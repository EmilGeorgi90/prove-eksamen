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
            if($_SESSION['Articel'][$i][ 'username'] == $_COOKIE[$cookie_name] || $_COOKIE["userLevel"] > 1)
    {
        //the delete form        
        ?>
            <form action="include/delete.php" method="post" class="form-control">
                <input type="text" name="cardName" hidden value="<?php echo $_SESSION['Articel'][$i]['cardName'] ?>">
                <input type="submit" value="delete" class="submit"> </form>
                <button class="submit">update</button>
                <form action="include/updateContent.php" id="update" method="post" class="form-control" style="display: none">
                <input type="text" class="username" name="imgAlt" placeholder="img alt" required>
        <input type="text" class="username" name="description" placeholder="description" required>
        <label class="username" for="">type:
            <select name="type" id="">
                <option value="minion">minion</option>
                <option value="spell">spell</option>
                <option value="weapon">weapon</option>
                <option value="quest">quest</option>
            </select>
        </label>
        <label for="" class="username">class:
            <select name="class" id="">
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
            <select name="cardSet" id="">
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
            <input type="file" name="fileToUpload" id="fileToUpload" required> </label>
        <input type="text" class="username" name="cardName" placeholder="card name" required>
        <input type="submit" value="upload article " class="submit " name="submit " required>
                </form>
            <?php
            //if userlevel is bigger then 1 then you can delete anyway
                    }}
            ?>
            <?php
            //if userlevel is bigger then 1 then you can delete anyway
                    }
            ?>
    </articel>
    <?php
                                                      
                                       ?>