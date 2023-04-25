document.addEventListener("DOMContentLoaded", function(event) {
    var form = document.querySelector("form");
    var createGroupBtn = document.querySelector("#create-group-btn");
  
    createGroupBtn.addEventListener("click", function(event) {
      event.preventDefault();
      var groupName = document.querySelector("#group-name").value;
      var groupDescription = document.querySelector("#group-description").value;
  
      // Code to create a new WhatsApp group using the entered data
    });
  });
  