/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

var btn = document.querySelector('.open');

function openSubLinks(event) {
  event.preventDefault();
  var el = event.target;
  var sub = el.nextElementSibling;

  if (el.classList.contains("opened")) {
    el.classList.remove("opened");
    sub.style.display = "none";
    return;
  }

  el.classList.add("opened");
  sub.style.display = "block";
}

var parents = document.getElementsByClassName("parent");

for (var i = 0; i < parents.length; i++) {
  parents[i].addEventListener('click', openSubLinks);
}

var hamburger = document.querySelector("#hamburger");
var menu = document.querySelector("#sidebar");
hamburger.addEventListener("click", function () {
  if (menu.classList.contains("active")) {
    menu.classList.remove("active");
    return;
  }

  menu.classList.add("active");
});
jQuery(document).ready(function ($) {
  $.bvi({
    'bvi_target': '.bvi-open',
    // Класс ссылки включения плагина
    "bvi_theme": "white",
    // Цвет сайта
    "bvi_font": "arial",
    // Шрифт
    "bvi_font_size": 16,
    // Размер шрифта
    "bvi_letter_spacing": "normal",
    // Межбуквенный интервал
    "bvi_line_height": "normal",
    // Междустрочный интервал
    "bvi_images": true,
    // Изображения
    "bvi_reload": false,
    // Перезагрузка страницы при выключении плагина
    "bvi_fixed": false,
    // Фиксирование панели для слабовидящих вверху страницы
    "bvi_tts": true,
    // Синтез речи
    "bvi_flash_iframe": true,
    // Встроенные элементы (видео, карты и тд.)
    "bvi_hide": false // Скрывает панель для слабовидящих и показывает иконку панели.

  });
});

/***/ }),

/***/ "./resources/sass/admin.scss":
/*!***********************************!*\
  !*** ./resources/sass/admin.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/media.scss":
/*!***********************************!*\
  !*** ./resources/sass/media.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*********************************************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ./resources/sass/media.scss ./resources/sass/admin.scss ***!
  \*********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/stepan7/projects/laravel/kazak/resources/js/app.js */"./resources/js/app.js");
__webpack_require__(/*! /home/stepan7/projects/laravel/kazak/resources/sass/app.scss */"./resources/sass/app.scss");
__webpack_require__(/*! /home/stepan7/projects/laravel/kazak/resources/sass/media.scss */"./resources/sass/media.scss");
module.exports = __webpack_require__(/*! /home/stepan7/projects/laravel/kazak/resources/sass/admin.scss */"./resources/sass/admin.scss");


/***/ })

/******/ });