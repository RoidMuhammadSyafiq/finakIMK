<?php  
include("sessionhandler.php");
if (isset($_SESSION["genre"])) {
}
else
header("Location: homeView.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRISIS : Result</title>
    <link rel="stylesheet" href="..\krisis\main.css">
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
        <input type="text" name="uname" id="uname" placeholder="username" <?php
        if (isset($_COOKIE["uname"])) {
            $username = $_COOKIE['uname'];
            $pw = $_COOKIE['pw'];
            echo"value='$username'";
        }
        ?>>
        <br>
        <label for="pw">Password</label><br>
        <input type="text" name="pw" id="pw" placeholder="password"  value=<?php
        if (isset($_COOKIE["pw"])) {
            $username = $_COOKIE['uname'];
            $pw = $_COOKIE['pw'];
            echo"'$pw'";
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
           <div class="top">
               <div class="topText">
               <h3><a href="">TOP ARTICLE</a></h2>
               <br>
               <h4><a href="">Manfaat Daun Ganja Jika Tidak disalahgunakan</a></h4>
               </div>  
           </div>
            
        <div class="artikel">
        <h2 id='pagename'><?php 
        echo $_SESSION["genre"];
        ?></h2>
        
            <section>
               <?php 
                for ($i=0; $i < 3; $i++) { 
                    # code...
                    $postingan;
                    switch ($i) {
                        case 0:
                            $postingan = 'OLAHRAGA';
                            break;
                            case 1:
                                $postingan = 'SENI';
                                break;
                                case 2:
                                    $postingan = 'SOSIAL';
                                    break;
                        default:
                            # code...
                            break;
                    }
                ?>
                <br><br><br><br>
                
             
                <br>
                <br>
                
                <tr>
                <?php 
                for ($j=0; $j < 2; $j++) { 
                    # code...
                    $k=$j+1;
                    $l=$j+3;
                ?>
                <div class="kotak">
                <div class="blok">
                    <td>
                        <a href="..\krisis\pageArtikel.php"><?php echo "<img src='../krisis/src/$postingan/$k.jpg' alt='img artikel' class='artikelImg'>"; ?></a>
                        <a href="..\htdocs\krisis\pageArtikel.php"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat.</p></a>
                    </td>
                    
                </div>
                <div class="blok">
                    <td>
                        <a href="..\krisis\pageArtikel.php"><?php echo "<img src='../krisis/src/$postingan/$l.jpg' alt='img artikel' class='artikelImg'>"; ?></a>
                        <a href="..\krisis\pageArtikel.php"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat.</p></a>
                    </td>
                    
                </div>
                </div>
                
                    
                    <?php }  ?>
                </tr>
                
                
                <?php }  ?>
               
            </section>
        </div>
       <br>
        <div class="page">
            <a href=""><p>1</p></a>
            <a href=""><p>2</p></a>
            <a href=""><p>3</p></a>
        </div>
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