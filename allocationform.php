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
 * Strings for component 'allocationform', language 'sw', branch 'MOODLE_32_STABLE'
 *
 * @package   allocationform
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Ufikivu wa fomu ya ugawaji umezuiwa';
$string['add_option'] = 'Ongeza Chaguo Jipya';
$string['allocationform'] = 'Fomu ya ugawaji';
$string['allocationform:addinstance'] = 'Ongeza fomu mpya ya ugawaji';
$string['allocationform:edit'] = 'Hariri fomu za ugawaji';
$string['allocationform_instructions'] = 'Lazima upangilie chaguo la {$a->choices}, ambalo utagawiwa {$a->allocation} kutokan na machaguo ya. {$a->extratext}';
$string['allocationformname'] = 'Jina la fomu ya ugawaji';
$string['allocationformname_help'] = 'Jina la fomu hii ya ugawaji, litatumika kuunganisha na fomu.';
$string['allocationform_notwant'] = 'Unaweza kuchagua chaguo 1 ambalo usingependa litumike kwa ugawaji.';
$string['allocationform:reallocate'] = 'Lazimisha mgawanyo mpya';
$string['allocationform:reopen'] = 'Ruhusu mtumiaji kufungua fomu ya ugawaji.';
$string['allocationform:viewallocations'] = 'Tazama fomu zote za ugawaji zilizotengenezwa';
$string['allocationform:viewform'] = 'Tazama fomu za ugawaji';
$string['allocations'] = 'Mgawanyo';
$string['allocations_not_visible'] = 'Onyo: ugawaji unaweza tu kuonekana na wahariri hadi utapo weka wazi.';
$string['allocationviewed'] = 'Fomu ya ugawaji imetazamwa';
$string['al_notwant'] = 'Haitakiwi';
$string['al_notwant_help'] = 'Chagua chaguo ambalo usingependa litumike kwa ugawaji';
$string['availabilityheading'] = 'Upatikanaji wa fomu';
$string['back_to_edit'] = 'Badilisha kwenda Hali ya kuhariri';
$string['back_to_edit_warning'] = 'Hii itafuta taarifa zote zilizowasilishwa kwa fomu.';
$string['before_start'] = 'Tarehe ya kuanza ya fomu hii ya ugawaji haijapita.';
$string['choice'] = 'Chaguo {$a->choice}';
$string['choiceheading'] = 'Anzisha uchaguzi';
$string['choice_help'] = 'Chagua chaguo ungependa litumike kwenye ugawaji.';
$string['cron'] = 'Mchakato Asili kwa fomu za ugawaji';
$string['csvgenerated'] = 'CSV imezalishwa';
$string['currentstate'] = 'Hali ya sasa:';
$string['deadline'] = 'Muda wa mwisho';
$string['deadline_help'] = 'Muda wa karibu ambao watumiaji wataweza chagua mgawanyo wao, pia ni muda wa mapema fomu ya ugawaji itafunguliwa il mchakato wa ugawaji utokee.';
$string['deadline_message'] = 'Mwisho wa kukamilisha fomu hii ni: {$a->deadline}';
$string['deadline_passed'] = 'Muda wa mwisho kwa fomu hii umeshapita, ikiwa utaihaisha sasa hivi uchakataji utaanza mara moja.';
$string['defaultrole'] = 'Jukumu la msingi';
$string['defaultrole_help'] = 'Weka jukumu la msingi ambalo litatumika kwa kuchagua watumiaji ambao watatengwa kwa kutumia shughuli';
$string['deny_access'] = 'Hauna ruhusa ya kutazama fomu hii ya ugawaji.';
$string['disallow_list'] = 'Zuia Orodha';
$string['disallow_list_help'] = 'Watumiaji wote waliochaguliwa hawataweza kuchagua {$a->option_name}';
$string['duplicate_choice'] = 'Unaweza kuchagua chaguo moja tu';
$string['duplicateoption'] = 'Kosa: Mabadiliko yako hayakuweza kuhifadhiwa kwenye kanzidata. Hii inawezekana ni kutokana na kujirudia kwa jina la chaguo lililoingia';
$string['editingmode'] = 'Uhariri';
$string['form_allocation_error'] = 'KOSA kwenye formid {$a->formid}:';
$string['form_allocation_error2'] = 'KOSA: Imeshindikana kugawa utambulisho wa mtumiaji {$a->userid}';
$string['generate_allocation_csv'] = 'Zalisha csv ya ugawaji wa mtumiaji';
$string['generate_csv'] = 'Zalisha csv ya chaguzi la mtumiaji';
$string['invalidstate'] = 'Mabadiliko ya hali batili yalitumiwa kwenye fomu ya ugawaji';
$string['make_active'] = 'Haisha Fomu';
$string['modulename'] = 'Fomu ya ugawaji';
$string['modulename_help'] = 'Fomu ya ugawaji inaweza kutumika kwa kuwapa wanafunzi kati ya chaguzi moja na kumi (mfano moduli, mazoezi, upangaji...)

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
$string['modulenameplural'] = 'Fomu za ugawaji';
$string['noallocationforms'] = 'Hakuna fomu za ugawaji zilizopatikana kwa kozi hii';
$string['no_allocations'] = 'Hakuna ugawaji uliopatikana';
$string['noformdatapassed'] = 'Hakuna data ya fomu iliyopitishwa.  Hakuna uhuishaji uliofanywa.';
$string['not_active'] = 'Fomu ya ugawaji haipatikani, tafadhali jaribu tena baadae.';
$string['not_enough_slots'] = 'Hakuna nafasi za kutosha kwa watu wote wanaostahili kupewa zoezi';
$string['notrequired'] = 'Haihitajiki';
$string['notsaved'] = 'Haijahifadhiwa, huna jukumu linalohitajikae.';
$string['not_set'] = 'Lazima ufanye chaguo';
$string['notwant'] = 'Jumuisha isyotakiwa';
$string['notwant_help'] = 'Ikiwa litachaguliwa mtumiaji atapewa fursa ya kutaja chaguo ambalo hawataki kugawiwa';
$string['numberofallocations'] = 'Ugawaji kwa kila mtumiaji';
$string['numberofallocations_help'] = 'Idadi ya chaguo mtumiaji atakazogawiwa';
$string['numberofchoices'] = 'Idadi ya chaguo';
$string['numberofchoices_help'] = 'Idadi ya chaguo mtumiaji atastahili kuchagua';
$string['ok_to_continue'] = 'Una uhakika unataka kuendelea?';
$string['optionedited'] = 'Chaguo limehaririwa';
$string['option_form_header'] = 'Chaguo Jipya';
$string['option_heading'] = 'Kichwa cha habari';
$string['option_heading_help'] = 'Kichwa cha habari kitakachooneshwa muda mfupi juu ya chaguo hili .';
$string['option_list'] = 'Orodha ya chaguo';
$string['option_maxallocation'] = 'Ukomo wa ugawaji';
$string['option_maxallocation_help'] = 'Idadi ya juu ya watu ambayo inaweza kugawia chaguo hili.';
$string['option_maxallocation_invalid'] = 'Ukomo wa ugawaji haujawekwa';
$string['option_name'] = 'Jina la chaguo';
$string['option_name_help'] = 'Jina la chaguo kama litakavyoonekana kwa mtumiaji.';
$string['option_restricted'] = 'Watumiaji waliozuiwa';
$string['overviewclose'] = 'Tarehe ya mwisho: {$a->closedate}';
$string['overviewname'] = 'Ugawaji: {$a->link}';
$string['overviewready'] = 'Mgawanyo wako unapatikana.';
$string['overviewreview'] = 'Tayari kwa mapitio. Watu waliogawiwa hawawezi kuona matokeo.';
$string['people'] = 'Idadi ya watu watakao gawiwa';
$string['permissionedited'] = 'Ruhusa imehaririwa';
$string['pluginadministration'] = 'Utawala wa Fomu za augawaji';
$string['pluginname'] = 'Fomu za ugawaji (eForms)';
$string['processedmode'] = 'Imechakatwa';
$string['processmode'] = 'Inachakata';
$string['queued_for_processing'] = 'Fomu ya ugawaji inasubiri kuchakatwa... tafadhali jaribu tena baadae.';
$string['readymode'] = 'Hai';
$string['reprocess'] = 'Lazimisha ugawaji';
$string['reprocess_warning'] = 'Hii itafuta mipangilio yote ya sasa';
$string['requirechoice'] = 'Inahitaji uchaguzi';
$string['restrict'] = 'Zuia';
$string['restrictionsexceeded'] = 'Umezidi idadi ya vikwazo vinavyotumika kwa {$a->users} wa/mtumiaji. Angalau {$a->numberofchoices} ya chaguo zilizopo zinahitajika kwa mtumiaji.';
$string['reviewmode'] = 'Mapitio';
$string['roleselect'] = 'Jukuma kwa ajili ya kugawiwa';
$string['roleselect_help'] = 'Chagua nafasi ya watumiaji katika kozi hii ambayo itagawiwa kwa kutumia fomu hii.';
$string['saved'] = 'Chaguo zimehifadhiwa, Unaweza kurudi kwenye Kozi';
$string['search:activity'] = 'Fomu ya ugawaji - taarifa ya shughuli';
$string['show_allocations'] = 'Fanya ugawaji upatikane';
$string['show_course'] = 'Rudi Nyuma kwenye {$a->coursename}';
$string['slots'] = 'Idadi ya nafasi za ugawaji';
$string['startdate'] = 'Tarehe ya Kuanza';
$string['startdate_help'] = 'Wakati wa kwanza ambao watumiaji wataweza kuchagua mgao wao.';
$string['statechanged'] = 'Hali imebalilishwa';
$string['trackcompletion'] = 'Inahitaji kuwasilisha chaguo ili kukamilisha shughuli hii?';
$string['unallocated'] = 'Haijagawiwa';
