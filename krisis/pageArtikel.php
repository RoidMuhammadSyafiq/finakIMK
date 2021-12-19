<?php  
include("sessionhandler.php");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manfaat Daun Ganja Jika Tidak disalahgunakan</title>
    <link rel="stylesheet" href="../krisis/forum.css">
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
            <li><a href="../krisis/homeView.php">Home</a></li>
            <li><a href="../krisis/genreView.php">Genre</a></li>
            <li><a href="../krisis\forumView.php">Forum</a></li>
            <?php 
            if (isset($_SESSION["uname"])) {
                echo " <li><a href='logout.php'>Logout</a></li>";
            } else echo"<li><button id='tombol'> Login</button></li>";
            ?>
           
            </ul>
            <script>
                document.getElementById("tombol").addEventListener("click",  function(){ document.getElementById('modal').style.display='block'});   
            </script>
        </nav>
        
        <main>   
        <div class="artikel">
            <div class="line"></div>
        <h2 id='pagename'>Artikel</h2>
        
            <section>
                <div class="konten">
                    <br><br><br>
                    <h1>Manfaat Daun Ganja Jika Tidak disalahgunakan</h1>
                    <div class="line"></div>
                    <br><br>
                    <div class="image">
                        <img src="..\krisis\src\ganja.jpg" alt="Pendulum; Kejayaan Sesaat">
                        <br><br><br>
                        <div class="line"></div>
                        <br><br><br><br>
                    </div>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                     sed do eiusmod tempor incididunt
                     ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse
                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                       sunt in culpa qui officia deserunt mollit anim id est laborum."
                       </p>
<br>
<img src="../krisis/src/SOSIAL/3.jpg" alt="Pendulum; Kejayaan Sesaat" style="float: right; width:400px;">
<p>
Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
 explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
 sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
  Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
   adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
   dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum 
   exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi 
   consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse 
   quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
</p>
<br>
<p>
At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti 
   atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, 
   similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
    Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, 
    cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus,
    nis voluptas assumenda est, omnis dolor repellendus. 
    Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et 
    voluptates repudiandae sint et molestiae non recusandae. 
    Itaque earum rerum hic tenetur a sapiente delectus, 
    ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
</p>
<br>
<img src="../krisis/src/SOSIAL/1.jpg" alt="Pendulum; Kejayaan Sesaat" style="float: left; height:150px;">

<p>
Nisi est sit amet facilisis magna etiam. Accumsan in nisl nisi scelerisque eu ultrices. Dui accumsan sit amet nulla. Tellus cras adipiscing enim eu turpis egestas pretium. Feugiat pretium nibh ipsum consequat nisl vel pretium lectus quam. Sit amet venenatis urna cursus eget nunc scelerisque viverra mauris. Dui ut ornare lectus sit. Auctor urna nunc id cursus metus aliquam eleifend mi. Tellus pellentesque eu tincidunt tortor. Et egestas quis ipsum suspendisse ultrices. Tristique senectus et netus et malesuada. Ac felis donec et odio pellentesque.
</p>
<br>
<p>Donec ac odio tempor orci dapibus ultrices. Enim nunc faucibus a pellentesque sit. Pellentesque sit amet porttitor eget dolor morbi non arcu risus. At ultrices mi tempus imperdiet nulla. Porta nibh venenatis cras sed. Feugiat nibh sed pulvinar proin gravida. In est ante in nibh mauris cursus mattis. Diam quis enim lobortis scelerisque. Eget lorem dolor sed viverra. Sagittis nisl rhoncus mattis rhoncus urna neque viverra. Sed ullamcorper morbi tincidunt ornare massa eget egestas purus viverra. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Et odio pellentesque diam volutpat commodo sed egestas egestas. Pellentesque dignissim enim sit amet venenatis urna cursus. Et magnis dis parturient montes nascetur ridiculus mus mauris. Odio ut sem nulla pharetra.</p>
  
                </div>
               <?php 
                for ($i=0; $i < 1; $i++) { 
                    # code...
                    $postingan;
                    switch ($i) {
                        case 0:
                            $postingan = 'SENI';
                            break;
                            case 1:
                                $postingan = 'OLAHRAGA';
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
                <div class="line"></div>
              <div class="genre">  <?php echo "<a href=''><h3 id='genre'>artikel Terkait</h3></a>"; ?></div>
             
                <br>
                <br>
                
                <tr>
                <?php 
                for ($j=2; $j < 4 ; $j++) { 
                    # code...
                    $k=$j+1;
                    $l=$j+3;
                ?>
                <div class="kotak">
                <div class="blok">
                    <td>
                        <a href=""><?php echo "<img src='../krisis/src/$postingan/$k.jpg' alt='img artikel' class='artikelImg'>"; ?></a>
                        <a href=""><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                            nisi ut aliquip ex ea commodo consequat.</p></a>
                    </td>
                    
                </div>

                
                    
                    <?php }  ?>               
                 </div>
                </tr>
                
                
                <?php }  ?>
                <br><br><br>
                <div class="line"></div>
               <div id="genre">Komentar</div>
               <br><br>
               <div class="komen">
                   
               <section>
                   
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
               </section>
                   <br><br><br><br>
                   <div class="line"></div>
                   <br><br>
                   <div class="komentabel">
                      
                       <table id="komen">
                           
                              </table>
                              <br><br><br><br>
                   </div>
               </div>
               
            </section>
           
        </div>
        <script src="komen.js"></script>
       <br>
        
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