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
 * Strings for component 'auth_outage', language 'en', branch 'MOODLE_31_STABLE'
 *
 * @package   auth_outage
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_outagedescription'] = 'Auxiliary plugin that warns users about a future outage and prevents them from logging in once the outage starts.';
$string['autostart'] = 'Auto start maintenance mode.';
$string['autostart_help'] = 'If selected, when the outage starts it will automatically turn on Moodle maintenance mode.';
$string['clicreatehelp'] = 'Creates a new outage.';
$string['clicreateparamautostart'] = 'must be Y or N, sets if the outage automatically triggers maintenance mode.';
$string['clicreateparamblock'] = 'blocks until outage starts.';
$string['clicreateparamclone'] = 'clone another outage except for the start time.';
$string['clicreateparamdescription'] = 'the description of the outage.';
$string['clicreateparamduration'] = 'how many seconds should the outage last.';
$string['clicreateparamhelp'] = 'shows parameters help.';
$string['clicreateparamonlyid'] = 'only outputs the new outage id, useful for scripts.';
$string['clicreateparamstart'] = 'in how many seconds should this outage start. Required.';
$string['clicreateparamtitle'] = 'the title of the outage.';
$string['clicreateparamwarn'] = 'how many seconds before it starts to display a warning.';
$string['clierrorinvalidvalue'] = 'Invalid value for parameter: {$a->param}';
$string['clierrormissingparamaters'] = 'You must specify the start time, use --help for more information.';
$string['clierroroutagechanged'] = 'Outage was changed while waiting.';
$string['clierroroutageended'] = 'Outage has already ended.';
$string['clierroroutagenotfound'] = 'Outage not found.';
$string['clifinishhelp'] = 'Finishes an ongoing outage.';
$string['clifinishnotongoing'] = 'Outage is not ongoing.';
$string['clifinishparamactive'] = 'finishes the currently active outage.';
$string['clifinishparamhelp'] = 'shows parameters help.';
$string['clifinishparamoutageid'] = 'the id of the outage to finish.';
$string['clioutagecreated'] = 'Outage created, id: {$a->id}';
$string['cliplugindisabled'] = 'The authentication plugin \'Outage\' is disabled. Please enable it in the site administration it and try again.';
$string['cliwaitforiterroridxoractive'] = 'You must use --outageid=# or --active parameter but not both.';
$string['cliwaitforithelp'] = 'Waits until an outage starts.';
$string['cliwaitforitoutagestarted'] = 'Outage started!';
$string['cliwaitforitoutagestartingin'] = 'Outage starting in {$a->countdown}.';
$string['cliwaitforitparamactive'] = 'wait for the currently active outage.';
$string['cliwaitforitparamhelp'] = 'shows parameters help.';
$string['cliwaitforitparamoutageid'] = 'the id of the outage to wait until it starts.';
$string['cliwaitforitparamsleep'] = 'maximum amount of seconds before status output.';
$string['cliwaitforitparamverbose'] = 'enable verbose mode.';
$string['clone'] = 'Clone';
$string['datetimeformat'] = '%a %d %h %Y at %I:%M%P %Z';
$string['defaultdescription'] = 'Description';
$string['defaultdescriptiondescription'] = 'Default warning message for outages. Use {{start}} and {{stop}} placeholders as required.';
$string['defaultdescriptionvalue'] = 'There is an scheduled maintenance from {{start}} to {{stop}} and our system will not be available during that time.';
$string['defaultlayoutcss'] = 'Layout CSS';
$string['defaultlayoutcssdescription'] = 'This CSS code will be used to display the Outage Warning Bar.';
$string['defaultoutageautostart'] = 'Outage auto start';
$string['defaultoutageautostartdescription'] = 'If the outage should automatically trigger maintenance mode once it starts, locking down the whole site.';
$string['defaultoutageduration'] = 'Outage duration';
$string['defaultoutagedurationdescription'] = 'Default duration (in minutes) of an outage.';
$string['defaulttitle'] = 'Title';
$string['defaulttitledescription'] = 'Default title for outages. Use {{start}} and {{stop}} placeholders as required.';
$string['defaulttitlevalue'] = 'System down from {{start}} for {{duration}}.';
$string['defaultwarningduration'] = 'Warning duration';
$string['defaultwarningdurationdescription'] = 'Default warning time (in minutes) for outages.';
$string['description'] = 'Public Description';
$string['description_help'] = 'A full description of the outage, publicly visible by all users.';
$string['finish'] = 'Finish';
$string['info15secondsbefore'] = '15 seconds before';
$string['infoendofoutage'] = 'end of outage';
$string['infofrom'] = 'From:';
$string['infopagestaticgenerated'] = 'This warning was generated on {$a->time}.';
$string['infostart'] = 'start';
$string['infostartofwarning'] = 'start of warning';
$string['infountil'] = 'Until:';
$string['menudefaults'] = 'Default settings';
$string['menumanage'] = 'Manage';
$string['messageoutagebackonline'] = 'We are back online!';
$string['messageoutagebackonlinedescription'] = 'You may resume browsing safely.';
$string['messageoutageongoing'] = 'Back online at {$a->stop}.';
$string['messageoutagewarning'] = 'Shutting down in {{countdown}}';
$string['na'] = 'n/a';
$string['notfound'] = 'No outages found.';
$string['outageclone'] = 'Clone outage';
$string['outageclonecrumb'] = 'Clone';
$string['outagecreate'] = 'Create outage';
$string['outagecreatecrumb'] = 'Create';
$string['outagedelete'] = 'Delete outage';
$string['outagedeletewarning'] = 'You are about to permanently delete the outage below. This cannot be undone.';
$string['outageduration'] = 'Outage duration';
$string['outagedurationerrorinvalid'] = 'Outage duration must be positive.';
$string['outageduration_help'] = 'How long the outage lasts after it starts.';
$string['outageedit'] = 'Edit outage';
$string['outageeditcrumb'] = 'Edit';
$string['outagefinish'] = 'Finish outage';
$string['outagefinishwarning'] = 'You are about to mark this outage as finished. The system will be immediately back online.';
$string['outageslistfuture'] = 'Planned outages';
$string['outageslistpast'] = 'Outage history';
$string['pluginname'] = 'Outage manager';
$string['starttime'] = 'Start date and time';
$string['starttime_help'] = 'At which date and time the outage starts, preventing general access to the system.';
$string['tableheaderduration'] = 'Duration';
$string['tableheaderdurationactual'] = 'Actual duration';
$string['tableheaderdurationplanned'] = 'Planned duration';
$string['tableheaderstarttime'] = 'Starts on';
$string['tableheadertitle'] = 'Title';
$string['tableheaderwarnbefore'] = 'Warns before';
$string['taskupdatestaticpage'] = 'Update static outage page';
$string['textplaceholdershint'] = 'You can use {{start}}, {{stop}} and {{duration}} as placeholders on the title and description.';
$string['title'] = 'Title';
$string['titleerrorinvalid'] = 'Title cannot be left blank.';
$string['titleerrortoolong'] = 'Title cannot have more than {$a} characters.';
$string['title_help'] = 'A short title to for this outage. It will be displayed on the warning bar and on the calendar.';
$string['warningduration'] = 'Warning duration';
$string['warningdurationerrorinvalid'] = 'Warning duration must be positive.';
$string['warningduration_help'] = 'How long before the start of the outage should the warning be displayed.';
