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
 * Strings for component 'qtype_coderunner', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   qtype_coderunner
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aborted'] = 'Testing was aborted due to error.';
$string['ace-language'] = 'Ace language';
$string['addingcoderunner'] = 'Adding a new CodeRunner Question';
$string['advanced_customisation'] = 'Advanced customisation';
$string['ajax_error'] = '*** AJAX ERROR. DON\'T SAVE THIS! ***';
$string['allok'] = 'Passed all tests!';
$string['allornone'] = 'Test code must be provided either for all testcases or for none.';
$string['allornothing'] = 'All-or-nothing grading';
$string['allornothing_help'] = 'If \'All-or-nothing\' is checked, all test cases must be satisfied for the submission to earn any marks. Otherwise, the mark is obtained by summing the marks for all the test cases that pass and expressing this as a fraction of the maximum possible mark.

The per-test-case marks can be specified only if the all-or-nothing checkbox is unchecked.

If using a template grader that awards part marks to test cases, \'All-or-nothing\' should generally be unchecked.';
$string['allowmultiplestdins'] = 'Allow multiple stdins';
$string['answer'] = 'Answer';
$string['answerbox_group'] = 'Answer box';
$string['answerbox_group_help'] = 'Set the number of rows to allocate for the answer box. The width is set to fit the window. If the answer overflows the box vertically or horizontally, scrollbars will appear.';
$string['answerboxlines'] = 'Rows';
$string['answer_help'] = 'A sample answer can be entered here and used for checking by the question author and optionally shown to students during review. It is also used by the bulk tester script. The correctness of a non-empty answer is checked when saving unless \'Validate on save\' is unchecked';
$string['answerpreload'] = 'Answer box preload';
$string['answerpreload_help'] = 'Text supplied here will be preloaded into the student\'s answer box.';
$string['answerprompt'] = 'Answer:';
$string['answerrequired'] = 'Please provide a non-empty answer';
$string['asolutionis'] = 'Question author\'s solution:';
$string['atleastonetest'] = 'You must provide at least one test case for this question.';
$string['autotagbycategoryindextitle'] = 'CodeRunner question autotagger';
$string['autotagbycategorytitle'] = 'CodeRunner autotag by category';
$string['badacelangstring'] = 'Bad Ace-language string';
$string['badcputime'] = 'CPU time limit must be left blank or must be an integer greater than zero';
$string['bad_dotdotdot'] = 'Misuse of \'...\'. Must be at end, after two increasing numeric penalties';
$string['bademptyprecheck'] = 'Precheck failed with the following unexpected output.';
$string['bad_empty_splitter'] = 'Test splitter cannot be empty when using a combinator template';
$string['badjsonfunc'] = 'Unknown JSON embedded func ({$a->func})';
$string['badjsonorfraction'] = 'Bad JSON or missing fraction in combinator grader output. Output was: {$a->output}';
$string['badmemlimit'] = 'Memory limit must either be left blank or must be a non-negative integer';
$string['bad_new_prototype_name'] = 'Illegal name for new prototype: already in use';
$string['badpenalties'] = 'Penalty regime must be a comma separated list of numbers in the range [0, 100]';
$string['badquestion'] = 'Error in question';
$string['badrandomintarg'] = 'Bad argument to JSON @randomint function';
$string['badrandompickarg'] = 'Bad argument to JSON @randompic function';
$string['badsandboxparams'] = '\'Other\' field (sandbox params) must be either blank or a valid JSON record';
$string['badtemplateparams'] = 'Template parameters must be either blank or a valid JSON record';
$string['badtemplateparamsaftertwig'] = 'Twigging of template parameters yielded invalid JSON: <pre>{$a}</pre>';
$string['brokencombinator'] = 'Expected {$a->numtests} test results, got {$a->numresults}. Perhaps excessive output or error in question?';
$string['brokentemplategrader'] = 'Bad output from grader: {$a->output}. Your program execution may have aborted (e.g. a timeout or memory limit exceeded).';
$string['bulkquestiontester'] = 'The <a href="{$a->link}">bulk tester script</a> tests that the sample answers for all questions in the current context are marked right';
$string['bulktestcontinuefromhere'] = 'Run again or resume, starting from here';
$string['bulktestindextitle'] = 'CodeRunner bulk testing';
$string['bulktestrun'] = 'Run all the question tests for all the questions in the system (slow, admin only)';
$string['bulktesttitle'] = 'Running all the question tests in {$a}';
$string['coderunner'] = 'Program Code';
$string['coderunnercategories'] = 'Categories with CodeRunner questions';
$string['coderunnercontexts'] = 'Contexts with CodeRunner questions';
$string['coderunner_help'] = 'In response to a question, which is a specification for a program fragment, function or whole program, the respondent enters source code in a specified computer language that satisfies the specification.';
$string['coderunner_install_testsuite_failures'] = 'Tests that failed';
$string['coderunner_install_testsuite_intro'] = 'This page allows you to test that the CodeRunner questions with sample answers are functioning correctly.';
$string['coderunner_install_testsuite_noanswer'] = 'Questions without sample answers';
$string['coderunner_install_testsuite_title'] = 'A test suite for CodeRunner sample answers';
$string['coderunner_install_testsuite_title_desc'] = 'The <a href="{$a->link}">sample-answer-test script</a> verifies that the questions with sample answers are performing correctly.';
$string['coderunner_link'] = 'question/type/coderunner';
$string['coderunner_question_type'] = 'CodeRunner question type:';
$string['coderunnersettings'] = 'CodeRunner settings';
$string['coderunnersummary'] = 'Answer is program code that is executed in the context of a set of test cases to determine its correctness.';
$string['coderunnertype'] = 'Question type';
$string['coderunnertype_help'] = 'Select the programming language and question type. Once a type has been selected, details can be seen in the Question type details panel below.';
$string['columncontrols'] = 'Result table';
$string['columncontrols_help'] = 'The checkboxes select which columns of the results table should be displayed to the student after submission';
$string['confirm_proceed'] = 'If you save this question with \'Customise\' unchecked, any customisations made will be lost. Proceed?';
$string['confirmreset'] = 'Discard all your work on this question and reset answer box to original preloaded value?';
$string['cputime'] = 'TimeLimit (secs)';
$string['customisation'] = 'Customisation';
$string['customisationcontrols'] = 'Customisation';
$string['customise'] = 'Customise';
$string['datafiles'] = 'Run-time data';
$string['datafiles_help'] = 'Any files uploaded here will be added to the working directory when the expanded template program is executed. This allows large data or support files to be conveniently added.';
$string['default_penalty_regime'] = 'Default penalty regime';
$string['default_penalty_regime_desc'] = 'The default penalty regime to apply to new questions, consisting of a comma separated list of penalty percentages, optionally ending in ", ..." to signify an on-going arithmetic progression.';
$string['display'] = 'Display';
$string['downloadquizattempts'] = 'Download quiz attempts';
$string['downloadquizattemptshelp'] = 'Click the appropriate course and/or download button
        for the course and quiz you wish to download. Numbers in parentheses
        after courses are the number of quizzes in the course with at least
        one submission. The numbers in parentheses after the quiz name
        are the numbers of submissions.';
$string['editingcoderunner'] = 'Editing a CodeRunner Question';
$string['empty_new_prototype_name'] = 'New question type name cannot be empty';
$string['emptypenaltyregime'] = 'Penalty regime must be defined (since version 3.1)';
$string['enable'] = 'Enable';
$string['enablecombinator'] = 'Enable combinator';
$string['enable_diff_check'] = 'Enable \'Show differences\' button';
$string['enable_diff_check_desc'] = 'Present students with a \'Show differences\' button if their answer is wrong and an exact-match validator is being used (experimental)';
$string['enable_sandbox_desc'] = 'Permit use of the specified sandbox for running student submissions';
$string['equalitygrader'] = 'Exact match';
$string['error_loading_prototype'] = 'Error loading prototype. Network problems or server down, perhaps?';
$string['errorstring-accessdenied'] = 'Access to sandbox denied';
$string['errorstring-autherror'] = 'Unauthorised to use sandbox';
$string['errorstring-jobe400'] = 'Error from Jobe sandbox server:';
$string['errorstring-ok'] = 'OK';
$string['errorstring-overload'] = 'Job could not be run due to server overload. Perhaps try again shortly?';
$string['errorstring-pastenotfound'] = 'Requesting status of non-existent job';
$string['errorstring-submissionfailed'] = 'Submission to sandbox failed';
$string['errorstring-submissionlimitexceeded'] = 'Sandbox submission limit reached';
$string['errorstring-unknown'] = 'Unexpected error while executing your code. The sandbox server may be down or overloaded. Perhaps try again shortly?';
$string['errorstring-wronglangid'] = 'Non-existent language requested';
$string['expected'] = 'Expected output';
$string['expectedcolhdr'] = 'Expected';
$string['expected_help'] = 'The expected output from the test. Seen by the template as {{TEST.expected}}.';
$string['exportthisquestion'] = 'Export this question';
$string['exportthisquestion_help'] = 'This will create a Moodle XML export file containing just this one question. One example of when this is useful if you think this question demonstrates a bug in CodeRunner that you would like to report to the developers.';
$string['extra'] = 'Extra template data';
$string['extra_help'] = 'A sometimes-useful extra text field for use by the template, accessed as {{TEST.extra}}';
$string['fail'] = 'Fail';
$string['failedhidden'] = 'Your code failed one or more hidden tests.';
$string['failedntests'] = 'Failed {$a->numerrors} test(s)';
$string['failedtesting'] = 'Failed testing.';
$string['fails'] = 'failures';
$string['fileheader'] = 'Support files';
$string['filloutoneanswer'] = 'You must enter source code that satisfies the specification. The code you enter will be executed to determine its correctness and a grade awarded accordingly.';
$string['firstfailure'] = 'First failing test case: {$a}';
$string['forexample'] = 'For example';
$string['goodemptyprecheck'] = 'Passed';
$string['gotcolhdr'] = 'Got';
$string['grader'] = 'Grader';
$string['grading'] = 'Grading';
$string['gradingcontrols'] = 'Grading controls';
$string['gradingcontrols_help'] = 'The default \'exact match\' grader
awards marks only if the output from the run exactly matches the expected value defined
by the testcase. Trailing white space is stripped from all lines, and any trailing
blank lines are deleted, before the
equality test is made.

The near-equality grader is similar except that it
also collapses multiple spaces and tabs to a single space, deletes all blank
lines and converts the strings to lower case.

The \'regular expression\' grader uses the \'expected\'
field of the test case as a regular expression and tests the output to see
if a match to the expected result can be found anywhere within the output.
To force matching of the entire output, start and end the regular expression
with \'\\A\' and \'\\Z\' respectively. Regular expression matching uses MULTILINE
and DOTALL options.

The \'template grader\' option assumes that the output
from the program is actually a
grading result, i.e. that the template not tests *and grades* the student answer.
The only output from such a template program must be a JSON-encoded record.

If the template is a per-test template (i.e., not a combinator), the JSON string must describe a row of the
results table and should contain at least a \'fraction\' field, which is multiplied by TEST.mark to decide how
many marks the test case is awarded. It should usually also contain a \'got\'
field, which is the value displayed in the \'Got\' column of the results table.
The other columns of the results table (testcode, stdin, expected) can also
be defined by the template grading program and will be used instead of the values from
the testcase. As an example, if the output of the program is the string
`{"fraction":0.5, "got": "Half the answers were right!"}`, half marks would be
given for that particular test case and the \'Got\' column would display the
text "Half the answers were right!". Other columns can be added to the result
table by adding extra attributes to the JSON record and also to the question\'s
Result Columns field.

If the template is a combinator, the JSON string output by the template grader
should again contain a \'fraction\' field, this time for the total mark,
and may contain zero or more of \'prologuehtml\', \'testresults\',
\'epiloguehtml\', \'columnformats\' and \'showdifferences\'.
The \'prologuehtml\' and \'epiloguehtml\' fields are html
that is displayed respectively before and after the (optional) result table. The
\'testresults\' field, if given, is a list of lists used to display some sort
of result table. The first row is the column-header row and all other rows
define the table body. Two special column header values exist: \'iscorrect\'
and \'ishidden\'. The \'iscorrect\' column(s) are used to display ticks or
crosses for 1 or 0 row values respectively. The \'ishidden\' column isn\'t
actually displayed but 0 or 1 values in the column can be used to turn on and
off row visibility. Students do not see hidden rows but markers and other
staff do. If a \'testresults\' table is supplied an optional
\'columnformats\' field can also be supplied. This should be a list
of strings, one per column excluding the \'iscorrect\' and the \'ishidden\'
columns. The strings specify the format to be used to display the cell values;
currently the only supported formats are \'%s\' for a normal string display
(which is sanitised and wrapped in a \'pre\' element) and \'%h\' for an html
value that should not be further processed before display.
The \'showdifferences\' field turns on display of a \'Show Differences\'
button after the results table if the awarded mark fraction is not 1.0.';
$string['graphhelp'] = '- Double click at a blank space to create a new node/state.
- Double click an existing node to "mark" it e.g. as an accept state for Finite State Machines
  (FSMs). Double click again to unmark it.
- Click and drag to move a node.
- Shift click inside one node and drag to another to create a link.
- Shift click on a blank space, drag to a node to create a start link (FSMs only).
- Click and drag a link to alter its curve.
- Click on a link/node to edit its text.
- Typing _ followed by a digit makes that digit a subscript.
- Typing \\epsilon creates an epsilon character (and similarly for \\alpha, \\beta etc).
- Click on a link/node then press the Delete key to remove it (or function-delete on a Mac).';
$string['hidden'] = 'Hidden';
$string['HIDE'] = 'Hide';
$string['hidedifferences'] = 'Hide differences';
$string['HIDE_IF_FAIL'] = 'Hide if fail';
$string['HIDE_IF_SUCCEED'] = 'Hide if succeed';
$string['hiderestiffail'] = 'Hide rest if fail';
$string['hoisttemplateparams'] = 'Hoist template parameters';
$string['howtogetmore'] = 'For more detailed information, save the question with \'Validate on save\' unchecked and test manually';
$string['ideone_pass'] = 'Ideone server password';
$string['ideone_pass_desc'] = 'The password to use when connecting to the deprecated Ideone server (if the ideone sandbox is enabled)';
$string['ideone_user'] = 'Ideone server user';
$string['ideone_user_desc'] = 'The login name to use when connecting to the deprecated Ideone server (if the ideone sandbox is enabled)';
$string['illegalformat'] = 'Illegal format ({$a->format}) in columnformats';
$string['info_unavailable'] = 'Question type information is not available for customised questions.';
$string['inputcolhdr'] = 'Input';
$string['iscombinatortemplate'] = 'Is combinator';
$string['is_prototype'] = 'Use as prototype';
$string['jobe_apikey'] = 'Jobe API-key';
$string['jobe_apikey_desc'] = 'The API key to be included in all REST requests to the Jobe server (if required). Max 40 chars. Leave blank to omit the API Key from requests';
$string['jobe_host'] = 'Jobe server';
$string['jobe_host_desc'] = 'The host name of the Jobe server plus the port number if other than port 80, e.g. jobe.somewhere.edu:4010. The URL for the Jobe request is obtained by prefixing this string with http:// and appending /jobe/index.php/restapi/<REST_METHOD>.';
$string['language'] = 'Sandbox language';
$string['languages'] = 'Languages';
$string['languageselectlabel'] = 'Language';
$string['languages_help'] = 'The sandbox language is the computer language used
to run the submission.
It must be known to the chosen sandbox (if a specific one has been
selected) or to at least one of the enabled sandboxes (otherwise).
This should not usually need altering from the value in the
parent template; tweak it at your peril.

Ace-language is the
language used by the Ace code editor (if enabled) for the student\'s answer.
By default this is the same as the sandbox language; enter a different
value here only if the template language is different from the language
that the student is expected to write (e.g. if a Python preprocessor is
used to validate a student\'s C program prior to running it).

Multi-language questions, that is questions that students can answer in
more than language, are enabled by setting the Ace-language to a comma-separated
list of languages. Students are then presented with a drop-down menu to select
the language in which their answer is written. If exactly one of the languages
has an asterisk (\'*\') prepended, that language is chosen as the default language,
which is selected as the initial state of the drop-down menu. For example,
an Ace-language value of "C,C++,Java*,Python3" would allow student to submit in
C, C++, Java or Python3 but the drop-down menu would initially show Java which
would be the default. If no default is specified the
initial state of the drop-down is empty and the student must choose a language.
Multilanguage questions require a special template that uses the {{LANGUAGE}}
template variable to control how to execute the student code. See the built-in
sample multilanguage question type. The {{LANGUAGE}} variable is defined
<i>only</i> for multilanguage questions.

If the author wishes to supply a sample answer to a multilanguage question,
they must write it in either the default language, if specified, or the
first of the allowed languages otherwise.';
$string['mark'] = 'Mark';
$string['marking'] = 'Mark allocation';
$string['markinggroup'] = 'Marking';
$string['markinggroup_help'] = 'If \'All-or-nothing\' is checked, all test cases must be satisfied
for the submission to earn any marks. Otherwise, the mark is obtained
by summing the marks for all the test cases that pass
and expressing this as a fraction of the maximum possible mark.
The per-test-case marks can be specified only if the all-or-nothing
checkbox is unchecked. If using a template grader that awards
part marks to test cases, \'All-or-nothing\' should generally be unchecked.

The mandatory penalty regime is a comma-separated list of penalties (each a percent)
to apply to successive submissions. These are absolute, not cumulative. As a
special case the last penalty can be \'...\' to mean "extend the previous
two penalties as an arithmetic progression up to 100". For example,
`0,5,10,30,...` is equivalent to `0,5,10,30,50,70,90,100`.
If there are more submissions than defined penalties, the last value is used.

The default penalty regime can be set site-wide by a system administrator using
Site administration > Plugins > Question types > CodeRunner.

Set the penalty regime to \'0\' for zero penalties on all submissions.';
$string['memorylimit'] = 'MemLimit (MB)';
$string['missinganswers'] = 'missing answers';
$string['missingoutput'] = 'You must supply the expected output from this test case.';
$string['missingprototype'] = 'Prototype for question type \'{$a->crtype}\' does not exist or is unavailable in this context';
$string['missingprototypes'] = 'Missing prototypes';
$string['morehidden'] = 'Some hidden test cases failed, too.';
$string['multipledefaults'] = 'At most one language can be selected as default';
$string['multipleprototypes'] = 'Multiple prototypes found for \'{$a->crtype}\\';
$string['nearequalitygrader'] = 'Nearly exact match';
$string['negativeorzeromark'] = 'Mark must be greater than zero';
$string['nodetailsavailable'] = 'Select a question type to see detailed help.';
$string['noerrorsallowed'] = 'Your code must pass all tests to earn any marks. Try again.';
$string['nonnumericmark'] = 'Non-numeric mark';
$string['noqtype'] = 'No question type selected';
$string['nosampleanswer'] = 'No sample answer';
$string['options'] = 'Options';
$string['ordering'] = 'Ordering';
$string['overallresult'] = 'Overall result';
$string['pass'] = 'Pass';
$string['passes'] = 'passes';
$string['penaltyregime'] = '(penalty regime: {$a} %)';
$string['penaltyregimelabel'] = 'Penalty regime:';
$string['pluginname'] = 'CodeRunner';
$string['pluginnameadding'] = 'Adding a CodeRunner question';
$string['pluginnameediting'] = 'Editing a CodeRunner question';
$string['pluginname_help'] = 'Use the \'Question type\' combo box to select the
computer language and question type that will be used to run the student\'s submission.
Specify the problem that the student must write code for, then define
a set of tests to be run on the student\'s submission';
$string['pluginname_link'] = 'question/type/coderunner';
$string['pluginnamesummary'] = 'CodeRunner: runs student-submitted code in a sandbox';
$string['precheck'] = 'Precheck';
$string['precheck_all'] = 'All';
$string['precheck_disabled'] = 'Disabled';
$string['precheck_empty'] = 'Empty';
$string['precheck_examples'] = 'Examples';
$string['precheck_help'] = 'If Precheck is enabled, students will have an extra button to the left of the
usual check button to give them a penalty-free run to check their code against
a subset of the question test cases.

If \'Empty\' is selected, a single run
will be done with the per-test template using a testcase in which all the
fields (testcode, stdin, expected, etc) are the empty string. Non-empty output
is deemed to be a precheck failure. Use with caution:
some question types will not handle this correctly, e.g. write-a-program questions
that generate output.

If \'Examples\' is selected, the code will
be tested against all the tests for which \'use_as_example\' has been checked.

If \'Selected\' is selected, an extra UI element is added to each test case
to allow the author to select a specific subset of the tests.

If \'All\' is selected, all test cases are run (although their behaviour might
be different from the normal Check, if the template code so chooses).

The template can check whether or not the run is a precheck run using the
Twig parameter {{ IS_PRECHECK }}, which is "1" during precheck runs and
"0" otherwise.';
$string['precheckingemptyset'] = 'Prechecking examples, but there aren\'t any!';
$string['precheck_only'] = 'Precheck only';
$string['precheck_selected'] = 'Selected';
$string['proceed_at_own_risk'] = 'Editing a built-in question prototype?! Proceed at your own risk!';
$string['prototypecontrols'] = 'Prototyping';
$string['prototypecontrols_help'] = 'If \'Is prototype\' is true, this question becomes a prototype for other questions.
After saving, the specified question type name will appear in the dropdown list
of question types. New questions based on this type will then by default inherit
all the customisation attributes specified for this question. Subsequent changes
to this question will then affect all derived questions unless they are
themselves customised, which breaks the connection.

Prototypal inheritance is
single-level only, so this question, when saved as a prototype, loses its
connection to its original base type, becoming a new base type in its own right.
Be warned that when exporting derived questions you must ensure that this
question is included in the export, too, or the derived question will be an
orphan when imported into another system. Also, you are responsible for keeping
track of which questions you are using as prototypes; it is strongly recommended
that you rename the question to something like \'PROTOTYPE_for_my_new_question_type\'
to make subsequentmaintenance easier.';
$string['prototype_error'] = '*** PROTOTYPE LOAD FAILURE. DON\'T SAVE THIS! ***';
$string['prototype_load_failure'] = 'Error loading prototype:';
$string['prototypeQ'] = 'Is prototype?';
$string['prototypeusage'] = 'CodeRunner question prototype usage for course {$a}';
$string['prototypeusageindex'] = 'Available courses';
$string['qtypehelp'] = 'Help with q-type';
$string['questioncheckboxes'] = 'Customisation';
$string['questioncheckboxes_help'] = 'To customise the question type, e.g. to edit the question templates or
sandbox parameters, click the \'Customise\'
checkbox and read the help available on the newly-visible form elements for
more information.

If the template-debugging checkbox is clicked, the program generated
for each testcase will be displayed in the output.';
$string['questionloaderror'] = 'Failed to load question';
$string['questionpreview'] = 'Question preview';
$string['questiontype'] = 'Question type';
$string['question_type_changed'] = 'Changing question type. Click OK to reload customisation fields, Cancel to retain your customised ones.';
$string['questiontypedetails'] = 'Question type details';
$string['questiontype_help'] = 'Select the particular type of question.

The combo-box selects one of the built-in types, each of which
specifies a particular language and, sometimes, a sandbox in which
the program will be executed. Each question type has a
template that defines how the executable program is built from the
testcase data and the student answer.

The template can be viewed and optionally customised by clicking
the \'Customise\' checkbox.

If the template-debugging checkbox is clicked, the program generated
for each testcase will be displayed in the output.';
$string['questiontype_required'] = 'You must select the type of question';
$string['qWrongBehaviour'] = 'Please use Adaptive Behaviour for all CodeRunner questions, or there can be massive performance hits. For example, all questions on a page will need to be regraded when the page is re-displayed.';
$string['regexgrader'] = 'Regular expression';
$string['replacedollarscount'] = 'This category contains {$a} CodeRunner questions.';
$string['replaceexpectedwithgot'] = 'Click on the &lt;&lt; button to replace the expected output of this testcase with actual output.';
$string['reset'] = 'Reset answer';
$string['resethover'] = 'Discard changes and reset answer to original preloaded value';
$string['resultcolumns'] = 'Result columns';
$string['resultcolumns_help'] = 'By default the result table displays the testcode, stdin, expected and got
columns, provided the columns are not empty. You can change the default, and/or
the column headers by entering a value for the resultcolumns (leave blank for
the default behaviour).

If supplied, the resultcolumns field must be a
JSON-encoded list of column specifiers. Each column specifier is itself a list,
typically with just two or three elements. The first element is the column
header, the second element is the field from the TestResult object being
displayed in the column and the optional third element is an sprintf format
string used to display the field.

The fields available in the standard
TestResult object are: testcode, stdin, expected, got, extra, awarded, and mark.
testcode, stdin, expected and extra are the fields from the testcase while got
is the actual output generated and awarded and mark are the actual awarded mark
and the maximum mark for the testcase respsectively.

Per-test template-graders may
add their own fields, which can also be selected for display. It is also
possible to combine multiple fields into a column by adding extra fields to the
specifier: these must precede the sprintf format specifier, which then becomes
mandatory. For example, to display a Mark Fraction column in the form 0.74/1.00,
say, a column format specifier of ["Mark Fraction", "awarded", "mark",
"%.2f/%.2f"] could be used.

As a further special case, a format of %h means that
the test result field should be taken as ready-to-output HTML and should not be
subject to further processing; this is useful only with custom-grader templates
that generate HTML output, such as SVG graphics.

The default value of
resultcolumns is [["Test", "testcode"],["Input", "stdin"], ["Expected",
"expected"], ["Got", "got"]].

The setting of the resultcolumns field has no effect if a combinator template
grader is being used. The \'resulttablecolumnformats\' attribute of the
combinator template grader return value should be used instead.';
$string['resultcolumnsnotjson'] = 'Result columns field is not a valid JSON string';
$string['resultcolumnsnotlist'] = 'Result columns field must a JSON-encoded list of column specifiers';
$string['resultcolumnspecbad'] = 'Invalid column specifier found: each one must be a list of two or more strings';
$string['resultstring-abnormaltermination'] = 'Abnormal termination';
$string['resultstring-compilationerror'] = 'Compilation error';
$string['resultstring-illegalsyscall'] = 'Illegal function call';
$string['resultstring-internalerror'] = 'CodeRunner error (IE): please tell a tutor';
$string['resultstring-memorylimit'] = 'Memory limit exceeded';
$string['resultstring-norun'] = 'No run';
$string['resultstring-outputlimit'] = 'Excessive output';
$string['resultstring-runtimeerror'] = 'Error';
$string['resultstring-sandboxoverload'] = 'Sandbox server overload. Perhaps try again soon?';
$string['resultstring-sandboxpending'] = 'CodeRunner error (PD): please tell a tutor';
$string['resultstring-sandboxpolicy'] = 'CodeRunner error (BP): please tell a tutor';
$string['resultstring-success'] = 'OK';
$string['resultstring-timelimit'] = 'Time limit exceeded';
$string['run_failed'] = 'Failed to run tests';
$string['sandboxcontrols'] = 'Sandbox';
$string['sandboxcontrols_help'] = 'Select what sandbox to use for running the student submissions.
DEFAULT uses the highest priority sandbox available for the chosen language.
Since Jobe has replaced all sandbox
types except the deprecated \'ideonesandbox\',
the value \'jobesandbox\' is recommended for normal use, and results in better
error messages that DEFAULT if the Jobe server is down.

You can also set the
maximum CPU time in seconds  allowed for each testcase run and the maximum
memory a single testcase run can consume (MB). A blank entry uses the sandbox\'s
default value (typically 5 secs for the CPU time limit and a language-dependent
amount of memory), but the defaults may not be suitable for resource-demanding
programs. A value of zero for the maximum memory results in no limit being
imposed. The amount of memory specified here is the total amount needed for
the run including all libraries, interpreters, VMs etc.

The \'Parameters\' entry
is used to pass further sandbox-specific data, such as compile options and
API-keys. It should generally be left blank but if non-blank it must be a valid
JSON record. In the case of the jobe sandbox, available attributes include
disklimit, streamsize, numprocs, compileargs, linkargs and interpreterargs. For
example `{"compileargs":["-std=c89"]}` for a C question would force C89
compliance and no other C options would be used. See the jobe documentation
for details. Some sandboxes (e.g. the deprecated Ideone sandbox) may silently ignore any or all of
these settings.

If the sandbox is set to \'jobesandbox\', the jobe host to use for testing the
question is
usually as specified via the administrator settings for the CodeRunner plugin.
However, it is possible to select a different jobeserver by defining a \'jobeserver\'
parameter and also, optionally, a \'jobeapikey\' parameter. For example, if the
\'Parameters\' field is set to `{"jobeserver": "myspecialjobe.com"}, the run
will instead by submitted to the server "myspecialjobe.com". Warning: this
feature is still experimental and may change in the future.';
$string['sandboxerror'] = 'Error from the sandbox [{$a->sandbox}]: {$a->message}';
$string['sandboxparams'] = 'Parameters';
$string['seethisquestioninthequestionbank'] = 'See this question in the question bank';
$string['SHOW'] = 'Show';
$string['showcolumns'] = 'Show columns:';
$string['showcolumns_help'] = 'Select which columns of the results table should
be displayed to students. Empty columns will be hidden regardless.
The defaults are appropriate for most uses.';
$string['showdifferences'] = 'Show differences';
$string['showsource'] = 'Template debugging';
$string['sourcecodeallruns'] = 'Debug: source code from all test runs';
$string['stdin'] = 'Standard Input';
$string['stdin_help'] = 'The standard input to the test, seen by the template as {{TEST.stdin}}';
$string['student_answer'] = 'Student answer';
$string['supportscripts'] = 'Support scripts';
$string['syntax_errors'] = 'Syntax Error(s)';
$string['template'] = 'Template';
$string['template_changed'] = 'Per-test template changed - disable combinator? [\'Cancel\' leaves it enabled.]';
$string['templatecontrols'] = 'Template controls';
$string['templatecontrols_help'] = 'Checking the \'Is combinator\' checkbox
specifies that the template is a combinator template, which combines (or attempts
to combine) the student answer plus all test cases into a single run. If this
checkbox is checked, you will also need to define the value of the test_splitter_re
field, which is the PHP regular expression used to split the output from the
program run back into a set of individual test runs. However, you do not need
to define this if you\'re also using a template grader, as in that case the
template code is responsible for splitting the output itself, and grading it.

Combinator templates do not get passed a TEST Twig variable. Instead they
receive a variable TESTCASES, which is a list of all the tests in the
question. The program produced by the template is generally assumed to combine the
STUDENT_ANSWER and all the TESTCASES into a single program which, when it is run,
outputs the test results from each test case, separated by a unique string.
The separator string is defined by a regular expression given by the form
field \'test_splitter_re\' below.

However, if testcases have standard input defined, combinator templates become
problematic. If the template constructs a single program, what should the standard
input be? The simplest (and default) solution is to
run the test cases one at a time, using the combinator template to build
each program, passing it a TESTCASES variable containing just a single test.
This \'trick\' allows the combinator template to serve a dual role: it behaves
as a per-test-case template (with a 1-element TESTCASES array) when the question
author supplies standard input but as a proper combinator (with an n-element
TESTCASES array) otherwise. To change this behaviour so that the combinator
receives all testcases, even when stdin is present, check the \'Allow multiple
stdins\' checkbox.

If a run of the combinator program results in any output to stderr, that
is interpreted as a run error. To ensure the student gets credit for as many
valid tests as possible, the system behaves as it does when standard input
is present, falling back to running each test separately. This does not
apply to combinator graders, however, which are required to deal with all
runtime errors themselves and must always return a valid JSON outcome.';
$string['templateerror'] = 'TEMPLATE ERROR';
$string['templategrader'] = 'Template grader';
$string['template_help'] = 'The template defines the program(s) that run in the sandbox for a given
student answer and test(s). There are two
types of template:

* a per-test template, which defines a program to be run for a single test case and,
* a \'combinator\' template which defines a program that combines all the different cases into a single program.

The \'is_combinator\' checkbox is left unchecked for a per-test template and is
set checked for a combinator template. The rest of this help panel assumes you
are using a per-test template; see the full documentation for the use of
combinator templates.

The template is processed
by the Twig template engine (see http://twig.sensiolabs.org)
in a context in which STUDENT_ANSWER is the student\'s
response and TEST.testcode is the code for the current testcase. These values
(and other testcase values like TEST.expected, TEST.stdin, TEST.mark)
can be inserted into the template by enclosing them in double braces, e.g.
`{{TEST.testcode}}`. For use within literal strings, an appropriate escape
function should be applied, e.g. `{{STUDENT_ANSWER | e(\'py\')}}` is the student
answer escaped in a manner suitable for use within Python triple-double-quoted
strings. Other escape functions are `e(\'c\')`, `e(\'java\')`, `e(\'matlab\')`. The
program that is output by Twig is then compiled and executed
with the language of the selected built-in type and with stdin set
to TEST.stdin. Output from that program is then passed to the selected grader.
See the help under \'Grading controls\' for more on that.

Note that if a customised per-test template is used
there will be a compile-and-execute cycle for every test case, whereas most
built-in question types define instead a combinator template that combines
all test cases into a single run.

If the template-debugging checkbox is clicked, the program generated
for each testcase will be displayed in the output.';
$string['templateparams'] = 'Template params';
$string['templateparams_help'] = 'The template parameters field lets you pass string parameters to a question\'s
template(s). If non-blank, this must be a JSON-format record. The fields of
the record can then be used within the template, where they appear as
QUESTION.parameters.&lt;&lt;param&gt;&gt;. For example, if template params is

        {"age": 23}

the value 23 would be substituted into the template in place of the
template variable `{{ QUESTION.parameters.age }}`.

The set of template parameters passed to the template consists of any template
parameters defined in the prototype with the question template parameters
merged in. Question parameters can thus override prototype parameters, but not
delete them.

Template parameters can also be used to provide randomisation within a question.
When the question is first instantiated the template parameters are passed
through the Twig template engine to yield the final JSON version.
Twig\'s "random" function can
be used to assign random values to template parameters. If the "Twig All" checkbox
is checked, all other fields of the question (question text, answer, test cases
etc) are the also processed by Twig, with the template parameters as an
environment. This can result in different
students seeing different random variants of the question. See the documentation
for details.';
$string['testcase'] = 'Test case {$a}';
$string['testcasecontrols'] = 'Test properties:';
$string['testcasecontrols_help'] = 'If \'Use as example\' is checked, this test will be automatically included in the
question\'s \'For example:\' results table.

The \'Display\' combobox determines when this testcase is shown to the student
in the results table.

If \'Hide rest if fail\' is checked and this test fails, all subsequent tests will
be hidden from the student, regardless of the setting of the \'Display\' combobox.

\'Mark\' sets the value of this test case; meaningful only if this is not an
\'All-or-nothing\' question.

\'Ordering\' can be used to change the order of testcases when the question is
saved: testcases are ordered by this field.';
$string['testcases'] = 'Test cases';
$string['testcode'] = 'Test code';
$string['testcode_help'] = 'The code for the test, seen by the template as {{TEST.testcode}}';
$string['testcolhdr'] = 'Test';
$string['testingquestion'] = 'Testing question {$a}';
$string['testsplitterre'] = 'Test splitter (regex)';
$string['testtype'] = 'Precheck test type';
$string['testtype_both'] = 'Both';
$string['testtype_help'] = 'If Prechecking is enabled and set to \'selected\', this setting controls whether
the test is used only with a normal run, only with a precheck run or in both runs.
If Prechecking is set to anything other than \'selected\', this setting is
ignored.';
$string['testtype_normal'] = 'Check only';
$string['testtype_precheck'] = 'Precheck only';
$string['tooshort'] = 'Answer is too short to be meaningful and has been ignored without penalty';
$string['twigall'] = 'Twig all';
$string['twigcontrols'] = 'Twig controls';
$string['twigcontrols_help'] = 'Template parameters are normally referred to during Twig expansion in the form
{{QUESTION.parameters.someparam}} However, if the Hoist Template Parameters
checkbox is checked, the parameters are hoisted into the Twig global name space
and can be referenced simply as {{someparam}}.

The Twig macro processor was traditionally applied only to the template. It is now
applied to the template parameters as well and, if Twig All is checked, to the
question text, sample answer, answer preload and all test case fields, using
the Twig-expanded template parameters as an environment. You will usually
need to turn on TwigAll if using randomisation within the template parameters';
$string['twigerror'] = 'Twig error {$a}';
$string['twigerrorintest'] = 'Twig error when processing this test {$a}';
$string['type_header'] = 'CodeRunner question type';
$string['typename'] = 'Question type';
$string['typerequired'] = 'Please select the type of question (language, format, etc)';
$string['uicontrols'] = 'Input UIs';
$string['uicontrols_help'] = 'Select the User Interface controllers for the student answer and
the question author\'s template.

The Student Answer dropdown displays a list
of available plugins. For coding questions, the Ace editor is usually used.
A value of \'None\' can be used to provide just a raw text box. The value
\'Graph\' provides the user with a simple graph-drawing user-interface for use
with questions that ask the student to draw a graph to some specification; such
questions will usually have a single test case, graded with a template
that analyses the serialised
representation of the graph and prints a message like "OK" if the answer is
correct or a suitably informative error message otherwise.
Template parameters can be set in either the prototype or the
actual question to modify the behaviour of the Graph plugin as follows:
{"isdirected": false} for non-directed graphs, {"isfsm": false} to disallow
incoming edges without a start node (required by Finite State Machine graphs, FSMs),
{"noderadius": 30}, say, to set a different noderadius in pixels.
The template parameters
from the actual question are merged with, and override, those from the
prototype (since CodeRunner V3.2.2).

Students with poor eyesight, or authors wishing to inspect serialisations
(say to understand the representation used by the Graph UI),
can toggle the use of all UI plugins on the current page by typing
Ctrl-Alt-M.

Whatever value is selected for the student answer will also be used within
the editor form for the Sample Answer and the Answer Preload fields.

If \'Template uses ace\' is checked,
the Ace code editor will manage both the template and the template parameters
boxes. Otherwise a raw text box will be used.';
$string['uiloadfail'] = 'UI plugin load failed.';
$string['unauthorisedbulktest'] = 'You do not have suitable access to any CodeRunner questions';
$string['unauthoriseddbaccess'] = 'You are not authorised to use this script';
$string['unknowncombinatorgraderfield'] = 'Unknown field name ({$a->fieldname}) in combinator grader output';
$string['unknownerror'] = 'An unexpected error occurred. The sandbox may be down. Try again shortly.';
$string['useace'] = 'Template uses ace';
$string['useasexample'] = 'Use as example';
$string['validateonsave'] = 'Validate on save';
$string['wrongnumberofformats'] = 'Wrong number of test results column formats. Expected {$a->expected}, got {$a->got}';
$string['xmlcoderunnerformaterror'] = 'XML format error in coderunner question';
