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
 * Strings for component 'plagiarism_turnitin', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   plagiarism_turnitin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allownonor'] = 'Allow submission of any file type?';
$string['allownonor_help'] = 'This setting will allow any file type to be submitted. With this option set to &#34;Yes&#34;, submissions will be checked for originality where possible, submissions will be available for download and GradeMark feedback tools will be available where possible.';
$string['anonblindmarkingnote'] = 'Note: The separate Turnitin anonymous marking setting has been removed. Turnitin will use Moodle\'s blind marking setting to determine the anonymous marking setting.';
$string['assigngeterror'] = 'Could not get turnitintooltwo data';
$string['attachrubric'] = 'Attach a rubric to this assignment';
$string['attachrubricnote'] = 'Note: students will be able to view attached rubrics and their content prior to submitting.';
$string['because'] = 'This was because an administrator deleted the pending assignment from the processing queue and aborted the submission to Turnitin.<br /><strong>The file still exists in Moodle, please contact your instructor.</strong><br />Please see below for any error codes:';
$string['changerubricwarning'] = 'Changing or detaching a rubric will remove all existing rubric scoring from papers in this assignment, including scorecards which have previously been marked. Overall grades for previously graded papers will remain.';
$string['checkagainstnote'] = 'Note: If you do not select "Yes" for at least one of the "Check against..." options below then an Originality report will NOT be generated.';
$string['classupdateerror'] = 'Could not update Turnitin Class data';
$string['closebutton'] = 'Close';
$string['code'] = 'Code';
$string['compareinstitution'] = 'Compare submitted files with papers submitted within this institution';
$string['config'] = 'Configuration';
$string['configupdated'] = 'Configuration updated';
$string['configureerror'] = 'You must configure this module fully as Administrator before using it within a course. Please contact your Moodle administrator.';
$string['connecttesterror'] = 'There was an error connecting to Turnitin the return error message is below:<br />';
$string['course'] = 'Course';
$string['coursegeterror'] = 'Could not get course data';
$string['cronsubmittedsuccessfully'] = 'Submission: {$a->title} (TII ID: {$a->submissionid}) for the assignment {$a->assignmentname} on the course {$a->coursename} was successfully submitted to Turnitin.';
$string['defaultinserterror'] = 'There was an error when trying to insert a default setting value into the database';
$string['defaults'] = 'Default Settings';
$string['defaultsdesc'] = 'The following settings are the defaults set when enabling Turnitin within an Activity Module';
$string['defaultupdated'] = 'Turnitin defaults updated';
$string['defaultupdateerror'] = 'There was an error when trying to update a default setting value in the database';
$string['deleteconfirm'] = 'Are you sure you want to delete this submission?\\n\\nThis action cannot be undone.';
$string['deleted'] = 'Deleted';
$string['deletesubmission'] = 'Delete Submission';
$string['digitalreceipt'] = 'Digital Receipt';
$string['digital_receipt_subject'] = 'This is your Turnitin Digital Receipt';
$string['draftsubmit'] = 'When should the file be submitted to Turnitin?';
$string['erater'] = 'Enable e-rater grammar check';
$string['erater_categories'] = 'e-rater Categories';
$string['erater_dictionary'] = 'e-rater Dictionary';
$string['erater_dictionary_en'] = 'Both US and UK English Dictionaries';
$string['erater_dictionary_engb'] = 'UK English Dictionary';
$string['erater_dictionary_enus'] = 'US English Dictionary';
$string['erater_grammar'] = 'Grammar';
$string['erater_handbook'] = 'ETS&copy; Handbook';
$string['erater_handbook_advanced'] = 'Advanced';
$string['erater_handbook_elementary'] = 'Elementary School';
$string['erater_handbook_highschool'] = 'High School';
$string['erater_handbook_learners'] = 'English Learners';
$string['erater_handbook_middleschool'] = 'Middle School';
$string['erater_mechanics'] = 'Mechanics';
$string['erater_spelling'] = 'Spelling';
$string['erater_style'] = 'Style';
$string['erater_usage'] = 'Usage';
$string['errorcode0'] = 'This file has not been submitted to Turnitin, please consult your system administrator';
$string['errorcode1'] = 'This file has not been sent to Turnitin as it does not have enough content to produce an Originality Report.';
$string['errorcode10'] = 'This file has not been submitted to Turnitin because there is a problem creating the class in Turnitin which is preventing submissions, please consult your API logs for further information';
$string['errorcode11'] = 'This file has not been submitted to Turnitin because it is missing data';
$string['errorcode12'] = 'This file has not been submitted to Turnitin because it belongs to an assignment in which the course was deleted. Row ID: ({$a->id}) | Course Module ID: ({$a->cm}) | User ID: ({$a->userid})';
$string['errorcode2'] = 'This file will not be submitted to Turnitin as it exceeds the maximum size of {$a} allowed';
$string['errorcode3'] = 'This file has not been submitted to Turnitin because the user has not accepted the Turnitin End User Licence Agreement.';
$string['errorcode4'] = 'You must upload a supported file type for this assignment. Accepted file types are; .doc, .docx, .ppt, .pptx, .pps, .ppsx, .pdf, .txt, .htm, .html, .hwp, .odt, .wpd, .ps and .rtf';
$string['errorcode5'] = 'This file has not been submitted to Turnitin because there is a problem creating the module in Turnitin which is preventing submissions, please consult your API logs for further information';
$string['errorcode6'] = 'This file has not been submitted to Turnitin because there is a problem editing the module settings in Turnitin which is preventing submissions, please consult your API logs for further information';
$string['errorcode7'] = 'This file has not been submitted to Turnitin because there is a problem creating the user in Turnitin which is preventing submissions, please consult your API logs for further information';
$string['errorcode8'] = 'This file has not been submitted to Turnitin because there is a problem creating the temp file. The most likely cause is an invalid file name. Please rename the file and re-upload using Edit Submission.';
$string['errorcode9'] = 'The file cannot be submitted as there is no accessible content in the file pool to submit.';
$string['errors'] = 'Errors';
$string['excludebiblio'] = 'Exclude Bibliography';
$string['excludepercent'] = 'Percent';
$string['excludequoted'] = 'Exclude Quoted Material';
$string['excludevalue'] = 'Exclude Small Matches';
$string['excludewords'] = 'Words';
$string['faultcode'] = 'Fault Code';
$string['filedoesnotexist'] = 'File has been deleted';
$string['genduedate'] = 'Generate reports on due date (students can resubmit until due date)';
$string['genimmediately1'] = 'Generate reports immediately (students cannot resubmit)';
$string['genimmediately2'] = 'Generate reports immediately (students can resubmit until due date): After {$a->num_resubmissions} resubmissions, reports generate after {$a->num_hours} hours';
$string['grademark'] = 'GradeMark';
$string['id'] = 'Id';
$string['institutionalrepository'] = 'Institutional Repository (Where Applicable)';
$string['internetcheck'] = 'Check against internet';
$string['journalcheck'] = 'Check against journals,<br />periodicals and publications';
$string['launchpeermarkmanager'] = 'Launch Peermark Manager';
$string['launchpeermarkreviews'] = 'Launch Peermark Reviews';
$string['launchquickmarkmanager'] = 'Launch Quickmark Manager';
$string['launchrubricmanager'] = 'Launch Rubric Manager';
$string['launchrubricview'] = 'View the Rubric used for marking';
$string['line'] = 'Line';
$string['loadingdv'] = 'Loading Turnitin Document Viewer...';
$string['locked_message'] = 'Locked message';
$string['locked_message_default'] = 'This setting is locked at the site level';
$string['locked_message_help'] = 'If any settings are locked, this message is shown to say why.';
$string['message'] = 'Message';
$string['messageprovider:submission'] = 'Turnitin Plagiarism Plugin Digital Receipt notifications';
$string['module'] = 'Module';
$string['norepository'] = 'No Repository';
$string['norubric'] = 'No rubric';
$string['noscriptula'] = '(As you do not have javascript enabled you will have to manually refresh this page before you can make a submission after accepting the Turnitin User Agreement)';
$string['notavailableyet'] = 'Not available';
$string['notorcapable'] = 'It is not possible to produce an Originality Report for this file.';
$string['otherrubric'] = 'Use rubric belonging to other instructor';
$string['pending'] = 'Pending';
$string['pluginname'] = 'Turnitin plagiarism plugin';
$string['pp_configuredesc'] = 'You must configure this module within the turnitintooltwo module. Please click <a href={$a}/admin/settings.php?section=modsettingturnitintooltwo>here</a> to configure this plugin';
$string['pp_createsubmissionerror'] = 'There was an error trying to create the submission in Turnitin';
$string['ppcronsubmissionlimitreached'] = 'No further submissions will be sent to Turnitin by this cron execution as only {$a} are processed per run';
$string['pp_digital_receipt_message'] = 'Dear {$a->firstname} {$a->lastname},<br /><br />You have successfully submitted the file <strong>{$a->submission_title}</strong> to the assignment <strong>{$a->assignment_name}{$a->assignment_part}</strong> in the class <strong>{$a->course_fullname}</strong> on <strong>{$a->submission_date}</strong>. Your submission id is <strong>{$a->submission_id}</strong>. Your full digital receipt can be viewed and printed from the print/download button in the Document Viewer.<br /><br />Thank you for using Turnitin,<br /><br />The Turnitin Team';
$string['pperrorsdesc'] = 'There has been a problem in trying to upload the files below to Turnitin. To resubmit, select the files you wish to resubmit and press the resubmit button. These will then be processed the next time the cron is run.';
$string['pperrorsfail'] = 'There was a problem with some of the files you selected, A new cron event could not be created for them.';
$string['pperrorssuccess'] = 'The files you selected have been resubmitted and will be processed by the cron.';
$string['ppeventsfailedconnection'] = 'No events will be processed by the Turnitin plagiarism plugin by this cron execution as a connection to Turnitin can not be established.';
$string['ppqueuesize'] = 'Number of events in the Plagiarism Plugin events queue';
$string['pp_submission_error'] = 'Turnitin has returned an error with your submission:';
$string['ppsubmissionerrorseelogs'] = 'This file has not been submitted to Turnitin, please consult your system administrator';
$string['ppsubmissionerrorstudent'] = 'This file has not been submitted to Turnitin, please consult your tutor for further details';
$string['pp_updatesubmissionerror'] = 'There was an error trying to resubmit your submission to Turnitin';
$string['privacy:metadata:core_files'] = 'Turnitin Assignment stores files that have been uploaded to Moodle to form a Turnitin submission.';
$string['privacy:metadata:plagiarism_turnitin_client'] = 'To successfully make a submission to Turnitin, specific user data needs to be exchanged between Moodle and Turnitin.';
$string['privacy:metadata:plagiarism_turnitin_client:email'] = 'The user\'s email address is shared by Moodle to enable the creation of a Turnitin account.';
$string['privacy:metadata:plagiarism_turnitin_client:firstname'] = 'The user\'s first name is sent to Turnitin so that the user can be identified.';
$string['privacy:metadata:plagiarism_turnitin_client:lastname'] = 'The user\'s last name is sent to Turnitin so that the user can be identified.';
$string['privacy:metadata:plagiarism_turnitin_client:submission_filename'] = 'The name of the submitted file is sent to Turntin so that it is identifiable.';
$string['privacy:metadata:plagiarism_turnitin_client:submission_title'] = 'The title of the submission is sent to Turntin so that it is identifiable.';
$string['privacy:metadata:plagiarism_turnitin_files'] = 'Information that links a Moodle submission to a Turnitin submission.';
$string['privacy:metadata:plagiarism_turnitin_files:attempt'] = 'A timestamp indicating when the user viewed feedback on their submission.';
$string['privacy:metadata:plagiarism_turnitin_files:grade'] = 'The grade applied by an instructor to the submission.';
$string['privacy:metadata:plagiarism_turnitin_files:lastmodified'] = 'A timestamp indicating when the user last modified their submission.';
$string['privacy:metadata:plagiarism_turnitin_files:orcapable'] = 'Indicates whether Turnitin was able to produce an originality report for the user\'s submission.';
$string['privacy:metadata:plagiarism_turnitin_files:student_read'] = 'Indicates whether a student has read their feedback.';
$string['privacy:metadata:plagiarism_turnitin_files:submissionscore'] = 'The similarity score of the submission.';
$string['privacy:metadata:plagiarism_turnitin_files:transmatch'] = 'Indicates whether Turnitin used translated matching to produce a Similarity Report for the submission.';
$string['privacy:metadata:plagiarism_turnitin_files:userid'] = 'The ID of the user who has made a submission.';
$string['queued'] = 'Queued';
$string['reportgenspeed'] = 'Report Generation Speed';
$string['reportgenspeed_resubmission'] = 'You have already submitted a paper to this assignment and a Similarity Report was generated for your submission. If you choose to resubmit your paper, your earlier submission will be replaced and a new report will be generated. After {$a->num_resubmissions} resubmissions, you will need to wait {$a->num_hours} hours after a resubmission to see a new Similarity Report.';
$string['resubmitselected'] = 'Resubmit Selected Files';
$string['resubmitting'] = 'Resubmitting';
$string['resubmittoturnitin'] = 'Resubmit to Turnitin';
$string['saveusage'] = 'Save Data Dump';
$string['semptytable'] = 'No results found.';
$string['sendqueuedsubmissions'] = 'Send Queued Files from the Turnitin Plagiarism Plugin';
$string['sharedrubric'] = 'Shared Rubric';
$string['showusage'] = 'Show Data Dump';
$string['similarity'] = 'Similarity';
$string['spapercheck'] = 'Check against stored student papers';
$string['standardrepository'] = 'Standard Repository';
$string['student'] = 'Student';
$string['student_notread'] = 'The student has not viewed this paper.';
$string['student_read'] = 'The student viewed the paper on:';
$string['studentreports'] = 'Display Originality Reports to Students';
$string['studentreports_help'] = 'Allows you to display Turnitin originality reports to student users. If set to yes the originality report generated by Turnitin are available for the student to view.';
$string['submitondraft'] = 'Submit file when first uploaded';
$string['submitonfinal'] = 'Submit file when student sends for marking';
$string['submitpapersto'] = 'Store Student Papers';
$string['submitpapersto_help'] = '<strong>No Repository: </strong><br />Turnitin is instructed to not store submitted documents to any repository. We will only process the paper to perform the initial similarity check.<br /><br /><strong>Standard Repository: </strong><br />Turnitin will store a copy of the submitted document only in the Standard Repository. By choosing this option, Turnitin is instructed to only use stored documents to make similarity checks against any documents submitted in the future.<br /><br /><strong>Institutional Repository (Where Applicable): </strong><br />Choosing this option instructs Turnitin to only add submitted documents to a repository private to your institution. Similarity checks to the submitted documents will only be made by other instructors within your institution.';
$string['tiiassignmentgeterror'] = 'There was an error when trying to get an assignment from Turnitin';
$string['tiiexplain'] = 'Turnitin is a commercial product and you must have a paid subscription to use this service for more information see <a href=http://docs.moodle.org/en/Turnitin_administration>http://docs.moodle.org/en/Turnitin_administration</a>';
$string['tii_submission_failure'] = 'Please consult your tutor or system administrator for further details';
$string['tiisubmissiongeterror'] = 'There was an error when trying to get a submission from Turnitin';
$string['tiisubmissionsgeterror'] = 'There was an error when trying to get submissions for this assignment from Turnitin';
$string['transmatch'] = 'Translated Matching';
$string['turnitin'] = 'Turnitin';
$string['turnitinconfig'] = 'Turnitin Plagiarism Plugin Configuration';
$string['turnitindefaults'] = 'Turnitin plagiarism plugin default settings';
$string['turnitindeletionerror'] = 'Turnitin submission deletion failed. The local Moodle copy was removed but the submission in Turnitin could not be deleted.';
$string['turnitin:enable'] = 'Enable Turnitin';
$string['turnitinid'] = 'Turnitin ID';
$string['turnitinpluginsettings'] = 'Turnitin plagiarism plugin settings';
$string['turnitinppulapost'] = 'Your file has not been submitted to Turnitin. Please click here to accept our EULA.';
$string['turnitinppulapre'] = 'To submit a file to Turnitin you must first accept our EULA. Choosing to not accept our EULA will submit your file to Moodle only. Click here to accept.';
$string['turnitinrefreshingsubmissions'] = 'Refreshing Submissions';
$string['turnitinrefreshsubmissions'] = 'Refresh Submissions';
$string['turnitinstatus'] = 'Turnitin status';
$string['turnitintoolofflineerror'] = 'We are experiencing a temporary problem. Please try again shortly.';
$string['turnitintooltwo'] = 'Turnitin Tool';
$string['turnitin:viewfullreport'] = 'View Originality Report';
$string['updatereportscores'] = 'Update Report Scores for Turnitin Plagiarism Plugin';
$string['useturnitin'] = 'Enable Turnitin';
$string['useturnitin_mod'] = 'Enable Turnitin for {$a}';