var $ = function (selector) {
  if (/^#(.+?)/.test(selector)){
    return document.querySelector(selector);
  }
  return document.querySelectorAll(selector);
};
var ajax = function (objRequest) {
    if (Ajax){
        new Ajax(objRequest);
    }
}
ajax.get = function (objRequest){
    if (Ajax){
        new Ajax({
            method: 'get',
            ...objRequest
        });
    }
}
ajax.post = function (objRequest){
    if (Ajax){
        new Ajax({
            method: 'post',
            ...objRequest
        });
    }
}
