<div class="container mt-5 mb-5"> <!-- Kontainer Bootstrap dengan margin atas dan bawah 5 unit -->
    <form> <!-- Elemen formulir untuk input data -->
      <div class="mb-3"> <!-- Elemen formulir dengan margin bawah 3 unit -->
        <label for="tanggal" class="form-label">Tanggal</label> <!-- Label untuk input tanggal -->
        <input type="date" class="form-control" id="tanggal" placeholder="Tanggal"> <!-- Input tanggal -->
      </div>
      <div class="mb-3"> <!-- Elemen formulir dengan margin bawah 3 unit -->
        <label for="customer" class="form-label">Nama Customer</label> <!-- Label untuk input nama customer -->
        <input type="text" class="form-control" id="customer" placeholder="Nama Customer"> <!-- Input nama customer -->
      </div>
      <div class="mb-3"> <!-- Elemen formulir dengan margin bawah 3 unit -->
        <label for="hp" class="form-label">No. Handphone</label> <!-- Label untuk input nomor handphone -->
        <input type="number" class="form-control" id="hp" placeholder="No. Handphone"> <!-- Input nomor handphone -->
      </div>
      <div class="mb-3"> <!-- Elemen formulir dengan margin bawah 3 unit -->
        <label for="keterangan" class="form-label">Keterangan</label> <!-- Label untuk input keterangan -->
        <input type="text" class="form-control" id="keterangan" placeholder="Keterangan"> <!-- Input keterangan -->
      </div>
    </form>
    <!--<div class="col-sm-2"><input type="text" id="tanggal" placeholder="Tanggal"></div>
    <div class="col-sm-2"><input type="text" id="customer" placeholder="Nama Customer"></div>
    <div class="col-sm-2"><input type="text" id="hp" placeholder="No. Handphone"></div>
    <div class="col-sm-2"><input type="text" id="keterangan" placeholder="Keterangan"></div>-->
  </div>

  <!-- container untuk menampilkan form input barang -->
  <div class="container mt-5 mb-5"> <!-- Kontainer Bootstrap dengan margin atas dan bawah 5 unit -->
    <div class="row"> <!-- Baris Bootstrap untuk mengatur tata letak kolom -->
      <div class="col-sm-2"><input class="form-control" type="text" id="kode" readonly data-bs-toggle="modal" data-bs-target="#masteritem"
          placeholder="Pilih barang">
        <!-- Input kode barang yang tidak bisa diedit (readonly) dan memicu modal saat diklik -->
      </div>
      <div class="col-sm-2"><input class="form-control" type="text" id="nama" readonly placeholder="Nama barang"></div>
      <!-- Input nama barang yang tidak bisa diedit (readonly) -->
      <div class="col-sm-2"><input class="form-control" type="text" id="satuan" readonly placeholder="Satuan barang"></div>
      <!-- Input satuan barang yang tidak bisa diedit (readonly) -->
      <div class="col-sm-2"><input class="form-control" type="number" id="harga" readonly placeholder="Harga barang"></div>
      <!-- Input harga barang yang tidak bisa diedit (readonly) -->
      <div class="col-sm-2"><input class="form-control" type="number" id="qty" placeholder="Jumlah"></div> <!-- Input jumlah barang -->
      <div class="col-sm-2"><button class="btn btn-primary" id="tambah">Tambah</button></div>
      <!-- Tombol untuk menambahkan barang -->
    </div>
    <table class="table"> <!-- Tabel untuk menampilkan data barang -->
      <thead> <!-- Bagian header tabel -->
        <tr> <!-- Baris header tabel -->
          <th>Action</th> <!-- Kolom untuk tombol aksi -->
          <th>Kode</th> <!-- Kolom untuk kode barang -->
          <th>Nama</th> <!-- Kolom untuk nama barang -->
          <th>Satuan</th> <!-- Kolom untuk satuan barang -->
          <th>Harga</th> <!-- Kolom untuk harga barang -->
          <th>Qty</th> <!-- Kolom untuk jumlah barang -->
          <th>Subtotal</th> <!-- Kolom untuk subtotal barang -->
        </tr>
      </thead>
      <!-- tbody untuk menampilkan data barang -->
      <tbody id="tabledata"> <!-- Tubuh tabel yang akan diisi secara dinamis dengan JavaScript -->
      </tbody>
      <!-- footer untuk menampilkan total, diskon, grand total, bayar, dan kembalian -->
      <tfooter>
        <tr>
          <td colspan="6" class="text-end align-middle fw-bold">Total</td>
          <!-- Colspan untuk menggabungkan 6 kolom menjadi satu -->
          <td id="displayTotal" class="align-middle">0</td> <!-- Menampilkan total -->
        </tr>
        <tr>
          <td colspan="6" class="text-end">
            <div class="d-flex justify-content-end align-items-center"> <!-- D-flex untuk mengatur tata letak kolom -->
              <span class="me-2 fw-bold">Diskon</span> <!-- Label untuk diskon -->
              <div class="input-group" style="width: 100px;"> <!-- Input group untuk diskon -->
                <input type="number" id="diskon" class="form-control" placeholder="0" min="0" max="100">
                <!-- Input diskon -->
                <span class="input-group-text">%</span> <!-- Simbol persen untuk diskon -->
              </div>
            </div>
          </td>
          <td id="displayDiskon" class="align-middle">0</td> <!-- Menampilkan diskon -->
        </tr>
        <tr>
          <td colspan="6" class="text-end">Grand Total</td> <!-- Colspan untuk menggabungkan 6 kolom menjadi satu -->
          <td id="displayGrandTotal">0</td> <!-- Menampilkan grand total -->
        </tr>
        <tr>
          <td colspan="6" class="text-end align-middle">Bayar</td>
          <!-- Colspan untuk menggabungkan 6 kolom menjadi satu -->
          <td id="displayBayar"><input type="number" id="bayar" class="form-control" style="width: 150px;"
              placeholder="Bayar"></td> <!-- Placeholder untuk input bayar -->
        </tr>
        <tr>
          <td colspan="6" class="text-end">Kembalian</td> <!-- Colspan untuk menggabungkan 6 kolom menjadi satu -->
          <td id="displayKembalian">0</td> <!-- Menampilkan kembalian -->
        </tr>
      </tfooter>
    </table>
  </div>


  <!-- The Modal: jendela pop-up yang muncul saat tombol "Pilih barang" diklik -->
  <div class="modal" id="masteritem">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header: bagian atas jendela pop-up yang berisi judul dan tombol close -->
        <div class="modal-header">
          <h4 class="modal-title">Master Item</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body: bagian tengah jendela pop-up yang berisi konten -->
        <div class="modal-body">
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
                    onclick="memilih('M01','Indomie Goreng', 'Bungkus','3000')">Pilih</button></td>
                <td>M01</td>
                <td>Indomie Goreng</td>
                <td>Bungkus</td>
                <td>3000</td>
              </tr>
              <tr>
                <td><button class="btn btn-success" data-bs-dismiss="modal"
                    onclick="memilih('M02','Indomie Soto', 'Bungkus' ,'3500')">Pilih</button></td>
                <td>M02</td>
                <td>Indomie Soto</td>
                <td>Bungkus</td>
                <td>3500</td>
              </tr>
              <tr>
                <td><button class="btn btn-success" data-bs-dismiss="modal"
                    onclick="memilih('M03','Indomie Kare Ayam','Bungkus','3500')">Pilih</button></td>
                <td>M03</td>
                <td>Indomie Kare Ayam</td>
                <td>Bungkus</td>
                <td>3500</td>
              </tr>
              <tr>
                <td><button class="btn btn-success" data-bs-dismiss="modal"
                    onclick="memilih('M04','Indomie Tori Miso', 'Bungkus','3500')">Pilih</button></td>
                <td>M04</td>
                <td>Indomie Tori Miso</td>
                <td>Bungkus</td>
                <td>3500</td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Modal footer: bagian bawah jendela pop-up yang berisi tombol close -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal Error -->
  <div class="modal" id="errorNoQty">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Harap pilih barang dan masukkan jumlah (qty) angka yang valid!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
        $("#tabledata").append("<tr><td><button class=\"btn btn-danger rem\" id=\"" + k + "\">X</button></td><td>"
          + k + "</td><td>" // kolom kode
          + n + "</td><td>" // kolom nama
          + s + "</td><td>" // kolom satuan
          + h + "</td><td>" // kolom harga
          + q + "</td><td>" // kolom qty
          + sub + "</td>" // kolom subtotal
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