<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>WebPage</title>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="index.html"><img src="img/STT_Web Assets-18.png" alt="Save to Travel"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="Vallarta.html">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Cancun.html">BLOG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Rivera.html">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Cabo.html">FAQ'S</a>
                  </li>
              </ul>
            </div>
          </nav>

          <div class="text-header d-flex aling-item-center">
            <div class="container">
                <div class="row">
                  <div class="col-sm-8">
                      <h1>With us, you can always <br> travel safe.</h1>

                  </div>
                </div>
            </div>
        </div>
        <div class="text-header d-flex aling-item-center">
            <div class="container-fluid">
                <div class="row">
                    <form action="" class="form-1">
                        <div class="container form">
                            <h2>Register to get an Exclusive offer!</h2>
                            <h2></h2>
                            </a>
                    
                              <label for="fname">FIRST NAME:</label><br>
                              <input type="text" name="FNAME"  class="mob form-control form-control" id="mce-FNAME" required="required" aria-required="true" pattern="^([- \w\d\u00c0-\u024f]+)$" aria-invalid="true"><br>
                    
                            <label for="lname">LAST NAME:</label><br>
                            <input type="text" name="FNAME"  class="mob form-control form-control" id="mce-LNAME" required="required" aria-required="true" pattern="^([- \w\d\u00c0-\u024f]+)$" aria-invalid="true"><br>
                    
                            <label for="fname">PHONE:</label><br>
                            <input type="text" name="PHONE"  class="mob form-control form-control" id="mce-PHONE" required="required" aria-required="true" pattern="^\d{10}$" aria-invalid="true"><br>
                    
                            <label for="lname">EMAIL:</label><br>
                            <input type="email" name="EMAIL"  class="mob form-control form-control" id="mce-EMAIL" required="required" aria-required="true" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" aria-invalid="true">
                            <br>
                            <br>
                       
                            <div class="mc-field-group" style="display:none">
                              <label for="mce-TZ">Timezone </label>
                              <input type="text" value="" name="TZ" id="mce-TZ">
                            </div>
                    
                            <div id="mce-responses" class="clear">
                              <div class="response" id="mce-error-response" style="display:none"></div>
                              <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    
                            <button type="submit" class="btn btn-primary"  id="mc-embedded-subscribe-mob" name="register" onclick="sendToEplat()"> <b>SAVE MY DEAL NOW</b> </button>
                          </div>
                    </form>
                </div>
            </div>
        </div>

    </header>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>