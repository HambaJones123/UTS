<!-- Input tanggal, nama customer, no. handphone, dan keterangan -->
<div class="container mt-4 mb-4"> <!-- Kontainer Bootstrap dengan margin atas dan bawah 4 unit -->
  <div class="card shadow-sm">
    <div class="card-body">
      <form class="row g-3"> <!-- Elemen formulir untuk input data -->
        <div class="col-md-3"> <!-- Untuk mengisi tanggal pembelian -->
          <label for="tanggal" class="form-label fw-bold">Tanggal Pembelian</label> <!-- Label untuk input tanggal -->
          <input type="date" class="form-control" id="tanggal" placeholder="Tanggal"> <!-- Input tanggal -->
        </div>
        <div class="col-md-3"> <!-- Untuk mengisi nama supplier -->
          <label for="namasupplier" class="form-label fw-bold">Nama Supplier</label>
          <!-- Label untuk input nama supplier -->
          <input type="text" class="form-control" id="namasupplier" placeholder="Masukkan Nama Supplier">
          <!-- Input nama supplier -->
        </div>
        <div class="col-md-3"> <!-- Untuk mengisi nomor handphone supplier -->
          <label for="cpsupplier" class="form-label fw-bold">CP Supplier</label>
          <!-- Label untuk input nomor handphone -->
          <input type="number" class="form-control" id="cpsupplier" placeholder="08xxx">
          <!-- Input nomor handphone -->
        </div>
        <div class="col-md-3"> <!-- Untuk mengisi alamat supplier -->
          <label for="alamatsupplier" class="form-label fw-bold">Alamat Supplier</label>
          <!-- Label untuk input keterangan -->
          <input type="text" class="form-control" id="alamatsupplier" placeholder="Masukkan Alamat Supplier">
          <!-- Input keterangan -->
        </div>
      </form>
    </div>
  </div>
</div>

<!-- container untuk menampilkan form input barang -->
<div class="container mt-4 mb-4"> <!-- Kontainer Bootstrap dengan margin atas dan bawah 5 unit -->

  <div class="row g-2 mb-3 align-items-end">
    <div class="col-md-2">
      <label class="form-label small text-muted mb-1">Kode Barang</label>
      <input class="form-control" type="text" id="kode" readonly data-bs-toggle="modal" data-bs-target="#masteritem"
        placeholder="Klik Pilih Barang" style="cursor: pointer;">
    </div>
    <div class="col-md-2">
      <label class="form-label small text-muted mb-1">Nama Barang</label>
      <input class="form-control bg-light" type="text" id="nama" disabled>
    </div>
    <div class="col-md-1">
      <label class="form-label small text-muted mb-1">Satuan</label>
      <input class="form-control bg-light" type="text" id="satuan" disabled>
    </div>
    <div class="col-md-2">
      <label class="form-label small text-muted mb-1">Harga</label>
      <input class="form-control bg-light" type="number" id="harga" disabled>
    </div>
    <div class="col-md-2">
      <label class="form-label small text-muted mb-1">Qty</label>
      <input class="form-control" type="number" id="qty" placeholder="0" min="1">
    </div>
    <div class="col-md-3">
      <label class="form-label small text-muted mb-1">Subtotal</label>
      <div class="input-group">
        <input class="form-control bg-light" type="number" id="subtotal" placeholder="0" disabled>
        <button class="btn btn-primary px-4" id="tambah" type="button">Tambah</button>
      </div>
    </div>
  </div>

  <!--Untuk menampilkan data barang-->
  <div class="table-responsive border rounded">
    <table class="table table-hover mb-0"> <!-- Tabel untuk menampilkan data barang -->
      <thead class="table-light"> <!-- Bagian header tabel -->
        <tr> <!-- Baris header tabel -->
          <th width="5%">Action</th>
          <th width="15%">Kode</th>
          <th width="25%">Nama</th>
          <th width="10%">Satuan</th>
          <th width="15%" class="text-end">Harga</th>
          <th width="10%" class="text-center">Qty</th>
          <th width="20%" class="text-end">Subtotal</th>
        </tr>
      </thead>
      <!-- tbody untuk menampilkan data barang -->
      <tbody id="tabledata"> <!-- Tubuh tabel yang akan diisi secara dinamis dengan JavaScript -->
      </tbody>
    </table>
  </div>

  <!-- Untuk menampilkan total yang harus dibayar -->
  <div class="row justify-content-end mt-4">
    <div class="col-md-5">
      <table class="table table-bordered table-sm">
        <tbody>
          <tr>
            <th class="align-middle px-3" style="width: 40%;">Total</th>
            <td colspan="2" id="displayTotal" class="text-end px-3 align-middle fw-bold">0</td>
          </tr>

          <tr>
            <th class="align-middle px-3">Diskon</th>
            <td style="width: 30%;">
              <div class="input-group input-group-sm">
                <input type="number" id="diskon" class="form-control text-end" placeholder="0" min="0" max="100">
                <span class="input-group-text">%</span>
              </div>
            </td>
            <td id="displayDiskon" class="text-end px-3 align-middle text-danger">0</td>
          </tr>

          <tr class="table-light">
            <th class="align-middle px-3 fs-6">Grand Total</th>
            <td colspan="2" id="displayGrandTotal" class="text-end px-3 align-middle fw-bold fs-5 text-success">0</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>


<!-- The Modal: jendela pop-up yang muncul saat tombol "Pilih barang" diklik -->
<div class="modal fade" id="masteritem">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header: bagian atas jendela pop-up yang berisi judul dan tombol close -->
      <div class="modal-header bg-primary text-white">
        <h4 class="modal-title">Master Item</h4>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body: bagian tengah jendela pop-up yang berisi konten -->
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Action</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><button class="btn btn-success" data-bs-dismiss="modal"
                    onclick="memilih('M01','Indomie Goreng', 'Kardus','100000')">Pilih</button></td>
                <td>M01</td>
                <td>Indomie Goreng</td>
                <td>Kardus</td>
                <td>100000</td>
              </tr>
              <tr>
                <td><button class="btn btn-success" data-bs-dismiss="modal"
                    onclick="memilih('M02','Indomie Soto', 'Kardus' ,'105000')">Pilih</button></td>
                <td>M02</td>
                <td>Indomie Soto</td>
                <td>Kardus</td>
                <td>105000</td>
              </tr>
              <tr>
                <td><button class="btn btn-success" data-bs-dismiss="modal"
                    onclick="memilih('M03','Indomie Kare Ayam','Kardus','105000')">Pilih</button></td>
                <td>M03</td>
                <td>Indomie Kare Ayam</td>
                <td>Kardus</td>
                <td>105000</td>
              </tr>
              <tr>
                <td><button class="btn btn-success" data-bs-dismiss="modal"
                    onclick="memilih('M04','Indomie Tori Miso', 'Kardus','110000')">Pilih</button></td>
                <td>M04</td>
                <td>Indomie Tori Miso</td>
                <td>Kardus</td>
                <td>110000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Modal footer: bagian bawah jendela pop-up yang berisi tombol close -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Error -->
<div class="modal fade" id="errorNoQty">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h4 class="modal-title">Error Peringatan</h4>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Harap pilih barang dan masukkan jumlah (qty) angka yang valid!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  // fungsi memilih barang
  function memilih(kode, nama, satuan, harga, qty) {
    $("#kode").val(kode); // mengisi nilai kode
    $("#nama").val(nama); // mengisi nilai nama
    $("#satuan").val(satuan); // mengisi nilai satuan
    $("#harga").val(harga); // mengisi nilai harga
    $("#qty").val(qty); // mengisi nilai qty
    $("subtotal").val(); // mengisi nilai subtotal
  }

  // fungsi menghitung total
  function hitungTotal() { // Fungsi untuk menghitung total
    let total = 0; // Inisialisasi total
    $("#tabledata tr").each(function () { // Iterasi setiap baris dalam tabel
      let h = $(this).find("td").eq(6).text(); // Mengambil nilai subtotal dari kolom ke-6. let h adalah variabel untuk menyimpan nilai subtotal
      total += parseFloat(h) || 0; // Menambahkan subtotal ke total
    });
    $("#displayTotal").html("<b>" + total + "</b>"); // Menampilkan total
    return total; // Mengembalikan nilai total
  }

  // fungsi menghitung diskon
  function hitungDiskon() { // Fungsi untuk menghitung diskon
    let total = hitungTotal(); // Menghitung total
    let persenDiskon = parseFloat($("#diskon").val()) || 0; // Mengambil nilai diskon
    let nominalDiskon = total * (persenDiskon / 100); // Menghitung nominal diskon
    $("#displayDiskon").html("<b>" + nominalDiskon + "</b>"); // Menampilkan diskon
    return nominalDiskon; // Mengembalikan nilai diskon
  }

  // fungsi menghitung grand total
  function hitungGrandTotal() { // Fungsi untuk menghitung grand total
    let total = hitungTotal(); // Menghitung total
    let diskon = hitungDiskon(); // Menghitung diskon
    let grandTotal = total - diskon; // Menghitung grand total
    $("#displayGrandTotal").html("<b>" + grandTotal + "</b>"); // Menampilkan grand total
    return grandTotal; // Mengembalikan nilai grand total
  }

  // fungsi menghitung kembalian
  function hitungKembalian() { // Fungsi untuk menghitung kembalian
    let grandTotal = hitungGrandTotal(); // Menghitung grand total
    let bayar = parseFloat($("#bayar").val()) || 0; // Mengambil nilai bayar
    let kembalian = bayar - grandTotal; // Menghitung kembalian
    $("#displayKembalian").html("<b>" + kembalian + "</b>"); // Menampilkan kembalian
  }

  // fungsi untuk menambahkan barang ke tabel
  $(document).ready(function () { // saat dokumen siap
    $("#qty").on("input", function () { // saat input qty diubah
      let h = $("#harga").val(); // mengambil nilai harga
      let q = $(this).val(); // mengambil nilai qty
      let sub = parseFloat(h) * parseFloat(q); // menghitung subtotal
      $("#subtotal").val(sub); // mengisi nilai subtotal
    });
    // Memicu perhitungan saat input diskon atau bayar diubah
    $("#diskon, #bayar").on("input", function () {
      hitungKembalian();
    });

    $("#tambah").click(function () { // saat tombol tambah diklik
      let k = $("#kode").val(); // mengambil nilai kode
      let n = $("#nama").val(); // mengambil nilai nama
      let s = $("#satuan").val(); // mengambil nilai satuan
      let h = $("#harga").val(); // mengambil nilai harga
      let q = $("#qty").val(); // mengambil nilai qty

      // Memaksa user untuk memasukkan jumlah (qty) sebelum melanjutkan
      if (!k || !q || q <= 0) {
        // menampilkan pesan error menggunakan Bootstrap modal
        $("#errorNoQty").modal("show");
        return;
      }

      // jika qty lebih besar dari 0, maka akan menghitung subtotal
      let sub = parseFloat(h) * parseFloat(q); // menghitung subtotal

      // menambahkan barang ke tabel
      $("#tabledata").append("<tr>"
        + "<td class='align-middle text-center'><button class='btn btn-outline-danger btn-sm rem' id='" + k + "'>&times;</button></td>"
        + "<td class='align-middle'>" + k + "</td>"
        + "<td class='align-middle'>" + n + "</td>"
        + "<td class='align-middle'>" + s + "</td>"
        + "<td class='align-middle text-end'>" + h + "</td>"
        + "<td class='align-middle text-center'>" + q + "</td>"
        + "<td class='align-middle text-end fw-bold'>" + sub + "</td>"
        + "</tr>");

      hitungKembalian(); // memanggil fungsi hitungKembalian untuk update semua nilai
    });

    // fungsi untuk menghapus barang dari tabel
    $("#tabledata").on("click", ".rem", function () {
      console.log("tes");
      $(this).closest('tr').remove();
      hitungKembalian(); // update nilai setelah barang dihapus
    });

  });
</script>