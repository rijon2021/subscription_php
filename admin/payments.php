
<?php

    error_reporting(0);

?>
<?php include("./common/header.php"); ?>

        <!-- Content Start -->
        <div class="content">
            
            <?php include("./common/topbar.php"); ?>

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Search Payments</h6>
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
                                            <label for="Txn" class="col-sm-3 col-form-label">Txn Id</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="Txn">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row mb-1">
                                            <label for="Reg" class="col-sm-3 col-form-label">SSC Reg</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="Reg">
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--  ==================== List of  Category======= -->
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Payment List</h6>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Batch</th>
                                                    <th scope="col">Student Name</th>
                                                    <th scope="col">SSC Roll</th>
                                                    <th scope="col">SSC Registration</th>
                                                    <th scope="col">Mobile</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Charge</th>
                                                    <th scope="col">Txn Id</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Eleven2021</td>
                                                    <td>Rajib Mahmud</td>
                                                    <td>105489</td>
                                                    <td>105254789</td>
                                                    <td>01755669988</td>
                                                    <td>60</td>
                                                    <td>10</td>
                                                    <td>batchID+auto gen id</td>
                                                    <td><span class="text-success">Success</span></td>
                                                    <td><a href=""><i class="fa fa-eye"></i></a></td>
                                                   
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <th colspan="6"></th>
                                                <th>600</th>
                                                <th>100</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tfoot>
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

<?php include("./common/footer.php"); ?>