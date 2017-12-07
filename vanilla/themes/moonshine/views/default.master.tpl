<!DOCTYPE html>
<html lang="{$CurrentLocale.Lang}">
<head>
    {asset name="Head"}
  <link rel="stylesheet" type="text/css" href="custom.css">
  <link rel="shortcut icon" href="http://www.clker.com/cliparts/d/C/V/s/q/D/oktoberfest-beer-mug.svg">
  <meta name="viewport" content="width=device-width">
  <script src="https://use.fontawesome.com/c5b9554837.js"></script>
</head>
<body id="{$BodyID}" class="{$BodyClass}">

<div id="Frame">
    <div class="Head" id="Head">
        <div class="row">
            <img id="logo" src="http://www.clker.com/cliparts/d/C/V/s/q/D/oktoberfest-beer-mug.svg" alt="">
            <strong class="SiteTitle"><a href="{link path="/"}">{logo}</a></strong>
            <a href="javascript:void(0);" class="hamburgerMenu"
            onclick="dropdownMenu()">&#9776;</a>

            <ul class="SiteMenu" id="DropDownMenuClick">
            <hr> <li>{home_link}</li><hr>
                <li>{inbox_link}</li><hr>
                <li>{profile_link}</li><hr>
               <li>{signinout_link}</li><hr>
            </ul>
        </div>
    </div>
    <div id="Body">
        <div class="Row">
          <div class="col-12">
            <div class="BreadcrumbsWrapper">{breadcrumbs}</div>
          </div>
        </div>
        <div class="Row">
          <div class="col-2">
            <div class="Column PanelColumn" id="Panel">
                {module name="MeModule"}
                {asset name="Panel"}
                </div>
              </div>
              <div class="col-10">
            <div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
           </div>
         </div>
         </div>
        </div>
{event name="AfterBody"}
<footer class="foot">
  <span class="footerText">MoonShine Systems Inc. Copyright &copy 2017. All Rights Reserved</span>
    <span class="socialMedia">
     <i class="fa fa-facebook-official" aria-hidden="true"></i>
      <i class="fa fa-instagram" aria-hidden="true"></i>
      <i class="fa fa-twitter" aria-hidden="true"></i>
     <i class="fa fa-google-plus" aria-hidden="true"></i>
    </span>
</footer>

<script type="text/javascript">

{literal}
  function dropdownMenu() {
    var x = document.getElementById('DropDownMenuClick');
      if (x.className === "SiteMenu") {
        x.className += " Responsive";
      } else{
        x.className = "SiteMenu";
     }
  }
    {/literal}
</script>
</body>
</html>
