const v_form = document.querySelector(".verify_form form"),
v_btn = v_form.querySelector(".verify_form button"),
v_text = document.querySelector(".spn");

v_form.onsubmit = (e) =>{
	e.preventDefault;
}


v_btn.onclick = () =>{
	// console.log("onclick");
	let xhr = new XMLHttpRequest();
	xhr.open("POST", "php/verifyb.php");
	xhr.onload = () =>{
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				let data = xhr.response;
				if(data == "user"){
					window.location.assign("home.php");
				}else{
					// console.log(data);
					v_text.textContent = data;
					v_text.classList.add("alert");
					v_text.classList.add("alert-danger");
				}				
			}
		}
	}
	let formdata = new FormData(v_form);
	// console.log(formdata);
	xhr.send(formdata);
}