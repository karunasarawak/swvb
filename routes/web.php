<?php
use App\Http\Controllers\LanguageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// dashboard Routes
Route::get('/','DashboardController@dashboardEcommerce');
Route::get('/dashboard-ecommerce','DashboardController@dashboardEcommerce');
Route::get('/dashboard-analytics','DashboardController@dashboardAnalytics');

Route::get('/membership', 'MembershipController@index');
Route::get('/membership/{lead_id}/{tour_id}/new', 'MembershipController@createMembership')->name('members.createPage');
Route::get('/membership/new', 'MembershipController@create2ndMembership');
Route::post('/membership/new', 'MembershipController@storeMembers')->name('members.store');//name only for posting
Route::get('/membership/archive', 'MembershipController@archive');
Route::post('/membership/savesecondary/{id}/{type}', 'MembershipController@savemember')->name('members.savesecondary');//name only for posting
Route::get('/membership/savememberstatus','MembershipController@savememberstatus')->name('members.savememberstatus');
Route::get('/membership/{mbrship_id}/detail', 'MembershipController@showMemberDetails')->name('membership.details');

Route::get('/membership/{mbrship_id}/transfer', 'MembershipController@transfer')->name('membership.transfer');    
Route::get('/membership/{mbrship_id}/withdraw', 'MembershipController@withdrawMembership');
Route::get('/membership/{mbrship_id}/updowngrade', 'MembershipController@updowngrade')->name('membership.updowngrade');
Route::get('/membership/{mbrship_id}/repurchase', 'MembershipController@repurchase');
Route::post('/membership/{mbrship_id}/repurchase', 'MembershipController@addrepurchase')->name('membership.addRepurchase');
Route::get('/membership/{mbrship_id}/reinstate', 'MembershipController@reinstate');
Route::get('/membership/{mbrship_id}/reinstate/details', 'MembershipController@reinstatedetails');
Route::post('/membership/{mbrship_id}/reinstate', 'MembershipController@storereinstate')->name('reinstate.get');
Route::get('/membership/{mbrship_id}/reinstate/download', 'MembershipController@downloadreinstate')->name('reinstate.print');

Route::get('/membership/{mbrship_id}/details', 'MembershipController@redirect')->name('members.redirect');

// Route::get('/membership/pthistory', 'MembershipController@pthistory');
Route::get('/membership/offset', 'MembershipController@entitlementm');

Route::get('/membership/eh', 'MembershipController@entitlementh');

Route::get('/membership/advance', 'MembershipController@advance');
// Route::get('/membership/offset', 'MembershipController@offset');

Route::get('/contacts', 'ContactController@index');
Route::get('/contact/{lead_id}/details', 'ContactController@viewDetails')->name('contact.details');
Route::patch('/contact/{lead_id}/details', 'ContactController@editContact')->name('contact.edit');

Route::get('/leads/all', 'LeadsController@index')->name('leads.all');   
Route::get('/leads/new', 'LeadsController@newLead')->name('leads.new');
Route::get('/leads/{lead_id}/details', 'LeadsController@viewLead')->name('leads.details');
Route::get('/leads/archive', 'LeadsController@showArchive');
Route::post('/leads/new', 'LeadsController@storeLead')->name('leads.store');
Route::post('/leads/all', 'LeadsController@uploadCSV')->name('leads.upload');
Route::post('/leads/{lead_id}/details', 'LeadsController@createEvent')->name('leads.createEvent');
Route::patch('/leads/{lead_id}/details', 'LeadsController@editLead')->name('leads.edit');
Route::patch('/leads/{lead_id}/archive', 'LeadsController@archiveLeads')->name('leads.archive');
Route::post('/leads/details', 'LeadsController@addCall')->name('leads.addCall');
Route::patch('/leads/details', 'LeadsController@updateCall')->name('leads.updateCall');

Route::get('/tours', 'ToursController@index');
Route::get('/tours/{lead_id}/new', 'ToursController@newTour')->name('tours.new');
Route::patch('/tours/{tour_id}/details', 'ToursController@viewDetails')->name('tours.viewDetails');
Route::get('/tours/{tour_id}/details', 'ToursController@showDetails')->name('tours.showDetails');
Route::get('/tours/{tour_id}/attend', 'ToursController@attendTour')->name('tours.attendTour');
Route::patch('/tours','ToursController@editTime')->name('tours.edit');
Route::patch('/{lead_id}/tours','ToursController@storeTour')->name('tours.store');
Route::patch('/tours/{tour_id}/archive', 'ToursController@archiveTour')->name('tours.archive');
Route::get('/tours/archive', 'ToursController@showAllArchive');
// Route::get('/tours/test', 'ToursController@test');

Route::get('/vouchers', 'VouchersController@index');
Route::patch('/vouchers', 'VouchersController@editVoucher')->name('vouchers.edit');
Route::patch('/vouchers/{voucher_id}/archive', 'VouchersController@archiveVoucher')->name('vouchers.archive');

Route::get('/invoice', 'InvoicesController@index');
Route::get('/invoice/new', 'InvoicesController@newInvoice');
Route::post('/invoice/new', 'InvoicesController@storeInvoice')->name('invoice.store');
Route::get('/invoice/{inv_id}/details', 'InvoicesController@viewInvoice')->name('invoice.details');

Route::get('/receipt', 'ReceiptController@index');  
Route::get('/receipt/new', 'ReceiptController@newReceipt');
Route::get('/receipt/details', 'ReceiptController@Receiptdetails');

Route::get('/refund', 'RefundController@index');  
Route::get('/refund/new', 'RefundController@newRefund');
Route::get('/refund/details', 'RefundController@details');

Route::get('/debitnote', 'DebitNoteController@index');  
Route::get('/debitnote/new', 'DebitNoteController@newDebitNote');
Route::get('/debitnote/details', 'DebitNoteController@details');

Route::get('/creditnote', 'CreditNotesController@index');
Route::get('/creditnote/new', 'CreditNotesController@newCreditNote');
Route::get('/creditnote/search', 'CreditNotesController@search');
Route::post('/creditnote/new', 'CreditNotesController@storeCreditNote')->name('creditnote.store');
Route::get('/creditnote/{inv_id}/details', 'CreditNotesController@viewCreditNote')->name('creditnote.details');

Route::get('/installment', 'InstallmentController@index');  
Route::get('/installment/new', 'InstallmentController@newRefund');
Route::get('/installment/{id}/details', 'InstallmentController@details')->name('installment.detail');  
Route::get('/installment/{id}/rescheduledetails', 'InstallmentController@showreschedule')->name('installment.rescheduledetail'); 
Route::post('/installment/{id}/save', 'InstallmentController@save')->name('installment.save');  
Route::get('/installment/calculator', 'InstallmentController@calculator');
Route::get('/installment/{id}/approve', 'InstallmentController@approve');
Route::get('/installment/{id}/reject', 'InstallmentController@reject');
Route::get('/installment/amfall', 'InstallmentController@amfall');
Route::get('/installment/amfdetails', 'InstallmentController@amfdetails');

Route::get('/contra', 'ContraController@index');
Route::get('/contra/new', 'ContraController@new');
Route::get('/contra/details', 'ContraController@details');

Route::get('/report/stampingfee', 'ReportController@showBatchList');  
Route::get('/report/stampingfee/ready', 'ReportController@showReadyStamp')->name('stamp.ready');  
Route::post('/report/stampingfee/new', 'ReportController@createBatch')->name('stamp.create');  
Route::get('/report/stampingfee/{batch_id}/details', 'ReportController@showBatchDetail')->name('stamp.details');  
Route::post('/report/stampingfee/{batch_id}/new', 'ReportController@addNewStamp')->name('stamp.addStamp');  
Route::patch('/report/stampingfee/{batch_id}/new', 'ReportController@deleteStamp')->name('stamp.deleteStamp');  
Route::patch('/report/stampingfee', 'ReportController@changeStatus')->name('stamp.changeStatus');

Route::get('/report/stampingfee/{batch_id}', 'ReportController@exportExcel')->name('stamp.export');
Route::get('/report/stampingfee/{batch_id}/{batch_no}', 'ReportController@exportExcel_LHDN')->name('stamp.export_LHDN');  
Route::get('/report/accstatement', 'ReportController@accstatement');  
Route::get('/report/accstatement/details', 'ReportController@accstatementdetails');  

Route::get('/report/activitylog', 'ReportController@activitylog');
Route::get('/report/stampingfeedetails', 'ReportController@stampingfeedetails');
Route::get('/report/calculator', 'ReportController@calculator');
Route::get('/report/stampingfeedprintdownload', 'ReportController@download');

Route::get('/eventlogs', 'EventLogsController@index');
Route::get('/eventlogs/{event_id}/details', 'EventLogsController@eventDetails')->name('event.details');
Route::patch('/eventlogs', 'EventLogsController@eventUpdate')->name('event.update');
Route::post('/eventlogs', 'EventLogsController@eventCreate')->name('event.create');

Route::post('/eventlogs/{event_id}/{lead_id}', 'EventLogsController@communicationCreate')->name('event.newCom');

Route::post('/eventlogs/{event_id}', 'EventLogsController@upload')->name('event.upload');
Route::get('/eventlogs/{filename}', 'EventLogsController@download')->name('event.download');


Route::get('/cardprintinglist', 'CardPrintingController@showCardBatch')->name('card.batch');
Route::post('/cardprintinglist/new', 'CardPrintingController@createBatch')->name('card.create');
Route::get('/cardprintinglist/ready', 'CardPrintingController@showReadyPrint')->name('card.ready');
Route::get('/cardprintinglist/{batch_id}/details', 'CardPrintingController@showCardBatchDetails')->name('card.details');
Route::post('/cardprintinglist/{batch_id}/new', 'CardPrintingController@addNewCard')->name('card.addCard');
Route::patch('/cardprintinglist/{batch_no}/details', 'CardPrintingController@deleteCard')->name('card.deleteCard');
Route::patch('/cardprintinglist', 'CardPrintingController@changeStatus')->name('card.changeStatus');

Route::get('/cardprintinglist/{batch_id}', 'CardPrintingController@exportExcel')->name('card.export');

// Route::get('/dispatch', 'CardPrintingController@dispatch');

Route::get('/dispatch', 'DispatchController@index');
Route::post('/dispatch', 'DispatchController@uploadCSV')->name('dispatch.upload');
Route::post('/dispatch/{dispatch_id}', 'DispatchController@uploadAttachments')->name('dispatch.uploadAttach');
Route::get('/eventlogs/{filename}', 'DispatchController@downloadAttachments')->name('dispatch.downloadAttach');
Route::get('/eventlogs/{filename}/{dispatch_id}', 'DispatchController@downloadSample')->name('dispatch.downloadSample');

Route::patch('/eventlogs/{dispatch_id}/{dispatch_no}/{dispatch_no2}', 'DispatchController@deleteDispatch')->name('dispatch.delete');

Route::get('/reservations', 'ReservationController@index');
Route::get('/reservations/details', 'ReservationController@hoteldetails')->name('rsvn.details');
Route::get('/reservations/new', 'ReservationController@addnew');
Route::patch('/reservations/new', 'ReservationController@savenew');
Route::get('/reservations/fdetails', 'ReservationController@facilitydetails');
Route::get('/reservation', 'ReservationController@reservationredirect')->name('rsvn.bring');
Route::get('/rtest','ReservationController@test');
Route::get('/getmemberdetail/{id}','ReservationController@memberdetail');
Route::get('/getroom/{id}','ReservationController@getroom');

Route::get('/batchpayment', 'BatchPaymentController@index');
Route::get('/batchpayment/details', 'BatchPaymentController@details');
Route::get('/batchpayment/new', 'BatchPaymentController@new');

Route::get('/communicationlog', 'CommunicationLogController@index');
Route::get('/communicationlog/new', 'CommunicationLogController@newLog');

Route::get('/ictrequest', 'IctRequestController@index');

Route::get('/inventory', 'InventoryController@index');
Route::get('/inventory1', 'InventoryController@indexrefer');

Route::get('/offsetreminder', 'InventoryController@offset');
//Task Assignment
Route::get('/taskassign', 'TaskAssignmentController@index');
Route::post('/taskassign', 'TaskAssignmentController@uploadCSV');

Route::get('/approval', 'ApprovalController@index');


Route::get('/extmemberships', 'ExtMembershipController@index');
Route::get('/extmembership/enrollment/details', 'ExtMembershipController@enrolldetails');
Route::get('/extmembership/rcienrollment/newbatch', 'ExtMembershipController@rcinewbatch')->name('rcienrollbatch.new');
Route::get('/extmembership/iienrollment/newbatch', 'ExtMembershipController@iinewbatch')->name('iienrollbatch.new');;
Route::get('/extmembership/enrollment/batch/details', 'ExtMembershipController@enrolldetails');

Route::get('/extmembership/iiru', 'ExtMembershipController@iiruall');
Route::get('/extmembership/iiru/new', 'ExtMembershipController@iirunew')->name('iiru.new');
Route::patch('/extmembership/iiru/new', 'ExtMembershipController@iirusavenew');
Route::get('/extmembership/iiru/edit/{id}', 'ExtMembershipController@iiruedit')->name('iiru.edit');
Route::patch('/extmembership/iiru/edit/{id}', 'ExtMembershipController@iirusaveold');
Route::get('/extmembership/iiru/details/{id}', 'ExtMembershipController@iirudetails');

Route::get('/extmembership/rcibb', 'ExtMembershipController@rcibball');
Route::get('/extmembership/rcibb/new', 'ExtMembershipController@rcibbnew')->name('rcibb.new');
Route::patch('/extmembership/rcibb/new', 'ExtMembershipController@rcibbsavenew');
Route::get('/extmembership/rcibb/details/{id}', 'ExtMembershipController@rcibbdetails');
Route::get('/extmembership/rcibb/new', 'ExtMembershipController@rcibbnew')->name('rcibb.new');
Route::patch('/extmembership/rcibb/new', 'ExtMembershipController@rcibbsavenew');
Route::get('/extmembership/rcibb/details/{id}', 'ExtMembershipController@rcibbdetails');

Route::get('/admin/ictrequest', 'UsersRolesController@ictrequest');
Route::post('/admin/ictrequest', 'UsersRolesController@ictredirect')->name('ict.bring');
Route::get('/admin/{ict_id}/{ict_status}/ictrequest', 'UsersRolesController@changestatus')->name('ict.status');
Route::get('/admin/{ict_req_id}/ictrequest', 'UsersRolesController@rejectstatus')->name('ict.reject');
Route::get('/admin/newictrequestpoint', 'UsersRolesController@newictrequestpoint')->name('new.points');
Route::post('/admin/newictrequestpoint', 'UsersRolesController@storeictrequestpoint')->name('store.points');
    
Route::get('/admin/newictrequestacc', 'UsersRolesController@newictrequestacc');
Route::post('/admin/newictrequestacc', 'UsersRolesController@storeictrequestacc')->name('store.acc');
Route::get('/admin/ictaccdetails', 'UsersRolesController@ictrequestaccdetails')->name('acc.details');
Route::get('/admin/{pict_req_id}/ictptdetails', 'UsersRolesController@ictrequestptdetails')->name('pt.details');
Route::patch('/admin/{pict_req_id}/ictptdetails', 'UsersRolesController@updatepoint')->name('pt.update');
Route::get('/userroles', 'UsersRolesController@userroles');
Route::post('/roles/new', 'UsersRolesController@newroles')->name('new.roles');
Route::get('/userroles/{role_id}/{is_active}', 'UsersRolesController@activation')->name('staff.status');
Route::post('/staff/new', 'UsersRolesController@newusersstaff')->name('new.staff');

Route::get('/pt&ent_management', 'PointAndEntitlementManagementController@index');
Route::post('/signature/new', 'UsersRolesController@createsignature')->name('signature.create');

Route::get('/aging', 'AgingReminderController@index');
Route::get('/agingdetails', 'AgingReminderController@aginreminderdetails');
Route::get('/occupancy-report', 'AgingReminderController@occupancyreport');
Route::get('/tourismtax', 'AgingReminderController@tourismtax');

Route::get('/admin/acc&cc', 'UsersRolesController@accccdn');
Route::get('/admin/contactsetup', 'UsersRolesController@contactsetup');
// Route::get('/countries', 'Countries@list');
// Route::get('/add-to-logs', 'HomeController@myTestAddToLog');
// Route::get('/logActivity', 'HomeController@logActivity');

//Application Routes
Route::get('/app-email','ApplicationController@emailApplication');
Route::get('/app-chat','ApplicationController@chatApplication');
Route::get('/app-todo','ApplicationController@todoApplication');
Route::get('/app-calendar','ApplicationController@calendarApplication');
Route::get('/app-kanban','ApplicationController@kanbanApplication');
Route::get('/app-invoice-view','ApplicationController@invoiceApplication');
Route::get('/app-invoice-list','ApplicationController@invoiceListApplication');
Route::get('/app-invoice-edit','ApplicationController@invoiceEditApplication');
Route::get('/app-invoice-add','ApplicationController@invoiceAddApplication');
Route::get('/app-file-manager','ApplicationController@fileManagerApplication');

// Content Page Routes
Route::get('/content-grid','ContentController@gridContent');
Route::get('/content-typography','ContentController@typographyContent');
Route::get('/content-text-utilities','ContentController@textUtilitiesContent');
Route::get('/content-syntax-highlighter','ContentController@contentSyntaxHighlighter');
Route::get('/content-helper-classes','ContentController@contentHelperClasses');
Route::get('/form-date-time-picker','FormController@datePickerForm');
Route::get('/form-layout','FormController@formLayout');
Route::get('/form-wizard','FormController@formWizard');
Route::get('/form-validation','FormController@formValidation');
Route::get('/form-repeater','FormController@formRepeater');
// table route
Route::get('/table','TableController@basicTable');
Route::get('/extended','TableController@extendedTable');
Route::get('/datatable','TableController@dataTable');
// page Route
Route::get('/page-user-profile','PageController@userProfilePage');
Route::get('/page-faq','PageController@faqPage');
Route::get('/page-knowledge-base','PageController@knowledgeBasePage');
Route::get('/page-knowledge-base/categories','PageController@knowledgeCatPage');
Route::get('/page-knowledge-base/categories/question','PageController@knowledgeQuestionPage');
Route::get('/page-search','PageController@searchPage');
Route::get('/page-account-settings','PageController@accountSettingPage');
// User Route
Route::get('/page-users-list','UsersController@listUser');
Route::get('/page-users-view','UsersController@viewUser');
Route::get('/page-users-edit','UsersController@editUser');
// Authentication  Route
Route::get('/auth-login','AuthenticationController@loginPage');
Route::get('/auth-register','AuthenticationController@registerPage');
Route::get('/auth-forgot-password','AuthenticationController@forgetPasswordPage');
Route::get('/auth-reset-password','AuthenticationController@resetPasswordPage');
Route::get('/auth-lock-screen','AuthenticationController@authLockPage');
// Miscellaneous
Route::get('/page-coming-soon','MiscellaneousController@comingSoonPage');
Route::get('/error-404','MiscellaneousController@error404Page');
Route::get('/error-500','MiscellaneousController@error500Page');
Route::get('/page-not-authorized','MiscellaneousController@notAuthPage');
Route::get('/page-maintenance','MiscellaneousController@maintenancePage');
// Charts Route
Route::get('/chart-apex','ChartController@apexChart');
Route::get('/chart-chartjs','ChartController@chartJs');
Route::get('/chart-chartist','ChartController@chartist');
Route::get('/maps-google','ChartController@googleMap');
// extension route
Route::get('/ext-component-sweet-alerts','ExtensionsController@sweetAlert');
Route::get('/ext-component-toastr','ExtensionsController@toastr');
Route::get('/ext-component-noui-slider','ExtensionsController@noUiSlider');
Route::get('/ext-component-drag-drop','ExtensionsController@dragComponent');
Route::get('/ext-component-tour','ExtensionsController@tourComponent');
Route::get('/ext-component-swiper','ExtensionsController@swiperComponent');
Route::get('/ext-component-treeview','ExtensionsController@treeviewComponent');
Route::get('/ext-component-block-ui','ExtensionsController@blockUIComponent');
Route::get('/ext-component-media-player','ExtensionsController@mediaComponent');
Route::get('/ext-component-miscellaneous','ExtensionsController@miscellaneous');
Route::get('/ext-component-i18n','ExtensionsController@i18n');
// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);

// acess controller
Route::get('/access-control', 'AccessController@index');
Route::get('/access-control/{roles}', 'AccessController@roles');
Route::get('/ecommerce', 'AccessController@home')->middleware('role:Admin');

Auth::routes();