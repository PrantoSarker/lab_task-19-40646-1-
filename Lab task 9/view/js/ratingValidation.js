function validate(pForm) {
	let flag = "";

	if (pForm.packagename.value === "") {
		document.getElementById("packageErrMsg").innerHTML = "Please enter correct package name";
		flag = "Empty";
	}

	if (pForm.rate.value === "") {
		document.getElementById("rateErrMsg").innerHTML = "Please enter correct number for rating";
		flag = "Empty";
	}

	if (flag === "") {
		return true;
	}
	return false;
}