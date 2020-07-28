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

Route::post('/membership/new', 'MembershipController@storeMembers')->name('members.store');//name only for posting


Route::get('/membership/archive', 'MembershipController@archive');
Route::get('/membership/{tour_id}/details', 'MembershipController@showMembers');
Route::get('/membership/details', 'MembershipController@redirect')->name('members.redirect');
Route::get('/membership/transfer', 'MembershipController@transfer')->name('members.transfer');    
Route::get('/membership/withdraw', 'MembershipController@withdrawMembership');
Route::get('/membership/updowngrade', 'MembershipController@updowngrade')->name('members.updowngrade');
Route::get('/membership/repurchase', 'MembershipController@repurchase');
Route::get('/membership/pthistory', 'MembershipController@pthistory');
Route::get('/membership/em', 'MembershipController@entitlementm');
Route::get('/membership/eh', 'MembershipController@entitlementh');
Route::get('/membership/advance', 'MembershipController@advanceent');
Route::get('/membership/offset', 'MembershipController@offset');

Route::get('/contacts', 'ContactsController@index');
Route::get('/contacts/{lead_id}/details', 'ContactsController@viewDetails')->name('contacts.details');
Route::patch('/contacts/{lead_id}/details', 'ContactsController@editContact')->name('contacts.edit');

Route::get('/leads/all', 'LeadsController@index')->name('leads.all');   
Route::get('/leads/new', 'LeadsController@newLead')->name('leads.new');
Route::get('/leads/{lead_id}/details', 'LeadsController@viewLead')->name('leads.details');
Route::get('/leads/archive', 'LeadsController@archive');
Route::post('/leads/new', 'LeadsController@storeLead')->name('leads.store');
Route::post('/leads/all', 'LeadsController@uploadCSV')->name('leads.csvUpload');
Route::post('/leads/{lead_id}/details', 'LeadsController@createEvent')->name('leads.createEvent');
Route::patch('/leads/{lead_id}/details', 'LeadsController@editLead')->name('leads.edit');
Route::patch('/leads/archive', 'LeadsController@archiveLeads')->name('leads.archive');
Route::post('/leads/details', 'LeadsController@addCall')->name('leads.addCall');
Route::patch('/leads/details', 'LeadsController@updateCall')->name('leads.updateCall');

Route::get('/tours', 'ToursController@index');
Route::get('/tours/{lead_id}/new', 'ToursController@newTour')->name('tours.new');
Route::patch('/tours/{tour_id}/details', 'ToursController@viewDetails')->name('tours.viewDetails');
Route::get('/tours/{tour_id}/details', 'ToursController@showDetails')->name('tours.showDetails');
Route::get('/tours/{tour_id}/attend', 'ToursController@attendTour')->name('tours.attendTour');
Route::patch('/tours','ToursController@editTime')->name('tours.edit');
Route::patch('/{lead_id}/tours','ToursController@storeTour')->name('tours.store');
Route::get('/tours/{tour_id}/archive', 'ToursController@archive');

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

Route::get('/creditnote', 'CreditNotesController@index');
Route::get('/creditnote/new', 'CreditNotesController@newCreditNote');
Route::get('/creditnote/search', 'CreditNotesController@search');
Route::post('/creditnote/new', 'CreditNotesController@storeCreditNote')->name('creditnote.store');
Route::get('/creditnote/{inv_id}/details', 'CreditNotesController@viewCreditNote')->name('creditnote.details');

Route::get('/installment', 'InstallmentController@index');  
Route::get('/installment/new', 'InstallmentController@newRefund');
Route::get('/installment/details', 'InstallmentController@details');
Route::get('/installment/calculator', 'InstallmentController@calculator');
Route::get('/installment/amfall', 'InstallmentController@amfall');
Route::get('/installment/amfdetails', 'InstallmentController@amfdetails');

Route::get('/report/stampingfee', 'ReportController@stampingfee');  
Route::get('/report/activitylog', 'ReportController@activitylog');
Route::get('/report/stampingfeedetails', 'ReportController@stampingfeedetails');
Route::get('/report/calculator', 'ReportController@calculator');
Route::get('/report/stampingfeedprintdownload', 'ReportController@download');

Route::get('/eventlogs', 'EventLogsController@index');
Route::get('/eventlogs/details', 'EventLogsController@details');

Route::get('/membershipdeckdispatch/supplier', 'MembershipDeckDispatchController@showsupplier');
Route::get('/membershipdeckdispatch/supplierdetails', 'MembershipDeckDispatchController@supplierdetails');

Route::get('/reservations', 'ReservationController@index');
Route::get('/reservations/details', 'ReservationController@hoteldetails')->name('rsvn.details');
Route::get('/reservations/new', 'ReservationController@addnew');
Route::get('/reservations/fdetails', 'ReservationController@facilitydetails');
Route::get('/reservations', 'ReservationController@reservationredirect')->name('rsvn.bring');


Route::get('/communicationlog', 'CommunicationLogController@index');
Route::get('/communicationlog/new', 'CommunicationLogController@newLog');

Route::get('/ictrequest', 'IctRequestController@index');

Route::get('/inventory', 'InventoryController@index');

Route::get('/taskassign', 'TaskAssignmentController@index');
Route::post('/taskassign', 'TaskAssignmentController@uploadcsv')->name('task.upload');

Route::get('/approval', 'ApprovalController@index');

Route::get('/extmembership', 'ExtMembershipController@index');
Route::get('/extmembership/rcibb', 'ExtMembershipController@rcibball');
Route::get('/extmembership/new', 'ExtMembershipController@newBatch');
Route::get('/extmembership/details', 'ExtMembershipController@IIdetails');

Route::get('/extmembership/rcinew', 'ExtMembershipController@rcinew');
Route::get('/extmembership/rcibbdetails', 'ExtMembershipController@rcibbdetails');
Route::get('/extmembership/rcienrollment', 'ExtMembershipController@rcienrollment');
Route::get('/extmembership/rcinewenroll', 'ExtMembershipController@rcinewenroll');
Route::get('/extmembership/IInewenroll', 'ExtMembershipController@IInewenroll');

Route::get('/aging', 'AgingReminderController@index');

Route::get('/ictrequest', 'UsersRolesController@ictrequest');
Route::get('/userroles', 'UsersRolesController@userroles');
Route::get('/roledetails', 'UsersRolesController@roledetails');
Route::get('/basicpermissions', 'UsersRolesController@basicpermissions');
Route::get('/admin/approvals', 'UsersRolesController@approvals');
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
Route::get('/colors','ContentController@colorContent');
// icons
Route::get('/icons-livicons','IconsController@liveIcons');
Route::get('/icons-boxicons','IconsController@boxIcons');
// card
Route::get('/card-basic','CardController@basicCard');
Route::get('/card-actions','CardController@actionCard');
Route::get('/widgets','CardController@widgets');
// component route
Route::get('/component-alerts','ComponentController@alertComponenet');
Route::get('/component-buttons-basic','ComponentController@buttonComponenet');
Route::get('/component-breadcrumbs','ComponentController@breadcrumbsComponenet');
Route::get('/component-carousel','ComponentController@carouselComponenet');
Route::get('/component-collapse','ComponentController@collapseComponenet');
Route::get('/component-dropdowns','ComponentController@dropdownComponenet');
Route::get('/component-list-group','ComponentController@listGroupComponenet');
Route::get('/component-modals','ComponentController@modalComponenet');
Route::get('/component-pagination','ComponentController@paginationComponenet');
Route::get('/component-navbar','ComponentController@navbarComponenet');
Route::get('/component-tabs-component','ComponentController@tabsComponenet');
Route::get('/component-pills-component','ComponentController@pillComponenet');
Route::get('/component-tooltips','ComponentController@tooltipsComponenet');
Route::get('/component-popovers','ComponentController@popoversComponenet');
Route::get('/component-badges','ComponentController@badgesComponenet');
Route::get('/component-pill-badges','ComponentController@pillBadgesComponenet');
Route::get('/component-progress','ComponentController@progressComponenet');
Route::get('/component-media-objects','ComponentController@mediaObjectComponenet');
Route::get('/component-spinner','ComponentController@spinnerComponenet');
Route::get('/component-bs-toast','ComponentController@toastsComponenet');
// extra component
Route::get('/ex-component-avatar','ExComponentController@avatarComponent');
Route::get('/ex-component-chips','ExComponentController@chipsComponent');
Route::get('/ex-component-divider','ExComponentController@dividerComponent');
// form elements
Route::get('/form-inputs','FormController@inputForm');
Route::get('/form-input-groups','FormController@inputGroupForm');
Route::get('/form-number-input','FormController@numberInputForm');
Route::get('/form-select','FormController@selectForm');
Route::get('/form-radio','FormController@radioForm');
Route::get('/form-checkbox','FormController@checkboxForm');
Route::get('/form-switch','FormController@switchForm');
Route::get('/form-textarea','FormController@textareaForm');
Route::get('/form-quill-editor','FormController@quillEditorForm');
Route::get('/form-file-uploader','FormController@fileUploaderForm');
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
