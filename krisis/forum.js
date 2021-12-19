var komen = ["Ya ndak tau kok tanya saya"];
var user = ["joko why"];

function tabel() {
    var tabel = document.getElementById('komen');
    tabel.innerHTML = '<tr><td>kay sang<br><br>ya tanya bapak jangan tanya saya</td></tr>';
    for (let i = 0; i < komen.length; i++) {
        tabel.innerHTML += "<tr><td>"+user[i]+"<br><br>"+komen[i]+"</td></tr>";
    }
}
function send() {
    var name = document.getElementById("username").value;
    var komentar = document.getElementById("komentar").value;
    komen.push(komentar);
    user.push(name);
    tabel();
}
tabel();
