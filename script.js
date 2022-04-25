$(document).ready(function() {

    console.log('ready!');

    $('#b1rh').on('keyup', function() {

        // Ambil angka yang dipilih, tipe masih String
        let b1rh = $('#b1rh').val();
        
        // Ubah ke dalam bentuk integer
        const num_art = parseInt(b1rh);

        // Apabila si user ketik selain angka
        let tabel_art = '';

        // Pengulangan row per tabel
        for (let idx = 0; idx < num_art; idx++) {
            tabel_art += 
            `<tr>
                <td style="width:10px;">
                    <input type="number" id="b2a_${idx + 1}" name="b2a_${idx + 1}" class="form-control" value="${idx + 1}" disabled/>
                </td>
                <td>
                    <select id="b2b_${idx + 1}" name="b2b_${idx + 1}" class="form-control">
                        <option value="00">- Pilih Jawaban -</option>
                        <option value="01">Kepala Rumah Tangga</option>
                        <option value="02">Suami</option>
                        <option value="03">Istri</option>
                        <option value="04">Anak</option>
                        <option value="05">Menantu</option>
                        <option value="06">Cucu</option>
                        <option value="07">Orang Tua</option>
                        <option value="08">Mertua</option>
                        <option value="09">Famili Lain</option>
                        <option value="10">Pembantu/Sopir/Asisten Rumah Tangga/Pengasuh</option>
                        <option value="11">Lainnya</option>
                    </select>
                </td>
                <td>
                    <select id="b2c_${idx + 1}" name="b2c_${idx + 1}" class="form-control">
                        <option value="0">- Pilih Jawaban -</option>
                        <option value="1">Laki-Laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="b2d_${idx + 1}" name="b2d_${idx + 1}" class="form-control" min="1" step="1" />
                </td>
                <td>
                    <select id="b2e_${idx + 1}" name="b2e_${idx + 1}" class="form-control">
                        <option value="0">- Pilih Jawaban -</option>
                        <option value="1">Belum Kawin</option>
                        <option value="2">Kawin</option>
                        <option value="3">Cerai Hidup</option>
                        <option value="4">Cerai Mati</option>
                    </select>
                </td>
                <td>
                    <input type="text" id="b2f_${idx + 1}" name="b2f_${idx + 1}" class="form-control" min="0" step="1" />
                </td>
            </tr>`;
        }
        
        $('#table-art-lf-sp2020').html(tabel_art);

    });

    // Fungsi untuk merge dua list menjadi dictionary object
    function merged (first, second) {
        let dict = {};
        for (let i=0; i < first.length; i++) {
            dict[first[i]] = second[i]
        }

        return dict;
    }

    // Submit
    $('#form-add-lf-sp2020').submit(function(e) {
        e.preventDefault();

        let b1ra = $('#b1ra').val();
        let b1rb = $('#b1rb').val();
        let b1rc = $('#b1rc').val();
        let b1rd = $('#b1rd').val();
        let b1re = $('#b1re').val();
        let b1rf = $('#b1rf').val();
        let b1rg = $('#b1rg').val();
        let b3r1 = $('#b3r1').val();
        let b3r2 = $('#b3r2').val();
        let b3r3 = $('#b3r3').val();

        // Untuk b1rh, perlu perlakuan untuk ambil data
        let b1rh = $('#b1rh').val();
        let num_art = parseInt(b1rh);

        let art = [];

        $('#table-art-lf-sp2020 tr').each(function (idx, tr) {
            // Mengambil cell value tiap row
            let a = $(tr).find("td:eq(0) input[type='number']").val();
            let b = $(tr).find("td:eq(1) select").val();
            let c = $(tr).find("td:eq(2) select").val();
            let d = $(tr).find("td:eq(3) input[type='number']").val();
            let e = $(tr).find("td:eq(4) select").val();
            let f = $(tr).find("td:eq(5) input[type='text']").val();
            
            // Memasukkannya ke dalam columns dan values
            let columns = [`b2a_${idx + 1}`, `b2b_${idx + 1}`, `b2c_${idx + 1}`, `b2d_${idx + 1}`, `b2e_${idx + 1}`, `b2f_${idx + 1}`];
            let values = [a, b, c, d, e, f];

            art[idx] = merged(columns, values);
        });

        let ruta = {
            'b1ra': b1ra,
            'b1rb': b1rb,
            'b1rc': b1rc,
            'b1rd': b1rd,
            'b1re': b1re,
            'b1rf': b1rf,
            'b1rg': b1rg,
            'b1rh': num_art,
            'b3r1': b3r1,
            'b3r2': b3r2,
            'b3r3': b3r3,
            'art' : art
        };

        let agree = $('#agree').is(":checked");
        if (agree){
            console.log(ruta);
            alert(JSON.stringify(ruta));
        } else {
            alert('Checklist untuk SETUJU data dikirim.');
        }
        
    });

});