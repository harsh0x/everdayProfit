@include('user.header')
<!-- content start -->
@if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif

<!-- Display error alert if present -->
@if(session('error'))
    <div class="alert alert-danger mt-3">
        {{ session('error') }}
    </div>
@endif
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-person-fill fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2">User's Name</p>
                    <h6 class="mb-0">User's ID</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-wallet2 fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2">Income Wallet</p>
                    <h6 class="mb-0">$IncomeAmount</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-cash fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Income</p>
                    <h6 class="mb-0">$TotalIncomeAmount</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-person-lines-fill fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2">Direct Team</p>
                    <h6 class="mb-0">$DirectTeamAmount</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-handbag-fill fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Investment</p>
                    <h6 class="mb-0">$TotalInvestmentAmount</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-calendar2-date fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2">Daily Income</p>
                    <h6 class="mb-0">$DailyIncomeAmount</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-wallet2 fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2">Fund Wallet Balance</p>
                    <h6 class="mb-0">$FundWalletBalance</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-award fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Team Building Bonus</p>
                    <h6 class="mb-0">$TotalTeamBuildingBonus</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-lightning fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2">Automation Booster Income</p>
                    <h6 class="mb-0">$AutomationBoosterIncome</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-people fa-3x text-success"></i>
                <div class="ms-3">
                    <p class="mb-2">Monthly Direct Referral</p>
                    <h6 class="mb-0">$MonthlyDirectReferral</h6>
                </div>
            </div>
        </div>


        <!-- Footer End -->
    </div>
    <!-- Content End -->
    @include('user.footer')