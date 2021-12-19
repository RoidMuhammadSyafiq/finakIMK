var komen = ["bagus kak artkelnya, semangat terus ya"];
var user = ["joko"];

function tabel() {
    var tabel = document.getElementById('komen');
    tabel.innerHTML = '<tr><td>Udin<br><br>Bagus artikelnya, semangat terus Kakak </td></tr>';
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
