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
 * Strings for component 'logstore_caliper', language 'en', branch 'MOODLE_32_STABLE'
 *
 * @package   logstore_caliper
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API key';
$string['batchsize'] = 'Batch size';
$string['batchsize_desc'] = 'The maximum number of events to send at at time in batch mode.';
$string['endpoint'] = 'Event Store URL';
$string['immediatemode'] = 'Send statements immediately to event store?';
$string['immediatemode_desc'] = 'This will force Moodle to send the statements to the Event Store as they occur rather than,
        in a background batch mode via a cron task.  This will make the process closer to real time, but could cause unpredictable
        Moodle performance linked to the response time of the Event Store.';
$string['pluginname'] = 'Caliper log store';
$string['settings'] = 'General Settings';
$string['submit'] = 'Submit';
$string['taskemit'] = 'Emit records to Event Store';
