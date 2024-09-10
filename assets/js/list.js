In=document.querySelectorAll('.item');
Out=document.querySelectorAll('.service');
items=document.querySelector('.items');

In.forEach(element => {

    element.onclick = () => {

        for(i=0;i<Out.length;i++){

            if(Out[i].getAttribute("data-service") == element.getAttribute("data-service")){
                Out[i].classList.add("show");
            } else {
                Out[i].classList.remove("show");
            }
        }

        items.querySelector('.active').classList.remove('active');
        element.classList.add('active');
    }
});


// FOR PATIENTS LIST DOCTOR PAGE

list_info=document.querySelectorAll('.list_info');
data=document.querySelectorAll('.data');
list_infos=document.querySelector('.list_infos');

list_info[0].classList.add('active');
data[0].classList.add('show');

list_info.forEach(element => {

    element.onclick = () => {

        for(i=0;i<data.length;i++){

            if(data[i].getAttribute("data-service") == element.getAttribute("data-service")){
                data[i].classList.add("show");
            } else {
                data[i].classList.remove("show");
            }
        }

        list_infos.querySelector('.active').classList.remove('active');
        element.classList.add('active');
    }
});