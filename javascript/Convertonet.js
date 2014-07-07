var Convertonet = (function(global){
    global.get = function(sel){
        return document.getElementsByClassName(sel);
    };
       
    global.addListeners = function(css_selector, action, fn, options){        
        var els = global.get(css_selector),                
            len = els.length;

        while(len--){            
            els[len].addEventListener(action, fn);
        }                
    };  
    return global;
})(Convertonet || {});


