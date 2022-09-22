<!DOCTYPE html>
<html>

<head>
    <title>Galeri Sederhana</title>
    <style>
        body {
            background: linear-gradient(#f44242, #1cb5e0);
            color: white;
            padding: 10rem 3rem;
            margin: 4rem;
            font-size: 20px;
            /* background-color: rgba(250, 236, 228, 0.938); */
        }

        div.gallery {
            border: 3px solid #ccc;
            border-radius: 5%;
            background-color: rgb(255, 90, 90);
        }

        div.gallery:hover {
            border: 3px solid rgb(243, 254, 27);
            background-color: rgb(0, 0, 0);
        }

        div.gallery img {
            width: 100%;
            border-radius: 5% 5% 0% 0%;
            height: auto;
        }

        h2 {
            font-size: 40px;
            font-family: 'Segoe UI';
            text-shadow: 2px 2px rgba(0, 0, 0, 0.61);
        }

        div.desc {
            padding: 20px;
            font-family: 'Segoe UI';
            font-weight: bold;
            color: white;
            text-align: center;
        }

        div.desc:hover {
            color: paleturquoise;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>
    <h1 align="center">
        <bold>WELCOME TO</bold>
    </h1>

    <h2 align="center">My Galery</h2>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="avatar.jpg">
                <img src="../img/avatar.jpg" alt="Tangga" width="600" height="400">
            </a>
            <div class="desc">My Avatar</div>
        </div>
    </div>


    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="bg.png">
                <img src="../img/bg.png" alt="Telur" width="600" height="400">
            </a>
            <div class="desc">Camera Sleep</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="likmi.jpg">
                <img src="../img/likmi.jpg" alt="Hexa Miring" width="600" height="400">
            </a>
            <div class="desc">Kampus</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="4.jpg">
                <img src="../img/4.jpg" alt="Hexa Tegak" width="600" height="400">
            </a>
            <div class="desc">Fire</div>
        </div>
    </div>

    <div class="clearfix"></div>
</body>

</html>
