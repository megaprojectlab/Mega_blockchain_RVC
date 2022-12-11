function callApp(type = '', option = {}){
    if(type == ''){
        return;
    }

    let datas = {type : type, option : option};
    window.ReactNativeWebView.postMessage(JSON.stringify(datas));
}

window.addEventListener("message", message => {
    console.log('message', message.data);
    // $("#response").html(`${message.data}`);
    let datas = JSON.parse( JSON.stringify(message.data) );

    if( typeof(resApp) == 'function' ) {
        resApp(datas);
    }

    
});


// Android 일때 함수 이렇게 사용해야함
document.addEventListener("message", message => {
    console.log('message', message.data);
    // document.getElementById("response").innerHTML = 'test';
    // $("#response").html(`${message.data}`);
    let datas = JSON.parse( JSON.stringify(message.data) );

    if( typeof(resApp) == 'function' ) {
        resApp(datas);
    }
});