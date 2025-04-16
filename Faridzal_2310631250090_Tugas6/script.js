function formPenerbangan() {
    let maskapai = document.forms["FormPenerbangan"]["maskapai"].value;
    let harga = document.forms["FormPenerbangan"]["harga_tiket"].value;
    let gagal = "";
    
    if (maskapai.trim() === "") {
        gagal += "Nama Maskapai tidak boleh kosong.\n";
    }
    if (harga <= 0 || isNaN(harga)) {
        gagal += "Harga tiket harus lebih dari 0 dan berupa angka.\n";
    }

    if (gagal) {
        alert(gagal);
        return false;
    }
    return true;
}