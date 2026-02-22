<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modul Pertemuan 1</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* Simple CSS reset and dark mode styling to match the assignment */
                body {
                    background-color: #000000;
                    color: #ffffff;
                    font-family: 'Instrument Sans', sans-serif;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 100vh;
                    margin: 0;
                }
                
                .card {
                    background-color: #18181b; /* Zinc-900 equivalent */
                    border: 1px solid #27272a; /* Zinc-800 equivalent */
                    padding: 40px;
                    border-radius: 12px;
                    text-align: center;
                    width: 100%;
                    max-width: 400px;
                    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                }

                h1 {
                    font-size: 1.5rem;
                    font-weight: 600;
                    margin-bottom: 0.5rem;
                    margin-top: 0;
                }

                .nim {
                    color: #a1a1aa; /* Zinc-400 equivalent */
                    margin-bottom: 1.5rem;
                    margin-top: 0;
                }

                .btn {
                    display: inline-block;
                    background-color: #ffffff;
                    color: #000000;
                    padding: 0.5rem 1.25rem;
                    border-radius: 4px;
                    font-size: 0.875rem;
                    font-weight: 500;
                    text-decoration: none;
                    transition: background-color 0.2s;
                }

                .btn:hover {
                    background-color: #e4e4e7;
                }
            </style>
        @endif
    </head>
    <body>
        <div class="card">
            <h1>Azizah Aurellia Azmi</h1>
            
            <p class="nim">20230140234</p>
            
            <div class="btn">
                Modul Pertemuan 1
            </div>
        </div>
    </body>
</html>