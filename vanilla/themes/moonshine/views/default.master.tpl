<!DOCTYPE html>
<html lang="{$CurrentLocale.Lang}">
<head>
    {asset name="Head"}
  <link rel="stylesheet" type="text/css" href="custom.css">
  <meta name="viewport" content="width=device-width">
  <script src="https://use.fontawesome.com/c5b9554837.js"></script>
</head>
<body id="{$BodyID}" class="{$BodyClass}">

<div id="Frame">
    <div class="Head" id="Head">
        <div class="row">   <!--http://collegevault.com/wp-content/uploads/2014/11/Little_Brown_Jug_2.png-->
            <img id="logo" src="http://www.clker.com/cliparts/d/C/V/s/q/D/oktoberfest-beer-mug.svg" alt="">
            <strong class="SiteTitle"><a href="{link path="/"}">{logo}</a></strong>
            <!-- <div class="SiteSearch">{searchbox}</div> -->
            <ul class="SiteMenu">
                 <!-- {dashboard_link} -->
                {inbox_link}
                {profile_link}
               {signinout_link}
            </ul>
        </div>
    </div>
    <div id="Body">
        <div class="Row">
          <div class="col-12">
            <div class="BreadcrumbsWrapper">{breadcrumbs}</div>
          </div>
        </div>
        <!-- <div class="container"> -->
        <div class="Row">
          <div class="col-2">
            <div class="Column PanelColumn" id="Panel">
                {module name="MeModule"}
                {asset name="Panel"}
                </div>
              </div>
              <div class="col-10">
            <div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
          <!-- </div> -->
           </div>
         </div>
         </div>
        </div>
    </div>
</div>
{event name="AfterBody"}
<footer class="foot">
    <span class="footerText">MoonShine Systems Copyright &copy 2017. All Rights Reserved</span>
    <span class="socialMedia">
     <i class="fa fa-facebook-official" aria-hidden="true"></i>
     <i class="fa fa-instagram" aria-hidden="true"></i>
     <i class="fa fa-twitter" aria-hidden="true"></i>
     <i class="fa fa-google-plus" aria-hidden="true"></i>
    </span>
</footer>
</body>
</html>
