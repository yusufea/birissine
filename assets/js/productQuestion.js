const options = [
  { value: "value1", text: "XS" },
  { value: "value2", text: "S" },
  { value: "value3", text: "M" },
  { value: "value4", text: "L" },
  { value: "value5", text: "XL" },
  // Daha fazla seçenek ekleyin
];

function createOption(option) {
  return `<option class='select-option-text' value="${option.value}">${option.text}</option>`;
}

const dropdownMenu = document.getElementById("dropdown-menu");
options.forEach((option) => {
  dropdownMenu.innerHTML += createOption(option);
});

const commentsOptions = [
  { value: "value1", text: "Önerilen Sıralama" },
  { value: "value2", text: "Yeniden Eskiye" },
  { value: "value3", text: "Eskiden Yeniye" },
];
function createCommentsOption(option) {
  return `<option class='select-option-text' value="${option.value}">${option.text}</option>`;
}

const commentOptionsDropdownMenu = document.getElementById(
  "dropdown-question-options-menu"
);
commentsOptions.forEach((option) => {
  commentOptionsDropdownMenu.innerHTML += createCommentsOption(option);
});
