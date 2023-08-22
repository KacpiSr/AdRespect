/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scss/main.scss":
/*!****************************!*\
  !*** ./src/scss/main.scss ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://webpack_v5.0/./src/scss/main.scss?");

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _template_parts_macygallery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./template-parts/macygallery */ \"./src/js/template-parts/macygallery.js\");\n/* harmony import */ var _template_parts_macygallery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_template_parts_macygallery__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _scss_main_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../scss/main.scss */ \"./src/scss/main.scss\");\n/* harmony import */ var _js_template_parts_header__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../js/template-parts/header */ \"./src/js/template-parts/header.js\");\n/* harmony import */ var _js_template_parts_header__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_template_parts_header__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _js_template_parts_sliders__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../js/template-parts/sliders */ \"./src/js/template-parts/sliders.js\");\n/* harmony import */ var _js_template_parts_sliders__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_template_parts_sliders__WEBPACK_IMPORTED_MODULE_3__);\n\r\n\r\n\r\n\r\n\r\n\n\n//# sourceURL=webpack://webpack_v5.0/./src/js/index.js?");

/***/ }),

/***/ "./src/js/template-parts/header.js":
/*!*****************************************!*\
  !*** ./src/js/template-parts/header.js ***!
  \*****************************************/
/***/ (() => {

eval("const searchIcon = document.querySelector('.search-icon');\r\nconst searchBar = document.querySelector('.search-bar');\r\nconst navbarBurger = document.querySelector('.navbar-burger');\r\nconst navbarItems = document.querySelector('.navbar-items');\r\nconst ofertaContainer = document.querySelector('.offer-container');\r\n\r\nsearchIcon.addEventListener('click', () => {\r\n  searchBar.classList.toggle('active');\r\n});\r\n\r\nofertaContainer.addEventListener('click', () => {\r\n  ofertaContainer.classList.toggle('active');\r\n});\r\n\r\nnavbarBurger.addEventListener('click', () => {\r\n  navbarItems.classList.toggle('active');\r\n  document.body.classList.toggle('navbar-items-active');\r\n});\r\n\r\n$(document).ready(function() {\r\n  $('#menu').on('click', function() {\r\n    $(this).toggleClass('clicked');\r\n  });\r\n});\r\n\n\n//# sourceURL=webpack://webpack_v5.0/./src/js/template-parts/header.js?");

/***/ }),

/***/ "./src/js/template-parts/macygallery.js":
/*!**********************************************!*\
  !*** ./src/js/template-parts/macygallery.js ***!
  \**********************************************/
/***/ (() => {

eval("document.addEventListener('DOMContentLoaded', function() {\r\n    const gallery = document.querySelector(\".gallery\");\r\n    const loadMoreButton = document.getElementById('loadMoreButton');\r\n    const galleryGradient = document.querySelector('.gallery-gradient');\r\n\r\n    let currentPage = 2;\r\n    const imagesPerLoad = 5;\r\n\r\n    const macy = Macy({\r\n        container: '.gallery',\r\n        trueOrder: false,\r\n        waitForImages: false,\r\n        margin: 24,\r\n        columns: 3,\r\n        breakAt: {\r\n            940: 3,\r\n            520: 2,\r\n            400: 1\r\n        }\r\n    });\r\n\r\n    function hideLoadMoreButton() {\r\n        loadMoreButton.style.display = 'none';\r\n        galleryGradient.style.display = 'none';\r\n    }\r\n\r\n    async function loadMoreImages() {\r\n        try {\r\n            const response = await fetch(`${ajax_object.ajax_url}?action=my_custom_ajax_action&page=${currentPage}&per_page=${imagesPerLoad}`);\r\n            if (!response.ok) {\r\n                throw new Error('Error loading images');\r\n            }\r\n    \r\n            const newImages = await response.json();\r\n    \r\n            if (newImages.length === 0) {\r\n                hideLoadMoreButton();\r\n                return;\r\n            }\r\n    \r\n            newImages.forEach(imageUrl => {\r\n                const galleryItem = document.createElement('div');\r\n                galleryItem.classList.add('gallery-item');\r\n    \r\n                const a = document.createElement('a');\r\n                a.href = imageUrl;\r\n                a.setAttribute('data-fslightbox', 'gallery');\r\n    \r\n                const image = document.createElement('img');\r\n                image.src = imageUrl;\r\n                image.alt = 'Image';\r\n    \r\n                a.appendChild(image);\r\n                galleryItem.appendChild(a);\r\n                gallery.appendChild(galleryItem);\r\n            });\r\n    \r\n            window.refreshFsLightbox();\r\n    \r\n            macy.runOnImageLoad(function () {\r\n                macy.recalculate(true);\r\n            }, true);\r\n    \r\n            currentPage++;\r\n    \r\n        } catch (error) {\r\n            console.error(error);\r\n        }\r\n    }\r\n    \r\n    loadMoreButton.addEventListener('click', loadMoreImages);\r\n});\r\n\r\n\n\n//# sourceURL=webpack://webpack_v5.0/./src/js/template-parts/macygallery.js?");

/***/ }),

/***/ "./src/js/template-parts/sliders.js":
/*!******************************************!*\
  !*** ./src/js/template-parts/sliders.js ***!
  \******************************************/
/***/ (() => {

eval("$(document).ready(function () {\r\n  const opinion = new Swiper(\".mySwiper\", {\r\n    speed: 800,\r\n    autoplay: {\r\n      delay: 5000,\r\n    },\r\n    loop: true,\r\n\r\n    navigation: {\r\n      nextEl: \".swiper-header .swiper-button-next\",\r\n      prevEl: \".swiper-header  .swiper-button-prev\",\r\n    },\r\n\r\n    // navigation: {\r\n    //   nextEl: \".swiper-button-next\",\r\n    //   prevEl: \".swiper-button-prev\",\r\n    // },\r\n\r\n    // pagination: {\r\n    //   el: \".swiper-pagination\",\r\n    //   type: \"fraction\",\r\n    // },\r\n  });\r\n});\n\n//# sourceURL=webpack://webpack_v5.0/./src/js/template-parts/sliders.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_require__("./src/js/index.js");
/******/ 	var __webpack_exports__ = __webpack_require__("./src/scss/main.scss");
/******/ 	
/******/ })()
;