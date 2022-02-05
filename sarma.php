<?php
include "ustmenu.php"
?>

<div class="site-content">
  <table class="table">
    <tr>

      <td>
        <div class="panel panel-default">

          <div class="panel-body" style="background-color: whitesmoke; color: red">
            <h4>SARMA TARİFİ</h4>
          </div>

          <div class="panel panel-default">

            <div class="panel-body" style="background-color: whitesmoke; color: black">

              <img class="sarma" src="assets/images/YEMEK.jpeg" alt="sarma">
              <p>

              <h4>Malzemeler:</h4>

              <ul>300 gram asma yaprağı </ul>
              <ul>1 adet limon</ul>
              <ul>4 yemek kaşığı zeytinyağı</ul>
              <ul>1 su bardağı sıcak su</ul>

              <h4> İç harcı için:</h4>
              <ul>6 yemek kaşığı zeytinyağı </ul>
              <ul>3 adet orta boy kuru soğan</ul>
              <ul>1,5 su bardağı pirinç</ul>
              <ul>1 su bardağı sıcak su</ul>
              <ul>1 yemek kaşığı dolmalık fıstık</ul>
              <ul>1 yemek kaşığı kuş üzümü</ul>
              <ul>1 çay kaşığı karabiber</ul>
              <ul>1 çay kaşığı yenibahar</ul>
              <ul>1/2 çay kaşığı tarçın</ul>
              <ul>1 adet kesme şeker</ul>
              <ul>1 çay kaşığı tuz</ul>
              </p>

              <p> Dondurma kutusundan bile çıktığında bile sevdik onu. Kaç tane yiyeceğimiz konusunda iddialara girdik. Zeytinyağlı yaprak sarma aşktır, onu evde yapmaksa aşkların en güzelidir. </p>

              <strong> Nasıl Yapılır?</strong>

              <p>İç harç için soğanları tencerede kavurup 5 dakika kadar bekletip suyunu süzdüğünüz pirinçleri de ekleyin. Dolmalık fıstık, kuş üzümü, karabiber, yenibahar, tarçın, kesme şeker ve tuzu da ekledikten sonra sıcak suyu katın ve kısık ateşte beş dakika pişirip ocaktan alın.</p>

              <p>Salamura yaprakların içine bu harcı paylaştırıp sarmaları kapatın. Tencerenin tabanına birkaç yaprak dizdikten sonra üzerine sarmaları tek tek koyun. Üzerine limon dilimlerini de koyup zeytinyağı ve sıcak suyu üstlerinde gezdirin. Pişerken açılmamaları için üzerine bir tabak kapatın. Kısık ateşte 35 dakika pişirip soğumaya bırakın. Afiyet olsun.</p>




            </div>

          </div>

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