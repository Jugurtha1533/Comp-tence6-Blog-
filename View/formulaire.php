<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<?php
  $firstname = $name = $email = $phone = $message = "";
  if($_SERVER["REQUEST_METHOD"] == "POST"){
       $firstname = verifyinput($_POST["firstname"]);
       $name =verifyinput($_POST["name"]);
       $email = verifyinput($_POST["email"]);
       $firstname = verifyinput($_POST["phone"]);
       $firstname = verifyinput($_POST["message"]);
    }
    
    function verifyinput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        
        return $var;
    }
?>
<div class="form">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2><p>Contactez-moi</p></h2>
            </div>
            <form id="contact-form" method="post"  role="form">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="firstname" class="form-label">Prénom <span class="blue">*</span></label>
                        <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname;?>">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div class="col-lg-6">
                        <label for="name" class="form-label">Nom <span class="blue">*</span></label>
                        <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom" value="<?php echo $name;?>">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div class="col-lg-6">
                        <label for="email" class="form-label">Email <span class="blue">*</span></label>
                        <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email" value="<?php echo $email;?>">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div class="col-lg-6">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input id="phone" type="text" name="phone" class="form-control" placeholder="Votre Téléphone" value="<?php echo $phone;?>">
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div>
                        <label for="message" class="form-label">Message <span class="blue">*</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"><?php echo $message;?>"</textarea>
                        <p class="comments">Message d'erreur</p>
                    </div>
                    <div>
                        <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                    </div>
                    <div>
                        <input type="submit" class="button1" value="Envoyer">
                    </div>    
                </div>
                <p class="thank-you">Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>
            </form>
        </div>
</div>
<div class="vide">


</div>
<div class="vide">

</div>
    <?php require 'inc/footer.php' ?>