<?php
 session_start();
include_once('../db_connection.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    
?>
<?php include("./common/header.php"); ?>
<?php include("./common/sidebar.php"); ?>
        <!-- Content Start -->
        <div class="content">
        
            <?php include("./common/topbar.php"); ?>

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Subscription Category</h6>
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row mb-1">
                                            <label for="Batch" class="col-sm-3 col-form-label">Batch</label>
                                            <div class="col-sm-9">
                                                <select id="Batch" class="form-select mb-3"
                                                    aria-label="Default select example">
                                                    <option selected>Select Batch</option>
                                                    <option value="1">Eleven2021</option>
                                                    <option value="1">Eleven2022</option>
                                                    <option value="1">Eleven2023</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-1">
                                            <label for="fromDate" class="col-sm-3 col-form-label">From Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="fromDate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-1">
                                            <label for="toDate" class="col-sm-3 col-form-label">To Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="toDate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-1">
                                            <label for="Amount" class="col-sm-3 col-form-label">Subscription
                                                Amount</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="Amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-1">
                                            <label for="Charge" class="col-sm-3 col-form-label">Payment Charge</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="Charge">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--  ==================== List of  Category======= -->
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Subscription Category List</h6>
                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="row mb-1">
                                                    <label for="Batch" class="col-sm-3 col-form-label">Batch</label>
                                                    <div class="col-sm-9">
                                                        <select id="Batch" class="form-select mb-3"
                                                            aria-label="Default select example">
                                                            <option selected>Select Batch</option>
                                                            <option value="1">Eleven2021</option>
                                                            <option value="1">Eleven2022</option>
                                                            <option value="1">Eleven2023</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="">
                                                    <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Batch</th>
                                                    <th scope="col">From Date</th>
                                                    <th scope="col">To Date</th>
                                                    <th scope="col"> Amount</th>
                                                    <th scope="col">Charge</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Eleven2021</td>
                                                    <td>10-11-2023</td>
                                                    <td>10-11-2024</td>
                                                    <td>50</td>
                                                    <td>10</td>
                                                    <td>
                                                        <span class="text-success">Active</span>
                                                        <!-- <span class="text-danger">InActive</span> -->
                                                    </td>
                                                    <td>
                                                        <a href="" class="text-info"><i class="fa fa-edit"></i></a>
                                                        <a href="" class="text-danger ms-3"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Eleven2021</td>
                                                    <td>10-11-2023</td>
                                                    <td>10-11-2024</td>
                                                    <td>50</td>
                                                    <td>10</td>
                                                    <td>
                                                        <span class="text-success">Active</span>
                                                        <!-- <span class="text-danger">InActive</span> -->
                                                    </td>
                                                    <td>
                                                        <a href="" class="text-info"><i class="fa fa-edit"></i></a>
                                                        <a href="" class="text-danger ms-3"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4 d-none">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Web Support BD</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
<?php } ?>
<?php include("./common/footer.php"); ?>