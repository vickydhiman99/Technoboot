document.getElementById('open').addEventListener('click',function () {
    document.getElementById('open-header').classList.toggle('header-show');
});


// =================Counter Script start ==================
let count1=setInterval(updated,38);
        let uptoo=0;
        function updated(){
            var count= document.getElementById("counter");
            count.innerHTML=++uptoo;
            if(uptoo===115)
            {
                clearInterval(count1);
            }
        }

        let count2=setInterval(updatedd,2);
        let uptooo=0;
        function updatedd(){
            var count= document.getElementById("counterrr");
            count.innerHTML=++uptooo;
            if(uptooo===1044)
            {
                clearInterval(count2);
            }
        }

        let count3=setInterval(updateddd,80);
        let uptoooo=0;
        function updateddd(){
            var count= document.getElementById("counterrrr");
            count.innerHTML=++uptoooo;
            if(uptoooo===53)
            {
                clearInterval(count3);
            }
        }

// =================Counter Script end ==================
