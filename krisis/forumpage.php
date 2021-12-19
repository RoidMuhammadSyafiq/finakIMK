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
        <div class="login" class="modal-content animate">
        <form action="login.php" method="post">
      
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
        <br><br><br><br><input type="submit" value="Login" class="inputLogin">
    </form>
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
          <h2>Kenapa kok di wc kok gampang dapet ilham?</h2>
          <p>created by : Ilham Pambudi</p>
          <br><br><br>
          <p id="forumcontent">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
 explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
 sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
  Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
   adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et </p>
                <div class="forum">
                <br><br><br><br>
                   <div class="line"></div>
                   <div id="genre"><h2>Balasan</h2></div>
                   <br><br>
                   <div class="komentabel">
                      
                       <table id="komen">
                           
                              </table>
                              <br><br><br><br>
                   </div>
               </div>
               <?php 
               
                   if (isset($_SESSION["uname"])) {
                    $uname = $_SESSION["uname"];
                       echo " <label for='username'>username  :</label><input type='text' id='username' value='$uname'>";
                   }else echo "<p>Sebelum komen login dahulu :)</p>";
                   ?>
                  <br>
                   <textarea name="" id="komentar" cols="80" rows="10" <?php 
                   if (isset($_SESSION["uname"])) {
                       # code...
                   }else echo "readonly";
                   ?> ></textarea>
                   <button type="button" id="send" onclick="send()" <?php 
                   if (isset($_SESSION["uname"])) {
                       # code...
                   }else echo "disabled";
                   ?>>Kirim</button>
                   <button type="button" id="send" onclick="send()" <?php 
                   if (isset($_SESSION["uname"])) {
                       # code...
                   }else echo "disabled";
                   ?>>Report</button>
                   <br><br><br><br><br>
                </div>
                
               
            </section>
        </div>
        <script src="forum.js"></script>
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