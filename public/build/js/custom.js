(self["webpackChunksymfony"] = self["webpackChunksymfony"] || []).push([["js/custom"],{

/***/ "./build/js/custom-js.js":
/*!*******************************!*\
  !*** ./build/js/custom-js.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
// var $ = require('jquery');
$(document).ready(function () {
  alert('console');
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_jquery_dist_jquery_js"], () => (__webpack_exec__("./build/js/custom-js.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);