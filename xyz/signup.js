function highlight(){
    var kk = document.getElementsByTagName('input');
    var len = kk.length;
    for(var i = 0;i<len;i++){
        kk[i].addEventListener('focus',function(){
            kk[i].style.opacity='0';
        },false);
    }
    
}