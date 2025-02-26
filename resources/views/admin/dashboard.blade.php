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
                                                    class="item-text text-lg font-medium leading-none">Dashboard</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>

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
                                        </li>
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
                                                    <form action="{{ route('admin.logout') }}" method="POST">
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
<script src="{{ asset('js/dashboard-admin.js') }}"></script>
  </body>
</html>
