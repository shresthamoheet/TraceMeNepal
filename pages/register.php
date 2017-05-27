<div class="container">
    <div class="row">
    Personal Details:
      <form action="index.php?page=qrcodetest" method="POST" enctype="multipart/form-data">
      <div class="form-group" style="margin-top:100px;">
    <label for="Name">Name</label>
    <input name="name" type="name" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="Nationality">Nationality</label>
    <input name="nationality" type="nationality" class="form-control" id="nationality" placeholder="Nationality">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>Sex:
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other
    </label>
  </div>
  <div class="form-group">
    <label for="Passportnum">Passport Number</label>
    <input name="passportnum" type="passportnum" class="form-control" id="passportnum" placeholder="passportnum">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Photo input</label>
    <input name="photo" type="file" id="exampleInputFile">
    <!-- <p class="help-block">Example block-level help text here.</p> -->
  </div>
  <div class="form-group">
    <label for="location">Desired Destination</label>
    <input name="location" type="location" class="form-control" id="location" placeholder="Location">
  </div>
  <div class="form-group">
    <label for="Contactname">Contact Person Name</label>
    <input name="contactname" type="contactname" class="form-control" id="contactname" placeholder="Contactname">
  </div>
  <div class="form-group">
    <label for="Contactnum">Contact Person Number</label>
    <input name="contactnum" type="contactnum" class="form-control" id="contactnum" placeholder="Contact Person Name">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
    </div>
  </div>