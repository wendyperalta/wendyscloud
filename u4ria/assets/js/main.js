$( document ).ready(function() {

 $("#class").change(function() {
	var classID = $(this).val();
	//console.log(classID);
 //$("#difficulty").html("")
  $.ajax({
  type: "POST",
  url: "getdifficulty.php",
  data: {"classId" : classID }
})
  .done(function( msg ) {
	  //console.log(msg);
    $("#difficulty").html(msg);
  });
});

$("#difficulty").change(function() {
	var diffID = $(this).val();
	var classID = $("#class").val();
	console.log(diffID);
 $("#day").html("");
  $.ajax({
  type: "POST",
  url: "getday.php",
  data: {"difficultyId" : diffID, "classID" : classID }
})
  .done(function( msg ) {
    $("#day").html(msg);
  });
});

$("#day").change(function() {
 var classID = $("#class option:selected").val();
 var dayID = $(this).val();
 $("#time").html("")
  $.ajax({
  type: "POST",
  url: "gettime.php",
  data: {classId: classID, dayId: dayID}
})
  .done(function( msg ) {
	$("#time").html(msg);
  });
});

$("#time").change(function() {
	$("#billing").slideDown("slow");
});

});
	
	
