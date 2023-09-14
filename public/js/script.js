const navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll',function(){
 if (this.window.scrollY >1){
    navbar.classList.replace('bg-light', 'nav-color');
 } else if(this.window.scrollY <=0){
    navbar.classList.replace('nav-color', 'bg-light');
 }
});

//jam
function displayTime(){
    var clientTime=new Date();
    var time=new Date(clientTime.getTime());
    var sh=time.getHours().toString();
    var sm=time.getMinutes().toString();
    var ss=time.getSeconds().toString();
  document.getElementById("jam").innerHTML=(sh.length==1?"0"+sh:sh)+":"+(sm.length==1?"0"+sm:sm)+":"+(ss.length==1?"0"+ss:ss);
}
