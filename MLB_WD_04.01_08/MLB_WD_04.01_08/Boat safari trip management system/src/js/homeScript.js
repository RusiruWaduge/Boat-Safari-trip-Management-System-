var visibleTables = 4; // Number of tables initially visible
var totalTables = 4; // Total number of tables

function showMoreTables() {
  var hiddenTables = document.getElementsByClassName("detailTable");
  for (var i = visibleTables; i < visibleTables + 1 && i < totalTables; i++) {
    hiddenTables[i].style.display = "table";
  }
  visibleTables += 1;
  
  if (visibleTables >= totalTables) {
    document.getElementById("viewMore").style.display = "none";
  }
}

function initializeTables() {
  var hiddenTables = document.getElementsByClassName("detailTable");
  for (var i = visibleTables; i < totalTables; i++) {
    hiddenTables[i].style.display = "none";
  }
  
  if (visibleTables >= totalTables) {
    document.getElementById("viewMore").style.display = "none";
  }
}

