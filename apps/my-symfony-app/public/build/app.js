(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/css/app.css":
/*!****************************!*\
  !*** ./assets/css/app.css ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/js/404.js":
/*!**************************!*\
  !*** ./assets/js/404.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = function startGame() {
  myGameArea.start();
};

var myGameArea = {
  canvas: document.createElement("canvas"),
  start: function start() {
    this.canvas.width = 480;
    this.canvas.height = 270;
    this.context = this.canvas.getContext("2d");
    document.body.insertBefore(this.canvas, document.body.childNodes[0]);
  }
};

/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// any CSS you require will output into a single css file (app.css in this case)
__webpack_require__(/*! ../css/app.css */ "./assets/css/app.css"); // any SCSS file you require will output in one css file


__webpack_require__(/*! ../scss/main.scss */ "./assets/scss/main.scss"); // any JS file you require


var startGame = __webpack_require__(/*! ./404 */ "./assets/js/404.js");

window.startGame = startGame;

/***/ }),

/***/ "./assets/scss/main.scss":
/*!*******************************!*\
  !*** ./assets/scss/main.scss ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

},[["./assets/js/app.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2FwcC5jc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzLzQwNC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zY3NzL21haW4uc2NzcyJdLCJuYW1lcyI6WyJtb2R1bGUiLCJleHBvcnRzIiwic3RhcnRHYW1lIiwibXlHYW1lQXJlYSIsInN0YXJ0IiwiY2FudmFzIiwiZG9jdW1lbnQiLCJjcmVhdGVFbGVtZW50Iiwid2lkdGgiLCJoZWlnaHQiLCJjb250ZXh0IiwiZ2V0Q29udGV4dCIsImJvZHkiLCJpbnNlcnRCZWZvcmUiLCJjaGlsZE5vZGVzIiwicmVxdWlyZSIsIndpbmRvdyJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7O0FBQUEsdUM7Ozs7Ozs7Ozs7O0FDQUFBLE1BQU0sQ0FBQ0MsT0FBUCxHQUFpQixTQUFTQyxTQUFULEdBQXFCO0FBQ2xDQyxZQUFVLENBQUNDLEtBQVg7QUFDRCxDQUZIOztBQUlFLElBQUlELFVBQVUsR0FBRztBQUNmRSxRQUFNLEVBQUdDLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixRQUF2QixDQURNO0FBRWZILE9BQUssRUFBRyxpQkFBVztBQUNqQixTQUFLQyxNQUFMLENBQVlHLEtBQVosR0FBb0IsR0FBcEI7QUFDQSxTQUFLSCxNQUFMLENBQVlJLE1BQVosR0FBcUIsR0FBckI7QUFDQSxTQUFLQyxPQUFMLEdBQWUsS0FBS0wsTUFBTCxDQUFZTSxVQUFaLENBQXVCLElBQXZCLENBQWY7QUFDQUwsWUFBUSxDQUFDTSxJQUFULENBQWNDLFlBQWQsQ0FBMkIsS0FBS1IsTUFBaEMsRUFBd0NDLFFBQVEsQ0FBQ00sSUFBVCxDQUFjRSxVQUFkLENBQXlCLENBQXpCLENBQXhDO0FBQ0Q7QUFQYyxDQUFqQixDOzs7Ozs7Ozs7OztBQ0pGO0FBQ0FDLG1CQUFPLENBQUMsNENBQUQsQ0FBUCxDLENBRUE7OztBQUNBQSxtQkFBTyxDQUFDLGtEQUFELENBQVAsQyxDQUVBOzs7QUFDQSxJQUFNYixTQUFTLEdBQUdhLG1CQUFPLENBQUMsaUNBQUQsQ0FBekI7O0FBQ0FDLE1BQU0sQ0FBQ2QsU0FBUCxHQUFtQkEsU0FBbkIsQzs7Ozs7Ozs7Ozs7QUNSQSx1QyIsImZpbGUiOiJhcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW4iLCJtb2R1bGUuZXhwb3J0cyA9IGZ1bmN0aW9uIHN0YXJ0R2FtZSgpIHtcbiAgICBteUdhbWVBcmVhLnN0YXJ0KCk7XG4gIH1cbiAgXG4gIHZhciBteUdhbWVBcmVhID0ge1xuICAgIGNhbnZhcyA6IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJjYW52YXNcIiksXG4gICAgc3RhcnQgOiBmdW5jdGlvbigpIHtcbiAgICAgIHRoaXMuY2FudmFzLndpZHRoID0gNDgwO1xuICAgICAgdGhpcy5jYW52YXMuaGVpZ2h0ID0gMjcwO1xuICAgICAgdGhpcy5jb250ZXh0ID0gdGhpcy5jYW52YXMuZ2V0Q29udGV4dChcIjJkXCIpO1xuICAgICAgZG9jdW1lbnQuYm9keS5pbnNlcnRCZWZvcmUodGhpcy5jYW52YXMsIGRvY3VtZW50LmJvZHkuY2hpbGROb2Rlc1swXSk7XG4gICAgfVxuICB9IiwiLy8gYW55IENTUyB5b3UgcmVxdWlyZSB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcbnJlcXVpcmUoJy4uL2Nzcy9hcHAuY3NzJyk7XG5cbi8vIGFueSBTQ1NTIGZpbGUgeW91IHJlcXVpcmUgd2lsbCBvdXRwdXQgaW4gb25lIGNzcyBmaWxlXG5yZXF1aXJlKCcuLi9zY3NzL21haW4uc2NzcycpO1xuXG4vLyBhbnkgSlMgZmlsZSB5b3UgcmVxdWlyZVxuY29uc3Qgc3RhcnRHYW1lID0gcmVxdWlyZShcIi4vNDA0XCIpO1xud2luZG93LnN0YXJ0R2FtZSA9IHN0YXJ0R2FtZTtcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=