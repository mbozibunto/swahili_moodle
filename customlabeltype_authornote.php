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
 * Strings for component 'customlabeltype_authornote', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   customlabeltype_authornote
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authornote'] = 'Authoring note';
$string['authornote:addinstance'] = 'Can add an instance';
$string['authornote:view'] = 'Can view the content';
$string['configtypename'] = 'Enable subtype Authoring note';
$string['family'] = 'meta';
$string['initiallyvisible'] = 'Initially visible';
$string['pluginname'] = 'Course element : Authoring note';
$string['template'] = '<div class="custombox-control authornote"><a href="javascript:togglecustom(\'<%%customid%%>\', \'<%%wwwroot%%>\')"><img id="customctl<%%customid%%>" src="<%%initialcontrolimage%%>" /></a>
<span class="custombox-header-caption authornote"><b>Authoring note</b></span></div>
<div class="custombox-content authornote" id="custom<%%customid%%>">
<p class="custombox-helper authornote"><b>(This note is only visible for course authors)</b></p>
<table width="100%" class="custombox-authornote">
    <tr valign="top">
        <td class="custombox-thumb authornote" style="background-image : url(<%%icon%%>);" width="2%"></td>
        <td class="custombox-content authornote"><%%authornote%%></td>
    </tr>
</table>
</div>
<script type="text/javascript">
setupcustom(\'<%%customid%%>\', \'<%%initiallyvisible%%>\', \'<%%wwwroot%%>\');
</script>';
$string['typename'] = 'Authoring note';
