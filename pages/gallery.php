<?php
include "../templates/header.php";
include "../admin/login/connect.php";
?>
<style>
  body {
    margin-top: 50px;
  }

  h1 {
    padding-bottom: 50px;
  }

  .hello {
    opacity: 1 !important;
  }

  .full {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
  }

  .full .content {
    background-color: rgba(0, 0, 0, 0.75) !important;
    height: 100%;
    width: 100%;
    display: grid;
  }

  .full .content img {
    left: 50%;
    transform: translate3d(0, 0, 0);
    animation: zoomin 1s ease;
    max-width: 100%;
    max-height: 500px;
    margin: auto;
  }

  .byebye {
    opacity: 0;
  }

  .byebye:hover {
    transform: scale(0.2) !important;
  }

  .gallery {
    display: grid;
    grid-column-gap: 8px;
    grid-row-gap: 8px;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    grid-auto-rows: 8px;
  }

  .gallery img {
    max-width: 100%;
    border-radius: 8px;
    box-shadow: 0 0 16px #333;
    transition: all 1.5s ease;
  }

  .gallery img:hover {
    box-shadow: 0 0 32px #333;
  }

  .gallery .content {
    padding: 4px;
  }

  .gallery .gallery-item {
    transition: grid-row-start 300ms linear;
    transition: transform 300ms ease;
    transition: all 0.5s ease;
    cursor: pointer;
  }

  .gallery .gallery-item:hover {
    transform: scale(1.025);
  }

  @media (max-width: 600px) {
    .gallery {
      grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
    }
  }

  @media (max-width: 400px) {
    .gallery {
      grid-template-columns: repeat(auto-fill, minmax(50%, 1fr));
    }
  }

  @-moz-keyframes zoomin {
    0% {
      max-width: 50%;
      transform: rotate(-30deg);
      filter: blur(4px);
    }

    30% {
      filter: blur(4px);
      transform: rotate(-80deg);
    }

    70% {
      max-width: 50%;
      transform: rotate(45deg);
    }

    100% {
      max-width: 100%;
      transform: rotate(0deg);
    }
  }

  @-webkit-keyframes zoomin {
    0% {
      max-width: 50%;
      transform: rotate(-30deg);
      filter: blur(4px);
    }

    30% {
      filter: blur(4px);
      transform: rotate(-80deg);
    }

    70% {
      max-width: 50%;
      transform: rotate(45deg);
    }

    100% {
      max-width: 100%;
      transform: rotate(0deg);
    }
  }

  @-o-keyframes zoomin {
    0% {
      max-width: 50%;
      transform: rotate(-30deg);
      filter: blur(4px);
    }

    30% {
      filter: blur(4px);
      transform: rotate(-80deg);
    }

    70% {
      max-width: 50%;
      transform: rotate(45deg);
    }

    100% {
      max-width: 100%;
      transform: rotate(0deg);
    }
  }

  @keyframes zoomin {
    0% {
      max-width: 50%;
      transform: rotate(-30deg);
      filter: blur(4px);
    }

    30% {
      filter: blur(4px);
      transform: rotate(-80deg);
    }

    70% {
      max-width: 50%;
      transform: rotate(45deg);
    }

    100% {
      max-width: 100%;
      transform: rotate(0deg);
    }
  }

  @media (max-width: 768px) {
    .containergallery {
      margin-top: -50px;
    }
  }

  @media (max-width: 349px) {
    .containergallery h1 {
      font-size: 25px;
    }
  }
</style>

<div class="container containergallery">
  <center>
    <h1>
      <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 59 "); ?>
      <?php foreach ($result as $row) : ?>
        <?= $row['materi']; ?>
      <?php endforeach;
      ?>
    </h1>
  </center>
  <div class="gallery" id="gallery">
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 6 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 11 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 7 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 12 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 14 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 13 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 9 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 8 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 17 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 15 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 16 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 18 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 19 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 23 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 21 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 22 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 30 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 20 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 24 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 26 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 33 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 28 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 29 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 25 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 31 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 32 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 27 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="gallery-item">
      <div class="content">
        <?php $i = 1; ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 34 "); ?>
        <?php foreach ($result as $row) :
          $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
          echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
        ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<script>
  var gallery = document.querySelector('#gallery');
  var getVal = function(element, style) {
    return parseInt(window.getComputedStyle(element).getPropertyValue(style));
  };
  var getHeight = function(item) {
    return item.querySelector('.content').getBoundingClientRect().height;
  };
  var resizeAll = function() {
    var altura = getVal(gallery, 'grid-auto-rows');
    var gap = getVal(gallery, 'grid-row-gap');
    gallery.querySelectorAll('.gallery-item').forEach(function(item) {
      var el = item;
      el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
    });
  };
  gallery.querySelectorAll('img').forEach(function(item) {
    item.classList.add('byebye');
    if (item.complete) {
      console.log(item.src);
    } else {
      item.addEventListener('load', function() {
        var altura = getVal(gallery, 'grid-auto-rows');
        var gap = getVal(gallery, 'grid-row-gap');
        var gitem = item.parentElement.parentElement;
        gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
        item.classList.remove('byebye');
      });
    }
  });
  window.addEventListener('resize', resizeAll);
  gallery.querySelectorAll('.gallery-item').forEach(function(item) {
    item.addEventListener('click', function() {
      item.classList.toggle('full');
    });
  });
</script>

<?php
include "../templates/footer.php";
?>