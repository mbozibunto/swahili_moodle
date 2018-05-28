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
 * Strings for component 'block_advnotifications', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   block_advnotifications
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_notification_global_notice'] = 'This notification will be displayed globally/site-wide!';
$string['advnotifications'] = 'Advanced notifications';
$string['advnotifications_add_done'] = 'Done!';
$string['advnotifications_add_heading'] = 'New notification';
$string['advnotifications:addinstance'] = 'Add a new Advanced notifications block';
$string['advnotifications_add_option_announcement'] = 'Announcement';
$string['advnotifications_add_option_danger'] = 'Danger';
$string['advnotifications_add_option_info'] = 'Information';
$string['advnotifications_add_option_success'] = 'Success';
$string['advnotifications_add_option_warning'] = 'Warning';
$string['advnotifications_add_saving'] = 'Saving...';
$string['advnotifications_aicon'] = 'Display icon?';
$string['advnotifications_cancel'] = 'Cancel';
$string['advnotifications_cell_no'] = 'No';
$string['advnotifications_cell_yes'] = 'Yes';
$string['advnotifications_class'] = 'Block class:';
$string['advnotifications_cron_auto_delete'] = 'Add deleted flag to notifications that\'s passed their end-date...';
$string['advnotifications_cron_auto_delete_udata'] = 'Remove user records that relates to notifications that don\'t exist anymore...';
$string['advnotifications_cron_auto_perma_delete'] = 'Permanently delete notifications that\'s had the deleted flag for more than 30 days...';
$string['advnotifications_cron_heading'] = 'Cleaning advanced notifications';
$string['advnotifications_date_from'] = 'From:';
$string['advnotifications_date_info'] = 'Same date = forever';
$string['advnotifications_date_to'] = 'To:';
$string['advnotifications_delete_label'] = 'Delete';
$string['advnotifications_dismissible'] = 'Dismissible?';
$string['advnotifications_edit_label'] = 'Edit';
$string['advnotifications_enabled'] = 'Enable/Disable?';
$string['advnotifications_err_forbidden'] = 'Forbidden, please login again...';
$string['advnotifications_err_nojsedit'] = 'Editing only supported with JavaScript enabled. Re-create the desired notification or enable JavaScript and try again.';
$string['advnotifications_err_req'] = 'The following fields are required: {$a}';
$string['advnotifications_field_actions'] = 'Actions';
$string['advnotifications_field_aicon'] = 'Icon';
$string['advnotifications_field_date_from'] = 'From';
$string['advnotifications_field_date_to'] = 'To';
$string['advnotifications_field_dismissible'] = 'Dismissible';
$string['advnotifications_field_enabled'] = 'Enabled';
$string['advnotifications_field_global'] = 'Global';
$string['advnotifications_field_id'] = 'ID';
$string['advnotifications_field_times'] = 'View Times';
$string['advnotifications_field_title'] = 'Title';
$string['advnotifications_field_type'] = 'Type';
$string['advnotifications_global'] = 'Global notification?';
$string['advnotifications_join'] = '&';
$string['advnotifications:managenotifications'] = 'Manage notifications and the relative settings';
$string['advnotifications_message'] = 'Message';
$string['advnotifications:myaddinstance'] = 'Add a new Advanced notifications block to the my Moodle page';
$string['advnotifications_nav_heading'] = 'Notifications:';
$string['advnotifications_nav_manage'] = 'Manage';
$string['advnotifications_nav_restore'] = 'Restore';
$string['advnotifications_nav_settings'] = 'Settings';
$string['advnotifications_preview'] = 'Preview';
$string['advnotifications_req'] = 'Required field...';
$string['advnotifications_restore_label'] = 'Restore';
$string['advnotifications_restore_table_heading'] = 'Advanced notifications restore';
$string['advnotifications_restore_table_title'] = 'Restore notifications';
$string['advnotifications_restore_table_title_short'] = 'Restore notifications';
$string['advnotifications_restore_table_warning'] = '<strong>Warning!</strong> Deleting notifications from this table will permanently delete it from the database. We recommend using the auto-delete features of the plugin...';
$string['advnotifications_save'] = 'Save';
$string['advnotifications_table_empty'] = 'No notifications to show!';
$string['advnotifications_table_heading'] = 'Advanced notifications';
$string['advnotifications_table_title'] = 'Manage notifications';
$string['advnotifications_table_title_short'] = 'Manage';
$string['advnotifications_task_name'] = 'Advanced notifications';
$string['advnotifications_times'] = '# of times';
$string['advnotifications_times_label'] = 'Number of times to display the notification to the user (0 = forever)';
$string['advnotifications_title'] = 'Title';
$string['advnotifications_type'] = 'Type';
$string['advnotifications_update'] = 'Update';
$string['pluginname'] = 'Advanced notifications';
$string['setting/auto_delete'] = 'Auto delete:';
$string['setting/auto_delete_default'] = '';
$string['setting/auto_delete_desc'] = 'Toggles whether a notification that go past the set end-date is automatically deleted - but can be restored again.<br>(Helps with housekeeping/management)';
$string['setting/auto_delete_user_data'] = 'Auto delete user data:';
$string['setting/auto_delete_user_data_default'] = '';
$string['setting/auto_delete_user_data_desc'] = 'Toggles whether user data (such as whether the user has seen/dismissed notifications that don\'t exist anymore, etc) related to advanced notifications is automatically deleted.<br>(Helps with housekeeping/management)';
$string['setting/auto_perma_delete'] = 'Auto permanent delete:';
$string['setting/auto_perma_delete_default'] = '';
$string['setting/auto_perma_delete_desc'] = 'Toggles whether notifications that have been deleted for more than 30 days are automatically permanently deleted from the database.<br>(Helps with housekeeping/management)';
$string['setting/enable'] = 'Enable:';
$string['setting/enable_default'] = '';
$string['setting/enable_desc'] = 'Toggles whether all notifications are enabled/disabled';
$string['setting/navigation'] = 'Navigation:';
$string['setting/navigation_desc'] = '<div id="advnotifications_manage">{$a->manage}&nbsp;&nbsp;&nbsp;{$a->restore}</div>';
$string['setting/settings'] = 'Settings:';
