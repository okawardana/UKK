<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
  function Home() {
    $('li.active').removeClass('active');
    $("a[href$='/Tamu/Home']").closest('li').addClass('active'); 
  }
  function kamar() {
    $('li.active').removeClass('active');
      $("a[href$='/Tamu/formpemesanan']").closest('li').addClass('active'); 
  }
  function fasilitas() {
    $('li.active').removeClass('active');
      $("a[href$='/Tamu/Fasilitas']").closest('li').addClass('active'); 
  }
  function pesan() {
    $('li.active').removeClass('active');
      $("a[href$='/Tamu/pesanKamar']").closest('li').addClass('active'); 
  }
  function listbook() {
    $('li.active').removeClass('active');
      $("a[href$='/Tamu/ref']").closest('li').addClass('active'); 
  }
  $(document).ready(function() {
    let kategori = $('h2.text-center').html();
    console.log(kategori);
      if( kategori == 'Hotel Hebat Online Reservation') {
        Home();
        return
      } else if (kategori == 'Tipe Kamar yang Tersedia') {
        kamar();
        return
      } else if (kategori == 'Fasilitas Kamar &amp; Hotel') {
        fasilitas();
        return
      } else if (kategori == 'Form Pemesanan') {
        pesan();
        return
      } else if (kategori == 'LIST BOOKING ANDA') {
        listbook();
        return
      };
  });
  function goBack() {
    window.history.back();
  }
</script>
<script>
  feather.replace()
</script>   
