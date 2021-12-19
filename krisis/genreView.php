<?php  
include("sessionhandler.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRISIS : Genre</title>
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
           <div class="top">
               <div class="topText">
               <h3><a href="">TOP ARTICLE</a></h2>
               <br>
               <h4><a href="">Manfaat Daun Ganja Jika Tidak disalahgunakan</a></h4>
               </div>  
           </div>
            
        <div class="artikel">
        <h2 id='pagename'>Genre list</h2>
        
            <section>
                <br><br><br><br><br>
                <?php 
                for ($i=0; $i < 6; $i++) { 
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
                                    case 3:
                                        $postingan = 'OTOMOTIF';
                                        break;
                                        case 4:
                                            $postingan = 'MUSIK';
                                            break;
                                            case 5:
                                                $postingan = 'KULINER';
                                                break;
                                                case 6:
                                                    $postingan = 'SAINS';
                                                    break;
                        default:
                            # code...
                            break;
                    }
                ?>
              <div class="kategori">
                  <table>
                      <tr>
                          <form action="genre.php" method="get">
                            <input type="text" name="result" id="result" value=<?php echo"'$postingan'" ?> hidden >
                         
                              <?php 
                              for ($j=0; $j < 3; $j++) { 
                                  echo "<td> <input type='submit' value='$postingan' class='inputgenre'></td>";
                              }
                              ?>
                          </form>
                          
                      </tr>
                  </table>   
    
              <?php }?>
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