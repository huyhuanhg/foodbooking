Element.prototype.validate = Element.prototype.validate || function (options){
    if (this.tagName === "FORM"){
        new Validator(this, options);
    }
}
Element.prototype.resetValidate = Element.prototype.resetValidate || function (){
    if (this.tagName === "FORM"){
        Validator.reset(this);
    }
}
