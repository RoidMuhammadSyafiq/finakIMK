<?php  
include("sessionhandler.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRISIS : Forum</title>
    <link rel="stylesheet" href="..\krisis\forum.css">
</head>
<body>
<div id="modal" >
    <div class="container animate">
        <div class="upper">
        <span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">&times;</span>

        </div>
        <label for="uname" id="">Username</label><br>
        <input type="text" name="uname" id="uname" placeholder="Username" <?php
        if (isset($_COOKIE["uname"])) {
            $username = $_COOKIE['uname'];
            $pw = $_COOKIE['pw'];
            echo"value='$username'";
        }
        ?>>
        <br>
        <label for="pw">Password</label><br>
        <input type="text" name="pw" id="pw" placeholder="Password"  <?php
        if (isset($_COOKIE["pw"])) {
            $username = $_COOKIE['uname'];
            $pw = $_COOKIE['pw'];
            echo"value='$pw'";
        }
        ?> ><br>
<label for="rememberme">remember me</label> <input type="checkbox" name="rememberme" id="rememberme">
        <br><br><br><br><input type="submit" value="Login" class="inputLogin">    </form>
        </div>
    
    </div>
</div>
<script>
    var nod = document.getElementById('modal');
    window.onclick= function(event) {
    if (event.target == nod) {
        nod.style.display = "none";
    }
}
</script>
    <div class="container">
        <nav>
            <ul>
            <li><a href="..\krisis\homeView.php">Home</a></li>
            <li><a href="..\krisis\genreView.php">Genre</a></li>
            <li><a href="..\krisis\forumView.php">Forum</a></li>
            <?php 
            if (isset($_SESSION["uname"])) {
                echo " <li><a href='logout.php'>Logout</a></li>";
            } else echo"<li><button id='tombol'> Login</button></li>";
            ?>
           
            </ul>
            <script>
                document.getElementById("tombol").addEventListener("click",  function(){ document.getElementById('modal').style.display='block'});   
            </script>
            </ul>
        </nav>
        
        <main>
           
            
        <div class="artikel">
        <h2 id='pagename'>Forum</h2>
        <br><br><br><br><br><br>
            <section>
                <div class="forum">
                <table>
                   <?php
                   for ($i=0; $i < 10; $i++) { 
                      echo "<tr><td><a href='forumpage.php'>Kenapa kok di wc kok gampang dapet ilham?<br><br>created by : udin 24 nov 2019</a> </td></tr>";
                   }
                   ?>
                 
               </table>
                </div>
               
            </section>
        </div>
       
       <br><br><br><br>
        
        </main>
        <br>
        <footer>
            <p>copyright here</p>
            <a href=""><img src="" alt="instagram"></a>
            <a href=""><img src="" alt="email"></a>
            <a href=""><img src="" alt="twitter"></a>
            <a href=""><img src="" alt="apa kek"></a>
        </footer>
    </div>
    
       
</body>
</html>