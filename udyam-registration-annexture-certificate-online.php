<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Udyam annexure | Download certificate - PDF</title>
        <meta name="description" content="Get your Udyam Annexure Certificate online instantly, with full annexure details included. Quick, secure access for MSMEs — print anytime." />
        <meta name="keywords" content="Download Udyam Annexure Certificate, Udyam Certificate PDF Download, Annexure Certificate Udyam, Download Udyam Certificate Online, Udyam Annexure PDF, Get Udyam Certificate PDF, Udyam Annexure Certificate Online, MSME Udyam Certificate Download, Download Udyam Annexure Document, Udyam Certificate PDF Format">
        <link rel="canonical" href="<?php echo $baseUrl; ?>udyam-registration-annexture-certificate-online.php" />
        <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16" />
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <meta name="author" content="UdyamGov">
        <meta name="robots" content="index, follow">
        <meta name="theme-color" content="#385067">
        <meta property="og:title" content="Udyam annexure | Download certificate - PDF">
        <meta property="og:description" content="Get your Udyam Annexure Certificate online instantly, with full annexure details included. Quick, secure access for MSMEs — print anytime.">
        <meta property="og:image" content="<?php echo $baseUrl; ?>assets/img/favicon-udyam-registration.png" />
        <meta property="og:url" content="<?php echo $baseUrl; ?>udyam-registration-annexture-certificate-online.php">
        <meta property="og:type" content="website">

        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "Udyam annexure | Download certificate - PDF",
            "description": "Get your Udyam Annexure Certificate online instantly, with full annexure details included. Quick, secure access for MSMEs — print anytime.",
            "url": "<?php echo $baseUrl; ?>udyam-registration-annexture-certificate-online.php",
            "potentialAction": {
            "@type": "Action",
            "name": "Download Udyam Annexure Certificate",
            "target": "<?php echo $baseUrl; ?>udyam-registration-annexture-certificate-online.php"
            },
            "about": {
            "@type": "Service",
            "serviceType": "Udyam Annexure Registration Service",
            "provider": {
                "@type": "Organization",
                "name": "UdyamGov",
                "url": "<?php echo $baseUrl; ?>"
            },
            "audience": {
                "@type": "Audience",
                "audienceType": "Micro, Small and Medium Enterprises"
            },
            "areaServed": {
                "@type": "Country",
                "name": "India"
            },
            "offers": {
                "@type": "Offer",
                "url": "<?php echo $baseUrl; ?>udyam-registration-annexture-certificate-online.php",
                "priceCurrency": "INR",
                "eligibleRegion": {
                "@type": "Country",
                "name": "India"
                },
                "availability": "https://schema.org/InStock"
            }
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
                "name": "Udyam Annexure Certificate",
                "item": "<?php echo $baseUrl; ?>udyam-registration-annexture-certificate-online.php"
                }]
            }
        </script>
        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Udyam annexure | Download certificate - PDF ",
            "description": "Get your Udyam Annexure Certificate online instantly, with full annexure details included. Quick, secure access for MSMEs — print anytime.",
            "review": {
            "@type": "Review",
            "reviewRating": {
            "@type": "Rating",
            "ratingValue": 4.6,
            "bestRating": 5
            },
            "author": {
                "@type": "Organization",
                "name": "UdyamGov"
            }
            },
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.4,
            "reviewCount": 889
            }
            }
        </script>

    </head>
    <body>
        <?php include_once('components/header.php') ?>

        <!-- form -->
        <section id="-registration">
            <div class="container custom-form-container pt-4">
            <h1 class="text-center">Download Udyam Certificate with Annexure</h1>
            <p class="text-center font-weight-bold" >Quickly Download online your Udyam Certificate with annexure printed in PDF format instantly from our website for MSMEs</p>
                <div class="row mb-5">
                    <div class="col-lg-7 col-md-12">
                        <div class="card rounded-0">
                            <div class="card-header rounded-0 text-center p-2 text-white brown">
                                <h2 style="font-size: 19px; font-weight: bold;">
                                Udyam Annexure Certificate Form</h2>
                            </div>
                            <div class="card-body rounded-0 p-1">
                                <form id="main-form" action="submit.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group txt">
                                        <label>APPLICANT NAME / आवेदक का नाम<span class="required">(*)</span></label>
                                        <input type="text" class="form-control" name="applicant_name" value="" required="" />
                                    </div>
                                    <div class="form-group txt">
                                        <label>MOBILE NUMBER / मोबाइल संख्या<span class="required">(*)<br> (ENTER MOBILE NUMBER AS MENTIONED ON YOUR UDYAM CERTIFICATE) <br> (अपने उद्यम प्रमाणपत्र पर उल्लिखित मोबाइल नंबर दर्ज करें ) </span></label>
                                        <input type="tel" maxlength="10" minlength="10" class="form-control" name="mobile_number" value="" required="" />
                                        <span style="color: red; font-size: 10px;">Note:- OTP will be sent on mobile number mentioned on UDYAM certificate for verification.</span>
                                    </div>

                                    <div class="form-group txt">
                                        <label>EMAIL ID / ईमेल आईडी<span class="required">(*)<br> (ENTER EMAIL ID AS MENTIONED ON YOUR UDYAM CERTIFICATE) <br> (अपने उद्यम प्रमाण पत्र पर उल्लिखित ईमेल आईडी दर्ज करें)</span></label>
                                        <input type="text" class="form-control" name="email_id" value="" required="" />
                                    </div>
                                    <div class="form-group txt">
                           <label for="udyam_uam_number">Select the Certificate<span class="required">(*)</span></label>
                           <span>
                           <select id="udyamuam" name="udyam_uam_payment" class="form-control" required>
                                 <option value="" selected disabled hidden>--Select--</option>
                                 <option value="Udyam Number">Udyam Registration</option>
                                 <option value="Udyog Aadhar"> Udyog Aadhar Registration</option>
                           </select>
                           </span>
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
                                        <label class="form-check-label">I, the applicant (Owner of Udyam Registration Number used in application) agree to share Details / Passcodes etc as &amp; when required for the purpose of Udyam Certificate Generation.<span class="required txt">[UPDATED]</span></label>
                                    </div>
                                    <input type="hidden" name="form_type" value="MSME Udyam Application" />
                                    <input type="hidden" class="form-control" name="form_name" value="Annexture Udyam Application" />
                                    <input type="hidden" class="form-control" name="form_id" value="annexture_udyam_application" />
                                    <button type="submit" id="ApplicationFormsubmitButton" class="btn btn-primary fcs-submit-button">Submit Application</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
                        <div class="card card_instruction">
                            <div class="card-header text-center">
                                <h3>READ THE INSTRUCTIONS TO FILL ANNEXURE FORM</h3>
                            </div>
                            <div class="card-body rounded-0 p-0">
                                <div class="form-instructions">
                                    <div class="form-group" style="margin-top: 5px;">
                                        <label class="fcs-text-dark"><strong>Applicant Name :</strong> Enter applicant's name as mentioned on AADHAAR CARD. आधार कार्ड में उल्लिखित आवेदक का नाम दर्ज करे। .</label>
                                    </div>
                                    <div class="form-group" style="margin-top: 10px;">
                                        <label class="fcs-text-dark"><strong>Mobile Number :</strong> Enter applicant's 10 digit mobile number. Do not add +91. आवेदक का 10 अंकों का मोबाइल नंबर दर्ज करें। +91 न जोड़ें।.</label>
                                    </div>

                                    <div class="form-group" style="margin-top: 10px;">
                                        <label class="fcs-text-dark"><strong>Email Id :</strong> Enter applicant's email id. Certificate will be sent on this email. आवेदक की ईमेल आईडी दर्ज करें। प्रमाण पत्र इस ईमेल पर भेजा जाएगा।.</label>
                                    </div>
                                    <div class="form-group" style="margin-top: 5px;">
                                        <label class="fcs-text-dark">
                                            <strong>Udyam Registration Number :</strong> Enter applicant's Udyam Registration number. as mentioned on Udyam Certificate Ex : <strong>UDYAM-TN-XX-XXXXXXX</strong> आवेदक का उद्यम पंजीकरण संख्या
                                            दर्ज करें । जैसा कि उद्यम प्रमाणपत्र में उल्लेख किया गया है
                                        </label>
                                    </div>
                                    <div class="form-group" style="margin-top: 30px;">
                                        <label class="fcs-text-dark"><strong>Submit Application :</strong> Applicant have to click on submit application button after all details and document have uploaded. अपना आवेदन जमा करने के लिए सबमिट एप्लिकेशन बटन पर क्लिक करें।</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card card_instruction mt-4">
                             <div class="card-header text-center">
                                <h3>SAMPLE PRINT CERTIFICATE</h3>
                            </div>
                            <div class="card-body rounded-0 p-0 d-flex">
                                <img src="assets/image/print-udyam-certificate.jpg" alt="sample of print or download print udyam registration Certificate" class="img mx-auto" srcset="">
                            </div>
                            
                        </div>
                        <div class="card card_instruction mt-4">
                            <div class="card-header text-center">
                                <h3>OTP REQUIREMENT FOR DOWNLOAD UDYAM ANNEXURE</h3>
                            </div>
                            <div class="card-body rounded-0 p-0">
                                <div class="form-instructions blink">
                                    <div class="form-group m-0">
                                        <p class="f12 form-help h5" style="color: red;">1. While Mobile Number or E-mail ID Validation.</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

         
            <br>
            
            
            
            </div>
            <br>
        </section>
        <!-- <div class="container">
            <section>
                <h3>Step-by-Step Guide to Print Udyam Annexure Certificate</h3>
                <p><span style="background-color: yellow; font-style: italic;">The Udyam Annexure is a supplementary document apart from the Udyam Registration Certificate which we receive after completing the Udyam Registration process.</span> It contains detailed insights such as:</p>
                <ul>
                    <li>1. PAN and GST details</li>
                    <li>2. Investments and Turnover figures, etc</li>
                    <li>3. Business classification and compliance status</li>
                </ul>
                <p>Here are the simple steps to get your Udyam Annexure Certificate given below:</p>
                
                <strong>Step 1: Visit the <a href="/">Udyam Registration Portal</a></strong>
                <p>To print the Udyam Annexure Certificate online, you first need to visit our Udyam portal and click on the <strong><a href="#main-form">Udyam Annexure Certificate</a></strong> button in the Nav bar.</p>
                
                <strong>Step 2: Enter Basic Details</strong>
                <p>You will have to provide the following information:</p>
                <ul>
                    <li>Your registered mobile number or email address (used during registration).</li>
                    <li>Enter the Udyam Registration Number (URN).</li>
                    <li>Captcha code to verify that you are not a robot.</li>
                </ul>
                
                <strong>Step 3: Review and Declaration</strong>
                <p>Review all the details provided and after verification Tick “I AGREE TO THE TERMS AND CONDITION “ and “I, the applicant (Owner of Aadhaar Number used in application) agree to share Details / Passcodes, etc as & when required for the purpose of Udyam Certificate Generation” box.</p>
                
                <strong>Step 4: Submit and Get the Udyam Registration Certificate</strong>
                <p>Submit the application by clicking on the <strong>Submit button</strong> and pay the consultancy fee payment to begin the Print Udyam Annexure Certificate Process.</p>
                <p>The Print Udyam Annexure Certificate process will start immediately. Once the payment process is completed, we will need an OTP to validate your documents and business details, for which one of our executives will remain in touch with you.</p>
                <p>You can <a href="/track-order.php">track your application status</a> during processing and receive the Udyam Registration Number (URN) and Udyam Annexure Certificate at your registered email address.</p>
            </section>

            <section>
                <h3>Why Is Printing the Udyam Annexure Certificate Important?</h3>
                <p>Printing the Udyam Annexure Certificate is required for the following reasons:</p>
                <ul>
                    <li>It is used while applying for Government schemes, subsidies, and tenders.</li>
                    <li>We can use the Udyam Annexure as proof of MSME registration during inspection and audit.</li>
                    <li>To keep a physical copy for quick reference or submission.</li>
                </ul>
            </section>
        </div> -->
        <br>
        <?php include_once('components/process-nav.php'); ?>
      <?php include_once('components/disclaimer.php'); ?>
      <button onclick="topFunction()" id="myBtnTop" title="Go to top" style="display: none;"><div><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,7.16667l-28.66667,28.66667h21.5v129h14.33333v-129h21.5z"></path></g></g></svg></div>Top</button>
        <br />
        <script src="/assets/js/main.js" ></script>
        <?php include_once('components/footer.php') ?>
    </body>
</html>
