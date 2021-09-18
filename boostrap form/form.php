
<html>



<body>

<!--- <form action="get.php" onsubmit="jsFunctionName()">
--->
<form method="POST" action="get.php">
  <div class="form-group row">
    <label for="sipnumber" class="col-sm-2 col-form-label">SIP Number</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="sipnumber" placeholder="number" name="sipnumber">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="sippassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="sippassword" placeholder="*******" name="sippassword">
    </div>
  </div>
  
  
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Host type</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="hostRadio" id="peer" value="peer">
          <label class="form-check-label" for="peer">
            peer
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="hostRadio" id="user" value="user">
          <label class="form-check-label" for="gridRadios2">
            user
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="hostRadio" id="friend" value="friend" checked>
          <label class="form-check-label" for="friend">
            friend
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  
  
  
  
  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="przykladowyCheckbox">
        <label class="form-check-label" for="przykladowyCheckbox">
          Przykładowy checkbox
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"  name="send" >Wyślij</button>
    </div>
  </div>
</form>

</body>



</html>

