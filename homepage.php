<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gruzzik!</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">Gruzzik! by Kelompok 12</div>
    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li><a href="#artist">Artist</a></li>
      <li><a href="#playlists">Playlists</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <button class="logout-btn">
      <a href="index.php">Logout</a>
    </button>
  </nav>

  <!-- Header -->
  <section id="home">
  <header class="hero">
    <div class="hero-content">
      <h1>Welcome! Feel the Rythm Ladies and Gentlemen!</h1>
      <p>Discover, and listen to your favorite music playlists.</p>
    </div>
  </header>
  </section>
<!-- bagian artist-->
<section id="artist">
    <div class="artist main-container">
      <h1 class="pre-title">Popular Artists</h1>
      <p class="section-description">
        Discover your favorite artists and explore their top tracks.
      </p>
      <div class="artist-grid">
        <div class="artist-card">
          <img src="images/greenday.jpg" alt="Artist 1" class="artist-photo">
          <h3 class="artist-name">Green Day</h3>
          <p>Green Day adalah band punk rock legendaris asal Amerika Serikat yang dibentuk pada tahun 1987 di Berkeley, California. Band ini terdiri dari tiga anggota utama: Billie Joe Armstrong (vokalis utama dan gitaris), Mike Dirnt (bass dan vokal latar), dan Tré Cool (drummer). Green Day dikenal sebagai salah satu pelopor kebangkitan punk rock di era 1990-an, membawa genre ini ke arus utama dengan perpaduan melodi yang catchy, lirik yang sering kali penuh kritik sosial, dan energi panggung yang eksplosif.</p>
        </div>
        <div class="artist-card">
          <img src="images/radiohead.webp" alt="Artist 2" class="artist-photo">
          <h3 class="artist-name">Radiohead</h3>
          <p>Radiohead adalah band rock alternatif asal Inggris yang dibentuk pada tahun 1985 di Abingdon, Oxfordshire. Band ini terdiri dari Thom Yorke (vokalis utama, gitar, piano), Jonny Greenwood (gitar utama, keyboard, berbagai instrumen), Colin Greenwood (bass), Ed O'Brien (gitar ritme, vokal latar), dan Philip Selway (drum, perkusi). Radiohead dikenal karena eksplorasi musiknya yang inovatif, lirik yang emosional dan introspektif, serta pendekatan mereka yang sering menantang norma industri musik.</p>
        </div>
        <div class="artist-card">
          <img src="images/boypablo.jpg" alt="Artist 3" class="artist-photo">
          <h3 class="artist-name">Boy Pablo
          </h3>
          <p>Boy Pablo adalah proyek musik indie pop asal Norwegia yang dipimpin oleh musisi berbakat Nicolás Muñoz. Lahir pada tahun 2015, Boy Pablo mulai dikenal di kancah musik internasional berkat pendekatan lo-fi yang menyegarkan, melodi yang ringan, serta lirik yang penuh emosi tentang cinta, kekecewaan, dan kehidupan sehari-hari. Nicolás, yang memiliki darah campuran Chili dan Norwegia, merupakan inti dari proyek ini, meskipun ia kerap tampil dengan band pendukung dalam pertunjukan langsung.</p>
        </div>
        <div class="artist-card">
          <img src="images/ardhito.jpeg" alt="Artist 4" class="artist-photo">
          <h3 class="artist-name">Ardhito Pramono</h3>
          <p>Ardhito Pramono adalah musisi, penyanyi, dan aktor asal Indonesia yang dikenal karena gaya musiknya yang memadukan jazz, pop, dan elemen indie dengan nuansa yang segar dan modern. Lahir pada 22 Mei 1995 di Jakarta, Ardhito mulai menarik perhatian publik melalui lagu-lagu yang ia unggah secara independen di platform seperti YouTube dan SoundCloud. Musiknya dikenal dengan lirik yang romantis dan puitis, serta melodi yang mengingatkan pada era jazz klasik.</p>
        </div>
      </div>
    </div>
  </section>
  <!--akhir artist-->
  
  <!--bagian playlists-->
  <section id="playlists">
  <h1 class="playlist-title">Playlists</h1>
  <div class="music-bar">
    <div class="music-item" data-band="radiohead">
      <div class="circle">
        <img src="images/radiohead.webp" alt="Radiohead">
      </div>
      <p>Radiohead</p>
    </div>
    <div class="music-item" data-band="greenday">
      <div class="circle">
        <img src="images/greenday_2.jpg" alt="Green Day">
      </div>
      <p>Green Day</p>
    </div>
    <div class="music-item" data-band="boypablo">
      <div class="circle">
        <img src="images/boypablo2.jpg" alt="Boy Pablo">
      </div>
      <p>Boy Pablo</p>
    </div>
    <div class="music-item" data-band="ardhito">
      <div class="circle">
        <img src="images/ardhitoo.webp" alt="Ardhito Pramono">
      </div>
      <p>Ardhito Pramono</p>
    </div>
    <div class="music-item" data-band="neckdeep">
      <div class="circle">
        <img src="images/neckdeep.jpg" alt="NeckDeep">
      </div>
      <p>Neck Deep</p>
    </div>
    <div class="music-item" data-band="thevamps">
      <div class="circle">
        <img src="images/thevamps.jpg" alt="TheVamps">
      </div>
      <p>The Vamps</p>
    </div>
  </div>

  <!-- Radiohead Playlist -->
  <div class="playlist" id="radiohead">
    <h2>Radiohead</h2>
    <ul>
      <li>
        <span>Creep</span>
        <audio controls>
          <source src="music/Radiohead - Creep.mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>No Surprises</span>
        <audio controls>
          <source src="music/Radiohead - No Surprises.mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>Fake Plastic Trees</span>
        <audio controls>
          <source src="music/Radiohead - Fake Plastic Trees.mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>Karma Police</span>
        <audio controls>
          <source src="music/Radiohead - Karma Police.mp3" type="audio/mpeg">
        </audio>
      </li>
    </ul>
  </div>

  <!-- Green Day Playlist-->
  <div class="playlist" id="greenday">
    <h2>Green Day</h2>
    <ul>
      <li>
        <span>Good Riddance</span>
        <audio controls>
          <source src="music/Green Day - Good Riddance (Time of Your Life).mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>Basket Case</span>
        <audio controls>
          <source src="music/BasketCase.mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>Wake Me Up When September Ends</span>
        <audio controls>
          <source src="music/wakemeup.mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>American Idiot</span>
        <audio controls>
          <source src="music/American Idiot.mp3" type="audio/mpeg">
        </audio>
      </li>
    </ul>
  </div>

  <!--boy pablo playlist-->
  <div class="playlist" id="boypablo">
    <h2>boypablo</h2>
    <ul>
      <li>
        <span>Everytime</span>
        <audio controls>
          <source src="music/boy pablo - Everytime.mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>rest up</span>
        <audio controls>
          <source src="music/boy pablo - rest up (Wachito Rico_ Chapter 3).mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>sick feeling</span>
        <audio controls>
          <source src="music/boy pablo - sick feeling (official video).mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>wachito richo</span>
        <audio controls>
          <source src="music/boy pablo - wachito rico (Wachito Rico_ Chapter 5).mp3" type="audio/mpeg">
        </audio>
      </li>
    </ul>
  </div>

  <!--Ardhito Pramono Playlist-->
  <div class="playlist" id="ardhito">
    <h2>Ardhito Pramono</h2>
    <ul>
      <li>
        <span>cigarettes of ours</span>
        <audio controls>
          <source src="music/Ardhito Pramono - cigarettes of ours.mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>superstar</span>
        <audio controls>
          <source src="music/Ardhito Pramono - superstar.mp3" type="audio/mpeg">
        </audio>
      </li>
    </ul>
  </div>

  <!--Neck Deep Playlist-->
  <div class="playlist" id="neckdeep">
    <h2>Neck Deep</h2>
    <ul>
      <li>
        <span>December</span>
        <audio controls>
          <source src="music/Neck Deep - December.mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>Gold Steps</span>
        <audio controls>
          <source src="music/Neck Deep - Gold Steps (Official Music Video).mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>In Bloom</span>
        <audio controls>
          <source src="music/Neck Deep - In Bloom (Official Music Video).mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>Torn</span>
        <audio controls>
          <source src="music/Neck Deep - Torn (Official Music Video).mp3" type="audio/mpeg">
        </audio>
      </li>
    </ul>
  </div>

  <!--The Vamps Playlist-->
  <div class="playlist" id="thevamps">
    <h2>The Vamps</h2>
    <ul>
      <li>
        <span>Hair Too Long</span>
        <audio controls>
          <source src="music/The Vamps - Hair Too Long.mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>Oh Cecilia</span>
        <audio controls>
          <source src="music/The Vamps - Oh Cecilia (Breaking My Heart) ft. Shawn Mendes.mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>Rest Your Love</span>
        <audio controls>
          <source src="music/The Vamps - Rest Your Love.mp3" type="audio/mpeg">
        </audio>
      </li>
      <li>
        <span>Somebody To You</span>
        <audio controls>
          <source src="music/The Vamps - Somebody To You ft. Demi Lovato.mp3" type="audio/mpeg">
        </audio>
      </li>
    </ul>
  </div>
</section>
  <!--akhir playlists-->
 
  <!--contact-->
  <section id="contact">
    <div class="contact main-container">
        <div class="contact-left">
          <h1>Request</h1>
            <form class="contact-form" action="https://formspree.io/f/mgvwgagj" method="POST">
                <div>
                    <input type="text" placeholder="Name" name="name">
                </div>
                <div>
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div>
                    <textarea name="message" id="message" placeholder="Message" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <button class="btn-submit">Send Message</button>
                </div>
            </form>
        </div>
        <div class="contact-right">
          <h1>Anggota Kelompok</h1>
            <!-- Anggota 1 -->
            <div class="contact-item">
                <div class="contact-item-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                </div>
                 <div class="contact-item-detail">
                <h4>241351157</h4>
                <p>M. Dias Sapriatna Hasan</p>
            </div>  
        </div>
        
        <!-- Anggota 2 -->
        <div class="contact-item">
                <div class="contact-item-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                </div>
                 <div class="contact-item-detail">
                <h4>241351155</h4>
                <p>Fina Suci Ramadia</p>
            </div>  
        </div>
        
        <!-- Anggota 3 -->
        <div class="contact-item">
                <div class="contact-item-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                </div>
                 <div class="contact-item-detail">
                <h4>241351154</h4>
                <p>Rifa Azzahra</p>
            </div>  
        </div>
    </div>
</section>
<!-- End of Contact -->
  
<!-- Footer -->
<footer>
  <p>&#169; 2024 - Made by Kelompok 12</p>
</footer>
<!-- End of Footer-->



  <!--Js-->
  <script>
    const audios = document.querySelectorAll('audio');
  
    audios.forEach(audio => {
      audio.addEventListener('play', () => {
        audios.forEach(otherAudio => {
          if (otherAudio !== audio) {
            otherAudio.pause();
            otherAudio.currentTime = 0;
          }
        });
      });
    });

    window.onbeforeunload = () => {
    for (const form of document.getElementsByTagName("form")) {
        form.reset();
    }
}

document.addEventListener("DOMContentLoaded", () => {
  const musicItems = document.querySelectorAll(".music-item");
  const playlists = document.querySelectorAll(".playlist");

  musicItems.forEach((item) => {
    item.addEventListener("click", () => {
      const band = item.getAttribute("data-band");

      // Hide all playlists
      playlists.forEach((playlist) => playlist.classList.remove("active"));

      // Show selected playlist
      const selectedPlaylist = document.getElementById(band);
      if (selectedPlaylist) {
        selectedPlaylist.classList.add("active");
      }
    });
  });
});


  </script>
  
  
  
  
  


</body>
</html>
