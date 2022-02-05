<?php
include "ustmenu.php"
?>
<div class="site-content">
  <div class="container">
    <div class="login-form">
      <div class="panel panel-default">
        <div class="panel-body">
          <h1 style="color:black; font-size: 30px; font-family: sans-serif">ÜYE OL! </h1> <br>
          <form>
            <div class="form-group">
              <label for="exampleInputName1">Adınız</label>
              <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
              <label for="exampleInputLastName">Soyadınız</label>
              <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter lastname">
              <label for="exampleInputEmail1">Email addres</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">Mailiniz kimseyle paylaşılmayacaktır.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Şifre</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              <label for="exampleInputPassword2">Şifre Tekrar</label>
              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Kullanıcı sözleşmesini kabul ediyorum!</label>
            </div>
            <button type="submit" class="btn btn-danger">ÜYE OL!</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php
include "altmenu.php"
?>