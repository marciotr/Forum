<php?>
    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Formulário</title>
            <!-- Adicionando Bootstrap CSS -->
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            <style>
                /* Estilos personalizados */
                body {
                    background-color: #f8f9fa; /* Cinza claro */
                    color: #343a40; /* Preto */
                }

                .container {
                    margin-top: 50px;
                }

                .form-group label {
                    color: #343a40; /* Preto */
                }

                .btn-primary {
                    background-color: #343a40; /* Preto */
                    border-color: #343a40; /* Preto */
                }

                .btn-primary:hover {
                    background-color: #212529; /* Cinza mais escuro */
                    border-color: #212529; /* Cinza mais escuro */
                }
            </style>
        </head>
        <body>
            <header>
                <h1>
                    @yield('header')
                </h1>
            </header>

            <div class="content">
                @yield('content')
            </div>
        </body>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </html>
<php>