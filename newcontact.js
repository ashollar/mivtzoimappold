document.getElementById('addcontact').addEventListener("click", function() {
    var contact=document.getElementById("popup");
      contact.style.display = "grid";
      document.getElementById('close').addEventListener("click", function() {
        var contact=document.getElementById("popup");
          contact.style.display = "none";
    
      });

  });

 