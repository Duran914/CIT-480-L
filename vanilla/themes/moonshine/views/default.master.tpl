<!DOCTYPE html>
<html lang="{$CurrentLocale.Lang}">
<head>
    {asset name="Head"}
  <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body id="{$BodyID}" class="{$BodyClass}">

<div id="Frame">
    <div class="Head" id="Head">
        <div class="Row">   <!--http://collegevault.com/wp-content/uploads/2014/11/Little_Brown_Jug_2.png-->
            <img id="logo" src="http://www.clker.com/cliparts/d/C/V/s/q/D/oktoberfest-beer-mug.svg" alt="">
            <strong class="SiteTitle"><a href="{link path="/"}">{logo}</a></strong>

            <div class="SiteSearch">{searchbox}</div>
            <ul class="SiteMenu">
                <!-- {dashboard_link} -->

                <!-- {inbox_link} -->
                {profile_link}
               {signinout_link}
            </ul>
        </div>
    </div>
    <div id="Body">
        <div class="Row">
            <div class="BreadcrumbsWrapper">{breadcrumbs}</div>
            <div class="Column PanelColumn" id="Panel">
                {module name="MeModule"}
                {asset name="Panel"}
            </div>
            <div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
        </div>
    </div>
    <div id="Foot">
        <p>Im am the Footer </p>

    </div>
</div>
{event name="AfterBody"}
</body>
</html>
