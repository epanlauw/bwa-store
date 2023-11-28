<!-- Siderbar -->
<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
    </div>
    <div class="list-group list-group-flush">
        <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action">
            Dashboard
        </a>
        <a href="{{ route('dashboard-products') }}" class="list-group-item list-group-item-action">
            My Products
        </a>
        <a href="{{ route('dashboard-transactions') }}" class="list-group-item list-group-item-action">
            Transaction
        </a>
        <a href="{{ route('dashboard-settings-store') }}" class="list-group-item list-group-item-action">
            Store Settings
        </a>
        <a href="{{ route('dashboard-settings-account') }}" class="list-group-item list-group-item-action">
            My Account
        </a>
        <a href="{{ route('home') }}" class="list-group-item list-group-item-action">
            Sign Out
        </a>
    </div>
</div>