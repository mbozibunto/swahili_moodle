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
 * Strings for component 'logstore_xapi', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   logstore_xapi
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundmode'] = 'Send statements by scheduled task?';
$string['backgroundmode_desc'] = 'This will force Moodle to send the statements to the LRS in the background,
        via a cron task. This will make the process less close to real time, but will help to prevent unpredictable
        Moodle performance linked to the performance of the LRS.';
$string['endpoint'] = 'Endpoint';
$string['filters'] = 'Filter logs';
$string['filters_help'] = 'Enable filters that INCLUDE some actions to be logged.';
$string['logguests'] = 'Log guest actions';
$string['maxbatchsize'] = 'Maximum batch size';
$string['maxbatchsize_desc'] = 'Statements are sent to the LRS in batches. This setting controls the maximum number of
        statements that will be sent in a single operation. Setting this to zero will cause all available statements to
        be sent at once, although this is not recommended.';
$string['mbox'] = 'Send user email';
$string['mbox_desc'] = 'Statements identify the user with its email (mbox) or with its userid on the moodle platform (account). Checking this will send the email (mbox).';
$string['password'] = 'Password';
$string['pluginadministration'] = 'Logstore xAPI administration';
$string['pluginname'] = 'Logstore xAPI';
$string['routes'] = 'Include actions with these routes';
$string['settings'] = 'General Settings';
$string['submit'] = 'Submit';
$string['taskemit'] = 'Emit records to LRS';
$string['username'] = 'Username';
$string['xapi'] = 'xAPI';
$string['xapifieldset'] = 'Custom example fieldset';
$string['xapisettingstitle'] = 'Logstore xAPI Settings';
