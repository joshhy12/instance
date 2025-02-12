<?php
//error_reporting(0);
if(isset($_POST['signup']))
{
$fname=$_POST['fullname'];
$email=$_POST['emailid']; 
$mobile=$_POST['mobileno'];
$password=md5($_POST['password']); 
$sql="INSERT INTO  tblusers(FullName,EmailId,ContactNo,Password) VALUES(:fname,:email,:mobile,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}

?>


<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>
<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Sign Up</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
              <form  method="post" name="signup" onSubmit="return valid();">
                <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Full Name" required="required">
                <div class="form-group">
  <BR> <input type="text" class="form-control" name="registration_number" id="registration_number" placeholder="Registration Number (Use the format BCS-00-0000-0000)" required>
</div>

<div class="form-group">
  <select class="form-control" name="sex" id="sex" required>
    <option value="">Select Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>
</div>

<div class="form-group">
  <select class="form-control" id="region" name="region" required>
    <option value="">Select Region</option>
    <option value="Dar es Salaam">Dar es Salaam</option>
    <option value="Arusha">Arusha</option>
    <option value="Dodoma">Dodoma</option>
    <option value="Mwanza">Mwanza</option>
    <option value="Mbeya">Mbeya</option>
    <option value="Tanga">Tanga</option>
    <option value="Kilimanjaro">Kilimanjaro</option>
  </select>
</div>

<div class="form-group">
  <select class="form-control" id="district" name="district" required>
    <option value="">Select District</option>
  </select>
</div>

<div class="form-group">
  <input type="text" class="form-control" name="mobileno" id="mobileno" placeholder="Contact" required>
</div>

<script>
  // Registration Number Validation
  document.getElementById("registration_number").addEventListener("input", function () {
    var pattern = /^BCS-\d{2}-\d{4}-\d{4}$/;
    if (!pattern.test(this.value)) {
      this.setCustomValidity("Format must be BCS-00-0000-0000");
    } else {
      this.setCustomValidity("");
    }
  });

  // Load Districts Based on Selected Region
  document.getElementById("region").addEventListener("change", function () {
    let region = this.value;
    let districtSelect = document.getElementById("district");
    districtSelect.innerHTML = '<option value="">Select District</option>';
    
    let districts = {
      "Dar es Salaam": ["Ilala", "Kinondoni", "Temeke", "Ubungo", "Kigamboni"],
      "Arusha": ["Arusha City", "Meru", "Karatu", "Longido", "Monduli"],
      "Dodoma": ["Dodoma Urban", "Bahi", "Chamwino", "Kondoa", "Mpwapwa"],
      "Mwanza": ["Nyamagana", "Ilemela", "Sengerema", "Ukerewe", "Misungwi"],
      "Mbeya": ["Mbeya City", "Rungwe", "Chunya", "Kyela", "Mbarali"],
      "Tanga": ["Tanga City", "Korogwe", "Muheza", "Handeni", "Pangani"],
      "Kilimanjaro": ["Moshi", "Same", "Mwanga", "Rombo", "Hai"]
    };
    
    if (districts[region]) {
      districts[region].forEach(district => {
        let option = document.createElement("option");
        option.value = district;
        option.textContent = district;
        districtSelect.appendChild(option);
      });
    }
  });
</script>
                <div class="form-group">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required">
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password " placeholder="Password (Password must contain at least 8 characters, including an uppercase letter, a lowercase letter, a number, and a special character)" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
      </div>
    </div>
  </div>
</div>