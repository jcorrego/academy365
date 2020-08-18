require('./bootstrap');
console.log('ok')
window.setTimeout(()=>{
    let not
    if(not = document.getElementById('notification')){
        not.__x.$data.isVisible = false
    }
},3000)

