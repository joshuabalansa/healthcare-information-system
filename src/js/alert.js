function confirmation(id, type) {
    Swal.fire({
        title: `Are you sure you want to ${type} this?`,
        text: "You will be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: `Yes, ${type} it!`

    }).then((result) => {

        if (result.isConfirmed) {
            window.location.href = `index.php?${type}=` + encodeURIComponent(id);
        }
    });
}

function notify(type) {
    Swal.fire({
        title: `Are you sure you want to ${type} all pending?`,
        text: "You will be not able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: `Yes, ${type} it!`

    }).then((result) => {
  
        if (result.isConfirmed) {
            window.location.href = `index.php?${type}=approve`;
        }
    });
}