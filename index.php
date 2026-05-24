<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="js/script.js" defer></script>
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
                <nav>
                    <div class="container-fluid">
                        <h2 class="navbar-brand">Inter-branch Inquiry</h2>
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
                <div class="container w-50">
                    <h2>Inter-branch Inquiry</h2>
                    <div class="form-container">
                        <form class="ibi-add-form" action="" method="POST">
                            <div class="mb-3 mt-3">
                                <label for="firstName" class="form-label">First name:</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First name" name="firstName" required>
                            </div>
                            <div class="mb-3">
                                <label for="middleName" class="form-label">Middle name:</label>
                                <input type="text" class="form-control" id="middleName" placeholder="Middle name" name="middleName" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last name:</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last name" name="lastName" required>
                            </div>
                            <div class="mb-3">
                                <label for="branch" class="form-label">Branch:</label>
                                <select name="branch" id="branch" class="form-select" required>
                                    <option value="">Select</option>
                                    <option value="Main 1">Main 1</option>
                                    <option value="Main 2">Main 2</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status:</label>
                                <select name="status" id="status" class="form-select" required>
                                    <option value="">Select</option>
                                    <option value="Active">Active</option>
                                    <option value="Disapproved">Disapproved</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary submit">Submit</button>
                        </form>
                    </div>
                </div>
            </main>

        </div>
    </div>
    
</body>
</html>