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
$(document).ready(function () {
	$("#example1")
		.DataTable({
			responsive: true,
			stateSave: true,
			lengthChange: false,
			autoWidth: true,
			paging: false,
			// "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		})
		.buttons()
		.container()
		.appendTo("#example1_wrapper .col-md-6:eq(0)");
	$("#example2").DataTable({
		paging: true,
		stateSave: true,
		pageLength: 25,
		lengthMenu: [5, 10, 25, 50, 100, 200, 250, 300, 350],
		lengthChange: true,
		searching: true,
		ordering: true,
		info: true,
		autoWidth: true,
		responsive: true,
	});
});
$(document).ready(function () {
	window.setTimeout(function () {
		$(".alert")
			.fadeTo(500, 0)
			.slideUp(500, function () {
				$(this).remove();
			});
	}, 3500);
});
$(".container-foto").css({
	position: "absolute",
	top: "0px",
	display: "none",
	width: "100%",
	height: "auto",
	// 'background': 'rgba(0,0,0,0.1)',
});
$(".popup").css({
	position: "relative",
	top: "80px",
	width: "700px",
	margin: "auto",
	border: "10px solid grey",
	"z-index": "10000",
	background: "white",
});

$("#close").css({
	position: "absolute",
	top: "-15px",
	right: "-15px",
	"font-size": "20px",
});
// Show

$(".gallery img").click(function () {
	$(".container-foto").fadeIn("slow");

	var url = $(this).attr("src");

	$(".imageShow").html('<img src="' + url + '">');

	$(".imageShow img").css({
		width: "100%",
	});
});
$("#close").click(function () {
	$(".container-foto").fadeOut("slow");
});
