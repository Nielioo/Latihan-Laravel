<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio</title>

    <style>
        .jumbotron {
            padding: 0;
            margin: 0;
            background-color: #c8e9ff;
        }

        .jumbotron-context {
            padding-top: 50px;
            padding-left: 40px;
            padding-right: 40px;
        }

    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
    {{-- begin of navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">

            {{-- logo --}}
            <a class="navbar-brand" href="#">
                <img src="/img/Element_Cryo.png" alt="" width="30" height="30">
            </a>

            {{-- company name --}}
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- item name --}}
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end of navbar --}}

    {{-- begin of jumbotron --}}
    <section class="jumbotron text-center">
        <div class="jumbotron-context">
            <img src="/img/Enemy_Primo_Geovishap.png" alt="" width="225" height="225">
            <h2 class="fw-bold">Custom jumbotron</h2>
            <p class="lead">Using a series of utilities, you can create this jumbotron, just like the one in
                previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to
                your liking.</p>
            <button class="btn btn-primary btn-lg mb-2" type="button">Example button</button>
        </div>
    </section>

    {{-- https://getwaves.io --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#c8e9ff" fill-opacity="1"
            d="M0,128L60,149.3C120,171,240,213,360,224C480,235,600,213,720,192C840,171,960,149,1080,149.3C1200,149,1320,171,1380,181.3L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
    </svg>

    {{-- end of jumbotron --}}

    {{-- begin of grid --}}
    <section id="aboutme">
        <div class="container text-center">
            <h2 class="mb-4">About Me</h2>
            <div class="row justify-content-center">
                <div class="col-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, ex! Quibusdam consectetur quam
                    ratione ipsum fugit eum. Officia, tempore laudantium.
                </div>
                <div class="col-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quae ut nostrum incidunt! Sint
                    consectetur dignissimos architecto eaque natus quidem!
                </div>
                <div class="col-4">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam quaerat tempora adipisci blanditiis
                    saepe perspiciatis consequatur explicabo iure soluta alias?
                </div>
            </div>
        </div>
    </section>

    {{-- https://getwaves.io --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#c8e9ff" fill-opacity="1"
            d="M0,128L60,149.3C120,171,240,213,360,224C480,235,600,213,720,192C840,171,960,149,1080,149.3C1200,149,1320,171,1380,181.3L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>

    {{-- end of grid --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>

</body>

</html>
