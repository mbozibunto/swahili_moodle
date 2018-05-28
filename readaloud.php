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
 * Strings for component 'readaloud', language 'en', branch 'MOODLE_31_STABLE'
 *
 * @package   readaloud
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Accuracy';
$string['accuracy_p'] = 'Acc(%)';
$string['allowearlyexit'] = 'Can exit early';
$string['allowearlyexit_defaultdetails'] = 'Sets the default setting for allow_early_exit. Can be overriden at the activity level. If true, allow_early_exit means that students can finish before the time limit, by pressing a finish button. The WPM is calculated using their recording time.';
$string['allowearlyexit_details'] = 'If checked students can finish before the time limit, by pressing a finish button. The WPM is calculated using their recording time.';
$string['attemptsbyuserheading'] = 'User Attempts Report';
$string['attemptsheading'] = 'Attempts Report';
$string['attemptsreport'] = 'Attempts Report';
$string['audiofile'] = 'Audio';
$string['basicheading'] = 'Basic Report';
$string['basicreport'] = 'Basic Report';
$string['beginreading'] = 'Begin Reading';
$string['cannotgradenow'] = '-';
$string['defaultfeedback'] = 'Thanks for your time.';
$string['defaultsettings'] = 'Default Settings';
$string['defaultwelcome'] = 'Please read the following passage aloud.';
$string['deletealluserdata'] = 'Delete all user data';
$string['deleteattemptconfirm'] = 'Are you sure that you want to delete this attempt?';
$string['deletenow'] = '';
$string['done'] = 'Done';
$string['enabletts'] = 'Enable TTS(experimental)';
$string['enabletts_details'] = '<b>TTS is currently not implemented</b>. When implemented words marked as errors, if clicked will play back the correct pronunciation via a TTS service.';
$string['errorheader'] = 'Error';
$string['exceededattempts'] = 'You have completed the maximum {$a} attempts.';
$string['exportexcel'] = 'Export to CSV';
$string['feedbackheader'] = 'Finished';
$string['feedbacklabel'] = 'Feedback Message';
$string['feedbacklabel_details'] = 'The default text to show in the feedback field when creating a new Read Aloud activity.';
$string['gotnosound'] = 'We could not hear you. Please check the permissions and settings for microphone and try again.';
$string['grade'] = 'Grade';
$string['gradeaverage'] = 'average score of all attempts';
$string['gradehighest'] = 'highest scoring attempt';
$string['gradelatest'] = 'score of latest attempt';
$string['gradelowest'] = 'lowest scoring attempt';
$string['gradenone'] = 'No grade';
$string['gradenow'] = 'Grade Now';
$string['gradenowtitle'] = 'Grading: {$a}';
$string['gradeoptions'] = 'Grade Options';
$string['grade_p'] = 'Grade(%)';
$string['grading'] = 'Grading';
$string['gradingbyuserheading'] = 'Grading all attempts for: {$a}';
$string['gradingheading'] = 'Grading latest attempts for each user.';
$string['id'] = 'ID';
$string['itemsperpage'] = 'Items per page';
$string['itemsperpage_details'] = 'This sets the number of rows to be shown on reports or lists of attempts.';
$string['loadbootstrap'] = 'Load Bootstrap';
$string['loadbootstrap_details'] = 'Bootstrap is a set of CSS and javascript often used to make big colorful buttons and user interfaces that work well on PC and mobile devices. ReadAloud will load it independently if this is checked. If your theme already loads it, and it causes things to look weird then uncheck this.';
$string['loadfontawesome'] = 'Load FontAwesome';
$string['loadfontawesome_details'] = 'FontAwesome provides bland icons that represent arrows and circles and various common symbols you see on toolbars and buttons. ReadAloud loads this for you if this is checked. Should this cause problems, uncheck it.';
$string['maxattempts'] = 'Max. Attempts';
$string['mingrade'] = 'Minimum Grade';
$string['mingradedetails'] = 'The minimum grade required to "complete" this activity.';
$string['mistakes'] = 'Mistakes';
$string['modulename'] = 'Read Aloud';
$string['modulename_help'] = 'ReadAloud is an activity designed to assist teachers in evaluating their students reading fluency. Students read a passage, set by the teacher, into a microphone. Later the teacher can mark words as incorrect and get the student WCPM(Words Correct Per Minute) scores.';
$string['modulenameplural'] = 'Read Alouds';
$string['name'] = 'Name';
$string['nodataavailable'] = 'No Data Available Yet';
$string['notgradedyet'] = 'Your last submission has not been graded yet';
$string['overview'] = 'Overview';
$string['overview_help'] = 'Overview Help';
$string['passagelabel'] = 'Reading Passage';
$string['pluginadministration'] = 'Read Aloud Administration';
$string['pluginname'] = 'Read Aloud Activity';
$string['preview'] = 'Preview';
$string['processing'] = 'Processing';
$string['readaloud'] = 'readaloud';
$string['readaloud:addinstance'] = 'Add a new Read Aloud';
$string['readaloudfieldset'] = 'Custom example fieldset';
$string['readaloud:itemedit'] = 'Edit items';
$string['readaloud:itemview'] = 'View items';
$string['readaloud:manage'] = 'Can manage ReadAloud instances';
$string['readaloud:manageattempts'] = 'Can manage ReadAloud attempts';
$string['readaloudname'] = 'Read Aloud';
$string['readaloudname_help'] = 'This is the content of the help tooltip associated with the readaloudname field. Markdown syntax is supported.';
$string['readaloud:preview'] = 'Can preview ReadAloud activities';
$string['readaloudsettings'] = 'readaloud settings';
$string['readaloud:submit'] = 'Can submit ReadAloud attempts';
$string['readaloudtask'] = 'Read Aloud Task';
$string['readaloud:tts'] = 'Can use Text To Speech(tts)';
$string['readaloud:view'] = 'Preview Read Aloud';
$string['reattempt'] = 'Try Again';
$string['recordnameschool'] = 'Say your name and school';
$string['reports'] = 'Reports';
$string['returntogradinghome'] = 'Return to Grading Top';
$string['returntoreports'] = 'Return to Reports';
$string['saveandnext'] = 'Save .... and next';
$string['showingattempt'] = 'Showing attempt for: {$a}';
$string['someadminsetting'] = 'Some Admin Setting';
$string['someadminsetting_details'] = 'More info about Some Admin Setting';
$string['someinstancesetting'] = 'Some Instance Setting';
$string['someinstancesetting_details'] = 'More infor about Some Instance Setting';
$string['submitted'] = 'submitted';
$string['targetwpm'] = 'Target WPM';
$string['targetwpm_details'] = 'The default target WPM. A students grade is calculated for the gradebook using this value as the maximum score. If their WPM score is equal to, or greater than the target WPM, they will score 100%. The target WPM can also be set at the activity instance level.';
$string['targetwpm_help'] = 'The target WPM score. A students grade is calculated for the gradebook using this value as the maximum score. If their WPM score is equal to, or greater than the target WPM, they will score 100%.';
$string['timecreated'] = 'Time Created';
$string['timelimit'] = 'Time Limit';
$string['totalattempts'] = 'Attempts';
$string['ttslanguage'] = 'TTS Language';
$string['unlimited'] = 'unlimited';
$string['uploadconverterror'] = 'An error occured while posting your file to the server. Your submission has NOT been received. Please refresh the page and try again.';
$string['username'] = 'User';
$string['view'] = 'View';
$string['viewgrading'] = 'View Grading';
$string['viewreports'] = 'View Reports';
$string['welcomelabel'] = 'Welcome Message';
$string['welcomelabel_details'] = 'The default text to show in the welcome field when creating a new Read Aloud activity.';
$string['wpm'] = 'WPM';
