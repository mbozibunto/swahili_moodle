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
 * Strings for component 'booking', language 'en', branch 'MOODLE_34_STABLE'
 *
 * @package   booking
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Activity completed';
$string['activitycompletionsuccess'] = 'All selected users have been marked for activity completion';
$string['addcategory'] = 'Edit categories';
$string['addeditbooking'] = 'Edit booking';
$string['addmorebookings'] = 'Add more bookings';
$string['addnewbookingoption'] = 'Add a new booking option';
$string['addnewcategory'] = 'Add new category';
$string['addnewinstitution'] = 'Add new institution';
$string['addnewtagtemplate'] = 'Add new tag template';
$string['address'] = 'Address';
$string['addteachers'] = 'Add teachers';
$string['addtocalendar'] = 'Add to calendar';
$string['addtogroup'] = 'Automatically enrol users in group';
$string['addtogroup_help'] = 'Automatically enrol users in group - group will be created automatically with name "Bookin name - Option name"';
$string['addusertogroup'] = 'Add user to group:';
$string['advancedoptions'] = 'Advanced options';
$string['aftercompletedtext'] = 'After activity completed';
$string['aftercompletedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['agreetobookingpolicy'] = 'I have read and agree to the following booking policies';
$string['allbookingoptions'] = 'Download users for all booking options';
$string['allchangessave'] = 'All changes have been saved.';
$string['allcomments'] = 'Everybody can comment';
$string['allmailssend'] = 'All e-mails to the users have been sent!';
$string['allowdelete'] = 'Allow users to cancel their booking themselves';
$string['allowupdate'] = 'Allow booking to be updated';
$string['allratings'] = 'Everybody can rate';
$string['allusersbooked'] = 'All {$a} selected users have successfully been assigned to this booking option.';
$string['answer'] = 'Answer';
$string['answered'] = 'Answered';
$string['associatedcourse'] = 'Associated course';
$string['attachedfiles'] = 'Attached files';
$string['attachical'] = 'Attach single ical event per booking';
$string['attachicaldesc'] = 'Email notifications will include an attached ical event, if this is enabled. The ical will include only one start time and one end time either defined
in the booking option settings or start time of the first session to end time of the last session';
$string['attachicalsess'] = 'Attach all session dates as ical events';
$string['attachicalsessdesc'] = 'Email notifications will include all session dates defined for a booking option as ical attachment.';
$string['autoenrol'] = 'Automatically enrol users';
$string['autoenrol_help'] = 'If selected, users will be enrolled onto the relevant course as soon as they make the booking and unenrolled from that course as soon as the booking is cancelled.';
$string['availability'] = 'Still available';
$string['available'] = 'Places available';
$string['backtoresponses'] = '<< Back to responses';
$string['banusernames'] = 'Ban usernames';
$string['banusernames_help'] = 'To limit which usernames can\'t apply just write in this field, and separate with coma. To ban usernames, that end with gmail.com and yahoo.com just write: gmail.com, yahoo.com';
$string['banusernameswarning'] = 'Your username is banned so you can\'t book.';
$string['beforebookedtext'] = 'Before booked';
$string['beforebookedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['beforecompletedtext'] = 'After booked';
$string['beforecompletedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['booked'] = 'Booked';
$string['bookedpast'] = 'Booked (course terminated)';
$string['bookedtext'] = 'Booking confirmation';
$string['bookedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['bookedusers'] = 'Booked users';
$string['booking'] = 'Booking';
$string['booking:addeditownoption'] = 'Add new option and edit own options.';
$string['booking:addinstance'] = 'Add new booking';
$string['bookingattachment'] = 'Attachment';
$string['bookingcategory'] = 'Category';
$string['booking:choose'] = 'Book';
$string['bookingclose'] = 'Until';
$string['booking:comment'] = 'Add comments';
$string['booking:communicate'] = 'Can communicate';
$string['bookingdeleted'] = 'Your booking was cancelled';
$string['booking:deleteresponses'] = 'Delete responses';
$string['booking:downloadresponses'] = 'Download responses';
$string['bookingduration'] = 'Duration';
$string['bookingfull'] = 'There are no available places';
$string['bookingfulldidntregister'] = 'Option is full, so I didn\'t transfer all users!';
$string['booking:managecomments'] = 'Manage comments';
$string['bookingmanagererror'] = 'The username entered is not valid. Either it does not exist or there are more then one users with this username (example: if you have mnet and local authentication enabled)';
$string['bookingmeanwhilefull'] = 'Meanwhile someone took already the last place';
$string['bookingname'] = 'Booking name';
$string['bookingopen'] = 'Open';
$string['bookingoption_created'] = 'Booking option created';
$string['bookingoption_deleted'] = 'Booking option deleted';
$string['bookingoptionsmenu'] = 'Booking options';
$string['bookingoptiontext'] = 'Booking option text depending on booking status';
$string['bookingoption_updated'] = 'Booking option updated';
$string['bookingorganizatorname'] = 'Organizer name';
$string['bookingpoints'] = 'Course points';
$string['bookingpolicy'] = 'Booking policy';
$string['bookingpollurl'] = 'Poll url';
$string['bookingpollurlteachers'] = 'Teachers poll url';
$string['booking:rate'] = 'Rate chosen booking options';
$string['booking:readallinstitutionusers'] = 'Show all users';
$string['booking:readresponses'] = 'Read responses';
$string['bookingsaved'] = 'Your booking was successfully saved. You can now proceed to book other courses.';
$string['booking:sendpollurl'] = 'Send poll url';
$string['booking:sendpollurltoteachers'] = 'Send poll url to teachers';
$string['booking:subscribeusers'] = 'Make bookings for other users';
$string['bookingtags'] = 'Tags';
$string['bookingtext'] = 'Booking text';
$string['booking:updatebooking'] = 'Manage booking options';
$string['booking:viewallratings'] = 'View all raw ratings given by individuals';
$string['booking:viewanyrating'] = 'View total ratings that anyone received';
$string['booking:viewrating'] = 'View the total rating you received';
$string['booknow'] = 'Book now';
$string['bookotherusers'] = 'Book other users';
$string['booktootherbooking'] = 'Book users to other booking';
$string['btnbooknowname'] = 'Name of button "Book now"';
$string['btncacname'] = 'Name of button "Confirm activity completion"';
$string['btncancelname'] = 'Name of button "Cancel booking"';
$string['cancancelbook'] = 'Allow user to cancel or book their booking when it is started?';
$string['cancel'] = 'Cancel';
$string['cancelbooking'] = 'Cancel booking';
$string['cannotremovesubscriber'] = 'You have to remove the activity completion prior to cancel the booking. Booking was not cancelled!';
$string['categories'] = 'Categories';
$string['category'] = 'Category';
$string['categoryname'] = 'Category name';
$string['cfgsignin'] = 'Sign-In Sheet Configuration';
$string['cfgsignin_desc'] = 'Configure the sign-in sheet settings';
$string['choosecourse'] = 'Choose a course';
$string['choosepdftitle'] = 'Select a title for the sign-in sheet';
$string['closed'] = 'Booking closed';
$string['comments'] = 'Comments';
$string['completed'] = 'Completed';
$string['completedcomments'] = 'Only with completed activity';
$string['completedratings'] = 'Only with completed activity';
$string['completionmodule'] = 'Activity completed';
$string['completionmodule_help'] = 'Delete all users, that completed this activity. Users will be deleted with a click of button on report page!';
$string['conectedbooking'] = 'Connected booking';
$string['conectedbooking_help'] = 'Booking instance eligible for transferring booked users. You can define from which option within the selected booking instance and how many users you will accept.';
$string['confirmactivitycompletion'] = 'Confirm activity completion';
$string['confirmationmessage'] = 'Your booking has been registered


Booking status: {$a->status}
Participant:   {$a->participant}
Course:   {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
To view all your booked courses click on the following link: {$a->bookinglink}
The associated course can be found here: {$a->courselink}';
$string['confirmationmessagesettings'] = 'Confirmation e-mail settings';
$string['confirmationmessagewaitinglist'] = 'Hello {$a->participant},

Your booking request has been registered

Booking status: {$a->status}
Participant:   {$a->participant}
Course:   {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
To view all your booked courses click on the following link: {$a->bookinglink}';
$string['confirmationsubject'] = 'Booking confirmation for {$a->title}';
$string['confirmationsubjectbookingmanager'] = 'New booking for {$a->title} by {$a->participant}';
$string['confirmationsubjectwaitinglist'] = 'Booking status for {$a->title}';
$string['confirmationsubjectwaitinglistmanager'] = 'Booking status for {$a->title}';
$string['confirmbookingoffollowing'] = 'Please confirm the booking of following course';
$string['confirmdeletebookingoption'] = 'Do you really want to delete this booking option?';
$string['confirmpresence'] = 'Confirm presence';
$string['copyonlythisbookingurl'] = 'Copy this booking URL';
$string['copypollurl'] = 'Copy poll URL';
$string['copytoclipboard'] = 'Copy to clipboard: Ctrl+C, Enter';
$string['coursedate'] = 'Date';
$string['courseendtime'] = 'End time of the course';
$string['coursestarttime'] = 'Start time of the course';
$string['createdby'] = 'Booking module created by edulabs.org';
$string['csvfile'] = 'CSV file';
$string['csvfile_help'] = 'CSV file must contain only one column named Institution.';
$string['customfield'] = 'Custom field to be set in the booking option settings. It will then be shown in the booking option overview.';
$string['customfieldconfigure'] = 'Custom booking option fields';
$string['customfielddef'] = 'Custom booking option field';
$string['customfielddesc'] = 'After adding a custom field, you can define the value for the field in the booking option settings. The value will be shown in the booking option description.';
$string['customfieldtype'] = 'Field type';
$string['customlabels'] = 'Custom labels';
$string['dateerror'] = 'Wrong date in line {$a}:';
$string['datenotset'] = 'Date not set';
$string['dateparseformat'] = 'Date parse format';
$string['dateparseformat_help'] = 'Please, use date format like specified in CSV file. Help with <a href="http://php.net/manual/en/function.date.php">this</a> resource for options.';
$string['days'] = '{$a} days';
$string['daystonotify'] = 'Number of days in advance of the event-start to notify participatants';
$string['daystonotify2'] = 'Second notification before start of event to notify participatants.';
$string['daystonotify_help'] = 'Will work only if start and end date of option are set! 0 for disabling this functionality.';
$string['defaultbookingoption'] = 'Default booking options';
$string['defaultdateformat'] = 'j.n.Y H:i:s';
$string['delcustfield'] = 'Delete this field and all associated field settings in the booking options';
$string['deletebooking'] = 'Do you really want to unsubscribe from following course? <br /><br /> <b>{$a} </b>';
$string['deletebookingoption'] = 'Delete this booking option';
$string['deletecategory'] = 'Delete';
$string['deletedbookingmessage'] = 'Booking for following course deleted: {$a->title}

User: {$a->participant}
Title: {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Course: {$a->courselink}
Booking link: {$a->bookinglink}';
$string['deletedbookingsubject'] = 'Deleted booking: {$a->title} by {$a->participant}';
$string['deletedbookingusermessage'] = 'Hello {$a->participant},

Your booking for {$a->title} ({$a->startdate} {$a->starttime}) has been cancelled.';
$string['deletedbookingusersubject'] = 'Booking for {$a->title} cancelled';
$string['deletedrule'] = 'Rule deleted.';
$string['deletedtext'] = 'Cancelled booking message';
$string['deletedtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['deleteresponsesactivitycompletion'] = 'Delete all users with completed activity: {$a}';
$string['deleterule'] = 'Delete';
$string['deletesubcategory'] = 'Please, first delete all subcategories of this category!';
$string['deleteuserfrombooking'] = 'Do you really want to delete the users from the booking?';
$string['delnotification'] = 'You deleted {$a->del} of {$a->all} users. Users, that have completed activity, can\'t be deleted!';
$string['delnotificationactivitycompletion'] = 'You deleted {$a->del} of {$a->all} users. Users, that have completed activity, can\'t be deleted!';
$string['disablebookingusers'] = 'Disable booking of users - hide Book now button.';
$string['disabled'] = 'Disabled';
$string['donotselectcourse'] = 'No course selected';
$string['download'] = 'Download';
$string['downloadallresponses'] = 'Download all responses for all booking options';
$string['downloadusersforthisoptionods'] = 'Download users as .ods';
$string['downloadusersforthisoptionxls'] = 'Download users as .xls';
$string['duplicatebooking'] = 'Duplicate this booking option';
$string['editcategory'] = 'Edit';
$string['editingoptiondate'] = 'You are currently editing this session';
$string['editinstitutions'] = 'Edit institutions';
$string['editotherbooking'] = 'Other booking rules';
$string['editrule'] = 'Edit';
$string['edittag'] = 'Edit';
$string['editteachers'] = 'Edit';
$string['editteacherslink'] = 'Edit teachers';
$string['enablecompletion'] = 'Enable manual activity completion in booking option responses';
$string['enablecompletiongroup'] = 'Manual activity completion';
$string['enablepresence'] = 'Enable presence';
$string['endtimenotset'] = 'End date not set';
$string['enrolledcomments'] = 'Only enrolled';
$string['enrolledinoptions'] = 'alredy booked in booking options:';
$string['enrolledratings'] = 'Only enrolled';
$string['entervalidurl'] = 'Please, enter a valid URL!';
$string['error:failedtosendconfirmation'] = 'The following user did not receive a confirmation mail

Booking status: {$a->status}
Participant:   {$a->participant}
Course:   {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
Link: {$a->bookinglink}
Associated course: {$a->courselink}';
$string['errorpagination'] = 'Please enter a number bigger than 0';
$string['eventbooking_cancelled'] = 'Booking cancelled';
$string['eventbookingoption_booked'] = 'Booking option booked';
$string['eventduration'] = 'Event duration';
$string['eventpoints'] = 'Points';
$string['eventreport_viewed'] = 'Report viewed';
$string['eventteacher_added'] = 'Teacher added';
$string['eventteacher_removed'] = 'Teacher removed';
$string['eventtype'] = 'Event type';
$string['eventuserprofilefields_updated'] = 'Userprofile updated';
$string['excelfile'] = 'CSV file with activity completion';
$string['existingsubscribers'] = 'Existing subscribers';
$string['expired'] = 'Sorry, this activity closed on {$a} and is no longer available';
$string['fields'] = 'Fields to display in different contexts';
$string['fillinatleastoneoption'] = 'You need to provide at least two possible answers.';
$string['forcourse'] = 'for course';
$string['full'] = 'Full';
$string['fullname'] = 'Full name';
$string['generatenewurl'] = 'Generate new short url';
$string['generaterecnum'] = 'Generate numbers';
$string['generaterecnumareyousure'] = 'This will generate new numbers and permanently delete the old one!';
$string['generaterecnumnotification'] = 'New numbers have been generated.';
$string['goenrol'] = 'Go to registration';
$string['googleapikey'] = 'Google API key';
$string['googleapikey_desc'] = 'API key for Google URL Shortener. Get it here: https://developers.google.com/url-shortener/v1/getting_started#APIKey';
$string['gotobooking'] = '<< Bookings';
$string['gotop'] = 'Go to top';
$string['groupdeleted'] = 'This booking instance creates groups automatically in the target course. But the group has been manually deleted in the target course. Activate the following checkbox in order to recreate the group';
$string['groupexists'] = 'The group already exists in the target course, please choose another name for the booking option';
$string['groupname'] = 'Group name';
$string['havetologin'] = 'You have to log in before you can submit your booking';
$string['hidedescription'] = 'Hide description';
$string['hours'] = '{$a} hours';
$string['howmanyusers'] = 'How many users you can book?';
$string['howmanyusers_help'] = '';
$string['icalcancel'] = 'Include ical event when booking is cancelled as cancelled event';
$string['icalcanceldesc'] = 'When a users cancels a booking or is removed from the booked users list, then attach an ical attachment as cancelled event.';
$string['icalcfg'] = 'Configuration of the ical attachements';
$string['icalcfgdesc'] = 'Configure the ical.ics files that are attached to e-mail messages. These files alow adding the booking dates to the personal calendar.';
$string['icalfieldlocation'] = 'Text to display in ical field location';
$string['icalfieldlocationdesc'] = 'Choose from the dropdown list what what text should be used for the calendar field "location"';
$string['importcsvbookingoption'] = 'Import CSV with booking options';
$string['importcsvtitle'] = 'Import CSV';
$string['importexcelbutton'] = 'Import activity completion';
$string['importexceltitle'] = 'Import activity completion';
$string['importfinished'] = 'Importing finished!';
$string['includeteachers'] = 'Include teachers in the sign-in sheet';
$string['infonobookingoption'] = 'Please use the block {$a} in order to add your first booking option';
$string['institution'] = 'Institution';
$string['institutionname'] = 'Institution name';
$string['institutions'] = 'Institutions';
$string['lblacceptingfrom'] = 'Name of label "Accepting from"';
$string['lblbooking'] = 'Name of label "Booking"';
$string['lblbooktootherbooking'] = 'Name of button "Book users to other booking option"';
$string['lblinstitution'] = 'Name of label "Institution"';
$string['lbllocation'] = 'Name of label "Location"';
$string['lblname'] = 'Name of label "Name"';
$string['lblnumofusers'] = 'Name of label "Num. of users"';
$string['lblsputtname'] = 'Name of label "Send poll url to teachers"';
$string['lblsurname'] = 'Name of label "Surname"';
$string['lblteachname'] = 'Name of label "Teachers"';
$string['leftandrightdate'] = '{$a->leftdate} to {$a->righttdate}';
$string['limit'] = 'Limit';
$string['limitanswers'] = 'Limit the number of participants';
$string['limitanswers_help'] = 'If you change this option and you have booked people, you can remove them without notification!';
$string['location'] = 'Location';
$string['mailconfirmationsent'] = 'You will shortly receive a confirmation e-mail';
$string['managebooking'] = 'Manage';
$string['maxoverbooking'] = 'Max. number of places on waiting list';
$string['maxparticipantsnumber'] = 'Max. number of participants';
$string['maxperuser'] = 'Max current bookings per user';
$string['maxperuser_help'] = 'The maximum number of bookings an individual user can make in this activity at once. After an event end time has passed, it is no longer counted against this limit.';
$string['maxperuserwarning'] = 'You currently have used {$a->count} out of {$a->limit} maximum available bookings ({$a->eventtype}) for your user account';
$string['messageprovider:bookingconfirmation'] = 'Booking confirmations';
$string['messagesend'] = 'Your message has been sent.';
$string['messagesubject'] = 'Subject';
$string['messagetext'] = 'Message';
$string['minutes'] = '{$a} minutes';
$string['modulename'] = 'Booking';
$string['modulenameplural'] = 'Bookings';
$string['mustchooseone'] = 'You must choose an option before saving. Nothing was saved.';
$string['mustfilloutuserinfobeforebooking'] = 'Befor proceeding to the booking form, please fill in some personal booking information';
$string['myoptions'] = 'My options ({$a})';
$string['no'] = 'No';
$string['nobookingselected'] = 'No booking option selected';
$string['nocomments'] = 'Commenting disabled';
$string['nocourse'] = 'No course selected for this booking option';
$string['nodateset'] = 'Course date not set';
$string['noguestchoose'] = 'Sorry, guests are not allowed to enter data';
$string['noratings'] = 'Ratings disabled';
$string['noresultsviewable'] = 'The results are not currently viewable.';
$string['norighttobook'] = 'Booking is not possible for your user role. Please contact the site administrator to give you the appropriate rights or sign in.';
$string['nosubscribers'] = 'There are no teachers assigned!';
$string['notallbooked'] = 'The following users could not be booked due to reaching the max number of bookings per user or lack of available places for the booking option: {$a}';
$string['notbooked'] = 'Not yet booked';
$string['notconectedbooking'] = 'Not connected';
$string['noteacherfound'] = 'No teacher found in line {$a}:';
$string['notes'] = 'Booking notes';
$string['notificationsubject'] = 'Upcoming course...';
$string['notificationtext'] = 'Notification text shown on activity completion.';
$string['notificationtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['notificationtextmessage'] = 'Course will start:

Course:   {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}';
$string['notificationtextsubject'] = 'Info about course start!';
$string['notifyemail'] = 'Notification before start';
$string['notifyemaildefaultmessage'] = 'Your booking has been registered


Booking status: {$a->status}
Participant:   {$a->participant}
Course:   {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
To view all your booked courses click on the following link: {$a->bookinglink}
The associated course can be found here: {$a->courselink}';
$string['notifyemail_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['notopenyet'] = 'Sorry, this activity is not available until {$a}';
$string['nouserfound'] = 'No user found:';
$string['nousers'] = 'No users!';
$string['numberrows'] = 'Number rows';
$string['numberrowsdesc'] = 'Number each row of the sign-in sheet. Number will be displayed left of the name in the same column';
$string['numgenerator'] = 'Enable rec. number generation?';
$string['numrec'] = 'Rec. num.';
$string['onlythisbookingurl'] = 'Link to this booking URL';
$string['onwaitinglist'] = 'You are on the waiting list';
$string['optiondates'] = 'Multiple dates session';
$string['optiondatesmessage'] = 'Session {$a->number}: {$a->date} <br> From: {$a->starttime} <br> To: {$a->endtime}';
$string['optiondatessuccessfullydelete'] = 'Session time was deleted.';
$string['optiondatessuccessfullysaved'] = 'Session time was saved.';
$string['optiondatestime'] = 'Session time';
$string['optionid'] = 'Option ID';
$string['optionmenu'] = 'This booking option';
$string['optionsfields'] = 'Fields on the booking options overview page';
$string['organizatorname'] = 'Organizer name';
$string['otherbookingaddrule'] = 'Add new rule';
$string['otherbookinglimit'] = 'Limit';
$string['otherbookinglimit_help'] = 'How many users you accept from option. If 0, you can accept unlimited users.';
$string['otherbookingnumber'] = 'Num. of users';
$string['otherbookingoptions'] = 'Accepting from';
$string['otherbookingsuccessfullysaved'] = 'Rule saved!';
$string['paginationnum'] = 'N. of records - pagination';
$string['pdfdate'] = 'Booking Date(s):';
$string['pdflandscape'] = 'Landscape';
$string['pdflocation'] = 'Location:';
$string['pdfportrait'] = 'Portrait';
$string['pdfroom'] = 'Room:';
$string['pdfsignature'] = 'Signature';
$string['pdfstudentname'] = 'Student Name';
$string['pdftodaydate'] = 'Date:';
$string['placesavailable'] = 'Places available: {$a->available} of {$a->maxanswers}';
$string['pluginadministration'] = 'Booking administration';
$string['pluginname'] = 'Booking';
$string['pollstrftimedate'] = '%Y-%m-%d';
$string['pollurl'] = 'Poll url';
$string['pollurl_help'] = 'You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['pollurlteachers'] = 'Teachers poll url';
$string['pollurlteachers_help'] = 'You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['pollurlteacherstext'] = 'Message for the poll url sent to teachers';
$string['pollurlteacherstext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['pollurlteacherstextmessage'] = 'Please, take the survey

Survey url {pollurlteachers}';
$string['pollurlteacherstextsubject'] = 'Please, take the survey';
$string['pollurltext'] = 'Message for sending poll url to booked users';
$string['pollurltext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['pollurltextmessage'] = 'Please, take the survey

Survey url {pollurl}';
$string['pollurltextsubject'] = 'Please, take the survey';
$string['potentialsubscribers'] = 'Potential subscribers';
$string['presence'] = 'Presence';
$string['question'] = 'Question';
$string['ratings'] = 'Bookingoption ratings';
$string['ratingsuccess'] = 'The ratings were successfully updated';
$string['recreategroup'] = 'Recreate group in the target course and enrol users in group';
$string['removeafterminutes'] = 'Remove activity completion after N minutes';
$string['removeresponses'] = 'Remove all responses';
$string['removeuseronunenrol'] = 'Remove user from booking, when unenrol from course?';
$string['reportfields'] = 'Downlodable responses fields (csv, xls-Download)';
$string['reset'] = 'Reset';
$string['responses'] = 'Responses';
$string['responsesfields'] = 'Fields on the "manage responses" page';
$string['responsesto'] = 'Responses to {$a}';
$string['rootcategory'] = 'Root';
$string['savenewtagtemplate'] = 'Save';
$string['searchdate'] = 'Date';
$string['searchfinished'] = 'Course completed';
$string['searchname'] = 'First name';
$string['searchsurname'] = 'Last name';
$string['searchtag'] = 'Search tags';
$string['searchwaitinglist'] = 'On waiting list';
$string['select'] = 'Selection';
$string['selectanoption'] = 'Please, select a booking option';
$string['selectatleastoneuser'] = 'Please, select at least 1 user!';
$string['selectcategory'] = 'Select category';
$string['selectoptionid'] = 'Please, select option!';
$string['selectoptioninotherbooking'] = 'Option';
$string['selectpresencestatus'] = 'Choose presence status';
$string['sendconfirmmail'] = 'Send confirmation e-mail';
$string['sendconfirmmailtobookingmanger'] = 'Send confirmation e-mail to booking manager';
$string['sendcustommessage'] = 'Send custom message';
$string['sendmailtobooker'] = 'Book other users page: Send mail to user who books instead to users who are booked';
$string['sendmailtobooker_help'] = 'Activate this option in order to send booking confirmation mails to the user who books other users instead to users, who have been added to a booking option. This is only relevant for bookings made on the page "book other users".';
$string['sendpollurltoteachers'] = 'Send poll url';
$string['sendreminderemail'] = 'Send reminder e-mail';
$string['sendreminderemailsuccess'] = 'Notification e-mail has been sent!';
$string['shorturl'] = 'Short URL of this option';
$string['showactive'] = 'Active bookings';
$string['showallbookings'] = 'All bookings';
$string['showcustomfields'] = 'Custom booking option fields';
$string['showcustomfields_desc'] = 'Select the custom booking option fields to be shown on the sign-in sheet';
$string['showdescription'] = 'Show description';
$string['showhelpfullnavigationlinks'] = 'Show navigation links.';
$string['showhelpfullnavigationlinks_helt'] = 'Show "Go to registration" and "Go to top" links.';
$string['showinapi'] = 'Show in API?';
$string['showmybookingsonly'] = 'My bookings';
$string['showonlymyinstitutions'] = 'My institution';
$string['signature'] = 'Signature';
$string['signinaddemptyrows'] = 'Number of empty rows to add for people who did not sign up';
$string['signincustfields'] = 'Custom profile fields';
$string['signincustfields_desc'] = 'Select the custom profiles fields to be shown on the sign-in sheet';
$string['signinextracols'] = 'Additional column';
$string['signinextracols_desc'] = 'You can print up to 3 additional columns on the sign-in sheet. Fill in the column title or leave it blank for no additional column';
$string['signinextracols_heading'] = 'Additional columns on the sign-in sheet';
$string['signinlogo'] = 'Logo to display on the sign-in sheet';
$string['signinlogofooter'] = 'Logo in footer to display on the sign-in sheet';
$string['signinlogoheader'] = 'Logo in header to display on the sign-in sheet';
$string['signinonesession'] = 'Display selected session time on the sign-in sheet';
$string['sign_in_sheet_download'] = 'Download Sign in Sheet';
$string['signinsheetfields'] = 'Sign-in sheet fields (PDF)';
$string['spaceleft'] = 'space available';
$string['spacesleft'] = 'spaces available';
$string['startendtimeknown'] = 'Start and end time of course are known';
$string['starttimenotset'] = 'Start date not set';
$string['status_attending'] = 'Attending';
$string['statuschangebookedmessage'] = 'Hello {$a->participant},

Your booking status has changed. You are now registered in {$a->title}.

Booking status: {$a->status}
Participant:   {$a->participant}
Course:   {$a->title}
Date: {$a->startdate} {$a->starttime} - {$a->enddate} {$a->endtime}
To view all your booked courses click on the following link: {$a->bookinglink}
The associated course can be found here: {$a->courselink}';
$string['statuschangebookedsubject'] = 'Booking status changed for {$a->title}';
$string['statuschangetext'] = 'Status change message';
$string['statuschangetext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['status_complete'] = 'Complete';
$string['status_failed'] = 'Failed';
$string['status_incomplete'] = 'Incomplete';
$string['status_noshow'] = 'No show';
$string['status_unknown'] = 'Unknown';
$string['submitandaddnew'] = 'Save and add new';
$string['subscribersto'] = 'Teachers for \'{$a}\\';
$string['subscribetocourse'] = 'Enrol users in the course';
$string['subscribeuser'] = 'Do you really want to enrol the users in the following course';
$string['successfulldeleted'] = 'Category was deleted!';
$string['successfulldeletedinstitution'] = 'Institution was deleted';
$string['tagsuccessfullysaved'] = 'Tag was saved.';
$string['tagtag'] = 'Tag';
$string['tagtemplates'] = 'Tag templates';
$string['tagtext'] = 'Text';
$string['taken'] = 'Taken';
$string['teachers'] = 'Teachers';
$string['textfield'] = 'Single line text input';
$string['timecloseoption'] = 'Limit the availability of this booking option until a certain date';
$string['timecreated'] = 'Time created';
$string['timerestrict'] = 'Restrict answering to this time period: This is deprecated and will be removed. Please use "Restrict Access" settings for making the booking activity available for a certain period';
$string['to'] = 'to';
$string['toomuchusersbooked'] = 'The max number of users you can book is: {$a}';
$string['topic'] = 'Topic';
$string['transfer'] = 'Transfer';
$string['transferheading'] = 'Transfer selected users to the selected booking option';
$string['transferproblem'] = 'The following could not be transferred due to booking option limitation or user limitation: {$a}';
$string['transfersuccess'] = 'The users have successfully been transferred to the new booking option';
$string['unlimited'] = 'Number of available places is not limited';
$string['updatebooking'] = 'Edit this booking option';
$string['usedinbooking'] = 'You can\'t delete this category, because you\'re using it in booking!';
$string['userdownload'] = 'Download users';
$string['userid'] = 'UserID';
$string['userleave'] = 'User has cancelled his/her own booking';
$string['userleavebookedmessage'] = 'Hello {$a->participant},

You have been unsubscribed from {$a->title}.';
$string['userleavebookedsubject'] = 'You successfully unsubscribed from {$a->title}';
$string['userleave_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['usernameofbookingmanager'] = 'Username of the booking manager';
$string['usernameofbookingmanager_help'] = 'Username of the user who will be displayed in the "From" field of the confirmation notifications. If the option "Send confirmation e-mail to booking manager" is enabled, this is the user who receives a copy of the confirmation notifications.';
$string['users'] = '<< Manage responses';
$string['usersonlist'] = 'User on list';
$string['userssuccessfullenrolled'] = 'All users have been enrolled!';
$string['userssuccessfullybooked'] = 'All users have been booked to the other booking option.';
$string['userssuccessfullygetnewpresencestatus'] = 'All users have a new presence status.';
$string['userssucesfullygetnewpresencestatus'] = 'Presence status for selected users successfully updated';
$string['viewallresponses'] = 'Manage {$a} responses';
$string['waitinglist'] = 'Waiting list';
$string['waitinglisttaken'] = 'On the waiting list';
$string['waitinglistusers'] = 'Users on waiting list';
$string['waitingplacesavailable'] = 'Waiting list places available: {$a->overbookingavailable} of {$a->maxoverbooking}';
$string['waitingtext'] = 'Waiting list confirmation';
$string['waitingtext_help'] = 'Leave this blank to use the site default text. You can use any of the following placeholders in the text:
<ul>
<li>{status}</li>
<li>{participant}</li>
<li>{email} - User email</li>
<li>{title}</li>
<li>{duration}</li>
<li>{starttime}</li>
<li>{endtime}</li>
<li>{startdate}</li>
<li>{enddate}</li>
<li>{courselink}</li>
<li>{bookinglink}</li>
<li>{pollurl}</li>
<li>{pollurlteachers}</li>
<li>{location}</li>
<li>{institution}</li>
<li>{address}</li>
<li>{eventtype}</li>
<li>{teacher}</li>
<li>{teacherN} - N is number of teacher ex. {teacher1}</li>
<li>{pollstartdate}</li>
<li>{qr_id} - Insert QR code with user id</li>
<li>{qr_username} - Insert QR code with user username</li>
<li>{times} - Session times</li>
<li>{shorturl} - Short url ob option</li>
</ul>';
$string['waitspaceavailable'] = 'Places on waiting list available';
$string['week'] = 'Week';
$string['whichview'] = 'Default view for booking options';
$string['withselected'] = 'With selected users:';
$string['wrongdataallfields'] = 'Please, fill out all fields!';
$string['wrongfile'] = 'Wrong file!';
$string['yes'] = 'Yes';
$string['yourselection'] = 'Your selection';
