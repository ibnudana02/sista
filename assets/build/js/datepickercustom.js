$(function () {
  $(".datepicker").datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    todayHighlight: true,
  });
  $("#tgl_start").on('changeDate', function (selected) {
    var startDate = new Date(selected.date.valueOf());
    $("#tgl_end").datepicker('setStartDate', startDate);
    if ($("#tgl_start").val() > $("#tgl_end").val()) {
      $("#tgl_end").val($("#tgl_start").val());
    }
  });


  $('.timepicker').timepicker({
    timeFormat: 'HH:mm',
    interval: 30,
    minTime: '08',
    maxTime: '17:00',
    defaultTime: '08',
    startTime: '08:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
  });

});