@include('admin.template.header')
<body>

  <div id="preloader">
    <div class="loader">
      <div class="dots">
        <div class="dot mainDot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>

    </div>
  </div>

  <div id="main-wrapper" class="wallet-open active">
    
        @include('owner.template.navbar')
        @include('owner.template.sidebar')

    <div class="content-body">
      <!-- row -->
      <div class="container-fluid">
        <!-- Row -->
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-body pb-xl-4 pb-sm-3 pb-0">
                <div class="row">
                  <div class="col-xl-4 col-8">
                    <div class="content-box">
                      <div class="icon-box icon-box-xl std-data">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                          viewBox="0 0 24 24" style="color: #fff;">
                          <path fill="currentColor"
                            d="M22 3H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m0 16H2V5h20zM21 6h-7v5h7zm-1 2l-2.5 1.75L15 8V7l2.5 1.75L20 7zM9 12a3 3 0 0 0 3-3a3 3 0 0 0-3-3a3 3 0 0 0-3 3a3 3 0 0 0 3 3m0-4a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m6 8.59c0-2.5-3.97-3.59-6-3.59s-6 1.09-6 3.59V18h12zM5.5 16c.72-.5 2.2-1 3.5-1c1.3 0 2.77.5 3.5 1z" />
                        </svg>
                      </div>
                      <div class="chart-num">
                        <p>Owner</p>
                        <h2 class="font-w700 mb-0">932</h2>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-4 col-8">
                    <div class="content-box">
                      <div class="teach-data icon-box icon-box-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                          viewBox="0 0 24 24" style="color: #fff;">
                          <path fill="currentColor"
                            d="m1.46 8.88l1.42-1.42L5 9.59l2.12-2.13l1.42 1.42L6.41 11l2.13 2.12l-1.42 1.42L5 12.41l-2.12 2.13l-1.42-1.42L3.59 11zM15 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 1.9A2.1 2.1 0 0 0 12.9 8a2.1 2.1 0 0 0 2.1 2.1a2.1 2.1 0 1 0 0-4.2m0 7.1c2.67 0 8 1.33 8 4v3H7v-3c0-2.67 5.33-4 8-4m0 1.9c-3 0-6.1 1.46-6.1 2.1v1.1h12.2V17c0-.64-3.13-2.1-6.1-2.1" />
                        </svg>
                      </div>
                      <div class="chart-num">
                        <p>Kos Kosong</p>
                        <h2 class="font-w700 mb-0">754</h2>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-4 col-8">
                    <div class="content-box">
                      <div class="event-data icon-box icon-box-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                          viewBox="0 0 24 24" style="color: #fff;">
                          <path fill="currentColor"
                            d="M16 11.5a2.5 2.5 0 0 1 5 0a2.5 2.5 0 0 1-5 0M13 3v17h11V3zm9 13c-1.1 0-2 .9-2 2h-3a2 2 0 0 0-2-2V7c1.11 0 2-.89 2-2h3a2 2 0 0 0 2 2zM7 6c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m0-2C4.79 4 3 5.79 3 8s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m0 10c-3.87 0-7 1.79-7 4v2h11v-2H2c0-.58 1.75-2 5-2c1.83 0 3.17.45 4 .95v-2.23C9.87 14.27 8.5 14 7 14" />
                        </svg>
                      </div>
                      <div class="chart-num">
                        <p>Kos Disewa</p>
                        <h2 class="font-w700 mb-0">40</h2>
                      </div>
                    </div>
                  </div>

                  {{-- <div class="col-xl-4 col-6">
										<div class="content-box">
											<div class="food-data icon-box icon-box-xl bg-dark">
												<svg width="23" height="23" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.25448 0.509167C5.96882 1.64226 4.0464 3.39315 2.70524 5.56327C1.36408 7.7334 0.657848 10.2359 0.666646 12.787V18.7167C0.667705 19.5871 1.01397 20.4216 1.62948 21.0372C2.245 21.6527 3.07951 21.9989 3.94998 22H7.33331V32C7.33331 32.442 7.50891 32.866 7.82147 33.1785C8.13403 33.4911 8.55795 33.6667 8.99998 33.6667C9.44201 33.6667 9.86593 33.4911 10.1785 33.1785C10.4911 32.866 10.6666 32.442 10.6666 32V2C10.6664 1.71598 10.5936 1.43673 10.4552 1.18872C10.3168 0.940703 10.1173 0.732152 9.87574 0.582831C9.63414 0.43351 9.3584 0.348368 9.07467 0.335477C8.79095 0.322585 8.50863 0.382371 8.25448 0.509167ZM7.33331 18.6833L3.99998 18.7167V12.787C3.99498 11.3525 4.28878 9.93273 4.86268 8.61805C5.43658 7.30336 6.27798 6.12261 7.33331 5.151V18.6833ZM24 2V8.66667C23.9994 9.10852 23.8236 9.53211 23.5112 9.84455C23.1988 10.157 22.7752 10.3328 22.3333 10.3333V2C22.3333 1.55797 22.1577 1.13405 21.8452 0.821489C21.5326 0.508929 21.1087 0.333334 20.6666 0.333334C20.2246 0.333334 19.8007 0.508929 19.4881 0.821489C19.1756 1.13405 19 1.55797 19 2V10.3333C18.5581 10.3328 18.1345 10.157 17.8221 9.84455C17.5097 9.53211 17.3339 9.10852 17.3333 8.66667V2C17.3333 1.55797 17.1577 1.13405 16.8452 0.821489C16.5326 0.508929 16.1087 0.333334 15.6666 0.333334C15.2246 0.333334 14.8007 0.508929 14.4881 0.821489C14.1756 1.13405 14 1.55797 14 2V8.66667C14.0014 9.9923 14.5287 11.2632 15.4661 12.2006C16.4034 13.138 17.6743 13.6652 19 13.6667V32C19 32.442 19.1756 32.866 19.4881 33.1785C19.8007 33.4911 20.2246 33.6667 20.6666 33.6667C21.1087 33.6667 21.5326 33.4911 21.8452 33.1785C22.1577 32.866 22.3333 32.442 22.3333 32V13.6667C23.6589 13.6652 24.9299 13.138 25.8672 12.2006C26.8046 11.2632 27.3319 9.9923 27.3333 8.66667V2C27.3333 1.55797 27.1577 1.13405 26.8452 0.821489C26.5326 0.508929 26.1087 0.333334 25.6666 0.333334C25.2246 0.333334 24.8007 0.508929 24.4881 0.821489C24.1756 1.13405 24 1.55797 24 2Z" fill="white"/>
												</svg>
											</div>
											<div class="chart-num">
												<p>Kos Disewa</p>
												<h2 class="font-w700 mb-0">32k</h2>
											</div>
										</div>
									</div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 ">
            <div class="card crypto-chart ">
              <div class="card-header pb-0 border-0 flex-wrap">
                <div class="mb-2 mb-sm-0">
                  <div class="chart-title mb-3">
                    <h2 class="heading">School Performance</h2>
                  </div>
                </div>
                <div class="p-static">
                  <div class="d-flex align-items-center mb-3 mb-sm-0">
                    <div class="round weekly" id="dzOldSeries">
                      <div>
                        <input type="checkbox" id="checkbox1" name="radio" value="weekly">
                        <label for="checkbox1" class="checkmark"></label>
                      </div>
                      <div>
                        <span class="fs-14">This Week</span>
                        <h4 class="fs-5 font-w700 mb-0">1.245</h4>
                      </div>
                    </div>
                    <div class="round" id="dzNewSeries">
                      <div>
                        <input type="checkbox" id="checkbox" name="radio" value="monthly">
                        <label for="checkbox" class="checkmark"></label>
                      </div>
                      <div>
                        <span class="fs-14">Last Week</span>
                        <h4 class="fs-5 font-w700 mb-0">1.356</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-2 custome-tooltip pb-0 px-2">
                <div id="marketChart"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card h-auto">
              <div class="card-header border-0 pb-0 flex-wrap">
                <h4 class="heading mb-3 mb-sm-0">School Overview</h4>
                <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill"
                      data-bs-target="#pills-week" type="button" role="tab"
                      aria-selected="true">Week</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill"
                      data-bs-target="#pills-month" type="button" role="tab"
                      aria-selected="false">Month</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill"
                      data-bs-target="#pills-year" type="button" role="tab"
                      aria-selected="false">Year</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill"
                      data-bs-target="#pills-all" type="button" role="tab"
                      aria-selected="false">All</button>
                  </li>
                </ul>
              </div>
              <div class="card-body  p-0">
                <div id="overiewChart"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer footer-outer">
      <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a>
          2023</p>
      </div>
    </div>

  </div>
</body>
@include('admin.template.script')

<!-- Mirrored from akademi.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 01:33:18 GMT -->

</html>
