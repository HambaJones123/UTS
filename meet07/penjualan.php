<div class="container mt-4 mb-4">
  <div class="card shadow-sm">
    <div class="card-body">
      <form class="row g-3">
        <div class="col-md-3">
          <label for="tanggal" class="form-label fw-bold">Tanggal</label>
          <input type="date" class="form-control" id="tanggal">
        </div>
        <div class="col-md-3">
          <label for="customer" class="form-label fw-bold">Nama Customer</label>
          <input type="text" class="form-control" id="customer" placeholder="Masukkan nama">
        </div>
        <div class="col-md-3">
          <label for="hp" class="form-label fw-bold">No. Handphone</label>
          <input type="number" class="form-control" id="hp" placeholder="08xxx">
        </div>
        <div class="col-md-3">
          <label for="keterangan" class="form-label fw-bold">Keterangan</label>
          <input type="text" class="form-control" id="keterangan" placeholder="Opsional">
        </div>
      </form>
    </div>
  </div>
</div>

<div class="container mt-4 mb-5">

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

  <div class="table-responsive border rounded">
    <table class="table table-hover mb-0">
      <thead class="table-light">
        <tr>
          <th width="5%">Action</th>
          <th width="15%">Kode</th>
          <th width="25%">Nama</th>
          <th width="10%">Satuan</th>
          <th width="15%" class="text-end">Harga</th>
          <th width="10%" class="text-center">Qty</th>
          <th width="20%" class="text-end">Subtotal</th>
        </tr>
      </thead>
      <tbody id="tabledata">
      </tbody>
    </table>
  </div>

  <!--Untuk menampilkan detail bayar-->
  <div class="row justify-content-end mt-4">
    <div class="col-md-5">
      <table class="table table-bordered table-sm">
        <tbody>
          <tr>
            <th class="align-middle px-3">Total</th>
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

  <!--Footer untuk detail bayar-->
  <div class="row justify-content-end mt-2">
    <div class="col-md-5">
      <table class="table table-bordered table-sm">
        <tbody>
          <tr>
            <th class="align-middle px-3">Bayar</th>
            <td colspan="2">
              <input type="number" id="bayar" class="form-control text-end fw-bold" placeholder="0">
            </td>
          </tr>
          <tr>
            <th class="align-middle px-3">Kembalian</th>
            <td colspan="2" id="displayKembalian" class="text-end px-3 align-middle fw-bold">0</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>


<div class="modal fade" id="masteritem">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Master Item</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>M01</td>
                <td>Indomie Goreng</td>
                <td>Bungkus</td>
                <td>3000</td>
                <td class="text-center"><button class="btn btn-sm btn-success px-3" data-bs-dismiss="modal"
                    onclick="memilih('M01','Indomie Goreng', 'Bungkus','3000')">Pilih</button></td>
              </tr>
              <tr>
                <td>M02</td>
                <td>Indomie Soto</td>
                <td>Bungkus</td>
                <td>3500</td>
                <td class="text-center"><button class="btn btn-sm btn-success px-3" data-bs-dismiss="modal"
                    onclick="memilih('M02','Indomie Soto', 'Bungkus' ,'3500')">Pilih</button></td>
              </tr>
              <tr>
                <td>M03</td>
                <td>Indomie Kare Ayam</td>
                <td>Bungkus</td>
                <td>3500</td>
                <td class="text-center"><button class="btn btn-sm btn-success px-3" data-bs-dismiss="modal"
                    onclick="memilih('M03','Indomie Kare Ayam','Bungkus','3500')">Pilih</button></td>
              </tr>
              <tr>
                <td>M04</td>
                <td>Indomie Tori Miso</td>
                <td>Bungkus</td>
                <td>3500</td>
                <td class="text-center"><button class="btn btn-sm btn-success px-3" data-bs-dismiss="modal"
                    onclick="memilih('M04','Indomie Tori Miso', 'Bungkus','3500')">Pilih</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="errorNoQty">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Error Peringatan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p class="mb-0">Harap pilih barang dan masukkan jumlah (qty) angka yang valid (minimal 1)!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script>
  // Membersihkan field Qty dan Subtotal saat barang baru dipilih dari modal
  function memilih(kode, nama, satuan, harga) {
    $("#kode").val(kode);
    $("#nama").val(nama);
    $("#satuan").val(satuan);
    $("#harga").val(harga);
    $("#qty").val('');
    $("#subtotal").val('');
    setTimeout(() => $('#qty').focus(), 300); // Otomatis fokus ke kolom Qty
  }

  function hitungTotal() {
    let total = 0;
    $("#tabledata tr").each(function () {
      let h = $(this).find("td").eq(6).text();
      total += parseFloat(h) || 0;
    });
    $("#displayTotal").html(total);
    return total;
  }

  function hitungDiskon() {
    let total = hitungTotal();
    let persenDiskon = parseFloat($("#diskon").val()) || 0;
    let nominalDiskon = total * (persenDiskon / 100);
    $("#displayDiskon").html(nominalDiskon);
    return nominalDiskon;
  }

  function hitungGrandTotal() {
    let total = hitungTotal();
    let diskon = hitungDiskon();
    let grandTotal = total - diskon;
    $("#displayGrandTotal").html(grandTotal);
    return grandTotal;
  }

  function hitungKembalian() {
    let grandTotal = hitungGrandTotal();
    let bayar = parseFloat($("#bayar").val()) || 0;
    let kembalian = bayar - grandTotal;
    $("#displayKembalian").html(kembalian);
  }

  $(document).ready(function () {

    // Fitur Tambahan: Auto kalkulasi Subtotal di kotak input saat mengetik Qty
    $("#qty").on("input", function () {
      let harga = parseFloat($("#harga").val()) || 0;
      let qty = parseFloat($("#qty").val()) || 0;
      $("#subtotal").val(harga * qty);
    });

    $("#diskon, #bayar").on("input", function () {
      hitungKembalian();
    });

    $("#tambah").click(function () {
      let k = $("#kode").val();
      let n = $("#nama").val();
      let s = $("#satuan").val();
      let h = $("#harga").val();
      let q = $("#qty").val();

      if (!k || !q || q <= 0) {
        $("#errorNoQty").modal("show");
        return;
      }

      let sub = parseFloat(h) * parseFloat(q);

      // Tambahkan class Bootstrap ke tabel baris agar rapi
      $("#tabledata").append("<tr>"
        + "<td class='align-middle text-center'><button class='btn btn-outline-danger btn-sm rem' id='" + k + "'>&times;</button></td>"
        + "<td class='align-middle'>" + k + "</td>"
        + "<td class='align-middle'>" + n + "</td>"
        + "<td class='align-middle'>" + s + "</td>"
        + "<td class='align-middle text-end'>" + h + "</td>"
        + "<td class='align-middle text-center'>" + q + "</td>"
        + "<td class='align-middle text-end fw-bold'>" + sub + "</td>"
        + "</tr>");

      // Reset form input setelah klik tambah
      $("#kode, #nama, #satuan, #harga, #qty, #subtotal").val("");

      hitungKembalian();
    });

    $("#tabledata").on("click", ".rem", function () {
      $(this).closest('tr').remove();
      hitungKembalian();
    });

  });
</script>