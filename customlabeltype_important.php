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
 * Strings for component 'customlabeltype_important', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   customlabeltype_important
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configtypename'] = 'Enable subtype Important';
$string['family'] = 'generic';
$string['important:addinstance'] = 'Can add an instance';
$string['importantnote'] = 'Important note';
$string['important:view'] = 'Can view the content';
$string['pluginname'] = 'Course element: Important';
$string['template'] = '<table class="custombox-important" cellspacing="0" width="100%">
<tr valign="top">
    <td class="custombox-header-thumb important" style="background-image : url(<%%icon%%>);" width="2%" rowspan="2">
    </td>
    <td class="custombox-header-caption important" width="98%">
        Important !
    </td>
</tr>
<tr valign="top">
    <td class="custombox-content important">
        <%%importantnote%%>
    </td>
</tr>
</table>';
$string['typename'] = 'Important';
