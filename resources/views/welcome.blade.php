<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> --}}
    <link rel="stylesheet" href="/css/bulma.min.css">
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Documentation
                </a>


            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="section">
        <div class="container">
            <h1 class="title">
                Hello World
            </h1>
            <p class="subtitle">
                My first website with <strong>Bulma</strong>!
            </p>
        </div>
    </section>
    <section class="section">
        <div class="columns">
            <div class="column">

                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            Lorem ipsum leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi
                            porta
                            gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur
                            ridiculus mus. Cras mattis consectetur purus sit amet fermentum.
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">

                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            Lorem ipsum leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi
                            porta
                            gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur
                            ridiculus mus. Cras mattis consectetur purus sit amet fermentum.
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">

                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            Lorem ipsum leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi
                            porta
                            gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur
                            ridiculus mus. Cras mattis consectetur purus sit amet fermentum.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/main.js"></script>
</body>

</html>
