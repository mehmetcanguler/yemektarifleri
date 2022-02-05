<?php
include "ustmenu.php"
?>

<div class="site-content">
  <table class="table">
    <tr>

      <td>
        <div class="panel panel-default">

          <div class="panel-body" style="background-color: whitesmoke; color: red">
            <h4>YENİ EKLENEN TARİFLER</h4>
          </div>

        </div>

        <div class="sarma">
          <a href="sarma.php" style="color:black">
            <h4> SARMA TARİFİ</h4>
            <img class="img-thumbnail" src="assets/images/YEMEK.jpeg" alt="SARMA">
          </a>
        </div>
        <div class="tiramis">
          <a href="tiramusi.php" style="color:black">
            <h4> TİRAMİSU TARİFİ</h4>
            <img class="img-thumbnail" src="assets/images/tiramisu.jpg" alt="tiramisu">
          </a>
        </div>
        <div class="salata">
          <a href="cevizlisalata.php" style="color:black">
            <h4> CEVİZLİ SALATA TARİFİ </h4>
            <img class="img-thumbnail" src="assets/images/cevizli-salata.jpg" alt="salata">
          </a>
        </div>

      </td>
      <td>

        <?php
        include "tariflerPanel.php"
        ?>

        <div class="panel panel-default">

          <div class="panel-body" style="background-color: whitesmoke">
            <h6 style="color:firebrick"> Yeterli ve dengeli beslen, sağlıklı ve uzun yaşa.
            </h6>
          </div>

        </div>

        <div class="contact-form2">
          <div class="panel panel-default">
            <div class="panel-body">
              <p> <strong> İLETİŞİM </strong> </p>
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">İsminiz</label>
                  <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder=" İsminizi giriniz">
                </div>
                <div class="form-group">
                  <label for="exampleEmail">E mail </label>
                  <input type="mail" class="form-control" id="exampleEmail" placeholder="Email">
                </div>
                <ul><label for="country" style="margin-left: 1px">Ülke</label>
                  <select id="country" name="country">
                    <option value="turkey">Turkey</option>
                    <option value="azerbaijan">Azerbaijan</option>
                    <option value="usa">USA</option>
                  </select>
                </ul>
                <ul><textarea id="subject" name="subject" placeholder="Yazınız.." style="height:200px">
                                         </textarea>
                </ul>
                <button type="submit" class="btn btn-danger">Gönder</button>
              </form>
            </div>
          </div>

        </div>

      </td>
    </tr>
  </table>
</div>
</div>

<?php
include "altmenu.php"
?>