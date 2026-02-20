<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - AI_Sekho</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .lime-accent { color: #D4FF5E; }
        .bg-lime-accent { background-color: #D4FF5E; }
        .sidebar-link:hover { background: rgba(212, 255, 94, 0.1); color: #D4FF5E; }
    </style>
</head>
<body class="bg-[#0A0A0A] text-white flex h-screen overflow-hidden">

   <x-common.admin-sidebar />

    <main class="flex-1 overflow-y-auto bg-[#0F0F0F]">
        
    <x-common.admin-header />

      {{ $slot }}
    </main>

</body>
</html>