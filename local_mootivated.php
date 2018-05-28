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
 * Strings for component 'local_mootivated', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   local_mootivated
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addschool'] = '+ Add section';
$string['cohortid'] = 'Choose cohort';
$string['cohortid_help'] = 'The cohort for which these settings will be used.';
$string['coins'] = 'Coins';
$string['collectionsettings'] = 'Coin collection';
$string['confirmdeleteschool'] = 'Are you sure you want to delete this section? This cannot be undone!';
$string['coursecompletionreward'] = 'Course completion reward';
$string['coursecompletionreward_help'] = 'When enabled, this determines the number of coins to award a student when they complete a course.';
$string['createschool'] = 'Create section';
$string['createschool_help'] = 'Create a new Mootivated section settings tab.';
$string['deleteschool'] = 'Delete section';
$string['disabled'] = 'Disabled';
$string['disableuserimages'] = 'Error: Site has disabeld user images.';
$string['doitforme'] = 'Yes, do it for me!';
$string['eventcoinsearned'] = 'Coins earned';
$string['failed'] = 'Error: Failed Uploading.';
$string['global'] = 'Global';
$string['invalidcoinvalueminmax'] = 'Invalid value, please use a number between {$a->min} and {$a->max}.';
$string['lastfullsync'] = 'Last full sync: {$a}';
$string['maxactions'] = 'Max. actions in time frame';
$string['maxactions_help'] = 'The maximum number of actions contributing coins in the time frame specified below.';
$string['modcompletionrewards'] = 'Completion rewards';
$string['modcompletionrewards_help'] = 'The settings below allow you to customize how many coins are given to students for completing activities of a certain type.

Keep in mind that changing those values can have an important impact on the game economy.';
$string['mootivated:earncoins'] = 'Earn coins';
$string['mootivated:login'] = 'Login on the Mootivated/Motrain app';
$string['mootivated:redeem_store_items'] = 'Redeem store items';
$string['mootivatedrole'] = 'Mootivated User';
$string['mootivatedrolecreated'] = 'Mootivated User role created';
$string['mootivatedroledesc'] = 'The role to use for Mootivated users.';
$string['mootivatedsettings'] = 'Mootivated settings';
$string['mootivated_web_services'] = 'Mootivated Web Services';
$string['motrainsidebartitle'] = 'Motrain';
$string['permissioneditownprofile'] = 'Error: User can\'t change their images.';
$string['pluginname'] = 'Mootivated';
$string['privacy:metadata:coinsgained'] = 'The information sent to an external server when a user gains coins.';
$string['privacy:metadata:coinsgained:coins'] = 'The number of coins to add to the user\'s wallet';
$string['privacy:metadata:coinsgained:firstname'] = 'The first name of the user (only when enabled by a Moodle administrator)';
$string['privacy:metadata:coinsgained:lastname'] = 'The last name of the user (only when enabled by a Moodle administrator)';
$string['privacy:metadata:coinsgained:pluginid'] = 'A unique identifier for the user';
$string['privacy:metadata:coinsgained:reason'] = 'The reason for the user to receive these coins, typically the Moodle event name';
$string['privacy:metadata:coinsgained:username'] = 'The username of the user (only when enabled by a Moodle administrator)';
$string['privacy:metadata:completion'] = 'The recorded states of activity completion';
$string['privacy:metadata:completion:cmid'] = 'The course module ID';
$string['privacy:metadata:completion:courseid'] = 'The course ID';
$string['privacy:metadata:completion:state'] = 'The state of the completion';
$string['privacy:metadata:completion:timecreated'] = 'The time at which the completion was recorded';
$string['privacy:metadata:completion:userid'] = 'The user ID';
$string['privacy:metadata:log'] = 'Logs of events that happened in the last 24-48h and the coins awarded for them.';
$string['privacy:metadata:log:coins'] = 'The number of coins awarded for this event';
$string['privacy:metadata:log:contextid'] = 'The context in which the event occurs';
$string['privacy:metadata:log:eventname'] = 'The name of the event';
$string['privacy:metadata:log:objectid'] = 'The ID of the object related to the event';
$string['privacy:metadata:log:relateduserid'] = 'The target user of this event';
$string['privacy:metadata:log:timecreated'] = 'The date at which the event occured';
$string['privacy:metadata:log:userid'] = 'The user ID';
$string['privacy:path:completion'] = 'Completion';
$string['privacy:path:logs'] = 'Logs';
$string['privatekey'] = 'Private Key';
$string['privatekey_help'] = 'Your private key for communicating with the Mootivated server.';
$string['restprotocolenabled'] = 'REST protocol enabled';
$string['rewardmethod'] = 'Reward method';
$string['rewardmethod_completionelseevent'] = 'Completion-based, else event-based';
$string['rewardmethod_event'] = 'Event-based';
$string['rewardmethod_help'] = 'This defines what method to use to reward students with coins.

**Event-based**

Rewards are given for actions taken throughout the course.

**Completion-based, else event-based**

For activities or resources where completion is enabled, rewards will be given for completing the activity.
When completion is disabled, rewards will be given as per the \'Event-based\' method.';
$string['rolesync'] = 'Role synchronisation.';
$string['scheduledorrunning'] = 'Scheduled or running...';
$string['schoolcreated'] = 'The section was successfully created.';
$string['schooldeleted'] = 'The section was deleted.';
$string['schoolid'] = 'Section ID';
$string['schoolid_help'] = 'Your sections\'s Mootivated ID';
$string['schooln'] = '[Section {$a}]';
$string['schoolsaved'] = 'The section was successfully saved.';
$string['sendusername'] = 'Send Username';
$string['sendusername_help'] = 'Store the username on the Mootivated server.';
$string['serverip'] = 'Server IP';
$string['serverip_desc'] = 'Mootivated server IP';
$string['settingssaved'] = 'Settings saved';
$string['setupnotcomplete'] = 'Whoops, there are missing bits which need to be set-up, would you like me to do it for you?';
$string['setupstatus'] = 'Set-up status';
$string['syncnow'] = 'Sync now';
$string['taskdeleteoldlogs'] = 'Delete obsolete log entries.';
$string['taskrolesync'] = 'Sync the Mootivated User role.';
$string['timebetweensameactions'] = 'Time between identical actions';
$string['timebetweensameactions_help'] = 'The time which needs to elapse before an action which already occured can contribute coins again.';
$string['timeframeformaxactions'] = 'Time frame for max. actions';
$string['timeframeformaxactions_help'] = 'The time frame (in minutes) during which a maximum of actions are contributing coins (as specified above).';
$string['unknownevent'] = 'Unknown event: {$a}';
$string['userecommendedsettings'] = 'Use recommended settings';
$string['usesections'] = 'Use sections';
$string['usesections_desc'] = 'When turned on, users can be organised in different sections using cohorts.';
$string['webservicesenabled'] = 'Web services enabled';
