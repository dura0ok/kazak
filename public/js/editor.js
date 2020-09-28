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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/editor.js":
/*!********************************!*\
  !*** ./resources/js/editor.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var btn = document.querySelector('#createButton');
var editor = SUNEDITOR.create('sample', {
  width: '100%',
  height: 'auto',
  popupDisplay: 'full',
  charCounter: true,
  charCounterLabel: 'Символы :',
  imageGalleryUrl: 'https://etyswjpn79.execute-api.ap-northeast-1.amazonaws.com/suneditor-demo',
  imageUploadUrl: undefined,
  lang: SUNEDITOR_LANG['ru'],
  buttonList: [// default
  ['undo', 'redo'], ['font', 'fontSize', 'formatBlock'], ['paragraphStyle', 'blockquote'], ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'], ['fontColor', 'hiliteColor', 'textStyle'], ['removeFormat'], ['outdent', 'indent'], ['align', 'horizontalRule', 'list', 'lineHeight'], ['table', 'link', 'image', 'video', 'audio'], ['imageGallery'], ['fullScreen', 'showBlocks', 'codeView'], ['preview', 'print'], ['save', 'template'], // (min-width: 1565)
  ['%1565', [['undo', 'redo'], ['font', 'fontSize', 'formatBlock'], ['paragraphStyle', 'blockquote'], ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'], ['fontColor', 'hiliteColor', 'textStyle'], ['removeFormat'], ['outdent', 'indent'], ['align', 'horizontalRule', 'list', 'lineHeight'], ['table', 'link', 'image', 'video', 'audio'], ['imageGallery'], ['fullScreen', 'showBlocks', 'codeView'], ['-right', ':i-More Misc-default.more_vertical', 'preview', 'print', 'save', 'template']]], // (min-width: 1455)
  ['%1455', [['undo', 'redo'], ['font', 'fontSize', 'formatBlock'], ['paragraphStyle', 'blockquote'], ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'], ['fontColor', 'hiliteColor', 'textStyle'], ['removeFormat'], ['outdent', 'indent'], ['align', 'horizontalRule', 'list', 'lineHeight'], ['table', 'link', 'image', 'video', 'audio'], ['imageGallery'], ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template']]], // (min-width: 1326)
  ['%1326', [['undo', 'redo'], ['font', 'fontSize', 'formatBlock'], ['paragraphStyle', 'blockquote'], ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'], ['fontColor', 'hiliteColor', 'textStyle'], ['removeFormat'], ['outdent', 'indent'], ['align', 'horizontalRule', 'list', 'lineHeight'], ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template'], ['-right', ':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', 'imageGallery']]], // (min-width: 1123)
  ['%1123', [['undo', 'redo'], [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'], ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'], ['fontColor', 'hiliteColor', 'textStyle'], ['removeFormat'], ['outdent', 'indent'], ['align', 'horizontalRule', 'list', 'lineHeight'], ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template'], ['-right', ':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', undefined, 'imageGallery']]], // (min-width: 817)
  ['%817', [['undo', 'redo'], [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'], ['bold', 'underline', 'italic', 'strike'], [':t-More Text-default.more_text', 'subscript', 'superscript', 'fontColor', 'hiliteColor', 'textStyle'], ['removeFormat'], ['outdent', 'indent'], ['align', 'horizontalRule', 'list', 'lineHeight'], ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template'], ['-right', ':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', undefined, 'imageGallery']]], // (min-width: 673)
  ['%673', [['undo', 'redo'], [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'], [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'subscript', 'superscript', 'fontColor', 'hiliteColor', 'textStyle'], ['removeFormat'], ['outdent', 'indent'], ['align', 'horizontalRule', 'list', 'lineHeight'], [':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', undefined, 'imageGallery'], ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template']]], // (min-width: 525)
  ['%525', [['undo', 'redo'], [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'], [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'subscript', 'superscript', 'fontColor', 'hiliteColor', 'textStyle'], ['removeFormat'], ['outdent', 'indent'], [':e-More Line-default.more_horizontal', 'align', 'horizontalRule', 'list', 'lineHeight'], [':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', undefined, 'imageGallery'], ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template']]], // (min-width: 420)
  ['%420', [['undo', 'redo'], [':p-More Paragraph-default.more_paragraph', 'font', 'fontSize', 'formatBlock', 'paragraphStyle', 'blockquote'], [':t-More Text-default.more_text', 'bold', 'underline', 'italic', 'strike', 'subscript', 'superscript', 'fontColor', 'hiliteColor', 'textStyle', 'removeFormat'], [':e-More Line-default.more_horizontal', 'outdent', 'indent', 'align', 'horizontalRule', 'list', 'lineHeight'], [':r-More Rich-default.more_plus', 'table', 'link', 'image', 'video', 'audio', undefined, 'imageGallery'], ['-right', ':i-More Misc-default.more_vertical', 'fullScreen', 'showBlocks', 'codeView', 'preview', 'print', 'save', 'template']]]],
  placeholder: 'Start typing something...',
  templates: [{
    name: 'Template-1',
    html: '<p>HTML source1</p>'
  }, {
    name: 'Template-2',
    html: '<p>HTML source2</p>'
  }]
});
editor.getContext().options.imageUploadUrl = document.getElementById('uploadUrl').value;
btn.addEventListener('click', function (e) {
  console.log(editor.getContext().options.imageUploadUrl);
  editor.save();
});

/***/ }),

/***/ 2:
/*!**************************************!*\
  !*** multi ./resources/js/editor.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/stepan7/projects/laravel/kazak/resources/js/editor.js */"./resources/js/editor.js");


/***/ })

/******/ });