ob_start();
<?php include "baglan.php" ?>


<?php include "ustmenu.php" ?>




<div class="site-content">
    <div class="container">
        <div class="login-form">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 style="color:black; font-size: 30px; font-family: sans-serif">Tarif Ekle</h1> <br>
                    <form method="get">
                        <div>
                        <div class="form-group">
                            <select name="kategori" class="form-group form-select form-select-lg mb-3"  aria-label="Default select example" >
                                <option selected>LÜTFEN KATEGORİ SEÇİNİZ!!!</option>
                                <option name="et">ET YEMEKLERİ</option>
                                <option name="tavuk">TAVUK YEMEKLERİ</option>
                                <option name="corba">ÇORBALAR</option>
                                <option name="salata">SALATA</option>
                                <option name="tatli">TATLI</option>
                                <option name="prtarif">PRATİK TARİFLER</option>
                                <option name="sebzetarif">SEBZE TARİFLERİ</option>
                            </select>
                            </div>

                            <div class="form-group">
                                <label>Tarif adını giriniz</label>
                                <input type="text" class="form-control" name="tarif_adi" placeholder="Tarif adını giriniz">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Tarifi Giriniz</label>
                                <textarea class="form-control" name="tarif" rows="3"></textarea>
                            </div>

                            <button type="submit" name="button" class="btn btn-danger">Tarifi Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php

if (isset($_GET["button"])) {
    $sql = "
      insert into tarifekleme(tarif_adi,tarif,kategori)values('" . $_GET["tarif_adi"] . "','" . $_GET["tarif"] . "','" . $_GET["kategori"] . "');
    
      ";
     
    $sonuc = mysqli_query($baglan, $sql);
    
    // header('Location:#');
    
    if ($sonuc) {
?>
        <script>
            console.log("verimiz eklendi")
        </script>

    <?php
    } else {
    ?>
        <script>
            console.log("hata oluştu")
        </script>

<?php
    }
}



?>



<?php
$servername = "localhost";

$username = "root";

$password = "";

$dbname = "tarifler";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// bağlantıyı test et

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}



$msql = "SELECT tarif_adi,tarif,kategori FROM tarifekleme";

$result = $conn->query($msql);
?>
// <div>

    <table class="table ortala">
        <thead>
            <tr>
                <th scope="col">kategori</th>
                <th scope="col">tarifadı</th>
                <th scope="col">tarif</th>

            </tr>
        </thead>
        <?php



        if ($result->num_rows > 0) {

            // her bir satırı döker

            while ($row = $result->fetch_assoc()) {

                echo "
    
        <tr>
        <td>" . $row["kategori"] . "</td>        
        <td>" . $row["tarif_adi"] . "</td>
        <td>" . $row["tarif"] . "</td>
    
           </tr>
           ";
            }
        } else {

            echo "0 results";
        }

        $conn->close();
        
        ?>

        
    </table>
    
</div>
 </div>
</div>
<?php
    include "altmenu.php";
    ob_end_flush(); 
    ?>

