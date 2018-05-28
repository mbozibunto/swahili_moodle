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
 * Strings for component 'tool_heartbeat', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_heartbeat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['normal'] = 'Normal monitoring';
$string['pluginname'] = 'Heartbeat';
$string['progress'] = 'Progress bar test';
$string['progresshelp'] = 'This tests that all the various output buffers in the entire stack are corrent including but not limited to php, ob, gzip/deflat, varnish, nginx etc';
$string['testerror'] = 'Fake a critical';
$string['testing'] = 'Test heartbeat';
$string['testingdesc'] = 'You can use this to temporarily fake a warn or error condition to test that your monitoring is correctly working end to end.';
$string['testwarning'] = 'Fake a warning';
