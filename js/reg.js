const reg_form = document.querySelector(".Sign_form form"),
reg_btn = reg_form.querySelector(".Sign_form button"),
reg_text = document.querySelector("#menu1 .spn");


reg_form.onsubmit = (e) =>{
	e.preventDefault;
}


reg_btn.onclick = () =>{
	// console.log("onclick");
	let xhr = new XMLHttpRequest();
	xhr.open("POST", "php/reg.php");
	xhr.onload = () =>{
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				let data = xhr.response;
				if (data == "Thank you - Login now") {
					reg_text.textContent = data;
					reg_text.classList.add("alert");
					reg_text.classList.add("alert-success");
				}else{
					reg_text.textContent = data;
					reg_text.classList.add("alert");
					reg_text.classList.add("alert-danger");
				}
				
			}
		}
	}
	let formdata = new FormData(reg_form);
	xhr.send(formdata);
}

