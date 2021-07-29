function om() {
    var text1=document.getElementById("input1").value;
    var text2=document.getElementById("input2").value;
    var text3=document.getElementById("input3").value;
    var text4=document.getElementById("input4").value;
    var text5=document.getElementById("input5").value;

    document.getElementById("result").innerHTML+="Nom: "+text1+"<br>";

    document.getElementById("result").innerHTML+="prenom: "+text2+"<br>";
    document.getElementById("result").innerHTML+="Telephone: "+text3+"<br>";
    document.getElementById("result").innerHTML+="Adresse: "+text4+"<br>";
    document.getElementById("result").innerHTML+="E-mail: "+text5+"<br>";

}
