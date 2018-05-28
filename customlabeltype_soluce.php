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
 * Strings for component 'customlabeltype_soluce', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   customlabeltype_soluce
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configtypename'] = 'Enable subtype Soluce';
$string['family'] = 'pedagogic';
$string['initiallyvisible'] = 'Initially visible';
$string['pluginname'] = 'Course element : Soluce';
$string['soluce'] = 'Soluce';
$string['soluce:addinstance'] = 'Can add an indstance';
$string['soluce:view'] = 'Can view the content';
$string['template'] = '<table class="custombox-soluce" cellspacing="0" width="100%">
<tr valign="top">
    <td class="custombox-header-thumb soluce" style="background-image : url(<%%icon%%>);" width="2%" rowspan="2">
    </td>
    <td class="custombox-header-caption soluce" width="98%">
        Soluce...
    </td>
    <td class="custombox-header-collapser soluce" align="right" width="2%">
        <a href="javascript:togglecustom(\'<%%customid%%>\', \'<%%wwwroot%%>\')"><img id="customctl<%%customid%%>" src="<%%initialcontrolimage%%>" /></a>
    </td>
</tr>
<tr>
    <td colspan="2">
        <table id="custom<%%customid%%>" cellspacing="0" width="100%">
        <tr>
            <td class="custombox-content soluce" colspan="2">
                <%%soluce%%>
            </td>
        </tr>
        </table>
    </td>
</tr>
</table>
<script type="text/javascript">
setupcustom(\'<%%customid%%>\', \'<%%initiallyvisible%%>\', \'<%%wwwroot%%>\');
</script>';
$string['typename'] = 'Soluce';
