<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="js/script.js" defer></script>
    <link rel="stylesheet" href="css/my-style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row content">
            <nav class="d-flex flex-column flex-shrink-o p-3 bg-light min-vh-100" style="width: 280px;">
                <h1>ASCC</h1>
                <ul class="nav nav-pills flex-column mb-aout">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inter-Branch Inquiry</a>
                    </li>
                </ul>
            </nav>
            <main class="col container flex-column justify-content-center min-vh-100 p-3">
                <nav class="">
                    <div class="d-flex p3 align-items-center justify-content-between gap-3 w-100">
                        <h1 class="navbar-brand">Inter-branch Inquiry</h1>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Client
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Add</a>
                            </li>
                        </ul>
                        <form action="" class="d-flex">
                            <input type="text" placeholder="Search" class="form-control me-2">
                        </form>
                    </div>
                </nav>
                <div class="container-fluid w-50">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>

        </div>
    </div>
    <?php include_once 'includes/ibi-add-modal.php' ?>
</body>
</html>