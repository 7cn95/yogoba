const navLinks = document.querySelector('.nav-links')
const c1 = document.querySelector('.c1')
const c2 = document.querySelector('.c2')
const c3 = document.querySelector('.c3')
const cp1 = document.querySelector('.cp1')
const cp2 = document.querySelector('.cp2')
const cp3 = document.querySelector('.cp3')


// events 
c2.addEventListener('click',showcp2);
c3.addEventListener('click',showcp3);
c1.addEventListener('click',showcp1);

//functions
function onToggleMenu(e){
    e.name = e.name === 'menu' ? 'close' : 'menu';  
    if(navLinks.classList.contains("top-[-1000%]")){
        navLinks.classList.replace("top-[-1000%]",'top-[65px]');
    }else{
        navLinks.classList.replace('top-[65px]',"top-[-1000%]");
    }
}

function showcp2(){
    cp1.classList.add("hidden");
    cp3.classList.add("hidden");

    cp2.classList.remove('hidden');

    c1.classList.remove('border-gray-300','bg-[#ff4848]');
    c1.classList.add('border-[#ff4848]');
    c3.classList.remove('border-gray-300','bg-[#ff4848]');
    c3.classList.add('border-[#ff4848]');

    c2.classList.remove('border-[#ff4848]');
    c2.classList.add('border-gray-300','bg-[#ff4848]');
}
function showcp3(){
    cp1.classList.add("hidden");
    cp2.classList.add("hidden");

    cp3.classList.remove('hidden');

    c1.classList.remove('border-gray-300','bg-[#ff4848]');
    c1.classList.add('border-[#ff4848]');
    c2.classList.remove('border-gray-300','bg-[#ff4848]');
    c2.classList.add('border-[#ff4848]');
    c3.classList.remove('border-[#ff4848]');
    c3.classList.add('border-gray-300','bg-[#ff4848]');
}
function showcp1(){
    cp2.classList.add("hidden");
    cp3.classList.add("hidden");

    cp1.classList.remove('hidden');

    c2.classList.remove('border-gray-300','bg-[#ff4848]');
    c2.classList.add('border-[#ff4848]');
    c3.classList.remove('border-gray-300','bg-[#ff4848]');
    c3.classList.add('border-[#ff4848]');
    c1.classList.remove('border-[#ff4848]');
    c1.classList.add('border-gray-300','bg-[#ff4848]');
}
