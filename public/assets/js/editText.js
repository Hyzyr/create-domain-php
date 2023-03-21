const TextEditor = (textField) => {
  // const style =
  let fontSize = window
    .getComputedStyle(textField, null)
    .getPropertyValue("font-size");
  fontSize = fontSize && parseInt(fontSize) ? parseInt(fontSize) : 18;
  console.log("initial size ", fontSize);

  const increaseFontSize = () => {
    fontSize++;
    textField.style.fontSize = fontSize + "px";
  };
  const decreaseFontSize = () => {
    fontSize--;
    textField.style.fontSize = fontSize + "px";
  };
  const changeFontFamily = (value) => {
    textField.style.fontFamily = value;
  };
  const changeColor = (color) => {
    textField.style.color = color;
  };
  const setItalic = (isTrue = true) => {
    textField.style.fontStyle = isTrue ? "italic" : "";
  };
  const setUnderline = (isTrue = true) => {
    textField.style.textDecoration = isTrue ? "underline" : "";
  };

  return {
    increaseFontSize,
    decreaseFontSize,
    changeFontFamily,
    setItalic,
    setUnderline,
    changeColor,
  };
};

const editor = TextEditor(document.querySelector("#nameField"));

const colorBtn = document.querySelector("#colorBtn");
const italicBtn = document.querySelector("#italicBtn");
const fontFamily = document.querySelector("#fontFamily");
const increaseBtn = document.querySelector("#increaseBtn");
const decreaseBtn = document.querySelector("#decreaseBtn");
const underlineBtn = document.querySelector("#underlineBtn");

increaseBtn.onclick = () => editor.increaseFontSize();
decreaseBtn.onclick = () => editor.decreaseFontSize();
fontFamily.onchange = ({ target }) => editor.changeFontFamily(target.value);
italicBtn.onclick = ({ target }) => {
  target.classList.toggle("checked");
  editor.setItalic(target.classList.contains("checked"));
};
underlineBtn.onclick = ({ target }) => {
  target.classList.toggle("checked");
  editor.setUnderline(target.classList.contains("checked"));
};

var picker = new Picker({
  parent: colorBtn,
  color: "white",
  popup: "bottom",
  onOpen: () => {
    colorBtn.classList.add("active");
  },
  onClose: () => {
    colorBtn.classList.remove("active");
  },
  onChange: (color) => {
    editor.changeColor(color.rgbaString);
  },
});
