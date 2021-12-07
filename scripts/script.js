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

const loadVideosButton = document.querySelector("section.videos .button");
const videosContainer = document.querySelector("section.videos .container");
loadVideosButton.addEventListener("click", function() {
	loadVideosButton.remove();
	loadContent("extra-videos.php", videosContainer);
});

const loadPhotosButton = document.querySelector("section.photos .button");
const photosContainer = document.querySelector("section.photos .container");
loadPhotosButton.addEventListener("click", function() {
	loadPhotosButton.remove();
	loadContent("extra-photos.php", photosContainer);
});

function loadContent(file, container) {
	let xhr = new XMLHttpRequest();

	xhr.open("GET", "includes/" + file, true);
	xhr.onload = function() {
		if (this.status == 200) {
			container.insertAdjacentHTML("beforeend", this.responseText);
		}
	}

	xhr.send();
}
