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
 * Strings for component 'local_contact', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   local_contact
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure'] = 'Configure this plugin';
$string['confirmationemail'] = '<p>Dear [fromname],</p>
<p>Thank you for contacting us. If required, we will be in touch with you very soon.</p>
<p>Regards,</p>
<p>[supportname]<br>
[sitefullname]<br>
<a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'Thank you for contacting us. If required, we will be in touch with you very soon.';
$string['confirmationsent'] = 'An email has been sent to your address at {$a}.';
$string['defaultsubject'] = 'New message';
$string['errorsending'] = 'An error occurred while sending the message. Please try again later.';
$string['errorsendingtitle'] = 'Failed to send e-mail';
$string['extrainfo'] = '<hr>
<p><strong>Additional User Information</strong></p>
<ul>
    <li><strong>Site user:</strong> [userstatus]</li>
    <li><strong>Preferred language:</strong> [lang]</li>
    <li><strong>From IP address:</strong> [userip]</li>
    <li><strong>Web browser:</strong> [http_user_agent]</li>
    <li><strong>Web Form:</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'email';
$string['field-message'] = 'message';
$string['field-name'] = 'name';
$string['field-subject'] = 'subject';
$string['forbidden'] = 'Forbidden';
$string['globalhelp'] = 'Contact Form is a plugin for Moodle that allows your site to process information submitted through HTML web forms to the site\'s support email address.';
$string['lockedout'] = 'LOCKED OUT';
$string['loginrequired'] = 'Login required';
$string['loginrequired_description'] = 'Only allow logged-in users to submit the Contact forms. Guests are not considered to be logged-in.';
$string['norecaptcha'] = 'No ReCAPTCHA';
$string['norecaptcha_description'] = 'Don\'t use ReCAPTCHA with forms procesed by Contact form.';
$string['nosubjectsitename'] = 'Site name in email subject field';
$string['nosubjectsitename_description'] = 'Do not include site name in email subject field.';
$string['notconfirmed'] = 'NOT CONFIRMED';
$string['pluginname'] = 'Contact Form';
$string['privacy:metadata'] = 'The Contact Form plugin does not store any personal data about any user.';
$string['recapchainfo'] = 'Using ReCAPTCHA';
$string['recapchainfo_description'] = 'ReCAPTCHA is currently enabled in Moodle. You <strong>must</strong>:<br>
<ul>
  <li>Ensure that the {recaptcha} tag is included in all forms processed by Contact Form for Moodle.</li>
  <li>Ensure that the <a href="https://moodle.org/plugins/filter_filtercodes">FilterCodes plugin</a> is installed and enabled.</li>
</ul>';
$string['recipient_list'] = 'List of available recipients';
$string['recipient_list_description'] = 'You can configure a list of potential recipients here, any of which can be used in a Contact Form to specify the email recipient using a hidden text field, or in a select dropdown list to allow users to select the recipient without divulging the recipient\'s actual email address. If the list is empty, emails will be sent to the Moodle email address, either the support email address or the primary Moodle administrator.
Each line must consists of a unique text alias/label, a single email address and a name, each separated by pipe characters. For example:
<pre>
tech support|support@example.com|Joe Fixit
webmaster|admin@example.com|Mr. Moodle
electrical|nikola.tesla@example.com|Nikola
history|charles.darwin@example.com|Mr. Darwin
law|issac.newton@example.com|Isaac Newton
math|galileo.galilei@example.com|Galileo
english|mark.twain@example.com|Mark Twain
physics|albert.einstein@example.com|Albert
science|thomas.edison@example.com|Mr. Edison
philosophy|aristotle@example.com|Aristotle
</pre>';
