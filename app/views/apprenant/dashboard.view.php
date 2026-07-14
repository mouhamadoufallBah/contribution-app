<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribution Management - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .bg-cream-warm {
            background-color: #fcf8f2;
        }
    </style>
</head>

<body class="bg-cream-warm text-slate-800 antialiased min-h-screen flex flex-col lg:flex-row">

    <!-- Overlay de la sidebar sur mobile -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-slate-900/40 z-40 hidden lg:hidden"></div>

    <!-- Header mobile collant -->
    <header class="lg:hidden bg-white border-b border-slate-200 px-6 py-4 flex items-center justify-between sticky top-0 z-30 w-full shrink-0">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 bg-[#f28f44] rounded-xl flex items-center justify-center text-white text-lg">
                <i class="fa-solid fa-snowflake"></i>
            </div>
            <span class="font-extrabold text-[#f28f44] text-lg tracking-tight">Cotisation</span>
        </div>
        <button id="menu-btn" class="p-2 text-slate-600 hover:bg-slate-50 rounded-xl transition-all">
            <i class="fa-solid fa-bars text-xl"></i>
        </button>
    </header>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-slate-200 flex flex-col justify-between transition-transform duration-300 transform -translate-x-full lg:translate-x-0 lg:static lg:h-auto min-h-screen shrink-0">
        <div>
            <div class="p-6 border-b border-slate-100 flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#f28f44] rounded-xl flex items-center justify-center text-white text-lg">
                        <i class="fa-solid fa-snowflake"></i>
                    </div>
                    <span class="font-extrabold text-[#f28f44] text-lg tracking-tight">Cotisation</span>
                </div>
                <button id="close-sidebar-btn" class="lg:hidden p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-50 rounded-xl">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <nav class="p-4 space-y-1">
                <a href="./dashboard.html" class="flex items-center gap-3 px-4 py-3 text-sm font-bold rounded-xl text-[#f28f44] bg-[#fcf8f2]/50">
                    <i class="fa-solid fa-house text-base"></i>
                    <span>Dashboard</span>
                </a>
                <!-- <a href="./notification/notification.html" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl text-slate-500 hover:bg-slate-50 transition-all">
                    <i class="fa-solid fa-bell text-base"></i>
                    <span>Notifications</span>
                </a> -->

            </nav>
        </div>

        <div class="p-4 border-t border-slate-100">
            <a href="#" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold text-slate-500 hover:bg-rose-50 hover:text-rose-600 rounded-xl transition-all">
                <i class="fa-solid fa-arrow-right-from-bracket text-base"></i>
                <span>Deconnexion</span>
            </a>
        </div>
    </aside>

    <main class="flex-1 p-4 sm:p-6 lg:p-8 space-y-6 overflow-y-auto">

        <div class="bg-white px-6 py-4 rounded-xl border border-slate-100 flex items-center justify-between shadow-sm">
            <div class="flex items-center gap-2 text-sm text-slate-500 font-semibold">
                <i class="fa-solid fa-house text-base"></i>
                <a class="hover:text-slate-800">Dashboard Apprenant</a>

            </div>
        </div>

        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8 space-y-6">
            <div class="flex justify-between items-start">
                <div class="space-y-2">
                    <h2 class="text-3xl font-bold text-slate-900">Moussa Ndiaye</h2>
                    <p class="text-2xl font-bold text-slate-900">Total collecté: <span class="text-emerald-600">1200000FCFA</span></p>
                    <p class="text-2xl font-bold text-slate-900">Dette: <span class="text-rose-600">5000FCFA</span></p>
                </div>
            </div>

            <div class="pt-4">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-sm">
                        <thead>
                            <tr class="border-b border-slate-100 text-xs font-bold text-slate-400 uppercase tracking-wider bg-slate-50/50">
                                <th class="p-4 pl-6 w-1/3">Semaine</th>
                                <th class="p-4 w-1/3">Paiment</th>
                                <th class="p-4 pl-6 w-1/3">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-600">
                            <tr>
                                <td class="p-4 pl-6 font-semibold text-slate-700">Semaine 1</td>
                                <td class="p-4 font-semibold text-slate-700">120000</td>
                                <td class="p-4 pl-6">
                                    <span class="px-4 py-1 text-xs font-bold rounded-full bg-emerald-700 text-white">A jour</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 pl-6 font-semibold text-slate-700">Semaine 2</td>
                                <td class="p-4 font-semibold text-slate-700">120000</td>
                                <td class="p-4 pl-6">
                                    <span class="px-4 py-1 text-xs font-bold rounded-full bg-rose-600 text-white">En retard</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 pl-6 font-semibold text-slate-700">Semaine 3</td>
                                <td class="p-4 font-semibold text-slate-700">120000</td>
                                <td class="p-4 pl-6">
                                    <span class="px-4 py-1 text-xs font-bold rounded-full bg-emerald-700 text-white">A jour</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 pl-6 font-semibold text-slate-700">Semaine 4</td>
                                <td class="p-4 font-semibold text-slate-700">120000</td>
                                <td class="p-4 pl-6">
                                    <span class="px-4 py-1 text-xs font-bold rounded-full bg-emerald-700 text-white">A jour</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 pl-6 font-semibold text-slate-700">Semaine 5</td>
                                <td class="p-4 font-semibold text-slate-700">120000</td>
                                <td class="p-4 pl-6">
                                    <span class="px-4 py-1 text-xs font-bold rounded-full bg-emerald-700 text-white">A jour</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 pl-6 font-semibold text-slate-700">Semaine 6</td>
                                <td class="p-4 font-semibold text-slate-700">120000</td>
                                <td class="p-4 pl-6">
                                    <span class="px-4 py-1 text-xs font-bold rounded-full bg-emerald-700 text-white">A jour</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-4 pl-6 font-semibold text-slate-700">Semaine 7</td>
                                <td class="p-4 font-semibold text-slate-700">120000</td>
                                <td class="p-4 pl-6">
                                    <span class="px-4 py-1 text-xs font-bold rounded-full bg-emerald-700 text-white">A jour</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const closeSidebarBtn = document.getElementById('close-sidebar-btn');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        if (menuBtn && sidebar && sidebarOverlay) {
            menuBtn.addEventListener('click', () => {
                sidebar.classList.remove('-translate-x-full');
                sidebarOverlay.classList.remove('hidden');
            });
        }

        const closeSidebar = () => {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        };

        if (closeSidebarBtn) {
            closeSidebarBtn.addEventListener('click', closeSidebar);
        }
        if (sidebarOverlay) {
            sidebarOverlay.addEventListener('click', closeSidebar);
        }
    </script>

</body>

</html>