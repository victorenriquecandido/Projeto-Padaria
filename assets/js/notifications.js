$(document).ready(function() {
  function notification(message, type){
    var notify = $.notify(message, {
      icon: 'glyphicon glyphicon-alert',
      type: type,
      allow_dismiss: true
    });
  }
  return notify;
});