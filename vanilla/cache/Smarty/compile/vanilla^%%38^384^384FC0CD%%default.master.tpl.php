<?php /* Smarty version 2.6.29, created on 2017-10-22 23:46:31
         compiled from /Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', '/Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl', 4, false),array('function', 'link', '/Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl', 13, false),array('function', 'logo', '/Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl', 13, false),array('function', 'searchbox', '/Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl', 15, false),array('function', 'dashboard_link', '/Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl', 17, false),array('function', 'inbox_link', '/Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl', 19, false),array('function', 'profile_link', '/Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl', 20, false),array('function', 'signinout_link', '/Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl', 21, false),array('function', 'breadcrumbs', '/Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl', 27, false),array('function', 'module', '/Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl', 29, false),array('function', 'event', '/Applications/MAMP/htdocs/vanilla/themes/moonshine/views/default.master.tpl', 40, false),)), $this); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->_tpl_vars['CurrentLocale']['Lang']; ?>
">
<head>
    <?php echo smarty_function_asset(array('name' => 'Head'), $this);?>

  <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="<?php echo $this->_tpl_vars['BodyClass']; ?>
">

<div id="Frame">
    <div class="Head" id="Head">
        <div class="Row">
            <img id="logo" src="http://collegevault.com/wp-content/uploads/2014/11/Little_Brown_Jug_2.png" alt="">
            <strong class="SiteTitle"><a href="<?php echo smarty_function_link(array('path' => "/"), $this);?>
"><?php echo smarty_function_logo(array(), $this);?>
</a></strong>

            <div class="SiteSearch"><?php echo smarty_function_searchbox(array(), $this);?>
</div>
            <ul class="SiteMenu">
                <!-- <?php echo smarty_function_dashboard_link(array(), $this);?>
 -->

                <!-- <?php echo smarty_function_inbox_link(array(), $this);?>
 -->
                <?php echo smarty_function_profile_link(array(), $this);?>

               <?php echo smarty_function_signinout_link(array(), $this);?>

            </ul>
        </div>
    </div>
    <div id="Body">
        <div class="Row">
            <div class="BreadcrumbsWrapper"><?php echo smarty_function_breadcrumbs(array(), $this);?>
</div>
            <div class="Column PanelColumn" id="Panel">
                <?php echo smarty_function_module(array('name' => 'MeModule'), $this);?>

                <?php echo smarty_function_asset(array('name' => 'Panel'), $this);?>

            </div>
            <div class="Column ContentColumn" id="Content"><?php echo smarty_function_asset(array('name' => 'Content'), $this);?>
</div>
        </div>
    </div>
    <div id="Foot">
        <p>TEST</p>

    </div>
</div>
<?php echo smarty_function_event(array('name' => 'AfterBody'), $this);?>

</body>
</html>