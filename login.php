<?php
include "ustmenu.php"
?>

<div class="site-content">
  <div class="container">
    <div class="login-form">
      <div class="panel panel-default">
        <div class="panel-body">
          <h1 style="color:black; font-size: 30px; font-family: sans-serif">GİRİŞ YAP </h1> <br>
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email addres</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">Mailiniz kimseyle paylaşılmayacaktır.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Şifre</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Beni Hatırla!</label>
            </div>
            <button type="submit" class="btn btn-danger">GİRİŞ YAP</button>
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