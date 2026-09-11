<?php require_once __DIR__ . '/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Contact Us | Udyam Sewa - MSME online registration</title>
   <meta name="description" content="Get in touch for reliable Udyam/MSME Registration assistance. We're here to help with guidance and support every step of the way.">
   <meta name="keywords" content="Contact Us, UdyamGov Contact, Udyam Support, MSME Assistance, Get Help with Udyam Registration, Customer Support UdyamGov, Udyam Certificate Queries, MSME Contact Information, Udyam Complaint Help, Support Services">
   <link rel="canonical" href="<?php echo $baseUrl; ?>contact-us.php" />
      <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
   <link rel="stylesheet" href="/assets/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <script src="/assets/js/jquery.min.js"></script>
   <script src="/assets/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="/assets/css/main.css">
   <script src="/assets/js/jquery.min.js"></script>
   <script src="/assets/js/bootstrap.min.js"></script>
   <meta name="author" content="UdyamGov">
   <meta name="robots" content="index, follow">
   <meta name="theme-color" content="#385067">
   <meta property="og:title" content="Contact Us | Udyam Sewa - MSME online registration">
   <meta property="og:description" content="Get in touch for reliable Udyam/MSME Registration assistance. We're here to help with guidance and support every step of the way.">
   <meta property="og:image" content="<?php echo $baseUrl; ?>assets/img/favicon-msme-registration.png" />
   <meta property="og:url" content="<?php echo $baseUrl; ?>contact-us.php">
   <meta property="og:type" content="website">
   <style media="screen">
      h1, h2, h3, h4, h5, h6{
      color: var(--base-color);
      }
   </style>
   
   <script type="application/ld+json">
      {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Contact Us | Udyam Sewa - MSME online registration",
      "description": "Get in touch for reliable Udyam/MSME Registration assistance. We're here to help with guidance and support every step of the way.",
      "url": "<?php echo $baseUrl; ?>contact-us.php", 
      "potentialAction": {
         "@type": "Action",
         "name": "MSME/Udyam/Udyog Aadhaar - udyamsewa.com Private Consultancy",
         "target": {
            "@type": "EntryPoint",
            "urlTemplate": "<?php echo $baseUrl; ?>contact-us.php"
         }
      },
      
      "sameAs": [
         "https://www.facebook.com/profile.php?id=61591439595616",
         "https://x.com/UdyamGov",
         "https://www.instagram.com/udyam_gov/"
      ],
      "mainEntity": {
         "@type": "Service",
         "name": "MSME/Udyam Service - udyamsewa.com Private Consultancy",
         "serviceType": "Business Private Consultancy",
         "provider": {
            "@type": "Organization",
            "name": "UdyamGov",
            "url": "<?php echo $baseUrl; ?>contact-us.php"
         },
         "areaServed": {
            "@type": "Country",
            "name": "India"
         },
         "audience": {
            "@type": "Audience",
            "audienceType": "Small Business Owners",
            "geographicArea": {
            "@type": "AdministrativeArea",
            "name": "India"
            }
         },
         "additionalType": "<?php echo $baseUrl; ?>contact-us.php"
      }
      }
   </script>
   <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement": [{
         "@type": "ListItem",
         "position": 1,
         "name": "Contact Us",
         "item": "<?php echo $baseUrl; ?>contact-us.php"
         }]
      }
   </script>

</head>

<body>
<?php include_once('components/header.php') ?>
<!-- form -->
<section id="msme-registration">
   <h1 class="mt-3" style="font-size:28px;font-weight: bold;text-align: center;padding-bottom: 20px;color: var(--base-color);">Contact Us</h1>
   <p class="font-weight-bold text-center">Contact Us for seamless UDYAM/MSME registration services. If you have any questions, or concerns, or need assistance, feel free to reach out to us</p>
   <form class="form" action="/enquiry-action.php" method="post" enctype="multipart/form-data">
      <div class="container custom-form-container">
          <div class="row mb-5">
            <div class="col-lg-7 col-md-12">
               <div class="card premium-card">
                  <div class="card-header premium-header bg-green">
                     <h2 style="color:#fff">Contact Us</h2>
                  </div>
                  <div class="card-body">
                     <div class="row form-square">
                        <div class="col-md-6">
                           <div class="form-group"> <label for="firstName">First Name <span class="text-danger">(*)</span> </label> <input type="text" maxlength="40" name="applicant_name" class="form-control" id="firstName" required=""> </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group"> <label for="MobileNumber">Mobile Number <span class="text-danger">(*)</span> </label> <input type="tel" maxlength="10" minlength="10" name="mobile_number" class="form-control" id="txtMobile" required=""> </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group"> <label for="Email">Email <span class="text-danger">(*)</span> </label> <input type="email" name="email_id" class="form-control" id="txtEmail" required=""> </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group txt small clearfix mb-0">
                              <label class="checkbox-inline">Verification Code <span class="required" onclick="openSOLNumber()" style="cursor: pointer"><span class="text-danger">(*)</span></span></label>
                              <img src="/captcha.php" alt="Verfication Code">
                           </div>
                           
                           <div class="form-group txt">
                              <input type="text" name="vercode" class="form-control" required="required">
                           </div>
                        </div>

                        <div class="col-md-12">
                           <div class="form-group"> 
                              <label for="Email">Message <span class="text-danger">(*)</span> </label>
                              <textarea class="form-control" rows="5" name="enquiry_message" required></textarea>
                           </div>
                        </div>
                     </div>
                     <input type="hidden" name="form_type" value="Enquiry"> <input type="hidden" name="form_name" value="msme_enquiry"> <input type="hidden" name="form_id" value="msme_enquiry"> 
                     <div class="d-flex align-items-center mt-4" style="justify-content: center;"> <button type="submit" class="btn btn-primary fcs-submit-button">Submit Application</button> </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-12">
               <div class="card premium-card mt-4 mt-lg-0">
                     <div class="card-header premium-header bg-orange">
                        <h3 style="font-size: 18px; font-weight: bold;color:#fff;margin:0;">
                           INSTRUCTIONS TO FILL CONTACT US FORM
                        </h3>
                     </div>
                     <div class="card-body p-3">
                        <div class="form-instructions">
                           <div class="form-group" style="margin-top: 0px;">
                              <label class="fcs-text-dark"><strong>First Name :</strong> FIRST NAME OF THE APPLICANT.&nbsp;
                              आवेदक का पहला नाम। </label>
                           </div>
                           <div class="form-group" style="margin-top: 0px;">
                              <label class="fcs-text-dark"><strong>Moblie Number :</strong> MOBILE NUMBER OF THE APPLICANT.&nbsp;
                              आवेदक का मोबाइल नंबर। </label>
                           </div>
                           <div class="form-group" style="margin-top: 0px;">
                              <label class="fcs-text-dark"><strong>Email :</strong>  EMAIL ADDRESS OF THE APPLICANT.&nbsp;
                              आवेदक का ईमेल पता। </label>
                           </div>
                           <div class="form-group" style="margin-top: 0px;">
                              <label class="fcs-text-dark"><strong>Verification Code :</strong> ENTER THE GIVEN VERIFICATION CODE.&nbsp;
                              दिए गए सत्यापन कोड को दर्ज करे। </label>
                           </div>
                           <div class="form-group" style="margin-top: 0px;">
                              <label class="fcs-text-dark"><strong>Message :</strong> ENTER THE MESSAGE IN THE BOX.&nbsp;
                              बॉक्स में संदेश दर्ज करें। </label>
                           </div>
                        </div>
                     </div>
               </div>
               <br>
                  <div class="card premium-card mt-3 mt-lg-0">
                        <div class="card-body p-3">
                           <div class="form-instructions">
                              <div class="form-group m-0">
                                    <p class="f12 form-help h5">
                                    <br>
                                       <strong>Note</strong> : <a href="<?php echo $baseUrl; ?>">udyamsewa.com</a> is owned and operated by a consultancy firm and We have no relation or we do not represent any government official or government department such as MSME Department, etc.<br><br>
                                       <br>
                                       <b>Mobile Number :</b> <a href="tel:+919031675081">(+91)9031675081</a><br>
                                       <b>Email id :</b> <a href="mailto:#">care@udyamsewa.com</a>  <br>
                                       <br>
                                    </p>
                              </div>
                           </div>
                        </div>
                        </div>
                  </div>
            </div>
         </div>
      </div>
   </form>
</section>

<div class="container custom-form-container mt-3 mb-5">
    <div class="card premium-card text-center p-4">
        <div class="card-body">
            <h2 class="mb-4" style="color: var(--base-color); font-weight: bold;">Contact Details</h2>
            <p class="mb-5 text-muted">Thank you for your interest in our services. Please find below our contact details:</p>

            <div class="row text-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h4 class="mb-3" style="color: var(--theme-green); font-weight: bold;">Owned By</h4>
                    <p class="mb-0">
                        <a href="https://olfant.com">
                            <img src="https://olfant.com/assets/images/fav-icon/favicon-32.png" alt="Olfant" style="width: 80px; height: auto; margin-bottom: 10px;">
                        </a>
                        <div class="text-muted">(Partnership Firm)</div>
                    </p>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <h4 class="mb-3" style="color: var(--theme-green); font-weight: bold;">Support Contact</h4>
                    <p class="mb-2"><strong>Email:</strong> <a href="mailto:care@udyamsewa.com" style="color: var(--theme-orange); font-weight: 600;">care@udyamsewa.com</a></p>
                    <p class="mb-0"><strong>Mobile:</strong> <a href="tel:9031675081" style="color: var(--theme-orange); font-weight: 600;">(+91) 9031675081</a></p>
                </div>

                <div class="col-md-4">
                    <h4 class="mb-3" style="color: var(--theme-green); font-weight: bold;">Address</h4>
                    <p class="text-muted" style="line-height: 1.6;">
                        2nd floor (Olfant), Kaizen Heights,<br>
                        Tata Kandra Main Road, N-395 & N-396,<br>
                        Adityapur Industrial Area, Saraikela Kharsawan,<br>
                        Jharkhand, India - 832109
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include_once('components/footer.php') ?>
</body>
</html>
