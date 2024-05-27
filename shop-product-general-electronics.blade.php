<x-www-app>


    <!-- Review form modal -->
    <div class="modal fade" id="reviewForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="reviewFormLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form class="modal-content needs-validation" novalidate>
          <div class="modal-header border-0">
            <h5 class="modal-title" id="reviewFormLabel">Leave a review</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-3 pt-0">
            <div class="mb-3">
              <label for="review-name" class="form-label">Your name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="review-name" required>
              <div class="invalid-feedback">Please enter your name!</div>
              <small class="form-text">Will be displayed on the comment.</small>
            </div>
            <div class="mb-3">
              <label for="review-email" class="form-label">Your email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="review-email" required>
              <div class="invalid-feedback">Please provide a valid email address!</div>
              <small class="form-text">Authentication only - we won't spam you.</small>
            </div>
            <div class="mb-3">
              <label class="form-label">Rating <span class="text-danger">*</span></label>
              <select class="form-select" data-select='{
                "placeholderValue": "Choose rating",
                "choices": [
                  {
                    "value": "",
                    "label": "Choose rating",
                    "placeholder": true
                  },
                  {
                    "value": "1",
                    "label": "<span class=\"visually-hidden\">1 star</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "1 star"
                    }
                  },
                  {
                    "value": "2",
                    "label": "<span class=\"visually-hidden\">2 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "2 stars"
                    }
                  },
                  {
                    "value": "3",
                    "label": "<span class=\"visually-hidden\">3 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "3 stars"
                    }
                  },
                  {
                    "value": "4",
                    "label": "<span class=\"visually-hidden\">4 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "4 stars"
                    }
                  },
                  {
                    "value": "5",
                    "label": "<span class=\"visually-hidden\">5 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "5 stars"
                    }
                  }
                ]
              }' data-select-template="true" required></select>
              <div class="invalid-feedback">Please choose your rating!</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="review-text">Review <span class="text-danger">*</span></label>
              <textarea class="form-control" rows="4" id="review-text" required></textarea>
              <div class="invalid-feedback">Please write a review!</div>
              <small class="form-text">Your review must be at least 50 characters.</small>
            </div>
            <div class="mb-3">
              <label class="form-label">Pros</label>
              <input type="text" class="form-select" data-select='{"placeholderValue": "Type and hit \"Enter\""}'>
            </div>
            <div>
              <label class="form-label">Cons</label>
              <input type="text" class="form-select" data-select='{"placeholderValue": "Type and hit \"Enter\""}'>
            </div>
          </div>
          <div class="modal-footer flex-nowrap gap-3 border-0 px-4">
            <button type="reset" class="btn btn-secondary w-100 m-0" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary w-100 m-0">Submit review</button>
          </div>
        </form>
      </div>
    </div>


    <!-- Shopping cart offcanvas -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

      <!-- Header -->
      <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
          <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$183</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
        <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
          <div class="progress-bar bg-warning rounded-pill" style="width: 75%"></div>
        </div>
      </div>

      <!-- Items -->
      <div class="offcanvas-body d-flex flex-column gap-4 pt-2">

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="#!">
            <img src="assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="#!">Apple iPhone 14 128GB White</a>
            </h5>
            <div class="h6 pb-1 mb-2">$899.00</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly>
                <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="position-relative flex-shrink-0" href="#!">
            <span class="badge text-bg-danger position-absolute top-0 start-0">-10%</span>
            <img src="assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="#!">Tablet Apple iPad Pro M2</a>
            </h5>
            <div class="h6 pb-1 mb-2">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del></div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly>
                <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="#!">
            <img src="assets/img/shop/electronics/thumbs/01.png" width="110" alt="Smart Watch">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="#!">Smart Watch Series 7, White</a>
            </h5>
            <div class="h6 pb-1 mb-2">$429.00</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly>
                <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="offcanvas-header flex-column align-items-start">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
          <span class="text-light-emphasis">Subtotal:</span>
          <span class="h6 mb-0">$2,317.00</span>
        </div>
        <div class="d-flex w-100 gap-3">
          <a class="btn btn-lg btn-secondary w-100" href="checkout-v1-cart">View cart</a>
          <a class="btn btn-lg btn-primary w-100" href="checkout-v1-delivery-1">Checkout</a>
        </div>
      </div>
    </div>


    <!-- Navigation bar (Page header) -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark d-block z-fixed p-0" data-sticky-navbar='{"offset": 500}'>
      <div class="container d-block py-1 py-lg-3" data-bs-theme="dark">
        <div class="navbar-stuck-hide pt-1"></div>
        <div class="row flex-nowrap align-items-center g-0">
          <div class="col col-lg-3 d-flex align-items-center">

            <!-- Mobile offcanvas menu toggler (Hamburger) -->
            <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar brand (Logo) -->
            <a href="home-electronics"class="navbar-brand me-0">
              <span class="d-none d-sm-flex flex-shrink-0 text-primary me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"><path d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z" fill="currentColor"/><g fill="#fff"><path d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z"/><use href="#czlogo"/><use href="#czlogo" x="8.516" y="-2.172"/></g><defs><path id="czlogo" d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z"/></defs></svg>
              </span>
              Cartzilla
            </a>
          </div>
          <div class="col col-lg-9 d-flex align-items-center justify-content-end">

            <!-- Search visible on screens > 991px wide (lg breakpoint) -->
            <div class="position-relative flex-fill d-none d-lg-block pe-4 pe-xl-5">
              <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg text-white ms-3"></i>
              <input type="search" class="form-control form-control-lg form-icon-start border-white rounded-pill" placeholder="Search the products">
            </div>

            <!-- Sale link visible on screens > 1200px wide (xl breakpoint) -->
            <a class="d-none d-xl-flex align-items-center text-decoration-none animate-shake navbar-stuck-hide me-3 me-xl-4 me-xxl-5" href="shop-catalog-electronics">
              <div class="btn btn-icon btn-lg fs-lg text-primary bg-body-secondary bg-opacity-75 pe-none rounded-circle">
                <i class="ci-percent animate-target"></i>
              </div>
              <div class="ps-2 text-nowrap">
                <div class="fs-xs text-body">Only this month</div>
                <div class="fw-medium text-white">Super Sale 20%</div>
              </div>
            </a>

            <!-- Button group -->
            <div class="d-flex align-items-center">

              <!-- Navbar stuck nav toggler -->
              <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3" data-bs-toggle="collapse" data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false" aria-label="Toggle navigation in navbar stuck state">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!-- Theme switcher (light/dark/auto) -->
              <div class="dropdown">
                <button type="button" class="theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
                  <span class="theme-icon-active d-flex animate-target">
                    <i class="ci-sun"></i>
                  </span>
                </button>
                <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
                  <li>
                    <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                      <span class="theme-icon d-flex fs-base me-2">
                        <i class="ci-sun"></i>
                      </span>
                      <span class="theme-label">Light</span>
                      <i class="item-active-indicator ci-check ms-auto"></i>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                      <span class="theme-icon d-flex fs-base me-2">
                        <i class="ci-moon"></i>
                      </span>
                      <span class="theme-label">Dark</span>
                      <i class="item-active-indicator ci-check ms-auto"></i>
                    </button>
                  </li>
                  <li>
                    <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                      <span class="theme-icon d-flex fs-base me-2">
                        <i class="ci-auto"></i>
                      </span>
                      <span class="theme-label">Auto</span>
                      <i class="item-active-indicator ci-check ms-auto"></i>
                    </button>
                  </li>
                </ul>
              </div>

              <!-- Search toggle button visible on screens < 992px wide (lg breakpoint) -->
              <button type="button" class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-lg-none" data-bs-toggle="collapse" data-bs-target="#searchBar" aria-expanded="false" aria-controls="searchBar" aria-label="Toggle search bar">
                <i class="ci-search animate-target"></i>
              </button>

              <!-- Account button visible on screens > 768px wide (md breakpoint) -->
              <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex" href="account-signin">
                <i class="ci-user animate-target"></i>
                <span class="visually-hidden">Account</span>
              </a>

              <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
              <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex" href="account-wishlist">
                <i class="ci-heart animate-target"></i>
                <span class="visually-hidden">Wishlist</span>
              </a>

              <!-- Cart button -->
              <button type="button" class="btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
                <span class="position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 border-dark rounded-pill" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
                <span class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                  <i class="ci-shopping-cart animate-target ms-n1"></i>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="navbar-stuck-hide pb-1"></div>
      </div>

      <!-- Search visible on screens < 992px wide (lg breakpoint). It is hidden inside collapse by default -->
      <div class="collapse position-absolute top-100 z-2 w-100 bg-dark d-lg-none" id="searchBar">
        <div class="container position-relative my-3" data-bs-theme="dark">
          <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg text-white ms-3"></i>
          <input type="search" class="form-control form-icon-start border-white rounded-pill" placeholder="Search the products" data-autofocus="collapse">
        </div>
      </div>

      <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <div class="collapse navbar-stuck-hide" id="stuckNav">
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
          <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body py-3 py-lg-0">
            <div class="container px-0 px-lg-3">
              <div class="row">

                <!-- Categories mega menu -->
                <div class="col-lg-3">
                  <div class="navbar-nav">
                    <div class="dropdown w-100">

                      <!-- Buttton visible on screens > 991px wide (lg breakpoint) -->
                      <div class="cursor-pointer d-none d-lg-block" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-theme="dark">
                        <a class="position-absolute top-0 start-0 w-100 h-100" href="shop-categories-electronics">
                          <span class="visually-hidden">Categories</span>
                        </a>
                        <button type="button" class="btn btn-lg btn-secondary dropdown-toggle w-100 rounded-bottom-0 justify-content-start pe-none">
                          <i class="ci-grid fs-lg"></i>
                          <span class="ms-2 me-auto">Categories</span>
                        </button>
                      </div>

                      <!-- Buttton visible on screens < 992px wide (lg breakpoint) -->
                      <button type="button" class="btn btn-lg btn-secondary dropdown-toggle w-100 justify-content-start d-lg-none mb-2" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="ci-grid fs-lg"></i>
                        <span class="ms-2 me-auto">Categories</span>
                      </button>

                      <!-- Mega menu -->
                      <ul class="dropdown-menu w-100 rounded-top-0 rounded-bottom-4 py-1 p-lg-1" style="--cz-dropdown-spacer: 0; --cz-dropdown-item-padding-y: .625rem; --cz-dropdown-item-spacer: 0">
                        <li class="d-lg-none pt-2">
                          <a class="dropdown-item fw-medium" href="shop-categories-electronics">
                            <i class="ci-grid fs-xl opacity-60 pe-1 me-2"></i>
                            All Categories
                            <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                          </a>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pt-2 pb-1 px-lg-2" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-computer fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Computers &amp; Accessories</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium text-wrap stretched-link d-lg-none">
                              <i class="ci-computer fs-xl opacity-60 pe-1 me-2"></i>
                              Computers &amp; Accessories
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Computers</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Laptops &amp; Tablets</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Desktop Computers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">External Components</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Interal Components</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Networking Products (NAS)</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Single Board Computers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Desktop Barebones</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Accessories</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Monitors</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bags, Cases &amp; Sleeves</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Batteries</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Charges &amp; Adapters</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cooling Pads</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Mounts</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Replacement Screens</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Security Locks</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Stands</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save up to $400</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Starts from <del>$1,599.00</del> $1,399.00</div>
                                    <div class="h2 mb-4">Surface Laptop Studio</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/01.png" width="252" alt="Surface Laptop Studio">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-smartphone-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Smartphones &amp; Tablets</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-smartphone-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Smartphones &amp; Tablets
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Smartphones</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Apple iPhone</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Google Pixel</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Android Smartphones</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Phablets</a>
                                  </li>
                                </ul>
                                <div class="d-flex w-100 pt-4">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Tablets</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Apple iPad</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Android Tablets</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Tablets with Keyboard</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Accessories</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Accessory Kits</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Batteries &amp; Battery Packs</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bags &amp; Cases</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cables</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Car Accessories</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Charges &amp; Power Adapters</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">FM Transmitters</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Lens Attachments</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Mounts &amp; Standsv</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Repair Kits</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Replacement Parts</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Styluses</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <i class="ci-apple fs-1 text-dark-emphasis mb-2"></i>
                                    <div class="fs-sm text-light-emphasis mb-2">Deal of the week</div>
                                    <div class="h2 mb-4">iPad Pro M1</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/02.png" width="252" alt="iPad Pro">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-monitor-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">TV, Video &amp; Audio</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-monitor-2 fs-xl opacity-60 pe-1 me-2"></i>
                              TV, Video &amp; Audio
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-lg-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">TV, Video &amp; Audio</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">TV Stes</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Home Theater Systems</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">DVD Players &amp; Recorders</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Blue-ray Players &amp; Recorders</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">HD DVD Players &amp; Recorders</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">DVD-VCR Combos</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">DTV Converters</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">AV Receivers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">AV Amplifiers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Projectors</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Projection Screens</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Satelite Television</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">TV-DTD Combos</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Sound Systems</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <ul class="nav flex-column gap-2 mt-2 mt-lg-0">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Home Cinema Systems</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Streaming Media Players</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">VCRs</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Video Glasses</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Lens Attachments</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Subwoofers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Sound Boosters</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <div class="fs-sm text-light-emphasis mb-2">Best deal! Save up to <span class="fw-semibold">$500</span></div>
                                    <div class="h2 mb-4">LG OLED 4K Smart TV</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/03.png" width="252" alt="Smart TV">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-speaker-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Speakers &amp; Home Music</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-speaker-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Speakers &amp; Home Music
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Speakers</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Smart Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bluetooth Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bookshelf Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Ceiling &amp; In-Wall Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Center-Channel Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Floorstanding Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Outdoor Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Satellite Speakers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Sound Bars</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Surround Sound Systems</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Home Audio</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Home Theater</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wireless &amp; Streaming Audio</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Stereo System Components</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Compact Radios &amp; Stereos</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Home Audio Accessories</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Subwoofers</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <i class="ci-google fs-2 text-dark-emphasis mb-3"></i>
                                    <div class="fs-sm text-light-emphasis mb-2">Deal of the week</div>
                                    <div class="h2 mb-4">Nest Audio</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/04.png" width="252" alt="Nest Audio">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-camera-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Cameras, Photo &amp; Video</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-camera-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Cameras, Photo &amp; Video
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Cameras &amp; Lenses</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Point &amp; Shoot Cameras</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">DSLR Cameras</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Mirrorless Cameras</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Body Mounted Cameras</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Camcorders</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Camcorder Lenses</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Camera Lenses</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Macro &amp; Ringlight Flashes</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Shoe Mount Flashes</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Tripods &amp; Monopods</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Video Studio</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Accessories</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bags &amp; Cases</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Binoculars &amp; Scopes</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Batteries &amp; Chargers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cables &amp; Cords</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Camcorder Accessories</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cleaning Equipment</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Protector Foils</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Filters &amp; Accessories</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Remote Controls</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Rain Covers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Viewfinders</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save up to $300</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Starts from <del>$1,100.00</del> 899.00</div>
                                    <div class="h2 mb-4">Canon Digital Cameras</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/05.png" width="252" alt="Canon Camera">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-printer-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Printers &amp; Ink</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-printer-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Printers &amp; Ink
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">By type</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">All-in-One</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Copying</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Faxing</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Photo Printing</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Printing Only</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Scanning</a>
                                  </li>
                                </ul>
                                <div class="d-flex w-100 pt-4">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Scanners</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Business Card Scanners</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Document Scanners</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Flatbed &amp; Photo Scanners</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Slide &amp; Negative Scanners</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Printers</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Dot Matrix Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Inkjet Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Label Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Laser Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Photo Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wide Format Printers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Plotter Printers</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <div class="fs-sm text-light-emphasis mb-2">Best deal! Save up to <span class="fw-semibold">$200</span></div>
                                    <div class="h2 mb-4">Epson Color Printers</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/06.png" width="252" alt="Epson Printer">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-battery-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Charging Stations</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-battery-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Charging Stations
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Charging Stations</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Portable Power Stations</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Inverter Power Stations</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Outdoor Generators</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Gasoline Generators</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cell Phone Chargers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Power Strips</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wall Charges</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Huge sale!</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Save up to <span class="fw-semibold">$350</span></div>
                                    <div class="h2 mb-4">Portable Power Stations</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/07.png" width="252" alt="Epson Printer">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-headphones-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Headphones</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-headphones-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Headphones
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Headphones</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Earbud Headphones</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Over-Ear Headphones</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">On-Ear Headphones</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Bluetooth Headphones</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Sports &amp; Fitness</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Noise-Cancelling</a>
                                  </li>
                                </ul>
                                <div class="d-flex w-100 pt-4">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Accessories</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cases &amp; Sleeves</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cables &amp; Cords</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Ear Pads</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Repair Kits</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Cleaning Equipment</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save up to $200</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Starts from $119.99</div>
                                    <div class="h2 mb-4">Wireless Headphones</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/08.png" width="252" alt="Wireless Headphones">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-watch-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Wearable Electronics</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-watch-2 fs-xl opacity-60 pe-1 me-2"></i>
                              Wearable Electronics
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Wearable Gadgets</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Smartwatches</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Fitness Trackers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Smart Glasses</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Rings</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Virtual Reality</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Clips, Arm &amp; Wristbands</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Accessories</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <i class="ci-google fs-2 text-dark-emphasis mb-3"></i>
                                    <div class="fs-sm text-light-emphasis mb-2">Deal of the week</div>
                                    <div class="h2 mb-4">Pixel Watch</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/09.png" width="252" alt="Pixel Watch">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-powerbank fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Powerbanks</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-powerbank fs-xl opacity-60 pe-1 me-2"></i>
                              Powerbanks
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Powerbanks</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Fast Charging</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Built In Cable</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Built In Wall Plug</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">LED Indicator Lights</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Pocket Size</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wireless Charging</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Short Circuit Protection</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Scratch Resistant</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Flashlight</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Lightweight</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <div class="fs-sm text-light-emphasis mb-2">Save up to <span class="fw-semibold">$50</span> on our</div>
                                    <div class="h2 mb-4">Powerbanks Deals</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/10.png" width="252" alt="Powerbank">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-1 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-hard-drive-2 fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">HDD/SSD Data Storage</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-hard-drive-2 fs-xl opacity-60 pe-1 me-2"></i>
                              HDD/SSD Data Storage
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Data Storage</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">External Hard Drives</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">External SSD</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">External Zip Drives</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Floppy &amp; Tape Drives</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Internal Hard Drives</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Internal SSD</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Network Attached Storage</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">USB Flash Drives</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save up to $100</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Starts from $89.99</div>
                                    <div class="h2 mb-4">Samsung SSD Deals</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/11.png" width="252" alt="SSD">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropend position-static">
                          <div class="position-relative rounded pb-2 px-lg-2" tabindex="0" data-bs-toggle="dropdown" data-bs-trigger="hover">
                            <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex" href="shop-catalog-electronics">
                              <i class="ci-game fs-xl opacity-60 pe-1 me-2"></i>
                              <span class="text-truncate">Video Games</span>
                              <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                            </a>
                            <div class="dropdown-item fw-medium stretched-link d-lg-none">
                              <i class="ci-game fs-xl opacity-60 pe-1 me-2"></i>
                              Video Games
                              <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                            </div>
                          </div>
                          <div class="dropdown-menu rounded-4 p-4" style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                            <div class="d-flex flex-column flex-lg-row h-100 gap-lg-4">
                              <div style="min-width: 194px">
                                <div class="d-flex w-100">
                                  <a class="animate-underline animate-target d-inline h6 text-dark-emphasis text-decoration-none text-truncate" href="shop-catalog-electronics">Games &amp; Hardware</a>
                                </div>
                                <ul class="nav flex-column gap-2 mt-n2">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Video Games</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">PlayStation 5</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">PlayStation 4</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Xbox Series X</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Xbox Series S</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Nintendo Switch</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Gaming PC</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Gaming Laptops</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wii U</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wii</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Nintendo 3DS</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Nintendo 2DS</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Nintendo DS</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Wii</a>
                                  </li>
                                </ul>
                              </div>
                              <div style="min-width: 194px">
                                <ul class="nav flex-column gap-2 mt-2 mt-lg-0">
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Mac</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">PlayStation Vita</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Sony PSP</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Retro Gaming</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Microconsoles</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Controllers</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Accessories</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Digital Games Screens</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Game Pass</a>
                                  </li>
                                  <li class="d-flex w-100 pt-1">
                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">PlayStation Plus</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="d-none d-lg-block">
                                <div class="d-none d-xl-block" style="width: 284px"></div>
                                <div class="d-xl-none" style="width: 240px"></div>
                                <div class="position-relative d-flex flex-column justify-content-center h-100 bg-body-secondary rounded-5 py-4 px-3">
                                  <div class="text-center px-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger fs-sm rounded-pill mb-2">Save $100</span>
                                    <div class="fs-sm text-light-emphasis mb-2">Starts from <del>$599.00</del> $499.00</div>
                                    <div class="h2 mb-4">Xbox Series X</div>
                                  </div>
                                  <img src="assets/img/mega-menu/electronics/12.png" width="252" alt="Xbox">
                                  <div class="text-center mt-4">
                                    <a class="btn btn-sm btn-primary stretched-link" href="shop-catalog-electronics">Shop now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                @include("www::shop1._include.topmenu")

              </div>
            </div>
          </div>
          <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
            <div class="nav nav-justified w-100">
              <a class="nav-link border-end" href="account-signin">
                <i class="ci-user fs-lg opacity-60 me-2"></i>
                Account
              </a>
              <a class="nav-link" href="account-wishlist">
                <i class="ci-heart fs-lg opacity-60 me-2"></i>
                Wishlist
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>


    <!-- Page content -->
    <main class="content-wrapper">

      <!-- Breadcrumb -->
      <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-electronics">Home</a></li>
          <li class="breadcrumb-item"><a href="shop-catalog-electronics">Shop</a></li>
          <li class="breadcrumb-item active" aria-current="page">Product page</li>
        </ol>
      </nav>


      <!-- Page title -->
      <h1 class="h3 container mb-4">Apple iPhone 14 Plus 128GB Blue</h1>


      <!-- Nav links + Reviews -->
      <section class="container pb-2 pb-lg-4">
        <div class="d-flex align-items-center border-bottom">
          <ul class="nav nav-underline flex-nowrap gap-4">
            <li class="nav-item me-sm-2">
              <a class="nav-link pe-none active" href="#!">General info</a>
            </li>
            <li class="nav-item me-sm-2">
              <a class="nav-link" href="shop-product-details-electronics">Product details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop-product-reviews-electronics">Reviews (68)</a>
            </li>
          </ul>
          <a class="d-none d-md-flex align-items-center gap-2 text-decoration-none ms-auto mb-1" href="#reviews">
            <div class="d-flex gap-1 fs-sm">
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-half text-warning"></i>
            </div>
            <span class="text-body-tertiary fs-xs">68 reviews</span>
          </a>
        </div>
      </section>


      <!-- Gallery + Product options -->
      <section class="container pb-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
        <div class="row">

          <!-- Product gallery -->
          <div class="col-md-6">

            <!-- Preview (Large image) -->
            <div class="swiper" data-swiper='{
              "loop": true,
              "navigation": {
                "prevEl": ".btn-prev",
                "nextEl": ".btn-next"
              },
              "thumbs": {
                "swiper": "#thumbs"
              }
            }'>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="ratio ratio-1x1">
                    <img src="assets/img/shop/electronics/product/gallery/01.png" data-zoom="assets/img/shop/electronics/product/gallery/01.png" data-zoom-options='{
                      "paneSelector": "#zoomPane",
                      "inlinePane": 768,
                      "hoverDelay": 500,
                      "touchDisable": true
                    }' alt="Preview">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="ratio ratio-1x1">
                    <img src="assets/img/shop/electronics/product/gallery/02.png" data-zoom="assets/img/shop/electronics/product/gallery/02.png" data-zoom-options='{
                      "paneSelector": "#zoomPane",
                      "inlinePane": 768,
                      "hoverDelay": 500,
                      "touchDisable": true
                    }' alt="Preview">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="ratio ratio-1x1">
                    <img src="assets/img/shop/electronics/product/gallery/03.png" data-zoom="assets/img/shop/electronics/product/gallery/03.png" data-zoom-options='{
                      "paneSelector": "#zoomPane",
                      "inlinePane": 768,
                      "hoverDelay": 500,
                      "touchDisable": true
                    }' alt="Preview">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="ratio ratio-1x1">
                    <img src="assets/img/shop/electronics/product/gallery/04.png" data-zoom="assets/img/shop/electronics/product/gallery/04.png" data-zoom-options='{
                      "paneSelector": "#zoomPane",
                      "inlinePane": 768,
                      "hoverDelay": 500,
                      "touchDisable": true
                    }' alt="Preview">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="ratio ratio-1x1">
                    <img src="assets/img/shop/electronics/product/gallery/05.png" data-zoom="assets/img/shop/electronics/product/gallery/05.png" data-zoom-options='{
                      "paneSelector": "#zoomPane",
                      "inlinePane": 768,
                      "hoverDelay": 500,
                      "touchDisable": true
                    }' alt="Preview">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="ratio ratio-1x1">
                    <img src="assets/img/shop/electronics/product/gallery/06.png" data-zoom="assets/img/shop/electronics/product/gallery/06.png" data-zoom-options='{
                      "paneSelector": "#zoomPane",
                      "inlinePane": 768,
                      "hoverDelay": 500,
                      "touchDisable": true
                    }' alt="Preview">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="ratio ratio-1x1">
                    <img src="assets/img/shop/electronics/product/gallery/07.png" data-zoom="assets/img/shop/electronics/product/gallery/07.png" data-zoom-options='{
                      "paneSelector": "#zoomPane",
                      "inlinePane": 768,
                      "hoverDelay": 500,
                      "touchDisable": true
                    }' alt="Preview">
                  </div>
                </div>
              </div>

              <!-- Prev button -->
              <div class="position-absolute top-50 start-0 z-2 translate-middle-y ms-sm-2 ms-lg-3">
                <button type="button" class="btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start" aria-label="Prev">
                  <i class="ci-chevron-left fs-lg animate-target"></i>
                </button>
              </div>

              <!-- Next button -->
              <div class="position-absolute top-50 end-0 z-2 translate-middle-y me-sm-2 me-lg-3">
                <button type="button" class="btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
                  <i class="ci-chevron-right fs-lg animate-target"></i>
                </button>
              </div>
            </div>

            <!-- Thumbnails -->
            <div class="swiper swiper-load swiper-thumbs pt-2 mt-1" id="thumbs" data-swiper='{
              "loop": true,
              "spaceBetween": 12,
              "slidesPerView": 3,
              "watchSlidesProgress": true,
              "breakpoints": {
                "340": {
                  "slidesPerView": 4
                },
                "500": {
                  "slidesPerView": 5
                },
                "600": {
                  "slidesPerView": 6
                },
                "768": {
                  "slidesPerView": 4
                },
                "992": {
                  "slidesPerView": 5
                },
                "1200": {
                  "slidesPerView": 6
                }
              }
            }'>
              <div class="swiper-wrapper">
                <div class="swiper-slide swiper-thumb">
                  <div class="ratio ratio-1x1" style="max-width: 94px">
                    <img src="assets/img/shop/electronics/product/gallery/th01.png" class="swiper-thumb-img" alt="Thumbnail">
                  </div>
                </div>
                <div class="swiper-slide swiper-thumb">
                  <div class="ratio ratio-1x1" style="max-width: 94px">
                    <img src="assets/img/shop/electronics/product/gallery/th02.png" class="swiper-thumb-img" alt="Thumbnail">
                  </div>
                </div>
                <div class="swiper-slide swiper-thumb">
                  <div class="ratio ratio-1x1" style="max-width: 94px">
                    <img src="assets/img/shop/electronics/product/gallery/th03.png" class="swiper-thumb-img" alt="Thumbnail">
                  </div>
                </div>
                <div class="swiper-slide swiper-thumb">
                  <div class="ratio ratio-1x1" style="max-width: 94px">
                    <img src="assets/img/shop/electronics/product/gallery/th04.png" class="swiper-thumb-img" alt="Thumbnail">
                  </div>
                </div>
                <div class="swiper-slide swiper-thumb">
                  <div class="ratio ratio-1x1" style="max-width: 94px">
                    <img src="assets/img/shop/electronics/product/gallery/th05.png" class="swiper-thumb-img" alt="Thumbnail">
                  </div>
                </div>
                <div class="swiper-slide swiper-thumb">
                  <div class="ratio ratio-1x1" style="max-width: 94px">
                    <img src="assets/img/shop/electronics/product/gallery/th06.png" class="swiper-thumb-img" alt="Thumbnail">
                  </div>
                </div>
                <div class="swiper-slide swiper-thumb">
                  <div class="ratio ratio-1x1" style="max-width: 94px">
                    <img src="assets/img/shop/electronics/product/gallery/th07.png" class="swiper-thumb-img" alt="Thumbnail">
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Product options -->
          <div class="col-md-6 col-xl-5 offset-xl-1 pt-4">
            <div class="ps-md-4 ps-xl-0">
              <div class="position-relative" id="zoomPane">

                <!-- Model -->
                <div class="pb-3 mb-2 mb-lg-3">
                  <label class="form-label fw-semibold pb-1 mb-2">Model</label>
                  <div class="d-flex flex-wrap gap-2">
                    <input type="radio" class="btn-check" name="model-options" id="gb-64">
                    <label for="gb-64" class="btn btn-sm btn-outline-secondary">64 GB</label>
                    <input type="radio" class="btn-check" name="model-options" id="gb-128" checked>
                    <label for="gb-128" class="btn btn-sm btn-outline-secondary">128 GB</label>
                    <input type="radio" class="btn-check" name="model-options" id="gb-256">
                    <label for="gb-256" class="btn btn-sm btn-outline-secondary">256 GB</label>
                    <input type="radio" class="btn-check" name="model-options" id="gb-512">
                    <label for="gb-512" class="btn btn-sm btn-outline-secondary">512 GB</label>
                  </div>
                </div>

                <!-- Color -->
                <div class="pb-3 mb-2 mb-lg-3">
                  <label class="form-label fw-semibold pb-1 mb-2">Color: <span class="text-body fw-normal" id="colorOption">Gray blue</span></label>
                  <div class="d-flex flex-wrap gap-2" data-binded-label="#colorOption">
                    <input type="radio" class="btn-check" name="color-options" id="color-1" checked>
                    <label for="color-1" class="btn btn-color fs-xl" data-label="Gray blue" style="color: #5a7aa1">
                      <span class="visually-hidden">Gray blue</span>
                    </label>
                    <input type="radio" class="btn-check" name="color-options" id="color-2">
                    <label for="color-2" class="btn btn-color fs-xl" data-label="Pink" style="color: #ee7976">
                      <span class="visually-hidden">Pink</span>
                    </label>
                    <input type="radio" class="btn-check" name="color-options" id="color-3">
                    <label for="color-3" class="btn btn-color fs-xl" data-label="Light blue" style="color: #9acbf1">
                      <span class="visually-hidden">Light blue</span>
                    </label>
                    <input type="radio" class="btn-check" name="color-options" id="color-4">
                    <label for="color-4" class="btn btn-color fs-xl" data-label="Green" style="color: #8cd1ab">
                      <span class="visually-hidden">Green</span>
                    </label>
                  </div>
                </div>

                <!-- Price -->
                <div class="d-flex flex-wrap align-items-center mb-3">
                  <div class="h4 mb-0 me-3">$940.00</div>
                  <div class="d-flex align-items-center text-success fs-sm ms-auto">
                    <i class="ci-check-circle fs-base me-2"></i>
                    Available to order
                  </div>
                </div>

                <!-- Count + Buttons -->
                <div class="d-flex flex-wrap flex-sm-nowrap flex-md-wrap flex-lg-nowrap gap-3 gap-lg-2 gap-xl-3 mb-4">
                  <div class="count-input flex-shrink-0 order-sm-1">
                    <button type="button" class="btn btn-icon btn-lg" data-decrement aria-label="Decrement quantity">
                      <i class="ci-minus"></i>
                    </button>
                    <input type="number" class="form-control form-control-lg" value="1" min="1" max="5" readonly>
                    <button type="button" class="btn btn-icon btn-lg" data-increment aria-label="Increment quantity">
                      <i class="ci-plus"></i>
                    </button>
                  </div>
                  <button type="button" class="btn btn-icon btn-lg btn-secondary animate-pulse order-sm-3 order-md-2 order-lg-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Add to Wishlist" aria-label="Add to Wishlist">
                    <i class="ci-heart fs-lg animate-target"></i>
                  </button>
                  <button type="button" class="btn btn-icon btn-lg btn-secondary animate-rotate order-sm-4 order-md-3 order-lg-4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Compare" aria-label="Compare">
                    <i class="ci-refresh-cw fs-lg animate-target"></i>
                  </button>
                  <button type="button" class="btn btn-lg btn-primary w-100 animate-slide-end order-sm-2 order-md-4 order-lg-2">
                    <i class="ci-shopping-cart fs-lg animate-target ms-n1 me-2"></i>
                    Add to cart
                  </button>
                </div>

                <!-- Features -->
                <div class="d-flex flex-wrap gap-3 gap-xl-4 pb-4 pb-lg-5 mb-2 mb-lg-0 mb-xl-2">
                  <div class="d-flex align-items-center fs-sm">
                    <svg class="text-warning me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"><path d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z"/><path d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z"/><path d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z"/></svg>
                    <div class="text-body-emphasis text-nowrap"><span class="fw-semibold">+32</span> bonuses</div>
                  </div>
                  <div class="d-flex align-items-center fs-sm">
                    <svg class="text-primary me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path d="M15.264 8.001l.702-1.831a.5.5 0 0 0-.152-.568l-1.522-1.234-.308-1.937a.5.5 0 0 0-.416-.415l-1.937-.308L10.399.185a.5.5 0 0 0-.567-.152L8 .736 6.169.034a.5.5 0 0 0-.567.152L4.368 1.709l-1.937.308a.5.5 0 0 0-.415.415l-.308 1.937L.185 5.603a.5.5 0 0 0-.152.567l.702 1.831-.702 1.831a.5.5 0 0 0 .152.567l1.523 1.233.308 1.937a.5.5 0 0 0 .415.416l1.937.308 1.234 1.522c.137.17.366.23.568.152L8 15.265l1.831.702a.5.5 0 0 0 .568-.153l1.233-1.522 1.937-.308a.5.5 0 0 0 .416-.416l.308-1.937 1.522-1.233a.5.5 0 0 0 .152-.567l-.702-1.831z" fill="currentColor"/><path d="M6.5 7.001a1.5 1.5 0 1 1 0-3 1.5 1.5 0 1 1 0 3zm0-2a.5.5 0 1 0 0 1 .5.5 0 1 0 0-1zM9.5 12a1.5 1.5 0 1 1 0-3 1.5 1.5 0 1 1 0 3zm0-2a.5.5 0 1 0 0 1 .5.5 0 1 0 0-1zm-4 2c-.101 0-.202-.03-.29-.093a.5.5 0 0 1-.116-.698l5-7a.5.5 0 1 1 .814.581l-5 7A.5.5 0 0 1 5.5 12z" fill="white"/></svg>
                    <div class="text-body-emphasis text-nowrap">Interest-free loan</div>
                  </div>
                  <div class="d-flex align-items-center fs-sm">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path class="text-success" d="M7.42169 1.15662C3.3228 1.15662 0 4.47941 0 8.5783C0 12.6772 3.3228 16 7.42169 16C11.5206 16 14.8434 12.6772 14.8434 8.5783H7.42169V1.15662Z" fill="currentColor"/><path class="text-info" d="M8.57812 0V7.42169H15.9998C15.9998 3.3228 12.677 0 8.57812 0Z" fill="currentColor"/><defs><rect width="16" height="16" fill="white"/></defs></svg>
                    <div class="text-body-emphasis text-nowrap">Pay by installments</div>
                  </div>
                </div>
              </div>

              <!-- Shipping options -->
              <div class="d-flex align-items-center pb-2">
                <h3 class="h6 mb-0">Shipping options</h3>
                <a class="btn btn-sm btn-secondary ms-auto" href="#!">
                  <i class="ci-map-pin fs-sm ms-n1 me-1"></i>
                  Find local store
                </a>
              </div>
              <table class="table table-borderless fs-sm mb-2">
                <tbody>
                  <tr>
                    <td class="py-2 ps-0">Pickup from the store</td>
                    <td class="py-2">Today</td>
                    <td class="text-body-emphasis fw-semibold text-end py-2 pe-0">Free</td>
                  </tr>
                  <tr>
                    <td class="py-2 ps-0">Pickup from postal offices</td>
                    <td class="py-2">Tomorrow</td>
                    <td class="text-body-emphasis fw-semibold text-end py-2 pe-0">$25.00</td>
                  </tr>
                  <tr>
                    <td class="py-2 ps-0">Delivery by courier</td>
                    <td class="py-2">2-3 days</td>
                    <td class="text-body-emphasis fw-semibold text-end py-2 pe-0">$35.00</td>
                  </tr>
                </tbody>
              </table>

              <!-- Warranty + Payment info accordion -->
              <div class="accordion" id="infoAccordion">
                <div class="accordion-item border-top">
                  <h3 class="accordion-header" id="headingWarranty">
                    <button type="button" class="accordion-button animate-underline collapsed" data-bs-toggle="collapse" data-bs-target="#warranty" aria-expanded="false" aria-controls="warranty">
                      <span class="animate-target me-2">Warranty information</span>
                    </button>
                  </h3>
                  <div class="accordion-collapse collapse" id="warranty" aria-labelledby="headingWarranty" data-bs-parent="#infoAccordion">
                    <div class="accordion-body">
                      <div class="alert d-flex alert-info mb-3" role="alert">
                        <i class="ci-check-shield fs-xl mt-1 me-2"></i>
                        <div class="fs-sm"><span class="fw-semibold">Warranty:</span> 12 months of official manufacturer's warranty. Exchange/return of the product within 14 days.</div>
                      </div>
                      <p class="mb-0">Explore the details of our <a class="fw-medium" href="#!">product warranties here</a>, including duration, coverage, and any additional protection plans available. We prioritize your satisfaction, and our warranty information is designed to keep you informed and confident in your purchase.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingPayment">
                    <button type="button" class="accordion-button animate-underline collapsed" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                      <span class="animate-target me-2">Payment and credit</span>
                    </button>
                  </h3>
                  <div class="accordion-collapse collapse" id="payment" aria-labelledby="headingPayment" data-bs-parent="#infoAccordion">
                    <div class="accordion-body">Experience hassle-free transactions with our <a class="fw-medium" href="#!">flexible payment options</a> and credit facilities. Learn more about the various payment methods accepted, installment plans, and any exclusive credit offers available to make your shopping experience seamless.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Sticky product preview + Add to cart CTA -->
      <section class="sticky-product-banner sticky-top d-md-none" data-sticky-element>
        <div class="sticky-product-banner-inner pt-5">
          <div class="bg-body border-bottom border-light border-opacity-10 shadow pt-4 pb-2">
            <div class="container d-flex align-items-center">
              <div class="d-flex align-items-center min-w-0 ms-n2 me-3">
                <div class="ratio ratio-1x1 flex-shrink-0" style="width: 50px">
                  <img src="assets/img/shop/electronics/thumbs/10.png" alt="iPhone 14">
                </div>
                <div class="w-100 min-w-0 ps-2">
                  <h4 class="fs-sm fw-medium text-truncate mb-1">Apple iPhone 14 Plus 128GB Blue</h4>
                  <div class="h6 mb-0">$940.00</div>
                </div>
              </div>
              <div class="d-flex gap-2 ms-auto">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse" aria-label="Add to Wishlist">
                  <i class="ci-heart fs-base animate-target"></i>
                </button>
                <button type="button" class="btn btn-primary animate-slide-end d-none d-sm-inline-flex">
                  <i class="ci-shopping-cart fs-base animate-target ms-n1 me-2"></i>
                  Add to cart
                </button>
                <button type="button" class="btn btn-icon btn-primary animate-slide-end d-sm-none" aria-label="Add to Cart">
                  <i class="ci-shopping-cart fs-lg animate-target"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Bundle discount (Cheaper together) -->
      <section class="container pb-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
        <div class="bg-body-tertiary rounded-5 pt-5">
          <h2 class="h3 text-center pb-2 py-lg-3">Cheaper together</h2>
          <div class="row justify-content-center px-4 px-md-0">
            <div class="col-md-10">
              <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false">
                <div class="d-flex align-items-center justify-content-between pb-4 mb-2" style="min-width: 840px">

                  <!-- Item -->
                  <div class="w-100" style="max-width: 306px">
                    <div class="form-check position-relative p-0 m-0 mb-3">
                      <input type="checkbox" class="form-check-input position-absolute top-0 end-0 mt-3 me-3" id="iphone" checked disabled>
                      <label for="iphone" class="d-flex justify-content-center bg-body rounded p-3">
                        <span class="ratio d-block" style="max-width: 258px; --cz-aspect-ratio: calc(240 / 258 * 100%)">
                          <img src="assets/img/shop/electronics/14.png" alt="iPhone 14">
                        </span>
                      </label>
                    </div>
                    <h3 class="mb-2">
                      <a class="d-block fs-sm fw-medium animate-underline text-truncate" href="#!">
                        <span class="animate-target">Apple iPhone 14 128GB White</span>
                      </a>
                    </h3>
                    <div class="h6 mb-0">$940.00</div>
                  </div>

                  <div class="ci-plus fs-4 mt-n5 mx-3 mx-lg-4"></div>

                  <!-- Item -->
                  <div class="w-100" style="max-width: 306px">
                    <div class="form-check position-relative p-0 m-0 mb-3">
                      <input type="checkbox" class="form-check-input position-absolute top-0 end-0 mt-3 me-3" id="airpods" checked>
                      <label for="airpods" class="d-flex justify-content-center bg-body rounded p-3">
                        <span class="ratio d-block" style="max-width: 258px; --cz-aspect-ratio: calc(240 / 258 * 100%)">
                          <img src="assets/img/shop/electronics/06.png" alt="AirPods 2 Pro">
                        </span>
                      </label>
                    </div>
                    <h3 class="mb-2">
                      <a class="d-block fs-sm fw-medium animate-underline text-truncate" href="#!">
                        <span class="animate-target">Headphones Apple AirPods 2 Pro</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center gap-2">
                      <span class="badge bg-danger">-32%</span>
                      <span class="h6 mb-0">$224.00</span>
                      <del class="text-body-tertiary fs-xs">$330.00</del>
                    </div>
                  </div>

                  <div class="ci-plus fs-4 mt-n5 mx-3 mx-lg-4"></div>

                  <!-- Item -->
                  <div class="w-100" style="max-width: 306px">
                    <div class="form-check position-relative p-0 m-0 mb-3">
                      <input type="checkbox" class="form-check-input position-absolute top-0 end-0 mt-3 me-3" id="charger">
                      <label for="charger" class="d-flex justify-content-center bg-body rounded p-3">
                        <span class="ratio d-block" style="max-width: 258px; --cz-aspect-ratio: calc(240 / 258 * 100%)">
                          <img src="assets/img/shop/electronics/15.png" alt="Wireless charger">
                        </span>
                      </label>
                    </div>
                    <h3 class="mb-2">
                      <a class="d-block fs-sm fw-medium animate-underline text-truncate" href="#!">
                        <span class="animate-target">Wireless charger for iPhone</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center gap-2">
                      <span class="badge bg-danger">-48%</span>
                      <span class="h6 mb-0">$26.00</span>
                      <del class="text-body-tertiary fs-xs">$50.00</del>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-0">
          <div class="row justify-content-center p-4 px-md-0">
            <div class="col-md-10 d-md-flex align-items-center py-md-3">
              <div class="fs-sm me-3 mb-3 mb-md-0">Total for selected products</div>
              <div class="d-flex align-items-center ms-auto">
                <span class="h5 mb-0 me-4">$1,164.00</span>
                <button type="button" class="btn btn-primary ms-auto">Purchase together</button>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Trending products (Carousel) -->
      <section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">
        <h2 class="h3 border-bottom pb-4 mb-0">Trending products</h2>

        <!-- Product carousel -->
        <div class="position-relative mx-md-1">

          <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
          <button type="button" class="trending-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle-y ms-n1 d-none d-sm-inline-flex" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="trending-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 end-0 z-2 translate-middle-y me-n1 d-none d-sm-inline-flex" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>

          <!-- Slider -->
          <div class="swiper py-4 px-sm-3" data-swiper='{
            "slidesPerView": 2,
            "spaceBetween": 24,
            "loop": true,
            "navigation": {
              "prevEl": ".trending-prev",
              "nextEl": ".trending-next"
            },
            "breakpoints": {
              "768": {
                "slidesPerView": 3
              },
              "992": {
                "slidesPerView": 4
              }
            }
          }'>
            <div class="swiper-wrapper">

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <span class="badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">-21%</span>
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/01.png" alt="VR Glasses">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star text-body-tertiary opacity-75"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(123)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">VRB01 Virtual Reality Glasses</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$340.99 <del class="text-body-tertiary fs-sm fw-normal">$430.00</del></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/02.png" alt="iPhone 14">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-half text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(142)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Apple iPhone 14 128GB White</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$899.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/03.png" alt="Smart Watch">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(67)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Smart Watch Series 7, White</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                      <div class="h5 lh-1 mb-0">$429.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <span class="badge bg-info position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">New</span>
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/04.png" alt="MacBook">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-half text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(51)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Laptop Apple MacBook Pro 13 M2</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$1,200.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="posittion-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/08.png" alt="Bluetooth Headphones">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-half text-warning"></i>
                        <i class="ci-star text-body-tertiary opacity-75"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(136)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Wireless Bluetooth Headphones Sony</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$299.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- External slider prev/next buttons visible on screens < 500px wide (sm breakpoint) -->
          <div class="d-flex justify-content-center gap-2 mt-n2 mb-3 pb-1 d-sm-none">
            <button type="button" class="trending-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1" aria-label="Prev">
              <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" class="trending-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
              <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>
          </div>
        </div>
      </section>


      <!-- Product details and Reviews shared container -->
      <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
        <div class="row">
          <div class="col-md-7">

            <!-- Product details -->
            <h2 class="h3 pb-2 pb-md-3">Product details</h2>
            <h3 class="h6">General specs</h3>
            <ul class="list-unstyled d-flex flex-column gap-3 fs-sm pb-3 m-0 mb-2 mb-sm-3">
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Model:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">iPhone 14 Plus</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Manufacturer:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Apple Inc.</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Finish:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Ceramic, Glass, Aluminium</span>
                <i class="ci-info fs-base text-body-tertiary position-absolute top-50 end-0 translate-middle-y" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-custom-class="popover-sm" data-bs-content="Ceramic shield front, Glass back and Aluminium design"></i>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Capacity:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">128GB</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Chip:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">A15 Bionic chip</span>
              </li>
            </ul>
            <h3 class="h6">Display</h3>
            <ul class="list-unstyled d-flex flex-column gap-3 fs-sm pb-1 m-0 mb-2 mb-sm-3">
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Diagonal:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">6.1"</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Screen type:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Super Retina XDR</span>
                <i class="ci-info fs-base text-body-tertiary position-absolute top-50 end-0 translate-middle-y" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-custom-class="popover-sm" data-bs-content="HDR display, True Tone, Wide color (P3), Haptic Touch, 800 nits brightness"></i>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Resolution:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">2778x1284px at 458ppi</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Refresh rate:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">120 Hz</span>
              </li>
            </ul>
            <div class="nav">
              <a class="nav-link text-primary animate-underline px-0" href="shop-product-details-electronics">
                <span class="animate-target">See all product details</span>
                <i class="ci-chevron-right fs-base ms-1"></i>
              </a>
            </div>


            <!-- Reviews -->
            <div class="d-flex align-items-center pt-5 mb-4 mt-2 mt-md-3 mt-lg-4" id="reviews" style="scroll-margin-top: 80px">
              <h2 class="h3 mb-0">Reviews</h2>
              <button type="button" class="btn btn-secondary ms-auto" data-bs-toggle="modal" data-bs-target="#reviewForm">
                <i class="ci-edit-3 fs-base ms-n1 me-2"></i>
                Leave a review
              </button>
            </div>

            <!-- Reviews stats -->
            <div class="row g-4 pb-3">
              <div class="col-sm-4">

                <!-- Overall rating card -->
                <div class="d-flex flex-column align-items-center justify-content-center h-100 bg-body-tertiary rounded p-4">
                  <div class="h1 pb-2 mb-1">4.1</div>
                  <div class="hstack justify-content-center gap-1 fs-sm mb-2">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-60"></i>
                  </div>
                  <div class="fs-sm">68 reviews</div>
                </div>
              </div>
              <div class="col-sm-8">

                <!-- Rating breakdown by quantity -->
                <div class="vstack gap-3">

                  <!-- 5 stars -->
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      5<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Five stars" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 54%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">37</div>
                  </div>

                  <!-- 4 stars -->
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      4<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Four stars" aria-valuenow="23.5" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 23.5%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">16</div>
                  </div>

                  <!-- 3 stars -->
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      3<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Three stars" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 13%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">9</div>
                  </div>

                  <!-- 2 stars -->
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      2<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Two stars" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 6%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">4</div>
                  </div>

                  <!-- 1 star -->
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      1<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="One star" aria-valuenow="3.5" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 3.5%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">3</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review -->
            <div class="border-bottom py-3 mb-3">
              <div class="d-flex align-items-center mb-3">
                <div class="text-nowrap me-3">
                  <span class="h6 mb-0">Rafael Marquez</span>
                  <i class="ci-check-circle text-success align-middle ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Verified customer"></i>
                </div>
                <span class="text-body-secondary fs-sm ms-auto">June 28, 2024</span>
              </div>
              <div class="d-flex gap-1 fs-sm pb-2 mb-1">
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
              </div>
              <ul class="list-inline gap-2 pb-2 mb-1">
                <li class="fs-sm me-4"><span class="text-dark-emphasis fw-medium">Color:</span> Blue</li>
                <li class="fs-sm"><span class="text-dark-emphasis fw-medium">Model:</span> 128GB</li>
              </ul>
              <p class="fs-sm">The phone has a new A15 Bionic chip, which makes it lightning-fast and responsive. The camera system has also been upgraded, and it now includes a 12-megapixel ultra-wide lens and a 12-megapixel wide lens.</p>
              <ul class="list-unstyled fs-sm pb-2 mb-1">
                <li><span class="text-dark-emphasis fw-medium">Pros:</span> Powerful A15 Bionic chip, improved camera</li>
                <li><span class="text-dark-emphasis fw-medium">Cons:</span> High price tag</li>
              </ul>
              <div class="nav align-items-center">
                <button type="button" class="nav-link animate-underline px-0">
                  <i class="ci-corner-down-right fs-base ms-1 me-1"></i>
                  <span class="animate-target">Reply</span>
                </button>
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-auto me-n1">
                  <i class="ci-thumbs-up fs-base animate-target me-1"></i>
                  0
                </button>
                <hr class="vr my-2 mx-3">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                  <i class="ci-thumbs-down fs-base animate-target me-1"></i>
                  0
                </button>
              </div>
            </div>

            <!-- Review -->
            <div class="border-bottom py-3 mb-3">
              <div class="d-flex align-items-center mb-3">
                <div class="text-nowrap me-3">
                  <span class="h6 mb-0">Daniel Adams</span>
                </div>
                <span class="text-body-secondary fs-sm ms-auto">May 15, 2024</span>
              </div>
              <div class="d-flex gap-1 fs-sm pb-2 mb-1">
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star text-body-tertiary opacity-75"></i>
              </div>
              <ul class="list-inline gap-2 pb-2 mb-1">
                <li class="fs-sm me-4"><span class="text-dark-emphasis fw-medium">Color:</span> Blue</li>
                <li class="fs-sm"><span class="text-dark-emphasis fw-medium">Model:</span> 128GB</li>
              </ul>
              <p class="fs-sm">The phone has a new A15 Bionic chip, which makes it lightning-fast and responsive. The camera system has also been upgraded, and it now includes a 12-megapixel ultra-wide lens and a 12-megapixel wide lens.</p>
              <ul class="list-unstyled fs-sm pb-2 mb-1">
                <li><span class="text-dark-emphasis fw-medium">Pros:</span> Powerful A15 Bionic chip, improved camera</li>
                <li><span class="text-dark-emphasis fw-medium">Cons:</span> High price tag</li>
              </ul>
              <div class="nav align-items-center">
                <button type="button" class="nav-link animate-underline px-0">
                  <i class="ci-corner-down-right fs-base ms-1 me-1"></i>
                  <span class="animate-target">Reply</span>
                </button>
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-auto me-n1">
                  <i class="ci-thumbs-up text-success fs-base animate-target me-1"></i>
                  18
                </button>
                <hr class="vr my-2 mx-3">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                  <i class="ci-thumbs-down text-danger fs-base animate-target me-1"></i>
                  2
                </button>
              </div>
            </div>

            <div class="nav">
              <a class="nav-link text-primary animate-underline px-0" href="shop-product-reviews-electronics">
                <span class="animate-target">See all reviews</span>
                <i class="ci-chevron-right fs-base ms-1"></i>
              </a>
            </div>
          </div>


          <!-- Sticky product preview visible on screens > 991px wide (lg breakpoint) -->
          <aside class="col-md-5 col-xl-4 offset-xl-1 d-none d-md-block" style="margin-top: -100px">
            <div class="position-sticky top-0 ps-3 ps-lg-4 ps-xl-0" style="padding-top: 100px">
              <div class="border rounded p-3 p-lg-4">
                <div class="d-flex align-items-center mb-3">
                  <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                    <img src="assets/img/shop/electronics/thumbs/10.png" width="110" alt="iPhone 14">
                  </div>
                  <div class="w-100 min-w-0 ps-2 ps-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star text-body-tertiary opacity-75"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">68</span>
                    </div>
                    <h4 class="fs-sm fw-medium mb-2">Apple iPhone 14 Plus 128GB Blue</h4>
                    <div class="h5 mb-0">$940.00</div>
                  </div>
                </div>
                <div class="d-flex gap-2 gap-lg-3">
                  <button type="button" class="btn btn-primary w-100 animate-slide-end">
                    <i class="ci-shopping-cart fs-base animate-target ms-n1 me-2"></i>
                    Add to cart
                  </button>
                  <button type="button" class="btn btn-icon btn-secondary animate-pulse" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Add to Wishlist" aria-label="Add to Wishlist">
                    <i class="ci-heart fs-base animate-target"></i>
                  </button>
                  <button type="button" class="btn btn-icon btn-secondary animate-rotate" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Compare" aria-label="Compare">
                    <i class="ci-refresh-cw fs-base animate-target"></i>
                  </button>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </section>


      <!-- Viewed products (Carousel) -->
      <section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">
        <h2 class="h3 border-bottom pb-4 mb-0">Viewed products</h2>

        <!-- Product carousel -->
        <div class="position-relative mx-md-1">

          <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
          <button type="button" class="viewed-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle-y ms-n1 d-none d-sm-inline-flex" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="viewed-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 end-0 z-2 translate-middle-y me-n1 d-none d-sm-inline-flex" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>

          <!-- Slider -->
          <div class="swiper py-4 px-sm-3" data-swiper='{
            "slidesPerView": 2,
            "spaceBetween": 24,
            "loop": true,
            "navigation": {
              "prevEl": ".viewed-prev",
              "nextEl": ".viewed-next"
            },
            "breakpoints": {
              "768": {
                "slidesPerView": 3
              },
              "992": {
                "slidesPerView": 4
              }
            }
          }'>
            <div class="swiper-wrapper">

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/13.png" alt="Dualsense Edge">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(187)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Sony Dualsense Edge Controller</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$200.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <span class="badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">-17%</span>
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/11.png" alt="Nikon Camera">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(14)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">VRB01 Camera Nikon Max</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$652.00 <del class="text-body-tertiary fs-sm fw-normal">$785.00</del></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/10.png" alt="iPhone 14">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-half text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(335)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Apple iPhone 14 128GB Blue</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$899.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="posittion-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/07.png" alt="iPad Pro">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-half text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(49)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Tablet Apple iPad Pro M1</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$739.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/06.png" alt="AirPods 2">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star text-body-tertiary opacity-75"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(78)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Headphones Apple AirPods 2 Pro</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$224.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- External slider prev/next buttons visible on screens < 500px wide (sm breakpoint) -->
          <div class="d-flex justify-content-center gap-2 mt-n2 mb-3 pb-1 d-sm-none">
            <button type="button" class="viewed-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1" aria-label="Prev">
              <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" class="viewed-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
              <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>
          </div>
        </div>
      </section>


      <!-- Subscription form + Vlog -->
      <section class="bg-body-tertiary py-5">
        <div class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
          <div class="row">
            <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
              <h2 class="h4 mb-2">Sign up to our newsletter</h2>
              <p class="text-body pb-2 pb-ms-3">Receive our latest updates about our products &amp; promotions</p>
              <form class="d-flex needs-validation pb-1 pb-sm-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5" novalidate>
                <div class="position-relative w-100 me-2">
                  <input type="email" class="form-control form-control-lg" placeholder="Your email" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
              </form>
              <div class="d-flex gap-3">
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Instagram">
                  <i class="ci-instagram fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Facebook">
                  <i class="ci-facebook fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="YouTube">
                  <i class="ci-youtube fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Telegram">
                  <i class="ci-telegram fs-base"></i>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
              <ul class="list-unstyled d-flex flex-column gap-4 ps-md-4 ps-lg-0 mb-3">
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="assets/img/home/electronics/vlog/01.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">6:16</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 New Cool Gadgets You Must See on Cartzilla - Cheap Budget</a>
                  </div>
                </li>
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="assets/img/home/electronics/vlog/02.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">10:20</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 Super Useful Gadgets on Cartzilla You Must Have in 2023</a>
                  </div>
                </li>
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="assets/img/home/electronics/vlog/03.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">8:40</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">Top 5 New Amazing Gadgets on Cartzilla You Must See</a>
                  </div>
                </li>
              </ul>
              <div class="nav ps-md-4 ps-lg-0">
                <a class="btn nav-link animate-underline text-decoration-none px-0" href="#!">
                  <span class="animate-target">View all</span>
                  <i class="ci-chevron-right fs-base ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>




</x-www-app>
