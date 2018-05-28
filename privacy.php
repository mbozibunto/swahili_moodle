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
 * Strings for component 'privacy', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   privacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['privacy:metadata'] = 'The privacy subsystem does not store any data of its own and is designed to act as a channel between components and the interface used to describe, export, and remove their data.';
$string['privacy:subsystem:empty'] = 'This subsystem does not store any data.';
$string['trace:deletingapproved'] = 'Performing removal of approved {$a->total} contexts ({$a->datetime})';
$string['trace:deletingcontext'] = 'Performing removal of context from {$a->total} components ({$a->datetime})';
$string['trace:done'] = 'Complete';
$string['trace:exportcomplete'] = 'Export complete';
$string['trace:exportingapproved'] = 'Performing primary export for {$a->total} components ({$a->datetime})';
$string['trace:exportingrelated'] = 'Performing related export for {$a->total} components ({$a->datetime})';
$string['trace:fetchcomponents'] = 'Fetching {$a->total} components ({$a->datetime})';
$string['trace:finalisingexport'] = 'Finalising export';
$string['trace:processingcomponent'] = 'Processing {$a->component} ({$a->progress}/{$a->total}) ({$a->datetime})';
