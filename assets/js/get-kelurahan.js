$("#id_kecamatan").change(function () {
	var getkecamatan = $("#id_kecamatan").val();
	$.ajax({
		url: base_url + "/penilaian_klinik_umum/get_data_kelurahan",
		method: "POST",
		data: {
			kecamatan: getkecamatan,
		},
		async: true,
		dataType: "json",
		success: function (data) {
			console.log(data);
			var html = "";
			var i;
			for (i = 0; i < data.length; i++) {
				html +=
					"<option value=" +
					data[i].id_kelurahan +
					">" +
					data[i].nama_kelurahan +
					"</option>";
			}
			$("#id_kelurahan").html(html);
		},
	});
	return false;
});

get_data_edit();
$(".kecamatan").change(function () {
	var getkecamatan = $(".kecamatan").val();
	var id_kelurahan = id_kel;
	$.ajax({
		url: base_url + "penilaian_klinik_umum/get_data_kelurahan",
		method: "POST",
		data: {
			kecamatan: getkecamatan,
		},
		async: true,
		dataType: "json",
		success: function (data) {
			$('select[name="nama_kelurahan"]').empty();
			$.each(data, function (key, value) {
				if (id_kelurahan == value.id_kelurahan) {
					$('select[name="nama_kelurahan"]')
						.append(
							'<option value="' +
								value.id_kelurahan +
								'" selected>' +
								value.nama_kelurahan +
								"</option>"
						)
						.trigger("change");
				} else {
					$('select[name="nama_kelurahan"]').append(
						'<option value="' +
							value.id_kelurahan +
							'">' +
							value.nama_kelurahan +
							"</option>"
					);
				}
			});
		},
	});
	return false;
});

function get_data_edit() {
	var id_klinik = $('[name="id_klinik"]').val();
	$.ajax({
		url: base_url + "penilaian_klinik_umum/get_data_edit",
		method: "POST",
		data: {
			id_klinik: id_klinik,
		},
		async: true,
		dataType: "json",
		success: function (data) {
			$.each(data, function (i, item) {
				$('[name="id_klinik"]').val(data[i].id_klinik);
				$('[name="nama_kecamatan"]')
					.val(data[i].id_kecamatan_klinik)
					.trigger("change");
				$('[name="nama_kelurahan"]')
					.val(data[i].id_kelurahan_klinik)
					.trigger("change");
			});
		},
	});
}
