<?php require_once __DIR__ . '/config.php'; ?>
<?php
// Check if the requested file exists
if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI']) && empty($incBlogHeader)) {
  header('HTTP/1.0 404 Not Found', true, 404);
  // If the file doesn't exist, redirect to the custom 404 error page
  include_once('404.php');
  // End script execution
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Privacy Policy | Udyam Sewa - MSME Registration</title>
  <meta name="description" content="Your privacy matters. We use your personal data only to provide and improve our services. Read our full privacy practices here.">
  <meta name="keywords" content="Privacy Policy, UdyamGov Privacy Policy, Data Protection Policy, User Privacy, Information Security, Data Usage Policy, Website Privacy, Personal Data Policy, User Data Confidentiality, UdyamGov Data Privacy">
  <link rel="canonical" href="<?php echo $baseUrl; ?>privacy-policy.php" />
  <link rel="icon" href="<?php echo $baseUrl; ?>assets/img/favicon-msme-registration.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="/assets/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <meta name="author" content="UdyamGov">
  <meta name="robots" content="index, follow">
  <meta name="theme-color" content="#385067">
  <meta property="og:title" content="Privacy Policy | Udyam Sewa - MSME Registration">
  <meta property="og:description" content="Your privacy matters. We use your personal data only to provide and improve our services. Read our full privacy practices here. ">
  <meta property="og:image" content="<?php echo $baseUrl; ?>assets/img/favicon-msme-registration.pngg" />
  <meta property="og:url" content="<?php echo $baseUrl; ?>privacy-policy.php">
  <meta property="og:type" content="website">
  <style>
        .content-page-wrapper {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 15px;
            color: #3d4f61;
            font-family: 'Inter', sans-serif;
            line-height: 1.8;
            font-size: 16px;
        }
        .content-page-header {
            text-align: center;
            margin-bottom: 50px;
            padding-bottom: 30px;
            border-bottom: 1px solid #e2e8f0;
        }
        .content-page-header h1 {
            font-size: 42px;
            font-weight: 800;
            color: #0B1E59;
            margin-bottom: 15px;
            letter-spacing: -0.5px;
        }
        .content-page-header p.subtitle {
            font-size: 18px;
            color: #64748b;
            font-weight: 500;
            max-width: 600px;
            margin: 0 auto;
        }
        .content-page-wrapper h2 {
            font-size: 24px;
            font-weight: 700;
            color: #2a9d46;
            margin-top: 40px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f1f5f9;
        }
        .content-page-wrapper h3 {
            font-size: 20px;
            font-weight: 600;
            color: #0B1E59;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        .content-page-wrapper p {
            margin-bottom: 20px;
        }
        .content-page-wrapper ul {
            margin-bottom: 25px;
            padding-left: 25px;
        }
        .content-page-wrapper ul li {
            margin-bottom: 10px;
            position: relative;
        }
        .content-page-wrapper ul li::marker {
            color: #ff7f00;
            font-weight: bold;
        }
  </style>

  <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Privacy Policy | Udyam Sewa - MSME Registration",
    "description": "Your privacy matters. We use your personal data only to provide and improve our services. Read our full privacy practices here.",
    "url": "<?php echo $baseUrl; ?>privacy-policy.php", 
    "potentialAction": {
      "@type": "Action",
      "name": "MSME / Udyam Service - udyamsewa.com Private Consultancy",
      "target": {
          "@type": "EntryPoint",
          "urlTemplate": "<?php echo $baseUrl; ?>privacy-policy.php"
      }
    },
    
    "sameAs": [
        "https://www.facebook.com/profile.php?id=61591439595616",
        "https://x.com/UdyamGov",
        "https://www.instagram.com/udyam_gov/"
    ],
    "mainEntity": {
      "@type": "Service",
      "name": "MSME / Udyam Service - udyamsewa.com Private Consultancy",
      "serviceType": "Business Private Consultancy",
      "provider": {
          "@type": "Organization",
          "name": "UdyamGov",
          "url": "<?php echo $baseUrl; ?>privacy-policy.php"
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
      "additionalType": "<?php echo $baseUrl; ?>privacy-policy.php"
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
        "name": "Privacy Policy",
        "item": "<?php echo $baseUrl; ?>privacy-policy.php"
        }]
    }
  </script>

</head>
<body>
  <?php include_once('components/header.php') ?>

  <div class="container content-page-wrapper mb-5">
    <div class="content-page-header">
        <h1>Privacy Policy</h1>
        <p class="subtitle">Last updated: June 06, 2025</p>
    </div>
    <p>Welcome to the udyamsewa.com website. Here is our privacy policy, which applies to our website and the services we provide.</p>
    <p>Through this privacy policy, we want to tell you how we connect, use, and disclose your information when you use our service, as well as mention your privacy rights and legal protections. We collect and use your data so that we can improve our services.</p>
    <p>We may combine and use your information as per the guidelines outlined in our privacy policy when you use our services.</p>
    <h2>1. Types of Data Collected</h2>
    <h3>Personal Data</h3>
    <p>When you use our services, we will ask you for personally identifiable information that allows us to contact or identify you as a user. Personally identifiable information includes, but is not limited to:</p>
    <ul>
      <li>Email address</li>
      <li>First name and last name</li>
      <li>Phone number</li>
      <li>Address, State, Province, ZIP/Postal code, City</li>
      <li>Business information such as company name, address, and industry sector</li>
    </ul>

    <h3>Useful information</h3>
    <p>Our Service is used to collect personal information from time to time automatically. Useful information includes your IP address, the time and date of your visit to our website, browser type and browser version, and the time spent you in particular page.</p>

    <h3>Cookies and Tracking Technologies</h3>
    <p>To monitor user activity on our service and keep specific data, we employ cookies and related tracking technologies. Beacons, tags, and scripts are examples of tracking technologies that are used to gather and monitor data to enhance and evaluate our service. Among the technologies we might employ are</p>
    <ul>
      <li><strong>Cookies or Browser Cookies:</strong>  Often known as browser cookies, these are little files saved on your device. You have the option to tell your browser when a cookie is being sent or to reject all cookies. You might not be able to utilise some aspects of our service, though, if you reject cookies. Our service may make use of cookies unless you have set your browser to reject cookies..</li>
      <li><strong>Flash Cookies:</strong> To gather and store data about your preferences or activities on our service, some features may use local stored objects, also known as Flash Cookies. The browser settings used to control browser cookies do not apply to flash cookies.</li>
      <li><strong>Web Beacons:</strong> Web beacons, also known as clear gifs, pixel tags, and single-pixel gifs, are tiny electronic files that may be present in some parts of our service and emails. They allow the company to track various website metrics, such as the number of users who have visited those pages or clicked on an email.</li>
    </ul>

    <h2>2. Use of Your Personal Data</h2>
    <p>Your data may be used by our company to</p>
    <ul>
      <li>Provide and maintain our service, including seeing how people use our service.</li>
      <li>We manage your account when you become a user of our service. We give you options to access various features of our Service if you register yourself to our services because it is available to registered applicants.</li>
      <li>We can contact you via email, telephone, SMS, or other means of communication to give updates or information about our Service.</li>
      <li>You will be provided with the latest news, special deals or general information related to any purchase through our Service.</li>
      <li>Any of your important data collected through our Services, and when our services face dissolution, liquidation, or any other process, if our services are merged, repositioned, or otherwise merged in the future, your data will act as an asset for us.</li>
      <li>To establish our products well and optimize our marketing and experience, we may also use your information for data analysis, identifying trends, setting up our promotional campaigns, and assessing and improving our Services.</li>
    </ul>

    <h2>3. Protection, Storage, and Sharing of User Data</h2>
    <p>We always take measures to keep your data safe from illegal encroachment, alteration, disclosure, and destruction. All user data is kept securely on our servers, and if any user data is shared with a third party, it is done only with trusted third parties to improve our service. We do not rent or sell your information to any third party. User data may be disclosed if it is required by law to protect our rights, property, and safety.</p>

    <h2>4. Retention of Your Personal Data</h2>
    <p>The company will control your data as long as it complies with our privacy policy. We can also use your data for internal analysis. Appropriate data may be kept for a limited time only. We are legally obliged to retain and control your data for a longer period if we want to improve our service or achieve security.</p>

    <h2>5. Location of your data    </h2>
    <p>All of your information, including your data, may be stored at the Company's operating offices or any part thereof. This means that the information may be transferred to computers located outside of your state, province, country, or other jurisdiction.</p>
    <p>Your data may be transferred to third parties where data protection laws differ. When you agree to the Privacy Policy, you also agree that your data may be transferred. Your data will always be treated under our Privacy Policy and will not be passed on to any illegal organization.</p>

    <h2>Disclosure of your data </h2>
    <p>The Company may disclose your data because it is necessary to Comply with legal obligations, protect the rights and property of the Company, protect the personal safety of users or the public, and prevent or investigate errors with our Service.</p>

    <h2>7. Security of Your Personal Data</h2>
    <p>The security of your data is very important to us, but you should always remember that no electronic collection or transmission over the Internet is completely secure. We cannot guarantee 100% security of your data, but we always try to protect it using commercially acceptable means.</p>

    <h2>8. Children's Privacy</h2>
    <p>Our Service is not intended for children under the age of 13. No personally identifiable information is collected from persons under the age of 13. If you are a parent or guardian and you are aware that your child has provided us with any personal information, please contact us. We will take action and verify the rights of those who collect personal data from persons under the age of 13 without parental consent. We obtain your consent as the legal basis whenever we process your information. We require persons under the age of 13 to obtain their parental consent before they may use our Services.</p>

    <h2>9. Links to Other Websites</h2>
    <p> The Service provided by us may contain links to other websites that are not operated by us. You will be directed to a third party website if you click on a link. We encourage you to check the privacy policy of any third party website before visiting it. We have no control over and are not responsible for third party websites or their services.</p>

    <h2>10. Changes to This Privacy Policy</h2>
    <p>udyamsewa.com changes its Privacy Policy frequently, but we will notify you of any changes to our Privacy Policy. We will publish an up-to-date Privacy Policy on our Website. We will update the “Last Updated” date at the top of this Privacy Policy and provide you with a prominent notice by email or on our Service when the change becomes effective. You are advised to review this Privacy Policy regularly for any changes. Changes to the Privacy Policy take effect when posted on this page.  </p>

    <h2>11. Contact Us</h2>
    <p>If you have any questions or concerns regarding this Privacy Policy, you can contact us, and we will address all your queries:</p>
    <ul>
      <li>By email: <a href="mailto:care@udyamsewa.com"> care@udyamsewa.com</a></li>
      <li>By visiting this page on our website: <a href="<?php echo $baseUrl; ?>enquiry.php">Enquiry Page</a></li>
    </ul>
    <h2>12. Use of Cookies</h2>
    <p>We use cookies to improve our Services. When you use our Service, the web server places small text files called cookies on your device. We use the following cookies:</p>

    <h3>Necessary Cookies</h3>
    <p>These cookies are necessary for our Service to run. They help make the website usable by enabling basic functions, such as page navigation and access to secure areas. Without this cookie, the Service would fail.</p>

    <h3>Preference Cookies</h3>
    <p>Special cookies enable websites to remember information that changes the way the website looks or works, such as your preferred language or region.</p>

    <h3>Statistics Cookies</h3>
    <p>Statistical cookies help us understand how we use our website by collecting and reporting information anonymously.</p>

    <h3>Marketing Cookies</h3>
    <p>Advertising cookies are used to track visitors across websites. The goal is to show ads that are relevant and engaging to the individual user, so publishers and third-party advertisers will get more profit.</p>

    <h2>13. Your Rights</h2>
    <p>The data protection regulations give you the following rights:</p>
    <ul>
        <li><strong>The right to access:</strong> You have the right to ask us for copies of your data. We may charge a fee for providing this service.</li>
        <li><strong>The right to rectification:</strong> You can ask us to correct any information you think is inaccurate. You also have the right to ask us to complete any incomplete information. We will rectify your request if we think it is correct.</li>
        <li><strong>The right to erasure:</strong>If you want your data deleted under certain conditions, you have the right to request that we meet your request if it is true.</li>
        <li><strong>The right to restrict processing:</strong>You have the right to ask us to restrict the processing of your data under certain conditions.</li>
        <li><strong>The right to object to processing:</strong>You have the right to object to the processing of your data under certain conditions.</li>
        <li><strong>The right to data portability:</strong> You have the right to ask us to pass your data directly to you or another organisation.</li>
    </ul>
    <p>If you make any demands, we have a month. Whenever you want to use any of these demands, please contact us. You can email us at care@udyamsewa.com; we have sent the contact details.</p>
  </div>



  <?php include_once('components/footer.php') ?>
</body>

</html>