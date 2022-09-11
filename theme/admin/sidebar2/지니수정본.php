{{-- 타이틀 로고 --}}
<a class="sidebar-brand" href="index.html">
    <span class="align-middle sidebar-brand-text">
        JinyAdmin
    </span>
</a>

<style>
/* bootstrap sidebar css ----- */

    /* 사이드바 우측 collapse 화살표 표시 */
    .sidebar-nav li {
        position: relative;
        font-weight: 500;
        color: rgba(233, 236, 239, 0.5);
    }

    .sidebar-nav .sidebar-item.submneu {

    }

    .sidebar-nav .sidebar-item.submenu:after {
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

    .sidebar-nav .sidebar-item.submenu:not(.collapsed):after {
        transform: rotate(-135deg);
        top: 1.4rem;
    }

    /*드롭다운*/
    .sidebar-nav .sidebar-dropdown .sidebar-link {
        padding: 0.625rem 1.5rem 0.625rem 3.25rem;
        font-weight: 400;
        font-size: 90%;
        border-left: 0;
        color: #adb5bd;
        background: transparent;
    }
    .sidebar-nav .sidebar-dropdown .sidebar-link:before {
        content: "→";
        display: inline-block;
        position: relative;
        left: -14px;
        transition: all 0.1s ease;
        transform: translateX(0);
    }
    .sidebar-nav .sidebar-dropdown .sidebar-dropdown .sidebar-link {
        padding: 0.625rem 1.5rem 0.625rem 4.5rem;
    }
    .sidebar-nav .sidebar-dropdown .sidebar-dropdown .sidebar-dropdown .sidebar-link {
        padding: 0.625rem 1.5rem 0.625rem 5.75rem;
    }


    /*메뉴 헤더*/
    .sidebar-nav .sidebar-header {
        background: transparent;
        padding: 1.5rem 1.5rem 0.375rem;
        font-size: 0.75rem;
        color: #ced4da;
    }


    /* 메뉴 내부 링크 */
    .sidebar-nav .sidebar-link,
    .sidebar-nav a.sidebar-link {
        display: block;

        padding: 0.625rem 1.625rem;
        font-weight: 400;
        transition: background 0.1s ease-in-out;
        position: relative;
        text-decoration: none;
        cursor: pointer;

        color: rgba(233, 236, 239, 0.5);
        background: #222E3C;

        border-left-style: solid;
        border-left-width: 3px;
        border-left-color: transparent;
    }

    .sidebar-nav .sidebar-link svg,
    .sidebar-nav a.sidebar-link svg {
        margin-right: 0.75rem;
        color: rgba(233, 236, 239, 0.5);
        display: inline-block;
    }

    .sidebar-nav .sidebar-link:focus {
        outline: 0;
    }

    .sidebar-nav .sidebar-link:hover {
        color: rgba(233, 236, 239, 0.75);
        background: #222E3C;
        border-left-color: transparent;
    }

    .sidebar-nav .sidebar-link:hover svg {
        color: rgba(233, 236, 239, 0.75);
    }


    /* 메뉴 아이템 Active */
    .sidebar-nav > li.active > .sidebar-item > .sidebar-link {
        color: #e9ecef;
        background: linear-gradient(90deg, rgba(2, 117, 184, 0.1) 0%, rgba(2, 117, 184, 0.0875) 50%, rgba(0, 0, 0, 0) 100%);
        border-left-color: #0275b8;
    }

    .sidebar-nav  .sidebar-item.active .sidebar-link {
        color: #56a5d3;
    }

    .sidebar-nav .sidebar-item.active .sidebar-link svg {
        color: #e9ecef;
    }



    /*오른쪽 배치*/
    .sidebar-nav .sidebar-badge {
        position: absolute;
        right: 15px;
        top: 14px;
        z-index: 1;
    }

    .sidebar-nav .sidebar-cta-content {
        padding: 1.5rem;
        margin: 1.75rem;
        border-radius: 0.3rem;
        background: #2B3947;
        color: #e9ecef;
    }

/* ----- bootstrap sidebar css */
</style>


{{--
<x-menu-json></x-menu-json>
--}}
@livewire('menu-json')
