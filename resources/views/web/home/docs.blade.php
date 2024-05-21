<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Guide | MAZMed</title>
    <meta name="description" content="MAZMed is to give an easy way to connect with your staff">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('web_front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web_front/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('web_front/css/circular-std-font-face.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web_front/css/style.css') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('web_front/js/popper.min.js') }}"></script>
    <script src="{{ asset('web_front/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/js/lightgallery.js"></script>
    <meta name="description" content="MAZMed is to give an easy way to connect with your staff">
    <link rel="preload" href="{{ asset('web_front/assets/css/0.styles.c7307597.css') }}" as="style">
    <link rel="preload" href="{{ asset('web_front/js/styles.js') }}" as="script">
    <link rel="preload" href="{{ asset('web_front/js/1.js') }}" as="script">
    <link rel="preload" href="{{ asset('web_front/js/2.js') }}" as="script">
    <link rel="preload" href="{{ asset('web_front/js/10.js') }}" as="script">
    <link rel="prefetch" href="{{ asset('web_front/js/11.js') }}">
    <link rel="prefetch" href="{{ asset('web_front/js/12.js') }}">
    <link rel="prefetch" href="{{ asset('web_front/js/3.js') }}">
    <link rel="prefetch" href="{{ asset('web_front/js/4.js') }}">
    <link rel="prefetch" href="{{ asset('web_front/js/5.js') }}">
    <link rel="prefetch" href="{{ asset('web_front/js/6.js') }}">
    <link rel="prefetch" href="{{ asset('web_front/js/7.js') }}">
    <link rel="prefetch" href="{{ asset('web_front/js/8.js') }}">
    <link rel="prefetch" href="{{ asset('web_front/js/9.js') }}">
    <link rel="stylesheet" href="{{ asset('web_front/assets/css/0.styles.c7307597.css') }}">
</head>
<body>
<div id="app" data-server-rendered="true">
    <div class="theme-container">
        <header class="navbar">
            <div class="sidebar-button">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" viewBox="0 0 448 512"
                     class="icon">
                    <path fill="currentColor"
                          d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"></path>
                </svg>
            </div>
            <a href="index.html" class="home-link router-link-active"><img src="{{ asset('web_front/images/logo.png') }}" alt="MAZMed" class="logo">
                <span class="site-name can-hide">By MAZCODEX</span></a>
            <div class="links"><!---->
                <nav class="nav-links can-hide">
                    <div class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></div>
                    <div class="nav-item"><a href="{{ url('/docs') }}" class="nav-link router-link-exact-active router-link-active">Docs</a>
                    </div>
                    <div class="nav-item"><a href="{{ url('/releases') }}" class="nav-link">Releases</a></div>
            </div>
        </header>
        <div class="sidebar-mask"></div>
        <aside class="sidebar">
            <nav class="nav-links">
                <div class="nav-item"><a href="{{ url('/main') }}" class="nav-link">Home</a></div>
                <div class="nav-item"><a href="{{ url('/docs') }}"
                                         class="nav-link router-link-exact-active router-link-active">Docs</a></div>
                <div class="nav-item"><a href="{{ url('/releases') }}" class="nav-link">Releases</a></div>
            </nav>
            <ul class="sidebar-links">
                <li>
                    <section class="sidebar-group depth-0"><p class="sidebar-heading open"><span>Guide</span> <!---->
                    </p>
                        <ul class="sidebar-links sidebar-group-items">
                            <li><a href="#technologies-used" class="sidebar-link">Technologies Used</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#key-features-and-concepts" class="sidebar-link">Key Features and
                                Concepts</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#dashboard" class="sidebar-link">Dashboard</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#expense-income-charts"
                                                                      class="sidebar-link">Expense/Income Charts</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#users" class="sidebar-link">Users</a>
                            </li>
                            <li><a href="#ipd-in-patient-department" class="sidebar-link">IPD (In Patient
                                Department)</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#consultant-register"
                                                                      class="sidebar-link">Consultant Register</a></li>
                                    <li class="sidebar-sub-header"><a href="#diagnosis" class="sidebar-link">Diagnosis</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#timeline" class="sidebar-link">Timeline</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#prescription" class="sidebar-link">Prescription</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#charges"
                                                                      class="sidebar-link">Charges</a></li>
                                    <li class="sidebar-sub-header"><a href="#payments" class="sidebar-link">Payments</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#opd-out-patient-department" class="sidebar-link">OPD (Out Patient
                                Department)</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#visits"
                                                                      class="sidebar-link">Visits</a></li>
                                    <li class="sidebar-sub-header"><a href="#timelines" class="sidebar-link">Timelines</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#diagnosis-2" class="sidebar-link">Diagnosis</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#billing" class="sidebar-link">Billing</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#accounts-types" class="sidebar-link">Accounts
                                        Types</a></li>
                                    <li class="sidebar-sub-header"><a href="#invoices" class="sidebar-link">Invoices</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#bills" class="sidebar-link">Bills</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#payments-2" class="sidebar-link">Payments</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#advanced-payments"
                                                                      class="sidebar-link">Advanced Payments</a></li>
                                    <li class="sidebar-sub-header"><a href="#employee-payrolls"
                                                                      class="sidebar-link">Employee Payrolls</a></li>
                                </ul>
                            </li>
                            <li><a href="#bed-management" class="sidebar-link">Bed Management</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#bed-types" class="sidebar-link">Bed
                                        Types</a></li>
                                    <li class="sidebar-sub-header"><a href="#beds" class="sidebar-link">Beds</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#bed-assignment" class="sidebar-link">Bed
                                        Assignment</a></li>
                                    <li class="sidebar-sub-header"><a href="#bed-availability-graphic-view"
                                                                      class="sidebar-link">Bed Availability Graphic
                                        View</a></li>
                                </ul>
                            </li>
                            <li><a href="#blood-bank" class="sidebar-link">Blood Bank</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#blood-bags" class="sidebar-link">Blood
                                        Bags</a></li>
                                    <li class="sidebar-sub-header"><a href="#blood-donors" class="sidebar-link">Blood
                                        Donors</a></li>
                                    <li class="sidebar-sub-header"><a href="#blood-donations" class="sidebar-link">Blood
                                        Donations</a></li>
                                    <li class="sidebar-sub-header"><a href="#blood-issues" class="sidebar-link">Blood
                                        Issues</a></li>
                                </ul>
                            </li>
                            <li><a href="#cases-management" class="sidebar-link">Cases Management</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#cases" class="sidebar-link">Cases</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#case-handlers" class="sidebar-link">Case
                                        Handlers</a></li>
                                </ul>
                            </li>
                            <li><a href="#patient-admissions" class="sidebar-link">Patient Admissions</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#documents" class="sidebar-link">Documents</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#document-types" class="sidebar-link">Document
                                        Types</a></li>
                                    <li class="sidebar-sub-header"><a href="#documents-2" class="sidebar-link">Documents</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#services" class="sidebar-link">Services</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#insurances" class="sidebar-link">Insurances</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#packages" class="sidebar-link">Packages</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#services-2" class="sidebar-link">Services</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#ambulance" class="sidebar-link">Ambulance</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#ambulance-call" class="sidebar-link">Ambulance
                                        Call</a></li>
                                </ul>
                            </li>
                            <li><a href="#doctors" class="sidebar-link">Doctors</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#doctors-2" class="sidebar-link">Doctors</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#doctor-departments"
                                                                      class="sidebar-link">Doctor Departments</a></li>
                                    <li class="sidebar-sub-header"><a href="#doctor-schedules"
                                                                      class="sidebar-link">Doctor Schedules</a></li>
                                    <li class="sidebar-sub-header"><a href="#prescription-2" class="sidebar-link">Prescription</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#reports" class="sidebar-link">Reports</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#birth-reports" class="sidebar-link">Birth
                                        Reports</a></li>
                                    <li class="sidebar-sub-header"><a href="#investigation-reports"
                                                                      class="sidebar-link">Investigation Reports</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#death-reports" class="sidebar-link">Death
                                        Reports</a></li>
                                    <li class="sidebar-sub-header"><a href="#operation-reports"
                                                                      class="sidebar-link">Operation Reports</a></li>
                                </ul>
                            </li>
                            <li><a href="#accountants" class="sidebar-link">Accountants</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#nurses" class="sidebar-link">Nurses</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#patients" class="sidebar-link">Patients</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#receptionist" class="sidebar-link">Receptionist</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#pharmacists" class="sidebar-link">Pharmacists</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#lab-technicians" class="sidebar-link">Lab Technicians</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#appointments" class="sidebar-link">Appointments</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#medicines" class="sidebar-link">Medicines</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#medicine-categories"
                                                                      class="sidebar-link">Medicine Categories</a></li>
                                    <li class="sidebar-sub-header"><a href="#medicine-brands"
                                                                      class="sidebar-link">Medicine Brands</a></li>
                                    <li class="sidebar-sub-header"><a href="#medicines-2" class="sidebar-link">Medicines</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#finance" class="sidebar-link">Finance</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#income"
                                                                      class="sidebar-link">Income</a></li>
                                    <li class="sidebar-sub-header"><a href="#expense"
                                                                      class="sidebar-link">Expense</a></li>
                                </ul>
                            </li>
                            <li><a href="#hospital-charge" class="sidebar-link">Hospital Charge</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#charge-category"
                                                                      class="sidebar-link">Charge Category</a></li>
                                    <li class="sidebar-sub-header"><a href="#charges-2" class="sidebar-link">Charges</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#opd-charges" class="sidebar-link">OPD
                                        Charges</a></li>
                                </ul>
                            </li>
                            <li><a href="#radiology" class="sidebar-link">Radiology</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#radiology-category"
                                                                      class="sidebar-link">Radiology Category</a></li>
                                    <li class="sidebar-sub-header"><a href="#radiology-test" class="sidebar-link">Radiology
                                        Test</a></li>
                                </ul>
                            </li>
                            <li><a href="#pathology" class="sidebar-link">Pathology</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#pathology-category"
                                                                      class="sidebar-link">Pathology Category</a></li>
                                    <li class="sidebar-sub-header"><a href="#pathology-test" class="sidebar-link">Pathology
                                        Test</a></li>
                                </ul>
                            </li>
                            <li><a href="#diagnosis-3" class="sidebar-link">Diagnosis</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#diagnosis-category"
                                                                      class="sidebar-link">Diagnosis Category</a></li>
                                    <li class="sidebar-sub-header"><a href="#patient-diagnosis-test"
                                                                      class="sidebar-link">Patient Diagnosis Test</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#sms-using-twilio" class="sidebar-link">SMS (Using Twilio)</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#book-appointment" class="sidebar-link">Book Appointment</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#doctor-appointment"
                                                                      class="sidebar-link">Doctor Appointment</a></li>
                                </ul>
                            </li>
                            <li><a href="#inventory-management" class="sidebar-link">Inventory Management</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#item-categories"
                                                                      class="sidebar-link">Item Categories</a></li>
                                    <li class="sidebar-sub-header"><a href="#items" class="sidebar-link">Items</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#item-stock" class="sidebar-link">Item
                                        Stock</a></li>
                                    <li class="sidebar-sub-header"><a href="#issue-an-item" class="sidebar-link">Issue
                                        an Item</a></li>
                                </ul>
                            </li>
                            <li><a href="#settings" class="sidebar-link">Settings</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#notice-boards" class="sidebar-link">Notice
                                        Boards</a></li>
                                    <li class="sidebar-sub-header"><a href="#testimonials" class="sidebar-link">Testimonials</a></li>
                                    <li class="sidebar-sub-header"><a href="#settings-2" class="sidebar-link">Settings</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#multi-currency" class="sidebar-link">Multi-Currency</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#multi-language" class="sidebar-link">Multi-Language</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#other-settings" class="sidebar-link">Other Settings</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#mail-service" class="sidebar-link">Mail Service</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#export-data-support" class="sidebar-link">Export Data Support</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#front-office" class="sidebar-link">Front Office</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#call-logs" class="sidebar-link">Call
                                        Logs</a></li>
                                    <li class="sidebar-sub-header"><a href="#visitors" class="sidebar-link">Visitors</a>
                                    </li>
                                    <li class="sidebar-sub-header"><a href="#postal-receive" class="sidebar-link">Postal
                                        Receive</a></li>
                                    <li class="sidebar-sub-header"><a href="#postal-disppatch"
                                                                      class="sidebar-link">Postal Disppatch</a></li>
                                </ul>
                            </li>
                            <li><a href="#live-consultations-section" class="sidebar-link">Live Consultations</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#live-consultations" class="sidebar-link">Live Consultations</a></li>
                                    <li class="sidebar-sub-header"><a href="#live-meetings" class="sidebar-link">Live Meetings</a></li>
                                </ul>
                            </li>
                            <li><a href="#module-on-off-support-added" class="sidebar-link">Module on/off support
                                added</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#front-setting-added" class="sidebar-link">Front Setting Module added</a>
                                <ul class="sidebar-sub-headers"></ul>
                            </li>
                            <li><a href="#trouble-shooting" class="sidebar-link">Trouble shooting ??</a>
                                <ul class="sidebar-sub-headers">
                                    <li class="sidebar-sub-header"><a href="#how-to-add-custom-currency-into-hms"
                                                                      class="sidebar-link">How to add custom currency
                                        into MAZMed ?</a></li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </li>
            </ul>
        </aside>
        <main class="page">
            <div class="theme-default-content content__default"><h1 id="guide"><a href="#guide"
                                                                                  class="header-anchor">#</a> Guide</h1>
                <p>The goal of MAZMed is to give an easy way for managing hospital activities at an affordable price.</p>
                <h2 id="technologies-used"><a href="#technologies-used" class="header-anchor">#</a> Technologies Used
                </h2>
                <p>This system uses multiple technologies to give the best possible experience.</p>
                <ul>
                    <li>PHP with Laravel Framework</li>
                    <li>MySQL 5.6+</li>
                    <li>PHP 7.2+</li>
                    <li>jQuery</li>
                    <li>Ajax</li>
                </ul>
                <h2 id="key-features-and-concepts"><a href="#key-features-and-concepts" class="header-anchor">#</a> Key
                    Features and Concepts</h2>
                <p>Here are some Key Features and Concepts that MAZMed provides.</p>
                <h2 id="dashboard"><a href="#dashboard" class="header-anchor">#</a> Dashboard</h2>
                <p>Admin can get insights of the total sum of Invoices, Bills, Payments and advance payments
                    beautifully. Also, he will be able to see the total number of Doctors, Patients, and available Beds.
                    Also, an admin will be able to access all the data and add/update everything in the system and
                    manage currencies and languages.</p>
                <h3 id="expense-income-charts"><a href="#expense-income-charts" class="header-anchor">#</a>
                    Expense/Income Charts</h3>
                <p>You can show your expenses/incomes in bar chart into dashboard. you can also filter them according to
                    date-range whatever you want.</p>
                <h2 id="users"><a href="#users" class="header-anchor">#</a> Users</h2>
                <p>Admin can add new users for specific role wise by using this module.</p>
                <h2 id="ipd-in-patient-department"><a href="#ipd-in-patient-department" class="header-anchor">#</a> IPD
                    (In Patient Department)</h2>
                <p>Admin can manage Patient IPD details in this module. IPD is like Patient admission where admin can
                    manage all details when patient is admitted and which bed he/she reserved.</p>
                <p>There is charges management too in which patient charges should be managed and from it admin can
                    generate bill.</p>
                <p>Admin/Doctors/Receptionist can able to manage IPD module data.</p>
                <h3 id="consultant-register"><a href="#consultant-register" class="header-anchor">#</a> Consultant
                    Register</h3>
                <p>By using this module admin can add constant for patient. and also add some extra instructions.</p>
                <h3 id="diagnosis"><a href="#diagnosis" class="header-anchor">#</a> Diagnosis</h3>
                <p>By using this module doctors can diagnosis details to patient IPD. doctors can add report type,
                    report date and also attached some document while adding report.</p>
                <h3 id="timeline"><a href="#timeline" class="header-anchor">#</a> Timeline</h3>
                <p>Timeline is like one-one conversations. doctors or admin can add timeline records by date and attach
                    documents to it. Patient should be able to see all the timeline details entered by his
                    consultant.</p>
                <h3 id="prescription"><a href="#prescription" class="header-anchor">#</a> Prescription</h3>
                <p>Doctors can write prescription for patient. in which he can add header and footer notes. and also add
                    medicines details, which medicine patient needs to take and in how much dosage of it.</p>
                <h3 id="charges"><a href="#charges" class="header-anchor">#</a> Charges</h3>
                <p>By using this module you can add charges of patient by charge categories. will do sum of all added
                    charges while generating bill.</p>
                <h3 id="payments"><a href="#payments" class="header-anchor">#</a> Payments</h3>
                <p>Admin can manually accept cash and cheque payments of patient. added payments will be reflected to
                    bill.</p>
                <h2 id="opd-out-patient-department"><a href="#opd-out-patient-department" class="header-anchor">#</a>
                    OPD (Out Patient Department)</h2>
                <p>Outpatient Department. An OPD is a hospital department designed to be a first contact point between
                    the patient, and the hospital staff.
                    This is very usefull to track patient records. it has 3 more sub modules from where you can manage
                    patient details.</p>
                <h3 id="visits"><a href="#visits" class="header-anchor">#</a> Visits</h3>
                <p>By using this module you can check which patient has visited the hospital at which time. all your
                    patient visiting history will manage into this module.</p>
                <p>You can also ask patient to again revisit at specific date.</p>
                <h3 id="timelines"><a href="#timelines" class="header-anchor">#</a> Timelines</h3>
                <p>Admin/Doctors/Receptionist will add timelines to here for patient. here you will add some suggestions
                    for patient. that which medicine he want to take and what is best for him.</p>
                <p>you can add attach a document also for a specific timeline.</p>
                <h3 id="diagnosis-2"><a href="#diagnosis-2" class="header-anchor">#</a> Diagnosis</h3>
                <p>By using this module doctors can diagnosis details to patient IPD. doctors can add report type,
                    report date and also attached some document while adding report.</p>
                <h2 id="billing"><a href="#billing" class="header-anchor">#</a> Billing</h2>
                <h3 id="accounts-types"><a href="#accounts-types" class="header-anchor">#</a> Accounts Types</h3>
                <p>We are providing different types of account types. e.g Credit Account, Debit Account, etc.., You can
                    manage all of your accounts and select account type while you are generating Bills, Invoice or
                    taking payments.</p>
                <h3 id="invoices"><a href="#invoices" class="header-anchor">#</a> Invoices</h3>
                <p>The invoices module provides a facility to create a digital invoice for the patient. You can select
                    Patient, Invoice Date and add some Discount too. We also provide export invoice support. By which
                    you can export PDF for the invoice that you created.</p>
                <h3 id="bills"><a href="#bills" class="header-anchor">#</a> Bills</h3>
                <p>Manage the billing for the patient. All you have to do is select the Patient, Admission ID, and
                    related information will be autofill into the form. A Patient name, his/her Insurance details,
                    Admissions date, Discharge date, etc. You can add some extra items to that bill if you want and
                    generate a final copy of the bill. It also supports the export bill as PDF.</p>
                <h3 id="payments-2"><a href="#payments-2" class="header-anchor">#</a> Payments</h3>
                <p>All payments of patients would be managed by this module. Users can get to know how much payments are
                    received and how much is Due.</p>
                <h3 id="advanced-payments"><a href="#advanced-payments" class="header-anchor">#</a> Advanced Payments
                </h3>
                <p>When any patient is going to be hospitalized there would be a certain process to do that is an
                    advance payment. After making the payment it will be debited from that advance payment.</p>
                <h3 id="employee-payrolls"><a href="#employee-payrolls" class="header-anchor">#</a> Employee Payrolls
                </h3>
                <p>Admin/Accountant can add salary for a specific user including Doctors, Nurses, Pharmacists,
                    Receptionist and many more. The user will be also able to see his/her salary list with details.</p>
                <h2 id="bed-management"><a href="#bed-management" class="header-anchor">#</a> Bed Management</h2>
                <h3 id="bed-types"><a href="#bed-types" class="header-anchor">#</a> Bed Types</h3>
                <p>Users can facilitate their beds for their better convenience and understanding to be featured. Bed
                    types are VIP ward, AC, Non Ac. etc. Plus you can create as per your needs.</p>
                <h3 id="beds"><a href="#beds" class="header-anchor">#</a> Beds</h3>
                <p>Bed managers can add multiple beds and their proper information like Bed Type and all other things
                    related to beds. By default, beds are created as available. Once the bed is assigned to some patient
                    it automatically changed to unavailable.</p>
                <h3 id="bed-assignment"><a href="#bed-assignment" class="header-anchor">#</a> Bed Assignment</h3>
                <p>Beds are salient resources for serving/caring patients in hospitals. But they also provide a place
                    where patients can be in a queue for a much-needed cure. For getting better hospitalization to the
                    patients, proper bed assignments are playing a vital role in any hospital.</p>
                <p>And this process is effectively managed by this module. You can assign a bed to a specific patient by
                    selecting that patient and bed. That bed will be changed to unavailable mode automatically.</p>
                <h3 id="bed-availability-graphic-view"><a href="#bed-availability-graphic-view"
                                                          class="header-anchor">#</a> Bed Availability Graphic View</h3>
                <p>By using this feature you can check which beds are available in specific wards and which are
                    assigned. you can see details of assigned bed by hovering on that.</p>
                <p>You can directly assign available bed to specific patient by directly clicking on it.</p>
                <h2 id="blood-bank"><a href="#blood-bank" class="header-anchor">#</a> Blood Bank</h2>
                <h3 id="blood-bags"><a href="#blood-bags" class="header-anchor">#</a> Blood Bags</h3>
                <p>The blood bank is responsible for managing the bloodstock. This includes maintaining an inventory for
                    each blood group, ensuring an average age of blood at the time of issuing and monitoring what amount
                    of blood that becomes outdated or what amount of blood is not been used for any other reason. So,
                    management staff can get the details about the stock which type of blood group is available in the
                    blood bank.</p>
                <h3 id="blood-donors"><a href="#blood-donors" class="header-anchor">#</a> Blood Donors</h3>
                <p>You can manage the blood donors list in this section. You can add details of him/her by adding Donor
                    Name, Date of donation, Blood group and, gender.</p>
                <h3 id="blood-donations"><a href="#blood-donations" class="header-anchor">#</a> Blood Donations</h3>
                <p>You can manage blood donations in this section. You can add details of blood donor and blood bags
                    count he/she donating</p>
                <h3 id="blood-issues"><a href="#blood-issues" class="header-anchor">#</a> Blood Issues</h3>
                <p>This section is responsible for managing blood issues. Blood issuing process is effectively managed
                    by this module. You issue blood to any patient by selecting him/her.</p>
                <h2 id="cases-management"><a href="#cases-management" class="header-anchor">#</a> Cases Management</h2>
                <h3 id="cases"><a href="#cases" class="header-anchor">#</a> Cases</h3>
                <p>Case management is very necessary and needs to be effective for coordinating and providing care that
                    is safe, on-time, effective, efficient, equitable and patient-centered. That can be handled with
                    very ease by this module.</p>
                <h3 id="case-handlers"><a href="#case-handlers" class="header-anchor">#</a> Case Handlers</h3>
                <p>A case handler is a kind of user in our system who has permissions to manage cases. They will enter
                    all patient cases. So you can manage the staff who is going to handle all cases in this section.</p>
                <h2 id="patient-admissions"><a href="#patient-admissions" class="header-anchor">#</a> Patient Admissions
                </h2>
                <p>After registering a case file, the patient is moved to their respective treatment and make an
                    admission of them. You can add patient admission details by entering details. e.g Select Patient,
                    Admission date, Insurance Policy, etc.</p>
                <h2 id="documents"><a href="#documents" class="header-anchor">#</a> Documents</h2>
                <h3 id="document-types"><a href="#document-types" class="header-anchor">#</a> Document Types</h3>
                <p>Users can manage various document types for various purposes like verification, certification and
                    many more.</p>
                <h3 id="documents-2"><a href="#documents-2" class="header-anchor">#</a> Documents</h3>
                <p>All possible documents can be stored/managed in this section and the user can re-use those documents
                    for various purposes.</p>
                <p>Admin will be able to see all documents, while other users can only see his/her documents.</p>
                <h2 id="services"><a href="#services" class="header-anchor">#</a> Services</h2>
                <h3 id="insurances"><a href="#insurances" class="header-anchor">#</a> Insurances</h3>
                <p>All third party insurances would be managed with whom the hospital tied up. Tou can select insurance
                    while adding patient admission records. Which makes the claims process easier later.</p>
                <h3 id="packages"><a href="#packages" class="header-anchor">#</a> Packages</h3>
                <p>This module can manage different services in bunch mode. You can create different types of packages
                    for users. Packages contain different types of services.</p>
                <h3 id="services-2"><a href="#services-2" class="header-anchor">#</a> Services</h3>
                <p>Here you can manage the services of hospitals like Ambulance, Home visit and many more. After
                    creating services you can select that service for a specific package.</p>
                <h3 id="ambulance"><a href="#ambulance" class="header-anchor">#</a> Ambulance</h3>
                <p>You can add your ambulance vehicle details in this section. You can simply manage these records by
                    adding basic information like vehicle modal, driver name, vehicle number, etc.</p>
                <h3 id="ambulance-call"><a href="#ambulance-call" class="header-anchor">#</a> Ambulance Call</h3>
                <p>In this section, you can see the list of the ambulance with details of the patient who used it. When
                    the ambulance is assigned to some patient it will automatically become unavailable.</p>
                <h2 id="doctors"><a href="#doctors" class="header-anchor">#</a> Doctors</h2>
                <h3 id="doctors-2"><a href="#doctors-2" class="header-anchor">#</a> Doctors</h3>
                <p>All hospital doctors are managed in this module. Doctor him/herself can manage their patients. Case
                    handling, appointments management of patients, etc. Doctors provide medication for patients &amp;
                    write prescriptions for other medication and create operation reports for patients.</p>
                <h3 id="doctor-departments"><a href="#doctor-departments" class="header-anchor">#</a> Doctor Departments
                </h3>
                <p>There are different kinds of doctor departments as per their specialization and expertise. You can
                    use doctor departments while adding a doctor to the system.</p>
                <h3 id="doctor-schedules"><a href="#doctor-schedules" class="header-anchor">#</a> Doctor Schedules</h3>
                <p>Schedules are also an important section for patients because all can get information from there that
                    when the doctor will be available to get them checked up or appointment for their treatment.</p>
                <h3 id="prescription-2"><a href="#prescription-2" class="header-anchor">#</a> Prescription</h3>
                <p>Usually, doctors use this section more, because they will add the prescription details for the
                    specific patient after the patient study.</p>
                <h2 id="reports"><a href="#reports" class="header-anchor">#</a> Reports</h2>
                <h3 id="birth-reports"><a href="#birth-reports" class="header-anchor">#</a> Birth Reports</h3>
                <p>Generally, hospitals accept birth records as preferred evidence. A hospital birth record may be
                    either in medical records of the birth or hospital birth certificate which is certified by an
                    official person of a hospital as the custodian of the record.</p>
                <p>You can add a birth report by just adding details. e.g Patient, Doctor, Date, etc..</p>
                <h3 id="investigation-reports"><a href="#investigation-reports" class="header-anchor">#</a>
                    Investigation Reports</h3>
                <p>A medical test is a procedure that is performed to detect, diagnose or monitor diseases, disease
                    processes, susceptibility or to determine a root cause of disease. Medical tests relate to clinical
                    chemistry and molecular diagnostics and are typically performed in a medical laboratory.</p>
                <h3 id="death-reports"><a href="#death-reports" class="header-anchor">#</a> Death Reports</h3>
                <p>Generally, hospitals accept death records as preferred evidence. All the information regarding death
                    is assembled in this module.</p>
                <h3 id="operation-reports"><a href="#operation-reports" class="header-anchor">#</a> Operation Reports
                </h3>
                <p>An Operation report is a report which can be written in a patient's medical record for documenting
                    the details of the surgery. The operative report is dictated right after completion of a surgical
                    procedure and later on transcribed into the patient's record.</p>
                <h2 id="accountants"><a href="#accountants" class="header-anchor">#</a> Accountants</h2>
                <p>The accountant is a user in a system that has permission regarding billing/invoicing. They can manage
                    this section. You can create an accountant and able to see the list of created accountant in this
                    section.</p>
                <h2 id="nurses"><a href="#nurses" class="header-anchor">#</a> Nurses</h2>
                <p>Nurses can manage patients. Case generation and updating, allotting bed, ward, cabin for patients,
                    provide medication according to patient prescription, manage blood bank and can update status. It
                    also keeps a record of operations, new babies born and the death of patients can be managed by
                    them.</p>
                <h2 id="patients"><a href="#patients" class="header-anchor">#</a> Patients</h2>
                <p>A patient can view appointments, status &amp; availability of doctors, medications, his/her operation
                    history, admits/discharge history, etc.</p>
                <h2 id="receptionist"><a href="#receptionist" class="header-anchor">#</a> Receptionist</h2>
                <p>Receptionists help patients, dealing with phone call inquiries, assist patients, handle mail, file
                    records and make sure medical operations are running smoothly. Receptionists are also responsible
                    for giving information to patients on what is happening in the clinic and dealing with
                    appointments.</p>
                <h2 id="pharmacists"><a href="#pharmacists" class="header-anchor">#</a> Pharmacists</h2>
                <p>Help to prepare medications by reviewing and interpreting physician orders and detecting therapeutic
                    incompatibilities. Dispenses medications by compounding, packaging and labeling pharmaceuticals.
                    Controls medications by monitoring drug therapies; advising interventions.</p>
                <h2 id="lab-technicians"><a href="#lab-technicians" class="header-anchor">#</a> Lab Technicians</h2>
                <p>Medical laboratory technicians play a key role in the prevention and diagnosis of diseases, such as
                    Cancer, Diabetes, and AIDS. Medical lab technicians work under the supervision of a physician, lab
                    manager or medical technologist and perform laboratory tests on specimens.</p>
                <h2 id="appointments"><a href="#appointments" class="header-anchor">#</a> Appointments</h2>
                <p>Admin/Doctors/Patient will be able to see the list of appointments. Admin can see a list of all
                    appointments. It also has support for the calendar view for appointments. You can see a list of
                    appointments in the calendar form too.</p>
                <h2 id="medicines"><a href="#medicines" class="header-anchor">#</a> Medicines</h2>
                <h3 id="medicine-categories"><a href="#medicine-categories" class="header-anchor">#</a> Medicine
                    Categories</h3>
                <p>Users can manage medicine categories as per their needs or usage.</p>
                <h3 id="medicine-brands"><a href="#medicine-brands" class="header-anchor">#</a> Medicine Brands</h3>
                <p>Users can manage medicine brands as per their needs or usage.</p>
                <h3 id="medicines-2"><a href="#medicines-2" class="header-anchor">#</a> Medicines</h3>
                <p>Users can manage all the medicines and manage their inventory stock as well. Users can see the actual
                    medicine name, side effects all the information regarding the medicine that was given at the time of
                    adding into the system for your better usability.</p>
                <h2 id="finance"><a href="#finance" class="header-anchor">#</a> Finance</h2>
                <h3 id="income"><a href="#income" class="header-anchor">#</a> Income</h3>
                <p>By using this module you can record your income source and amount. you can store it with specific
                    date when income is received.</p>
                <h3 id="expense"><a href="#expense" class="header-anchor">#</a> Expense</h3>
                <p>By using this module you can record your expense source and amount. you can store it with specific
                    date and and also attach document related to it.</p>
                <h2 id="hospital-charge"><a href="#hospital-charge" class="header-anchor">#</a> Hospital Charge</h2>
                <h3 id="charge-category"><a href="#charge-category" class="header-anchor">#</a> Charge Category</h3>
                <p>By using this feature you can create different charge categories. e.g Blood pressure check, Nominal,
                    etc.</p>
                <h3 id="charges-2"><a href="#charges-2" class="header-anchor">#</a> Charges</h3>
                <p>By using this feature you can add different charge amount for specific charge category, you can also
                    add some unique code for that charge.</p>
                <h3 id="opd-charges"><a href="#opd-charges" class="header-anchor">#</a> OPD Charges</h3>
                <p>Admin can add different types of charges for specific doctor by using this feature.</p>
                <h2 id="radiology"><a href="#radiology" class="header-anchor">#</a> Radiology</h2>
                <h3 id="radiology-category"><a href="#radiology-category" class="header-anchor">#</a> Radiology Category
                </h3>
                <p>Admin can add different types of radiology categories which is used in radiology test.</p>
                <h3 id="radiology-test"><a href="#radiology-test" class="header-anchor">#</a> Radiology Test</h3>
                <p>You can record radiology test by entering specific details. e.g Test name, Category, Charge category
                    and charge.</p>
                <h2 id="pathology"><a href="#pathology" class="header-anchor">#</a> Pathology</h2>
                <h3 id="pathology-category"><a href="#pathology-category" class="header-anchor">#</a> Pathology Category
                </h3>
                <p>Admin can add different types of pathology categories which is used in pathology test.</p>
                <h3 id="pathology-test"><a href="#pathology-test" class="header-anchor">#</a> Pathology Test</h3>
                <p>You can record pathology test by entering specific details. e.g Test name, Category, Charge category
                    and charge.</p>
                <h2 id="diagnosis-3"><a href="#diagnosis-3" class="header-anchor">#</a> Diagnosis</h2>
                <h3 id="diagnosis-category"><a href="#diagnosis-category" class="header-anchor">#</a> Diagnosis Category
                </h3>
                <p>Admin can add different types of diagnosis categories which is used in patient diagnosis test.</p>
                <h3 id="patient-diagnosis-test"><a href="#patient-diagnosis-test" class="header-anchor">#</a> Patient
                    Diagnosis Test</h3>
                <p>You can add patient diagnosis test by entering specific details. e.g Test name, Category.</p>
                <p>you can add custom properties (diagnosis) as you want. we are also support the pdf export of patient
                    diagnosis report.</p>
                <h2 id="sms-using-twilio"><a href="#sms-using-twilio" class="header-anchor">#</a> SMS (Using Twilio)
                </h2>
                <p>By using this feature you can send sms to multiple users. you have to select department of users and
                    all users of that departments are loaded. now you can select multiple users from that and send sms
                    to all selected users.</p>
                <p>We are sending SMS using twilio so you need to configure it before sending SMS.</p>
                <h2 id="book-appointment"><a href="#book-appointment" class="header-anchor">#</a> Book Appointment</h2>
                <h3 id="doctor-appointment"><a href="#doctor-appointment" class="header-anchor">#</a> Doctor Appointment
                </h3>
                <p>Patient can able to book appointment with specific time slot.</p>
                <p>They just need to select doctor from specific department and select the the date of appointment.
                    They are able to see list of available and assigned slots of given doctor for that day. Now they can
                    able to select available time slot on given day.</p>
                <h2 id="inventory-management"><a href="#inventory-management" class="header-anchor">#</a> Inventory
                    Management</h2>
                <p>You can manage all your system items stock and its price and quality information in this module.</p>
                <h3 id="item-categories"><a href="#item-categories" class="header-anchor">#</a> Item Categories</h3>
                <p>You can manage item categories in this module.
                    e.g Cotton packs, Equipments, etc.</p>
                <h3 id="items"><a href="#items" class="header-anchor">#</a> Items</h3>
                <p>In this module you can add your inventory item by its type and its unit (kg,qty).</p>
                <h3 id="item-stock"><a href="#item-stock" class="header-anchor">#</a> Item Stock</h3>
                <p>In this module you have to add the item to system. like if you are purchasing item from some seller
                    and how many quaintly you are purchasing.</p>
                <p>The Quality is is as the available quantity of that item. and it will decrease when some one issued
                    it.</p>
                <h3 id="issue-an-item"><a href="#issue-an-item" class="header-anchor">#</a> Issue an Item</h3>
                <p>Here in this module you can issue an item by item name and how many quality the person is
                    issuing.</p>
                <p>Please note that issuing quality will deducted from actual available quality.</p>
                <h2 id="settings"><a href="#settings" class="header-anchor">#</a> Settings</h2>
                <h3 id="notice-boards"><a href="#notice-boards" class="header-anchor">#</a> Notice Boards</h3>
                <p>Using notice boards, notable information or announcements would be conveyed to every person who is
                    indulged within the hospital environment.</p>
                <h3 id="testimonials"><a href="#testimonials" class="header-anchor">#</a> Testimonials</h3>
                <p>Using Testimonials, you can add testimonials. This module also has profile image support for testimonials.</p>
                <h3 id="settings-2"><a href="#settings-2" class="header-anchor">#</a> Settings</h3>
                <p>Admin can manage the system language of their choice or comprehensive understanding &amp; also can be
                    managed brand name for the system.</p>
                <h2 id="multi-currency"><a href="#multi-currency" class="header-anchor">#</a> Multi-Currency</h2>
                <p>We are supporting 7 different currencies. Admin can select a current currency for their application
                    and make related changes to all modules.</p>
                <h2 id="multi-language"><a href="#multi-language" class="header-anchor">#</a> Multi-Language</h2>
                <p>We are supporting 9 different languages. You can select whatever you want. It is specific to the user
                    and also recognized after logout.</p>
                <h2 id="other-settings"><a href="#other-settings" class="header-anchor">#</a> Other Settings</h2>
                <p>Admin can manage Hospital Name, Hospital Address, Hospital Email, Hospital Open/Close Hours and many
                    other settings.</p>
                <h2 id="mail-service"><a href="#mail-service" class="header-anchor">#</a> Mail Service</h2>
                <p>This feature is quite cool, you can send mail to your employees. All you just need to enter their
                    email, subject, and message that you want to send. Submit it and the related user will get your
                    email.</p>
                <h2 id="export-data-support"><a href="#export-data-support" class="header-anchor">#</a> Export Data
                    Support</h2>
                <p>We are supporting data export (excel) in all necessary modules.</p>
                <h2 id="front-office"><a href="#front-office" class="header-anchor">#</a> Front Office</h2>
                <h3 id="call-logs"><a href="#call-logs" class="header-anchor">#</a> Call Logs</h3>
                <p>By using this module you can track your hospital call details, that which call is received from who.
                    you have to add entries for that.</p>
                <p>Admin / Receptionist are able to access this module. you can also export the all list of call logs to
                    excel.</p>
                <h3 id="visitors"><a href="#visitors" class="header-anchor">#</a> Visitors</h3>
                <p>Admin / Receptionist are able to do entries on this module. you can track your hospital visiting
                    records here.</p>
                <p>You can add visitor name and purpose of his visit, date of visiting, etc. you are also able to export
                    the list of records to excel.</p>
                <h3 id="postal-receive"><a href="#postal-receive" class="header-anchor">#</a> Postal Receive</h3>
                <p>Here you can track your postal records, what couriers you are receiving and from who. you can also
                    add attachment and add date of receiving postal.</p>
                <p>Admin / Receptionist are able to manage this module. you are also able to export list of postal
                    receive records to excel.</p>
                <h3 id="postal-disppatch"><a href="#postal-disppatch" class="header-anchor">#</a> Postal Disppatch</h3>
                <p>Here you can track your postal dispatch records, what couriers you are dispatching and for who. you
                    can also add attachment and add date of dispatching postal.</p>
                <p>Admin / Receptionist are able to manage this module. you are also able to export list of postal
                    dispatching records to excel.</p>
                
                <!-- Live Consultations section starts -->
                    <h2 id="live-consultations-section">
                        <a href="#live-consultations-section" class="header-anchor">#</a> Live Consultations
                    </h2>
                    <h3 id="live-consultations"><a href="#live-consultations" class="header-anchor">#</a> Live Consultations</h3>
                    <p>
                        This module is specifically related to the Admin, Doctor and Patient.
                    </p>
                    <p>
                        In this module, Admin / Doctor can create consultations. So either two of them can be able to access this module and start the remote video calling via Zoom.
                    </p>
                    <p>
                        Patient can see the list of consultations and can able to join the meeting.
                    </p>
                    <h3 id="live-meetings"><a href="#live-meetings" class="header-anchor">#</a> Live Meetings</h3>
                    <p>
                        This module is specifically related to the all users except Patient.
                    </p>
                    <p>
                        In this module, Admin / Doctor can create meetings. So either two of them can be able to access this module and start the remote video calling for via Zoom.
                    </p>
                    <p>
                        All other users can see the list of meetings and can able to join the meeting.
                    </p>
                <!-- Live Consultations section ends -->

                <!-- Front Setting Section Start -->
                <h2 id="front-setting-added"><a href="#front-setting-added" class="header-anchor">#</a>
                    Front Setting Module added</h2>
                <p>Admin can change front side page setting.</p>
                <!-- Front Setting section ends -->
                
                <h2 id="module-on-off-support-added"><a href="#module-on-off-support-added" class="header-anchor">#</a>
                    Module on/off support added</h2>
                <p>Admin can disable any module he/she want. say if admin disabled the patient module, other user's
                    can't able to see that module. even they can not able to access it using the url.</p>
                <p>Admin can again re-activate/on the module that he has disabled and again all users are able to see
                    that module.</p>
                <h2 id="trouble-shooting"><a href="#trouble-shooting" class="header-anchor">#</a> Trouble shooting ??
                </h2>
                <h3 id="how-to-add-custom-currency-into-hms"><a href="#how-to-add-custom-currency-into-hms"
                                                                class="header-anchor">#</a> How to add custom currency
                    into MAZMed ?</h3>
                <p>We are loading currencies from <code>storage/currencies/defaultCurrency.json</code>. Now if you want
                    to add your custom currency first find it into <code>storage/currencies/currenices.json</code> if
                    its there then copy that specific object and put it into <code>storage/currencies/defaultCurrency.json</code>.
                </p>
                <p>e.g i have to add <code>South Korean Won</code> currency. so first i will find it into <code>storage/currencies/currenices.json</code>
                    if its there then i will copy that object.</p>
                <div class="language- extra-class"><pre><code>    {
        &quot;symbol&quot;: &quot;₩&quot;,
        &quot;name&quot;: &quot;South Korean Won&quot;,
        &quot;symbol_native&quot;: &quot;₩&quot;,
        &quot;decimal_digits&quot;: 0,
        &quot;rounding&quot;: 0,
        &quot;code&quot;: &quot;KRW&quot;,
        &quot;name_plural&quot;: &quot;South Korean won&quot;
    }
</code></pre>
                </div>
                <p>If you can't find your currency there then don't worry create your own json object by following
                    ::</p>
                <div class="language- extra-class"><pre><code>    {
        &quot;symbol&quot;: &quot;{Your currency symbol here}&quot;,
        &quot;name&quot;: &quot;{Your Currency Name}&quot;,
        &quot;symbol_native&quot;: &quot;{Your currency symbol here}&quot;,
        &quot;decimal_digits&quot;: {Optional (default is 0)},
        &quot;rounding&quot;:  {Optional (default is 0)},
        &quot;code&quot;: &quot;{Your Currency Code Here}&quot;,
        &quot;name_plural&quot;: &quot;{Your Currency Name}&quot;
    }
</code></pre>
                </div>
                <p>Now Copy that object and put it into <code>storage/currencies/defaultCurrency.json</code> at last.
                </p>
                <p>e.g</p>
                <div class="language- extra-class"><pre><code>        {
            ... existing object
        },
        {
            &quot;symbol&quot;: &quot;{Your currency symbol here}&quot;,
            &quot;name&quot;: &quot;{Your Currency Name}&quot;,
            &quot;symbol_native&quot;: &quot;{Your currency symbol here}&quot;,
            &quot;decimal_digits&quot;: {Optional (default is 0)},
            &quot;rounding&quot;:  {Optional (default is 0)},
            &quot;code&quot;: &quot;{Your Currency Code Here}&quot;,
            &quot;name_plural&quot;: &quot;{Your Currency Name}&quot;
        }
</code></pre>
                </div>
            </div>
            <footer class="page-edit"><!----> <!----></footer> <!----> </main>
    </div>
    <div class="global-ui"></div>
</div>
<script src="{{ asset('web_front/js/styles.js') }}" defer></script>
<script src="{{ asset('web_front/js/2.js') }}" defer></script>
<script src="{{ asset('web_front/js/10.js') }}" defer></script>
</body>
</html>
