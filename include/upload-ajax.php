<?php
include "connect.php";
if(isset($_COOKIE[$cookie_name])){
?>
    <form action="include/upload.php" method="post" class="upload" enctype="multipart/form-data">
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
        <input type="submit" value="upload article " class="submit " name="submit " required> </form>
    <?php
}else{
    header("location:../index.php");
}