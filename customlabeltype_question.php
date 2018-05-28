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
 * Strings for component 'customlabeltype_question', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   customlabeltype_question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answertext'] = 'Answer text';
$string['configtypename'] = 'Enable subtype Question';
$string['family'] = 'pedagogic';
$string['hint'] = 'Hint';
$string['hintinitiallyvisible'] = 'Hint initially visible';
$string['initiallyvisible'] = 'Answer initially visible';
$string['pluginname'] = 'Course element: Question';
$string['question:addinstance'] = 'Can add an instance';
$string['questiontext'] = 'Question text';
$string['question:view'] = 'Can view the question';
$string['template'] = '<table class="custombox-question" cellspacing="0" width="100%">
<tr valign="top">
    <td class="custombox-header-thumb question" style="background-image : url(<%%icon%%>);" width="2%" rowspan="6">
    </td>
    <td class="custombox-header-caption question" width="96%">
        Question !
    </td>
</tr>
<tr valign="top">
    <td class="custombox-content questiontext">
        <%%questiontext%%>
    </td>
</tr>
<%if %%hint%% %>
<tr>
    <td class="custombox-header-collapser question" align="left" >
        <a href="javascript:togglecustom(\'<%%customid%%>hint\', \'<%%wwwroot%%>\')"><img id="customctl<%%customid%%>hint" src="<%%hintinitialcontrolimage%%>" /></a> Hint
    </td>
</tr>
<tr valign="top" id="custom<%%customid%%>hint">
    <td class="custombox-content hint">
        <%%hint%%>
    </td>
</tr>
<%endif %>
<tr>
    <td class="custombox-header-collapser question" align="left">
        <a href="javascript:togglecustom(\'<%%customid%%>\', \'<%%wwwroot%%>\')"><img id="customctl<%%customid%%>" src="<%%initialcontrolimage%%>" /></a> Solution
    </td>
</tr>
<tr valign="top" id="custom<%%customid%%>">
    <td class="custombox-content questiontext">
        <%%answertext%%>
    </td>
</tr>
</table>
<script type="text/javascript">
setupcustom(\'<%%customid%%>\', \'<%%initiallyvisible%%>\', \'<%%wwwroot%%>\');
setupcustom(\'<%%customid%%>hint\', \'<%%hintinitiallyvisible%%>\', \'<%%wwwroot%%>\');
</script>';
$string['typename'] = 'Question';
