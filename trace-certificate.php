<?php include('minefy-html.inc.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Track MSME Certificate</title>
    <meta name="description" content="Just in a single click track the status of your msme registration certificate online through our eudyogaadhaar.org portal.">
    <!-- meta keyword	 -->
    <meta name="keyword" content="udyam certificate, udyog aadhar registration, udyog aadhar, msme certificate, aadhar udyog, 
    aadhar udyog registration, udyam certificate registration, udyog aadhar certificate, msme certificate registration, 
    msme online registration, aadhar udyam, udyam portal, udyog aadhar update, udyog aadhaar, msme udyam, msme udyog aadhar, 
    udyog aadhar registration online, apply for msme certificate, msme new registration, udyam online registration">
    <link rel="icon" href="/assets/img/favicon-msme-registration.png" type="image/gif" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>

<?php include_once('components/header.php') ?>



<!-- junbotron -->
  <div class="jumbotron jumbotron-fluid"
    style="    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nNDAnIGhlaWdodD0nNDAnIHZpZXdCb3g9JzAgMCA0MCA0MCcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz48cGF0aCBkPSdNMCAwaDIwdjIwSDBWMHptMTAgMTdhNyA3IDAgMSAwIDAtMTQgNyA3IDAgMCAwIDAgMTR6bTIwIDBhNyA3IDAgMSAwIDAtMTQgNyA3IDAgMCAwIDAgMTR6TTEwIDM3YTcgNyAwIDEgMCAwLTE0IDcgNyAwIDAgMCAwIDE0em0xMC0xN2gyMHYyMEgyMFYyMHptMTAgMTdhNyA3IDAgMSAwIDAtMTQgNyA3IDAgMCAwIDAgMTR6JyBmaWxsPScjZmZmZmZmJyBmaWxsLW9wYWNpdHk9JzAuNDgnIGZpbGwtcnVsZT0nZXZlbm9kZCcvPjwvc3ZnPg==);">
    <div class="container">
      <h1>Ministry of Micro, Small and Medium Enterprises</h1>
      <p class="lead">The Ministry of Micro, Small and Medium Enterprises, a branch of the Government of India, is the apex executive body for the formulation and administration of rules, regulations and laws relating to micro, small and medium
        enterprises in India. The Minister of Micro, Small and Medium Enterprises is Nitin Gadkari and the Minister of State is Pratap Chandra Sarangi since 31 May 2019.</p>
    </div>
  </div>

<!-- form -->
<section id="msme-registration">
    <form class="form" action="/submit.php" method="post" enctype="multipart/form-data">
      <div class="container">
        <div  class="row">
          <div class="col-8  col-sm-8">
            <div class="card">
              <div class="card-header">
                <h3>Personal Info</h3>
              </div>
              <div class="card-body">
                <div class="row form-square">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstName">First Name <span class="text-danger">(*)</span>
                        <p class="form-help">As on Aadhaar Card</p>
                      </label>
                      <input type="text" maxlength="40" name="applicant_name" class="form-control" id="firstName" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="MobileNumber">Mobile Number <span class="text-danger">(*)</span>
                        <p class="form-help">Enter contact number linked with the Aadhaar Card</p>
                      </label>
                      <input type="tel" maxlength="10" minlength="10"  name="mobile_number"  class="form-control" id="txtMobile" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="AadhaarNumber">Aadhaar Number
                        <p class="form-help">Enter your Aadhaar Number</p>
                      </label>
                      <input type="text" name="aadhaar_number" class="form-control" id="aadhaar_number">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Email">Email <span class="text-danger">(*)</span>
                        <p class="form-help">Enter valid email address</p>
                      </label>
                      <input type="email" name="email_id" class="form-control" id="txtEmail" required>
                    </div>
                  </div>
                  <div class="col-12">
                  <div class="form-group">
                    <div class="form-help form-check">
                      <input type="checkbox" name="terms_service" class="form-check-input" required>
                      <label class="form-check-label">I AGREE TO THE <a href="/terms-of-service.php">TERMS OF SERVICE</a> <span class="text-danger">[UPDATED]</span></label>
                   </div>
                  </div>
                 </div>
                 <div class="col-12">
                 <div class="form-group">
                   <div class="form-help form-check">
                      <input type="checkbox" name="terms_service_aadhaar" class="form-check-input" required>
                      <label class="form-check-label">I, THE APPLICANT (OWNER OF AADHAAR NUMBER USED IN APPLICATION) AGREE TO SHARE DETAILS / PASSCODES ETC AS & WHEN REQUIRED FOR THE PURPOSE OF UDYAM CERTIFICATE GENERATION.<span class="text-danger">[UPDATED]</span></label>
                  </div>
                 </div>
                </div>
                <div class="col-12">
                <div class="form-group">
                  <p class="f12 form-help">Disclaimer: We expressively declare that we are private consultants.We have no relation or we do not represent any government official.This website is a Maintain by Individual</p>
                </div>
               </div>
                </div>
              </div>
            </div>
            <input type="hidden" name="form_type" value="MSME Trace MSME Registration">
            <input type="hidden" class="form-control" name="form_name" value="Trace MSME Registration">
            <input type="hidden" class="form-control" name="form_id" value="trace_udyam_registration">
            <div class="d-flex align-items-center mt-4">
              <!-- <img src="/assets/image/pointingapply.gif" alt="" width="63"> -->
              <input type="submit" class="btn btn-green blink" id="formsubmit" value="Submit Information">
            </div>
          </form>
        </div>
          <div class="col-4 col-sm-4">
            <?php include_once('components/right-nav.php') ?>
          </div>
        </div>
      </div>
    </form>
  </section>



<?php include_once('components/faqs.php') ?>

<?php include_once('components/footer.php') ?>
</body>
</html>
