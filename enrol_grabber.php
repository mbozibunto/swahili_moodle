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
 * Strings for component 'enrol_grabber', language 'en', branch 'MOODLE_30_STABLE'
 *
 * @package   enrol_grabber
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alreadygrabbedinstance'] = 'This enrol instance is already grabbed by a grabbed enrol method in this course.';
$string['assignrole'] = 'Assign role';
$string['browsecohorts'] = 'Browse cohorts';
$string['browseusers'] = 'Browse users';
$string['cantusewithoutinstances'] = 'Can\'t use this enrol method without other enrol instances for this course';
$string['confirmbulkdeleteenrolment'] = 'Are you sure you want to delete these users enrolments?';
$string['defaultstart'] = 'Default enrolment start';
$string['deleteback'] = 'While deleting this instance, restore all enrollments of this instance to the associated enrol method';
$string['deleteback_desc'] = 'While deleting this instance, restore all enrollments of this instance to the associated enrol method';
$string['deleteselectedusers'] = 'Delete selected user enrolments';
$string['editselectedusers'] = 'Edit selected user enrolments';
$string['enrolledincourserole'] = 'Enrolled in "{$a->course}" as "{$a->role}"';
$string['enrolusers'] = 'Enrol users to grabber instance';
$string['grabber:config'] = 'Configure grabber enrol instances';
$string['grabber:delete'] = 'Delete grabber instance';
$string['grabber:enrol'] = 'Enrol users';
$string['grabberenrolinstance'] = 'enrol instance to grab (same course)';
$string['grabber:manage'] = 'Manage user enrolments';
$string['grabber:unenrol'] = 'Unenrol users from the course';
$string['grabber:unenrolself'] = 'Unenrol self from the course';
$string['pluginname'] = 'Enrolments grabber';
$string['pluginname_desc'] = 'The grabber enrolment plugin enables to retrieve enrolments from an other enrolment instance in the same course. It also enables , one enrolments grabbed, to manually proceed to enrolment/unenrolment.';
$string['status'] = 'Enable Grabber enrolments';
$string['status_desc'] = 'Allow course access of internally enrolled users. This should be kept enabled in most cases.';
$string['statusdisabled'] = 'Disabled';
$string['statusenabled'] = 'Enabled';
$string['status_help'] = 'This setting determines whether users can be enrolled manually, via a link in the course administration settings, by a user with appropriate permissions such as a teacher.';
$string['unenrol'] = 'Unenrol user';
$string['unenrolselectedusers'] = 'Unenrol selected users';
$string['unenroluser'] = 'Do you really want to unenrol "{$a->user}" from course "{$a->course}"?';
$string['unenrolusers'] = 'Unenrol users';
