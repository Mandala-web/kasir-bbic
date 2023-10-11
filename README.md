# ADMIN :
- Menambahkan pelanggan
  - nama
  - email
  - telepon
- Report penjualan perhari (real time)
- Report penjualan pertanggal (setiap outlet)
- Pengeluaran
- POS (Transaksi kasir)
  - Admin bisa langsung memilih setiap outlet (id outlet) untuk transaksi
- Gudang (Inventory)
  - Untuk menambahkan stock poduk dengan kode dan nama produk (setiap outlet)
- Produk
  - Daftar produk (input produk setiap outlet)
  - Print label produk
  - Kategori produk
- Pengaturan
  - Input tokoh/outlet
  - Input Pengguna (admin,manager,kasir)
  - sistem
    -nama aplikasi
    -pajak
    -tampilan produk
    -logo
    -zona waktu
    -mata uang
    -tampilan keyboard
    -pelanggan default
  -Metode pembayaran (selain pembayaran lunas, hanya keterangan saja)

# MANAGER (Setiap manager hanya bisa mengatur kasir yang di handle/tokoh masing-masing)
- Menambahkan pelanggan
  - nama
  - email
  - telepon
- Report penjualan perhari (real time)
- Report penjualan pertanggal (hanya outletnya saja)
- Pengeluaran
- POS (Transaksi kasir)
  - Manager hanya bisa mengatur transaksi di kasir tokohnya/outletnya saja
- Gudang (Inventory)
  - Untuk menambahkan stock poduk dengan kode dan nama produk (outletnya saja)
- Produk
  - Daftar produk (input produk outletnya saja)
  - Print label produk
  - Kategori produk
- Pengaturan
  - Input tokoh/outlet (mensuting outletnya)
  - Input Pengguna (manager,kasir saja)

# KASIR
- Menambahkan Pelanggan
- Report penjualan perhari (tokoh/outlet masing-masing)
- POS (Transaksi kasir)
  - kasir hanya bisa mengatur transaksi di tokohnya/outletnya saja
- Gudang (inventory)
  - hanya bisa melihat dan mencari data stok
- Produk
  - Daftar produk (hanya bisa melihat dan mencari)
  - Print label produk
- Pengaturan
  - tokoh/outlet (hnya bisa mensuting tokohnya saja)
  - pengguna (hanya bisa edit dan suting akunnya)
 
# PROGRAM INI MENGGUNAKAN CODEIGNITER 3
# PHP Versi 5
# DATABASE MYSQL
# JAVASCRIPT
# CSS
# SCSS
# HTML

- Untuk konfigurasi database silahkan pahami dulu di config - database.php, sesuaikan username, pass dan nama db nya.
- Program ini 83% menggunakan logic PHP, Silahkan pahami terlebih dulu di Controllers - Pos.php dan di views - pos.php, karena saya buat rumus logic transaksi di situ.
- Pahami di config - routes.php
- Setiap file PHP saya beri Public Function all data, agar memudahkan pemanggilan data/id dan pahami setiap public function karena untuk integrasi setiap user dan beberapa base lainnya.
- pahami alur models, karena menautkan link setiap id di controllers.
- Untuk fokus di perubahan cetak struk, silahkan pahami di views - print
  
