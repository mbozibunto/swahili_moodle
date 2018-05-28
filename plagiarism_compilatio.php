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
 * Strings for component 'plagiarism_compilatio', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   plagiarism_compilatio
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_expire_soon_content'] = 'You can use Compilatio until the end of the month. If your subscription is not renewed, you will not be able to use Compilatio services after this date.';
$string['account_expire_soon_title'] = 'Your Compilatio.net account expires soon';
$string['activate_compilatio'] = 'Enable Compilatio';
$string['admin_disabled_reports'] = 'The administrator does not allow the teachers to display the similarity reports to the students.';
$string['admin_help_compilatio_api_content'] = 'This plugin requires a subscription to Compilatio.net services in order to operate.<br/>
Please reach your commercial contact, or ask for an API key to <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a>.';
$string['admin_help_compilatio_api_title'] = 'How to get an API Key?';
$string['allow_teachers_to_show_reports'] = 'Allow teachers to show similarity reports to their students';
$string['analysing'] = 'Analysing document';
$string['analysis_completed'] = 'Analysis completed: {$a}% of similarities.';
$string['analysis_date'] = 'Analysis Date (Timed analysis only)';
$string['analysis_started'] = '{$a} analysis have been requested.';
$string['analysis_type'] = 'Analysis Start';
$string['analysistype_direct'] = 'Direct';
$string['analysis_type_help'] = '<p>There are 3 possible options:</p>
<ul>
	<li><strong>Direct: </strong>The document is sent to Compilatio and analyzed straight away.</li>
	<li><strong>Manual:</strong> The document is sent to Compilatio but the teacher must manually trigger the anaylyis of documents.</li>
	<li><strong>Timed: </strong>The document is sent to Compilatio and analysed at the time/date set.</li>
</ul>
<p>To enable all documents to be compared with each other, wait until all work is submitted by students then trigger the analyis.</p>';
$string['analysistype_manual'] = 'Manual';
$string['analysistype_prog'] = 'Timed';
$string['analyze'] = 'Analyze';
$string['analyzing'] = 'Analyzing';
$string['api_key_not_tested'] = 'Your API key haven\'t been verified because the connection to Compilatio.net has failed.';
$string['api_key_not_valid'] = 'Your API key is not valid. It is specific to the used platform. You can obtain one by contacting <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a>.';
$string['api_key_valid'] = 'Your API key is valid.';
$string['assign_statistics'] = 'Statistics about assignments';
$string['auto_diagnosis_title'] = 'Auto-diagnosis';
$string['average'] = 'Average rate';
$string['average_similarities'] = 'In this assignment, the average similarities ratio is {$a}%.';
$string['compilatio'] = 'Compilatio plagiarism plugin';
$string['compilatioapi'] = 'Compilatio API Address';
$string['compilatioapi_help'] = 'This is the address of the Compilatio API';
$string['compilatiodefaults'] = 'Compilatio defaults';
$string['compilatio_display_student_report'] = 'Show similarity report to student';
$string['compilatio_display_student_report_help'] = 'The similarity report gives a breakdown on what parts of the submission were plagiarised and the location of the detected sources.';
$string['compilatio_display_student_score'] = 'Show similarity score to student';
$string['compilatio_display_student_score_help'] = 'The similarity score is the percentage of the submission that has been matched with other content.';
$string['compilatio_draft_submit'] = 'When should the file be submitted to Compilatio';
$string['compilatio:enable'] = 'Allow the teacher to enable/disable Compilatio inside an activity';
$string['compilatio_enable_mod_assign'] = 'Enable Compilatio for assignments (assign)';
$string['compilatio_enable_mod_forum'] = 'Enable Compilatio for forums';
$string['compilatio_enable_mod_workshop'] = 'Enable Compilatio for workshops (workshop)';
$string['compilatioenableplugin'] = 'Enable Compilatio for {$a}';
$string['compilatioexplain'] = 'For more information on this plugin see: <a href="http://www.compilatio.net/en/" target="_blank">compilatio.net</a>';
$string['compilatio_faq'] = '<a target=\'_blank\' href=\'https://www.compilatio.net/en/faq/\'>Compilatio.net - Frequently Asked Questions.</a>';
$string['compilatio_help_assign'] = 'Display help about Compilatio plugin';
$string['compilatiopassword'] = 'API key';
$string['compilatiopassword_help'] = 'Personal code provided by Compilatio to access the API';
$string['compilatio:resetfile'] = 'Allow the teacher to resubmit the file to Compilatio after an error';
$string['compilatio_studentemail'] = 'Send Student email';
$string['compilatio_studentemail_help'] = 'This will send an e-mail to the student when a file has been processed to let them know that a report is available.';
$string['compilatio:triggeranalysis'] = 'Allow the teacher to manually trigger analysis';
$string['compilatio:viewreport'] = 'Allow the teacher to view the full report from Compilatio';
$string['context'] = 'Context';
$string['cron_check'] = 'CRON has been executed on {$a} for the last time.';
$string['cron_check_never_called'] = 'CRON has never been executed since the activation of the plugin. It may be misconfigured in your server.';
$string['cron_check_not_ok'] = 'It hasn\'t been executed in the last hour.';
$string['cron_frequency'] = 'It seems to be run every {$a} minutes.';
$string['cron_recommandation'] = 'We recommend using a delay below 15 minutes between each CRON execution.';
$string['defaults_desc'] = 'The following settings are the defaults set when enabling Compilatio within an Activity Module';
$string['defaultupdated'] = 'Default values updated';
$string['disclaimer_data'] = 'By enabling Compilatio, you accept the fact that data about your Moodle configuration will be collected in order to improve support and maintenance of this service.';
$string['display_notifications'] = 'Display notifications';
$string['display_stats'] = 'Display statistics about this assignment';
$string['documents_analyzed'] = '{$a->countAnalyzed} document(s) out of {$a->documentsCount} have been sent and analyzed.';
$string['documents_analyzed_between_thresholds'] = '{$a->documentsBetweenThresholds} document(s) between {$a->greenThreshold}% and {$a->redThreshold}%.';
$string['documents_analyzed_higher_red'] = '{$a->documentsAboveRedThreshold} document(s) greater than {$a->redThreshold}%.';
$string['documents_analyzed_lower_green'] = '{$a->documentsUnderGreenThreshold} document(s) lower than {$a->greenThreshold}%.';
$string['documents_analyzing'] = '{$a} document(s) are being analyzed.';
$string['documents_in_queue'] = '{$a} document(s) are in the queue to be analyzed.';
$string['documents_number'] = 'Analyzed documents';
$string['enabledandworking'] = 'The Compilatio plugin is enabled and working.';
$string['enable_javascript'] = 'Please enable Javacript in order to have a better experience with Compilatio plugin.<br/>
 Here are the <a href=\'http://www.enable-javascript.com/\' target=\'_blank\'>
 instructions how to enable JavaScript in your web browser</a>.';
$string['error'] = 'Error';
$string['errors'] = 'Errors :';
$string['export_csv'] = 'Export data about this assignment into a CSV file';
$string['export_global_csv'] = 'Click here to export this data in CSV format';
$string['export_raw_csv'] = 'Click here to export raw data in CSV format';
$string['failedanalysis'] = 'Compilatio failed to analyse your document:';
$string['filename'] = 'Filename';
$string['filereset'] = 'A file has been reset for re-submission to Compilatio';
$string['firstname'] = 'First name';
$string['get_scores'] = 'Retrieve plagiarism scores from Compilatio.net';
$string['global_statistics'] = 'Global statistics';
$string['green_threshold'] = 'Green up to';
$string['help_compilatio_format_content'] = 'Compilatio.net handles most formats used in word processors and on the internet.
The following formats are supported :';
$string['help_compilatio_format_title'] = 'Which documents formats are accepted?';
$string['help_compilatio_languages_content'] = 'Compilatio analysis can be performed in more than 40 languages (including all latin languages).<br/>
Chinese, Japanese, Arabic and Cyrillic alphabet are not supported yet.';
$string['help_compilatio_languages_title'] = 'Which languages are supported?';
$string['help_compilatio_settings_content'] = 'Three analysis types are available with Compilatio plugin :
<ul>
<li>
Direct : <br/>
Each document is sent to Compilatio and analyzed as soon as it is uploaded by the student.<br/>
Recommended if you wish to get the results quickly and if it is not necessary that all documents are compared with each others.
</li>
<li>
Timed : <br/>
Choose date to start Compilatio analysis, later than the deadline for the students.<br/>
Recommended if you wish to compare all the documents of the activity mutually.
</li>
<li>
Manual : <br/>
The documents of the activity will not be analyzed until you trigger the analysis.<br/>
You can click on the “Start analysis” button of each document to trigger its analysis.
</li>
</ul>';
$string['help_compilatio_settings_title'] = 'Which mode should I use in the Compilatio settings of an activity?';
$string['help_compilatio_thresholds_content'] = 'The results\' colors can be defined in the settings of each activities, in the section “Compilatio plagiarism plugin”.<br/>
It is possible to choose the thresholds that determines the display color of similarities ratios.';
$string['help_compilatio_thresholds_title'] = 'How can I change the colors of the documents’ analysis results?';
$string['hide_area'] = 'Hide Compilatio informations';
$string['immediately'] = 'Immediately';
$string['indexed_document'] = 'The document is indexed into the Document Database';
$string['indexing_state'] = 'Add documents into the Document Database';
$string['indexing_state_help'] = 'The content of documents is indexed into the Document Database. It will be used as a comparison content for later analysis.';
$string['information_settings'] = 'Informations';
$string['lastname'] = 'Last name';
$string['loading'] = 'Loading, please wait...';
$string['manual_analysis'] = 'The analysis of this document must be triggered manually.';
$string['manual_send_confirmation'] = '{$a} file(s) have been submitted to Compilatio.';
$string['max_attempts_reach_files'] = 'Analysis has been interrupted for the following files. Analyses were sent too many times, you cannot restart them anymore :';
$string['max_file_size_allowed'] = 'Maximum document size : <strong>{$a->Mo} MB</strong>';
$string['maximum'] = 'Maximum rate';
$string['minimum'] = 'Minimum rate';
$string['news_analysis_perturbated'] = 'Compilatio.net - Analysis perturbated';
$string['news_incident'] = 'Compilatio.net incident';
$string['news_maintenance'] = 'Compilatio.net maintenance';
$string['news_update'] = 'Compilatio.net update';
$string['no_document_available_for_analysis'] = 'No documents were available for analysis';
$string['no_documents_available'] = 'No documents are available for analysis in this assignment.';
$string['no_statistics_yet'] = 'No documents have been analyzed yet.';
$string['not_analyzed'] = 'The following documents can\'t be analyzed :';
$string['not_analyzed_unextractable'] = '{$a} document(s) haven\'t been analysed because they didn\'t contain enough text.';
$string['not_analyzed_unsupported'] = '{$a} document(s) haven\'t been analysed because their format isn\'t supported.';
$string['not_indexed_document'] = 'The document is not indexed into the Document Database';
$string['numeric_threshold'] = 'Threshold must me a number.';
$string['orange_threshold'] = 'Orange up to';
$string['pending'] = 'This file is pending submission to Compilatio';
$string['pending_status'] = 'Pending';
$string['planned'] = 'Planned';
$string['plugin_disabled'] = 'The plugin isn\'t enabled in the Moodle platform.';
$string['plugin_disabled_assign'] = 'The plugin isn\'t enabled for assignments.';
$string['plugin_disabled_forum'] = 'The plugin isn\'t enabled for forums.';
$string['plugin_disabled_workshop'] = 'The plugin isn\'t enabled for workshops.';
$string['plugin_enabled'] = 'The plugin is enabled in the Moodle platform.';
$string['plugin_enabled_assign'] = 'The plugin is enabled for assignments.';
$string['plugin_enabled_forum'] = 'The plugin is enabled for forums.';
$string['plugin_enabled_workshop'] = 'The plugin is enabled for workshops.';
$string['pluginname'] = 'Compilatio plagiarism plugin';
$string['previouslysubmitted'] = 'Previously submitted as';
$string['processing_doc'] = 'Compilatio is analyzing this file.';
$string['programmed_analysis_future'] = 'Documents will be analyzed by Compilatio on {$a}.';
$string['programmed_analysis_past'] = 'Documents have been submitted for analysis to Compilatio on {$a}.';
$string['progress'] = 'Progress :';
$string['queue'] = 'Queue';
$string['queued'] = 'The document is now in queue and it is going to be analyzed soon by Compilatio';
$string['red_threshold'] = 'red otherwise';
$string['report'] = 'report';
$string['reset'] = 'Reset';
$string['restart_failed_analysis'] = 'Restart interrupted analysis';
$string['restart_failed_analysis_title'] = 'Restart interrupted analysis :';
$string['results'] = 'Results :';
$string['saved_config_failed'] = '<strong>The combination API key - adress entered is invalid. Compilatio is disabled, please try again.<br/>
								The <a href="autodiagnosis.php">auto-diagnosis</a> page can help you to configure this plugin.</strong><br/>
								Error :';
$string['savedconfigsuccess'] = 'Plagiarism Settings Saved';
$string['send_files'] = 'Upload files to Compilatio.net for plagiarism detection';
$string['showwhenclosed'] = 'When Activity closed';
$string['similarities'] = 'Similarities';
$string['similarities_disclaimer'] = 'You can analyze similarities in this assignment\'s documents with <a href=\'http://www.compilatio.net/en/\' target=\'_blank\'>Compilatio</a>.<br/> Be careful: similarities measured during analysis do not necessarily mean plagiarism. The analysis report helps you to identify if the similarities matched to suitable quotation or to plagiarism.';
$string['similarity_percent'] = '% of similarities';
$string['startallcompilatioanalysis'] = 'Analyze all documents';
$string['startanalysis'] = 'Start analysis';
$string['start_analysis_title'] = 'Analysis start';
$string['statistics_title'] = 'Statistics';
$string['studentdisclosuredefault'] = 'All files uploaded here will be submitted to the plagiarism detection service Compilatio';
$string['studentemailcontent'] = 'The file you submitted to {$a->modulename} in {$a->coursename} has now been processed by the Plagiarism tool Compilatio.
{$a->modulelink}';
$string['studentemailsubject'] = 'File processed by Compilatio';
$string['students_disclosure'] = 'Student Disclosure';
$string['students_disclosure_help'] = 'This text will be displayed to all students on the file upload page.';
$string['submitondraft'] = 'Submit file when first uploaded';
$string['submitonfinal'] = 'Submit file when student sends for marking';
$string['subscription_state'] = '<strong>Your Compilatio.net subscription will expire at the end of {$a->end_date}. This month, you have analyzed the equivalent of {$a->used} document(s) containing less than 5,000 words.</strong>';
$string['tabs_title_help'] = 'Help';
$string['tabs_title_notifications'] = 'Notifications';
$string['tabs_title_stats'] = 'Statistics';
$string['teacher'] = 'Teacher';
$string['thresholds_description'] = 'Indicate the threshold that you want to use, in order to facilitate the finding of analysis report (% of similarities) :';
$string['thresholds_settings'] = 'Limits :';
$string['timesubmitted'] = 'Submitted to Compilatio on';
$string['toolarge'] = 'This file is too large for Compilatio to process. Maximum size : {$a->Mo} MB';
$string['trigger_timed_analyses'] = 'Trigger scheduled plagiarism analysis';
$string['unextractable'] = 'The content of this document couldn\'t be extracted';
$string['unextractablefile'] = 'Your document doesn’t contain enough words, or text cannot be extracted.';
$string['unextractable_files'] = 'The following file(s) can\'t be analyzed by Compilatio. They either do not contain enough words or text cannot be extracted :';
$string['unknownwarning'] = 'An error occurred trying to send this file to Compilatio';
$string['unsent_documents'] = 'Document(s) not sent';
$string['unsent_documents_content'] = 'This assignment contains document(s) not submitted to Compilatio.';
$string['unsupported'] = 'Unsupported document';
$string['unsupported_files'] = 'The following file(s) can\'t be analyzed by Compilatio because their format is not supported :';
$string['unsupportedfiletype'] = 'This file type is not supported by Compilatio';
$string['updatecompilatioresults'] = 'Refresh the informations';
$string['updated_analysis'] = 'Compilatio analysis results have been updated.';
$string['update_meta'] = 'Perform Compilatio.net\'s scheduled operations';
$string['use_compilatio'] = 'Allow similarity detection with Compilatio';
$string['waitingforanalysis'] = 'This file will be processed on {$a}';
$string['webservice_not_ok'] = 'The server wasn\'t able to connect to the web service. Your firewall may be blocking the connection.';
$string['webservice_ok'] = 'The server is able to connect to the web service.';
$string['webservice_unreachable_content'] = 'Compilatio.net is currently unavailable. We apologize for the inconvenience.';
$string['webservice_unreachable_title'] = 'Compilatio.net is unavailable.';
