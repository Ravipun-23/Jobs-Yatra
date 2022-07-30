const edit = ".edit-btn";
const cancel = "cancel-btn";
const editable = "editable";
const uneditable = "uneditable";
const hide = "hide";

const edit_btns = document.querySelectorAll(edit);
const save = document.querySelector("#save");
const cancel_btns = document.querySelectorAll("." + cancel);
const cancel_btn_logo = document.querySelector(".cancel-btn-logo");

const comp_logo = document.querySelector("#comp_logo");
const original_logo_file = comp_logo.value;
let logo_changed = false;

edit_btns.forEach((edit_btn) => {
   let parent = edit_btn.parentNode;
   let childnodes = [...parent.childNodes];

   childnodes = childnodes.filter((child) => child.nodeType == 1);

   let edit_field = childnodes.filter((child) =>
      child.classList.contains(editable)
   )[0];
   let show_field = childnodes.filter((child) =>
      child.classList.contains(uneditable)
   )[0];
   let cancel_btn = childnodes.filter((child) =>
      child.classList.contains(cancel)
   )[0];

   edit_btn.addEventListener("click", function () {
      edit_field.classList.remove(hide);
      cancel_btn.classList.remove(hide);

      show_field.classList.add(hide);
      edit_btn.classList.add(hide);
   });

   cancel_btn.addEventListener("click", function () {
      show_field.classList.remove(hide);
      edit_btn.classList.remove(hide);

      edit_field.classList.add(hide);
      cancel_btn.classList.add(hide);

      edit_field.value = show_field.value;
      checkChanged();
   });

   edit_field.addEventListener("change", function () {
      if (edit_field.value != show_field.value) {
         checkChanged();
      }
   });
});

comp_logo.addEventListener("change", function () {
   if (comp_logo.value != original_logo_file) {
      logo_changed = true;
      cancel_btn_logo.classList.remove(hide);
   } else {
      logo_changed = false;
   }
   checkChanged();
});

cancel_btn_logo.addEventListener("click", function () {
   cancel_btn_logo.classList.add(hide);
   comp_logo.value = original_logo_file;
   logo_changed = false;
   checkChanged();
});

function checkChanged() {
   let changed = false;
   cancel_btns.forEach((btn) => {
      changed ||= !(window.getComputedStyle(btn).display === "none");
   });

   changed ||= logo_changed;

   if (changed) {
      if (save.classList.contains(hide)) {
         save.classList.remove(hide);
      }
   } else {
      if (!save.classList.contains(hide)) {
         save.classList.add(hide);
      }
   }
}

function resetHide() {
   document.querySelectorAll("." + uneditable).forEach((element) => {
      if (element.classList.contains(hide)) {
         element.classList.remove(hide);
      }
   });
   document.querySelectorAll("." + editable).forEach((element) => {
      if (!element.classList.contains(hide)) {
         element.classList.add(hide);
      }
   });
   document.querySelectorAll(edit).forEach((element) => {
      if (element.classList.contains(hide)) {
         element.classList.remove(hide);
      }
   });
   document.querySelectorAll("." + cancel).forEach((element) => {
      if (!element.classList.contains(hide)) {
         element.classList.add(hide);
      }
   });
   logo_changed = false;
   if (!save.classList.contains(hide)) {
      save.classList.add(hide);
   }
}
