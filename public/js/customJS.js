// JS to pop up delete confirmation
function confirmDelete() {

  var del = confirm("Are you sure you want to delete this item? This action cannot be undone.");

  if (del == false) {
    event.preventDefault();
    }
}
