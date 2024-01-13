<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from "vue";

const sideBar = ref(true);

</script>

<template>
    <Head title="Super-Admin Dashboard" />



    <div class="w-full bg-gradient-to-t from-[#0c101c] to-[#000611]">

        <div class="w-full relative">
            <div class="absolute w-full duration-300" :class="{ 'pl-[260px]':sideBar, 'pl-[60px]':!sideBar }">
                <div
                    class="flex items-center justify-between w-full bg-slate-900 text-gray-400 py-2 h-[60px] border-b border-slate-700">
                    <div class="px-1">
                        <button type="button" @click="sideBar = !sideBar" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                            </svg>
                        </button>
                    </div>
                    <div class="px-1">
                        <ul class="flex space-x-2">
                            <li class="cursor-pointer">Home</li>
                            <li class="cursor-pointer">About</li>
                            <li class="cursor-pointer">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex w-full">
            <div class="bg-slate-900 duration-300 relative" :class="{ 'min-w-[260px]':sideBar, 'min-w-[60px]':!sideBar }">
                <div :class="{ 'justify-center' : !sideBar}" class="w-full flex items-center h-[60px] border-b border-slate-700 mb-3">
                    <h1 class="text-white text-2xl px-3 font-bold"> {{ sideBar ? 'SoftLogic':'S' }}</h1>
                </div>

                <div class="h-[calc(100vh-50px)] overflow-y-auto">
                    <ul class="px-3 w-full">
                        <li :class="{ 'justify-center' : !sideBar}"
                            class="flex items-center space-x-1 cursor-pointer text-white p-2 hover:bg-slate-800 duration-300 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                            </svg>
                            <span :class="{ 'hidden':!sideBar }">Dashboard</span>
                        </li>
                        <li :class="{ 'justify-center' : !sideBar}"
                            class="flex items-center space-x-1 cursor-pointer text-white p-2 hover:bg-slate-800 duration-300 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>

                            <span :class="{ 'hidden':!sideBar }">Role Manage</span>
                        </li>
                        <li :class="{ 'justify-center' : !sideBar}"
                            class="flex items-center space-x-1 cursor-pointer text-white p-2 hover:bg-slate-800 duration-300 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>

                            <span :class="{ 'hidden':!sideBar }">User Manage</span>
                        </li>
                        <li :class="{ 'justify-center' : !sideBar}"
                            class="flex items-center space-x-1 cursor-pointer text-white p-2 hover:bg-slate-800 duration-300 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                            </svg>
                            <span :class="{ 'hidden':!sideBar }">Dashboard</span>
                        </li>
                        <li :class="{ 'justify-center' : !sideBar}"
                            class="flex items-center space-x-1 cursor-pointer text-white p-2 hover:bg-slate-800 duration-300 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            <span :class="{ 'hidden':!sideBar }">Setting</span>
                        </li>

                        <li :class="{ 'justify-center' : !sideBar}" class="flex items-center space-x-1 cursor-pointer text-white p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>

                            <span :class="{ 'hidden':!sideBar }">Logout</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full h-[calc(100vh-48px)] mt-14 overflow-y-auto p-3">
                <div class=" grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5 gap-3">
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                    <div class="bg-slate-900 hover:bg-slate-800 duration-1000 h-64 w-full rounded-sm">
                        <h1>Card</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<style>
/* width */
::-webkit-scrollbar {
    width: 3px;
    height: 1px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey;
    border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: rgb(253, 0, 0);
    border-radius: 10px;
}


body {
    background-color: #f8f3f2 !important;
}</style>
