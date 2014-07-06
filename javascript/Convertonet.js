var Convertonet = (function(global){
    global.get = function(sel){
        return document.getElementsByClassName(sel);
    };
       
    global.addListeners = function(css_selector, action, fn, options){
        var args = arguments,
            doAddListener = function(css_selector, action, fn, options){
            var els = global.get(css_selector),                
                len = els.length;
        
            while(len--){            
                els[len].addEventListener(action, fn);
            }
        };
        if(document.readyState === "complete"){
            global.addListeners = doAddListener;
            return doAddListener.apply(this, args);
        }else{
            window.onload = function(){
                return doAddListener.apply(this, args);
            };
        }        
    };  
    global.justAddListener = function(){
        
    };
    return global;
})(Convertonet || {});


