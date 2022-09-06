let textArea = document.getElementById("textbox");
let characterCounter = document.getElementById("char_count");
const maxNumOfChars = 250;

const countCharacters = () => {
	let numOfEnteredChars = textArea.value.length;
	let counter = maxNumOfChars - numOfEnteredChars;
	characterCounter.textContent = counter + "/250";

	if (counter < 10) {
	    characterCounter.style.color = "red";
	} else if (counter < 50) {
		characterCounter.style.color = "orange";
	} else {
		characterCounter.style.color = "black";
	}
};

textArea.addEventListener("input", countCharacters);