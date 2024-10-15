<!DOCTYPE html>
<html lang="no">

<head>
    <title><?= $config['page_title'] ?></title>
    <link rel="icon" type="image/x-icon" href="https://hpanel.hostinger.com/favicons/hostinger.png">
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <base href="<?= $config['app_url'].'/' ?>">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
            min-height: 675px;
            background-color: #F9FAFB;
        }

        p {
            width: 100%;
            left: 0px;
            font-size: 16px;
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: top;
            max-width: 550px;
            color: #727586;
            margin: 0px;
        }

        .logo {
            height: 8vh;
            margin: 0px;
        }

        a:hover {
            cursor: pointer;
            color: #faab51;
            text-decoration: underline;
        }

        h1 {
            font-family: 'DM Sans', sans-serif;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0px;
            text-align: center;
            margin: 8px;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .ic-launch {
            margin-left: 10.5px;
            width: 21px !important;
            height: 20px !important;
        }

        .link-container {
            margin-top: 32px;
            margin-bottom: 32px;
        }

        .link,
        a:visited {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            font-family: 'DM Sans', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 14px;
            color: #f8bd7a;
            margin-top: 8px;
            text-decoration: none;
        }

        .main-image {
            width: 100%;
            max-width: 650px;
            max-height: 406px;
            height: auto;
        }

        .navigation {
            width: 100%;
            height: 10vh;
            display: flex;
            margin: 0;
            padding: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background-color: #262b40;
        }

        .footer {
            width: 100%;
            height: 5vh;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        .footer-text {
            font-family: 'DM Sans', sans-serif;
            font-size: 12px;
            font-weight: 400;
            letter-spacing: 0px;
            text-align: center;
            color: #727586;
        }

        @media screen and (max-width: 580px) and (min-width: 0px) {

            h1,
            p,
            .link-container {
                width: 80%;
            }
        }

        @media screen and (min-width: 650px) and (min-height: 0px) and (max-height: 750px) {
            .link-container {
                margin-top: 12px;
            }

            h1 {
                margin-top: 0px;
                margin-bottom: 0px;
            }
        }
    </style>
</head>

<body>
    <nav class="navigation">
        <a href="<?= $config['logo_link'] ?>" target="_blank">
            <img src="<?= $config['logo'] ?>" class="logo">
        </a>
    </nav>
    <div class="content">

        <?= $content ?>

    </div>

    <div class="footer">
        <a href="https://resolvia.no" target="_blank" class="footer-text">
            Løsningen er levert av Resolvia Egeninkasso
        </a>
    </div>
</body>

</html>