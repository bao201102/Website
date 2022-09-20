<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/product_mgmt.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Hamlin Furniture</title>
</head>

<body>
    <div class="container-fluid p-0">
        <!-- Sidebar -->
        <?php
            include_once "./views/sidebar.php"
        ?>

        <!-- Main content -->
        <div id="main-content" style="min-height: 100vh; margin-left: 340px; right: 0; bottom: 0; left: 0;">
            <!-- Title -->
            <section class="container-fluid shadow-sm">
                <div class="row p-4">
                    <!-- title -->
                    <div
                        class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start pb-4 pb-lg-0">
                        <a> <span class="material-symbols-outlined align-middle me-3" id="menu-btn"
                                style="font-size: 40px;"> menu
                            </span> </a>
                        <span class="fw-semibold fs-3">Employee Management</span>
                    </div>
                    <div
                        class="col-12 col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end">
                        <!-- select category -->
                        <div class="me-2 me-xl-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected value="all">All</option>
                                <option value="chair">User</option>
                                <option value="table">Admin</option>
                            </select>
                        </div>
                        <!-- button add new product -->
                        <div>
                            <button onclick="addProduct()" type="button"
                                class="btn btn-info d-flex align-items-center fs-5">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                                Add new
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Search -->
            <section class="my-4">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-text material-symbols-outlined">search</span>
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                    </div>
                </div>
            </section>

            <!-- product -->
            <section class="py-4">
                <div class="container">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">id</th>
                                <th scope="col">Name</th>
                                <th scope="col" colspan="2">Position</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="./img/Classic-Lamp.jpg" alt="" class="product-thumbnail"></td>
                                <td>Classic-Lamp</td>
                                <td>Lamp</td>
                                <td class="text-center utility">
                                    <span onclick="editProduct()"
                                        class="material-symbols-outlined edit me-3">edit</span>
                                    <span class="material-symbols-outlined delete">delete</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><img src="./img/Classic-Lamp.jpg" alt="" class="product-thumbnail"></td>
                                <td>Classic-Lamp</td>
                                <td>Lamp</td>
                                <td class="text-center utility">
                                    <span onclick="editProduct()"
                                        class="material-symbols-outlined edit me-3">edit</span>
                                    <span class="material-symbols-outlined delete">delete</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- page number -->
            <section class="py-4">
                <div class="container d-flex justify-content-center">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">&laquo;</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <!-- Modal add new employee -->
        <div class="modal-layout add_product">
            <div id="add_product" class="modal-inner">
                <div class="d-flex align-items-end">
                    <span class="me-auto ps-4 fw-semibold fs-3">Add new employee</span>
                    <span class="material-symbols-outlined modal-close">
                        close
                    </span>
                </div>
                <br style="clear: both;">
                <div class="row pt-2 pt-md-4 px-3 px-md-4">
                    <div class="col-6">
                        <div class="px-3">
                            <!-- Employee name -->
                            <div class="mb-3">
                                <label for="employee_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="employee_name" placeholder="Name">
                            </div>
                            <!-- Position -->
                            <div class="mb-3">
                                <label class="form-label">Position</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open select menu</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="col-6 d-flex flex-column">
                        <div class="px-3">
                            <!--  Avatar-->
                            <div class="mb-3">
                                <label for="file-upload" class="form-label">Avatar</label>
                                <input type="file" id="file-upload" class="form-control" multiple>
                            </div>
                            <!-- Age -->
                            <div class="mb-3">
                                <label for="employee_age" class="form-label">Age</label>
                                <input type="text" class="form-control" id="employee_age" placeholder="Age">
                            </div>



                        </div>
                        <div class="mt-auto d-inline-flex btn-group gap-3 align-self-center ">
                            <button type="button" class="btn btn-primary">Add</button>
                            <button type="button" class="btn btn-outline-primary btn_close">Cancel</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal edit product -->
        <div class="modal-layout edit_product">
            <div id="edit_product" class="modal-inner">
                <div class="d-flex align-items-end">
                    <span class="me-auto ps-4 fw-semibold fs-3">Edit Employee</span>
                    <span class="material-symbols-outlined modal-close">
                        close
                    </span>
                </div>
                <br style="clear: both;">
                <div class="row pt-2 pt-md-4 px-3 px-md-4">
                    <div class="col-6">
                        <div class="px-3">
                            <!-- name product -->
                            <div class="mb-3">
                                <label for="employee-name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="employee-name" placeholder="Name of employee">
                            </div>
                            <!-- Position -->
                            <div class="mb-3">
                                <label class="form-label">Position</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open select menu</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="col-6 d-flex flex-column">
                        <div class="px-3">
                            <!--  Avatar-->
                            <div class="mb-3">
                                <label for="file-upload" class="form-label">Avatar</label>
                                <input type="file" id="file-upload" class="form-control" multiple>
                            </div>
                            <!-- Age -->
                            <div class="mb-3">
                                <label for="employee-agew" class="form-label">Age</label>
                                <input type="text" class="form-control" id="employee-age" placeholder="Age">
                            </div>



                        </div>
                        <div class="mt-auto d-inline-flex btn-group gap-3 align-self-center ">
                            <button type="button" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-outline-primary btn_close">Cancel</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
<script src="./js/sidebar-effect.js"></script>
<script src="./js/product_mgmt.js"></script>

</html>