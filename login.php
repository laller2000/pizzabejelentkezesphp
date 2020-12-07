<?php
$nev= filter_input(INPUT_POST,"name", FILTER_SANITIZE_STRING);
$jelszo= filter_input(INPUT_POST,"pwd", FILTER_SANITIZE_STRING);
if(filter_input(INPUT_POST, "submit", FILTER_VALIDATE_BOOLEAN,FILTER_NULL_ON_FAILURE)){
    //a kapott adatok ellenőrzése
    $sql='SELECT `useid`, `name`, `password` FROM `users` WHERE name="'.$nev.'" AND password="'.$jelszo.'"';
    if ($result = $conn -> query($sql)) {
        echo "Returned rows are: " . $result -> num_rows;
  // Free result set
            if($result->num_rows==1){
            $_SESSION['login']=true;
            include_once './bejelenkezesutanioldal.php';
        }
        else
        {
            $_SESSION['login']=false;
        }
    }
    
    
}

echo $nev.$jelszo;
?>

<form method="POST">
                <div class="form-group">
                    <label for='name'>Name:</label>
                    <input type='text' class="form-control" id="name" name='name'/>
                    <label for='pwd'>Password</label>
                    <input type='password'  class="form-control" id="pwd" name='pwd'/>
                    <br/>
                    <button type="submit" value="true" name='submit'>regisztrál</button>
                </div>   
            </form>

