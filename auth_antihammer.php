<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_antihammer', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   auth_antihammer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:confirm-delete-hammer'] = 'Delete hammering item';
$string['action:confirm-delete-log'] = 'Delete log item';
$string['action:delete:hammeritem'] = 'Delete hammering item';
$string['action:delete:logitem'] = 'Delete log item';
$string['action:view:logitem'] = 'View log details';
$string['addcfgipblock'] = 'Add blocked IP to site configuration';
$string['addcfgipblock_desc'] = 'Check this option if you wish to add a blocked IP to the global list of <a href="{$a}">blocked IP addresses</a>.';
$string['antihammer:administration'] = 'Administer auth antihammer';
$string['antihammer:delete'] = 'Remove records';
$string['ap:log'] = 'Antihammer logs';
$string['ap:logdetails'] = 'Antihammer log detail';
$string['ap:report'] = 'Antihammer reports';
$string['attemptcounter'] = 'Attempts timespan';
$string['attempts'] = 'Maximum number of attempts';
$string['auth_antihammer'] = 'antihammer Anti-hammering / Login blocker';
$string['auth_antihammerdescription'] = 'Users can not sign in. This auth module serves as a blocking system for login attempts';
$string['auth_antihammer_ipblocksettings'] = 'Add IP blocking to site configuration?';
$string['auth_antihammer_ipblocksettings_desc'] = 'WARNING! You almost never ever want to enable the option below.<br/>
Chances are VERY real you will exclude yourself on this site, especially if you run a network where a lot of people share the same main IP address.<br/>
If, for ANY reason, you really want to enable this option, make sure there\'s at least one IP address specifically allowed, and enable the global option
to allow the allow list to be processed BEFORE the blocking list. Failing to do so can truly lock administrators out.';
$string['auth_antihammer_ipsettings'] = 'IP blocking settings';
$string['auth_antihammer_ipsettings_desc'] = '';
$string['auth_antihammer_messagesettings'] = 'Messaging / notification settings';
$string['auth_antihammer_messagesettings_desc'] = '';
$string['auth_antihammer_miscsettings'] = 'Miscelaneous settings';
$string['auth_antihammer_miscsettings_desc'] = '';
$string['auth_antihammer_usersettings'] = 'User blocking settings';
$string['auth_antihammer_usersettings_desc'] = '';
$string['autocleanlog'] = 'Automatically clean logs?';
$string['autocleanlog_after'] = 'Automatically clear logs older than';
$string['autoclear_ipblock'] = 'Autoclear blocked IPs?';
$string['autoclear_ipblock_after'] = 'Autoclear IP block after';
$string['autoclear_userblock'] = 'Autoclear blocked users?';
$string['autoclear_userblock_after'] = 'Autoclear blocked users after';
$string['blockip'] = 'Block by IP addresses?';
$string['blockpage'] = 'Page to display when someone is blocked';
$string['blockusername'] = 'Block by username?';
$string['config:autocleanlog:disabled'] = 'Automatic cleaning of antihammer logs is disabled in the global configuration';
$string['err:blocked:ip'] = 'Hammering detected: IP address = {$a->ip} (IP is blocked)';
$string['err:blocked:user'] = 'Hammering detected: Username= {$a->username} IP address = {$a->ip} (IP and/or username is blocked)';
$string['err:sqltable:set_sql'] = 'set_sql() is disabled. This table defines it\'s own and is not customomizable';
$string['ip_attemptcounter'] = 'IP attempts timespan';
$string['ip_attempts'] = 'Maximum number of attempts';
$string['log:info:blocked'] = 'Blocked: {$a}';
$string['mail:blocking:message'] = '<p>Dear {$a->firstname} {$a->lastname}</p>
<p>A block has been set as a result of too many login attempts</p>
<p>The block is made active for IP address {$a->ip}, username {$a->username}</p>
<p>Kind regards,<br/>Support system</p>';
$string['mail:blocking:subject'] = 'Login Anti-hammering: user or IP address blocked';
$string['messageprovider:antihammerblocking'] = 'Notification of IP/account blocking';
$string['notifymainadmin'] = 'Always notify main administrator?';
$string['notifymainadmin_desc'] = 'Check this option if you always want to notify the main Moodle administrator by e-mail.<br/>
NOTE: The main administrator <i>might</i> receive two notifications if the above option is enabled and they also have
the option to receive messages through email enabled!';
$string['pluginname'] = 'Anti-hammering / Login blocker';
$string['promo'] = 'Anti-hammering / loginblocker authentication plugin for Moodle';
$string['promodesc'] = 'This plugin is written by Sebsoft Managed Hosting & Software Development
    (<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
    {$a}<br /><br />';
$string['str:blocked:page'] = 'Your account and/or IP address has been blocked.';
$string['task:logcleaner'] = 'Antihammer log cleaner';
$string['thead:action'] = 'action';
$string['thead:blocked'] = 'blocked';
$string['thead:blocktime'] = 'time blockage';
$string['thead:code'] = 'code';
$string['thead:count'] = 'detection count';
$string['thead:datecreated'] = 'date created';
$string['thead:firstattempt'] = 'first attempt';
$string['thead:ip'] = 'IP';
$string['thead:module'] = 'module';
$string['thead:msg'] = 'message';
$string['thead:type'] = 'type';
$string['thead:userid'] = 'userid';
$string['thead:username'] = 'username';
$string['title:report:hammer'] = 'Antihammer reports';
$string['title:report:logs'] = 'Antihammer logs';
$string['type:info'] = 'Information';
$string['type:ip'] = 'IP block';
$string['type:user'] = 'User block';
$string['usemessaging'] = 'use messaging API?';
$string['usemessaging_desc'] = 'Check this option if you want the messaging API to be used to inform applicable recipients';
