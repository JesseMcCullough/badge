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

let player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('video-iframe', {
        events: {
            'onStateChange': onPlayerStateChange
         }
    });
}

let videoForward = document.getElementById("videoForward");
let videoBackward = document.getElementById("videoBackward");
let paused = false;
function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING) {
        paused = false;
        setTimeout(function() {
            if (!paused) {
                videoForward.style.display = "none";
                videoBackward.style.display = "none";
            }
        }, 3000);
    } else if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
        videoForward.style.display = "inline";
        videoBackward.style.display = "inline";
        paused = true;
    }
}

let videos = ["R9pvelP6k0U", "kDrH464kTL4", "Vitf99a34Cc", "nJVqmWPC810",
        "Hf83ez2HjKA", "GSEbOuwZ8PQ", "1eaq4eJ4AaA", "7qPCViR42lI", "22uh3KkchdY", "dhfSBED3Gec"];
let videoCounter = 0;
let iframe = document.querySelector(".video iframe");

videoForward.addEventListener("click", function() {
    videoCounter++;

    if (videoCounter >= videos.length) {
        videoCounter = 0;
    }

    iframe.setAttribute("src", "https://www.youtube.com/embed/" + videos[videoCounter] + "?enablejsapi=1");
    onYouTubeIframeAPIReady();
});

videoBackward.addEventListener("click", function() {
    videoCounter--;

    if (videoCounter < 0) {
        videoCounter = videos.length - 1;
    }

    iframe.setAttribute("src", "https://www.youtube.com/embed/" + videos[videoCounter] + "?enablejsapi=1");
    onYouTubeIframeAPIReady();
});
