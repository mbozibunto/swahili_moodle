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
 * Strings for component 'repository_personalyoutube', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   repository_personalyoutube
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Client ID';
$string['configplugin'] = 'Configuration for personal YouTube repository';
$string['issuer'] = 'OAuth 2 service';
$string['issuer_help'] = 'Select the OAuth 2 service that is configured to talk to the YouTube API. If the service does not exist yet, you will need to create it.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 services configuration">OAuth 2 services configuration</a>';
$string['oauthinfo'] = '<p>To use this plugin, you must register your site with Google, as described in the documentation <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>As part of the registration process, you will need to enter the following URL as \'Authorized Redirect URIs\':</p><p>{$a->callbackurl}</p><p>Once registered, you will be provided with a client ID and secret which can be used to configure all Google Services plugins.</p><p>Please also note that you will have to enable the service \'YouTube API\'.</p>';
$string['personalyoutube:view'] = 'View personal YouTube repository';
$string['pluginname'] = 'Personal YouTube';
$string['pluginname_help'] = 'Upload and publish personal YouTube Videos';
$string['search'] = 'Search';
$string['secret'] = 'Secret';
$string['servicenotenabled'] = 'Access not configured. Make sure the service \'YouTube API\' is enabled.';
$string['uploads'] = 'Uploads';
