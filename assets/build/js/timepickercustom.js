$('#jam_start').datetimepicker({
  timepicker: true,
  format: 'H:i',
  // hours12: false,
  allowTimes: ['08.00', '08.30', '09.00', '09.30',
    '10.00', '10.30', '11.00', '11.30', '12.00', '12.30',
    '13.00', '13.30', '14.00', '14.30', '15.00', '15.30',
    '16.00', '16.30', '17.00'
  ],
  onShow: function (ct) {
    this.setOptions({
      maxTime: $('#jam_end').val() ? $('#jam_end').val() : false
    })
  }
})
$('#jam_end').datetimepicker({
  timepicker: true,
  format: 'H:i',
  hours12: false,
  allowTimes: ['08.00', '08.30', '09.00', '09.30',
    '10.00', '10.30', '11.00', '11.30', '12.00', '12.30',
    '13.00', '13.30', '14.00', '14.30', '15.00', '15.30',
    '16.00', '16.30', '17.00'
  ],

  onShow: function (ct) {
    this.setOptions({
      minTime: $('#jam_start').val() ? $('#jam_start').val() : false
    })
  }
})