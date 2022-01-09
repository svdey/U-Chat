const login_form = document.querySelector("#home form"),
login_btn = login_form.querySelector("#home button"),
login_text = document.querySelector("#home .spn");


login_form.onsubmit = (e) =>{
	e.preventDefault;
}


login_btn.onclick = () =>{
	// console.log("onclick");
	let xhr = new XMLHttpRequest();
	xhr.open("POST", "php/login.php");
	xhr.onload = () =>{
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				let data = xhr.response;
				if (data == "login") {
					window.location.assign("verify.php")
				}else if(data == "user"){
					window.location.assign("home.php")
				}else if(data == "admin"){
					window.location.assign("admin.php")
				}else{	
					login_text.textContent = data;
					login_text.classList.add("alert");
					login_text.classList.add("alert-danger");
				}
			}
		}
	}
	let formdata = new FormData(login_form);
	xhr.send(formdata);
}