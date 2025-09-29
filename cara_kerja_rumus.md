# Cara Kerja Perhitungan Skor Diagnosa

Sistem ini menggunakan metode **Certainty Factor (CF)** sederhana untuk menghitung skor kecocokan antara gejala yang dipilih pengguna dengan setiap penyakit yang ada di dalam basis pengetahuan.

### Rumus Utama

Rumus yang digunakan untuk menghitung skor setiap penyakit adalah:
Skor = (Jumlah Gejala Cocok) / (Total Gejala Aturan Penyakit)

# Cara Kerja Perhitungan Skor Diagnosa

Sistem ini menggunakan metode **Certainty Factor (CF)** sederhana untuk menghitung skor kecocokan antara gejala yang dipilih pengguna dengan setiap penyakit yang ada di dalam basis pengetahuan.

### Rumus Utama

Rumus yang digunakan untuk menghitung skor setiap penyakit adalah:
```

Skor = (Jumlah Gejala Cocok) / (Total Gejala Aturan Penyakit)

```

### Penjabaran Komponen Rumus

* **Jumlah Gejala Cocok (`$gejalaCocokCount`)**
    Ini adalah jumlah gejala yang dipilih oleh pengguna yang juga terdaftar sebagai gejala untuk suatu penyakit spesifik dalam *rule base*.

* **Total Gejala Aturan Penyakit (`$totalGejalaRule`)**
    Ini adalah jumlah total gejala yang seharusnya dimiliki oleh suatu penyakit menurut aturan yang telah ditetapkan oleh pakar.

---

### Contoh Alur Perhitungan

Berikut adalah simulasi sederhana untuk menunjukkan bagaimana rumus ini bekerja dalam sebuah skenario diagnosa.

**Skenario:**
* Seorang pengguna memilih 4 gejala: `G01`, `G02`, `G03`, dan `G07`.

**Basis Aturan (Rule Base):**
* **Osteoporosis (P01)** memiliki **6** gejala (`G01`, `G02`, `G03`, `G04`, `G05`, `G06`).
* **Osteoartritis (P02)** memiliki **5** gejala (`G07`, `G08`, `G09`, `G10`, `G11`).

**Proses Perhitungan:**

1.  **Perhitungan untuk Osteoporosis:**
    * Jumlah Gejala Cocok: **3** (`G01`, `G02`, `G03`).
    * Total Gejala Aturan: **6**.
    * **Skor**: `3 / 6 = 0.5` atau **50%**.

2.  **Perhitungan untuk Osteoartritis:**
    * Jumlah Gejala Cocok: **1** (`G07`).
    * Total Gejala Aturan: **5**.
    * **Skor**: `1 / 5 = 0.2` atau **20%**.

**Kesimpulan:**

Setelah membandingkan semua hasil, sistem akan menampilkan **Osteoporosis** sebagai diagnosa yang paling mungkin dengan skor keyakinan tertinggi, yaitu **50%**.
```
