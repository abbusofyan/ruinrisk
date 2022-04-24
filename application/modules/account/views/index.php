
<?php $this->load->view('layout/start.php') ?>
    

    <!--  INTERNAL -->

    <main id="main" class="main">

        <!-- HERO -->
        <div id="head" class="head">
          <div class="row">
              <div class="col-6 pt-3">
                  <div class="logo">
                      <a class="navbar-brand" href="<?=base_url('/')?>">
                          <i class='bx bx-arrow-back bx-md' style='color:#ffffff'  ></i>
                          
                      </a>
                  </div>
              </div>
              <div class="col-6">
                  <div class="menu">
                      <a class="navbar-brand" href="#">
                          <img src="<?= base_url() ?>assets_mobile/img/lg-rr.png" alt="" height="40" class="mr-4">
                      </a>
                  </div>
              </div>
          </div>
        </div>
        
        <section id="login" class="login" style="margin-top: -30px;">
          <div class="warpper">
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <div class="tabs" style="z-index: 1;">
            <label class="tab fw-bold" id="one-tab" for="one">Login</label>
            <label class="tab fw-bold" id="two-tab" for="two">Registrasi</label>
              </div>
            <div class="panels">
              <div class="panel" id="one-panel">
                <!-- <div class="panel-title">Login</div> -->
                
                <!-- <div class="sub-login text-center">
                  <h2 class="fw-bold">LOGIN</h2>
                </di> -->
          
                <div class="img-login">
                  <img src="<?= base_url() ?>assets_mobile/img/World.gif" alt="card__image" class="img-fluid" height="80">
                </div>
                
                <div class="form" style="margin-top: -20px;">
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label fw-bold">Username</label>
                      <input type="text" class="form-control rounded-5 form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                      <input type="password" class="form-control rounded-5 form-control-lg" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">

                      <a href="#l" class="forgot-link float-right text-danger text-right">Forgot password?</a>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
                      <button type="submit" class="btn btn-primary">Login</button>
                    </div>
          
            
          
                  </form>
                </div>
              </div>
              <div class="panel" id="two-panel">
                <!-- <div class="panel-title">Take-Away Skills</div> -->
                <div class="img-profil d-block m-auto">
                  <img src="<?= base_url() ?>assets_mobile/img/World.gif" alt="card__image" class="img-fluid" height="80">
                </div>
                
                <div class="form" style="margin-top: -20px;">
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label fw-bold">Nama Relawan</label>
                      <input type="text" class="form-control rounded-5 form-control-lg">
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label fw-bold">Tempat Lahir</label>
                          <input type="text" class="form-control rounded-5 form-control-lg" id="exampleInputPassword1">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label fw-bold">Tanggal Lahir</label>
                          <input type="date" class="form-control rounded-5 form-control-lg" id="exampleInputPassword1">
                        </div>
                      </div>
                    </div>
                    
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label fw-bold">Alamat</label>
                      <textarea type="text" class="form-control rounded-5 form-control-lg" id="exampleInputPassword1"></textarea>
                    </div>
                    <div class="row">
                      <label for="exampleInputPassword1" class="form-label fw-bold">Jenis Kelamin</label>
                      <div class="col-6">
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Perempuan</label>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="">Laki Laki</label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-block">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
        
          
                  </form>
                </div>
              </div>
            </div>
          </div>
          
          
        </section>

        <br>
        <br>
        <br>
        
        <div class="tab-nav-container">
            <div class="tab-menu purple">
                <i class='bx bx-home-smile bx-sm'></i>
                <p class="pt-3">Home</p>
            </div>
            <div class="tab-menu pink">
                <i class='bx bx-message-square-dots bx-sm'></i>
                <p class="pt-3">Pesan</p>
            </div>
            <div class="tab-menu yellow">
                <i class='bx bxs-bell-ring bx-sm'></i>
                <p class="pt-3">Darurat</p>
            </div>
            <div class="tab-menu active teal">
                <i class='bx bx-user bx-sm'></i>
                <p class="pt-3">Akun</p>
            </div>
        </div>

    </main>
    <?php $this->load->view('layout/end.php') ?>
<script>
  var info = document.getElementById('info');
info.innerHTML = "not signed in";
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  // Do not send profile info to your backend! Use an ID token instead.
  info.innerHTML = "signed in: " + profile.getName();
        
  // Send this to the backend for authenticaton.
  var id_token = googleUser.getAuthResponse().id_token;  
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'http://www.douglassbranton.com/yousurveyit/api/signin.php');
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
      if (xhr.status == 200) alert('success');
      // else alert('fail: ' + xhr.responseText + xhr.status);
    }    
  }
  xhr.send('idtoken=' + id_token);
}
function signOut() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut().then(function () {
    console.log('User signed out.');
    info.innerHTML = "not signed in";
  });
}

</script>
