/**
 * Desafio Citra JS Document
 */

const API = "http://localhost/git/desafiocitra/server/api/v1/conta.php";

var validateInputSearch = function(text) {
  if(text === "Todos") {
    $("#inputSearch").attr("disabled","disabled");
  } else {
    $("#inputSearch").removeAttr("disabled","disabled");
  }
}

var updateSelectionSearch = function() {
  $(".dropdown-menu a").click(function(){

      $("#optionSearch:first-child").text($(this).text());
      $("#optionSearch:first-child").val($(this).text());

      validateInputSearch($(this).text());

   });
}

var updateListView = function(newElement) {
  $("#listView").empty();
  $("#listView").append(newElement);
}

var doSearch = function() {
  $("#btnSearch").click(function() {

    var spinner = $("<i class='fas fa-spinner'></i>").addClass("spinner");
    updateListView(spinner);

    var option = 0; // Default "Todos"
    if ($("#optionSearch:first-child").val() === "Por Id") option = 1;
    else if ($("#optionSearch:first-child").val() === "Por Nome") option = 2;

    var value = $("#inputSearch").val();

    $.get(API, {option: option, id: value}).done(function(data) {
      data = JSON.parse(data);
      var html = "";

      $.each(data, function(i, item) {
          html += "<div class='card w-50' align='left'><div class='card-body'><b><h3 class='card-title'>"+data[i].nome+"</h3></b><p class='card-text'>ID: "+data[i].id+"</p><p class='card-text'>Saldo: "+parseFloat(data[i].saldo).toFixed(2)+"</p><p class='card-text'>data de abertura da conta: "+data[i].dataAbertura+"</p></div></div><br />";
      });
      updateListView(html);
    });
  });
}

$(document).ready(function() {
  validateInputSearch("Todos");
  updateSelectionSearch();
  doSearch();
});
