
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&family=RocknRoll+One&display=swap');

    *, *::before , *::after {
      margin: 0; padding: 0;
      box-sizing: border-box;


    }


    body {
      background: skyblue;
      width: 100vw;
      height: 100vh;
      font-family: 'Roboto', sans-serif;
      font-size: 16px;
    }

    .card {
        width: 1200px;
        height: 718px;
        padding: 20px;
        background: #ffffff;
        margin: calc(50vh - 359px) auto;
    }

    .card-wrapper {
      width: 100%; height:100%;
      background: white;
      border-radius: 25px;
      padding: 15px;
    /*   background: skyblue;
       */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card-header img{
      max-width: 25px;
      filter: invert(29%) sepia(0%) saturate(11%) hue-rotate(212deg) brightness(94%) contrast(88%);
    }

    .card-header {
      width: 100%; height: 50px;


      display: flex;
      align-items: center;
      justify-content: end;
      gap: 10px;
    }








    .hero-bg{
      width: 100%; height: 120px;
      background-image: url(https://images.unsplash.com/photo-1476842634003-7dcca8f832de?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: 0 -25px;
      border-radius: 20px;
    }

    .card-hero {
      display: flex;
      flex-direction: column;
      align-items: center;

      position: relative;
    }

    .main-img {
      width: 120px; height: 120px;
      object-fit: cover;
      object-position: 0px 0px;
      border-radius: 50%;

      position: absolute;
      top: 55px;
    }

    span {
      display: inline-block;
    }

    img.span-img {
      width: 20px ;
      display: inline-block;
      filter: invert(60%) sepia(93%) saturate(7015%) hue-rotate(235deg) brightness(98%) contrast(100%);
    }

    .bio {
      padding-top: 65px;
      text-align: center;
    }



    .stats {
      padding: 25px 0;
      text-align: center;
      width: 100%;

      display: flex;
      justify-content: center;
      gap: 25px;
    }

    .stat:nth-child(2) h1 {
      color: #5451FA;
    }

    .footer {
        align-content: center;
        padding: 10px 403px;
        /* background: pink; */
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .follow-btn a {
      text-decoration: none;
      font-size: 1rem;
      padding: 20px 50px;
      background: #5451FA;
      display: block;
      text-align: center;
      color: white;
      border-radius:10px;
    }

    .footer-img {
      width: 15px;
      display: inline-block;
      filter: invert(29%) sepia(0%) saturate(1782%) hue-rotate(143deg) brightness(97%) contrast(96%);
    }

    .footer-item {
      padding: 5px 0;

      display: flex;
      align-items: center;
      gap: 5px;
    }


    p  {
      color: #7D7D7D;
    }


    .bio span {
      margin-bottom: 0.5em;
    }


    .follow-btn a {
      font-size: 20px !important;
      transition: all 0.3s;
    }

    .follow-btn a:hover {
      background: #dcdbfe;
      color: #5451FA;
      transition: all 0.2s;
      font-weight: 700;
    }

    .card-header img:hover{
      filter: invert(83%) sepia(1%) saturate(232%) hue-rotate(315deg) brightness(92%) contrast(80%);


    }
        /* header */

    :root {
        font-size: 10px;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        font-family: "Open Sans", Arial, sans-serif;
        min-height: 100vh;
        background-color: #fafafa;
        color: #262626;
        padding-bottom: 3rem;
    }

    img {
        display: block;
    }

    .container {
        max-width: 93.5rem;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .btn {
        display: inline-block;
        font: inherit;
        background: none;
        border: none;
        color: inherit;
        padding: 0;
        cursor: pointer;
    }

    .btn:focus {
        outline: 0.5rem auto #4d90fe;
    }

    .visually-hidden {
        position: absolute !important;
        height: 1px;
        width: 1px;
        overflow: hidden;
        clip: rect(1px, 1px, 1px, 1px);
    }

    /* Profile Section */

    .profile {
        padding: 5rem 0;
    }

    .profile::after {
        content: "";
        display: block;
        clear: both;
    }

    .profile-image {
        float: left;
        width: calc(33.333% - 1rem);
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 3rem;
    }

    .profile-image img {
        border-radius: 50%;
    }

    .profile-user-settings,
    .profile-stats,
    .profile-bio {
        float: left;
        width: calc(66.666% - 2rem);
    }

    .profile-user-settings {
        margin-top: 1.1rem;
    }

    .profile-user-name {
        display: inline-block;
        font-size: 3.2rem;
        font-weight: 300;
    }

    .profile-edit-btn {
        font-size: 1.4rem;
        line-height: 1.8;
        border: 0.1rem solid #dbdbdb;
        border-radius: 0.3rem;
        padding: 0 2.4rem;
        margin-left: 2rem;
    }

    .profile-settings-btn {
        font-size: 2rem;
        margin-left: 1rem;
    }

    .profile-stats {
        margin-top: 2.3rem;
    }

    .profile-stats li {
        display: inline-block;
        font-size: 1.6rem;
        line-height: 1.5;
        margin-right: 4rem;
        cursor: pointer;
    }

    .profile-stats li:last-of-type {
        margin-right: 0;
    }

    .profile-bio {
        font-size: 1.6rem;
        font-weight: 400;
        line-height: 1.5;
        margin-top: 2.3rem;
    }

    .profile-real-name,
    .profile-stat-count,
    .profile-edit-btn {
        font-weight: 600;
    }

    /* Gallery Section */

    .gallery {
        display: flex;
        flex-wrap: wrap;
        margin: -1rem -1rem;
        padding-bottom: 3rem;
    }

    .gallery-item {
        position: relative;
        flex: 1 0 22rem;
        margin: 1rem;
        color: #fff;
        cursor: pointer;
    }

    .gallery-item:hover .gallery-item-info,
    .gallery-item:focus .gallery-item-info {
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
    }

    .gallery-item-info {
        display: none;
    }

    .gallery-item-info li {
        display: inline-block;
        font-size: 1.7rem;
        font-weight: 600;
    }

    .gallery-item-likes {
        margin-right: 2.2rem;
    }

    .gallery-item-type {
        position: absolute;
        top: 1rem;
        right: 1rem;
        font-size: 2.5rem;
        text-shadow: 0.2rem 0.2rem 0.2rem rgba(0, 0, 0, 0.1);
    }

    .fa-clone,
    .fa-comment {
        transform: rotateY(180deg);
    }

    .gallery-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Loader */

    .loader {
        width: 5rem;
        height: 5rem;
        border: 0.6rem solid #999;
        border-bottom-color: transparent;
        border-radius: 50%;
        margin: 0 auto;
        animation: loader 500ms linear infinite;
    }

    /* Media Query */

    @media screen and (max-width: 40rem) {
        .profile {
            display: flex;
            flex-wrap: wrap;
            padding: 4rem 0;
        }

        .profile::after {
            display: none;
        }

        .profile-image,
        .profile-user-settings,
        .profile-bio,
        .profile-stats {
            float: none;
            width: auto;
        }

        .profile-image img {
            width: 7.7rem;
        }

        .profile-user-settings {
            flex-basis: calc(100% - 10.7rem);
            display: flex;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .profile-user-name {
            font-size: 2.2rem;
        }

        .profile-edit-btn {
            order: 1;
            padding: 0;
            text-align: center;
            margin-top: 1rem;
        }

        .profile-edit-btn {
            margin-left: 0;
        }

        .profile-bio {
            font-size: 1.4rem;
            margin-top: 1.5rem;
        }

        .profile-edit-btn,
        .profile-bio,
        .profile-stats {
            flex-basis: 100%;
        }

        .profile-stats {
            order: 1;
            margin-top: 1.5rem;
        }

        .profile-stats ul {
            display: flex;
            text-align: center;
            padding: 1.2rem 0;
            border-top: 0.1rem solid #dadada;
            border-bottom: 0.1rem solid #dadada;
        }

        .profile-stats li {
            font-size: 1.4rem;
            flex: 1;
            margin: 0;
        }

        .profile-stat-count {
            display: block;
        }
    }

    /* Spinner Animation */

    @keyframes loader {
        to {
            transform: rotate(360deg);
        }
    }

    @supports (display: grid) {
        .profile {
            display: grid;
            grid-template-columns: 1fr 2fr;
            grid-template-rows: repeat(3, auto);
            grid-column-gap: 3rem;
            align-items: center;
            height: 350px;
        }

        .profile-image {
            grid-row: 1 / -1;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
            grid-gap: 2rem;
        }

        .profile-image,
        .profile-user-settings,
        .profile-stats,
        .profile-bio,
        .gallery-item,
        .gallery {
            width: auto;
            margin: 0;
        }

        @media (max-width: 40rem) {
            .profile {
                grid-template-columns: auto 1fr;
                grid-row-gap: 1.5rem;
            }

            .profile-image {
                grid-row: 1 / 2;
            }

            .profile-user-settings {
                display: grid;
                grid-template-columns: auto 1fr;
                grid-gap: 1rem;
            }

            .profile-edit-btn,
            .profile-stats,
            .profile-bio {
                grid-column: 1 / -1;
            }

            .profile-user-settings,
            .profile-edit-btn,
            .profile-settings-btn,
            .profile-bio,
            .profile-stats {
                margin: 0;
            }
            svg[Attributes Style] {
        width: 12;
        height: 32;
    }
        }

    }

    </style>


    <div class="card">
        <div class="card-wrapper">
          <div class="card-header">
            <img src="https://www.svgrepo.com/show/14071/search.svg" alt="">
            <img src="https://www.svgrepo.com/show/390426/alarm-alert-attention-bell-notification-timer.svg" alt="">

          </div>
          <div class="card-hero">
            <div class="hero-bg"></div>
            <img class="main-img" src="https://images.unsplash.com/photo-1492127042590-8094c493b510?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <div class="bio">
              <span><h1>Syerli Nindi Pratiwi</h1></span> <span><img class="span-img" src="https://www.svgrepo.com/show/347880/verified.svg" ></span>
            </div>
          </div>
          <div class="stats">
            <div class="stat">
              <h1>19</h1>
              <p style="font-size: 15px;">Transaksi</p>
            </div>
          </div>
          <div class="footer">
            <div class="footer-item">
              <img class="footer-img" src="https://www.svgrepo.com/show/129908/location.svg" alt=""/> <p style="font-size: 15px;"></p> <strong style="font-size: 15px;">Budapest</strong>
            </div>
            <div class="footer-item">
              <img class="footer-img" src="https://www.svgrepo.com/show/870/suitcase.svg" alt=""/> <p style="font-size: 15px;">serlynindi680@gmail.com</p>
            </div>

          </div>
         <center>
            <div class="follow-btn">
                <a href="{{ route('edit.profile', ['id' => $user->id]) }}" style="width: 500; height:70;" >Edit Profil</a>
            </div>
         </center>
        </div>
      </div>
    <br><br><br>
    <main>
    <br><br><br>


        <!-- End of container -->

    </main>
    <script>

    // const button = document.querySelector(".follow-btn a");
    // const userName = document.querySelector(".bio h2");


    // button.addEventListener("click", () => {
    //   let input = prompt("Profile Name");

    //   if (!input) {
    //     input = prompt("Profile Name is required, Set now or cancel for 'Anonymous'");
    //     !input && (input = "Anonymous");
    //     userName.innerText = input;
    //   } else {
    //     userName.innerText = input;
    //   }
    // });


    // table

    $(function(){
      $('#keywords').tablesorter();
    });

    </script>
