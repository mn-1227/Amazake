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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/jquery.rwdImageMaps.js":
/*!*********************************************!*\
  !*** ./resources/js/jquery.rwdImageMaps.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
* rwdImageMaps jQuery plugin v1.6
*
* Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize
*
* Copyright (c) 2016 Matt Stow
* https://github.com/stowball/jQuery-rwdImageMaps
* http://mattstow.com
* Licensed under the MIT license
*/
;

(function ($) {
  $.fn.rwdImageMaps = function () {
    var $img = this;

    var rwdImageMap = function rwdImageMap() {
      $img.each(function () {
        if (typeof $(this).attr('usemap') == 'undefined') return;
        var that = this,
            $that = $(that); // Since WebKit doesn't know the height until after the image has loaded, perform everything in an onload copy

        $('<img />').on('load', function () {
          var attrW = 'width',
              attrH = 'height',
              w = $that.attr(attrW),
              h = $that.attr(attrH);

          if (!w || !h) {
            var temp = new Image();
            temp.src = $that.attr('src');
            if (!w) w = temp.width;
            if (!h) h = temp.height;
          }

          var wPercent = $that.width() / 100,
              hPercent = $that.height() / 100,
              map = $that.attr('usemap').replace('#', ''),
              c = 'coords';
          $('map[name="' + map + '"]').find('area').each(function () {
            var $this = $(this);
            if (!$this.data(c)) $this.data(c, $this.attr(c));
            var coords = $this.data(c).split(','),
                coordsPercent = new Array(coords.length);

            for (var i = 0; i < coordsPercent.length; ++i) {
              if (i % 2 === 0) coordsPercent[i] = parseInt(coords[i] / w * 100 * wPercent);else coordsPercent[i] = parseInt(coords[i] / h * 100 * hPercent);
            }

            $this.attr(c, coordsPercent.toString());
          });
        }).attr('src', $that.attr('src'));
      });
    };

    $(window).resize(rwdImageMap).trigger('resize');
    return this;
  };
})(jQuery);

/***/ }),

/***/ 1:
/*!***************************************************!*\
  !*** multi ./resources/js/jquery.rwdImageMaps.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/ec2-user/environment/amazake/resources/js/jquery.rwdImageMaps.js */"./resources/js/jquery.rwdImageMaps.js");


/***/ })

/******/ });