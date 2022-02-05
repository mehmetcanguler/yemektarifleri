<?php
$baglan = mysqli_connect("localhost", "root", "", "tarifler");
if (!$baglan) {
    die("baglantı basarısız" . mysqli_connect_error());
} else {
?> <script>
        console.log("baglantı basarılı")
    </script>;
<?php

}
?>