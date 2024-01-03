
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
  /* justify-content: space-between; */
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
    /* margin-bottom: -200px;  */
    margin-bottom: 0; /* Remove margin */
    
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
    padding-top: 28px;
    text-align: center;
}



.stats {
    padding: 0px 0;
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

    /* table hehehehhhhhhhhh */
    @import url('https://fonts.googleapis.com/css?family=Amarante');

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  outline: none;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html { overflow-y: scroll; }
body {
  background: #eee url('https://i.imgur.com/eeQeRmk.png'); /* https://subtlepatterns.com/weave/ */
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 62.5%;
  line-height: 1;
  color: #585858;
  padding: 22px 10px;
  padding-bottom: 55px;
}

::selection { background: #5f74a0; color: #fff; }
::-moz-selection { background: #5f74a0; color: #fff; }
::-webkit-selection { background: #5f74a0; color: #fff; }

br { display: block; line-height: 1.6em; }

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
ol, ul { list-style: none; }

input, textarea {
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none;
}

blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
strong, b { font-weight: bold; }

table { border-collapse: collapse; border-spacing: 0; width: 100%}
img { border: 0; max-width: 100%; }

h1 {
  font-family: 'Amarante', Tahoma, sans-serif;
  font-weight: bold;
  font-size: 3.6em;
  line-height: 1.7em;
  margin-bottom: 10px;
  text-align: center;
}

img {
      border: 0;
      max-width: 100%;
    }
/** page structure **/
/* #wrapper {
  display: block;
  width: 850px;
  background: #fff;
  margin: 0 auto;
  padding: 10px 17px;
  -webkit-box-shadow: 2px 2px 3px -1px rgba(0,0,0,0.35);
} */

#keywords {
  margin: 0 auto;
  font-size: 15px;
  margin-bottom: 15px;
}


#keywords thead {
  cursor: pointer;
  background: #c9dff0;
}
#keywords thead tr th {
  font-weight: bold;
  padding: 12px 30px;
  padding-left: 42px;
}
#keywords thead tr th span {
  padding-right: 20px;
  background-repeat: no-repeat;
  background-position: 100% 100%;
}

#keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
  background: #acc8dd;
}

#keywords thead tr th.headerSortUp span {
  background-image: url('https://i.imgur.com/SP99ZPJ.png');
}
#keywords thead tr th.headerSortDown span {
  background-image: url('https://i.imgur.com/RkA9MBo.png');
}


#keywords tbody tr {
  color: #555;
}
#keywords tbody tr td {
  text-align: center;
  padding: 15px 10px;
}
#keywords tbody tr td.lalign {
  text-align: left;
}
}



.default-photo-container {
    width: 115px;
    height: 115px;
    border-radius: 50%;
    overflow: hidden;
    text-align: center;
    vertical-align: middle;
    line-height: 115px;
    object-fit: cover;
    margin-top: -70px; /* Adjust the margin-top value as needed */
}


</style>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div>
    <div class="card-wrapper">
      <div class="card-header">
        <img src="https://www.svgrepo.com/show/14071/search.svg" alt="">
        <img src="https://www.svgrepo.com/show/390426/alarm-alert-attention-bell-notification-timer.svg" alt="">
      </div>
      <br>
      <div class="row">
        <div class="col-md text-start mb-2 mb-md-0">
            <a href="javascript:history.back()" class="btn btn-danger btn-sm" style="border-radius:100px; height:40px; width:100px; font-size:16px; font-weight:700;">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m7.825 13l5.6 5.6L12 20l-8-8l8-8l1.425 1.4l-5.6 5.6H20v2z"/>
                    </svg>
                </span>
                Kembali
            </a>
        </div>
        <div class="col-md text-end">
            <a href="{{ route('edit.profile.form', ['id' => $user->id]) }}" class="btn btn-secondary btn-sm" style="border-radius:100px; height:40px; width:100px; font-size:16px; font-weight:700;">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="currentColor" d="m14 18l-1.4-1.45L16.15 13H4v-2h12.15L12.6 7.45L14 6l6 6z"/></svg>
                </span>
                Selanjutnya
            </a>
        </div>
    </div>
    </div>
    </div>

      <div class="card-hero">
        <div class="hero-bg"></div>
        @if (Auth::user()->foto == null)
        <div class="default-photo-container" style="border-radius: 50%;">
            <img src="{{ asset('asset/images/default/default.png') }}" alt="" />
        </div>
        @else
        <div class="default-photo-container" style="border-radius: 50%;">
             <img src="{{ asset('storage/' . $user->foto) }}" alt=""/>
        </div>
        @endif
        <div class="bio">
            <span><h1>{{ $user->name }}</h1></span> <span><img class="span-img" src="https://www.svgrepo.com/show/347880/verified.svg"></span>
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
            <a href="{{ route('edit.profile.form', ['id' => $user->id]) }}" style="width: 500; height:70;" >Edit Profil</a>
        </div>
     </center>
    </div>
  </div>
<br><br><br>
<main>
<br><br><br>
        <div class="card">
            <div class="card-wrapper">
                <div id="wrapper">
                    <h1>Profile</h1>

                    <table id="keywords" cellspacing="0" cellpadding="0">
                      <thead>
                        <tr>
                          <th><span>Keywords</span></th>
                          <th><span>Impressions</span></th>
                          <th><span>Clicks</span></th>
                          <th><span>CTR</span></th>
                          <th><span>Rank</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="lalign">silly tshirts</td>
                          <td>6,000</td>
                          <td>110</td>
                          <td>1.8%</td>
                          <td>22.2</td>
                        </tr>
                        <tr>
                          <td class="lalign">desktop workspace photos</td>
                          <td>2,200</td>
                          <td>500</td>
                          <td>22%</td>
                          <td>8.9</td>
                        </tr>
                        <tr>
                          <td class="lalign">arrested development quotes</td>
                          <td>13,500</td>
                          <td>900</td>
                          <td>6.7%</td>
                          <td>12.0</td>
                        </tr>
                        <tr>
                          <td class="lalign">popular web series</td>
                          <td>8,700</td>
                          <td>350</td>
                          <td>4%</td>
                          <td>7.0</td>
                        </tr>
                        <tr>
                          <td class="lalign">2013 webapps</td>
                          <td>9,900</td>
                          <td>460</td>
                          <td>4.6%</td>
                          <td>11.5</td>
                        </tr>
                        <tr>
                          <td class="lalign">ring bananaphone</td>
                          <td>10,500</td>
                          <td>748</td>
                          <td>7.1%</td>
                          <td>17.3</td>
                        </tr>
                      </tbody>
                    </table>
                   </div>
                <!-- End of gallery -->

                <div class="loader"></div>
            </div>
        </div>

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
