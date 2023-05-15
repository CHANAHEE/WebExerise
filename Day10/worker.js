var n = 0;
while(true){
    n++;
    // document.getElementById('hh').innerHTML = n;
    // 별도 worker 에서는 UI 작업이 불가능!

    // 메인스레드에게 요청
    postMessage(n);
}