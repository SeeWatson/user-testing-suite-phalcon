<h2>Sign up using this form</h2>

<?php echo Tag::form("user/register"); ?>

 <p>
    <label for="name">Name</label>
    <?php echo Tag::textField("name") ?>
 </p>

 <p>
    <label for="email">E-Mail</label>
    <?php echo Tag::textField("email") ?>
 </p>

 <p>
    <?php echo Tag::submitButton("Register") ?>
 </p>

</form>