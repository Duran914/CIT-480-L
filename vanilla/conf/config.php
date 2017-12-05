<?php if (!defined('APPLICATION')) exit();

// CSSedit
$Configuration['CSSedit']['Preprocessor'] = '0';
$Configuration['CSSedit']['Mobile'] = false;
$Configuration['CSSedit']['Token'] = 1505524899;

// Conversations
$Configuration['Conversations']['Version'] = '2.3.1';

// Database
$Configuration['Database']['Name'] = 'vanilla_db';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'root';
$Configuration['Database']['Password'] = '';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = false;
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['CSSedit'] = true;
$Configuration['EnabledPlugins']['Facebook'] = false;
$Configuration['EnabledPlugins']['GooglePlus'] = false;

// Garden
$Configuration['Garden']['Title'] = 'Beercules Forum';
$Configuration['Garden']['Cookie']['Salt'] = 'CrTo2AKyODiu6cjh';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = false;
$Configuration['Garden']['Registration']['Method'] = 'Captcha';
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6Le3kzAUAAAAADSKXcjNnRZzD3ITFxgMtbnmJU8p';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6Le3kzAUAAAAACoF_FCPw91bykRWg14B0OcFIenj';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Email']['SupportName'] = 'Vanilla 2';
$Configuration['Garden']['Email']['Format'] = 'text';
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['InputFormatter'] = 'Markdown';
$Configuration['Garden']['Version'] = '2.3.1';
$Configuration['Garden']['Cdns']['Disable'] = false;
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['HomepageTitle'] = 'Welcome To The Beercules Community';
$Configuration['Garden']['Description'] = '';
$Configuration['Garden']['Theme'] = 'moonshine';
$Configuration['Garden']['MobileTheme'] = 'moonshine';
$Configuration['Garden']['FavIcon'] = 'favicon_c1caffa68fe1a946.ico';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = array('categories', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.3.1';
$Configuration['Vanilla']['Discussions']['Layout'] = 'modern';
$Configuration['Vanilla']['Categories']['Layout'] = 'modern';
$Configuration['Vanilla']['Categories']['MaxDisplayDepth'] = '3';
$Configuration['Vanilla']['Categories']['DoHeadings'] = false;
$Configuration['Vanilla']['Categories']['HideModule'] = false;

// Last edited by duran914 (127.0.0.1)2017-12-01 22:51:12
