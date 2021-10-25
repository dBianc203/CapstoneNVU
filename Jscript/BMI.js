function Calculate(){
    var height = document.getElementById("Height").value;
    var weight = document.getElementById("Weight").value;

    var result = (parseFloat(weight) / parseFloat(height)/parseFloat(height))*703;
    if(!isNaN(result)){
        document.getElementById("bmi-output").innerHTML = result;
}
}
