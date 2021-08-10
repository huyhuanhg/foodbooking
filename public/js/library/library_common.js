var $ = function (selector) {
  if (/^#(.+?)/.test(selector)){
    return document.querySelector(selector);
  }
  return document.querySelectorAll(selector);
};
