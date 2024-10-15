<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $config['page_title'] ?></title>
    <meta name="robots" content="noindex">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <base href="<?= $config['app_url'] . '/' ?>">

    <style type="text/css">
        body {
            background-color: #e9e9f3;
            margin: 0;
            padding: 0;
        }

        .navbar-custom {
            background-color: #262b40;
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        .navbar-brand {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-brand img {
            max-height: 50%;
            height: auto;
        }

        .content-wrapper {
            min-height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content-box {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            padding: 30px;
            text-align: center;
        }

        .content-box h1 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .content-box input {
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .custom-btn {
            background-color: #ff6d3b;
            color: white;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: bold;
        }

        .help-links a {
            color: #ff6d3b;
            display: block;
            margin-top: 10px;
        }

        .footer {
            padding: 15px;
            border-radius: 0 0 12px 12px;
            color: #888888;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 10vh;
        }

        .footer a {
            color: #888888;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-custom">
        <a class="navbar-brand" href="<?= $config['logo_link'] ?>">
            <img src="<?= $config['logo'] ?>" alt="Logo">
        </a>
    </nav>

    <div class="content-wrapper">
        <div class="content-box">
            <h1>Velkommen til Min side! 👋</h1>
            <p>Skriv inn saksnummer du fikk tilsendt i brev/SMS for å betale eller se informasjon om din sak</p>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Skriv inn saksnummer">
                </div>
                <button type="submit" class="btn custom-btn">Neste</button>
            </form>
        </div>
    </div>

    <div class="footer footer-text"><a href="https://resolvia.no" target="_blank">Løsningen er levert av Resolvia Egeninkasso</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
