var workout = function() {
  this.arrWorkout = [],
    this.insert = function(data) {
        this.arrWorkout.push(data);
        this.select();
    //used to add new items to my array
    };
  //returns/gets the collection of elements inside the table i created in my HTML file, and takes from the given tag name
  //which is "tbody" 
  this.select = function() {
    var workout = this.arrWorkout;
    var table = document.getElementById("Table").getElementsByTagName('tbody')[0];
    //takes the element stored inside "resultTotalMin
    var resultTotalMin = document.getElementById("resultTotalMin");
    //sets variable totalMin to 0
    var totalMin = 0;
    table.innerHTML = "";
    //for each w in the workout form, insert another row displayed with the information added from the user
    for (w in workout) {
      var row = table.insertRow();
      totalMin += parseInt(workout[w]['Time']);
      //insert cell into the row given by user input labeled inside the html form
      row.insertCell(0).innerHTML = workout[w]['Time'] + 'm';
      row.insertCell(1).innerHTML = workout[w]['Type'];
      row.insertCell(2).innerHTML = decodeURIComponent(workout[w]['Date']);
      row.insertCell(3).innerHTML = decodeURIComponent(workout[w]['BMI']);
      row.insertCell(4).innerHTML = decodeURIComponent(workout[w]['Food']);
      row.insertCell(5).innerHTML = decodeURIComponent(workout[w]['Calories']);
      row.insertCell(6).innerHTML = '<button  type=\'button\' class=\'delete\' value=' + w + '> &#x268A; </button>';
    }
    //displays the total number of minutes the user exercised based on the form
    resultTotalMin.innerHTML = '<h1 class=\'text-center\'>' + totalMin + ' Minutes of exercise<\h1>';

    //delete varibale
    //this will allow the user to delete each row with the press of the button next to each row entry in the form
    var del = document.getElementsByClassName("delete");
    var w = this;
    for (var i = 0; i < del.length; i++) {
      del[i].addEventListener("click", function() {
        w.detele(this.value);
      });
    }
  };
  this.detele = function(index) {
    var workout = this.arrWorkout;
    for (var w in workout) {
      if (w === index) {
        workout.splice(index, 1);
      }
    }
    this.select();
  };
  this.init = function() {
    var w = this;
    w.select();
    var form = document.getElementById("Form");
    var time = document.getElementById("Time");
    form.onsubmit = function() {
      var data = serialize(form);
      w.insert(data);
      this.reset();
      time.focus();
      return false;
    };
  };
  this.init();
};

workout();
