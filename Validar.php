<div class="container">
    <?php
        $user = $_POST["user"];
        $pass = $_POST["pass"];

        if ($user == "Alex" && $pass == "1234") 
        {
            echo "Accediste";
        } 
        else
        {
            echo "Validacion Nula";
        }
    ?>
</div>