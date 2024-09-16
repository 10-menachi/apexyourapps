@extends('layouts.account')

@section('title', 'Notifications')

@section('content')
    <main class="content-wrapper">
        <div class="container py-5 mt-n2 mt-sm-0">
            <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">
                @include('components.account.sidebar')
                <div class="col-lg-9">
                    <div class="ps-lg-3 ps-xl-0">

                        <!-- Page title + Master switch -->
                        <div class="pb-3 mb-3 nav flex-nowrap align-items-center justify-content-between mb-lg-4">
                            <h1 class="mb-0 h2 me-3">Notifications</h1>
                            <div class="p-0 m-0 form-check form-switch nav-link animate-underline"
                                data-master-checkbox="{&quot;container&quot;: &quot;#notifications&quot;, &quot;label&quot;: &quot;Select all&quot;, &quot;labelChecked&quot;: &quot;Unselect all&quot;}">
                                <label for="notifications-master" class="form-check-label animate-target me-5">Unselect
                                    all</label>
                                <div class="ps-3">
                                    <input type="checkbox" class="form-check-input" id="notifications-master"
                                        checked="">
                                </div>
                            </div>
                        </div>


                        <!-- Notification switches list -->
                        <div class="gap-4 d-flex flex-column" id="notifications">
                            <div class="mb-0 form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="exclusive-offers">
                                <label class="form-check-label ps-2" for="exclusive-offers">
                                    <span class="mb-2 d-block h6">Exclusive offers</span>
                                    <span class="fs-sm">Receive alerts about exclusive discounts, promotions, and special
                                        offers tailored just for you.</span>
                                </label>
                            </div>
                            <div class="mb-0 form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="order-updates" checked="">
                                <label class="form-check-label ps-2" for="order-updates">
                                    <span class="mb-2 d-block h6">Order updates</span>
                                    <span class="fs-sm">Stay informed about the status of your orders, including
                                        confirmations, shipping updates, and delivery notifications.</span>
                                </label>
                            </div>
                            <div class="mb-0 form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="products-recommendations"
                                    checked="">
                                <label class="form-check-label ps-2" for="products-recommendations">
                                    <span class="mb-2 d-block h6">Product recommendations</span>
                                    <span class="fs-sm">Get personalized recommendations based on your browsing and
                                        purchase history to discover new products you'll love.</span>
                                </label>
                            </div>
                            <div class="mb-0 form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="restock">
                                <label class="form-check-label ps-2" for="restock">
                                    <span class="mb-2 d-block h6">Restock notifications</span>
                                    <span class="fs-sm">Be the first to know when out-of-stock items are back in
                                        inventory, ensuring you never miss out on your favorite products.</span>
                                </label>
                            </div>
                            <div class="mb-0 form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="events">
                                <label class="form-check-label ps-2" for="events">
                                    <span class="mb-2 d-block h6">Event reminders</span>
                                    <span class="fs-sm">Receive reminders about upcoming sales events, flash sales, or
                                        product launches to make sure you're always in the loop.</span>
                                </label>
                            </div>
                            <div class="mb-0 form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="account-security" checked="">
                                <label class="form-check-label ps-2" for="account-security">
                                    <span class="mb-2 d-block h6">Account security alerts</span>
                                    <span class="fs-sm">Receive notifications about any suspicious account activity or
                                        changes to your login credentials for enhanced security.</span>
                                </label>
                            </div>
                            <div class="mb-0 form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="support">
                                <label class="form-check-label ps-2" for="support">
                                    <span class="mb-2 d-block h6">Customer support updates</span>
                                    <span class="fs-sm">Get updates on any inquiries or support tickets you've submitted,
                                        ensuring timely resolution of any issues.</span>
                                </label>
                            </div>
                        </div>

                        <!-- Communication channels -->
                        <h2 class="pt-5 h6 mt-md-2">Communication channels</h2>
                        <div class="gap-2 d-flex flex-column">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="sms">
                                <label for="sms" class="form-check-label">SMS</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="whatsapp">
                                <label for="whatsapp" class="form-check-label">Messages in WhatsApp</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="email" checked="">
                                <label for="email" class="form-check-label">Email</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="push">
                                <label for="push" class="form-check-label">App push notifications</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.account.footer')
@endsection
