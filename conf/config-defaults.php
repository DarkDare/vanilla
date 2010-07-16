<?php if (!defined('APPLICATION')) exit();
// DO NOT EDIT THIS FILE.
// If you want to override the settings in this file then edit config.php.
// This is the global application configuration file that sets up default
// values for configuration settings.
$Configuration = array();

$Configuration['EnabledApplications']['Dashboard']             = 'dashboard';

$Configuration['Database']['Engine']                           = 'MySQL';
$Configuration['Database']['Host']                             = 'dbhost';
$Configuration['Database']['Name']                             = 'dbname';
$Configuration['Database']['User']                             = 'dbuser';
$Configuration['Database']['Password']                         = '';
$Configuration['Database']['ConnectionOptions']                = array(
                                                                  PDO::ATTR_PERSISTENT => FALSE,
                                                                  1000 => TRUE, // PDO::MYSQL_ATTR_USE_BUFFERED_QUERY is missing in some php installations
                                                                  1002 => "set names 'utf8'" // PDO::MYSQL_ATTR_INIT_COMMAND is missing in PHP 5.3, so I use the actual value "1002" instead
                                                               );
$Configuration['Database']['CharacterEncoding']                = 'utf8';
$Configuration['Database']['DatabasePrefix']                    = 'GDN_';
$Configuration['Database']['ExtendedProperties']['Collate']     = 'utf8_unicode_ci';

$Configuration['Cache']['Enabled']                              = TRUE;
$Configuration['Cache']['Method']                               = 'filecache';
$Configuration['Cache']['Filecache']['Store']                   = PATH_CACHE.'/Filecache';

$Configuration['Garden']['ContentType']                         = 'text/html';
$Configuration['Garden']['Charset']                             = 'utf-8';
// An array of folders the application should never search through when searching for classes. (note: plugins had to be removed so that locale searches could get the locale folder from the plugin's folder).
$Configuration['Garden']['FolderBlacklist']                     = array('.', '..', '_svn', '.git');
$Configuration['Garden']['Locale']                              = 'en-CA';
$Configuration['Garden']['LocaleCodeset']                       = 'UTF8';
$Configuration['Garden']['Title']                               = 'Vanilla 2';
$Configuration['Garden']['Domain']                              = '';
$Configuration['Garden']['WebRoot']                             = FALSE; // You can set this value if you are using htaccess to direct into the application, but the correct webroot isn't being recognized.
$Configuration['Garden']['StripWebRoot']                        = FALSE;
$Configuration['Garden']['Debug']                               = FALSE;
$Configuration['Garden']['RewriteUrls']                         = FALSE;
$Configuration['Garden']['Session']['Length']                   = '15 minutes';
$Configuration['Garden']['Cookie']['Salt']                      = '';
$Configuration['Garden']['Cookie']['Name']                      = 'Vanilla';
$Configuration['Garden']['Cookie']['Path']                      = '/';
$Configuration['Garden']['Cookie']['Domain']                    = '';
$Configuration['Garden']['Cookie']['HashMethod']                = 'md5'; // md5 or sha1
$Configuration['Garden']['Authenticator']['DefaultScheme']      = 'password'; // Types include 'Password', 'Handshake', 'Openid'
$Configuration['Garden']['Authenticator']['RegisterUrl']        = '/entry/register?Target=%2$s';
$Configuration['Garden']['Authenticator']['SignInUrl']          = '/entry/signin?Target=%2$s';
$Configuration['Garden']['Authenticator']['SignOutUrl']         = '/entry/leave/%1$s/{Session_TransientKey}?Target=%2$s';
$Configuration['Garden']['Authenticator']['EnabledSchemes']     = array('password');
$Configuration['Garden']['Errors']['LogEnabled']                = FALSE;
$Configuration['Garden']['Errors']['LogFile']                   = '';
$Configuration['Garden']['Errors']['MasterView']                = 'deverror.master.php'; // Used at installation time and you should use it too view when debugging
$Configuration['Garden']['SignIn']['Popup']                     = TRUE; // Should the sign-in link pop up or go to it's own page? (SSO requires going to it's own external page)
$Configuration['Garden']['UserAccount']['AllowEdit']            = TRUE; // Allow users to edit their account information? (SSO requires accounts be edited in external system).
$Configuration['Garden']['Registration']['Method']              = 'Captcha'; // Options are: Basic, Captcha, Approval, Invitation
$Configuration['Garden']['Registration']['DefaultRoles']        = array('8'); // The default role(s) to assign new users (4 is "Member")
$Configuration['Garden']['Registration']['ApplicantRoleID']     = 4; // The "Applicant" RoleID.
$Configuration['Garden']['Registration']['InviteExpiration']    = '-1 week'; // The time before now that an invitation expires. ie. If an invitation was sent within the last week, it is still valid. This value will be plugged directly into strtotime()
$Configuration['Garden']['Registration']['InviteRoles']         = 'FALSE';
$Configuration['Garden']['TermsOfService']                      = '/dashboard/home/termsofservice'; // The url to the terms of service.
$Configuration['Garden']['Email']['UseSmtp']                    = FALSE;
$Configuration['Garden']['Email']['SmtpHost']                   = '';
$Configuration['Garden']['Email']['SmtpUser']                   = '';
$Configuration['Garden']['Email']['SmtpPassword']               = '';
$Configuration['Garden']['Email']['SmtpPort']                   = '25';
$Configuration['Garden']['Email']['SmtpSecurity']               = ''; // ssl/tls
$Configuration['Garden']['Email']['MimeType']                   = 'text/plain';
$Configuration['Garden']['Email']['SupportName']                = 'Support';
$Configuration['Garden']['Email']['SupportAddress']             = '';
$Configuration['Garden']['UpdateCheckUrl']                      = 'http://vanillaforums.org/addons/update';
$Configuration['Garden']['AddonUrl']                            = 'http://vanillaforums.org/addons';
$Configuration['Garden']['AddonUrl']                            = '';
$Configuration['Garden']['CanProcessImages']                    = FALSE;
$Configuration['Garden']['Installed']                           = FALSE; // Has Garden been installed yet?
$Configuration['Garden']['Forms']['HoneypotName']               = 'hpt';
$Configuration['Garden']['Upload']['MaxFileSize']               = '50M';
$Configuration['Garden']['Upload']['AllowedFileExtensions']     = array('txt','jpg','gif','png', 'zip', 'gz', 'tar.gz');
$Configuration['Garden']['Picture']['MaxHeight']                = 1000;
$Configuration['Garden']['Picture']['MaxWidth']                 = 600;
$Configuration['Garden']['Profile']['MaxHeight']                = 1000;
$Configuration['Garden']['Profile']['MaxWidth']                 = 250;
$Configuration['Garden']['Preview']['MaxHeight']                = 100;
$Configuration['Garden']['Preview']['MaxWidth']                 = 75;
$Configuration['Garden']['Thumbnail']['Size']                   = 50;
$Configuration['Garden']['Menu']['Sort']                        = array('Dashboard', 'Discussions', 'Questions', 'Activity', 'Conversations', 'User');
$Configuration['Garden']['InputFormatter']                      = 'Html';
$Configuration['Garden']['Search']['Mode']                      = 'matchboolean'; // matchboolean, match, boolean, like
$Configuration['Garden']['Theme']                               = 'default';
$Configuration['Garden']['Profile']['Public']                   = TRUE;
$Configuration['Garden']['Profile']['ShowAbout']                = TRUE;
$Configuration['Garden']['Roles']['Manage']                     = TRUE;
$Configuration['Garden']['VanillaUrl']                          = 'http://vanillaforums.org';
$Configuration['Garden']['AllowSSL']                            = TRUE;
$Configuration['Garden']['PrivateCommunity']                    = FALSE;
$Configuration['Garden']['EditContentTimeout']                  = -1; // -1 means no timeout. 0 means immediate timeout. > 0 is in seconds.

// Default Preferences
$Configuration['Preferences']['Email']['ConversationMessage']   = '1';
$Configuration['Preferences']['Email']['AddedToConversation']   = '1';
$Configuration['Preferences']['Email']['BookmarkComment']       = '1';
$Configuration['Preferences']['Email']['WallComment']           = '0';
$Configuration['Preferences']['Email']['ActivityComment']       = '0';
$Configuration['Preferences']['Email']['DiscussionComment']     = '0';
$Configuration['Preferences']['Email']['DiscussionMention']     = '0';
$Configuration['Preferences']['Email']['CommentMention']        = '0';

// Begin - HtmlPurifier Settings
$Configuration['HtmlPurifier']['AutoFormat']['AutoParagraph']   = FALSE;
$Configuration['HtmlPurifier']['AutoFormat']['Linkify']         = TRUE;
$Configuration['HtmlPurifier']['Cache']['SerializerPath']       = PATH_CACHE.'/HtmlPurifier';
$Configuration['HtmlPurifier']['Filter']['YouTube']             = TRUE;
$Configuration['HtmlPurifier']['Filter']['Vimeo']               = TRUE;
$Configuration['HtmlPurifier']['Attr']['EnableID']              = TRUE;

// Modules
$Configuration['Modules']['Garden']['Panel'] = array('UserPhotoModule', 'UserInfoModule', 'GuestModule', 'Ads');
$Configuration['Modules']['Vanilla']['Panel'] = array('NewDiscussionModule', 'GuestModule', 'Ads');
$Configuration['Modules']['Vanilla']['Content'] = array('MessageModule', 'Notices', 'Content', 'Ads');
$Configuration['Modules']['Garden']['Content'] = array('MessageModule', 'Notices', 'Content', 'Ads');
$Configuration['Modules']['Conversations']['Content'] = array('MessageModule', 'Notices', 'Content', 'Ads');

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';
$Configuration['Routes']['Default404'] = 'dashboard/home/filenotfound';
$Configuration['Routes']['DefaultPermission'] = 'dashboard/home/permission';
$Configuration['Routes']['UpdateMode'] = 'dashboard/home/updatemode';
