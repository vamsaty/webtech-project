
function slider(){
    
    var lhs = document.getElementById('lhs');
    var data = ['image/Beach.jpg','image/world.jpg','image/wall.jpg'];
    lhs.style.backgroundSize='cover';

    setInterval(slide,4000);
    
    var x = 0;
    var iter = 0;                
    function slide(){
        x = iter%3;
        setTimeout(function(){lhs.style.backgroundImage='url('+data[(x+1)%3]+')';},300);
        setTimeout(function(){lhs.style.opacity='0.4';},600);        

        
        document.body.style.backgroundSize='cover';

        iter++;
                    
}
}


function welcome(){
    var hh = document.getElementsByTagName('h1');
    var str = 'Welcome to the CAVE';
    var id = setInterval(wri,100);
    var len = str.length;
    var iter=0;
    function wri(){
        if(iter ==len){
            clearInterval(id);
            
        }else{
            hh[0].innerHTML+=str[iter];
            iter++;

        }
    }
                
}





function dis(e){

    
    
    
}













