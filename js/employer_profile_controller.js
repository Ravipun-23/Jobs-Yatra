const username = document.querySelector("#username");
const name_fields = document.querySelectorAll(".name");
const address_fields = document.querySelectorAll(".address");
const contact_fields = document.querySelectorAll(".contact");
const date_fields = document.querySelectorAll(".date");
const email_fields = document.querySelectorAll(".email");
const logo = document.querySelector("#comp_logo");
const companyDescription_fields = document.querySelectorAll(
   ".companyDescription"
);

$(document).ready(function () {
   $.ajax({
      url: "../php/user_session.php?logged=0&name=0",
      success: function (data) {
         var session = data.split(",");
         if (session[0] == "0") {
            window.location.href = "../User_identification/Employer/login.html";
         }
         username.textContent = session[1].split(" ")[0];
      },
   });

   function fillInputDetail() {
      $.ajax({
         url: "../php/user_details.php?employer_detail=0",
         success: function (data) {
            var session = data.split(",");

            name_fields.forEach((_name) => {
               _name.value = session[1];
            });

            address_fields.forEach((address) => {
               address.value = session[2];
            });

            contact_fields.forEach((contact) => {
               contact.value = session[3];
            });

            date_fields.forEach((date) => {
               date.value = session[4];
            });

            logo.value = session[5];

            companyDescription_fields.forEach((companyDescription_fields) => {
               companyDescription_fields.value = session[6];
            });

            email_fields.forEach((email) => {
               email.value = session[7];
            });
         },
      });
   }

   save.addEventListener("click", function () {
      let parameter =
         "edit_employer_detail=0&name='" +
         name_fields[1].value +
         "'&address='" +
         address_fields[1].value +
         "'&contact='" +
         contact_fields[1].value +
         "'&estd='" +
         date_fields[1].value +
         "'&logo='" +
         logo.value +
         "'&description='" +
         companyDescription_fields[1].value +
         "'&email='" +
         email_fields[0].value +
         "'";
      $.ajax({
         url: "../php/user_details.php?" + parameter,
         success: function () {
            fillInputDetail();
            resetHide();
         },
      });
   });

   fillInputDetail();
});
