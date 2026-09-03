<?php
$incBlogHeader = 'yes';
session_start();
include "../config.php";
$page = basename($_SERVER['REQUEST_URI']);
mysqli_query($conn, 'UPDATE `blogs` SET `views`= `views` + 1 WHERE page_name ="' . $page . '"');
$sql = 'SELECT * FROM blogs WHERE page_name ="' . $page . '"';
$query = mysqli_query($conn, $sql);
if ($query->num_rows > 0 ) {
} else {
    header("HTTP/1.0 404 Not Found");
    include_once('../404.php');
    die();
}
?>
<?php foreach ($query as $q)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $q['page_title']; ?></title>
<meta name="description" content="<?php echo $q['page_meta_description']; ?>">
<link rel="canonical" href="https://udyamgov.com/blog/<?php echo $page; ?>" />
<meta name="keywords" content="<?php echo $q['page_meta_keywords']; ?>">
<link rel="icon" href="https://udyamgov.com/assets/img/favicon-msme-registration.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="/assets/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/main.css">
<meta name="theme-color" content="#385067">
<meta property="og:title" content="<?php echo $q['page_title']; ?>" />
<meta property="og:description" content="<?php echo $q['page_meta_description']; ?>" />
<meta property="og:url" content="https://udyamgov.com/blog/<?php echo $page; ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Udyam Sewa" />
<meta property="og:locale" content="en_IN">
<meta property="og:image:alt" content="<?php echo $q['image_alt']; ?>">
<meta property="fb:app_id" content="61565901122883">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $q['page_title']; ?>">
<meta name="twitter:description" content="<?php echo $q['page_meta_description']; ?>">
<meta name="twitter:url" content="https://udyamgov.com/blog/<?php echo $page; ?>">
<meta name="twitter:image" content="https://udyamgov.com/assets/img/favicon-msme-registration.png">
<meta name="twitter:image:alt" content="MSME/Udyam Article">
<meta name="twitter:site" content="@UdyamGov">
<meta name="twitter:creator" content="@UdyamGov">
<meta property="og:image" content="https://udyamgov.com/assets/img/favicon-msme-registration.png" />
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "<?php echo $q['page_title']; ?>",
        "description": "<?php echo $q['page_meta_description']; ?>",
        "url": "https://udyamgov.com/blog/<?php echo $page; ?>", 
        "potentialAction": {
            "@type": "Action",
            "name": "MSME/Udyam/Udyog Blog",
            "target": {
            "@type": "EntryPoint",
            "urlTemplate": "https://udyamgov.com/blog/<?php echo $page; ?>"
            }
        },      
        "sameAs": [
            "https://www.facebook.com/profile.php?id=61571904965348",
            "https://x.com/UdyamGov",
            "https://www.instagram.com/udyamgov.offical/",
            "https://www.youtube.com/@UdyamGov"
        ],
        "mainEntity": {
            "@type": "Article",
            "name": "<?php echo $q['page_title']; ?>",
            "serviceType": "Business Registration Blog",
            "provider": {
            "@type": "Organization",
            "name": "UdyamGov",
            "url": "https://udyamgov.com/blog/<?php echo $page; ?>"
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
            "additionalType": "https://udyamgov.com/blog/<?php echo $page; ?>"
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
         "name": "Udyam Registration",
         "item": "https://udyamgov.com"
         },
         {
         "@type": "ListItem",
         "position": 2,
         "name": "Blogs",
         "item": "https://udyamgov.com/blog/"
         },
         {
         "@type": "ListItem",
         "position": 3,
         "name": " <?php echo $q['image_alt']; ?> ",
         "item": "https://udyamgov.com/blog/<?php echo $page; ?>"
         }]
      }
</script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "<?php echo $q['page_title']; ?>",
      "image": [
        "<?php echo $q['image']; ?>"
       ],
      "datePublished": "<?php echo $q['created_date']; ?>",
      "author": [{
          "@type": "Organization",
          "name": "UdyamGov",
          "url": "https://udyamgov.com"
        }]
    }
</script>
<script type="application/ld+json">
    {
     "@context": "https://schema.org/",
     "@type": "WebPage",
     "name": "About Us",
     "speakable":
     {
      "@type": "SpeakableSpecification",
      "xPath": [
        "/html/head/title",
        "/html/body"
        ]
      },
     "url": "https://udyamgov.com/blog/<?php echo $page; ?>"
     }
</script>
<style>
body {
    margin: 0!important;
    padding: 0;
    overflow-x: hidden;
}
.fcs-mainbar-container {
    background: #f8f8f8 !important;
    padding: 0 !Important;
    background: #fff !important;
}

.fakeimg {
width: 100%;
padding-top:5px;
padding-bottom:30px;

display: block;
}
.top{
color:black;
margin-top:2%;
margin-bottom:2%;
font-size:2.2vw;
margin-right: auto;
margin-left: auto;
}
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
width: 100%;
padding-right: 0px;
padding-left: 0px;
margin-right: auto;
margin-left: auto;
}
a:not([href]):not([tabindex]), a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
color: inherit;
text-decoration: none;
margin-top:1%;
}
.card-horizontal {
display: flex;
flex: 1 1 auto;
}
.h5, h5 {
font-size: 12px;
color:black !important;
font-family: "Roboto", Sans-serif;
}
.h4, h4 {
font-size: 18px;
font-family: "Roboto", Sans-serif;
}
span.author{
font-family: "Roboto", Sans-serif;
font-size:12px;
}
.hide{
display:none;
}
</style>
<?php echo $q['schema']; ?> 
</head>
<body>
<?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/components/header.php'); ?>
<br>
<br>
<div class="container">
<div>
    <div class="p-2 p-lg-0">
    <h1><?php echo $q['title']; ?></h1><br>
<?php echo $q['short_desc']; ?> 
<div class="p-2 p-lg-0">
<img src="<?php echo $q['image']; ?>" alt="<?php echo $q['image_alt']; ?>" class="img-fluid img1 fakeimg">
  <span class="p-1"><?php echo $q['long_desc']; ?></span></div>
</div>
</div>
</div>
<?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'); ?>


</body>

</html>
<?php
}
?>
