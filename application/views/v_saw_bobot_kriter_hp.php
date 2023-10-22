<div class="col-lg-8 card-solid  mt-4 ">
  <h1 class="text-center"><b> HANDPHONE </b></h1>
  <h3 class="text-center"> Btw, Kriteria yang kk mau seperti apa? </h3>
  <br><br>
  <div class="row d-flex align-items-center ">
    <form name="saw" action="saw_hasil_hp" method="GET" enctype="multipart/form-data">

      <label for="rangeHarga">Range harga</label>
      <div class="p-slider__wrapper">
        <input type="range" min="0" max="15000000" value="2500000" step="1" id="rangeHarga" aria-label="rangeHarga">
        <input class="p-slider__input" type="text" name="rangeHarga" id="rangeHarga-input" tabindex="0">
      </div><br>

      <label for="banyakBarang">Banyaknya Hasil</label>
      <div class="p-slider__wrapper">
        <input type="range" min="0" max="10" value="3" step="1" id="banyakBarang" aria-label="banyakBarang">
        <input class="p-slider__input" type="text" name="banyakBarang" id="banyakBarang-input" tabindex="0">
      </div><br>

      <label for="sawKriteriaHP">Kriteria</label>
      <select class="required" required="required" name="sawKriteriaHP" id="sawKriteriaHP">
        <option value="" disabled="disabled" selected="">Select an option</option>
        <option value="Fotografi">Fotografi</option>
        <option value="Gaming">Gaming</option>
      </select><br><br>
      <button type="submit" class="btn btn-primary btn-block">Prosses</button>

    </form>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>