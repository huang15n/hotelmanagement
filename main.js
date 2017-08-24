 
  $( function() {
    $( "#datepicker1" ).datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        minDate: 0,
        onClose: function (selectedDate) {
            $("#datepicker1").datepicker("option", "dateFormat", "yy-mm-dd", selectedDate);
            
        }
    });
     $("#datepicker1").datepicker().change(function () {
        $("#datepicker2").datepicker('option', 'minDate', $(this).datepicker('getDate'));
    });
    $( "#datepicker2" ).datepicker({
        changeMonth: true,
        numberOfMonths: 1,
        minDate: 0,
        onClose: function (selectedDate) {
            $("#datepicker2").datepicker("option", "dateFormat", "yy-mm-dd", selectedDate);
        }
    });
  } );
 