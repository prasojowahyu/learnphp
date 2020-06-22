// koneksikan tiap elemen dari index
var key = document.getElementById('key');
var btnCari = document.getElementById('btnCari');
var container   = document.getElementById('container');

//tambahkan event js ketika keyword pencarian diketik
key.addEventListener( 'keyup', function() {
    //buat object ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function () {
        if( xhr.onreadystatechange == 4 && xhr.status == 200 ) { // 4 = status koneksi. 200, kode file dalam server = ready (browser>inspect>network)
                console.log('ajax test OK!');
        }
    }

    //run ajax
    xhr.open( 'GET', 'ajax/coba.txt', true ); //true berarti asyncronize
    xhr.send();

});