<html lang="en" data-bs-theme="dark" data-lt-installed="true">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Investidor10 desafio</title>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">

    <!-- Favicons -->
    <meta name="theme-color" content="#712cf9">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>

    <style>@font-face {
            font-family: 'Open Sans Regular';
            font-style: normal;
            font-weight: 400;
            src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-regular.woff');
        }</style>
    <style>@font-face {
            font-family: 'Open Sans Bold';
            font-style: normal;
            font-weight: 800;
            src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/OpenSans-Bold.woff');
        }</style>
    <style>@font-face {
            font-family: 'Open Sans ExtraBold';
            font-style: normal;
            font-weight: 800;
            src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-800.woff');
        }</style>
</head>
<body data-new-gr-c-s-check-loaded="14.1186.0" data-gr-ext-installed="">
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
        <path
            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path
            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
        <path
            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path
            d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
    </symbol>
</svg>

<div id="app">
    <header data-bs-theme="dark">
        <div class="collapse text-bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Cadastrar Notícia</h4>
                        <form @submit.prevent="submitNewsForm">
                            <div class="mb-3">
                                <label for="title" class="form-label">Título da Notícia</label>
                                <input type="text" class="form-control" id="title" v-model="newPost.title" required>
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Texto da Notícia</label>
                                <textarea class="form-control" id="body" rows="3" v-model="newPost.body"
                                          required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Selecione uma categoria existente</label>
                                <select class="form-select" multiple aria-label="multiple select example"
                                        v-model="newPost.categories">
                                    <option v-for="category in categories" :value="category.title">
                                        @{{ category.title }}
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="newCategory" class="form-label">Adicionar categoria</label>
                                <input type="text" class="form-control" id="newCategory" v-model="newPost.newCategory">
                            </div>
                            <button type="submit" class="btn btn-primary">Adicionar Notícia</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                         viewBox="0 0 24 24">
                        <path
                            d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>Blog</strong>
                </a>
                <button @click="handleReadPost(null) && fetchPosts" class="navbar-toggler">Mostrar notícias</button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                        aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    Cadastrar notícia
                </button>
            </div>
        </div>
    </header>

    <main>
        <div v-if="loading" class="text-center">
            <p>Carregando...</p>
        </div>
        <div v-else class="album py-5 bg-body-tertiary">
            <div class="container" v-if="postDetails">
                <h1>@{{ postDetails.title }}</h1>
                <p class="text-muted">Última atualização: @{{ postDetails.updated_at }}</p>
                <div v-html="postDetails.body"></div>
                <div class="mt-4">
                    <strong>Categorias:</strong>
                    <ul>
                        <li v-for="category in postDetails.categories" :key="category.id">@{{ category.title }}</li>
                    </ul>
                </div>
                <button class="btn btn-primary mt-3" @click="handleReadPost(null)">Voltar</button>
            </div>
            <div v-else>
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col" v-for="post in posts" :key="post.id">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">@{{ post.title }}</h5>
                                    <p class="card-text">@{{ post.body }}</p>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                            @click="handleReadPost(post)">Ler artigo
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container d-flex justify-content-center mt-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
                                <button class="page-link" @click.prevent="fetchPosts(currentPage - 1)">Anterior</button>
                            </li>
                            <li class="page-item" v-for="page in totalPages" :key="page"
                                :class="{ 'active': page === currentPage }">
                                <button class="page-link" @click.prevent="fetchPosts(page)">@{{ page }}</button>
                            </li>
                            <li class="page-item" :class="{ 'disabled': currentPage === totalPages }">
                                <button class="page-link" @click.prevent="fetchPosts(currentPage + 1)">Próximo</button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-body-secondary py-5">
        <div class="container">
            <p class="mb-1">Desenvolvido por @Pedro Lucca Leonardo de Almeida</p>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
</script>

</body>
</html>

<!-- Vue.js Instance -->
<script>
    new Vue({
        el: '#app',
        data: {
            modalOpen: false,
            postDetails: null,
            posts: [],
            categories: [],
            currentPage: 1,
            totalPages: 0,
            loading: false,
            newPost: {
                title: '',
                body: '',
                categories: [],
                newCategory: ''
            }
        },
        mounted() {
            // Fetch initial data
            this.fetchPosts(this.currentPage);
            this.fetchCategories();
        },
        methods: {
            fetchPosts(page) {
                this.loading = true;
                fetch(`/api/posts?page=${page}`)
                    .then(response => response.json())
                    .then(data => {
                        this.posts = data.data;
                        this.currentPage = data.current_page;
                        this.totalPages = data.last_page;
                        this.loading = false;
                    })
                    .catch(error => {
                        console.error('Error fetching posts:', error);
                        this.loading = false;
                    });
            },
            fetchCategories() {
                fetch(`/api/categories`)
                    .then(response => response.json())
                    .then(data => {
                        this.categories = data;
                    })
                    .catch(error => {
                        console.error('Error fetching categories:', error);
                    });
            },
            submitNewsForm() {
                const data = {
                    title: this.newPost.title,
                    body: this.newPost.body,
                    categories: [...this.newPost.categories, this.newPost.newCategory]
                };

                fetch('api/posts', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                }).then(response => response.json())
                    .then(data => {
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Notícia cadastrada com sucesso!",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        this.fetchCategories();
                    })
                    .catch(error => {
                        console.error('Error fetching categories:', error);
                    });
            },
            handleReadPost(post) {
                this.postDetails = post;
            }
        }
    });
</script>
