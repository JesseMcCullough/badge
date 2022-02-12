<div class="container">
    <label for="name"></label>
    <input type="text" id="name" name="name" placeholder="Name"
            value="<?php if (isset($_POST["name"])) { echo $_POST["name"]; }?>" />
</div>

<div class="container">
    <label for="date"></label>
    <input type="date" id="date" name="date" placeholder="Event Date" 
             value="<?php $todaysDate = date("Y-m-d"); if (isset($_POST["date"])) { echo $_POST["date"]; } else { echo $todaysDate; } ?>"
             min="<?php echo $todaysDate; ?>"/>
</div>

<div class="container">
    <label for="phone"></label>
    <input type="phone" id="phone" name="phone" placeholder="Phone"
            value="<?php if (isset($_POST["phone"])) { echo $_POST["phone"]; }?>" />
</div>

<div class="container">
    <label for="email"></label>
    <input type="email" id="email" name="email" placeholder="Email"
            value="<?php if (isset($_POST["email"])) { echo $_POST["email"]; }?>" />
</div>

<textarea name="comments" placeholder="Comments (optional)"><?php if (isset($_POST["comments"])) { echo $_POST["comments"]; }?></textarea>
<input type="submit" name="submit" />
