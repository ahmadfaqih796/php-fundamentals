<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form id="message-form">
      <input type="text" id="message" placeholder="Pesan">
      <button type="submit">Kirim Pesan</button>
   </form>

   <div id="message-list"></div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
      $("#message-form").submit(function(e) {
         e.preventDefault();
         var user = $("#user").val();
         var message = $("#message").val();
         $.post("send_message.php", {
            text: message
         }, function(data) {
            $("#message").val("");
         });
      });

      function loadMessages() {
         $.get("get_messages.php", function(data) {
            $("#message-list").html(data);
         });
      }
      loadMessages();
      setInterval(loadMessages, 2000);
   });
</script>

</html>