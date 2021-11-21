"use strict";

const navUL = document.querySelector(".nav ul");
const navMobileMenuIcon = document.querySelector(".nav .mobile-menu-icon");

navMobileMenuIcon.addEventListener("click", function() {
	navUL.classList.toggle("active");
	navMobileMenuIcon.classList.toggle("active");
	// document.body.classList.toggle("no-scroll");
});

// Show details open/close
const shows = document.querySelectorAll("section.shows .show");
for (let x = 0; x < shows.length; x++) {
	let showID = shows[x].classList[1]; // get show-#
	let showDetailsOpenButton = document.querySelector(`section.shows .${showID} .button`);
	let showDetailsCloseButton = document.querySelector(`section.shows .${showID} .details .close`);

	showDetailsOpenButton.addEventListener("click", function() {
		toggleShowDetails(showID)
	});

	showDetailsCloseButton.addEventListener("click", function() {
		toggleShowDetails(showID)
	});
}

function toggleShowDetails(showID) {
	const showDetails = document.querySelector(`section.shows .${showID} .details`);
	showDetails.classList.toggle("active");
}


// function verifyContactForm() {
// 	let formName = document.querySelector("section.contact input[id='name']").value;
// 	let formNameLabel = document.querySelector("section.contact label[for='name']");

// 	let formDate = document.querySelector("section.contact input[id='date']").value;
// 	let formDateLabel = document.querySelector("section.contact label[for='date']");

// 	let formPhone = document.querySelector("section.contact input[id='phone']").value;
// 	let formPhoneLabel = document.querySelector("section.contact label[for='phone']");

// 	let formEmail = document.querySelector("section.contact input[id='email']").value;
// 	let formEmailLabel = document.querySelector("section.contact label[for='email']");

// 	let formComments = "pie"; //document.querySelector("section.contact input[id='comments']").value;

// 	console.log("RUNNING");
// 	// User is engaging with contact form.
// 	if (formName !== "" || formDate !== "" || formPhone !== "" || formEmail !== "" || formComments !== "") {
// 		verifyInput(formName, formNameLabel);
// 		verifyInput(formDate, formDateLabel);
// 		verifyPhoneNumber(formPhone, formPhoneLabel);
// 		verifyInput(formEmail, formEmailLabel);
// 	}
// }

// function verifyInput(formInput, formInputLabel) {
// 	if (formInput === "") {
// 		formInputLabel.textContent = "Required";
// 		return false;
// 	} else {
// 		formInputLabel.textContent = "";
// 		return true;
// 	}
// }

// const phoneNumberRegex = "/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im";
// function verifyPhoneNumber(formInput, formInputLabel) {
// 	if (verifyInput(formInput, formInputLabel)) {
// 		if (phoneNumberRegex.match(formInput)) {
// 			formInputLabel.textContent = "";
// 		} else {
// 			formInputLabel.textContent = "Please enter a valid phone number.";
// 		}
// 	}
// }

// const form = document.querySelector("section.contact");
// form.addEventListener("click", verifyContactForm);
