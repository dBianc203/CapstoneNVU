//function Calculate 
function Calculate(){
    //Variable height takes the element that is labeled "Height" in the html file
    var height = document.getElementById("Height").value;
    //variable weight take the element that is labeled "Weight" in the html file
    var weight = document.getElementById("Weight").value;

    //varible result take the weight, divides that by the height and weight together multiplied by 703
    var result = (parseFloat(weight) / parseFloat(height)/parseFloat(height))*703;
    //isNAN = is not a number
    //if the varible "result" is NOT not a number, display the result inside "bmi-output"
    if(!isNaN(result)){
        document.getElementById("bmi-output").innerHTML = result;
        if(result < 18.5){
            document.getElementById("bmi-status").innerHTML = "Underweight";
        }
        else if(result < 25){
            document.getElementById("bmi-status").innerHTML = "Healthy";
        }
        else if(result < 30){
            document.getElementById("bmi-status").innerHTML = "Overweight";
        }
        else{
            document.getElementById("bmi-status").innerHTML = "Obesity";
        }
}
}
