$(function () {
  // Dropdown 
  $('.dropdown-toggle').click(function () {
    $(this).next('.dropdown').toggle(400);
  });
});

function foo(id) {
  var NotilogID = document.getElementById(id).getAttribute('NotilogID');
  var profileID = document.getElementById(id).getAttribute('profileID');
  var NotiID = document.getElementById(id).getAttribute('NotiID');
  var NotiSeen = document.getElementById(id).getAttribute('NotiSeen');
  var Notides = document.getElementById(id).getAttribute('Notides');
  console.log(NotilogID, profileID, NotiID, NotiSeen, Notides);

  swal(Notides);

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
    type: 'POST',
    url: "user/noti/setSeen",
    data: { NotilogID: NotilogID },
    success: function (data) {
      console.log(data);
    }
  });

  document.getElementById(id).className = "seennoti text-left";
  
}




