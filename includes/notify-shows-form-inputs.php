<input type="text" name="name-footer" placeholder="Name"
        value="<?php if (isset($_POST["name-footer"])) { echo $_POST["name-footer"]; }?>"/>
<input type="email" name="email-footer" id="email" placeholder="Email"
        value="<?php if (isset($_POST["email-footer"])) { echo $_POST["email-footer"]; }?>" />
<input type="submit" name="submit-footer" value="Notify Me"/>
