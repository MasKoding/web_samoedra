<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BanCo - Dashboard</title>

    <!-- Menggunakan asset() Laravel untuk memanggil file CSS di public/css/ -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/output.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <!-- layout start -->
    <div class="layout-wrapper active w-full">
        <div class="relative flex w-full">
            <aside
                class="sidebar-wrapper fixed top-0 z-30 block h-full w-[308px] bg-white dark:bg-darkblack-600 sm:hidden xl:block">
                <div
                    class="sidebar-header relative z-30 flex h-[108px] w-full items-center border-b border-r border-b-[#F7F7F7] border-r-[#F7F7F7] pl-[50px] dark:border-darkblack-400">
                    <a href="index.html">
                        <img src={{ asset("images/logo/logo-color.svg") }} class="block dark:hidden" alt="logo" />
                        <img src={{ asset("./assetsimages/logo/logo-white.svg") }} class="hidden dark:block"
                            alt="logo" />
                    </a>
                    <button type="button" class="drawer-btn absolute right-0 top-auto" title="Ctrl+b">
                        <span>
                            <svg width="16" height="40" viewBox="0 0 16 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 10C0 4.47715 4.47715 0 10 0H16V40H10C4.47715 40 0 35.5228 0 30V10Z"
                                    fill="#22C55E" />
                                <path d="M10 15L6 20.0049L10 25.0098" stroke="#ffffff" stroke-width="1.2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div
                    class="sidebar-body overflow-style-none relative z-30 h-screen w-full overflow-y-scroll pb-[200px] pl-[48px] pt-[14px]">
                    <div class="nav-wrapper mb-[36px] pr-[50px]">
                        <div class="item-wrapper mb-5">
                            <h4
                                class="border-b border-bgray-200 text-sm font-medium leading-7 text-bgray-700 dark:border-darkblack-400 dark:text-bgray-50">
                                Menu
                            </h4>
                            <ul class="mt-2.5">
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="index.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path class="path-1"
                                                            d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                            fill="#1A202C" />
                                                        <path class="path-2"
                                                            d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                            fill="#22C55E" />
                                                    </svg>
                                                </span>
                                                <span
                                                    class="item-text text-lg font-medium leading-none">Dashboards</span>
                                            </div>
                                            <span>
                                                <svg width="6" height="12" viewBox="0 0 6 12" fill="none"
                                                    class="fill-current" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"
                                                        d="M0.531506 0.414376C0.20806 0.673133 0.155619 1.1451 0.414376 1.46855L4.03956 6.00003L0.414376 10.5315C0.155618 10.855 0.208059 11.3269 0.531506 11.5857C0.854952 11.8444 1.32692 11.792 1.58568 11.4685L5.58568 6.46855C5.80481 6.19464 5.80481 5.80542 5.58568 5.53151L1.58568 0.531506C1.32692 0.20806 0.854953 0.155619 0.531506 0.414376Z" />
                                                </svg>
                                            </span>
                                        </div>
                                    </a>
                                    <ul class="sub-menu ml-2.5 mt-[22px] border-l border-success-100 pl-5">
                                        <li>
                                            <a href="index.html"
                                                class="text-md inline-block py-1.5 font-medium text-bgray-600 transition-all hover:text-bgray-800 dark:text-bgray-50 hover:dark:text-success-300">Dashboard
                                                Default</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html"
                                                class="text-md inline-block py-1.5 font-medium text-bgray-600 transition-all hover:text-bgray-800 dark:text-bgray-50 hover:dark:text-success-300">Dashboard
                                                Two</a>
                                        </li>
                                        <li>
                                            <a href="statistics.html"
                                                class="text-md inline-block py-1.5 font-medium text-bgray-600 transition-all hover:text-bgray-800 dark:text-bgray-50 hover:dark:text-success-300">Statistics</a>
                                        </li>
                                        <li>
                                            <a href="analytics.html"
                                                class="text-md inline-block py-1.5 font-medium text-bgray-600 transition-all hover:text-bgray-800 dark:text-bgray-50 hover:dark:text-success-300">Analytics</a>
                                        </li>
                                        <li>
                                            <a href="home.html"
                                                class="text-md inline-block py-1.5 font-medium text-bgray-600 transition-all hover:text-bgray-800 dark:text-bgray-50 hover:dark:text-success-300">Home</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="transaction.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18 16V6C18 3.79086 16.2091 2 14 2H4C1.79086 2 0 3.79086 0 6V16C0 18.2091 1.79086 20 4 20H14C16.2091 20 18 18.2091 18 16Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M4.25 8C4.25 7.58579 4.58579 7.25 5 7.25H13C13.4142 7.25 13.75 7.58579 13.75 8C13.75 8.41421 13.4142 8.75 13 8.75H5C4.58579 8.75 4.25 8.41421 4.25 8Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M4.25 12C4.25 11.5858 4.58579 11.25 5 11.25H13C13.4142 11.25 13.75 11.5858 13.75 12C13.75 12.4142 13.4142 12.75 13 12.75H5C4.58579 12.75 4.25 12.4142 4.25 12Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H9C9.41421 15.25 9.75 15.5858 9.75 16C9.75 16.4142 9.41421 16.75 9 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path
                                                            d="M11 0H7C5.89543 0 5 0.895431 5 2C5 3.10457 5.89543 4 7 4H11C12.1046 4 13 3.10457 13 2C13 0.895431 12.1046 0 11 0Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                                <span
                                                    class="item-text text-lg font-medium leading-none">Transaction</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="statistics.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18 11C18 15.9706 13.9706 20 9 20C4.02944 20 0 15.9706 0 11C0 6.02944 4.02944 2 9 2C13.9706 2 18 6.02944 18 11Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M19.8025 8.01277C19.0104 4.08419 15.9158 0.989557 11.9872 0.197453C10.9045 -0.0208635 10 0.89543 10 2V8C10 9.10457 10.8954 10 12 10H18C19.1046 10 20.0209 9.09555 19.8025 8.01277Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                                <span
                                                    class="item-text text-lg font-medium leading-none">Statistics</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="analytics.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 4C0 1.79086 1.79086 0 4 0H16C18.2091 0 20 1.79086 20 4V16C20 18.2091 18.2091 20 16 20H4C1.79086 20 0 18.2091 0 16V4Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M14 9C12.8954 9 12 9.89543 12 11L12 13C12 14.1046 12.8954 15 14 15C15.1046 15 16 14.1046 16 13V11C16 9.89543 15.1046 9 14 9Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path
                                                            d="M6 5C4.89543 5 4 5.89543 4 7L4 13C4 14.1046 4.89543 15 6 15C7.10457 15 8 14.1046 8 13L8 7C8 5.89543 7.10457 5 6 5Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                                <span
                                                    class="item-text text-lg font-medium leading-none">Analytics</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="my-wallet.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20 4C20 1.79086 18.2091 0 16 0H4C1.79086 0 0 1.79086 0 4V14C0 16.2091 1.79086 18 4 18H16C18.2091 18 20 16.2091 20 14V4Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M6 9C6 7.34315 4.65685 6 3 6H0V12H3C4.65685 12 6 10.6569 6 9Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                                <span class="item-text text-lg font-medium leading-none">My
                                                    Wallet</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="messages.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.8889 22C13.4278 22 14.737 21.0724 15.2222 19.7778H8.55554C9.04075 21.0724 10.35 22 11.8889 22Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M13.7662 2.83781C13.3045 2.32351 12.6345 2 11.8889 2C10.4959 2 9.36673 3.12921 9.36673 4.52216V4.6374C6.98629 5.45244 5.224 7.38959 4.95607 9.75021L4.4592 14.1281C4.36971 14.9165 4.03716 15.6684 3.49754 16.3024C2.27862 17.7343 3.43826 19.7778 5.46979 19.7778H18.308C20.3395 19.7778 21.4992 17.7343 20.2802 16.3024C19.7406 15.6684 19.4081 14.9165 19.3186 14.1281L18.8217 9.75021C18.8148 9.68916 18.8068 9.6284 18.7979 9.56793C18.3712 9.70421 17.9164 9.77778 17.4444 9.77778C14.9898 9.77778 13 7.78793 13 5.33333C13 4.40827 13.2826 3.54922 13.7662 2.83781Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <circle cx="17.4444" cy="5.33333" r="3.33333" fill="#22C55E"
                                                            class="path-2" />
                                                    </svg>
                                                </span>
                                                <span class="item-text text-lg font-medium leading-none">Inbox</span>
                                            </div>
                                            <div class="flex items-center space-x-2.5">
                                                <!--edit-->
                                                <span>
                                                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.879751 10.0038L3.16823 9.67657C3.49833 9.62937 3.80424 9.47626 4.04003 9.24024L8.45886 4.81709C8.45886 4.81709 7.36911 4.81709 6.27936 3.72628C5.18961 2.63546 5.18961 1.54465 5.18961 1.54465L0.770776 5.9678C0.534986 6.20382 0.382033 6.51002 0.334876 6.84045L0.00795056 9.13116C-0.0646994 9.64021 0.371201 10.0765 0.879751 10.0038Z"
                                                            fill="#1A202C" />
                                                        <path opacity="0.4"
                                                            d="M9.5487 1.5446L8.45895 0.453784C7.8571 -0.148657 6.8813 -0.148657 6.27945 0.453784L5.1897 1.5446C5.1897 1.5446 5.1897 2.63542 6.27945 3.72623C7.3692 4.81705 8.45895 4.81705 8.45895 4.81705L9.5487 3.72623C10.1506 3.12379 10.1506 2.14704 9.5487 1.5446Z"
                                                            fill="#1A202C" />
                                                    </svg>
                                                </span>
                                                <!--edit-->
                                                <div>
                                                    <img src="{{asset('/images/avatar/profile-xs.png')}}"
                                                        alt="profile" />
                                                </div>
                                                <!--counter-->
                                                <div
                                                    class="flex h-5 w-5 items-center justify-center rounded-full bg-success-300">
                                                    <span class="text-[10px] font-semibold text-white">5</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="integrations.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.57666 3.61499C1.57666 2.51042 2.47209 1.61499 3.57666 1.61499H8.5C9.60456 1.61499 10.5 2.51042 10.5 3.61499V8.53833C10.5 9.64289 9.60456 10.5383 8.49999 10.5383H3.57666C2.47209 10.5383 1.57666 9.64289 1.57666 8.53832V3.61499Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M13.5 15.5383C13.5 14.4338 14.3954 13.5383 15.5 13.5383H20.4233C21.5279 13.5383 22.4233 14.4338 22.4233 15.5383V20.4617C22.4233 21.5662 21.5279 22.4617 20.4233 22.4617H15.5C14.3954 22.4617 13.5 21.5662 13.5 20.4617V15.5383Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <circle cx="6.03832" cy="18" r="4.46166" fill="#1A202C"
                                                            class="path-1" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M18 2C18.4142 2 18.75 2.33579 18.75 2.75V5.25H21.25C21.6642 5.25 22 5.58579 22 6C22 6.41421 21.6642 6.75 21.25 6.75H18.75V9.25C18.75 9.66421 18.4142 10 18 10C17.5858 10 17.25 9.66421 17.25 9.25V6.75H14.75C14.3358 6.75 14 6.41421 14 6C14 5.58579 14.3358 5.25 14.75 5.25H17.25V2.75C17.25 2.33579 17.5858 2 18 2Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                                <span
                                                    class="item-text text-lg font-medium leading-none">Integrations</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="users.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <ellipse cx="11.7778" cy="17.5555" rx="7.77778" ry="4.44444"
                                                            class="path-1" fill="#1A202C" />
                                                        <circle class="path-2" cx="11.7778" cy="6.44444" r="4.44444"
                                                            fill="#22C55E" />
                                                    </svg>
                                                </span>
                                                <span class="item-text text-lg font-medium leading-none">User</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="calender.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 6.5C0 4.29086 1.79086 2.5 4 2.5H14C16.2091 2.5 18 4.29086 18 6.5V8V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8V6.5Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M14 2.5H4C1.79086 2.5 0 4.29086 0 6.5V8H18V6.5C18 4.29086 16.2091 2.5 14 2.5Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5 0.25C5.41421 0.25 5.75 0.585786 5.75 1V4C5.75 4.41421 5.41421 4.75 5 4.75C4.58579 4.75 4.25 4.41421 4.25 4V1C4.25 0.585786 4.58579 0.25 5 0.25ZM13 0.25C13.4142 0.25 13.75 0.585786 13.75 1V4C13.75 4.41421 13.4142 4.75 13 4.75C12.5858 4.75 12.25 4.41421 12.25 4V1C12.25 0.585786 12.5858 0.25 13 0.25Z"
                                                            fill="#1A202C" class="path-2" />
                                                        <circle cx="9" cy="14" r="1" fill="#22C55E" />
                                                        <circle cx="13" cy="14" r="1" fill="#22C55E" class="path-2" />
                                                        <circle cx="5" cy="14" r="1" fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                                <span class="item-text text-lg font-medium leading-none">Calender</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="history.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.5 12.5C17.5 17.1944 13.6944 21 9 21C4.30558 21 0.5 17.1944 0.5 12.5C0.5 7.80558 4.30558 4 9 4C13.6944 4 17.5 7.80558 17.5 12.5Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.99995 1.75C8.02962 1.75 7.09197 1.88462 6.20407 2.13575C5.80549 2.24849 5.39099 2.01676 5.27826 1.61818C5.16553 1.21961 5.39725 0.805108 5.79583 0.692376C6.81525 0.404046 7.89023 0.25 8.99995 0.25C10.1097 0.25 11.1846 0.404046 12.2041 0.692376C12.6026 0.805108 12.8344 1.21961 12.7216 1.61818C12.6089 2.01676 12.1944 2.24849 11.7958 2.13575C10.9079 1.88462 9.97028 1.75 8.99995 1.75Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path
                                                            d="M11 13C11 14.1046 10.1046 15 9 15C7.89543 15 7 14.1046 7 13C7 11.8954 7.89543 11 9 11C10.1046 11 11 11.8954 11 13Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9 7.25C9.41421 7.25 9.75 7.58579 9.75 8V12C9.75 12.4142 9.41421 12.75 9 12.75C8.58579 12.75 8.25 12.4142 8.25 12V8C8.25 7.58579 8.58579 7.25 9 7.25Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                                <span class="item-text text-lg font-medium leading-none">History</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="item-wrapper mb-5">
                            <h4
                                class="border-b border-bgray-200 text-sm font-medium leading-7 text-bgray-700 dark:border-darkblack-400 dark:text-bgray-50">
                                Help
                            </h4>
                            <ul class="mt-2.5">
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="support-ticket.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 2V11C5 12.1046 5.89543 13 7 13H18C19.1046 13 20 12.1046 20 11V2C20 0.895431 19.1046 0 18 0H7C5.89543 0 5 0.89543 5 2Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M0 15C0 13.8954 0.895431 13 2 13H2.17157C2.70201 13 3.21071 13.2107 3.58579 13.5858C4.36683 14.3668 5.63317 14.3668 6.41421 13.5858C6.78929 13.2107 7.29799 13 7.82843 13H8C9.10457 13 10 13.8954 10 15V16C10 17.1046 9.10457 18 8 18H2C0.89543 18 0 17.1046 0 16V15Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path
                                                            d="M7.5 9.5C7.5 10.8807 6.38071 12 5 12C3.61929 12 2.5 10.8807 2.5 9.5C2.5 8.11929 3.61929 7 5 7C6.38071 7 7.5 8.11929 7.5 9.5Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.25 4.5C8.25 4.08579 8.58579 3.75 9 3.75L16 3.75C16.4142 3.75 16.75 4.08579 16.75 4.5C16.75 4.91421 16.4142 5.25 16 5.25L9 5.25C8.58579 5.25 8.25 4.91421 8.25 4.5Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11.25 8.5C11.25 8.08579 11.5858 7.75 12 7.75L16 7.75C16.4142 7.75 16.75 8.08579 16.75 8.5C16.75 8.91421 16.4142 9.25 16 9.25L12 9.25C11.5858 9.25 11.25 8.91421 11.25 8.5Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                                <span class="item-text text-lg font-medium leading-none">Support</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="settings.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.0606 2H10.9394C9.76787 2 8.81817 2.89543 8.81817 4C8.81817 5.26401 7.46574 6.06763 6.35556 5.4633L6.24279 5.40192C5.22823 4.84963 3.93091 5.17738 3.34515 6.13397L2.28455 7.86602C1.69879 8.8226 2.0464 10.0458 3.06097 10.5981C4.17168 11.2027 4.17168 12.7973 3.06096 13.4019C2.0464 13.9542 1.69879 15.1774 2.28454 16.134L3.34515 17.866C3.93091 18.8226 5.22823 19.1504 6.24279 18.5981L6.35555 18.5367C7.46574 17.9324 8.81817 18.736 8.81817 20C8.81817 21.1046 9.76787 22 10.9394 22H13.0606C14.2321 22 15.1818 21.1046 15.1818 20C15.1818 18.736 16.5343 17.9324 17.6445 18.5367L17.7572 18.5981C18.7718 19.1504 20.0691 18.8226 20.6548 17.866L21.7155 16.134C22.3012 15.1774 21.9536 13.9542 20.939 13.4019C19.8283 12.7973 19.8283 11.2027 20.939 10.5981C21.9536 10.0458 22.3012 8.82262 21.7155 7.86603L20.6548 6.13398C20.0691 5.1774 18.7718 4.84965 17.7572 5.40193L17.6445 5.46331C16.5343 6.06765 15.1818 5.26402 15.1818 4C15.1818 2.89543 14.2321 2 13.0606 2Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M15.75 12C15.75 14.0711 14.0711 15.75 12 15.75C9.92893 15.75 8.25 14.0711 8.25 12C8.25 9.92893 9.92893 8.25 12 8.25C14.0711 8.25 15.75 9.92893 15.75 12Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                                <span class="item-text text-lg font-medium leading-none">Setting</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="item-wrapper mb-5">
                            <h4
                                class="border-b border-bgray-200 text-sm font-medium leading-7 text-bgray-700 dark:border-darkblack-400 dark:text-bgray-50">
                                Others
                            </h4>
                            <ul class="mt-2.5">
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="signin.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <ellipse cx="11.7778" cy="17.5555" rx="7.77778" ry="4.44444"
                                                            fill="#1A202C" class="path-1" />
                                                        <circle cx="11.7778" cy="6.44444" r="4.44444" fill="#22C55E"
                                                            class="path-2" />
                                                    </svg>
                                                </span>
                                                <span class="item-text text-lg font-medium leading-none">Signin</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="signup.html">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2.5">
                                                <span class="item-ico">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <ellipse cx="11.7778" cy="17.5555" rx="7.77778" ry="4.44444"
                                                            fill="#1A202C" class="path-1" />
                                                        <circle cx="11.7778" cy="6.44444" r="4.44444" fill="#22C55E"
                                                            class="path-2" />
                                                    </svg>
                                                </span>
                                                <span class="item-text text-lg font-medium leading-none">Signup</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="coming-soon.html">
                                        <div class="flex items-center space-x-2.5">
                                            <span class="item-ico">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18.4 17.2C19.8833 19.1777 18.4721 22 16 22L8 22C5.52786 22 4.11672 19.1777 5.6 17.2L8.15 13.8C8.95 12.7333 8.95 11.2667 8.15 10.2L5.6 6.8C4.11672 4.82229 5.52787 2 8 2L16 2C18.4721 2 19.8833 4.82229 18.4 6.8L15.85 10.2C15.05 11.2667 15.05 12.7333 15.85 13.8L18.4 17.2Z"
                                                        fill="#1A202C" class="path-1" />
                                                    <path
                                                        d="M12.7809 9.02391C12.3805 9.52432 11.6195 9.52432 11.2191 9.02391L9.29976 6.6247C8.77595 5.96993 9.24212 5 10.0806 5L13.9194 5C14.7579 5 15.2241 5.96993 14.7002 6.6247L12.7809 9.02391Z"
                                                        fill="#22C55E" class="path-2" />
                                                </svg>
                                            </span>
                                            <span class="item-text text-lg font-medium leading-none">Coming Soon</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="item py-[11px] text-bgray-900 dark:text-white">
                                    <a href="404.html">
                                        <div class="flex items-center space-x-2.5">
                                            <span class="item-ico">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="10" cy="10" r="10" fill="#1A202C" class="path-1" />
                                                    <path
                                                        d="M9 15C9 14.4477 9.44772 14 10 14C10.5523 14 11 14.4477 11 15C11 15.5523 10.5523 16 10 16C9.44772 16 9 15.5523 9 15Z"
                                                        fill="#22C55E" class="path-2" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10 12.75C9.58579 12.75 9.25 12.4142 9.25 12L9.25 5C9.25 4.58579 9.58579 4.25 10 4.25C10.4142 4.25 10.75 4.58579 10.75 5L10.75 12C10.75 12.4142 10.4142 12.75 10 12.75Z"
                                                        fill="#22C55E" class="path-2" />
                                                </svg>
                                            </span>
                                            <span class="item-text text-lg font-medium leading-none">404</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="upgrade-wrapper mb-[26px] h-[172px] w-full pr-[24px]">
                        <div class="upgrade-banner relative h-full w-full rounded-lg"
                            style="background-image: url(./assets/images/bg/upgrade-bg.png)">
                            <div style="left: calc(50% - 20px); top: -20px"
                                class="absolute flex h-10 w-10 items-center justify-center rounded-full border border-white bg-success-300">
                                <span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 12.75C14 11.7835 13.1046 11 12 11C10.8954 11 10 11.7835 10 12.75C10 13.7165 10.8954 14.5 12 14.5C13.1046 14.5 14 15.2835 14 16.25C14 17.2165 13.1046 18 12 18C10.8954 18 10 17.2165 10 16.25"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M12 9.5V11" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12 18V19.5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M5.63246 11.1026C6.44914 8.65258 8.74197 7 11.3246 7H12.6754C15.258 7 17.5509 8.65258 18.3675 11.1026L19.3675 14.1026C20.6626 17.9878 17.7708 22 13.6754 22H10.3246C6.22921 22 3.33739 17.9878 4.63246 14.1026L5.63246 11.1026Z"
                                            stroke="white" stroke-width="1.5" stroke-linejoin="round" />
                                        <path
                                            d="M14.0859 7L9.91411 7L8.51303 5.39296C7.13959 3.81763 8.74185 1.46298 10.7471 2.10985L11.6748 2.40914C11.8861 2.47728 12.1139 2.47728 12.3252 2.40914L13.2529 2.10985C15.2582 1.46298 16.8604 3.81763 15.487 5.39296L14.0859 7Z"
                                            stroke="white" stroke-width="1.5" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <h1 class="mb-2 pt-8 text-center text-xl font-bold text-white">
                                Unlimited Cashback
                            </h1>
                            <p class="mb-2 px-7 text-center text-sm leading-5 text-white opacity-[0.5]">
                                Instant 2% back on all your spend to your account.
                            </p>
                            <div class="flex justify-center">
                                <a href="#">
                                    <div
                                        class="flex h-[36px] w-[134px] justify-center rounded-lg bg-success-300 transition duration-300 ease-in-out hover:bg-success-400">
                                        <div class="flex items-center space-x-1.5">
                                            <span class="text-sm font-semibold text-white">Upgrade Now</span>
                                            <span>
                                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.33301 4H10.6663" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 6.66667L10.6667 4" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8 1.33325L10.6667 3.99992" stroke="white"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="copy-write-text">
                        <p class="text-sm text-[#969BA0]">© 2023 All Rights Reserved</p>
                        <p class="text-sm font-medium text-bgray-700">
                            Made with ❤️ by
                            <a href="#" target="_blank"
                                class="border-b font-semibold hover:text-blue-600">QuomodoTheme</a>
                        </p>
                    </div>
                </div>
            </aside>
            <div style="z-index: 25"
                class="aside-overlay fixed left-0 top-0 block h-full w-full bg-black bg-opacity-30 sm:hidden"></div>
            <aside class="relative hidden w-[96px] bg-white dark:bg-black sm:block">
                <div class="sidebar-wrapper-collapse relative top-0 z-30 w-full">
                    <div
                        class="sidebar-header sticky top-0 z-20 flex h-[108px] w-full items-center justify-center border-b border-r border-b-[#F7F7F7] border-r-[#F7F7F7] bg-white dark:border-darkblack-500 dark:bg-darkblack-600">
                        <a href="index.html">
                            <img src="{{asset('/images/logo/logo-short.svg')}}" class="block dark:hidden" alt="logo" />
                            <img src="{{asset('/images/logo/logo-short-white.svg')}}" class="hidden dark:block"
                                alt="logo" />
                        </a>
                    </div>
                    <div class="sidebar-body w-full pt-[14px]">
                        <div class="flex flex-col items-center">
                            <div class="nav-wrapper mb-[36px]">
                                <div class="item-wrapper mb-5">
                                    <ul class="mt-2.5 flex flex-col items-center justify-center">
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="index.html">
                                                <span class="item-ico">
                                                    <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path class="path-1"
                                                            d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                                            fill="#1A202C" />
                                                        <path class="path-2"
                                                            d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                                            fill="#22C55E" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <ul
                                                class="sub-menu min-w-[200px] rounded-lg border-l border-success-100 bg-white px-5 py-2 shadow-lg">
                                                <li>
                                                    <a href="index-2.html"
                                                        class="text-md inline-block py-1.5 font-medium text-bgray-600 hover:text-bgray-800">Dashboard
                                                        Two</a>
                                                </li>
                                                <li>
                                                    <a href="messages.html"
                                                        class="text-md inline-block py-1.5 font-medium text-bgray-600 hover:text-bgray-800">Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="integrations.html"
                                                        class="text-md inline-block py-1.5 font-medium text-bgray-600 hover:text-bgray-800">Integrations</a>
                                                </li>
                                                <li>
                                                    <a href="home.html"
                                                        class="text-md inline-block py-1.5 font-medium text-bgray-600 hover:text-bgray-800">Home</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="transaction.html">
                                                <span class="item-ico">
                                                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18 16V6C18 3.79086 16.2091 2 14 2H4C1.79086 2 0 3.79086 0 6V16C0 18.2091 1.79086 20 4 20H14C16.2091 20 18 18.2091 18 16Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M4.25 8C4.25 7.58579 4.58579 7.25 5 7.25H13C13.4142 7.25 13.75 7.58579 13.75 8C13.75 8.41421 13.4142 8.75 13 8.75H5C4.58579 8.75 4.25 8.41421 4.25 8Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M4.25 12C4.25 11.5858 4.58579 11.25 5 11.25H13C13.4142 11.25 13.75 11.5858 13.75 12C13.75 12.4142 13.4142 12.75 13 12.75H5C4.58579 12.75 4.25 12.4142 4.25 12Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H9C9.41421 15.25 9.75 15.5858 9.75 16C9.75 16.4142 9.41421 16.75 9 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path
                                                            d="M11 0H7C5.89543 0 5 0.895431 5 2C5 3.10457 5.89543 4 7 4H11C12.1046 4 13 3.10457 13 2C13 0.895431 12.1046 0 11 0Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="statistics.html">
                                                <span class="item-ico">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18 11C18 15.9706 13.9706 20 9 20C4.02944 20 0 15.9706 0 11C0 6.02944 4.02944 2 9 2C13.9706 2 18 6.02944 18 11Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M19.8025 8.01277C19.0104 4.08419 15.9158 0.989557 11.9872 0.197453C10.9045 -0.0208635 10 0.89543 10 2V8C10 9.10457 10.8954 10 12 10H18C19.1046 10 20.0209 9.09555 19.8025 8.01277Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <ul
                                                class="sub-menu min-w-[200px] rounded-lg border-l border-success-100 bg-white px-5 py-2 shadow-lg">
                                                <li>
                                                    <a href="analytics.html"
                                                        class="text-md inline-block py-1.5 font-medium text-bgray-600 hover:text-bgray-800">Analytics</a>
                                                </li>
                                                <li>
                                                    <a href="messages.html"
                                                        class="text-md inline-block py-1.5 font-medium text-bgray-600 hover:text-bgray-800">Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="integrations.html"
                                                        class="text-md inline-block py-1.5 font-medium text-bgray-600 hover:text-bgray-800">Integrations</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="analytics.html">
                                                <span class="item-ico">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 4C0 1.79086 1.79086 0 4 0H16C18.2091 0 20 1.79086 20 4V16C20 18.2091 18.2091 20 16 20H4C1.79086 20 0 18.2091 0 16V4Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M14 9C12.8954 9 12 9.89543 12 11L12 13C12 14.1046 12.8954 15 14 15C15.1046 15 16 14.1046 16 13V11C16 9.89543 15.1046 9 14 9Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path
                                                            d="M6 5C4.89543 5 4 5.89543 4 7L4 13C4 14.1046 4.89543 15 6 15C7.10457 15 8 14.1046 8 13L8 7C8 5.89543 7.10457 5 6 5Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="my-wallet.html">
                                                <span class="item-ico">
                                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20 4C20 1.79086 18.2091 0 16 0H4C1.79086 0 0 1.79086 0 4V14C0 16.2091 1.79086 18 4 18H16C18.2091 18 20 16.2091 20 14V4Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M6 9C6 7.34315 4.65685 6 3 6H0V12H3C4.65685 12 6 10.6569 6 9Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="messages.html">
                                                <span class="item-ico">
                                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 18C9.38503 18 10.5633 17.1652 11 16H5C5.43668 17.1652 6.61497 18 8 18Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.6896 0.754028C9.27403 0.291157 8.67102 0 8 0C6.74634 0 5.73005 1.01629 5.73005 2.26995V2.37366C3.58766 3.10719 2.0016 4.85063 1.76046 6.97519L1.31328 10.9153C1.23274 11.6249 0.933441 12.3016 0.447786 12.8721C-0.649243 14.1609 0.394434 16 2.22281 16H13.7772C15.6056 16 16.6492 14.1609 15.5522 12.8721C15.0666 12.3016 14.7673 11.6249 14.6867 10.9153L14.2395 6.97519C14.2333 6.92024 14.2262 6.86556 14.2181 6.81113C13.8341 6.93379 13.4248 7 13 7C10.7909 7 9 5.20914 9 3C9 2.16744 9.25436 1.3943 9.6896 0.754028Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <circle cx="13" cy="3" r="3" fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="integrations.html">
                                                <span class="item-ico">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.57666 3.61499C1.57666 2.51042 2.47209 1.61499 3.57666 1.61499H8.5C9.60456 1.61499 10.5 2.51042 10.5 3.61499V8.53833C10.5 9.64289 9.60456 10.5383 8.49999 10.5383H3.57666C2.47209 10.5383 1.57666 9.64289 1.57666 8.53832V3.61499Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M13.5 15.5383C13.5 14.4338 14.3954 13.5383 15.5 13.5383H20.4233C21.5279 13.5383 22.4233 14.4338 22.4233 15.5383V20.4617C22.4233 21.5662 21.5279 22.4617 20.4233 22.4617H15.5C14.3954 22.4617 13.5 21.5662 13.5 20.4617V15.5383Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <circle cx="6.03832" cy="18" r="4.46166" fill="#1A202C"
                                                            class="path-1" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M18 2C18.4142 2 18.75 2.33579 18.75 2.75V5.25H21.25C21.6642 5.25 22 5.58579 22 6C22 6.41421 21.6642 6.75 21.25 6.75H18.75V9.25C18.75 9.66421 18.4142 10 18 10C17.5858 10 17.25 9.66421 17.25 9.25V6.75H14.75C14.3358 6.75 14 6.41421 14 6C14 5.58579 14.3358 5.25 14.75 5.25H17.25V2.75C17.25 2.33579 17.5858 2 18 2Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="users.html">
                                                <span class="item-ico">
                                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <ellipse cx="7" cy="14" rx="7" ry="4" class="path-1"
                                                            fill="#1A202C" />
                                                        <circle cx="7" cy="4" r="4" fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="history.html">
                                                <span class="item-ico">
                                                    <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.5 12.5C17.5 17.1944 13.6944 21 9 21C4.30558 21 0.5 17.1944 0.5 12.5C0.5 7.80558 4.30558 4 9 4C13.6944 4 17.5 7.80558 17.5 12.5Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.99995 1.75C8.02962 1.75 7.09197 1.88462 6.20407 2.13575C5.80549 2.24849 5.39099 2.01676 5.27826 1.61818C5.16553 1.21961 5.39725 0.805108 5.79583 0.692376C6.81525 0.404046 7.89023 0.25 8.99995 0.25C10.1097 0.25 11.1846 0.404046 12.2041 0.692376C12.6026 0.805108 12.8344 1.21961 12.7216 1.61818C12.6089 2.01676 12.1944 2.24849 11.7958 2.13575C10.9079 1.88462 9.97028 1.75 8.99995 1.75Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path
                                                            d="M11 13C11 14.1046 10.1046 15 9 15C7.89543 15 7 14.1046 7 13C7 11.8954 7.89543 11 9 11C10.1046 11 11 11.8954 11 13Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9 7.25C9.41421 7.25 9.75 7.58579 9.75 8V12C9.75 12.4142 9.41421 12.75 9 12.75C8.58579 12.75 8.25 12.4142 8.25 12V8C8.25 7.58579 8.58579 7.25 9 7.25Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item-wrapper mb-5">
                                    <ul class="mt-2.5 flex flex-col items-center justify-center">
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="support-ticket.html">
                                                <span class="item-ico">
                                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 2V11C5 12.1046 5.89543 13 7 13H18C19.1046 13 20 12.1046 20 11V2C20 0.895431 19.1046 0 18 0H7C5.89543 0 5 0.89543 5 2Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M0 15C0 13.8954 0.895431 13 2 13H2.17157C2.70201 13 3.21071 13.2107 3.58579 13.5858C4.36683 14.3668 5.63317 14.3668 6.41421 13.5858C6.78929 13.2107 7.29799 13 7.82843 13H8C9.10457 13 10 13.8954 10 15V16C10 17.1046 9.10457 18 8 18H2C0.89543 18 0 17.1046 0 16V15Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path
                                                            d="M7.5 9.5C7.5 10.8807 6.38071 12 5 12C3.61929 12 2.5 10.8807 2.5 9.5C2.5 8.11929 3.61929 7 5 7C6.38071 7 7.5 8.11929 7.5 9.5Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.25 4.5C8.25 4.08579 8.58579 3.75 9 3.75L16 3.75C16.4142 3.75 16.75 4.08579 16.75 4.5C16.75 4.91421 16.4142 5.25 16 5.25L9 5.25C8.58579 5.25 8.25 4.91421 8.25 4.5Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11.25 8.5C11.25 8.08579 11.5858 7.75 12 7.75L16 7.75C16.4142 7.75 16.75 8.08579 16.75 8.5C16.75 8.91421 16.4142 9.25 16 9.25L12 9.25C11.5858 9.25 11.25 8.91421 11.25 8.5Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <ul
                                                class="sub-menu min-w-[200px] rounded-lg border-l border-success-100 bg-white px-5 py-2 shadow-lg">
                                                <li>
                                                    <a href="analytics.html"
                                                        class="text-md inline-block py-1.5 font-medium text-bgray-600 hover:text-bgray-800">Analytics</a>
                                                </li>
                                                <li>
                                                    <a href="messages.html"
                                                        class="text-md inline-block py-1.5 font-medium text-bgray-600 hover:text-bgray-800">Inbox</a>
                                                </li>
                                                <li>
                                                    <a href="integrations.html"
                                                        class="text-md inline-block py-1.5 font-medium text-bgray-600 hover:text-bgray-800">Integrations</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="settings.html">
                                                <span class="item-ico">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.84849 0H7.15151C6.2143 0 5.45454 0.716345 5.45454 1.6C5.45454 2.61121 4.37259 3.25411 3.48444 2.77064L3.39424 2.72153C2.58258 2.27971 1.54473 2.54191 1.07612 3.30717L0.227636 4.69281C-0.240971 5.45808 0.0371217 6.43663 0.848773 6.87846C1.73734 7.36215 1.73734 8.63785 0.848771 9.12154C0.0371203 9.56337 -0.240972 10.5419 0.227635 11.3072L1.07612 12.6928C1.54473 13.4581 2.58258 13.7203 3.39424 13.2785L3.48444 13.2294C4.37259 12.7459 5.45454 13.3888 5.45454 14.4C5.45454 15.2837 6.2143 16 7.15151 16H8.84849C9.7857 16 10.5455 15.2837 10.5455 14.4C10.5455 13.3888 11.6274 12.7459 12.5156 13.2294L12.6058 13.2785C13.4174 13.7203 14.4553 13.4581 14.9239 12.6928L15.7724 11.3072C16.241 10.5419 15.9629 9.56336 15.1512 9.12153C14.2627 8.63784 14.2627 7.36216 15.1512 6.87847C15.9629 6.43664 16.241 5.45809 15.7724 4.69283L14.9239 3.30719C14.4553 2.54192 13.4174 2.27972 12.6058 2.72154L12.5156 2.77065C11.6274 3.25412 10.5455 2.61122 10.5455 1.6C10.5455 0.716344 9.7857 0 8.84849 0Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path
                                                            d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z"
                                                            fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="signin.html">
                                                <span class="item-ico">
                                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <ellipse cx="7" cy="14" rx="7" ry="4" class="path-1"
                                                            fill="#1A202C" />
                                                        <circle cx="7" cy="4" r="4" fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="signup.html">
                                                <span class="item-ico">
                                                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <ellipse cx="7" cy="14" rx="7" ry="4" class="path-1"
                                                            fill="#1A202C" />
                                                        <circle cx="7" cy="4" r="4" fill="#22C55E" class="path-2" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="item px-[43px] py-[11px]">
                                            <a href="#">
                                                <span class="item-ico">
                                                    <svg width="21" height="18" viewBox="0 0 21 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M17.1464 10.4394C16.8536 10.7323 16.8536 11.2072 17.1464 11.5001C17.4393 11.7929 17.9142 11.7929 18.2071 11.5001L19.5 10.2072C20.1834 9.52375 20.1834 8.41571 19.5 7.73229L18.2071 6.4394C17.9142 6.1465 17.4393 6.1465 17.1464 6.4394C16.8536 6.73229 16.8536 7.20716 17.1464 7.50006L17.8661 8.21973H11.75C11.3358 8.21973 11 8.55551 11 8.96973C11 9.38394 11.3358 9.71973 11.75 9.71973H17.8661L17.1464 10.4394Z"
                                                            fill="#22C55E" class="path-2" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M4.75 17.75H12C14.6234 17.75 16.75 15.6234 16.75 13C16.75 12.5858 16.4142 12.25 16 12.25C15.5858 12.25 15.25 12.5858 15.25 13C15.25 14.7949 13.7949 16.25 12 16.25H8.21412C7.34758 17.1733 6.11614 17.75 4.75 17.75ZM8.21412 1.75H12C13.7949 1.75 15.25 3.20507 15.25 5C15.25 5.41421 15.5858 5.75 16 5.75C16.4142 5.75 16.75 5.41421 16.75 5C16.75 2.37665 14.6234 0.25 12 0.25H4.75C6.11614 0.25 7.34758 0.82673 8.21412 1.75Z"
                                                            fill="#1A202C" class="path-1" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M0 5C0 2.37665 2.12665 0.25 4.75 0.25C7.37335 0.25 9.5 2.37665 9.5 5V13C9.5 15.6234 7.37335 17.75 4.75 17.75C2.12665 17.75 0 15.6234 0 13V5Z"
                                                            fill="#1A202C" class="path-1" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="upgrade-wrapper">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-full border border-white bg-success-300">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 12.75C14 11.7835 13.1046 11 12 11C10.8954 11 10 11.7835 10 12.75C10 13.7165 10.8954 14.5 12 14.5C13.1046 14.5 14 15.2835 14 16.25C14 17.2165 13.1046 18 12 18C10.8954 18 10 17.2165 10 16.25"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                            <path d="M12 9.5V11" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 18V19.5" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M5.63246 11.1026C6.44914 8.65258 8.74197 7 11.3246 7H12.6754C15.258 7 17.5509 8.65258 18.3675 11.1026L19.3675 14.1026C20.6626 17.9878 17.7708 22 13.6754 22H10.3246C6.22921 22 3.33739 17.9878 4.63246 14.1026L5.63246 11.1026Z"
                                                stroke="white" stroke-width="1.5" stroke-linejoin="round" />
                                            <path
                                                d="M14.0859 7L9.91411 7L8.51303 5.39296C7.13959 3.81763 8.74185 1.46298 10.7471 2.10985L11.6748 2.40914C11.8861 2.47728 12.1139 2.47728 12.3252 2.40914L13.2529 2.10985C15.2582 1.46298 16.8604 3.81763 15.487 5.39296L14.0859 7Z"
                                                stroke="white" stroke-width="1.5" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="body-wrapper flex-1 overflow-x-hidden dark:bg-darkblack-500">
                <header class="header-wrapper fixed z-30 hidden w-full md:block">
                    <div
                        class="relative flex h-[108px] w-full items-center justify-between bg-white px-10 dark:bg-darkblack-600 2xl:px-[76px]">
                        <button title="Ctrl+b" type="button"
                            class="drawer-btn absolute left-0 top-auto rotate-180 transform">
                            <span>
                                <svg width="16" height="40" viewBox="0 0 16 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 10C0 4.47715 4.47715 0 10 0H16V40H10C4.47715 40 0 35.5228 0 30V10Z"
                                        fill="#22C55E" />
                                    <path d="M10 15L6 20.0049L10 25.0098" stroke="#ffffff" stroke-width="1.2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>
                        <!--              page-title-->
                        <div>
                            <h3
                                class="text-xl font-bold text-bgray-900 dark:text-bgray-50 lg:text-3xl lg:leading-[36.4px]">
                                Dashboard
                            </h3>
                            <p
                                class="text-xs font-medium text-bgray-600 dark:text-bgray-50 lg:text-sm lg:leading-[25.2px]">
                                Let’s check your update today
                            </p>
                        </div>
                        <!--              search-bar-->
                        <div class="searchbar-wrapper">
                            <div
                                class="px flex h-[56px] w-[300px] items-center justify-between rounded-lg border border-transparent bg-bgray-50 px-4 focus-within:border-success-300 dark:bg-darkblack-500 lg:w-[400px]">
                                <div class="flex w-full items-center space-x-3.5">
                                    <span>
                                        <svg class="stroke-bgray-900 dark:stroke-bgray-50" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="9.78639" cy="9.78602" r="8.23951" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15.5176 15.9447L18.7479 19.1667" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <label for="search" class="w-full">
                                        <input type="text" id="search" placeholder="Search..."
                                            class="search-input w-full border-none bg-bgray-50 bg-none px-0 text-sm tracking-wide text-bgray-600 placeholder:text-sm placeholder:font-semibold focus:outline-none focus:ring-0 dark:bg-darkblack-500 dark:placeholder:text-bgray-500" />
                                    </label>
                                </div>
                                <div class="flex items-center space-x-[6px]">
                                    <span>
                                        <svg class="stroke-bgray-900 dark:stroke-gray-300" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.975 12.3875C5.975 12.8548 5.83644 13.3115 5.57685 13.7C5.31725 14.0885 4.94828 14.3914 4.51659 14.5702C4.0849 14.749 3.60988 14.7958 3.1516 14.7046C2.69332 14.6134 2.27236 14.3884 1.94196 14.058C1.61156 13.7276 1.38655 13.3067 1.2954 12.8484C1.20424 12.3901 1.25102 11.9151 1.42984 11.4834C1.60865 11.0517 1.91146 10.6827 2.29997 10.4232C2.68848 10.1636 3.14524 10.025 3.6125 10.025H12.3875C12.8548 10.025 13.3115 10.1636 13.7 10.4232C14.0885 10.6827 14.3914 11.0517 14.5702 11.4834C14.749 11.9151 14.7958 12.3901 14.7046 12.8484C14.6134 13.3067 14.3884 13.7276 14.058 14.058C13.7276 14.3884 13.3067 14.6134 12.8484 14.7046C12.3901 14.7958 11.9151 14.749 11.4834 14.5702C11.0517 14.3914 10.6827 14.0885 10.4232 13.7C10.1636 13.3115 10.025 12.8548 10.025 12.3875V3.6125C10.025 3.14524 10.1636 2.68848 10.4232 2.29997C10.6827 1.91146 11.0517 1.60865 11.4834 1.42984C11.9151 1.25102 12.3901 1.20424 12.8484 1.2954C13.3067 1.38655 13.7276 1.61156 14.058 1.94196C14.3884 2.27236 14.6134 2.69332 14.7046 3.1516C14.7958 3.60988 14.749 4.0849 14.5702 4.51659C14.3914 4.94828 14.0885 5.31725 13.7 5.57685C13.3115 5.83644 12.8548 5.975 12.3875 5.975H3.6125C3.14524 5.975 2.68848 5.83644 2.29997 5.57685C1.91146 5.31725 1.60865 4.94828 1.42984 4.51659C1.25102 4.0849 1.20424 3.60988 1.2954 3.1516C1.38655 2.69332 1.61156 2.27236 1.94196 1.94196C2.27236 1.61156 2.69332 1.38655 3.1516 1.2954C3.60988 1.20424 4.0849 1.25102 4.51659 1.42984C4.94828 1.60865 5.31725 1.91146 5.57685 2.29997C5.83644 2.68848 5.975 3.14524 5.975 3.6125V12.3875Z"
                                                stroke-width="1.5" />
                                        </svg>
                                    </span>
                                    <span class="text-base text-bgray-900 dark:text-bgray-300">K</span>
                                </div>
                            </div>
                        </div>
                        <!--  quick access-->
                        <div class="quick-access-wrapper relative">
                            <div class="flex items-center space-x-[43px]">
                                <div class="hidden items-center space-x-5 xl:flex">
                                    <button type="button" id="theme-toggle"
                                        class="relative flex h-[52px] w-[52px] items-center justify-center rounded-[12px] border border-success-300 dark:border-darkblack-400">
                                        <span class="block dark:hidden">
                                            <svg class="stroke-bgray-900" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.3284 14.8687C13.249 14.8687 9.13135 10.751 9.13135 5.67163C9.13135 4.74246 9.26914 3.84548 9.5254 3C5.74897 4.14461 3 7.65276 3 11.803C3 16.8824 7.11765 21 12.197 21C16.3472 21 19.8554 18.251 21 14.4746C20.1545 14.7309 19.2575 14.8687 18.3284 14.8687Z"
                                                    stroke-width="1.5" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="hidden dark:block">
                                            <svg class="stroke-bgray-900 dark:stroke-bgray-50" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="5" stroke-width="1.5" />
                                                <path d="M12 2V4" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M12 20V22" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M20.6602 7L18.9281 8" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                                <path d="M5.07178 16L3.33973 17" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                                <path d="M3.33984 7L5.07189 8" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                                <path d="M18.9282 16L20.6603 17" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button onclick="notificationAction()" id="notification-btn" type="button"
                                        class="relative flex h-[52px] w-[52px] items-center justify-center rounded-[12px] border border-success-300 dark:border-darkblack-400">
                                        <span
                                            class="absolute -right-[5px] -top-[2px] h-3.5 w-3.5 rounded-full border-2 border-white bg-bgray-300 dark:border-none dark:bg-bgray-600">
                                        </span>
                                        <svg class="fill-bgray-900 dark:fill-white" width="24" height="25"
                                            viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.9718 6.78149L19.2803 7.07178L19.9718 6.78149ZM19.3571 7.25473C19.5174 7.63666 19.957 7.81631 20.3389 7.65599C20.7209 7.49567 20.9005 7.05609 20.7402 6.67416L19.3571 7.25473ZM16.7784 2.77061C16.3937 2.61687 15.9573 2.80404 15.8036 3.18867C15.6498 3.5733 15.837 4.00973 16.2216 4.16347L16.7784 2.77061ZM16.6672 3.53388L16.3889 4.23031L16.6672 3.53388ZM4.0768 6.78149L4.76834 7.07178L4.0768 6.78149ZM3.30846 6.67416C3.14813 7.05609 3.32778 7.49567 3.70971 7.65599C4.09164 7.81631 4.53122 7.63666 4.69154 7.25473L3.30846 6.67416ZM7.82701 4.16347C8.21164 4.00973 8.39881 3.5733 8.24507 3.18867C8.09134 2.80405 7.65491 2.61687 7.27028 2.77061L7.82701 4.16347ZM7.38142 3.53388L7.10305 2.83745V2.83745L7.38142 3.53388ZM18.2395 9.93743L17.4943 10.0221V10.0221L18.2395 9.93743ZM18.6867 13.8746L19.4319 13.7899V13.7899L18.6867 13.8746ZM5.31328 13.8746L4.56807 13.7899L5.31328 13.8746ZM5.76046 9.93743L6.50567 10.0221L5.76046 9.93743ZM4.44779 15.83L3.87686 15.3436H3.87686L4.44779 15.83ZM19.5522 15.83L18.9813 16.3164L18.9813 16.3164L19.5522 15.83ZM14.2699 5.33931H13.5199C13.5199 5.65996 13.7238 5.94513 14.0272 6.04893L14.2699 5.33931ZM9.73005 5.33931L9.97284 6.04893C10.2762 5.94513 10.4801 5.65996 10.4801 5.33931H9.73005ZM15.7022 21.2175C15.8477 20.8296 15.6512 20.3973 15.2634 20.2518C14.8755 20.1064 14.4432 20.3029 14.2978 20.6907L15.7022 21.2175ZM9.70223 20.6907C9.55678 20.3029 9.12446 20.1064 8.73663 20.2518C8.34879 20.3973 8.15231 20.8296 8.29777 21.2175L9.70223 20.6907ZM19.2803 7.07178L19.3571 7.25473L20.7402 6.67416L20.6634 6.4912L19.2803 7.07178ZM16.2216 4.16347L16.3889 4.23031L16.9456 2.83745L16.7784 2.77061L16.2216 4.16347ZM20.6634 6.4912C19.9638 4.82468 18.6244 3.50849 16.9456 2.83745L16.3889 4.23031C17.6948 4.7523 18.7364 5.77599 19.2803 7.07178L20.6634 6.4912ZM3.38526 6.4912L3.30846 6.67416L4.69154 7.25473L4.76834 7.07178L3.38526 6.4912ZM7.27028 2.77061L7.10305 2.83745L7.65979 4.23031L7.82701 4.16347L7.27028 2.77061ZM4.76834 7.07178C5.31227 5.77599 6.35384 4.7523 7.65979 4.23031L7.10305 2.83745C5.4242 3.50849 4.08481 4.82468 3.38526 6.4912L4.76834 7.07178ZM17.7772 18.2056H6.22281V19.7056H17.7772V18.2056ZM17.4943 10.0221L17.9415 13.9592L19.4319 13.7899L18.9847 9.85279L17.4943 10.0221ZM6.05849 13.9592L6.50567 10.0221L5.01526 9.85279L4.56807 13.7899L6.05849 13.9592ZM5.01872 16.3164C5.59608 15.6386 5.96025 14.8241 6.05849 13.9592L4.56807 13.7899C4.50522 14.3432 4.2708 14.8812 3.87686 15.3436L5.01872 16.3164ZM17.9415 13.9592C18.0398 14.8241 18.4039 15.6386 18.9813 16.3164L20.1231 15.3436C19.7292 14.8812 19.4948 14.3432 19.4319 13.7899L17.9415 13.9592ZM6.22281 18.2056C5.5675 18.2056 5.10418 17.8817 4.89044 17.5053C4.68417 17.1421 4.68715 16.7056 5.01872 16.3164L3.87686 15.3436C3.11139 16.2422 3.0877 17.3685 3.5861 18.2461C4.07704 19.1105 5.04975 19.7056 6.22281 19.7056V18.2056ZM17.7772 19.7056C18.9503 19.7056 19.923 19.1105 20.4139 18.2461C20.9123 17.3685 20.8886 16.2422 20.1231 15.3436L18.9813 16.3164C19.3129 16.7056 19.3158 17.1421 19.1096 17.5053C18.8958 17.8817 18.4325 18.2056 17.7772 18.2056V19.7056ZM15.0199 5.33931V5.23567H13.5199V5.33931H15.0199ZM18.9847 9.85279C18.7054 7.39374 16.8802 5.43969 14.5127 4.6297L14.0272 6.04893C15.9445 6.70491 17.2914 8.23516 17.4943 10.0221L18.9847 9.85279ZM10.4801 5.33931V5.23567H8.98005V5.33931H10.4801ZM6.50567 10.0221C6.70863 8.23516 8.05551 6.70491 9.97284 6.04893L9.48727 4.6297C7.1198 5.43969 5.29456 7.39374 5.01526 9.85279L6.50567 10.0221ZM12 3.71741C12.84 3.71741 13.5199 4.39768 13.5199 5.23567H15.0199C15.0199 3.56821 13.6673 2.21741 12 2.21741V3.71741ZM12 2.21741C10.3327 2.21741 8.98005 3.56821 8.98005 5.23567H10.4801C10.4801 4.39768 11.16 3.71741 12 3.71741V2.21741ZM14.2978 20.6907C13.9752 21.5508 13.0849 22.2026 12 22.2026V23.7026C13.6851 23.7026 15.1514 22.686 15.7022 21.2175L14.2978 20.6907ZM12 22.2026C10.9151 22.2026 10.0248 21.5508 9.70223 20.6907L8.29777 21.2175C8.84856 22.686 10.3149 23.7026 12 23.7026V22.2026Z" />
                                        </svg>
                                    </button>
                                    <button onclick="messageAction()" type="button" id="message-btn"
                                        class="relative flex h-[52px] w-[52px] items-center justify-center rounded-[12px] border border-success-300 dark:border-darkblack-400">
                                        <span
                                            class="absolute -right-[5px] -top-[2px] h-3.5 w-3.5 rounded-full border-2 border-white bg-error-300 dark:border-none"></span>
                                        <svg class="stroke-bgray-900 dark:stroke-white" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 12V7C2 4.79086 3.79086 3 6 3H18C20.2091 3 22 4.79086 22 7V17C22 19.2091 20.2091 21 18 21H8M6 8L9.7812 10.5208C11.1248 11.4165 12.8752 11.4165 14.2188 10.5208L18 8M2 15H8M2 18H8"
                                                stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <button onclick="storeAction()" type="button" id="store-btn"
                                        class="relative flex h-[52px] w-[52px] items-center justify-center rounded-[12px] border border-success-300 dark:border-darkblack-400">
                                        <span
                                            class="absolute -right-[5px] -top-[2px] h-3.5 w-3.5 rounded-full border-2 border-white bg-bgray-300 dark:border-none dark:bg-bgray-600"></span>
                                        <svg class="stroke-bgray-900 dark:stroke-white" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 11H20M4 11C2.89543 11 2 10.1046 2 9V8C2 6.89543 2.89543 6 4 6H20C21.1046 6 22 6.89543 22 8V9C22 10.1046 21.1046 11 20 11M4 11L4 20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V11M12 6H16C17.1046 6 18 5.10457 18 4C18 2.89543 17.1046 2 16 2C13.7909 2 12 3.79086 12 6ZM12 6H8C6.89543 6 6 5.10457 6 4C6 2.89543 6.89543 2 8 2C10.2091 2 12 3.79086 12 6ZM12 6V22"
                                                stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="hidden h-[48px] w-[1px] bg-bgray-300 dark:bg-darkblack-400 xl:block"></div>
                                <!--                author-->
                                <div onclick="profileAction()" class="flex cursor-pointer space-x-0 lg:space-x-3">
                                    <div class="h-[52px] w-[52px] overflow-hidden rounded-xl border border-bgray-300">
                                        <img class="object-cover" src="{{asset('/images/avatar/profile-52x52.png')}}"
                                            alt="avater" />
                                    </div>
                                    <div class="hidden 2xl:block">
                                        <div class="flex items-center space-x-2.5">
                                            <h3
                                                class="text-base font-bold leading-[28px] text-bgray-900 dark:text-white">
                                                John Doe
                                            </h3>
                                            <span>
                                                <svg class="stroke-bgray-900 dark:stroke-white" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 10L12 14L17 10" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                        <p class="text-sm font-medium leading-[20px] text-bgray-600 dark:text-bgray-50">
                                            Super Admin
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--                notification ,message, store-->
                            <div class="notification-popup-wrapper">
                                <div onclick="notificationAction()" id="noti-outside"
                                    class="fixed -left-[43px] top-0 hidden h-full w-full"></div>
                                <div id="notification-box" style="
                      filter: drop-shadow(12px 12px 40px rgba(0, 0, 0, 0.08));
                    " class="absolute -left-[347px] top-[81px] hidden w-[400px] rounded-lg bg-white dark:bg-darkblack-600">
                                    <div class="relative w-full pb-[75px] pt-[66px]">
                                        <div
                                            class="absolute left-0 top-0 flex h-[66px] w-full items-center justify-between px-8">
                                            <h3 class="text-xl font-bold text-bgray-900 dark:text-white">
                                                Notifications
                                            </h3>
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.325 4.317C10.751 2.561 13.249 2.561 13.675 4.317C13.7389 4.5808 13.8642 4.82578 14.0407 5.032C14.2172 5.23822 14.4399 5.39985 14.6907 5.50375C14.9414 5.60764 15.2132 5.65085 15.4838 5.62987C15.7544 5.60889 16.0162 5.5243 16.248 5.383C17.791 4.443 19.558 6.209 18.618 7.753C18.4769 7.98466 18.3924 8.24634 18.3715 8.51677C18.3506 8.78721 18.3938 9.05877 18.4975 9.30938C18.6013 9.55999 18.7627 9.78258 18.9687 9.95905C19.1747 10.1355 19.4194 10.2609 19.683 10.325C21.439 10.751 21.439 13.249 19.683 13.675C19.4192 13.7389 19.1742 13.8642 18.968 14.0407C18.7618 14.2172 18.6001 14.4399 18.4963 14.6907C18.3924 14.9414 18.3491 15.2132 18.3701 15.4838C18.3911 15.7544 18.4757 16.0162 18.617 16.248C19.557 17.791 17.791 19.558 16.247 18.618C16.0153 18.4769 15.7537 18.3924 15.4832 18.3715C15.2128 18.3506 14.9412 18.3938 14.6906 18.4975C14.44 18.6013 14.2174 18.7627 14.0409 18.9687C13.8645 19.1747 13.7391 19.4194 13.675 19.683C13.249 21.439 10.751 21.439 10.325 19.683C10.2611 19.4192 10.1358 19.1742 9.95929 18.968C9.7828 18.7618 9.56011 18.6001 9.30935 18.4963C9.05859 18.3924 8.78683 18.3491 8.51621 18.3701C8.24559 18.3911 7.98375 18.4757 7.752 18.617C6.209 19.557 4.442 17.791 5.382 16.247C5.5231 16.0153 5.60755 15.7537 5.62848 15.4832C5.64942 15.2128 5.60624 14.9412 5.50247 14.6906C5.3987 14.44 5.23726 14.2174 5.03127 14.0409C4.82529 13.8645 4.58056 13.7391 4.317 13.675C2.561 13.249 2.561 10.751 4.317 10.325C4.5808 10.2611 4.82578 10.1358 5.032 9.95929C5.23822 9.7828 5.39985 9.56011 5.50375 9.30935C5.60764 9.05859 5.65085 8.78683 5.62987 8.51621C5.60889 8.24559 5.5243 7.98375 5.383 7.752C4.443 6.209 6.209 4.442 7.753 5.382C8.753 5.99 10.049 5.452 10.325 4.317Z"
                                                        stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                        stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                        <ul class="scroll-style-1 h-[335px] w-full overflow-y-scroll">
                                            <li
                                                class="border-b border-bgray-200 py-4 pl-6 pr-[50px] hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                <a href="#">
                                                    <div class="noti-item">
                                                        <p
                                                            class="mb-1 text-sm font-medium text-bgray-600 dark:text-bgray-50">
                                                            <strong class="text-bgray-900 dark:text-white">James
                                                                Eusobio</strong>
                                                            send a new payment for
                                                            <strong class="text-bgray-900 dark:text-white">SEO
                                                                writing</strong>
                                                            totaling
                                                            <span class="text-success-300">$199.00</span>
                                                        </p>
                                                        <span class="text-xs font-medium text-bgray-500">23 mins
                                                            ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li
                                                class="border-b border-bgray-200 py-4 pl-6 pr-[50px] hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                <a href="#">
                                                    <div class="noti-item">
                                                        <p
                                                            class="mb-1 text-sm font-medium text-bgray-600 dark:text-white">
                                                            <strong class="text-bgray-900 dark:text-bgray-50">James
                                                                Eusobio</strong>
                                                            send a new payment for
                                                            <strong class="text-bgray-900 dark:text-bgray-50">SEO
                                                                writing</strong>
                                                            totaling
                                                            <span class="text-error-200">$199.00</span>
                                                        </p>
                                                        <span class="text-xs font-medium text-bgray-500">23 mins
                                                            ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li
                                                class="border-b border-bgray-200 py-4 pl-6 pr-[50px] hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                <a href="#">
                                                    <div class="noti-item">
                                                        <p
                                                            class="mb-1 text-sm font-medium text-bgray-600 dark:text-bgray-50">
                                                            <strong class="text-bgray-900 dark:text-white">James
                                                                Eusobio</strong>
                                                            send a new payment for
                                                            <strong class="text-bgray-900 dark:text-white">SEO
                                                                writing</strong>
                                                            totaling
                                                            <span class="text-success-300">$199.00</span>
                                                        </p>
                                                        <span class="text-xs font-medium text-bgray-500">23 mins
                                                            ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li
                                                class="border-b border-bgray-200 py-4 pl-6 pr-[50px] hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                <a href="#">
                                                    <div class="noti-item">
                                                        <p
                                                            class="mb-1 text-sm font-medium text-bgray-600 dark:text-bgray-50">
                                                            <strong class="text-bgray-900 dark:text-white">James
                                                                Eusobio</strong>
                                                            send a new payment for
                                                            <strong class="text-bgray-900 dark:text-white">SEO
                                                                writing</strong>
                                                            totaling
                                                            <span class="text-success-300">$199.00</span>
                                                        </p>
                                                        <span class="text-xs font-medium text-bgray-500">23 mins
                                                            ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li
                                                class="border-b border-bgray-200 py-4 pl-6 pr-[50px] hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                <a href="#">
                                                    <div class="noti-item">
                                                        <p
                                                            class="mb-1 text-sm font-medium text-bgray-600 dark:text-bgray-50">
                                                            <strong class="text-bgray-900 dark:text-white">James
                                                                Eusobio</strong>
                                                            send a new payment for
                                                            <strong class="text-bgray-900 dark:text-white">SEO
                                                                writing</strong>
                                                            totaling
                                                            <span class="text-success-300">$199.00</span>
                                                        </p>
                                                        <span class="text-xs font-medium text-bgray-500">23 mins
                                                            ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div
                                            class="absolute bottom-0 left-0 flex h-[75px] w-full items-center justify-between px-8">
                                            <div>
                                                <a href="#">
                                                    <div class="flex items-center space-x-2">
                                                        <span>
                                                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 6L11 11L21 1M1 6L6 11M11 6L16 1"
                                                                    stroke="#0CAF60" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-sm font-semibold text-success-300">
                                                            Mark all as read
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message-popup-wrapper">
                                <div onclick="messageAction()" id="mes-outside"
                                    class="fixed -left-[43px] top-0 hidden h-full w-full"></div>
                                <div id="message-box" style="
                      filter: drop-shadow(12px 12px 40px rgba(0, 0, 0, 0.08));
                    " class="absolute -left-[276px] top-[81px] hidden w-[400px] rounded-lg bg-white dark:bg-darkblack-600">
                                    <div class="relative w-full pb-[75px] pt-[66px]">
                                        <div
                                            class="absolute left-0 top-0 flex h-[66px] w-full items-center justify-between px-8">
                                            <h3 class="text-xl font-bold text-bgray-900 dark:text-white">
                                                Message
                                            </h3>
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.325 4.317C10.751 2.561 13.249 2.561 13.675 4.317C13.7389 4.5808 13.8642 4.82578 14.0407 5.032C14.2172 5.23822 14.4399 5.39985 14.6907 5.50375C14.9414 5.60764 15.2132 5.65085 15.4838 5.62987C15.7544 5.60889 16.0162 5.5243 16.248 5.383C17.791 4.443 19.558 6.209 18.618 7.753C18.4769 7.98466 18.3924 8.24634 18.3715 8.51677C18.3506 8.78721 18.3938 9.05877 18.4975 9.30938C18.6013 9.55999 18.7627 9.78258 18.9687 9.95905C19.1747 10.1355 19.4194 10.2609 19.683 10.325C21.439 10.751 21.439 13.249 19.683 13.675C19.4192 13.7389 19.1742 13.8642 18.968 14.0407C18.7618 14.2172 18.6001 14.4399 18.4963 14.6907C18.3924 14.9414 18.3491 15.2132 18.3701 15.4838C18.3911 15.7544 18.4757 16.0162 18.617 16.248C19.557 17.791 17.791 19.558 16.247 18.618C16.0153 18.4769 15.7537 18.3924 15.4832 18.3715C15.2128 18.3506 14.9412 18.3938 14.6906 18.4975C14.44 18.6013 14.2174 18.7627 14.0409 18.9687C13.8645 19.1747 13.7391 19.4194 13.675 19.683C13.249 21.439 10.751 21.439 10.325 19.683C10.2611 19.4192 10.1358 19.1742 9.95929 18.968C9.7828 18.7618 9.56011 18.6001 9.30935 18.4963C9.05859 18.3924 8.78683 18.3491 8.51621 18.3701C8.24559 18.3911 7.98375 18.4757 7.752 18.617C6.209 19.557 4.442 17.791 5.382 16.247C5.5231 16.0153 5.60755 15.7537 5.62848 15.4832C5.64942 15.2128 5.60624 14.9412 5.50247 14.6906C5.3987 14.44 5.23726 14.2174 5.03127 14.0409C4.82529 13.8645 4.58056 13.7391 4.317 13.675C2.561 13.249 2.561 10.751 4.317 10.325C4.5808 10.2611 4.82578 10.1358 5.032 9.95929C5.23822 9.7828 5.39985 9.56011 5.50375 9.30935C5.60764 9.05859 5.65085 8.78683 5.62987 8.51621C5.60889 8.24559 5.5243 7.98375 5.383 7.752C4.443 6.209 6.209 4.442 7.753 5.382C8.753 5.99 10.049 5.452 10.325 4.317Z"
                                                        stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                                        stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div>
                                            <div
                                                class="flex items-center border-b border-bgray-200 dark:border-darkblack-400">
                                                <button type="button"
                                                    class="flex space-x-2 border-b-2 border-success-300 px-6 py-4 text-sm font-semibold capitalize text-success-300">
                                                    <span>All</span>
                                                    <span
                                                        class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-success-50 text-[10px] text-success-300">2</span>
                                                </button>
                                            </div>
                                            <ul class="scroll-style-1 h-[335px] w-full overflow-y-scroll">
                                                <li
                                                    class="border-b border-bgray-200 px-7 py-6 hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                    <a href="#">
                                                        <div class="flex space-x-3">
                                                            <div class="relative h-[48px] w-[48px] rounded-full">
                                                                <img src="{{ asset('images/avatar/inbox-1.png')}}"
                                                                    alt="avatar" class="h-full w-full object-cover" />
                                                                <div
                                                                    class="absolute bottom-0 right-0 h-3 w-3 rounded-full border border-white bg-bgray-300">
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <p
                                                                    class="mb-1 text-base font-bold text-bgray-900 dark:text-white dark:text-white">
                                                                    James Eusobio
                                                                </p>
                                                                <p
                                                                    class="text-sm font-medium text-bgray-500 dark:text-bgray-50">
                                                                    Hi, how are you? nedd help! .......
                                                                </p>
                                                                <span
                                                                    class="text-sm font-medium text-bgray-500 dark:text-bgray-50">23
                                                                    mins ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li
                                                    class="border-b border-bgray-200 px-7 py-6 hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                    <a href="#">
                                                        <div class="flex space-x-3">
                                                            <div class="relative h-[48px] w-[48px] rounded-full">
                                                                <img src="{{asset('/images/avatar/inbox-2.png')}}"
                                                                    alt="avatar" class="h-full w-full object-cover" />
                                                                <div
                                                                    class="absolute bottom-0 right-0 h-3 w-3 rounded-full border border-white bg-success-300">
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <p
                                                                    class="mb-1 text-base font-bold text-bgray-900 dark:text-white">
                                                                    Eusobio Joy
                                                                </p>
                                                                <p class="text-sm font-medium text-bgray-500">
                                                                    Hi, how are you? nedd help! .......
                                                                </p>
                                                                <span class="text-sm font-medium text-bgray-500">23 mins
                                                                    ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li
                                                    class="border-b border-bgray-200 px-7 py-6 hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                    <a href="#">
                                                        <div class="flex space-x-3">
                                                            <div class="relative h-[48px] w-[48px] rounded-full">
                                                                <img src="{{asset('/images/avatar/inbox-3.png')}}"
                                                                    alt="avatar" class="h-full w-full object-cover" />
                                                                <div
                                                                    class="absolute bottom-0 right-0 h-3 w-3 rounded-full border border-white bg-success-300">
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <p
                                                                    class="mb-1 text-base font-bold text-bgray-900 dark:text-white">
                                                                    James Camaron
                                                                </p>
                                                                <p class="text-sm font-medium text-bgray-500">
                                                                    Hi, how are you? nedd help! .......
                                                                </p>
                                                                <span class="text-sm font-medium text-bgray-500">23 mins
                                                                    ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li
                                                    class="border-b border-bgray-200 px-7 py-6 hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                    <a href="#">
                                                        <div class="flex space-x-3">
                                                            <div class="relative h-[48px] w-[48px] rounded-full">
                                                                <img src="{{asset('/images/avatar/inbox-1.png')}}"
                                                                    alt="avatar" class="h-full w-full object-cover" />
                                                                <div
                                                                    class="absolute bottom-0 right-0 h-3 w-3 rounded-full border border-white bg-bgray-300">
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <p
                                                                    class="mb-1 text-base font-bold text-bgray-900 dark:text-white">
                                                                    James Eusobio
                                                                </p>
                                                                <p class="text-sm font-medium text-bgray-500">
                                                                    Hi, how are you? nedd help! .......
                                                                </p>
                                                                <span class="text-sm font-medium text-bgray-500">23 mins
                                                                    ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li
                                                    class="border-b border-bgray-200 px-7 py-6 hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                    <a href="#">
                                                        <div class="flex space-x-3">
                                                            <div class="relative h-[48px] w-[48px] rounded-full">
                                                                <img src="{{asset('/images/avatar/inbox-2.png')}}"
                                                                    alt="avatar" class="h-full w-full object-cover" />
                                                                <div
                                                                    class="absolute bottom-0 right-0 h-3 w-3 rounded-full border border-white bg-success-300">
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <p
                                                                    class="mb-1 text-base font-bold text-bgray-900 dark:text-white">
                                                                    James Eusobio
                                                                </p>
                                                                <p class="text-sm font-medium text-bgray-500">
                                                                    Hi, how are you? nedd help! .......
                                                                </p>
                                                                <span class="text-sm font-medium text-bgray-500">23 mins
                                                                    ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li
                                                    class="border-b border-bgray-200 px-7 py-6 hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                    <a href="#">
                                                        <div class="flex space-x-3">
                                                            <div class="relative h-[48px] w-[48px] rounded-full">
                                                                <img src="{{asset('/images/avatar/inbox-3.png')}}"
                                                                    alt="avatar" class="h-full w-full object-cover" />
                                                                <div
                                                                    class="absolute bottom-0 right-0 h-3 w-3 rounded-full border border-white bg-success-300">
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <p
                                                                    class="mb-1 text-base font-bold text-bgray-900 dark:text-white">
                                                                    James Eusobio
                                                                </p>
                                                                <p class="text-sm font-medium text-bgray-500">
                                                                    Hi, how are you? nedd help! .......
                                                                </p>
                                                                <span class="text-sm font-medium text-bgray-500">23 mins
                                                                    ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li
                                                    class="border-b border-bgray-200 px-7 py-6 hover:bg-bgray-100 dark:border-darkblack-400 dark:hover:bg-darkblack-500">
                                                    <a href="#">
                                                        <div class="flex space-x-3">
                                                            <div class="relative h-[48px] w-[48px] rounded-full">
                                                                <img src="{{asset('/images/avatar/inbox-1.png')}}"
                                                                    alt="avatar" class="h-full w-full object-cover" />
                                                                <div
                                                                    class="absolute bottom-0 right-0 h-3 w-3 rounded-full border border-white bg-bgray-300">
                                                                </div>
                                                            </div>
                                                            <div class="flex-1">
                                                                <p
                                                                    class="mb-1 text-base font-bold text-bgray-900 dark:text-white">
                                                                    James Eusobio
                                                                </p>
                                                                <p class="text-sm font-medium text-bgray-500">
                                                                    Hi, how are you? nedd help! .......
                                                                </p>
                                                                <span class="text-sm font-medium text-bgray-500">23 mins
                                                                    ago</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div
                                            class="absolute bottom-0 left-0 flex h-[75px] w-full items-center justify-between px-8">
                                            <div>
                                                <a href="#">
                                                    <div class="flex items-center space-x-2">
                                                        <span>
                                                            <svg width="22" height="12" viewBox="0 0 22 12" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 6L11 11L21 1M1 6L6 11M11 6L16 1"
                                                                    stroke="#0CAF60" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-sm font-semibold text-success-300">
                                                            Mark all as read
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="store-wrapper">
                                <div id="store-outside" onclick="storeAction()"
                                    class="fixed -left-[43px] top-0 hidden h-full w-full"></div>
                                <div id="store-box" style="
                      filter: drop-shadow(12px 12px 40px rgba(0, 0, 0, 0.08));
                    " class="absolute -left-[134px] top-[81px] hidden w-[330px] overflow-hidden rounded-lg bg-white dark:bg-darkblack-600">
                                    <div class="relative w-full p-6">
                                        <div class="bonus-box-wrapper w-full overflow-hidden pb-[33px]">
                                            <div class="bonus-box relative flex w-full justify-center">
                                                <div style="width: calc(100% - 20px)"
                                                    class="absolute left-[10px] top-[5px] h-[200px] rounded-lg bg-success-200">
                                                </div>
                                                <div class="relative w-full rounded-lg bg-success-300 p-5">
                                                    <h3 class="text-center text-[28px] font-bold text-white">
                                                        60% Bonus
                                                    </h3>
                                                    <p
                                                        class="mb-3 px-5 text-center text-lg font-semibold leading-[24px] text-success-100">
                                                        Create an Account and Get Bonus
                                                    </p>
                                                    <div class="flex justify-center">
                                                        <a href="#">
                                                            <div
                                                                class="flex h-[56px] w-[166px] items-center justify-center rounded-lg bg-warning-300 transition duration-300 ease-in-out hover:bg-warning-200">
                                                                <span class="text-sm font-bold text-bgray-900">Discover
                                                                    More</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progess-bar mb-[13px] flex justify-center">
                                            <div class="bonus-per relative">
                                                <div class="bonus-outer">
                                                    <div class="bonus-inner">
                                                        <div class="number">
                                                            <span class="text-sm font-medium text-bgray-900">25%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="80px" height="80px">
                                                    <circle style="
                                stroke-dashoffset: calc(215 - 215 * (25 / 100));
                              " cx="40" cy="40" r="35" stroke-linecap="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="mb-2.5 text-center text-sm font-semibold text-success-300">
                                            Discover more
                                        </p>
                                        <div class="flex justify-center">
                                            <img src="{{asset('/images/avatar/members.png')}}" alt="members" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-wrapper">
                                <div onclick="profileAction()"
                                    class="profile-outside fixed -left-[43px] top-0 hidden h-full w-full"></div>
                                <div style="
                      filter: drop-shadow(12px 12px 40px rgba(0, 0, 0, 0.08));
                    " class="profile-box absolute right-0 top-[81px] hidden w-[300px] overflow-hidden rounded-lg bg-white dark:bg-darkblack-600">
                                    <div class="relative w-full px-3 py-2">
                                        <div>
                                            <ul>
                                                <li class="w-full">
                                                    <a href="settings.html">
                                                        <div
                                                            class="flex items-center space-x-[18px] rounded-lg p-[14px] text-bgray-600 hover:bg-bgray-100 hover:text-bgray-900 hover:dark:bg-darkblack-500">
                                                            <div class="w-[20px]">
                                                                <span>
                                                                    <svg class="stroke-bgray-900 dark:stroke-bgray-50"
                                                                        width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12.1197 12.7805C12.0497 12.7705 11.9597 12.7705 11.8797 12.7805C10.1197 12.7205 8.71973 11.2805 8.71973 9.51047C8.71973 7.70047 10.1797 6.23047 11.9997 6.23047C13.8097 6.23047 15.2797 7.70047 15.2797 9.51047C15.2697 11.2805 13.8797 12.7205 12.1197 12.7805Z"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M18.7398 19.3796C16.9598 21.0096 14.5998 21.9996 11.9998 21.9996C9.39977 21.9996 7.03977 21.0096 5.25977 19.3796C5.35977 18.4396 5.95977 17.5196 7.02977 16.7996C9.76977 14.9796 14.2498 14.9796 16.9698 16.7996C18.0398 17.5196 18.6398 18.4396 18.7398 19.3796Z"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="flex-1">
                                                                <span
                                                                    class="text-sm font-semibold text-bgray-900 dark:text-white">My
                                                                    Profile</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="w-full">
                                                    <a href="messages.html">
                                                        <div
                                                            class="flex items-center space-x-[18px] rounded-lg p-[14px] text-bgray-600 hover:bg-bgray-100 hover:text-bgray-900 dark:text-bgray-300 dark:hover:bg-darkblack-500">
                                                            <div class="w-[20px]">
                                                                <span>
                                                                    <svg class="stroke-bgray-900 dark:stroke-gray-300"
                                                                        width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M2 12V7C2 4.79086 3.79086 3 6 3H18C20.2091 3 22 4.79086 22 7V17C22 19.2091 20.2091 21 18 21H8M6 8L9.7812 10.5208C11.1248 11.4165 12.8752 11.4165 14.2188 10.5208L18 8M2 15H8M2 18H8"
                                                                            stroke-width="1.5" stroke-linecap="round" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="flex-1">
                                                                <span class="text-sm font-semibold">Inbox</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="w-full">
                                                    <form action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                                                            <div class="flex items-center space-x-[18px] rounded-lg p-[14px] text-success-300">
                                                                <div class="w-[20px]">
                                                                    <span>
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15 10L13.7071 11.2929C13.3166 11.6834 13.3166 12.3166 13.7071 12.7071L15 14M14 12L22 12M6 20C3.79086 20 2 18.2091 2 16V8C2 5.79086 3.79086 4 6 4M6 20C8.20914 20 10 18.2091 10 16V8C10 5.79086 8.20914 4 6 4M6 20H14C16.2091 20 18 18.2091 18 16M6 4H14C16.2091 4 18 5.79086 18 8"
                                                                                stroke="#22C55E" stroke-width="1.5" stroke-linecap="round" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="flex-1">
                                                                    <span class="text-sm font-semibold">Log Out</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </form>
                                                </li>
                                        </ul>
                                    </div>
                                    <div class="my-[14px] h-[1px] w-full bg-bgray-300"></div>
                                    <div>
                                        <ul>
                                            <li class="w-full">
                                                <a href="settings.html">
                                                    <div
                                                        class="rounded-lg p-[14px] text-bgray-600 hover:bg-bgray-100 hover:text-bgray-900 dark:text-bgray-50 dark:hover:bg-darkblack-500">
                                                        <span class="text-sm font-semibold">Settings</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="w-full">
                                                <a href="users.html">
                                                    <div
                                                        class="rounded-lg p-[14px] text-bgray-600 hover:bg-bgray-100 hover:text-bgray-900 dark:text-bgray-50 dark:hover:bg-darkblack-500">
                                                        <span class="text-sm font-semibold">Users</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </header>
            <header class="mobile-wrapper fixed z-20 block w-full md:hidden">
                <div class="flex h-[80px] w-full items-center justify-between bg-white dark:bg-darkblack-600">
                    <div class="flex h-full w-full items-center space-x-5">
                        <button type="button" class="drawer-btn rotate-180 transform">
                            <span>
                                <svg width="16" height="40" viewBox="0 0 16 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 10C0 4.47715 4.47715 0 10 0H16V40H10C4.47715 40 0 35.5228 0 30V10Z"
                                        fill="#F7F7F7" />
                                    <path d="M10 15L6 20.0049L10 25.0098" stroke="#A0AEC0" stroke-width="1.2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </button>
                        <div>
                            <a href="/">
                                <img src="{{asset('/images/logo/logo-color.svg')}}" class="block dark:hidden"
                                    alt="logo" />
                                <img src={{ asset("./assetsimages/logo/logo-white.svg") }} class="hidden dark:block"
                                    alt="logo" />
                            </a>
                        </div>
                    </div>
                    <div class="mr-2">
                        <div onclick="profileAction()" class="flex cursor-pointer space-x-0 lg:space-x-3">
                            <div class="h-[52px] w-[52px] overflow-hidden rounded-xl border border-bgray-300">
                                <img class="object-cover" src="{{asset('/images/avatar/profile-52x52.png')}}"
                                    alt="avater" />
                            </div>
                            <div class="hidden 2xl:block">
                                <div class="flex items-center space-x-2.5">
                                    <h3 class="text-base font-bold leading-[28px] text-bgray-900">
                                        John Doe
                                    </h3>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 10L12 14L17 10" stroke="#28303F" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <p class="text-sm font-medium leading-[20px] text-bgray-600">
                                    Super Admin
                                </p>
                            </div>
                        </div>

                        <div class="profile-wrapper">
                            <div onclick="profileAction()"
                                class="profile-outside fixed -left-[43px] top-0 hidden h-full w-full"></div>
                            <div style="
                      filter: drop-shadow(12px 12px 40px rgba(0, 0, 0, 0.08));
                    " class="profile-box absolute right-0 top-[81px] hidden w-[300px] overflow-hidden rounded-lg bg-white">
                                <div class="relative w-full px-3 py-2">
                                    <div>
                                        <ul>
                                            <li class="w-full">
                                                <a href="settings.html">
                                                    <div
                                                        class="flex items-center space-x-[18px] rounded-lg p-[14px] text-bgray-600 hover:bg-bgray-100 hover:text-bgray-900">
                                                        <div class="w-[20px]">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12.1197 12.7805C12.0497 12.7705 11.9597 12.7705 11.8797 12.7805C10.1197 12.7205 8.71973 11.2805 8.71973 9.51047C8.71973 7.70047 10.1797 6.23047 11.9997 6.23047C13.8097 6.23047 15.2797 7.70047 15.2797 9.51047C15.2697 11.2805 13.8797 12.7205 12.1197 12.7805Z"
                                                                        stroke="#111827" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M18.7398 19.3796C16.9598 21.0096 14.5998 21.9996 11.9998 21.9996C9.39977 21.9996 7.03977 21.0096 5.25977 19.3796C5.35977 18.4396 5.95977 17.5196 7.02977 16.7996C9.76977 14.9796 14.2498 14.9796 16.9698 16.7996C18.0398 17.5196 18.6398 18.4396 18.7398 19.3796Z"
                                                                        stroke="#111827" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                        stroke="#111827" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <span class="text-sm font-semibold">My Profile</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="w-full">
                                                <a href="messages.html">
                                                    <div
                                                        class="flex items-center space-x-[18px] rounded-lg p-[14px] text-bgray-600 hover:bg-bgray-100 hover:text-bgray-900">
                                                        <div class="w-[20px]">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M2 12V7C2 4.79086 3.79086 3 6 3H18C20.2091 3 22 4.79086 22 7V17C22 19.2091 20.2091 21 18 21H8M6 8L9.7812 10.5208C11.1248 11.4165 12.8752 11.4165 14.2188 10.5208L18 8M2 15H8M2 18H8"
                                                                        stroke="#2A313C" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <span class="text-sm font-semibold">Inbox</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#">
                                                    <div
                                                        class="flex items-center space-x-[18px] rounded-lg p-[14px] text-success-300">
                                                        <div class="w-[20px]">
                                                            <span>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M15 10L13.7071 11.2929C13.3166 11.6834 13.3166 12.3166 13.7071 12.7071L15 14M14 12L22 12M6 20C3.79086 20 2 18.2091 2 16V8C2 5.79086 3.79086 4 6 4M6 20C8.20914 20 10 18.2091 10 16V8C10 5.79086 8.20914 4 6 4M6 20H14C16.2091 20 18 18.2091 18 16M6 4H14C16.2091 4 18 5.79086 18 8"
                                                                        stroke="#22C55E" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <span class="text-sm font-semibold">Log Out</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="my-[14px] h-[1px] w-full bg-bgray-300"></div>
                                    <div>
                                        <ul>
                                            <li class="w-full">
                                                <a href="settings.html">
                                                    <div
                                                        class="rounded-lg p-[14px] text-bgray-600 hover:bg-bgray-100 hover:text-bgray-900">
                                                        <span class="text-sm font-semibold">Settings</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="w-full">
                                                <a href="users.html">
                                                    <div
                                                        class="rounded-lg p-[14px] text-bgray-600 hover:bg-bgray-100 hover:text-bgray-900">
                                                        <span class="text-sm font-semibold">Users</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-12 xl:pb-12">
                <!-- write your code here-->
                <div class="2xl:flex 2xl:space-x-[48px]">
                    <section class="mb-6 2xl:mb-0 2xl:flex-1">
                        <!-- total widget-->
                        <div class="mb-[24px] w-full">
                            <div class="grid grid-cols-1 gap-[24px] lg:grid-cols-3">
                                <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                                    <div class="mb-5 flex items-center justify-between">
                                        <div class="flex items-center space-x-[7px]">
                                            <div class="icon">
                                                <span>
                                                    <img src="{{asset('/images/icons/total-earn.svg')}}" alt="icon" />
                                                </span>
                                            </div>
                                            <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total
                                                Daycare</span>
                                        </div>
                                        <div>
                                            <img src="{{asset('/images/avatar/members-2.png')}}" alt="members" />
                                        </div>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="flex-1">
                                            <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                                $7,245.00
                                            </p>
                                            <div class="flex items-center space-x-1">
                                                <span>
                                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                                            fill="#22C55E" />
                                                        <path opacity="0.4"
                                                            d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                                            fill="#22C55E" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium text-success-300">
                                                    + 3.5%
                                                </span>
                                                <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                                    from last week
                                                </span>
                                            </div>
                                        </div>
                                        <div class="w-[106px]">
                                            <canvas id="totalEarn" height="68"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                                    <div class="mb-5 flex items-center justify-between">
                                        <div class="flex items-center space-x-[7px]">
                                            <div class="icon">
                                                <span>
                                                    <img src="{{asset('/images/icons/total-earn.svg') }}" alt="icon" />
                                                </span>
                                            </div>
                                            <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total
                                                Bimbel</span>
                                        </div>
                                        <div>
                                            <img src="{{asset('/images/avatar/members-2.png')}}" alt="members" />
                                        </div>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="flex-1">
                                            <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                                $7,245.00
                                            </p>
                                            <div class="flex items-center space-x-1">
                                                <span>
                                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                                            fill="#22C55E" />
                                                        <path opacity="0.4"
                                                            d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                                            fill="#22C55E" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium text-success-300">
                                                    + 3.5%
                                                </span>
                                                <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                                    from last week
                                                </span>
                                            </div>
                                        </div>
                                        <div class="w-[106px]">
                                            <canvas id="totalSpending" height="68"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                                    <div class="mb-5 flex items-center justify-between">
                                        <div class="flex items-center space-x-[7px]">
                                            <div class="icon">
                                                <span>
                                                    <img src="{{asset('/images/icons/total-earn.svg')}}" alt="icon" />
                                                </span>
                                            </div>
                                            <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total
                                                Bermain</span>
                                        </div>
                                        <div>
                                            <img src="{{asset('/images/avatar/members-2.png')}}" alt="members" />
                                        </div>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="flex-1">
                                            <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                                $7,245.00
                                            </p>
                                            <div class="flex items-center space-x-1">
                                                <span>
                                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                                            fill="#22C55E" />
                                                        <path opacity="0.4"
                                                            d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                                            fill="#22C55E" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium text-success-300">
                                                    + 3.5%
                                                </span>
                                                <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                                    from last week
                                                </span>
                                            </div>
                                        </div>
                                        <div class="w-[106px]">
                                            <canvas id="totalGoal" height="68"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                                    <div class="mb-5 flex items-center justify-between">
                                        <div class="flex items-center space-x-[7px]">
                                            <div class="icon">
                                                <span>
                                                    <img src="{{asset('/images/icons/total-earn.svg')}}" alt="icon" />
                                                </span>
                                            </div>
                                            <span class="text-lg font-semibold text-bgray-900 dark:text-white">Total Event
                                                </span>
                                        </div>
                                        <div>
                                            <img src="{{asset('/images/avatar/members-2.png')}}" alt="members" />
                                        </div>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="flex-1">
                                            <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                                $7,245.00
                                            </p>
                                            <div class="flex items-center space-x-1">
                                                <span>
                                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                                            fill="#22C55E" />
                                                        <path opacity="0.4"
                                                            d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                                            fill="#22C55E" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium text-success-300">
                                                    + 3.5%
                                                </span>
                                                <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                                    from last week
                                                </span>
                                            </div>
                                        </div>
                                        <div class="w-[106px]">
                                            <canvas id="totalGoal" height="68"></canvas>
                                        </div>
                                    </div>
                                </div>

                                <div class="rounded-lg bg-white p-5 dark:bg-darkblack-600">
                                    <div class="mb-5 flex items-center justify-between">
                                        <div class="flex items-center space-x-[7px]">
                                            <div class="icon">
                                                <span>
                                                    <img src="{{asset('/images/icons/total-earn.svg')}}" alt="icon" />
                                                </span>
                                            </div>
                                            <span class="text-lg font-semibold text-bgray-900 dark:text-white">Spending
                                                Goal</span>
                                        </div>
                                        <div>
                                            <img src="{{asset('/images/avatar/members-2.png')}}" alt="members" />
                                        </div>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <div class="flex-1">
                                            <p class="text-3xl font-bold leading-[48px] text-bgray-900 dark:text-white">
                                                $7,245.00
                                            </p>
                                            <div class="flex items-center space-x-1">
                                                <span>
                                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                                            fill="#22C55E" />
                                                        <path opacity="0.4"
                                                            d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                                            fill="#22C55E" />
                                                    </svg>
                                                </span>
                                                <span class="text-sm font-medium text-success-300">
                                                    + 3.5%
                                                </span>
                                                <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">
                                                    from last week
                                                </span>
                                            </div>
                                        </div>
                                        <div class="w-[106px]">
                                            <canvas id="totalGoal" height="68"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- revenue, flow -->
                        <div class="mb-[24px] w-full xl:flex xl:space-x-[24px]">
                            <div
                                class="flex w-full flex-col justify-between rounded-lg bg-white px-[24px] py-3 dark:bg-darkblack-600 xl:w-66">
                                <div
                                    class="mb-2 flex items-center justify-between border-b border-bgray-300 pb-2 dark:border-darkblack-400">
                                    <h3 class="text-xl font-bold text-bgray-900 dark:text-white sm:text-2xl">
                                        Revenue Flow
                                    </h3>
                                    <div class="hidden items-center space-x-[28px] sm:flex">
                                        <div class="flex items-center space-x-2">
                                            <div class="h-3 w-3 rounded-full bg-warning-300"></div>
                                            <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">Pending
                                            </span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <div class="h-3 w-3 rounded-full bg-success-300"></div>
                                            <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">Signed
                                            </span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <div class="h-3 w-3 rounded-full bg-orange"></div>
                                            <span class="text-sm font-medium text-bgray-700 dark:text-bgray-50">Lost
                                            </span>
                                        </div>
                                    </div>
                                    <div class="date-filter relative">
                                        <button onclick="dateFilterAction('#date-filter-body')" type="button"
                                            class="flex items-center space-x-1 overflow-hidden rounded-lg bg-bgray-100 px-3 py-2 dark:bg-darkblack-500 dark:text-white">
                                            <span class="text-sm font-medium text-bgray-900 dark:text-white">Jan 10 -
                                                Jan 16</span>
                                            <span>
                                                <svg class="stroke-bgray-900 dark:stroke-gray-50" width="16" height="17"
                                                    viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4 6.5L8 10.5L12 6.5" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </button>
                                        <div id="date-filter-body"
                                            class="absolute right-0 top-[44px] z-10 hidden overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                            <ul>
                                                <li onclick="dateFilterAction('#date-filter-body')"
                                                    class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                    Jan 10 - Jan 16
                                                </li>
                                                <li onclick="dateFilterAction('#date-filter-body')"
                                                    class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                    Jan 10 - Jan 16
                                                </li>
                                                <li onclick="dateFilterAction('#date-filter-body')"
                                                    class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                    Jan 10 - Jan 16
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <canvas id="revenueFlow" height="255"></canvas>
                                </div>
                            </div>
                            <div class="hidden flex-1 xl:block">
                                <div class="rounded-lg bg-white dark:bg-darkblack-600">
                                    <div
                                        class="flex items-center justify-between border-b border-bgray-300 px-[20px] py-[12px] dark:border-darkblack-400">
                                        <h3 class="text-xl font-bold text-bgray-900 dark:text-white">
                                            Efficiency
                                        </h3>
                                        <div class="date-filter relative">
                                            <button onclick="dateFilterAction('#month-filter')" type="button"
                                                class="flex items-center space-x-1">
                                                <span
                                                    class="text-base font-semibold text-bgray-900 dark:text-white">Monthly</span>
                                                <span>
                                                    <svg class="stroke-bgray-900 dark:stroke-bgray-50" width="16"
                                                        height="17" viewBox="0 0 16 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4 6.5L8 10.5L12 6.5" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </button>
                                            <div id="month-filter"
                                                class="absolute right-0 top-5 z-10 hidden overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                                <ul>
                                                    <li onclick="dateFilterAction('#month-filter')"
                                                        class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                        January
                                                    </li>
                                                    <li onclick="dateFilterAction('#month-filter')"
                                                        class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                        February
                                                    </li>

                                                    <li onclick="dateFilterAction('#month-filter')"
                                                        class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                        March
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-[20px] py-[12px]">
                                        <div class="mb-4 flex items-center space-x-8">
                                            <div class="relative w-[180px]">
                                                <canvas id="pie_chart" height="168"></canvas>
                                                <div class="absolute z-0 h-[34px] w-[34px] rounded-full bg-[#EDF2F7]"
                                                    style="
                                left: calc(50% - 17px);
                                top: calc(50% - 17px);
                              "></div>
                                            </div>
                                            <div class="counting">
                                                <div class="mb-6">
                                                    <div class="flex items-center space-x-[2px]">
                                                        <p class="text-lg font-bold text-success-300">
                                                            $5,230
                                                        </p>
                                                        <span><svg width="14" height="12" viewBox="0 0 14 12"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M10.7749 0.558058C10.5309 0.313981 10.1351 0.313981 9.89107 0.558058L7.39107 3.05806C7.14699 3.30214 7.14699 3.69786 7.39107 3.94194C7.63514 4.18602 8.03087 4.18602 8.27495 3.94194L9.70801 2.50888V11C9.70801 11.3452 9.98783 11.625 10.333 11.625C10.6782 11.625 10.958 11.3452 10.958 11V2.50888L12.3911 3.94194C12.6351 4.18602 13.0309 4.18602 13.2749 3.94194C13.519 3.69786 13.519 3.30214 13.2749 3.05806L10.7749 0.558058Z"
                                                                    fill="#22C55E" />
                                                                <path opacity="0.4" fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M3.22407 11.4419C3.46815 11.686 3.86388 11.686 4.10796 11.4419L6.60796 8.94194C6.85203 8.69786 6.85203 8.30214 6.60796 8.05806C6.36388 7.81398 5.96815 7.81398 5.72407 8.05806L4.29102 9.49112L4.29101 1C4.29101 0.654823 4.01119 0.375001 3.66602 0.375001C3.32084 0.375001 3.04102 0.654823 3.04102 1L3.04102 9.49112L1.60796 8.05806C1.36388 7.81398 0.968151 7.81398 0.724074 8.05806C0.479996 8.30214 0.479996 8.69786 0.724074 8.94194L3.22407 11.4419Z"
                                                                    fill="#22C55E" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <p class="text-base font-medium text-bgray-600">
                                                        Arrival
                                                    </p>
                                                </div>
                                                <div>
                                                    <div class="flex items-center space-x-[2px]">
                                                        <p class="text-lg font-bold text-bgray-900 dark:text-white">
                                                            $6,230
                                                        </p>
                                                        <span>
                                                            <svg class="fill-bgray-900 dark:fill-bgray-50" width="14"
                                                                height="12" viewBox="0 0 14 12" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M10.7749 0.558058C10.5309 0.313981 10.1351 0.313981 9.89107 0.558058L7.39107 3.05806C7.14699 3.30214 7.14699 3.69786 7.39107 3.94194C7.63514 4.18602 8.03087 4.18602 8.27495 3.94194L9.70801 2.50888V11C9.70801 11.3452 9.98783 11.625 10.333 11.625C10.6782 11.625 10.958 11.3452 10.958 11V2.50888L12.3911 3.94194C12.6351 4.18602 13.0309 4.18602 13.2749 3.94194C13.519 3.69786 13.519 3.30214 13.2749 3.05806L10.7749 0.558058Z" />
                                                                <path opacity="0.4" fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M3.22407 11.4419C3.46815 11.686 3.86388 11.686 4.10796 11.4419L6.60796 8.94194C6.85203 8.69786 6.85203 8.30214 6.60796 8.05806C6.36388 7.81398 5.96815 7.81398 5.72407 8.05806L4.29102 9.49112L4.29101 1C4.29101 0.654823 4.01119 0.375001 3.66602 0.375001C3.32084 0.375001 3.04102 0.654823 3.04102 1L3.04102 9.49112L1.60796 8.05806C1.36388 7.81398 0.968151 7.81398 0.724074 8.05806C0.479996 8.30214 0.479996 8.69786 0.724074 8.94194L3.22407 11.4419Z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <p class="text-base font-medium text-bgray-600 dark:text-bgray-50">
                                                        Spending
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="status">
                                            <div class="mb-1.5 flex items-center justify-between">
                                                <div class="flex items-center space-x-3">
                                                    <div class="h-2.5 w-2.5 rounded-full bg-success-300"></div>
                                                    <span
                                                        class="text-sm font-medium text-bgray-600 dark:text-bgray-50">Goal</span>
                                                </div>
                                                <p class="text-sm font-bold text-bgray-900 dark:text-bgray-50">
                                                    13%
                                                </p>
                                            </div>
                                            <div class="mb-1.5 flex items-center justify-between">
                                                <div class="flex items-center space-x-3">
                                                    <div class="h-2.5 w-2.5 rounded-full bg-warning-300"></div>
                                                    <span
                                                        class="text-sm font-medium text-bgray-600 dark:text-white">Spending</span>
                                                </div>
                                                <p class="text-sm font-bold text-bgray-900 dark:text-bgray-50">
                                                    28%
                                                </p>
                                            </div>
                                            <div class="mb-1.5 flex items-center justify-between">
                                                <div class="flex items-center space-x-3">
                                                    <div class="h-2.5 w-2.5 rounded-full bg-bgray-200"></div>
                                                    <span
                                                        class="text-sm font-medium text-bgray-600 dark:text-white">Others</span>
                                                </div>
                                                <p class="text-sm font-bold text-bgray-900 dark:text-bgray-50">
                                                    59%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--list table-->
                        <div class="w-full rounded-lg bg-white px-[24px] py-[20px] dark:bg-darkblack-600">
                            <div class="flex flex-col space-y-5">
                                <div class="flex h-[56px] w-full space-x-4">
                                    <div
                                        class="hidden h-full rounded-lg border border-transparent bg-bgray-100 px-[18px] focus-within:border-success-300 dark:bg-darkblack-500 sm:block sm:w-70 lg:w-88">
                                        <div class="flex h-full w-full items-center space-x-[15px]">
                                            <span>
                                                <svg class="stroke-bgray-900 dark:stroke-white" width="21" height="22"
                                                    viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9.80204" cy="10.6761" r="8.98856" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M16.0537 17.3945L19.5777 20.9094" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            <label for="listSearch" class="w-full">
                                                <input type="text" id="listSearch"
                                                    placeholder="Search by name, email, or others..."
                                                    class="search-input w-full border-none bg-bgray-100 px-0 text-sm tracking-wide text-bgray-600 placeholder:text-sm placeholder:font-medium placeholder:text-bgray-500 focus:outline-none focus:ring-0 dark:bg-darkblack-500" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="relative h-full flex-1">
                                        <button onclick="dateFilterAction('#table-filter')" type="button"
                                            class="flex h-full w-full items-center justify-center rounded-lg border border-bgray-300 bg-bgray-100 dark:border-darkblack-500 dark:bg-darkblack-500">
                                            <div class="flex items-center space-x-3">
                                                <span>
                                                    <svg class="stroke-bgray-900 dark:stroke-success-400" width="18"
                                                        height="17" viewBox="0 0 18 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.55169 13.5022H1.25098" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M10.3623 3.80984H16.663" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.94797 3.75568C5.94797 2.46002 4.88981 1.40942 3.58482 1.40942C2.27984 1.40942 1.22168 2.46002 1.22168 3.75568C1.22168 5.05133 2.27984 6.10193 3.58482 6.10193C4.88981 6.10193 5.94797 5.05133 5.94797 3.75568Z"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M17.2214 13.4632C17.2214 12.1675 16.1641 11.1169 14.8591 11.1169C13.5533 11.1169 12.4951 12.1675 12.4951 13.4632C12.4951 14.7589 13.5533 15.8095 14.8591 15.8095C16.1641 15.8095 17.2214 14.7589 17.2214 13.4632Z"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                <span class="text-base font-medium text-success-300">Filters</span>
                                            </div>
                                        </button>
                                        <div id="table-filter"
                                            class="absolute right-0 top-[60px] z-10 hidden w-full overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                            <ul>
                                                <li onclick="dateFilterAction('#table-filter')"
                                                    class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                    January
                                                </li>
                                                <li onclick="dateFilterAction('#table-filter')"
                                                    class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                    February
                                                </li>

                                                <li onclick="dateFilterAction('#table-filter')"
                                                    class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                    March
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-content w-full">
                                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-4">
                                        <div class="w-full">
                                            <p
                                                class="mb-2 text-base font-bold leading-[24px] text-bgray-900 dark:text-white">
                                                Location
                                            </p>
                                            <div class="relative h-[56px] w-full">
                                                <button onclick="dateFilterAction('#province-filter')" type="button"
                                                    class="relative flex h-full w-full items-center justify-between rounded-lg bg-bgray-100 px-4 dark:bg-darkblack-500">
                                                    <span class="text-base text-bgray-500">State or province</span>
                                                    <span>
                                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.58203 8.3186L10.582 13.3186L15.582 8.3186"
                                                                stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div id="province-filter"
                                                    class="absolute right-0 top-14 z-10 hidden w-full overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                                    <ul>
                                                        <li onclick="dateFilterAction('#province-filter')"
                                                            class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            January
                                                        </li>
                                                        <li onclick="dateFilterAction('#province-filter')"
                                                            class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            February
                                                        </li>

                                                        <li onclick="dateFilterAction('#province-filter')"
                                                            class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            March
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <p
                                                class="mb-2 text-base font-bold leading-[24px] text-bgray-900 dark:text-white">
                                                Amount Spent
                                            </p>
                                            <div class="relative h-[56px] w-full">
                                                <button onclick="dateFilterAction('#amount-filter')" type="button"
                                                    class="relative flex h-full w-full items-center justify-between rounded-lg bg-bgray-100 px-4 dark:bg-darkblack-500">
                                                    <span class="text-base text-bgray-500">State or province</span>
                                                    <span>
                                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.58203 8.3186L10.582 13.3186L15.582 8.3186"
                                                                stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div id="amount-filter"
                                                    class="absolute right-0 top-14 z-10 hidden w-full overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                                    <ul>
                                                        <li onclick="dateFilterAction('#amount-filter')"
                                                            class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            January
                                                        </li>
                                                        <li onclick="dateFilterAction('#amount-filter')"
                                                            class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            February
                                                        </li>

                                                        <li onclick="dateFilterAction('#amount-filter')"
                                                            class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            March
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <p
                                                class="mb-2 text-base font-bold leading-[24px] text-bgray-900 dark:text-white">
                                                Transaction list Date
                                            </p>
                                            <div class="relative h-[56px] w-full">
                                                <button onclick="dateFilterAction('#date-filter-table')" type="button"
                                                    class="relative flex h-full w-full items-center justify-between rounded-lg bg-bgray-100 px-4 dark:bg-darkblack-500">
                                                    <span class="text-base text-bgray-500">State or province</span>
                                                    <span>
                                                        <svg class="stroke-bgray-500 dark:stroke-white" width="25"
                                                            height="25" viewBox="0 0 25 25" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M18.6758 5.8186H6.67578C5.57121 5.8186 4.67578 6.71403 4.67578 7.8186V19.8186C4.67578 20.9232 5.57121 21.8186 6.67578 21.8186H18.6758C19.7804 21.8186 20.6758 20.9232 20.6758 19.8186V7.8186C20.6758 6.71403 19.7804 5.8186 18.6758 5.8186Z"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M16.6758 3.8186V7.8186" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M8.67578 3.8186V7.8186" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M4.67578 11.8186H20.6758" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11.6758 15.8186H12.6758" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M12.6758 15.8186V18.8186" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div id="date-filter-table"
                                                    class="absolute right-0 top-14 z-10 hidden w-full overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                                    <ul>
                                                        <li onclick="dateFilterAction('#amount-filter')"
                                                            class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            January
                                                        </li>
                                                        <li onclick="dateFilterAction('#amount-filter')"
                                                            class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            February
                                                        </li>

                                                        <li onclick="dateFilterAction('#amount-filter')"
                                                            class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            March
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <p
                                                class="mb-2 text-base font-bold leading-[24px] text-bgray-900 dark:text-white">
                                                Type of transaction
                                            </p>
                                            <div class="relative h-[56px] w-full">
                                                <button onclick="dateFilterAction('#trans-filter-tb')" type="button"
                                                    class="relative flex h-full w-full items-center justify-between rounded-lg bg-bgray-100 px-4 dark:bg-darkblack-500">
                                                    <span class="text-base text-bgray-500">State or province</span>
                                                    <span>
                                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.58203 8.3186L10.582 13.3186L15.582 8.3186"
                                                                stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div id="trans-filter-tb"
                                                    class="absolute right-0 top-14 z-10 hidden w-full overflow-hidden rounded-lg bg-white shadow-lg dark:bg-darkblack-500">
                                                    <ul>
                                                        <li onclick="dateFilterAction('#trans-filter-tb')"
                                                            class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-semibold hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            January
                                                        </li>
                                                        <li onclick="dateFilterAction('#trans-filter-tb')"
                                                            class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            February
                                                        </li>

                                                        <li onclick="dateFilterAction('#trans-filter-tb')"
                                                            class="cursor-pointer px-5 py-2 text-sm font-semibold text-bgray-900 hover:bg-bgray-100 dark:text-white hover:dark:bg-darkblack-600">
                                                            March
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-content w-full overflow-x-auto">
                                    <table class="w-full">
                                        <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                            <td class="">
                                                <label class="text-center">
                                                    <input type="checkbox"
                                                        class="h-5 w-5 cursor-pointer rounded-full border border-bgray-400 bg-transparent text-success-300 focus:outline-none focus:ring-0" />
                                                </label>
                                            </td>
                                            <td class="inline-block w-[250px] px-6 py-5 lg:w-auto xl:px-0">
                                                <div class="flex w-full items-center space-x-2.5">
                                                    <span
                                                        class="text-base font-medium text-bgray-600 dark:text-bgray-50">
                                                        Customer name</span>
                                                    <span>
                                                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.332 1.31567V13.3157" stroke="#718096"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                                                stroke="#718096" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M3.66602 13.3157V1.31567" stroke="#718096"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                                                stroke="#718096" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <div class="flex w-full items-center space-x-2.5">
                                                    <span
                                                        class="text-base font-medium text-bgray-600 dark:text-bgray-50">Email</span>
                                                    <span>
                                                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.332 1.31567V13.3157" stroke="#718096"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                                                stroke="#718096" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M3.66602 13.3157V1.31567" stroke="#718096"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                                                stroke="#718096" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <div class="flex items-center space-x-2.5">
                                                    <span
                                                        class="text-base font-medium text-bgray-600 dark:text-bgray-50">
                                                        Location</span>
                                                    <span>
                                                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.332 1.31567V13.3157" stroke="#718096"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                                                stroke="#718096" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M3.66602 13.3157V1.31567" stroke="#718096"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                                                stroke="#718096" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="w-[165px] px-6 py-5 xl:px-0">
                                                <div class="flex w-full items-center space-x-2.5">
                                                    <span
                                                        class="text-base font-medium text-bgray-600 dark:text-bgray-50">Spent</span>
                                                    <span>
                                                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.332 1.31567V13.3157" stroke="#718096"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                                                stroke="#718096" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M3.66602 13.3157V1.31567" stroke="#718096"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                                                stroke="#718096" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0"></td>
                                        </tr>
                                        <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                            <td class="">
                                                <label class="text-center">
                                                    <input type="checkbox"
                                                        class="h-5 w-5 cursor-pointer rounded-full border border-bgray-400 bg-transparent text-success-300 focus:outline-none focus:ring-0" />
                                                </label>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <div class="flex w-full items-center space-x-2.5">
                                                    <div class="h-10 w-10 overflow-hidden rounded-full">
                                                        <img src="{{asset('/images/avatar/user-40x40.png')}}"
                                                            alt="avatar" class="h-full w-full object-cover" />
                                                    </div>
                                                    <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                                        Devon Lane
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <p class="text-base font-medium text-bgray-900 dark:text-white">
                                                    devon@mail.com
                                                </p>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <p class="text-base font-medium text-bgray-900 dark:text-white">
                                                    Philadelphia, USA
                                                </p>
                                            </td>
                                            <td class="w-[165px] px-6 py-5 xl:px-0">
                                                <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                                    $101.00
                                                </p>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <div class="flex justify-center">
                                                    <button type="button">
                                                        <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 2.00024C8 2.55253 8.44772 3.00024 9 3.00024C9.55228 3.00024 10 2.55253 10 2.00024C10 1.44796 9.55228 1.00024 9 1.00024C8.44772 1.00024 8 1.44796 8 2.00024Z"
                                                                stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M1 2.00024C1 2.55253 1.44772 3.00024 2 3.00024C2.55228 3.00024 3 2.55253 3 2.00024C3 1.44796 2.55228 1.00024 2 1.00024C1.44772 1.00024 1 1.44796 1 2.00024Z"
                                                                stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M15 2.00024C15 2.55253 15.4477 3.00024 16 3.00024C16.5523 3.00024 17 2.55253 17 2.00024C17 1.44796 16.5523 1.00024 16 1.00024C15.4477 1.00024 15 1.44796 15 2.00024Z"
                                                                 stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                            <td class="">
                                                <label class="text-center">
                                                    <input type="checkbox"
                                                        class="h-5 w-5 cursor-pointer rounded-full border border-bgray-400 bg-transparent text-success-300 focus:outline-none focus:ring-0" />
                                                </label>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <div class="flex w-full items-center space-x-2.5">
                                                    <div class="h-10 w-10 overflow-hidden rounded-full">
                                                        <img src="{{asset('/images/avatar/user-40x40.png')}}"
                                                            alt="avatar" class="h-full w-full object-cover" />
                                                    </div>
                                                    <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                                        Bessie Cooper
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <p class="text-base font-medium text-bgray-900 dark:text-white">
                                                    devon@mail.com
                                                </p>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <p class="text-base font-medium text-bgray-900 dark:text-white">
                                                    Philadelphia, USA
                                                </p>
                                            </td>
                                            <td class="w-[165px] px-6 py-5 xl:px-0">
                                                <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                                    $101.00
                                                </p>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <div class="flex justify-center">
                                                    <button type="button">
                                                        <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 2.00024C8 2.55253 8.44772 3.00024 9 3.00024C9.55228 3.00024 10 2.55253 10 2.00024C10 1.44796 9.55228 1.00024 9 1.00024C8.44772 1.00024 8 1.44796 8 2.00024Z"
                                                                stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M1 2.00024C1 2.55253 1.44772 3.00024 2 3.00024C2.55228 3.00024 3 2.55253 3 2.00024C3 1.44796 2.55228 1.00024 2 1.00024C1.44772 1.00024 1 1.44796 1 2.00024Z"
                                                                stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M15 2.00024C15 2.55253 15.4477 3.00024 16 3.00024C16.5523 3.00024 17 2.55253 17 2.00024C17 1.44796 16.5523 1.00024 16 1.00024C15.4477 1.00024 15 1.44796 15 2.00024Z"
                                                                stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b border-bgray-300 dark:border-darkblack-400">
                                            <td class="">
                                                <label class="text-center">
                                                    <input type="checkbox"
                                                        class="h-5 w-5 cursor-pointer rounded-full border border-bgray-400 bg-transparent text-success-300 focus:outline-none focus:ring-0" />
                                                </label>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <div class="flex w-full items-center space-x-2.5">
                                                    <div class="h-10 w-10 overflow-hidden rounded-full">
                                                        <img src="{{asset('/images/avatar/user-40x40.png')}}"
                                                            alt="avatar" class="h-full w-full object-cover" />
                                                    </div>
                                                    <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                                        Dianne Russell
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <p class="text-base font-medium text-bgray-900 dark:text-white">
                                                    devon@mail.com
                                                </p>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <p class="text-base font-medium text-bgray-900 dark:text-white">
                                                    Philadelphia, USA
                                                </p>
                                            </td>
                                            <td class="w-[165px] px-6 py-5 xl:px-0">
                                                <p class="text-base font-semibold text-bgray-900 dark:text-white">
                                                    $101.00
                                                </p>
                                            </td>
                                            <td class="px-6 py-5 xl:px-0">
                                                <div class="flex justify-center">
                                                    <button type="button">
                                                        <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 2.00024C8 2.55253 8.44772 3.00024 9 3.00024C9.55228 3.00024 10 2.55253 10 2.00024C10 1.44796 9.55228 1.00024 9 1.00024C8.44772 1.00024 8 1.44796 8 2.00024Z"
                                                                stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M1 2.00024C1 2.55253 1.44772 3.00024 2 3.00024C2.55228 3.00024 3 2.55253 3 2.00024C3 1.44796 2.55228 1.00024 2 1.00024C1.44772 1.00024 1 1.44796 1 2.00024Z"
                                                                stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path
                                                                d="M15 2.00024C15 2.55253 15.4477 3.00024 16 3.00024C16.5523 3.00024 17 2.55253 17 2.00024C17 1.44796 16.5523 1.00024 16 1.00024C15.4477 1.00024 15 1.44796 15 2.00024Z"
                                                                stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="pagination-content w-full">
                                    <div class="flex w-full items-center justify-center lg:justify-between">
                                        <div class="hidden items-center space-x-4 lg:flex">
                                            <span class="text-sm font-semibold text-bgray-600 dark:text-bgray-50">Show
                                                result:</span>
                                            <div class="relative">
                                                <button onclick="dateFilterAction('#result-filter')" type="button"
                                                    class="flex items-center space-x-6 rounded-lg border border-bgray-300 px-2.5 py-[14px] dark:border-darkblack-400">
                                                    <span
                                                        class="text-sm font-semibold text-bgray-900 dark:text-bgray-50">3</span>
                                                    <span>
                                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.03516 6.03271L8.03516 10.0327L12.0352 6.03271"
                                                                stroke="#A0AEC0" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <div id="result-filter"
                                                    class="absolute right-0 top-14 z-10 hidden w-full overflow-hidden rounded-lg bg-white shadow-lg">
                                                    <ul>
                                                        <li onclick="dateFilterAction('#result-filter')"
                                                            class="text-bgray-90 cursor-pointer px-5 py-2 text-sm font-medium hover:bg-bgray-100">
                                                            1
                                                        </li>
                                                        <li onclick="dateFilterAction('#result-filter')"
                                                            class="cursor-pointer px-5 py-2 text-sm font-medium text-bgray-900 hover:bg-bgray-100">
                                                            2
                                                        </li>

                                                        <li onclick="dateFilterAction('#result-filter')"
                                                            class="cursor-pointer px-5 py-2 text-sm font-medium text-bgray-900 hover:bg-bgray-100">
                                                            3
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-5 sm:space-x-[35px]">
                                            <button type="button">
                                                <span>
                                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.7217 5.03271L7.72168 10.0327L12.7217 15.0327"
                                                            stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="flex items-center">
                                                <button type="button"
                                                    class="rounded-lg bg-success-50 px-4 py-1.5 text-xs font-bold text-success-300 dark:bg-darkblack-500 dark:text-bgray-50 lg:px-6 lg:py-2.5 lg:text-sm">
                                                    1
                                                </button>
                                                <button type="button"
                                                    class="rounded-lg px-4 py-1.5 text-xs font-bold text-bgray-500 transition duration-300 ease-in-out hover:bg-success-50 hover:text-success-300 dark:hover:bg-darkblack-500 lg:px-6 lg:py-2.5 lg:text-sm">
                                                    2
                                                </button>

                                                <span class="text-sm text-bgray-500">. . . .</span>
                                                <button type="button"
                                                    class="rounded-lg px-4 py-1.5 text-xs font-bold text-bgray-500 transition duration-300 ease-in-out hover:bg-success-50 hover:text-success-300 dark:hover:bg-darkblack-500 lg:px-6 lg:py-2.5 lg:text-sm">
                                                    20
                                                </button>
                                            </div>
                                            <button type="button">
                                                <span>
                                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.72168 5.03271L12.7217 10.0327L7.72168 15.0327"
                                                            stroke="#A0AEC0" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

            </div>
            <!-- write your code here-->
          </main>
        </div>
      </div>
    </div>

    <!-- layout end -->
    <!--scripts -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script>
  AOS.init();
</script>
<script src="{{ asset('js/quill.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/chart.js') }}"></script>
    <script>
      $(".card-slider").slick({
        dots: true,
        infinite: true,
        autoplay: true,
        speed: 500,
        fade: true,
        cssEase: "linear",
        arrows: false,
      });
      function totalEarn() {
        const ctx_bids = document.getElementById("totalEarn").getContext("2d");
        const bitsMonth = [
          "Jan",
          "Feb",
          "Mar",
          "Afril",
          "May",
          "Jan",
          "Feb",
          "Mar",
          "Afril",
          "May",
          "Feb",
          "Mar",
          "Afril",
          "May",
        ];
        const bitsData = [
          0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
        ];
        const totalEarn = new Chart(ctx_bids, {
          type: "line",
          data: {
            labels: bitsMonth,
            datasets: [
              {
                label: "Visitor",
                data: bitsData,
                backgroundColor: () => {
                  const chart = document
                    .getElementById("totalEarn")
                    .getContext("2d");
                  const gradient = chart.createLinearGradient(0, 0, 0, 450);
                  gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                  gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");

                  return gradient;
                },
                borderColor: "#22C55E",
                pointRadius: 0,
                pointBackgroundColor: "#fff",
                pointBorderColor: "#22C55E",
                borderWidth: 1,
                fill: true,
                fillColor: "#fff",
                tension: 0.4,
              },
            ],
          },
          options: {
            layout: {
              padding: {
                bottom: -20,
              },
            },
            maintainAspectRatio: false,
            responsive: true,
            scales: {
              x: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
              y: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            },

            plugins: {
              legend: {
                position: "top",
                display: false,
              },
              title: {
                display: false,
                text: "Visitor: 2k",
              },
              tooltip: {
                enabled: false,
              },
            },
          },
        });
      }
      totalEarn();
      function totalSpendingChart() {
        let ctx_bids = document
          .getElementById("totalSpending")
          .getContext("2d");
        let bitsMonth = [
          "Jan",
          "Feb",
          "Mar",
          "Afril",
          "May",
          "Jan",
          "Feb",
          "Mar",
          "Afril",
          "May",
          "Feb",
          "Mar",
          "Afril",
          "May",
        ];
        let bitsData = [
          0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
        ];
        let totalEarn = new Chart(ctx_bids, {
          type: "line",
          data: {
            labels: bitsMonth,
            datasets: [
              {
                label: "Visitor",
                data: bitsData,
                backgroundColor: () => {
                  const chart = document
                    .getElementById("totalEarn")
                    .getContext("2d");
                  const gradient = chart.createLinearGradient(0, 0, 0, 450);
                  gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                  gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");

                  return gradient;
                },
                borderColor: "#22C55E",
                pointRadius: 0,
                pointBackgroundColor: "#fff",
                pointBorderColor: "#22C55E",
                borderWidth: 1,
                fill: true,
                fillColor: "#fff",
                tension: 0.4,
              },
            ],
          },
          options: {
            layout: {
              padding: {
                bottom: -20,
              },
            },
            maintainAspectRatio: false,
            responsive: true,
            scales: {
              x: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
              y: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            },

            plugins: {
              legend: {
                position: "top",
                display: false,
              },
              title: {
                display: false,
                text: "Visitor: 2k",
              },
              tooltip: {
                enabled: false,
              },
            },
          },
        });
      }
      totalSpendingChart();
      function totalGoal() {
        let ctx_bids = document.getElementById("totalGoal").getContext("2d");
        let bitsMonth = [
          "Jan",
          "Feb",
          "Mar",
          "Afril",
          "May",
          "Jan",
          "Feb",
          "Mar",
          "Afril",
          "May",
          "Feb",
          "Mar",
          "Afril",
          "May",
        ];
        let bitsData = [
          0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
        ];
        let totalEarn = new Chart(ctx_bids, {
          type: "line",
          data: {
            labels: bitsMonth,
            datasets: [
              {
                label: "Visitor",
                data: bitsData,
                backgroundColor: () => {
                  const chart = document
                    .getElementById("totalGoal")
                    .getContext("2d");
                  const gradient = chart.createLinearGradient(0, 0, 0, 450);
                  gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                  gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");
                  console.log({ gradient });
                  return gradient;
                },
                borderColor: "#22C55E",
                pointRadius: 0,
                pointBackgroundColor: "#fff",
                pointBorderColor: "#22C55E",
                borderWidth: 1,
                fill: true,
                fillColor: "#fff",
                tension: 0.4,
              },
            ],
          },
          options: {
            layout: {
              padding: {
                bottom: -20,
              },
            },
            maintainAspectRatio: false,
            responsive: true,
            scales: {
              x: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
              y: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            },

            plugins: {
              legend: {
                position: "top",
                display: false,
              },
              title: {
                display: false,
                text: "Visitor: 2k",
              },
              tooltip: {
                enabled: false,
              },
            },
          },
        });
      }
      totalGoal();

      let revenueFlowElement = document
        .getElementById("revenueFlow")
        .getContext("2d");
      let month = [
        "Jan",
        "Feb",
        "Mar",
        "April",
        "May",
        "Jun",
        "July",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ];
      let dataSetsLight = [
        {
          label: "My First Dataset",
          data: [1, 5, 2, 2, 6, 7, 8, 7, 3, 4, 1, 3],
          backgroundColor: [
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(250, 204, 21, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
          ],
          borderWidth: 0,
          borderRadius: 5,
        },
        {
          label: "My First Dataset 2",
          data: [5, 2, 4, 2, 5, 8, 3, 7, 3, 4, 1, 3],
          backgroundColor: [
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(255, 120, 75, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
          ],
          borderWidth: 0,
          borderRadius: 5,
        },
        {
          label: "My First Dataset 3",
          data: [2, 5, 3, 2, 5, 6, 9, 7, 3, 4, 1, 3],
          backgroundColor: [
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(74, 222, 128, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
            "rgba(237, 242, 247, 1)",
          ],
          borderWidth: 0,
          borderRadius: 5,
        },
      ];
      let dataSetsDark = [
        {
          label: "My First Dataset",
          data: [1, 5, 2, 2, 6, 7, 8, 7, 3, 4, 1, 3],
          backgroundColor: [
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(250, 204, 21, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
          ],
          borderWidth: 0,
          borderRadius: 5,
        },
        {
          label: "My First Dataset 2",
          data: [5, 2, 4, 2, 5, 8, 3, 7, 3, 4, 1, 3],
          backgroundColor: [
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(255, 120, 75, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
          ],
          borderWidth: 0,
          borderRadius: 5,
        },
        {
          label: "My First Dataset 3",
          data: [2, 5, 3, 2, 5, 6, 9, 7, 3, 4, 1, 3],
          backgroundColor: [
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(74, 222, 128, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
            "rgba(42, 49, 60, 1)",
          ],
          borderWidth: 0,
          borderRadius: 5,
        },
      ];
      let revenueFlow = new Chart(revenueFlowElement, {
        type: "bar",
        data: {
          labels: month,
          datasets: dataSetsLight,
        },
        options: {
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true,
              grid: {
                color: "rgb(243 ,246, 255 ,1)",
              },
              gridLines: {
                zeroLineColor: "transparent",
              },
              ticks: {
                callback(value) {
                  return `${value}% `;
                },
              },
            },
            x: {
              grid: {
                color: "rgb(243 ,246, 255 ,1)",
              },
              gridLines: {
                zeroLineColor: "transparent",
              },
            },
          },
          plugins: {
            legend: {
              display: false,
            },
          },
          x: {
            stacked: true,
          },
          y: {
            stacked: true,
          },
        },
      });
      //pie chart
      let pieChart = document.getElementById("pie_chart").getContext("2d");

      const data = {
        labels: [10, 20, 30],
        datasets: [
          {
            label: "My First Dataset",
            data: [15, 20, 35, 40],
            backgroundColor: ["#1A202C", "#61C660", "#F8CC4B", "#EDF2F7"],
            borderColor: ["#ffffff", "#ffffff", "#ffffff", "#1A202C"],
            hoverOffset: 18,
            borderWidth: 0,
          },
        ],
      };
      const customDatalabels = {
        id: "customDatalabels",
        afterDatasetsDraw(chart, args, pluginOptions) {
          const {
            ctx,
            data,
            chartArea: { top, bottom, left, right, width, height },
          } = chart;
          ctx.save();
          data.datasets[0].data.forEach((datapoint, index) => {
            const { x, y } = chart
              .getDatasetMeta(0)
              .data[index].tooltipPosition();
            ctx.font = "bold 12px sans-serif";
            ctx.fillStyle = data.datasets[0].borderColor[index];
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
            ctx.fillText(`${datapoint}%`, x, y);
          });
        },
      };
      const config = {
        type: "doughnut",
        data,
        options: {
          maintainAspectRatio: false,
          layout: {
            padding: {
              left: 10,
              right: 10,
              top: 10,
              bottom: 10,
            },
          },
          plugins: {
            legend: {
              display: false,
            },
          },
        },
        plugins: [customDatalabels],
      };

      let pieChartConfiig = new Chart(pieChart, config);

      //chart dark mode
      let themeToggleSwitch = document.getElementById("theme-toggle");

      //onclick

      if (themeToggleSwitch) {
        themeToggleSwitch.addEventListener("click", function () {
          if (
            document.documentElement.classList[0] === "dark" ||
            localStorage.theme === "dark"
          ) {
            revenueFlow.data.datasets = dataSetsDark;
            revenueFlow.options.scales.y.ticks.color = "white";
            revenueFlow.options.scales.x.ticks.color = "white";
            revenueFlow.options.scales.x.grid.color = "#222429";
            revenueFlow.options.scales.y.grid.color = "#222429";
            revenueFlow.update();
          } else {
            revenueFlow.data.datasets = dataSetsLight;
            revenueFlow.options.scales.y.ticks.color = "black";
            revenueFlow.options.scales.x.ticks.color = "black";
            revenueFlow.options.scales.x.grid.color = "rgb(243 ,246, 255 ,1)";
            revenueFlow.options.scales.y.grid.color = "rgb(243 ,246, 255 ,1)";
            revenueFlow.update();
          }
        });
      }

      //initial load
      if (
        localStorage.theme === "dark" ||
        window.matchMedia("(prefers-color-scheme: dark)").matches
      ) {
        revenueFlow.data.datasets = dataSetsDark;
        revenueFlow.options.scales.y.ticks.color = "white";
        revenueFlow.options.scales.x.ticks.color = "white";
        revenueFlow.options.scales.x.grid.color = "#222429";
        revenueFlow.options.scales.y.grid.color = "#222429";
      } else {
        revenueFlow.data.datasets = dataSetsLight;
        revenueFlow.options.scales.y.ticks.color = "black";
        revenueFlow.options.scales.x.ticks.color = "black";
        revenueFlow.options.scales.x.grid.color = "rgb(243 ,246, 255 ,1)";
        revenueFlow.options.scales.y.grid.color = "rgb(243 ,246, 255 ,1)";
      }
      revenueFlow.update();
    </script>
  </body>
</html>
