<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kartu Kendali | Long Form SP2020</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container" style="background-color: #E9EFC0;">
        <form id="form-add-lf-sp2020">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h1 class="text-center">FORM KENDALI <i>LONG FORM</i> SP2020</h1>
            </div>

            <table id="table-ruta-lf-sp2020" class="table table-responsive table-bordered">
                <tbody>
                    <tr style="background-color: #DEB6AB;" class="text-center">
                        <td colspan="3">
                            <b>BLOK I. IDENTIFIKASI RUMAH TANGGA SAMPEL</b>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 10px;">a.</td>
                        <td style="max-width: 375px;">Kabupaten/Kota</td>
                        <td>
                            <select id="b1ra" name="b1ra" class="form-control">
                                <option value="00">- Pilih Kabupaten/Kota -</option>
                                <option value="01">Lampung Barat</option>
                                <option value="02">Tanggamus</option>
                                <option value="03">Lampung Selatan</option>
                                <option value="04">Lampung Timur</option>
                                <option value="05">Lampung Tengah</option>
                                <option value="06">Lampung Utara</option>
                                <option value="07">Way Kanan</option>
                                <option value="08">Tulang Bawang</option>
                                <option value="09">Pesawaran</option>
                                <option value="10">Pringsewu</option>
                                <option value="11">Mesuji</option>
                                <option value="12">Tulang Bawang Barat</option>
                                <option value="13">Pesisir Barat</option>
                                <option value="71">Bandar Lampung</option>
                                <option value="72">Metro</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 10px;">b.</td>
                        <td style="max-width: 375px;">Kecamatan</td>
                        <td>
                            <select id="b1rb" name="b1rb" class="form-control">
                                <option value="000">- Pilih Kecamatan -</option>
                                <option value="010">Labuhan Ratu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 10px;">c.</td>
                        <td style="max-width: 375px;">Desa/Kelurahan</td>
                        <td>
                            <select id="b1rc" name="b1rc" class="form-control">
                                <option value="000">- Pilih Desa/Kelurahan -</option>
                                <option value="003">Labuhan Ratu Raya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 10px;">d.</td>
                        <td style="max-width: 375px;">Nomor Blok Sensus (NBS)</td>
                        <td>
                            <select id="b1rd" name="b1rd" class="form-control">
                                <option value="00">- Pilih NBS -</option>
                                <option value="003B">003B</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 10px;">e.</td>
                        <td style="max-width: 375px;">Nomor Kode Sampel (NKS)</td>
                        <td>
                            <input type="text" id="b1re" name="b1re" class="form-control" value="1300014" />
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 10px;">f.</td>
                        <td style="max-width: 375px;">Nomor Urut Rumah Tangga Sampel (NURTS)</td>
                        <td>
                            <select id="b1rf" name="b1rf" class="form-control">
                                <option value="0">- Pilih NUS -</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 10px;">g.</td>
                        <td style="max-width: 375px;">Nama Kepala Rumah Tangga (KRT)</td>
                        <td>
                            <input type="text" id="b1rg" name="b1rg" class="form-control" value="EKO TEGUH WIDODO" />
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 10px;">h.</td>
                        <td style="max-width: 375px;">Jumlah Anggota Rumah Tangga (n)</td>
                        <td>
                            <input type="number" id="b1rh" name="b1rh" class="form-control" min="1" step="1" max="20" />
                        </td>
                    </tr>
                    <tr style="background-color: #DEB6AB;" class="text-center">
                        <td colspan="3">
                            <b>BLOK II. JUMLAH ANGGOTA RUMAH TANGGA</b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Nomor Anggota Rumah Tangga</th>
                                        <th scope="col" class="text-center">Hubungan dengan KRT</th>
                                        <th scope="col" class="text-center">Jenis Kelamin</th>
                                        <th scope="col" class="text-center">Umur</th>
                                        <th scope="col" class="text-center">Status Perkawinan</th>
                                        <th scope="col" class="text-center">Nomor Urut Ibu Kandung</th>
                                    </tr>
                                </thead>
                                <tbody id="table-art-lf-sp2020"></tbody>
                            </table>
                        </td>
                    </tr>
                    <tr style="background-color: #DEB6AB;" class="text-center">
                        <td colspan="3">
                            <b>BLOK III. LAINNYA</b>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 10px;">1.</td>
                        <td style="max-width: 375px;">Apakah Ada Kejadian Migrasi Keluar Internasional di Rumah Tangga Ini? (Lihat P.501)</td>
                        <td>
                            <select id="b3r1" name="b3r1" class="form-control">
                                <option value="0">- Pilih Jawaban -</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 10px;">2.</td>
                        <td style="max-width: 375px;">Apakah Ada Kejadian Kematian di Rumah Tangga Ini? (Lihat P.601)</td>
                        <td>
                            <select id="b3r2" name="b3r2" class="form-control">
                                <option value="0">- Pilih Jawaban -</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 10px;">3.</td>
                        <td style="max-width: 375px;">Apakah Ada Kejadian Kelahiran di Rumah Tangga Ini? (Lihat P.701)</td>
                        <td>
                            <select id="b3r3" name="b3r3" class="form-control">
                                <option value="0">- Pilih Jawaban -</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="3">
                            <input type="checkbox" name="agree" id="agree" />
                            <span>Dengan ini saya menyetujui bahwa data di atas adalah BENAR dan SIAP untuk dikirimkan ke SERVER.</span>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="3">
                            <button type="submit" class="btn btn-primary">KIRIM KE SERVER</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="script.js"></script>
</body>

</html>