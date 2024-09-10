In2=document.querySelectorAll('.toggle_info');
Out2=document.querySelectorAll('.infos_detail');

In2.forEach(element => {

    element.onclick = () => {

        for(i=0;i<Out2.length;i++){

            if(Out2[i].classList.contains("montrer")){
                Out2[i].classList.remove("montrer");
            } else if(Out2[i].getAttribute("data-service") == element.getAttribute("data-service")){
                Out2[i].classList.add("montrer");
            } else {
                Out2[i].classList.remove("montrer");
            }
        }

    }
});