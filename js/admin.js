
$( document ).ready(function() {
			// data get
			$.ajax({
				url: 'http://localhost/chat/php/fatchData.php',
				type: 'GET',
				success:function(data){
					// console.log(data);
					
					if (data.stt == false) {
						$('#tableBody').append("<tr><td colspan='5'><h2>"+data.message+"</h2></td></tr>");
					} else {"+data.value+"
					var count=1;
					$.each(data, function(key, value){
						$('#tableBody').append("<tr>"+
							"<td >" + count + "</td>"+
							"<td class='name'>"+ value.name + "</td>"+
							"<td class='email'>" + value.email + "</td>"+
							"<td class='status'>" + value.status + "</td>"+
							"<td > <button type='button' class='edit-btn btn btn-warning'data-eid="+value.id+">Edit</button></td>"+
							"<td > <button type='button' class='dlt-btn btn btn-danger' data-id="+value.id+">Delete</button></td>"+
							"</tr>");
						count++;
					});
				}
			},
			error:{

			}
		});
			// edit button
			$(document).on("click", ".edit-btn", (e) => {
				// console.log("onclick");
				$(e.target).empty().text("Update").removeClass("edit-btn").addClass("u-btn");
				var name = $(e.target).closest("tr").find(".name").text().trim();
				$(e.target)
				.closest("tr")
				.find(".name")
				.html("<input type='text' class='txt txt_name' value='" + name + "' />");
				var email = $(e.target).closest("tr").find(".email").text().trim();
				$(e.target)
				.closest("tr")
				.find(".email")
				.html("<input type='text' class='txt txt_email' value='" + email + "' />");
				var status = $(e.target).closest("tr").find(".status").text().trim();
				$(e.target)
				.closest("tr")
				.find(".status")
				.html("<input type='text' class='txt txt_status' value='" + status + "' />");
			});
		// update button
		$(document).on("click", ".u-btn",  (e)=> {
			var check = confirm("Are you sure want to change this record?");
			if (!check) {
				return;
			}
			var id= $(e.target).data("eid");
			var name = $(".txt_name").val();
			var email = $(".txt_email").val();
			var status = $(".txt_status").val();
			var data = {
				id: id,
				name: name,
				email: email,
				status: status,
			};
			$.ajax({
				url: "http://localhost/chat/php/edit.php",
				type: "POST",
				data: data,
				success: function (res) {
					if (res =="success") {
						alert("Data updated");
						window.location.reload();
					} else {
						alert(res.error);
						window.location.reload();
					}
				},
			});
		});
			// delet button
			$(document).on("click", ".dlt-btn",  (e)=> {
				var check = confirm("Are you sure want to delete this record?");
				if (!check) {
					return;
				}
				var id= $(e.target).data("id");
				var data = {
					id: id,
				};
				$.ajax({
					url: "http://localhost/chat/php/dlt.php",
					type: "POST",
					data: data,
					success: function (res) {
						if (res =="success") {
							alert("Data deleted");
							window.location.reload();
						} else {
							alert(res.error);
							window.location.reload();
						}
					},
				});
			});
		});