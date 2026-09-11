<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Udyam Update online | MSME Edit details</title>
      <meta name="description" content="Want to update udyam registration online? Change business details, address, or activity online in just a few simple steps.">
      <meta name="keywords" content="Edit Udyam Registration Certificate, Update Udyam Registration Details, Modify Udyam Certificate, Change MSME Udyam Information, Update Udyam Certificate Online, Edit MSME Certificate, Udyam Registration Correction, Update Business Details Udyam, Revise Udyam Certificate, Change Udyam Registration Details">
      <link rel="canonical" href="<?php echo $baseUrl; ?>update-udyam-registration-certificate-online.php" />
      <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="/assets/css/main.css">
      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.min.js"></script>
      <meta name="author" content="UdyamGov">
      <meta name="robots" content="index, follow">
      <meta name="theme-color" content="#385067">
      <meta property="og:title" content="Udyam Update online | MSME Edit details" />
      <meta property="og:description" content="Want to update udyam registration online? Change business details, address, or activity online in just a few simple steps." />
      <meta property="og:url" content="<?php echo $baseUrl; ?>update-udyam-registration-certificate-online.php" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="<?php echo $baseUrl; ?>assets/img/favicon-udyam-registration.png" />

      <script type="application/ld+json">
         {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "Udyam Update online | MSME Edit details",
            "description": "Want to update udyam registration online? Change business details, address, or activity online in just a few simple steps.",
            "url": "<?php echo $baseUrl; ?>update-udyam-registration-certificate-online.php",
            "potentialAction": {
               "@type": "Action",
               "name": "Update / Edit Udyam Certificate",
               "target": {
                  "@type": "EntryPoint",
                  "urlTemplate": "<?php echo $baseUrl; ?>update-udyam-registration-certificate-online.php"
               }
            },
            "sameAs": [
               "https://www.facebook.com/profile.php?id=61591439595616",
               "https://x.com/UdyamGov",
               "https://www.instagram.com/udyam_gov/",
            ],
            "mainEntity": {
               "@type": "Service",
               "name": "Udyam Certificate Update Service",
               "serviceType": "Business Registration Update",
               "provider": {
                  "@type": "Organization",
                  "name": "UdyamGov",
                  "url": "<?php echo $baseUrl; ?>update-udyam-registration-certificate-online.php"
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
               "additionalType": "<?php echo $baseUrl; ?>update-udyam-registration-certificate-online.php"
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
            "name": "Udyam Registration Services",
            "item": "<?php echo $baseUrl; ?>"
            },
            {
            "@type": "ListItem",
            "position": 2,
            "name": "Update Udyam Certificate",
            "item": "<?php echo $baseUrl; ?>update-udyam-registration-certificate-online.php"
         }]
         } 
      </script>
      <script type="application/ld+json">
         {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Udyam Update online | MSME Edit details",
            "description": "Want to update udyam registration online? Change business details, address, or activity online in just a few simple steps.",
            "review": {
            "@type": "Review",
            "reviewRating": {
               "@type": "Rating",
               "ratingValue": 4,
               "bestRating": 5
            },
               "author": {
                  "@type": "Organization",
                  "name": "UdyamGov"
               }
            },
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 3,
            "reviewCount": 94
            }
         }
      </script>
      
   </head>
   <body>
      <?php include_once('components/header.php') ?>

      <img src="/assets/image/print-udyam-certificate.webp" alt="update or edit udyam registration certificate online" class="img w-100" />

      <section id="-registration">
         <div class="container custom-form-container pt-4">
         <h1 class="text-center">Print Udyam Certificate</h1>
         <p class="text-center font-weight-bold" >To Edit your Udyam Registration Details online with ease. Update business details quickly and hassle-free through our Udyam Portal.</p>
            <div class="row mb-5">
               <div class="col-lg-7 col-md-12">
                  <div class="card rounded-0">
                     <div class="card-header rounded-0 text-center p-2 text-white brown">
                        <h2 style="font-size:19px; font-weight: bold;">Print Udyam Certificate Form</h2>
                     </div>
                     <div class="card-body rounded-0 p-1">
                     <form id="main-form" action="submit.php" method="post" enctype="multipart/form-data">
                        <div class="form-group txt">
                        <label>APPLICANT NAME / आवेदक का नाम<span class="required">(*)</span></label>
                        <input type="text" class="form-control" name="applicant_name" value="" required="">
                        </div>

                        <div class="form-group txt">
                        <label>MOBILE NUMBER / मोबाइल संख्या<span class="required">(*) <br> (ENTER MOBILE NUMBER AS MENTIONED ON YOUR UDYAM CERTIFICATE) <br> (अपने उद्यम प्रमाणपत्र पर उल्लिखित मोबाइल नंबर दर्ज करें )</span></label>
                        <input type="tel" maxlength="10" minlength="10" class="form-control" name="mobile_number" value="" required="">
                        </div>

                        <div class="form-group txt">
                        <label>EMAIL ID / ईमेल आईडी<span class="required">(*)<br> (ENTER EMAIL ID AS MENTIONED ON YOUR UDYAM CERTIFICATE) <br> (अपने उद्यम प्रमाण पत्र पर उल्लिखित ईमेल आईडी दर्ज करें)</span></label>
                        <input type="text" class="form-control" name="email_id" value="" required="">
                        </div>
                        <div class="form-group txt">
                        <label>UDYAM REGISTRATION NUMBER / उद्यम पंजीकरण संख्या<span class="required">(*)</span></label>
                           <!-- Input Field -->
                           <input type="text" class="form-control" name="udyam_number" maxlength="19" title="Enter valid UDYAM number (Example: UDYAM-DL-12-0123456)" required>
                           <span id="exampleId">(e.g., UDYAM-DL-12-0123456)</span>
                           <!-- Warning Text (Initially Hidden) -->
                           <span id="udyam_warning" style="color:red; font-size:13px; display:none;">
                           Invalid UDYAM number! Format should be: UDYAM-XX-12-1234567
                           </span>
                        </div>
                        <div class="form-group txt">
                        <label>CHOOSE THE OPTION ON WHICH YOU WANT TO RECEIVE OTP / वह विकल्प चुनें जिस पर आप ओटीपी प्राप्त करना चाहते हैं</label>
                        </div>
                        <div class="form-check-inline txt">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="opt_selected" value="MOBILE NUMBER" required="">MOBILE NUMBER AS MENTIONED ON YOUR UDYAM CERTIFICATE
                        </label>
                        </div>
                        <div class="form-check-inline txt">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="opt_selected" value="EMAIL ID" required="">EMAIL ID AS MENTIONED ON YOUR UDYAM CERTIFICATE
                        </label>
                        </div>
                        <br><br>
                        <div class="form-group txt">
                        <label>PROVIDE THE DETAILS TO BE UPDATED ON CERTIFICATE / <br> प्रमाण पत्र पर अपडेट किए जाने वाले विवरण प्रदान करें
                        </label>
                        <label class="required blink_text" style="font-size:12px;padding-left: 1.4rem;">Note: Aadhaar, PAN, Enterprise type, Investment & Turnover can not be updated.</label>
                        <textarea class="form-control" rows="5" name="updated_details"></textarea>
                        </div>

                     
                     <div class="form-group txt small clearfix">
                        <label class="checkbox-inline">Verification Code <span class="required" onclick="openSOLNumber()" style="cursor: pointer">*</span></label>
                        <img src="/captcha.php" alt="Verfication Code">
                     </div>
                     
                     <div class="form-group txt">
                        <input type="text" name="vercode" class="form-control" placeholder="Verfication Code" required="required">
                    </div>
                    
                     <div class="form-group form-check">
                           <input type="checkbox" class="form-check-input" name="terms_of_service" required="">
                           <label class="form-check-label">I AGREE TO THE <a href="./terms-and-condition.php" target="_blank">TERMS AND CONDITION</a> <span class="required txt">[UPDATED]</span></label>
                     </div>
                     <div class="form-group form-check">
                           <input type="checkbox" class="form-check-input" name="tos" required="">
                           <label class="form-check-label">I, the applicant (Owner of Udyam Registration Number used in application) agree to share Details / Passcodes etc as &amp; when required for the purpose of Update Udyam Certificate.<span class="required txt">[UPDATED]</span></label>
                     </div>
                     <input type="hidden" name="form_type" value="MSME Update Udyam Certificate">
                     <input type="hidden" class="form-control" name="form_name" value="Update Udyam Certificate">
                     <input type="hidden" class="form-control" name="form_id" value="update_udyam_certificate">
                        <button type="submit" id="ApplicationFormsubmitButton" class="btn btn-primary fcs-submit-button">Submit Application</button>
                        
                        </form>
                  </div>
               </div>
               </div>
               
               <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
                  <div class="card card_instruction">
                     <div class="card-header text-center">
                        <h3>READ THE INSTRUCTIONS TO FILL PRINT UDYAM FORM</h3>
                     </div>
                     <div class="card-body rounded-0 p-0">
                     <div class="form-instructions">
                           <div class="form-group" style="margin-top: 25px;">
                           <label class="fcs-text-dark"><strong>Applicant Name :</strong> Applicant are required to enter his / her name as mentioned on Aadhaar card, issued by UIDAI. आधार कार्ड में उल्लिखित आवेदक का नाम दर्ज करे।</label>
                           </div>

                           <div class="form-group" style="margin-top: 30px;">
                           <label class="fcs-text-dark"><strong>Mobile Number :</strong> Applicant are required to enter his / her Indian mobile number. Do not add +91. आवेदक का 10 अंकों का मोबाइल नंबर दर्ज करें। +91 न जोड़ें।</label>
                           </div>

                           <div class="form-group" style="margin-top: 30px;">
                           <label class="fcs-text-dark"><strong>Email Id :</strong> Applicant are required to enter his / her email id, as certificate and acknowledgement will be send to registered id.आवेदक की ईमेल आईडी दर्ज करें। प्रमाण पत्र इस ईमेल पर भेजा जाएगा।</label>
                           </div>
                           <div class="form-group" style="margin-top: 25px;">
                           <label class="fcs-text-dark"><strong>UDYAM REGISTRATION NUMBER :</strong> APPLICANT NEED TO ENTER HIS UDYAM REGISTRATION NUMBER. AS MENTIONED ON UDYAM CERTIFICATE. आवेदक का उद्यम पंजीकरण संख्या
                                            दर्ज करें । जैसा कि उद्यम प्रमाणपत्र में उल्लेख किया गया है</label>
                           </div>
                           <div class="form-group" style="margin-top: 30px;">
                           <label class="fcs-text-dark"><strong>CHOOSE THE OPTION ON WHICH YOU WANT TO RECEIVE OTP :</strong> Applicant are required to choose the option from which the otp will be send on their registered email / mobile.</label>
                           </div>


                           <div class="form-group" style="margin-top: 30px;">
                           <label class="fcs-text-dark"><strong>SUBMIT APPLICATION :</strong> Applicant have to click on submit application button after all details and document have uploaded. अपना आवेदन जमा करने के लिए सबमिट एप्लिकेशन बटन पर क्लिक करें।</label>
                           </div>

                        </div>
                     </div>
                  </div>
                  <div class="card card_instruction mt-4">
                        <div class="card-header text-center">
                           <h3>OTP REQUIREMENT FOR PROCESSING UDYAM REGISTRATION</h3>
                        </div>
                        <div class="card-body rounded-0 p-0">
                           <div class="form-instructions blink">
                              <div class="form-group m-0">
                                    <p class="f12 form-help h5" style="color: red;">1. While Udyog Aadhaar/UAM/Udyam Validation.</p>
                              </div>
                           </div>
                        </div>
                        </div>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <!-- <div class="container">
            <section>
               <h3>Update Udyam Registration Certificate Online</h3>
               <p>
               <span style="background-color: yellow; font-style: italic;">Modifying or updating the existing information in the Udyam Certificate is called Udyam Registration Update.</span> Suppose there is a change in the information like investment, turnover, business activity, email, mobile number, etc. In that case, you need to make the update in the Udyam Certificate as well. Keeping the Udyam Registration Certificate updated ensures compliance and reliability. Updating the Udyam Certificate online is a simple, hassle-free process. Through the steps given below, you can easily apply for the Udyam Registration Update.
               </p>

               <strong>Step 1: Visit the <a href="/">Udyam Registration Portal</a></strong>
               <p>
                  To update the Udyam Registration Certificate online, you first need to visit our Udyam portal and click on the <a href="#main-form">Update/Edit</a> Udyam button in the Nav bar.
               </p>

               <strong>Step 2: Enter basic details</strong>
               <p>You will have to provide the following information:</p>
               <ul>
                  <li>Your registered mobile number or email address (used during registration).</li>
                  <li>Enter the Udyam Registration Number (URN) (In case of not having a Udyam Registration Number, you can get your Udyam registration by applying for <strong><a href="/forgot-udyam-or-uam-registration-certificate-online.php">Forgot Udyam Registration</a></strong>.)</li>
                  <li>Provide the details to be updated on the certificate.</li>
                  <li>Captcha code to verify that you are not a robot.</li>
               </ul>

               <strong>Step 3: Review and Declaration</strong>
               <p>
               Review all the details provided and after verification Tick “I AGREE TO THE TERMS AND CONDITION “ and “I, the applicant (Owner of Aadhaar Number used in application) agree to share Details / Passcodes, etc as & when required for the purpose of Udyam Certificate Generation” box
               </p>

               <strong>Step 4: Submit and Get the Updated Udyam Registration Certificate</strong>
               <p>
                  Submit the application by clicking on the "Submit button" and pay the consultancy fee payment to begin the Update Udyam Registration Process. <br><br> The Update Udyam Registration process will start immediately. Once the payment process is completed, we will need an OTP to validate your documents and business details, for which one of our executives will remain in touch with you.<br><br> You can <a href="/track-order.php">Track your Application status</a> during processing and receive the Udyam Registration Number (URN) and Updated Udyam Registration Certificate in your registered email address.
               </p>
            </section>
            <section>
               <h3>Why Update Your Udyam Certificate?</h3>
               <p>The following is the reason why Udyam needs to be updated:</p>
               <ul>
                  <li>Change in business details such as business name, address, business activities, and contact details of the business.</li>
                  <li>In case of transition of business from micro to small or medium due to change in investment and turnover.</li>
                  <li>Change in ownership, partnership, or authorized signatory of the business.</li>
                  <li>Updation of GST and bank account details.</li>
               </ul>
            </section>
            <section>
               <h3>Benefits of Updating the Udyam Registration Certificate</h3>
               <p>Keeping your Udyam Registration updated has several benefits, which are as follows:</p>
               <ul>
                  <li>Businesses are eligible to avail of various government schemes such as subsidy on bank loans, tax exemptions, and priority lending for MSMEs.</li>
                  <li>Updating Udyam ensures that your business is compliant with all government regulations such as filing taxes, claiming GST refunds, etc., and helps to avoid penalties and incorrect information.</li>
                  <li>It enhances business credibility and increases trust in customers/clients, financial institutions, and government bodies.</li>
                  <li>Outdated Udyam leads to delays and rejection in getting tenders, contracts, licenses, subsidy claims, etc. Therefore, updating Udyam registration prevents such hurdles.</li>
               </ul>
            </section>
         </div> -->
      </section>

      <?php include_once('components/process-nav.php'); ?>
      <?php include_once('components/disclaimer.php'); ?>
      <br>
      <button onclick="topFunction()" id="myBtnTop" title="Go to top" style="display: none;"><div><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,7.16667l-28.66667,28.66667h21.5v129h14.33333v-129h21.5z"></path></g></g></svg></div>Top</button>
      <script src="/assets/js/main.js" ></script>
      <?php include_once('components/footer.php') ?>
   </body>
</html>