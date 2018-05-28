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
 * Strings for component 'plagiarism_unicheck', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   plagiarism_unicheck
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['api_secret'] = 'API Secret';
$string['api_secret_help'] = 'API Secret provided by Unicheck to activate Moodle plugin. You can find it on <a href="https://corp.unicheck.com/profile/apisettings">https://corp.unicheck.com/profile/apisettings</a>';
$string['archive:limitreachedfulldescription'] = 'There are more documents in the file "{$a->filename}" but they have not been analyzed because the limit of documents to be analyzed within a zip file is {$a->max_supported_count}. You can check it with the administrator of this Moodle installation to modify this value';
$string['archive:limitreachedshortdescripton'] = 'Not all documents were analyzed';
$string['attempts'] = 'Attempts made';
$string['check_all_submitted_assignments'] = 'Check already delivered assignment submissions';
$string['check_all_submitted_assignments_help'] = 'In case Unicheck was disabled or if you want to generate reports for past submissions, enable this option and save assignment settings. This will trigger bulk check of all work (files and/or text) submitted for grading. Check will start after few minutes after enabling the option.';
$string['check_confirm'] = 'Are you sure you want start checking by Unicheck plagiarism plugin?';
$string['check_file'] = 'Start a scan';
$string['check_start'] = 'Unicheck originality grading in progress';
$string['check_type'] = 'Sources for comparison';
$string['check_type_help'] = 'a) Internet - live Internet collection of billions of online resources (articles, web pages, blog posts, news, files etc.). This source includes open access publications in repositories, journals and publications on authors\' personal sites.
<br>b) Unicheck Institutional Library - collection of student submissions maintained by this institution. Files are added to collection only when option "Add to Unicheck Institutional Library" is enabled.
<br>c) External database - additional text data sources maintained by this institution (i.e. historical student submissions).';
$string['client_id'] = 'Client ID';
$string['client_id_help'] = 'Client ID provided by Unicheck to identify Unicheck account. You can find it on <a href="https://corp.unicheck.com/profile/apisettings">https://corp.unicheck.com/profile/apisettings</a>';
$string['cronwarning'] = 'The <a href="../../admin/cron.php">cron.php</a> maintenance script has not been run for at least 30 min - Cron must be configured to allow Unicheck to function correctly.';
$string['defaultsdesc'] = 'Default settings for new assignments: Choose from the options next to the following items to configure the default settings for new assignments. Teachers can adjust available settings in the assignments';
$string['defaultupdated'] = 'Default values updated';
$string['delete'] = 'Delete';
$string['deletedwarning'] = 'This file could not be found - it may have been deleted by the user';
$string['draft_submit'] = 'When should the file be submitted to Unicheck';
$string['enable_api_logging'] = 'Enable API logging';
$string['enable_api_logging_help'] = 'Check this box to enable Unicheck API logging in this Moodle instance. This option shows the raw data of request/response to Unicheck API';
$string['enable_mod_assign'] = 'Enable Unicheck in Assignment activity';
$string['enable_mod_assign_help'] = 'Enable Unicheck Plagiarism Service for the Assignment activity (online text and file submissions supported)';
$string['enable_mod_forum'] = 'Enable Unicheck in Forum activity';
$string['enable_mod_forum_help'] = 'Enable Unicheck Plagiarism Service for the Forum activity (text replies and file submissions supported)';
$string['enable_mod_workshop'] = 'Enable Unicheck in Workshop activity';
$string['enable_mod_workshop_help'] = 'Enable Unicheck Plagiarism Service for the Workshop activity (text and file submissions supported)';
$string['enable_plugin'] = 'Enable Unicheck Plagiarism Service';
$string['enable_plugin_help'] = 'Check this box to enable Unicheck Plagiarism Service in this Moodle instance.';
$string['event:api_called'] = 'API request';
$string['event:api_user_created'] = 'User created';
$string['event:archive_files_checked'] = 'Archive files checked';
$string['event:archive_files_unpacked'] = 'Archive files unpacked and ready for similarity checking';
$string['event:archive_files_uploaded'] = 'Archive files uploaded';
$string['event:callback_accepted'] = 'Callback accepted';
$string['event:error_handled'] = 'Error handled';
$string['event:file_similarity_check_completed'] = 'Similarity check completed';
$string['event:file_similarity_check_failed'] = 'Similarity check failed';
$string['event:file_similarity_check_started'] = 'Similarity check started';
$string['event:file_upload_completed'] = 'File upload completed';
$string['event:file_upload_failed'] = 'File upload failed';
$string['event:file_upload_started'] = 'File upload started';
$string['exclude_citations'] = 'Exclude references and citations';
$string['exclude_citations_help'] = 'Enable this option to identify and exclude references and citations. Unicheck identifies citations according to rules described in APA, MLA, Chicago, Turabian, Harvard guides. Citations will be marked with blue color and references will be marked with violet color. Such items will be excluded from total similarity score.';
$string['exclude_self_plagiarism'] = 'Exclude self-plagiarism';
$string['exclude_self_plagiarism_help'] = 'Enable this option to exclude self-plagiarism in the same course. Matches with assignments from other courses will still be reported. <br>This option should be activated before submissions start and should not be changed afterwards.';
$string['explainerrors'] = 'This page lists any files that are currently in an error state. <br/>When files are deleted on this page they will not be able to be resubmitted and errors will no longer display to teachers or students';
$string['external_database'] = 'External database';
$string['file'] = 'File';
$string['filedeleted'] = 'File deleted from queue';
$string['filereset'] = 'A file has been reset for re-submission to Unicheck';
$string['fileresubmitted'] = 'File Queued for resubmission';
$string['generalinfo'] = 'General information';
$string['getscore'] = 'Get score';
$string['heldevents'] = 'Held events';
$string['heldeventsdescription'] = 'These are events that did not complete on the first attempt and were queued for resubmission - this prevents subsequent events from completing and may need further investigation. Some of these events may not be relevant to Unicheck.';
$string['id'] = 'ID';
$string['identifier'] = 'Identifier';
$string['max_100000_words'] = 'File(s) should have no more than 100 000 words and be not larger than 70MB';
$string['max_supported_archive_files_count'] = 'Maximum number of files to be checked in archive';
$string['max_supported_archive_files_count_help'] = 'Specify maximum number of files to be reviewed by Unicheck. System will pick only file types supported by Unicheck and will process files one by one. Supported formats: ZIP, RAR.';
$string['min_30_words'] = 'At least 30 words are required';
$string['module'] = 'Module';
$string['my_library'] = 'Library';
$string['name'] = 'Name';
$string['no_index_files'] = 'Add submissions to Institutional Library';
$string['no_index_files_help'] = 'Student submissions are added to private Institutional Library only when this option is enabled. New student submissions are compared with works stored in this Institutional Library, in addition to Internet. This library consists only from papers submitted by students of this institution and is not shared with other institutions.';
$string['noreceiver'] = 'No receiver address was specified';
$string['pending'] = 'This file is pending submission to Unicheck';
$string['plagiarism'] = 'Potential plagiarism';
$string['plagiarismcheckerid'] = 'Unicheck ID: {$a->id}';
$string['plagiarism_run_success'] = 'File sent for plagiarism scan';
$string['pluginname'] = 'Unicheck plagiarism plugin';
$string['previouslysubmitted'] = 'Previously submitted as';
$string['processing'] = 'This file has been submitted to Unicheck, now waiting for the analysis to be available';
$string['progress'] = 'Unicheck scan';
$string['receivernotvalid'] = 'This is not a valid receiver address.';
$string['refresh'] = 'Refresh page to see results';
$string['report'] = 'View full report';
$string['reportready'] = 'Report ready';
$string['resubmit'] = 'Resubmit';
$string['savedconfigfailed'] = 'An incorrect Client ID/API Secret combination has been entered. Unicheck has been disabled, please try again.';
$string['savedconfigsuccess'] = 'Plagiarism detection settings saved';
$string['scoreavailable'] = 'This file has been processed by Unicheck and a report is now available.';
$string['scorenotavailableyet'] = 'This file has not been processed by Unicheck yet.';
$string['sent_student_report'] = 'Notify students via email';
$string['sent_student_report_help'] = 'Students will receive information about the results of the check via e-mail.';
$string['show_student_report'] = 'Show similarity reports to student';
$string['show_student_report_help'] = 'Students only see similarity reports for their own submissions and do not see reports of other students.';
$string['show_student_score'] = 'Show similarity scores to student';
$string['show_student_score_help'] = 'Students only see similarity scores for their own submissions and do not see scores of other students.';
$string['showwhenclosed'] = 'When Activity closed';
$string['similarity'] = 'Similarity';
$string['similarity_sensitivity'] = 'Exclude sources with a match less than (%)';
$string['similarity_sensitivity_help'] = 'Sources which have less than specified similarity % will not be included in the total similarity score.';
$string['similarity_words_sensitivity'] = 'Exclude sources with a match less than (words)';
$string['similarity_words_sensitivity_help'] = 'Sources which have less than specified number of words (8 minimum) will not be included in the total similarity score.';
$string['status'] = 'Status';
$string['studentdisclosure'] = 'Familiarize students about Unicheck Plagiarism Service';
$string['studentdisclosuredefault'] = 'All  uploaded files will be submitted to the plagiarism detection system Unicheck.';
$string['studentdisclosure_help'] = 'Students will see this message when uploading a file in an assignment, where Unicheck is enabled.';
$string['studentemailcontent'] = 'The file you submitted to {$a->modulename} in {$a->coursename} has already been processed by the plagiarism detection system Unicheck
{$a->modulelink}';
$string['studentemailsubject'] = 'File processed by Unicheck';
$string['submitondraft'] = 'Submit file when first uploaded';
$string['submitonfinal'] = 'Submit file when student sends it for grading';
$string['toolarge'] = 'This file is too large for Unicheck to process';
$string['ufiles'] = 'Unicheck Files';
$string['unicheck'] = 'Unicheck plagiarism plugin';
$string['unicheck:changeaddsubmissiontolibrarysetting'] = 'Allow enable/disable add submissions to institutional library';
$string['unicheck:changecheckalreadysubmittedassignmentsetting'] = 'Allow enable/disable check already delivered assignment submissions';
$string['unicheck:changeenableunichecksetting'] = 'Allow enable/disable Unicheck Plagiarism Service in activities';
$string['unicheck:changeexcludecitationssetting'] = 'Allow enable/disable exclude references and citations';
$string['unicheck:changeexcludeselfplagiarismsetting'] = 'Allow enable/disable exclude self-plagiarism in course';
$string['unicheck:changemaxsupportedarchivefilescountsetting'] = 'Allow change maximum number of files to be checked in archive';
$string['unicheck:changesensitivitypercentagesetting'] = 'Allow change exclude sources with a match less than (%)';
$string['unicheck:changesentstudentreportsetting'] = 'Allow enable/disable sent student report via email';
$string['unicheck:changeshowstudentreportsetting'] = 'Allow enable/disable show similarity reports to student';
$string['unicheck:changeshowstudentscoresetting'] = 'Allow enable/disable show similarity scores to student';
$string['unicheck:changesourcesforcomparisonsetting'] = 'Allow change sources for comparison';
$string['unicheck:changewordsensitivitysetting'] = 'Allow change exclude sources with a match less than (words)';
$string['unicheck:checkfile'] = 'Allow check file for similarity';
$string['unicheckdebug'] = 'Debugging';
$string['unicheckdefaults'] = 'Unicheck defaults';
$string['unicheck_enable'] = 'Enable Unicheck plugin';
$string['unicheck:enable'] = 'Allow to enable/disable Unicheck inside an activity';
$string['unicheck_lang'] = 'Language';
$string['unicheck_lang_help'] = 'Language code provided by Unicheck';
$string['unicheck:resetfile'] = 'Allow to resubmit the file to Unicheck after an error occurred';
$string['unicheck_settings_url_text'] = 'Open unicheck.com admin account to view/copy Client ID/API Secret';
$string['unicheck:vieweditreport'] = 'Allow to edit the full report from Unicheck';
$string['unicheck:viewreport'] = 'Allow to view the full report from Unicheck';
$string['unicheck:viewsimilarity'] = 'Allow to view similarity value from Unicheck';
$string['unknownwarning'] = 'An error occurred when trying to send this file to Unicheck';
$string['unsupportedfiletype'] = 'This filetype is not supported by Unicheck';
$string['uploading'] = 'Uploading';
$string['use_assign_desc_param'] = 'To unlock Unicheck settings';
$string['use_assign_desc_value'] = 'Set Submissions settings → Require students click submit button = Yes';
$string['use_unicheck'] = 'Enable Unicheck Plagiarism Service';
$string['use_unicheck_help'] = 'New submissions will be automatically checked for similarities right after submissions.';
$string['waitingevents'] = 'There are {$a->countallevents} events waiting for cron and {$a->countheld} events are being held for resubmission';
$string['web'] = 'Internet';
$string['web_and_my_lib_and_external_db'] = 'Internet + Library + External database';
$string['web_and_my_library'] = 'Internet + Library';
