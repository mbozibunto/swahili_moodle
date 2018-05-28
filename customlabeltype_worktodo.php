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
 * Strings for component 'customlabeltype_worktodo', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   customlabeltype_worktodo
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ALONEOFFLINE'] = 'Lonely off line';
$string['ALONEONLINE'] = 'Lonely on line';
$string['COACHASYNCHRONOUS'] = 'Asynchronous exchanges with a teaching peer';
$string['COACHSYNCHRONOUS'] = 'Synchronous work with a teaching peer';
$string['configtypename'] = 'Enable subtype Work to do';
$string['COURSEOFFLINE'] = 'Off line, with the whole classroom';
$string['COURSEONLINE'] = 'On line, with the whole classroom';
$string['EASY'] = 'Easy';
$string['estimatedworktime'] = 'Estimated time';
$string['EXERCISE'] = 'Exercising on a sample';
$string['EXPERIMENT'] = 'Experimenting and discovering';
$string['family'] = 'pedagogic';
$string['HARD'] = 'Hard';
$string['INFOQUEST'] = 'Seeking for information';
$string['linktomodule'] = 'Related Activity Module';
$string['MEDIUM'] = 'Medium';
$string['NQ'] = 'Unqualified';
$string['pluginname'] = 'Course element: Work to Do';
$string['PROJECT'] = 'Driving a project';
$string['SYNTHESIS'] = 'Writing a synthesis';
$string['TEAMOFFLINE'] = 'Off line, in a working team or group';
$string['TEAMONLINE'] = 'On line, in a working team or group';
$string['template'] = '<table class="custombox-worktodo" cellspacing="0" width="100%">
<tr valign="top">
    <td class="custombox-header-thumb worktodo" style="background-image : url(<%%icon%%>);" width="2%" rowspan="3">
    </td>
    <td class="custombox-header-caption worktodo" width="98%" colspan="2">
        Work to do
    </td>
</tr>
<tr valign="top">
    <td class="custombox-worktype worktodo" colspan="2">
        <span class="custombox-param worktodo">Nature: </span> <span class="custombox-value worktodo"><%%worktypefield%%></span>
    </td>
    <td class="custombox-timeexpected worktodo" align="right" width="40">
        <img src="<%%clock%%>" /> <%%estimatedworktime%%>
    </td>
</tr>
<tr valign="top">
    <td class="custombox-worktype worktodo">
        <span class="custombox-param worktodo">Effort: </span> <span class="custombox-value worktodo"><%%workeffortfield%%></span>
    </td>
    <td class="custombox-workmode worktodo" align="right" colspan="3">
        <span class="custombox-param worktodo">Mode: </span> <span class="custombox-value worktodo"><%%workmodefield%%></span>
    </td>
</tr>
<tr>
    <td class="custombox-content worktodo" colspan="2">
        <%%worktodo%%>
    </td>
</tr>
</table>';
$string['TRAINING'] = 'Training a skill';
$string['typename'] = 'Work to do';
$string['unassigned'] = '--- unassigned ---';
$string['VERYEASY'] = 'Very easy';
$string['VERYHARD'] = 'Very hard';
$string['WORKEFFORT'] = 'Difficulty';
$string['WORKEFFORT_desc'] = 'The work effort needed to solve the requirement, compared to a \'normal\' effort.';
$string['workeffortfield'] = 'Work effort';
$string['WORKMODE'] = 'Working modality';
$string['WORKMODE_desc'] = 'The peer environment of the work, who is it performed with.';
$string['workmodefield'] = 'Work mode';
$string['worktodo'] = 'Work to Do';
$string['worktodo:addinstance'] = 'Can add an indstance';
$string['worktodo:view'] = 'Can view the content';
$string['WORKTYPE'] = 'Work type';
$string['WORKTYPE_desc'] = 'The type of work being done.';
$string['worktypefield'] = 'Work type';
$string['WRITING'] = 'Memo or note writing';
