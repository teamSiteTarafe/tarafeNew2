const dash = () => {

    const com1 = document.querySelector('.com00');
    const list1 = document.querySelector('.list00');
    const ajout1 = document.querySelector('.ajout00');
    const deco = document.querySelector('.deco00');
    const com2 = document.querySelector('.cont021');
    const list2 = document.querySelector('.cont0211');
    const ajout2 = document.querySelector('.cont0212');


    com1.addEventListener('click', ()=>{
        com1.classList.replace('no-color','color');
        list1.classList.replace('color','no-color');
        ajout1.classList.replace('color','no-color');
        com2.classList.replace('hde','nhde');
        list2.classList.replace('nhde','hde');
        ajout2.classList.replace('nhde','hde');
    });
    list1.addEventListener('click', ()=>{
        list1.classList.replace('no-color','color');
        com1.classList.replace('color','no-color');
        ajout1.classList.replace('color','no-color');
        list2.classList.replace('hde','nhde');
        com2.classList.replace('nhde','hde');
        ajout2.classList.replace('nhde','hde');
    });
    ajout1.addEventListener('click', ()=>{
        ajout1.classList.replace('no-color','color');
        list1.classList.replace('color','no-color');
        com1.classList.replace('color','no-color');
        ajout2.classList.replace('hde','nhde');
        list2.classList.replace('nhde','hde');
        com2.classList.replace('nhde','hde');
    });
    deco.addEventListener('click', ()=>{
        deco.classList.replace('no-color','color');
        list1.classList.replace('color','no-color');
        com1.classList.replace('color','no-color');
        ajout1.classList.replace('color','no-color');
    });

}
dash();