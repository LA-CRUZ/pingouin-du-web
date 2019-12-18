// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

// any SCSS file you require will output in one css file
require('../scss/main.scss');

// any JS file you require
const startGame = require("./404");
window.startGame = startGame;
