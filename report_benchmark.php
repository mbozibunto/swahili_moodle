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
 * Strings for component 'report_benchmark', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   report_benchmark
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'System Benchmark';
$string['benchfail'] = '<b>Watch out!</b><br />Your Moodle seems to have some difficulties.';
$string['benchmark'] = 'Benchmark';
$string['benchmark:view'] = 'View the report Benchmark';
$string['benchshare'] = 'Share my score on the forum';
$string['benchsuccess'] = '<b>Congratulations!</b><br />Your Moodle seems to work perfectly.';
$string['cloadmoreinfo'] = 'Run the configuration file &laquo;config.php&raquo;';
$string['cloadname'] = 'Moodle loading time';
$string['coursereadmoreinfo'] = 'Test the read speed to read a course';
$string['coursereadname'] = 'Reading course';
$string['coursewritemoreinfo'] = 'Test the database speed to write a course';
$string['coursewritename'] = 'Writing course';
$string['description'] = 'Description';
$string['during'] = 'Time in seconds';
$string['filereadmoreinfo'] = 'Test the read speed in Moodle\'s temporary folder';
$string['filereadname'] = 'Reading files';
$string['filewritemoreinfo'] = 'Test the write speed in Moodle\'s temporary folder';
$string['filewritename'] = 'Creating files';
$string['info'] = 'This benchmark has to last no more than 1 minute; it stops at 2 minutes. Please wait until results show up.';
$string['infoaverage'] = 'We invite you to take this test several times to have the average.';
$string['infodisclamer'] = 'It isn\'t advisable to run this benchmark on a platform in production.';
$string['limit'] = 'Acceptable limit';
$string['loginguestmoreinfo'] = 'Measuring the time to load the login page with the guest account';
$string['loginguestname'] = 'Time to connect with the guest account';
$string['loginusermoreinfo'] = 'Measuring the time to load the login page with a fake user account';
$string['loginusername'] = 'Time to connect with a fake user account';
$string['modulename'] = 'Moodle Benchmark';
$string['modulenameplural'] = 'Moodle Benchmarks';
$string['over'] = 'Critical limit';
$string['pluginname'] = 'Moodle Benchmark';
$string['points'] = '{$a} points';
$string['processormoreinfo'] = 'A function is called in a loop to test processor speed';
$string['processorname'] = 'Function called many times';
$string['querytype1moreinfo'] = 'Test the database speed to execute a complex request';
$string['querytype1name'] = 'Complex request (n°1)';
$string['querytype2moreinfo'] = 'Test the database speed to execute a complex request';
$string['querytype2name'] = 'Complex request (n°2)';
$string['redo'] = 'Start the test again';
$string['score'] = 'Score';
$string['scoremsg'] = 'Benchmark Score :';
$string['seconde'] = '{$a} sec.';
$string['slowdatabaselabel'] = 'The database is too slow.';
$string['slowdatabasesolution'] = '<ul><li>Check <a href="http://dev.mysql.com/doc/refman/5.7/en/mysqlcheck.html" target="_blank">the database integrity</a></li><li>Optimze <a href="http://dev.mysql.com/doc/refman/5.7/en/server-parameters.html" target="_blank">the database</a></li></ul>';
$string['slowharddrivelabel'] = 'The harddrive is too slow.';
$string['slowharddrivesolution'] = '<ul><li>Check the harddrive state / temp folder</li><li>Change your harddrive or the temporary folder</li></ul>';
$string['slowprocessorlabel'] = 'Your processor is too slow.';
$string['slowprocessorsolution'] = '<ul><li>Check that the equipment is enough to run Moodle.</li></ul>';
$string['slowserverlabel'] = 'Your web server is too slow.';
$string['slowserversolution'] = '<ul><li>Set your Apache in <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">multi-processing</a> mode or switch on <a href="https://nginx.org/" target="_blank">NGinx</a>.</li><li>If your Moodle is installed on your computer, you can try to deactivate your antivirus where Moodle is located. Do it with precaution.</li></ul>';
$string['slowweblabel'] = 'The page is too slow to upload.';
$string['slowwebsolution'] = '<ul><li>Clear the Moodle cache</a></li></ul>';
$string['start'] = 'Start the test';
$string['total'] = 'Total time';
