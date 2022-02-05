<?php
include "ustmenu.php"
?>
<div class="site-content">
  <table class="table">
    <tr>

      <td>
        <div class="panel panel-default">

          <div class="panel-body" style="background-color: whitesmoke; color: red">
            <h4>TİRAMİSU TARİFİ</h4>
          </div>

          <div class="panel panel-default">

            <div class="panel-body" style="background-color: whitesmoke; color: black">

              <img class="img-thumbnail" src="assets/images/tiramisu.jpg" alt="tiramisu">
              <p>

              <h4>Malzemeler:</h4>

              <ul>16 adet savoyar (kedi dili) bisküvi </ul>
              <ul>400 gram mascarpone peyniri</ul>
              <ul>1 su bardağı toz şeker</ul>
              <ul>4 adet yumurta</ul>

              <h4> Şerbeti için:</h4>
              <ul>2 yemek kaşığı filtre kahve (arzuya göre granül kahve) </ul>
              <ul>1 su bardağı sıcak su</ul>
              <ul>1 yemek kaşığı toz şeker</ul>

              <h4> Üzeri için:</h4>
              <ul>3 yemek kaşığı kakao</ul>
              </p>

              <strong> Nasıl Yapılır?</strong>

              <p>Tatlının kremasını hazırlamak için; yumurtaların sarı ve beyaz kısımlarını dikkatli bir şekilde ayırın. Yumurta beyazlarını ayrı bir kapta, bir mikser yardımıyla yüksek devirde, köpük köpük olana kadar çırpın.

                Yumurta sarılarını, toz şeker ilavesi ile yüksek devirde, şeker tamamen eriyip, mat sarı bir renk elde edene kadar çırpın. Mascarpone peynirini ayrı bir kapta ezerek, krema haline getirin.

                Hazırlamış olduğunuz bu üç karışımı, yumurta beyazlarının sönmemesi için; bir spatula yardımıyla alttan üstte doğru hareket ettirerek, karıştırın.

                Konyağı da ekledikten sonra karıştırma işlemini 1 dakika kadar sürdürün. Hazırladığınız krema karışımını 10 dakika kadar buzdolabında soğutun</p>

              <p>Şerbeti için; sıcak su, toz şeker ve filtre kahveyi derin bir kapta karıştırın.

                Bir porsiyonda kullanacağınız dört adet savoyar bisküvinin iki adetinin üst kısmını şerbet karışımına batırdıktan sonra kuru kısımları üst tarafta kalacak şekilde servis tabağına yan yana yerleştirin.

                Kuru kalan üst kısımlarını bir tatlı kaşığı şerbet ilavesi ile ıslatın. Soğuttuğunuz kremayı buzdolabından çıkartın. Bisküvilerin üzerini çok fazla taşmayacak şekilde krema ile kaplayın.

                Kalan iki bisküviyi aynı şekilde ıslattıktan sonra kuru kısımları üstte kalacak şekilde kremanın üzerine yan yana yerleştirin. Kuru kalan üst kısımları bir tatlı kaşığı şerbet ilavesi ile ıslatın. Bisküvilerin üzerini çok fazla taşmayacak şekilde krema ile kaplayın.

                Aynı işlemi diğer porsiyonları hazırlamak için sırasıyla tekrarlayın. Tatlıların üzerine bir çay süzgeci ile servisinde kullanacağınız kakaoyu eleyin.

                Daha lezzetli olması için buzdolabında en az iki saat beklettikten sonra soğuk olarak ve bekletmeden sevdiklerinizle paylaşın.</p>




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