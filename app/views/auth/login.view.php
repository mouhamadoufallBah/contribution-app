<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribution Management - Connexion</title>
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
<body class="bg-cream-warm text-slate-800 antialiased min-h-screen flex items-center justify-center p-4">

    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden max-w-4xl w-full grid grid-cols-1 md:grid-cols-2 min-h-[550px]">
        
        <div class="p-8 md:p-12 flex flex-col justify-center space-y-6">
            <div class="space-y-2">
                <h2 class="text-3xl font-extrabold text-slate-900">Se connecter</h2>
            </div>
            
            <form action="http://bah.mouhamadoufall.bah.odc.edu.sn:3001/login" method="POST" class="space-y-4">
                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wider" id="email">Email</label>
                    <input type="email" name="email" placeholder="Saisir votre adresse mail" class="w-full border border-slate-200 px-4 py-3 rounded-xl text-sm focus:outline-none focus:border-orange-500">
                </div>
                
                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wider" id="mdp">Mot de passe</label>
                    <input type="password" name="mdp" placeholder="Saisir votre mot de passe" class="w-full border border-slate-200 px-4 py-3 rounded-xl text-sm focus:outline-none focus:border-orange-500">
                </div>
                
               <button type="submit" class=" text-center w-full bg-[#f28f44] hover:bg-[#e07d32] text-white font-bold py-3 px-4 rounded-xl transition-all shadow-lg shadow-orange-500/10">
                    Se connecter
               </button>
            </form>
            
            <p class="text-xs text-center text-slate-500">
                vous n’avez pas de compte? 
                <a href="http://bah.mouhamadoufall.bah.odc.edu.sn:3001/register" class="text-[#f28f44] font-bold hover:underline">S'inscrire</a>
            </p>
        </div>
        <div class="bg-[#f28f44] hidden md:flex flex-col justify-center items-center relative overflow-hidden p-12 text-white">
            <div class="absolute -top-12 -right-12 w-64 h-64 rounded-full bg-white/10"></div>
            <div class="absolute -bottom-16 -left-16 w-80 h-80 rounded-full bg-white/5"></div>
        </div>
        
    </div>

</body>
</html>
