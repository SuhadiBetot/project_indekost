@include('admin.template.header')
<body>

  <!--*******************
        Preloader start
    ********************-->
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
  <!--*******************
        Preloader end
    ********************-->
  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper" class="wallet-open active">

    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">
      <a href="index.html" class="brand-logo">
        <svg class="logo-abbr" width="40" height="40" viewBox="0 0 48 54" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <rect y="3" width="48" height="48" rx="16" fill="#FB7D5B" />
          <path
            d="M28.964 35.536H19.532L18.02 40H11.576L20.72 14.728H27.848L36.992 40H30.476L28.964 35.536ZM27.38 30.784L24.248 21.532L21.152 30.784H27.38Z"
            fill="white" />
        </svg>
        <div class="brand-title">
          <svg width="140" height="30" viewBox="0 0 167 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M17.964 24.536H8.532L7.02 29H0.576L9.72 3.728H16.848L25.992 29H19.476L17.964 24.536ZM16.38 19.784L13.248 10.532L10.152 19.784H16.38ZM41.051 29L34.931 20.576V29H28.775V2.36H34.931V17.084L41.015 8.912H48.611L40.259 18.992L48.683 29H41.051ZM49.8049 18.92C49.8049 16.856 50.1889 15.044 50.9569 13.484C51.7489 11.924 52.8169 10.724 54.1609 9.884C55.5049 9.044 57.0049 8.624 58.6609 8.624C60.0769 8.624 61.3129 8.912 62.3689 9.488C63.4489 10.064 64.2769 10.82 64.8529 11.756V8.912H71.0089V29H64.8529V26.156C64.2529 27.092 63.4129 27.848 62.3329 28.424C61.2769 29 60.0409 29.288 58.6249 29.288C56.9929 29.288 55.5049 28.868 54.1609 28.028C52.8169 27.164 51.7489 25.952 50.9569 24.392C50.1889 22.808 49.8049 20.984 49.8049 18.92ZM64.8529 18.956C64.8529 17.42 64.4209 16.208 63.5569 15.32C62.7169 14.432 61.6849 13.988 60.4609 13.988C59.2369 13.988 58.1929 14.432 57.3289 15.32C56.4889 16.184 56.0689 17.384 56.0689 18.92C56.0689 20.456 56.4889 21.68 57.3289 22.592C58.1929 23.48 59.2369 23.924 60.4609 23.924C61.6849 23.924 62.7169 23.48 63.5569 22.592C64.4209 21.704 64.8529 20.492 64.8529 18.956ZM74.2385 18.92C74.2385 16.856 74.6225 15.044 75.3905 13.484C76.1825 11.924 77.2505 10.724 78.5945 9.884C79.9385 9.044 81.4385 8.624 83.0945 8.624C84.4145 8.624 85.6145 8.9 86.6945 9.452C87.7985 10.004 88.6625 10.748 89.2865 11.684V2.36H95.4425V29H89.2865V26.12C88.7105 27.08 87.8825 27.848 86.8025 28.424C85.7465 29 84.5105 29.288 83.0945 29.288C81.4385 29.288 79.9385 28.868 78.5945 28.028C77.2505 27.164 76.1825 25.952 75.3905 24.392C74.6225 22.808 74.2385 20.984 74.2385 18.92ZM89.2865 18.956C89.2865 17.42 88.8545 16.208 87.9905 15.32C87.1505 14.432 86.1185 13.988 84.8945 13.988C83.6705 13.988 82.6265 14.432 81.7625 15.32C80.9225 16.184 80.5025 17.384 80.5025 18.92C80.5025 20.456 80.9225 21.68 81.7625 22.592C82.6265 23.48 83.6705 23.924 84.8945 23.924C86.1185 23.924 87.1505 23.48 87.9905 22.592C88.8545 21.704 89.2865 20.492 89.2865 18.956ZM118.832 18.632C118.832 19.208 118.796 19.808 118.724 20.432H104.792C104.888 21.68 105.284 22.64 105.98 23.312C106.7 23.96 107.576 24.284 108.608 24.284C110.144 24.284 111.212 23.636 111.812 22.34H118.364C118.028 23.66 117.416 24.848 116.528 25.904C115.664 26.96 114.572 27.788 113.252 28.388C111.932 28.988 110.456 29.288 108.824 29.288C106.856 29.288 105.104 28.868 103.568 28.028C102.032 27.188 100.832 25.988 99.9681 24.428C99.1041 22.868 98.6721 21.044 98.6721 18.956C98.6721 16.868 99.0921 15.044 99.9321 13.484C100.796 11.924 101.996 10.724 103.532 9.884C105.068 9.044 106.832 8.624 108.824 8.624C110.768 8.624 112.496 9.032 114.008 9.848C115.52 10.664 116.696 11.828 117.536 13.34C118.4 14.852 118.832 16.616 118.832 18.632ZM112.532 17.012C112.532 15.956 112.172 15.116 111.452 14.492C110.732 13.868 109.832 13.556 108.752 13.556C107.72 13.556 106.844 13.856 106.124 14.456C105.428 15.056 104.996 15.908 104.828 17.012H112.532ZM147.712 8.696C150.208 8.696 152.188 9.452 153.652 10.964C155.14 12.476 155.884 14.576 155.884 17.264V29H149.764V18.092C149.764 16.796 149.416 15.8 148.72 15.104C148.048 14.384 147.112 14.024 145.912 14.024C144.712 14.024 143.764 14.384 143.068 15.104C142.396 15.8 142.06 16.796 142.06 18.092V29H135.94V18.092C135.94 16.796 135.592 15.8 134.896 15.104C134.224 14.384 133.288 14.024 132.088 14.024C130.888 14.024 129.94 14.384 129.244 15.104C128.572 15.8 128.236 16.796 128.236 18.092V29H122.08V8.912H128.236V11.432C128.86 10.592 129.676 9.932 130.684 9.452C131.692 8.948 132.832 8.696 134.104 8.696C135.616 8.696 136.96 9.02 138.136 9.668C139.336 10.316 140.272 11.24 140.944 12.44C141.64 11.336 142.588 10.436 143.788 9.74C144.988 9.044 146.296 8.696 147.712 8.696ZM163.285 6.824C162.205 6.824 161.317 6.512 160.621 5.888C159.949 5.24 159.613 4.448 159.613 3.512C159.613 2.552 159.949 1.76 160.621 1.136C161.317 0.487998 162.205 0.163998 163.285 0.163998C164.341 0.163998 165.205 0.487998 165.877 1.136C166.573 1.76 166.921 2.552 166.921 3.512C166.921 4.448 166.573 5.24 165.877 5.888C165.205 6.512 164.341 6.824 163.285 6.824ZM166.345 8.912V29H160.189V8.912H166.345Z"
              fill="white" />
          </svg>
        </div>
      </a>


      <div class="nav-control">
        <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
          <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A" />
            <rect x="11" width="4" height="4" rx="2" fill="#2A353A" />
            <rect x="22" width="4" height="4" rx="2" fill="#2A353A" />
            <rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A" />
            <rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A" />
            <rect width="4" height="4" rx="2" fill="#2A353A" />
            <rect y="11" width="4" height="4" rx="2" fill="#2A353A" />
            <rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A" />
            <rect y="22" width="4" height="4" rx="2" fill="#2A353A" />
          </svg>
        </div>
      </div>
    </div>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Chat box start
        ***********************************-->
    <div class="chatbox">
      <div class="chatbox-close"></div>
      <div class="custom-tab-1">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active show" id="chat" role="tabpanel">
            <div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
              <div class="card-header chat-list-header text-center">
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#chat_model"><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                    height="18px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                      <rect fill="#000000" opacity="0.3"
                        transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                        x="4" y="11" width="16" height="2" rx="1" />
                    </g>
                  </svg></a>
                <div>
                  <h6 class="mb-1">Chat List</h6>
                  <p class="mb-0">Show All</p>
                </div>
                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24"
                    version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <circle fill="#000000" cx="5" cy="12" r="2" />
                      <circle fill="#000000" cx="12" cy="12" r="2" />
                      <circle fill="#000000" cx="19" cy="12" r="2" />
                    </g>
                  </svg></a>
              </div>
              <div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
                <ul class="contacts">
                  <li class="name-first-letter">A</li>
                  <li class="active dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>Archie Parker</span>
                        <p>Kalid is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Alfie Mason</span>
                        <p>Taherah left 7 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>AharlieKane</span>
                        <p>Sami is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Athan Jacoby</span>
                        <p>Nargis left 30 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="name-first-letter">B</li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Bashid Samim</span>
                        <p>Rashid left 50 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>Breddie Ronan</span>
                        <p>Kalid is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Ceorge Carson</span>
                        <p>Taherah left 7 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="name-first-letter">D</li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>Darry Parker</span>
                        <p>Sami is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Denry Hunter</span>
                        <p>Nargis left 30 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="name-first-letter">J</li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Jack Ronan</span>
                        <p>Rashid left 50 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>Jacob Tucker</span>
                        <p>Kalid is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>James Logan</span>
                        <p>Taherah left 7 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>Joshua Weston</span>
                        <p>Sami is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="name-first-letter">O</li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Oliver Acker</span>
                        <p>Nargis left 30 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Oscar Weston</span>
                        <p>Rashid left 50 mins ago</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="alerts" role="tabpanel">
            <div class="card mb-sm-3 mb-md-0 contacts_card">
              <div class="card-header chat-list-header text-center">
                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24"
                    version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <circle fill="#000000" cx="5" cy="12" r="2" />
                      <circle fill="#000000" cx="12" cy="12" r="2" />
                      <circle fill="#000000" cx="19" cy="12" r="2" />
                    </g>
                  </svg></a>
                <div>
                  <h6 class="mb-1">Notications</h6>
                  <p class="mb-0">Show All</p>
                </div>
                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24"
                    version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <path
                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                      <path
                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                        fill="#000000" fill-rule="nonzero" />
                    </g>
                  </svg></a>
              </div>
              <div class="card-footer"></div>
            </div>
          </div>
          <div class="tab-pane fade" id="notes">
            <div class="card mb-sm-3 mb-md-0 note_card">
              <div class="card-header chat-list-header text-center">
                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24"
                    version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                      <rect fill="#000000" opacity="0.3"
                        transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                        x="4" y="11" width="16" height="2" rx="1" />
                    </g>
                  </svg></a>
                <div>
                  <h6 class="mb-1">Notes</h6>
                  <p class="mb-0">Add New Nots</p>
                </div>
                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24"
                    version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <path
                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                      <path
                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                        fill="#000000" fill-rule="nonzero" />
                    </g>
                  </svg></a>
              </div>
              <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
                <ul class="contacts">
                  <li class="active">
                    <div class="d-flex bd-highlight">
                      <div class="user_info">
                        <span>New order placed..</span>
                        <p>10 Aug 2020</p>
                      </div>
                      <div class="ms-auto">
                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                            class="fas fa-pencil-alt"></i></a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                            class="fa fa-trash"></i></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--**********************************
            Chat box End
        ***********************************-->
    <!--**********************************
            Header start
        ***********************************-->
   @include('layout.navbar')
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layout.sidebar')

    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--****
  Wallet Sidebar
  ****-->

    <!--**********************************
            Content body start
        ***********************************-->
    <!--**********************************
            Content body start
        ***********************************-->
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
