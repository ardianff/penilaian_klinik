function deleteConfirm(url) {
    $("#btn-delete").attr("href", url);
    $("#deleteModal").modal();
}

function editConfirm(url) {
    $("#btn-edit").attr("href", url);
    $("#editModal").modal();
}

function saveConfirm(url) {
    $("#btn-save").attr("href", url);
    $("#saveModal").modal();
}

function logoutConfirm(url) {
    $("#btn-logout").attr("href", url);
    $("#logoutModal").modal();
}

function penilaianConfirm(url) {
    $("#btn-penilaian").attr("href", url);
    $("#penilaianModal").modal();
}

function cekConfirm(url) {
    $("#btn-cek").attr("href", url);
    $("#cekModal").modal();
}

function goBack() {
    window.history.back();
}