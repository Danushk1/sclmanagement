@extends('layouts.app')



@role('super_admin')

<div class="col-md-5 border-end">
    <div class="p-3 py-5">

        <div class="col-12 col-lg-2">
            <div class="row">
                <div class="col-12 align-items-start bg-dark vh-100">
                    <div class="row g-1 text-center">

                        <div class="col-12 mt-5">
                            <h4 class="text-white">name</h4>
                            <hr class="border border-1 border-white" />
                        </div>
                        <div class="nav flex-column nav-pills me-3 mt-3" role="tablist" aria-orientation="vertical">
                            <nav class="nav flex-column">
                                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                                <a class="nav-link" href="manageUsers.php">Manage Users</a>
                                <a class="nav-link" href="manageProduct.php">Manage Products</a>
                            </nav>
                        </div>
                        <div class="col-12 mt-5">
                            <hr class="border border-1 border-white" />
                            <a href="sellingHistory.php" class="text-white fw-bold fs-3">Selling History</a>
                            <hr class="border border-1 border-white" />
                        </div>
                        <div class="col-12 mt-3 d-grid">
                            <label class="form-label fs-6 fw-bold text-white">From Date</label>
                            <input type="date" class="form-control" />
                            <label class="form-label fs-6 fw-bold text-white mt-2">To Date</label>
                            <input type="date" class="form-control" />
                            <a href="#" class="btn btn-primary mt-2">Search</a>
                            <hr class="border border-1 border-white" />
                            <label class="form-label fs-6 fw-bold text-white">Daily Sellings</label>
                            <hr class="border border-1 border-white" />
                            <hr class="border border-1 border-white" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </div>
</div>


</div>

<div class="col-md-4 text-center">

</div>

</div>
</div>

</div>
</div>
@endrole