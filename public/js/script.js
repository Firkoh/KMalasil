import Swal from "sweetalert2";



function hapus() {
    Swal.fire({
  title: "Apakah Kamu Yakin Inggin Mengghapus Ini",
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: "Save",
  denyButtonText: `Don't save`
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire("Saved!", "", "success");
  } else if (result.isDenied) {
    Swal.fire("Changes are not saved", "", "info");
  }
});
}

Swal.fire({
  title: 'Info',
  text: 'Data Berhasil di Simpan',
  icon: 'success',
  timer: 3000,
  showConfirmButton: false
});
 