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
 * Strings for component 'studentquiz', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   studentquiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_comment'] = 'Add comment';
$string['approve'] = 'Approve';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Approved';
$string['approveselectedscheck'] = 'Are you sure you want to un-/approve the following questions?<br /><br />{$a}';
$string['approve_toggle'] = 'Un/Approve';
$string['average_column_name'] = 'Average';
$string['comment_column_name'] = 'Comments';
$string['comment_help'] = 'Write a comment';
$string['comment_help_help'] = 'Write a comment to the question';
$string['createnewquestion'] = 'Create new question';
$string['createnewquestionfirst'] = 'Create first question';
$string['creator_anonym_firstname'] = 'Anonymous';
$string['creator_anonym_lastname'] = 'Student';
$string['difficulty_all_column_name'] = 'Community Difficulty';
$string['difficulty_level_column_name'] = 'Difficulty';
$string['emailapprovedbody'] = 'Dear {$a->recepientname},

Your question \'{$a->questionname}\' in course \'{$a->coursename}\' in StudentQuiz activity \'{$a->modulename}\' has been approved by \'{$a->actorname}\' at \'{$a->timestamp}\'.

You can review this question at: {$a->questionurl}.';
$string['emailapprovedsmall'] = 'Your question \'{$a->questionname}\' has been approved by {$a->actorname}.';
$string['emailapprovedsubject'] = 'Question has been approved: {$a->questionname}';
$string['emailchangedbody'] = 'Dear {$a->recepientname},

Your question \'{$a->questionname}\' in course \'{$a->coursename}\' in StudentQuiz activity \'{$a->modulename}\' has been modified by \'{$a->actorname}\' at \'{$a->timestamp}\'.

You can review this question at: {$a->questionurl}.';
$string['emailchangedsmall'] = 'Your question \'{$a->questionname}\' has been modified by {$a->actorname}.';
$string['emailchangedsubject'] = 'Question has been modified: {$a->questionname}';
$string['emailcommentaddedbody'] = 'Dear {$a->recepientname},

Your question \'{$a->questionname}\' in StudentQuiz activity \'{$a->modulename}\' in course \'{$a->coursename}\' has been commented by \'{$a->actorname}\' at \'{$a->timestamp}\'.

The comment is: \'{$a->commenttext}\'

You can review this question at: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'Your question \'{$a->questionname}\' has been commented by {$a->username}.';
$string['emailcommentaddedsubject'] = 'Question has been commented: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Dear {$a->recepientname},

The comment on \'{$a->commenttime}\' to your question \'{$a->questionname}\' in StudentQuiz activity \'{$a->modulename}\' in course \'{$a->coursename}\' has been deleted by \'{$a->actorname}\' at \'{$a->timestamp}\'.

The comment was: \'{$a->commenttext}\'

You can review this question at: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'The comment to your question \'{$a->questionname}\' has been deleted by {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'Comment has been deleted to question: {$a->questionname}';
$string['emaildeletedbody'] = 'Dear {$a->recepientname},

Your question \'{$a->questionname}\' in StudentQuiz activity \'{$a->modulename}\' in course \'{$a->coursename}\' has been deleted by \'{$a->actorname}\' at \'{$a->timestamp}\'.';
$string['emaildeletedsmall'] = 'Your question \'{$a->questionname}\' has been deleted by {$a->actorname}.';
$string['emaildeletedsubject'] = 'Question has been deleted: {$a->questionname}';
$string['emailminecommentdeletedbody'] = 'Dear {$a->recepientname},

Your comment on \'{$a->commenttime}\' to the question \'{$a->questionname}\' in StudentQuiz activity \'{$a->modulename}\' in course \'{$a->coursename}\' has been deleted by \'{$a->actorname}\' at \'{$a->timestamp}\'.

The comment was: \'{$a->commenttext}\'

You can review this question at: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'Your comment to question \'{$a->questionname}\' has been deleted by {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Comment has been deleted to question: {$a->questionname}';
$string['emailunapprovedbody'] = 'Dear {$a->recepientname},

The approval of your question \'{$a->questionname}\' in StudentQuiz activity \'{$a->modulename}\' in course \'{$a->coursename}\' has been revoked by \'{$a->actorname}\' at \'{$a->timestamp}\'.

You can review this question at: {$a->questionurl}.';
$string['emailunapprovedsmall'] = 'The approval of your question \'{$a->questionname}\' has been revoked by {$a->actorname}.';
$string['emailunapprovedsubject'] = 'Question approval has been revoked: {$a->questionname}';
$string['filter'] = 'Filter';
$string['filter_ishigher'] = 'Is higher';
$string['filter_islower'] = 'Is lower';
$string['filter_label_approved'] = 'Approved questions';
$string['filter_label_comment'] = 'Comments';
$string['filter_label_createdate'] = 'Creation';
$string['filter_label_difficulty_level'] = 'Difficulty';
$string['filter_label_fast_filters'] = 'Fast filter for questions';
$string['filter_label_firstname'] = 'Firstname';
$string['filter_label_myattempts'] = 'My attempts';
$string['filter_label_mydifficulty'] = 'My difficulty';
$string['filter_label_mylastattempt'] = 'My latest attempt';
$string['filter_label_myrate'] = 'My Rating';
$string['filter_label_onlyapproved'] = 'Approved';
$string['filter_label_onlyapproved_help'] = 'Questions approved by your teacher';
$string['filter_label_onlydifficult'] = 'Difficult for all';
$string['filter_label_onlydifficultforme'] = 'Difficult for me';
$string['filter_label_onlydifficultforme_help'] = 'Question with my difficulty of more than {$a}%';
$string['filter_label_onlydifficult_help'] = 'Question with an average difficulty of more than {$a}%';
$string['filter_label_onlygood'] = 'Good';
$string['filter_label_onlygood_help'] = 'Question with an average rating of at at least {$a} stars';
$string['filter_label_onlymine'] = 'Mine';
$string['filter_label_onlymine_help'] = 'Questions you created.';
$string['filter_label_onlynew'] = 'Unanswered';
$string['filter_label_onlynew_help'] = 'Questions you have never answered before';
$string['filter_label_practice'] = 'Attempts';
$string['filter_label_question'] = 'Question title';
$string['filter_label_questiontext'] = 'Question content';
$string['filter_label_rates'] = 'Rating';
$string['filter_label_show_mine'] = 'My questions';
$string['filter_label_surname'] = 'Lastname';
$string['filter_label_tags'] = 'Tag';
$string['finish_button'] = 'Finish';
$string['lastattempt_right'] = '✓';
$string['lastattempt_wrong'] = '✗';
$string['latest_column_name'] = 'Latest';
$string['messageprovider:approved'] = 'Question approved notification';
$string['messageprovider:changed'] = 'Question changed notification';
$string['messageprovider:commentadded'] = 'Comment added notification';
$string['messageprovider:commentdeleted'] = 'Comment deleted notification';
$string['messageprovider:deleted'] = 'Question deleted notification';
$string['messageprovider:minecommentdeleted'] = 'My comment deleted notification';
$string['messageprovider:unapproved'] = 'Question unapproved notification';
$string['mine_column_name'] = 'Mine';
$string['modulename'] = 'StudentQuiz';
$string['modulename_help'] = 'The StudentQuiz activity allows students to add questions for the crowd. In the StudentQuiz overview the students can filter questions. They also can use the filtered questions in the crowd to practice. The teacher has an option to anonymize the created by column.<br><br>The StudentQuiz activity awards the students with points to motivate them to add and practice. The Points are listed in a ranking table.<br><br>For more information read the <a href="https://studentquiz.hsr.ch/docs/">StudentQuiz documentation</a>.';
$string['modulenameplural'] = 'StudentQuizzes';
$string['myattempts_column_name'] = 'My Attempts';
$string['mydifficulty_column_name'] = 'My Difficulty';
$string['mylastattempt_column_name'] = 'My Last Attempt';
$string['myrate_column_name'] = 'My Rating';
$string['nav_export'] = 'Export';
$string['nav_import'] = 'Import';
$string['needtoallowatleastoneqtype'] = 'You need to allow at least one question type';
$string['next_button'] = 'Next';
$string['no_comment'] = 'n.a.';
$string['no_comments'] = 'No comments';
$string['no_difficulty_level'] = 'n.a.';
$string['no_myattempts'] = 'n.a.';
$string['no_mydifficulty'] = 'n.a.';
$string['no_mylastattempt'] = 'n.a.';
$string['no_myrate'] = 'n.a.';
$string['no_practice'] = 'n.a.';
$string['no_questions_add'] = 'There are no questions in this StudentQuiz. Feel free to add some questions.';
$string['no_questions_filter'] = 'None of the questions matched your filter criteria. Reset the filter to see all.';
$string['no_questions_selected_message'] = 'Please select at least one question to start the quiz.';
$string['no_rates'] = 'n.a.';
$string['no_tags'] = 'n.a.';
$string['not_approved'] = '✗';
$string['number_column_name'] = 'Number';
$string['pagesize'] = 'Page size:';
$string['please_enrole_message'] = 'Please enroll in this course to see your personal progress';
$string['pluginadministration'] = 'StudentQuiz Administration';
$string['pluginname'] = 'StudentQuiz';
$string['practice_column_name'] = 'Attempts';
$string['previous_button'] = 'Previous';
$string['progress_bar_caption'] = 'Your progress in this StudentQuiz activity';
$string['questions'] = 'questions';
$string['questionsinuse'] = '(* Questions marked by an asterisk are already in use in some quizzes.)';
$string['ranking_block_title'] = 'Ranking';
$string['rankingsettingsdescription'] = 'The values you set here define the ranking default values that are used in the settings form when you create a new studentquiz.';
$string['rankingsettingsheader'] = 'Ranking settings';
$string['rate_all_column_name'] = 'Community Rating';
$string['rate_column_name'] = 'Rating';
$string['rate_error'] = 'Please Rate';
$string['rate_help'] = 'Rate this question';
$string['rate_help_help'] = 'Rate this question. \\n 1 star is very bad and 5 stars is very good';
$string['rate_points'] = 'Points';
$string['rate_title'] = 'Rate';
$string['reportquiz_admin_title'] = 'Student statistics';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Community average of last correct answers';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Community average of last incorrect answers';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Community percentage of correct answers';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Sum of correct answers / sum of all answers.';
$string['reportquiz_stats_all_progress'] = 'Average Community Progress';
$string['reportquiz_stats_all_progress_help'] = 'Average community progress based on all community members.';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Community average of correct answers';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Community average of incorrect answers';
$string['reportquiz_stats_all_questions_answered'] = 'Community average of all answers';
$string['reportquiz_stats_all_questions_answered_help'] = 'Average number of answers given by all community members.';
$string['reportquiz_stats_all_questions_approved'] = 'Number of approved questions';
$string['reportquiz_stats_all_questions_approved_help'] = 'Teachers can approve questions to verify correctness. This is the number of all approved questions within this StudentQuiz.';
$string['reportquiz_stats_all_questions_created'] = 'Number of questions in this StudentQuiz';
$string['reportquiz_stats_all_questions_created_help'] = 'Number of questions created by the community';
$string['reportquiz_stats_all_rates_average'] = 'Rating average of all questions';
$string['reportquiz_stats_all_rates_average_help'] = 'The rating of each question is the average of stars it received from the community.  Example: The community created 4 questions. If  question A was rated 3 stars by the community, question B = 4 stars, question C = 2 stars and question D = 5 stars, then the rating average of all questions is 3.5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Number of your last correct answers';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Number of your last incorrect answers';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Percentage of your correct answers';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Percentage of all your correct answers from the set of all your given answers in this StudentQuiz. Partly correct answers count as wrong answers.';
$string['reportquiz_stats_own_progress'] = 'Personal Progress';
$string['reportquiz_stats_own_progress_help'] = 'Percentage of your last correct answers from the set of all questions within this StudentQuiz. Partly correct answers count as wrong answers.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Total of your correct answers';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Total of your incorrect answers';
$string['reportquiz_stats_own_questions_answered'] = 'Total of all your answers';
$string['reportquiz_stats_own_questions_answered_help'] = 'Number of all your given answers within this StudentQuiz.';
$string['reportquiz_stats_own_questions_approved'] = 'Number of your approved questions';
$string['reportquiz_stats_own_questions_approved_help'] = 'Teachers can approve questions to verify correctness. This is the number of your approved questions within this StudentQuiz.';
$string['reportquiz_stats_own_questions_created'] = 'Number of questions you have contributed';
$string['reportquiz_stats_own_questions_created_help'] = 'Number of questions you have contributed to this StudentQuiz.';
$string['reportquiz_stats_own_rates_average'] = 'Your received rating average';
$string['reportquiz_stats_own_rates_average_help'] = 'The rating of each question is the average of stars it received from the community.  Example: You created the questions A and B. If your question A was rated 3 stars by the community and your question B was rated 4 stars, then your received rating average is 3.5.';
$string['reportquiz_stats_title'] = 'Statistics';
$string['reportquiz_total_attempt'] = 'Times user run the quiz';
$string['reportquiz_total_obtained_marks'] = 'Grade total';
$string['reportquiz_total_questions_answered'] = 'Total of answers';
$string['reportquiz_total_questions_right'] = 'Total of correct answers';
$string['reportquiz_total_questions_wrong'] = 'Wrong answers';
$string['reportquiz_total_users'] = 'Number of participants';
$string['reportrank_table_column_approvedquestions'] = 'Points for approved questions';
$string['reportrank_table_column_communitystatus'] = 'Community Statistics';
$string['reportrank_table_column_correctanswers'] = 'Correct answers';
$string['reportrank_table_column_countquestions'] = 'Points for questions created';
$string['reportrank_table_column_description'] = 'Description';
$string['reportrank_table_column_factor'] = 'Factor';
$string['reportrank_table_column_fullname'] = 'Fullname';
$string['reportrank_table_column_incorrectanswers'] = 'Incorrect Answers';
$string['reportrank_table_column_lastcorrectanswers'] = 'Points for latest correct attemps';
$string['reportrank_table_column_lastincorrectanswers'] = 'Points for latest wrong attempts';
$string['reportrank_table_column_points'] = 'Points';
$string['reportrank_table_column_progress'] = 'Personal progress';
$string['reportrank_table_column_quantifier_name'] = 'Name';
$string['reportrank_table_column_rank'] = 'Rank';
$string['reportrank_table_column_summeanrates'] = 'Points for stars received';
$string['reportrank_table_column_total_points'] = 'Total Points';
$string['reportrank_table_column_value'] = 'Value';
$string['reportrank_table_column_yourstatus'] = 'Personal Statistics';
$string['reportrank_table_quantifier_caption'] = 'How your points are calculated';
$string['reportrank_table_title'] = 'Student ranking - Top 10';
$string['reportrank_table_title_for_manager'] = 'Student ranking';
$string['reportrank_title'] = 'Ranking';
$string['review_button'] = 'Review';
$string['settings_allowallqtypes'] = 'Allow all question types';
$string['settings_allowedqtypes'] = 'Allowed question types';
$string['settings_allowedqtypes_help'] = 'Here you specify the type of questions that are allowed';
$string['settings_anonymous'] = 'Student anonymizer';
$string['settings_anonymous_help'] = 'Students cannot see each other’s names.';
$string['settings_anonymous_label'] = 'Make students anonymous';
$string['settings_approvedquantifier'] = 'Approved question factor';
$string['settings_approvedquantifier_help'] = 'Points for each approved question';
$string['settings_approvedquantifier_label'] = 'Points for each question approved';
$string['settings_lastcorrectanswerquantifier'] = 'Latest correct answer factor';
$string['settings_lastcorrectanswerquantifier_help'] = 'Points for each correct answer on the last attempt';
$string['settings_lastcorrectanswerquantifier_label'] = 'Points for latest correct answers';
$string['settings_lastincorrectanswerquantifier'] = 'Latest wrong answer factor';
$string['settings_lastincorrectanswerquantifier_help'] = 'Points for each wrong or partially wrong answer on the last attempt';
$string['settings_lastincorrectanswerquantifier_label'] = 'Points for latest wrong answers';
$string['settings_questionquantifier'] = 'Created question factor';
$string['settings_questionquantifier_help'] = 'Points for each created question';
$string['settings_questionquantifier_label'] = 'Points for each question created';
$string['settings_quizpracticebehaviour'] = 'Rating and commenting';
$string['settings_quizpracticebehaviour_help'] = 'Allow students to rate and comment questions during the quiz attempt';
$string['settings_quizpracticebehaviour_label'] = 'Rating and commenting';
$string['settings_ratequantifier'] = 'Rating factor';
$string['settings_ratequantifier_help'] = 'Points for each star received.';
$string['settings_ratequantifier_label'] = 'Multiplier for the average of stars received for a question';
$string['settings_removeqbehavior'] = 'Remove question behavior plugin StudentQuiz';
$string['settings_removeqbehavior_help'] = 'This info should appear only once during update. We inform you that we detected our question behavior plugin StudentQuiz is installed. This plugin is not required anymore and thus we try to automatically remove it. If you still see this setting, please uninstall the question behavior plugin StudentQuiz manually <a href="{$a}">here</a>.';
$string['settings_removeqbehavior_label'] = 'Remove question behavior plugin StudentQuiz';
$string['show_less'] = 'Show less';
$string['show_more'] = 'Show more';
$string['slot_of_slot'] = 'Question {$a->slot} of {$a->slots} in this set';
$string['start_quiz_button'] = 'Start Quiz';
$string['statistic_block_approvals'] = 'Questions approved';
$string['statistic_block_created'] = 'Questions created';
$string['statistic_block_progress_available'] = 'Questions available';
$string['statistic_block_progress_last_attempt_correct'] = 'Latest attempt correct';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Latest attempt wrong';
$string['statistic_block_progress_never'] = 'Questions never answered';
$string['statistic_block_title'] = 'My Progress';
$string['studentquiz'] = 'studentquiz';
$string['studentquiz:addinstance'] = 'Add new instance for StudentQuiz';
$string['studentquiz:emailnotifyapproved'] = 'Question approved notification';
$string['studentquiz:emailnotifychanged'] = 'Question changed notification';
$string['studentquiz:emailnotifycommentadded'] = 'Comment added notification';
$string['studentquiz:emailnotifycommentdeleted'] = 'Comment deleted notification';
$string['studentquiz:emailnotifydeleted'] = 'Question deleted notification';
$string['studentquiz:manage'] = 'Moderate questions on StudentQuiz';
$string['studentquizname'] = 'StudentQuiz Name';
$string['studentquizname_help'] = 'The name of this StudentQuiz Activity';
$string['studentquiz:previewothers'] = 'Preview questions of others on StudentQuiz';
$string['studentquiz:submit'] = 'Submit questions on StudentQuiz';
$string['studentquiz:unhideanonymous'] = 'Can see real names even when anonymize is active';
$string['studentquiz:view'] = 'View questions on StudentQuiz';
$string['tags'] = 'Tags';
$string['task_delete_quiz_after_migration'] = 'Delete quiz activities after data migration from an import or plugin update';
$string['unapprove'] = 'Unapprove';
