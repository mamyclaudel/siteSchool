<?php session_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="text-center text-muted mt-5" style="font-size:30px;">Connexion</h2>
            <form action="<?php echo URL;?>index.php?action=seconnecter" class="form form-group border p-4" style="border-radius:3%;" method="POST">
            <!-- <p class="text-center" style="color:red; font-style: italic; font-family:time new roman;"><?php echo $_SESSION["erreur"]; ?></p>     -->
            <input type="text" class="form-control mt-4 mb-2" name="pseudomail" id="pseudomail"  autocomplete="false" placeholder ="mail ou pseudo">
                <input type="password" class="form-control mb-2" name="password"  autocomplete="false" id="password" placeholder="password">
                <label class="form-check-label" style="font-style: italic; font-family:time new roman; cursor: pointer;">
                    <input type="checkbox"  name="showpwd" id="showpwd" value ="show" > Show password
                </label>
                <input type="submit" class = "btn btn-outline-primary btn-block" name="btnconnect" value="Connect">
                <input type="submit" class = "btn btn-outline-warning btn-block" name="btncreate" value="Create a new count">
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
