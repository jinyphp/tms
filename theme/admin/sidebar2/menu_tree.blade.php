
<style>
    /* bootstrap sidebar css ----- */

        /*메뉴 헤더*/
        .sidebar-header {
            background: transparent;
            padding: 1.5rem 1.5rem 0.375rem;
            font-size: 0.75rem;
            color: #ced4da;
        }


        /*메뉴 아이템 (li)*/
        .sidebar-item.active > .sidebar-link,
        .sidebar-item.active .sidebar-link:hover {
            color: #e9ecef;
            background: linear-gradient(90deg, rgba(2, 117, 184, 0.1) 0%, rgba(2, 117, 184, 0.0875) 50%, rgba(0, 0, 0, 0) 100%);
            border-left-color: #0275b8;
        }

        .sidebar-item.active > .sidebar-link svg,
        .sidebar-item.active .sidebar-link:hover svg {
            color: #e9ecef;
        }

        .sidebar-item {

        }



        /* 메뉴 내부 링크 */
        .sidebar-link,
        a.sidebar-link {
            display: block;
            flex-grow: 1;
            padding: 0.625rem 1.625rem;
            font-weight: 400;
            transition: background 0.1s ease-in-out;
            position: relative;
            text-decoration: none;
            cursor: pointer;
            border-left-style: solid;
            border-left-width: 3px;
            color: rgba(233, 236, 239, 0.5);
            background: #222E3C;
            border-left-color: transparent;
        }

        /* admin menu 설정*/
        .sidebar-item div.admin {
            display: block;
            padding: 0.625rem 0.625rem 0.625rem 0;
            font-weight: 400;
            transition: background 0.1s ease-in-out;
            position: relative;
            text-decoration: none;
            cursor: pointer;
            border-left-style: solid;
            border-left-width: 3px;
            color: rgba(233, 236, 239, 0.5);
            background: #222E3C;
            border-left-color: transparent;
        }

        .sidebar-item div.admin a {
            padding-right: 0.312rem;
            color: rgba(233, 236, 239, 0.5);
        }

        .sidebar-header div.admin a {
            padding-right: 0.312rem;
            color: rgba(233, 236, 239, 0.5);
        }



        .sidebar-link svg,
        a.sidebar-link svg {
            margin-right: 0.75rem;
            color: rgba(233, 236, 239, 0.5);
            display: inline-block;
        }

        .sidebar-link:focus {
            outline: 0;
        }

        .sidebar-link:hover {
            color: rgba(233, 236, 239, 0.75);
            background: #222E3C;
            border-left-color: transparent;
        }

        .sidebar-link:hover svg {
        color: rgba(233, 236, 239, 0.75);
        }

        /*오른쪽 배치*/
        .sidebar-badge {
            position: absolute;
            right: 15px;
            top: 14px;
            z-index: 1;
        }


        /* 사이드바 우측 collapse 표시 */
        .sidebar-nav .submenu,
        .sidebar-nav [data-bs-toggle=collapse] {
            position: relative;
        }

        /* 드롭다운 collapse 화살표*/
        .sidebar-nav .submenu:after,
        .sidebar-nav [data-bs-toggle=collapse]:after {
            content: " ";
            border: solid;
            border-width: 0 0.075rem 0.075rem 0;
            display: inline-block;
            padding: 2px;
            transform: rotate(45deg);
            position: absolute;
            top: 1.2rem;
            right: 1.5rem;
            transition: all 0.2s ease-out;
        }

        .sidebar-nav .submenu:not(.collapsed):after,
        .sidebar-nav [data-bs-toggle=collapse]:not(.collapsed):after {
            transform: rotate(-135deg);
            top: 1.4rem;
        }


        /*드롭다운*/
        .sidebar-dropdown .sidebar-link {
            padding: 0.625rem 1.5rem 0.625rem 3.25rem;
            font-weight: 400;
            font-size: 90%;
            border-left: 0;
            color: #adb5bd;
            background: transparent;
        }
        .sidebar-dropdown .sidebar-link:before {
            content: "→";
            display: inline-block;
            position: relative;
            left: -14px;
            transition: all 0.1s ease;
            transform: translateX(0);
        }
        .sidebar-dropdown .sidebar-dropdown .sidebar-link {
            padding: 0.625rem 1.5rem 0.625rem 4.5rem;
        }
        .sidebar-dropdown .sidebar-dropdown .sidebar-dropdown .sidebar-link {
            padding: 0.625rem 1.5rem 0.625rem 5.75rem;
        }



        .sidebar-cta-content {
            padding: 1.5rem;
            margin: 1.75rem;
            border-radius: 0.3rem;
            background: #2B3947;
            color: #e9ecef;
        }

    /* ----- bootstrap sidebar css */
    </style>

<ul class="sidebar-nav">
    <li class="sidebar-header">
        Pages
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#dashboards" data-bs-toggle="collapse"
            class="sidebar-link collapsed">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-sliders">
                <line x1="4" y1="21" x2="4" y2="14"></line>
                <line x1="4" y1="10" x2="4" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="12"></line>
                <line x1="12" y1="8" x2="12" y2="3"></line>
                <line x1="20" y1="21" x2="20" y2="16"></line>
                <line x1="20" y1="12" x2="20" y2="3"></line>
                <line x1="1" y1="14" x2="7" y2="14"></line>
                <line x1="9" y1="8" x2="15" y2="8"></line>
                <line x1="17" y1="16" x2="23" y2="16"></line>
            </svg> <span class="align-middle">Dashboards</span>
        </a>
        <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse "
            data-bs-parent="#sidebar">
            <li class="sidebar-item"><a class="sidebar-link"
                    href="index.html">Analytics</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="dashboard-ecommerce.html">E-Commerce <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="dashboard-crypto.html">Crypto <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
        </ul>
    </li>

    <li class="sidebar-item collapsed" data-bs-target="#pages" data-bs-toggle="collapse">

        <a class="sidebar-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-layout">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg> <span class="align-middle">Pages</span>
        </a>

        <ul id="pages" class="sidebar-dropdown list-unstyled collapse "
            data-bs-parent="#sidebar">
            <li class="sidebar-item"><a class="sidebar-link"
                    href="pages-settings.html">Settings</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="pages-projects.html">Projects <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="pages-clients.html">Clients <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="pages-pricing.html">Pricing <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="pages-chat.html">Chat <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="pages-blank.html">Blank Page</a></li>
        </ul>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="pages-profile.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg> <span class="align-middle">Profile</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="pages-invoice.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-credit-card">
                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                <line x1="1" y1="10" x2="23" y2="10"></line>
            </svg> <span class="align-middle">Invoice</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="pages-tasks.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-list">
                <line x1="8" y1="6" x2="21" y2="6"></line>
                <line x1="8" y1="12" x2="21" y2="12"></line>
                <line x1="8" y1="18" x2="21" y2="18"></line>
                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                <line x1="3" y1="18" x2="3.01" y2="18"></line>
            </svg> <span class="align-middle">Tasks</span>
            <span class="sidebar-badge badge bg-primary">Pro</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="calendar.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-calendar">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg> <span class="align-middle">Calendar</span>
            <span class="sidebar-badge badge bg-primary">Pro</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg> <span class="align-middle">Auth</span>
        </a>
        <ul id="auth" class="sidebar-dropdown list-unstyled collapse "
            data-bs-parent="#sidebar">
            <li class="sidebar-item"><a class="sidebar-link"
                    href="pages-sign-in.html">Sign In</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="pages-sign-up.html">Sign Up</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="pages-reset-password.html">Reset Password <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="pages-404.html">404 Page <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="pages-500.html">500 Page <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
        </ul>
    </li>

    <li class="sidebar-header">
        Components
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#ui" data-bs-toggle="collapse"
            class="sidebar-link collapsed">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-briefcase">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
            </svg> <span class="align-middle">UI Elements</span>
        </a>
        <ul id="ui" class="sidebar-dropdown list-unstyled collapse "
            data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link"
                    href="ui-alerts.html">Alerts</a>
            </li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="ui-buttons.html">Buttons</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="ui-cards.html">Cards</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="ui-general.html">General</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="ui-grid.html">Grid</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="ui-modals.html">Modals</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="ui-offcanvas.html">Offcanvas <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="ui-placeholders.html">Placeholders <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="ui-tabs.html">Tabs <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="ui-typography.html">Typography</a></li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#icons" data-bs-toggle="collapse"
            class="sidebar-link collapsed">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-coffee">
                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                <line x1="6" y1="1" x2="6" y2="4"></line>
                <line x1="10" y1="1" x2="10" y2="4"></line>
                <line x1="14" y1="1" x2="14" y2="4"></line>
            </svg> <span class="align-middle">Icons</span>
            <span class="sidebar-badge badge bg-light">1.500+</span>
        </a>
        <ul id="icons" class="sidebar-dropdown list-unstyled collapse "
            data-bs-parent="#sidebar">
            <li class="sidebar-item"><a class="sidebar-link"
                    href="icons-feather.html">Feather</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="icons-font-awesome.html">Font Awesome <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
        </ul>
    </li>
    <li class="sidebar-item active">
        <a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-check-circle">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg> <span class="align-middle">Forms</span>
        </a>
        <ul id="forms" class="sidebar-dropdown list-unstyled collapse show"
            data-bs-parent="#sidebar">
            <li class="sidebar-item active"><a class="sidebar-link"
                    href="forms-basic-inputs.html">Basic Inputs</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="forms-layouts.html">Form Layouts <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="forms-input-groups.html">Input Groups <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="tables-bootstrap.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-list">
                <line x1="8" y1="6" x2="21" y2="6"></line>
                <line x1="8" y1="12" x2="21" y2="12"></line>
                <line x1="8" y1="18" x2="21" y2="18"></line>
                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                <line x1="3" y1="18" x2="3.01" y2="18"></line>
            </svg> <span class="align-middle">Tables</span>
        </a>
    </li>

    <li class="sidebar-header">
        Plugins &amp; Addons
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#form-plugins" data-bs-toggle="collapse"
            class="sidebar-link collapsed">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-check-square">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                </path>
            </svg> <span class="align-middle">Form Plugins</span>
        </a>
        <ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse "
            data-bs-parent="#sidebar">
            <li class="sidebar-item"><a class="sidebar-link"
                    href="forms-advanced-inputs.html">Advanced Inputs <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="forms-editors.html">Editors <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="forms-validation.html">Validation <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#datatables" data-bs-toggle="collapse"
            class="sidebar-link collapsed">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-list">
                <line x1="8" y1="6" x2="21" y2="6"></line>
                <line x1="8" y1="12" x2="21" y2="12"></line>
                <line x1="8" y1="18" x2="21" y2="18"></line>
                <line x1="3" y1="6" x2="3.01" y2="6"></line>
                <line x1="3" y1="12" x2="3.01" y2="12"></line>
                <line x1="3" y1="18" x2="3.01" y2="18"></line>
            </svg> <span class="align-middle">DataTables</span>
        </a>
        <ul id="datatables" class="sidebar-dropdown list-unstyled collapse "
            data-bs-parent="#sidebar">
            <li class="sidebar-item"><a class="sidebar-link"
                    href="tables-datatables-responsive.html">Responsive Table <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="tables-datatables-buttons.html">Table with Buttons <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="tables-datatables-column-search.html">Column Search <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="tables-datatables-fixed-header.html">Fixed Header <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="tables-datatables-multi.html">Multi Selection <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="tables-datatables-ajax.html">Ajax Sourced Data <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#charts" data-bs-toggle="collapse"
            class="sidebar-link collapsed">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-bar-chart-2">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
            </svg> <span class="align-middle">Charts</span>
        </a>
        <ul id="charts" class="sidebar-dropdown list-unstyled collapse "
            data-bs-parent="#sidebar">
            <li class="sidebar-item"><a class="sidebar-link"
                    href="charts-chartjs.html">Chart.js</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="charts-apexcharts.html">ApexCharts <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link" href="notifications.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-bell">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
            </svg> <span class="align-middle">Notifications</span>
            <span class="sidebar-badge badge bg-primary">Pro</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#maps" data-bs-toggle="collapse"
            class="sidebar-link collapsed">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-map">
                <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6">
                </polygon>
                <line x1="8" y1="2" x2="8" y2="18"></line>
                <line x1="16" y1="6" x2="16" y2="22"></line>
            </svg> <span class="align-middle">Maps</span>
        </a>
        <ul id="maps" class="sidebar-dropdown list-unstyled collapse "
            data-bs-parent="#sidebar">
            <li class="sidebar-item"><a class="sidebar-link"
                    href="maps-google.html">Google Maps</a></li>
            <li class="sidebar-item"><a class="sidebar-link"
                    href="maps-vector.html">Vector Maps <span
                        class="sidebar-badge badge bg-primary">Pro</span></a></li>
        </ul>
    </li>

    <li class="sidebar-item">
        <a data-bs-target="#multi" data-bs-toggle="collapse"
            class="sidebar-link collapsed">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="align-middle feather feather-corner-right-down">
                <polyline points="10 15 15 20 20 15"></polyline>
                <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
            </svg> <span class="align-middle">Multi Level</span>
        </a>
        <ul id="multi" class="sidebar-dropdown list-unstyled collapse"
            data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a data-bs-target="#multi-2" data-bs-toggle="collapse"
                    class="sidebar-link collapsed">Two Levels</a>
                <ul id="multi-2" class="sidebar-dropdown list-unstyled collapse">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Item 1</a>
                        <a class="sidebar-link" href="#">Item 2</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#multi-3" data-bs-toggle="collapse"
                    class="sidebar-link collapsed">Three Levels</a>
                <ul id="multi-3" class="sidebar-dropdown list-unstyled collapse">
                    <li class="sidebar-item">
                        <a data-bs-target="#multi-3-1" data-bs-toggle="collapse"
                            class="sidebar-link collapsed">Item 1</a>
                        <ul id="multi-3-1"
                            class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 1</a>
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Item 2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
