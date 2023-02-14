window.onload=function(){
  let button = document.querySelector('.dark-button')
  
   // press the button to toggle the .dark-mode class
  button.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark-mode')  
    
  })}
  
  