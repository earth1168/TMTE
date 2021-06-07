function doo(id) {
    var status = document.getElementById(id).getAttribute('status');
    var mediaLogID = document.getElementById(id).getAttribute('mediaLog');
    var traget = id;
    console.log(status, id, mediaLogID);
  
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  
    $.ajax({
      type: 'POST',
      url: "media/setStatus",
      data: { status: status,
              traget: traget,
              mediaLogID:mediaLogID},

      success: function (data) {
        console.log(data.success);
      }
    });
  
  }