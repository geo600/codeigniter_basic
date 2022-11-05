<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($meta_title) ? $meta_title : 'Codeigniter default tile' ?></title>
</head>

<body>
    <!-- <nav>
        <li><a href="/codeigniter_basic/public/blog">Blog</a></li>
        <li><a href="/codeigniter_basic/public/blog/post">Posts</a></li>
    </nav> -->


    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/codeigniter_basic/public/blog" class="nav-link active" aria-current="page">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/codeigniter_basic/public/blog/post">Posts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>