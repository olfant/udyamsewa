<?php 
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
?>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>File Not Found</title>
      <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
      <style>
                .flex-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                color:#686868;
                animation: colorSlide 15s cubic-bezier(0.075, 0.82, 0.165, 1) infinite;

                .text-center {
                    text-align: center;
                    h1,
                    h3 {
                    margin: 10px;
                    cursor: default;
                    
                    .fade-in {
                        animation: fadeIn 2s ease infinite;
                    }
                    }

                    h1 {
                    font-size: 8em;
                    transition: font-size 200ms ease-in-out;
                    border-bottom: 1px dashed white;

                    span#digit1 { animation-delay: 200ms; }
                    span#digit2 { animation-delay: 300ms; }
                    span#digit3 { animation-delay: 400ms; }
                    }
                    
                    button {
                        border: 1px solid white;
                        background: transparent;
                    outline: none;
                    padding: 10px 20px;
                    font-size: 1.1rem;
                    font-weight: bold;
                    color: white;
                    text-transform: uppercase;
                    transition: background-color 200ms ease-in;
                    margin: 20px 0;
                    
                    background: gray;
                    &:hover {
                        background-color: white;
                        color: #555;
                        cursor: pointer;
                    }
                    }
                }
                }
 
      </style>
      <meta name="author" content="UdyamGov">
      <meta name="robots" content="noindex, nofollow">
      <meta name="theme-color" content="#385067">
      <meta http-equiv="refresh" content="10;url=https://udyamgov.com/">
      <meta property="og:title" content="404 Page Not Found" />
      <meta property="og:description" content="This page could not be found. Please check the URL or return to the homepage." />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="https://udyamgov.com/assets/img/favicon-udyam-registration.png" />
            <script type="application/ld+json">
         {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "name": "404 Page Not Found",
         "description": "This page could not be found. Please check the URL or return to the homepage.",
         
"sameAs": [
    "https://www.facebook.com/profile.php?id=61571904965348",
    "https://x.com/UdyamGov",
    "https://www.instagram.com/udyamgov.offical/",
    "https://www.youtube.com/@UdyamGov"
],
"mainEntity": {
            "@type": "Service",
            "provider": {
               "@type": "Organization",
               "name": "UdyamGov"
            },
            "areaServed": {
               "@type": "Country",
               "name": "India"
            },
            "audience": {
               "@type": "Audience",
               "geographicArea": {
               "@type": "AdministrativeArea",
               "name": "India"
               }
            }
         }
         }
      </script>
   </head>
   <body>
      
      <div class="flex-container">
        <div class="text-center">
            <h1>
            <span class="fade-in" id="digit1">4</span>
            <span class="fade-in" id="digit2">0</span>
            <span class="fade-in" id="digit3">4</span>
            </h1>
            <h3 class="fadeIn">PAGE NOT FOUND</h3>
            <a href="/">
                <button type="button" name="button" class="btn btn-dark">Return To Home</button>
            </a>
        </div>
      </div>
     
   </body>
</html>