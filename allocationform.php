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
 * Strings for component 'allocationform', language 'en', branch 'MOODLE_32_STABLE'
 *
 * @package   allocationform
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Allocation form Access denied';
$string['add_option'] = 'Add new option';
$string['allocationform'] = 'Allocation form';
$string['allocationform:addinstance'] = 'Add a new allocation form';
$string['allocationform:edit'] = 'Edit allocation forms';
$string['allocationform_instructions'] = 'You must rank {$a->choices} options, you will be allocated to {$a->allocation} of the options. {$a->extratext}';
$string['allocationformname'] = 'Allocation form name';
$string['allocationformname_help'] = 'The name of this allocation form, it will be used to link to the form.';
$string['allocationform_notwant'] = 'You may select 1 option you do not wish to be allocated to.';
$string['allocationform:reallocate'] = 'Force a reallocation';
$string['allocationform:reopen'] = 'Allow a user to reopen an allocation form.';
$string['allocationform:viewallocations'] = 'View all the allocations made';
$string['allocationform:viewform'] = 'View allocation forms';
$string['allocations'] = 'Allocations';
$string['allocations_not_visible'] = 'Warning: the allocations can only be seen by editors until they are made available.';
$string['allocationviewed'] = 'Allocation form viewed';
$string['al_notwant'] = 'Do not want';
$string['al_notwant_help'] = 'Select an option that you do not wish to be allocated to';
$string['availabilityheading'] = 'Form availability';
$string['back_to_edit'] = 'Switch to edit mode';
$string['back_to_edit_warning'] = 'This will delete all information submitted to the form.';
$string['before_start'] = 'The start date of this allocation form has not yet passed.';
$string['choice'] = 'Choice {$a->choice}';
$string['choiceheading'] = 'Setup choices';
$string['choice_help'] = 'Select an option that you would wish to be allocated to.';
$string['cron'] = 'Background processing for Allocation forms';
$string['csvgenerated'] = 'CSV generated';
$string['currentstate'] = 'Current state:';
$string['deadline'] = 'Deadline';
$string['deadline_help'] = 'The latest time that users will be able to select their allocations, it is also the earliest time that a allocation form will be queued for the allocation process to happen.';
$string['deadline_message'] = 'The deadline for completing this form is: {$a->deadline}';
$string['deadline_passed'] = 'The deadline for this form has passed, if you make it active now it will begin processing immediately.';
$string['defaultrole'] = 'Default role';
$string['defaultrole_help'] = 'Set the default role that will be used for selecting users who will be allocated using the activity';
$string['deny_access'] = 'You do not have permission to view this allocation form.';
$string['disallow_list'] = 'Disallow list';
$string['disallow_list_help'] = 'All checked users will not be able to select {$a->option_name}';
$string['duplicate_choice'] = 'You may only select a choice one time';
$string['duplicateoption'] = 'Error: Your changes could not be saved to the database.  This is most likely due to a duplicate option name being entered';
$string['editingmode'] = 'Editing';
$string['form_allocation_error'] = 'ERROR in formid {$a->formid}:';
$string['form_allocation_error2'] = 'ERROR: Unable to allocate userid {$a->userid}';
$string['generate_allocation_csv'] = 'Generate csv of user allocations';
$string['generate_csv'] = 'Generate csv of user choices';
$string['invalidstate'] = 'An invalid state change was passed to the allocation form';
$string['make_active'] = 'Make the form active';
$string['modulename'] = 'Allocation form';
$string['modulename_help'] = 'The allocation form can be used to assign students to between one and ten options (for example modules, assignments, placements...)

The teacher defines:

* The list of options available to students.
* The number of students who can be assigned to an option.
* How many options students are assigned to (between one and ten)
* How many options a student can rank (between one and ten)
* If students are able to select an option that they do not wish to be allocated to.
* The last point at which students can submit a choice.

Warning: When switching the activity from active mode back into editing mode, any choices made by students will be deleted.

After the close date the form will attempt to do a \'best fit\' allocation of the students so that:

* As many students get assigned to options as high on their ranking as possible.
* Students will never be assigned to a choice they select as \'Do not want\'.
* Students will not be assigned to options that they have been restricted from selecting.
* Students who do not make a choice will be allocated last.

After the allocations have been processed teachers may:

* Review the result and ammend the number of students allocated to options before they release the results to students.
* Get a csv of the student choices.
* Get a csv of the allocations.';
$string['modulenameplural'] = 'Allocation forms';
$string['noallocationforms'] = 'No allocation forms found for this course';
$string['no_allocations'] = 'No allocations found';
$string['noformdatapassed'] = 'No form data was passed.  No update performed.';
$string['not_active'] = 'The allocation form is not available, please try again later.';
$string['not_enough_slots'] = 'Not enough slots are available for all the people eligible for assignment';
$string['notrequired'] = 'Not required';
$string['notsaved'] = 'Not saved, you do not have the required role.';
$string['not_set'] = 'You must make a choice';
$string['notwant'] = 'Include do not want';
$string['notwant_help'] = 'If selected a user will be given the oportunity to specify an option they do not wish to be allocated to';
$string['numberofallocations'] = 'Allocations per user';
$string['numberofallocations_help'] = 'The number of options a user will be allocated to';
$string['numberofchoices'] = 'Number of choices';
$string['numberofchoices_help'] = 'The number of options a user will have to choose';
$string['ok_to_continue'] = 'Are you sure you wish to continue?';
$string['optionedited'] = 'Option edited';
$string['option_form_header'] = 'New option';
$string['option_heading'] = 'Heading';
$string['option_heading_help'] = 'A heading to be displayed imediatly above this option.';
$string['option_list'] = 'Option list';
$string['option_maxallocation'] = 'Maximum allocations';
$string['option_maxallocation_help'] = 'The maximum number of people that can be allocated to this option.';
$string['option_maxallocation_invalid'] = 'Maximum allocations not set';
$string['option_name'] = 'Option name';
$string['option_name_help'] = 'The name of the option as it will be displayed to the user.';
$string['option_restricted'] = 'Restricted users';
$string['overviewclose'] = 'Close date: {$a->closedate}';
$string['overviewname'] = 'Allocation: {$a->link}';
$string['overviewready'] = 'Your allocation is available.';
$string['overviewreview'] = 'Ready for review. The people allocated cannot see the results.';
$string['people'] = 'Number of people to be allocated';
$string['permissionedited'] = 'Permission edited';
$string['pluginadministration'] = 'Allocation form administration';
$string['pluginname'] = 'Allocation forms (eForms)';
$string['processedmode'] = 'Processed';
$string['processmode'] = 'Processing';
$string['queued_for_processing'] = 'The allocation form is waiting to be processed... please come back later.';
$string['readymode'] = 'Active';
$string['reprocess'] = 'Force reallocation';
$string['reprocess_warning'] = 'This will delete all current allocations';
$string['requirechoice'] = 'Require choice';
$string['restrict'] = 'Restrict';
$string['restrictionsexceeded'] = 'You have exceeded the number of workable restrictions for {$a->users} user(s).  At least {$a->numberofchoices} available options are required per user.';
$string['reviewmode'] = 'Review';
$string['roleselect'] = 'Role to be allocated';
$string['roleselect_help'] = 'Select the role of users on this course that will be allocated using this form.';
$string['saved'] = 'Options saved, you may now return to the course';
$string['search:activity'] = 'Allocation form - activity information';
$string['show_allocations'] = 'Make allocations available';
$string['show_course'] = 'Go back to {$a->coursename}';
$string['slots'] = 'Number of spaces for allocation';
$string['startdate'] = 'Start date';
$string['startdate_help'] = 'The earliest time that users will be able to select their allocations.';
$string['statechanged'] = 'State changed';
$string['trackcompletion'] = 'Require choice submission to complete this activity?';
$string['unallocated'] = 'Unallocated';
