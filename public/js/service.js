const service = () => {

    //          const en tete du tableau
    const vet = document.querySelector('.vet');
    const chau = document.querySelector('.chau');
    const acc = document.querySelector('.acc');
    const tex = document.querySelector('.tex');
    const tab1 = document.querySelector('.tab1');
    const tab2 = document.querySelector('.tab2');
    const tab3 = document.querySelector('.tab3');
    const tab4 = document.querySelector('.tab4');




    //          cont tableau1
    const prod1 = document.querySelector('.s_menu1');
    const prod2 = document.querySelector('.s_menu2');
    const prod3 = document.querySelector('.s_menu3');
    const prod4 = document.querySelector('.s_menu4');
    const description1 =  document.querySelector('.s_produits1');
    const description2 =  document.querySelector('.s_produits2');
    const description3 =  document.querySelector('.s_produits3');
    const description4 =  document.querySelector('.s_produits4');

    //          cont tableau2
    const prod12 = document.querySelector('.s_menu12');
    const prod22 = document.querySelector('.s_menu22');
    const prod32 = document.querySelector('.s_menu32');
    const prod42 = document.querySelector('.s_menu42');
    const description12 =  document.querySelector('.s_produits12');
    const description22 =  document.querySelector('.s_produits22');
    const description32 =  document.querySelector('.s_produits32');
    const description42 =  document.querySelector('.s_produits42');

    //          cont tableau3
    const prod13 = document.querySelector('.s_menu13');
    const prod23 = document.querySelector('.s_menu23');
    const prod33 = document.querySelector('.s_menu33');
    const prod43 = document.querySelector('.s_menu43');
    const description13 =  document.querySelector('.s_produits13');
    const description23 =  document.querySelector('.s_produits23');
    const description33 =  document.querySelector('.s_produits33');
    const description43 =  document.querySelector('.s_produits43');

    //          cont tableau4
    const prod14 = document.querySelector('.s_menu14');
    const prod24 = document.querySelector('.s_menu24');
    const prod34 = document.querySelector('.s_menu34');
    const prod44 = document.querySelector('.s_menu44');
    const description14 =  document.querySelector('.s_produits14');
    const description24 =  document.querySelector('.s_produits24');
    const description34 =  document.querySelector('.s_produits34');
    const description44 =  document.querySelector('.s_produits44');


    //           en tete du tableau

    vet.addEventListener('click', ()=>{
        vet.classList.replace('no_act','act1');
        chau.classList.replace('act1','no_act');
        acc.classList.replace('act1','no_act');
        tex.classList.replace('act1','no_act');
        tab1.classList.replace('hide','voir1');
        tab2.classList.replace('voir1','hide');
        tab3.classList.replace('voir1','hide');
        tab4.classList.replace('voir1','hide');
        
    });
    chau.addEventListener('click', ()=>{
        chau.classList.replace('no_act','act1');
        vet.classList.replace('act1','no_act');
        acc.classList.replace('act1','no_act');
        tex.classList.replace('act1','no_act');
        tab2.classList.replace('hide','voir1');
        tab1.classList.replace('voir1','hide');
        tab3.classList.replace('voir1','hide');
        tab4.classList.replace('voir1','hide');
        
    });
    acc.addEventListener('click', ()=>{
        acc.classList.replace('no_act','act1');
        chau.classList.replace('act1','no_act');
        vet.classList.replace('act1','no_act');
        tex.classList.replace('act1','no_act');
        tab3.classList.replace('hide','voir1');
        tab2.classList.replace('voir1','hide');
        tab1.classList.replace('voir1','hide');
        tab4.classList.replace('voir1','hide');
        
    });
    tex.addEventListener('click', ()=>{
        tex.classList.replace('no_act','act1');
        chau.classList.replace('act1','no_act');
        acc.classList.replace('act1','no_act');
        vet.classList.replace('act1','no_act');
        tab4.classList.replace('hide','voir1');
        tab2.classList.replace('voir1','hide');
        tab3.classList.replace('voir1','hide');
        tab1.classList.replace('voir1','hide');
        
    });


    //           le    tableau1

    prod1.addEventListener('click', ()=>{
        prod1.classList.replace('no_act','act');
        prod2.classList.replace('act','no_act');
        prod3.classList.replace('act','no_act');
        prod4.classList.replace('act','no_act');
        description1.classList.replace('hide2','voir2');
        description2.classList.replace('voir2','hide2');
        description3.classList.replace('voir2','hide2');
        description4.classList.replace('voir2','hide2');
        
    });
    prod2.addEventListener('click', ()=>{
        prod2.classList.replace('no_act','act');
        prod1.classList.replace('act','no_act');
        prod3.classList.replace('act','no_act');
        prod4.classList.replace('act','no_act');
        description2.classList.replace('hide2','voir2');
        description1.classList.replace('voir2','hide2');
        description3.classList.replace('voir2','hide2');
        description4.classList.replace('voir2','hide2');
        
    });
    prod3.addEventListener('click', ()=>{
        prod3.classList.replace('no_act','act');
        prod2.classList.replace('act','no_act');
        prod1.classList.replace('act','no_act');
        prod4.classList.replace('act','no_act');
        description3.classList.replace('hide2','voir2');
        description2.classList.replace('voir2','hide2');
        description1.classList.replace('voir2','hide2');
        description4.classList.replace('voir2','hide2');
        
    });
    prod4.addEventListener('click', ()=>{
        prod4.classList.replace('no_act','act');
        prod2.classList.replace('act','no_act');
        prod3.classList.replace('act','no_act');
        prod1.classList.replace('act','no_act');
        description4.classList.replace('hide2','voir2');
        description2.classList.replace('voir2','hide2');
        description3.classList.replace('voir2','hide2');
        description1.classList.replace('voir2','hide2');
        
    });
    //           le    tableau 2

    prod12.addEventListener('click', ()=>{
        prod12.classList.replace('no_act','act');
        prod22.classList.replace('act','no_act');
        prod32.classList.replace('act','no_act');
        prod42.classList.replace('act','no_act');
        description12.classList.replace('hide2','voir2');
        description22.classList.replace('voir2','hide2');
        description32.classList.replace('voir2','hide2');
        description42.classList.replace('voir2','hide2');
        
    });
    prod22.addEventListener('click', ()=>{
        prod22.classList.replace('no_act','act');
        prod12.classList.replace('act','no_act');
        prod32.classList.replace('act','no_act');
        prod42.classList.replace('act','no_act');
        description22.classList.replace('hide2','voir2');
        description12.classList.replace('voir2','hide2');
        description32.classList.replace('voir2','hide2');
        description42.classList.replace('voir2','hide2');
        
    });
    prod32.addEventListener('click', ()=>{
        prod32.classList.replace('no_act','act');
        prod22.classList.replace('act','no_act');
        prod12.classList.replace('act','no_act');
        prod42.classList.replace('act','no_act');
        description32.classList.replace('hide2','voir2');
        description22.classList.replace('voir2','hide2');
        description12.classList.replace('voir2','hide2');
        description42.classList.replace('voir2','hide2');
        
    });
    prod42.addEventListener('click', ()=>{
        prod42.classList.replace('no_act','act');
        prod22.classList.replace('act','no_act');
        prod32.classList.replace('act','no_act');
        prod12.classList.replace('act','no_act');
        description42.classList.replace('hide2','voir2');
        description22.classList.replace('voir2','hide2');
        description32.classList.replace('voir2','hide2');
        description12.classList.replace('voir2','hide2');
        
    });
    //           le    tableau 3

    prod13.addEventListener('click', ()=>{
        prod13.classList.replace('no_act','act');
        prod23.classList.replace('act','no_act');
        prod33.classList.replace('act','no_act');
        prod43.classList.replace('act','no_act');
        description13.classList.replace('hide2','voir2');
        description23.classList.replace('voir2','hide2');
        description33.classList.replace('voir2','hide2');
        description43.classList.replace('voir2','hide2');
        
    });
    prod23.addEventListener('click', ()=>{
        prod23.classList.replace('no_act','act');
        prod13.classList.replace('act','no_act');
        prod33.classList.replace('act','no_act');
        prod43.classList.replace('act','no_act');
        description23.classList.replace('hide2','voir2');
        description13.classList.replace('voir2','hide2');
        description33.classList.replace('voir2','hide2');
        description43.classList.replace('voir2','hide2');
        
    });
    prod33.addEventListener('click', ()=>{
        prod33.classList.replace('no_act','act');
        prod23.classList.replace('act','no_act');
        prod13.classList.replace('act','no_act');
        prod43.classList.replace('act','no_act');
        description33.classList.replace('hide2','voir2');
        description23.classList.replace('voir2','hide2');
        description13.classList.replace('voir2','hide2');
        description43.classList.replace('voir2','hide2');
        
    });
    prod43.addEventListener('click', ()=>{
        prod43.classList.replace('no_act','act');
        prod23.classList.replace('act','no_act');
        prod33.classList.replace('act','no_act');
        prod13.classList.replace('act','no_act');
        description43.classList.replace('hide2','voir2');
        description23.classList.replace('voir2','hide2');
        description33.classList.replace('voir2','hide2');
        description13.classList.replace('voir2','hide2');
        
    });
    //           le    tableau 4

    prod14.addEventListener('click', ()=>{
        prod14.classList.replace('no_act','act');
        prod24.classList.replace('act','no_act');
        prod34.classList.replace('act','no_act');
        prod44.classList.replace('act','no_act');
        description14.classList.replace('hide2','voir2');
        description24.classList.replace('voir2','hide2');
        description34.classList.replace('voir2','hide2');
        description44.classList.replace('voir2','hide2');
        
    });
    prod24.addEventListener('click', ()=>{
        prod24.classList.replace('no_act','act');
        prod14.classList.replace('act','no_act');
        prod34.classList.replace('act','no_act');
        prod44.classList.replace('act','no_act');
        description24.classList.replace('hide2','voir2');
        description14.classList.replace('voir2','hide2');
        description34.classList.replace('voir2','hide2');
        description44.classList.replace('voir2','hide2');
        
    });
    prod34.addEventListener('click', ()=>{
        prod34.classList.replace('no_act','act');
        prod24.classList.replace('act','no_act');
        prod14.classList.replace('act','no_act');
        prod44.classList.replace('act','no_act');
        description34.classList.replace('hide2','voir2');
        description24.classList.replace('voir2','hide2');
        description14.classList.replace('voir2','hide2');
        description44.classList.replace('voir2','hide2');
        
    });
    prod44.addEventListener('click', ()=>{
        prod44.classList.replace('no_act','act');
        prod24.classList.replace('act','no_act');
        prod34.classList.replace('act','no_act');
        prod14.classList.replace('act','no_act');
        description44.classList.replace('hide2','voir2');
        description24.classList.replace('voir2','hide2');
        description34.classList.replace('voir2','hide2');
        description14.classList.replace('voir2','hide2');
        
    });
    
}
service();