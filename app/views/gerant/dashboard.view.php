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
                <a href="./notification/notification.html" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl text-slate-500 hover:bg-slate-50 transition-all">
                    <i class="fa-solid fa-bell text-base"></i>
                    <span>Notifications</span>
                </a>
                
            </nav>
        </div>

        <div class="p-4 border-t border-slate-100">
            <a href="../../index.html" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold text-slate-500 hover:bg-rose-50 hover:text-rose-600 rounded-xl transition-all">
                <i class="fa-solid fa-arrow-right-from-bracket text-base"></i>
                <span>Deconnexion</span>
            </a>
        </div>
    </aside>

    <main class="flex-1 p-4 sm:p-6 lg:p-8 space-y-6 overflow-y-auto">
        
        <div class="bg-white px-6 py-4 rounded-xl border border-slate-100 flex items-center gap-3 shadow-sm">
            <i class="fa-solid fa-house text-slate-400 text-sm"></i>
            <span class="text-sm font-bold text-slate-500">Dashboard Gerant</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm space-y-3">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <i class="fa-solid fa-coins text-sm"></i>
                    </div>
                    <span class="text-xs font-bold text-emerald-600">Cotisation globale</span>
                </div>
                <div class="text-2xl font-black text-slate-950">105000 FCFA</div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm space-y-3">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-rose-50 text-rose-600 flex items-center justify-center">
                        <i class="fa-solid fa-triangle-exclamation text-sm"></i>
                    </div>
                    <span class="text-xs font-bold text-rose-500">Total dette</span>
                </div>
                <div class="text-2xl font-black text-slate-950">4000 FCFA</div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm space-y-3">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <i class="fa-solid fa-user-check text-sm"></i>
                    </div>
                    <span class="text-xs font-bold text-emerald-600">Apprenant a jour</span>
                </div>
                <div class="text-2xl font-black text-slate-950">45</div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm space-y-3">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center">
                        <i class="fa-solid fa-clock text-sm"></i>
                    </div>
                    <span class="text-xs font-bold text-blue-500">Campagnes actives</span>
                </div>
                <div class="text-2xl font-black text-slate-950">5</div>
            </div>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden p-6 space-y-4">
                <h3 class="text-lg font-black text-slate-900">Derniers versements</h3>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-sm">
                        <thead>
                            <tr class="border-b border-slate-100 text-xs font-bold text-slate-400 uppercase tracking-wider">
                                <th class="pb-3">APPRENANT</th>
                                <th class="pb-3">Total collecté</th>
                                <th class="pb-3">Type</th>
                                <th class="pb-3">Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 text-slate-600">
                            <tr>
                                <td class="py-4 font-bold text-slate-900">Moussa Ndiaye</td>
                                <td class="py-4 font-medium">120000</td>
                                <td class="py-4">Hebdo</td>
                                <td class="py-4">12/07/2026</td>
                            </tr>
                            <tr>
                                <td class="py-4 font-bold text-slate-900">Aicha Sy</td>
                                <td class="py-4 font-medium">3000</td>
                                <td class="py-4">Deces</td>
                                <td class="py-4">12/07/2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden p-6 space-y-4">
                <h3 class="text-lg font-black text-slate-900">Retardataire urgent</h3>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-sm">
                        <thead>
                            <tr class="border-b border-slate-100 text-xs font-bold text-slate-400 uppercase tracking-wider">
                                <th class="pb-3">APPRENANT</th>
                                <th class="pb-3">Nombre de semaine</th>
                                <th class="pb-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 text-slate-600">
                            <tr>
                                <td class="py-4 font-bold text-slate-900">Issa Ndiaye</td>
                                <td class="py-4 font-medium">5</td>
                                <td class="py-4">
                                    <a href="#" class="text-[#f28f44] font-bold hover:underline">Relancer</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4 font-bold text-slate-900">Idy Sy</td>
                                <td class="py-4 font-medium">3</td>
                                <td class="py-4">
                                    <a href="#" class="text-[#f28f44] font-bold hover:underline">Relancer</a>
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