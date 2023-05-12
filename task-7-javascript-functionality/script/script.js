document.addEventListener('click', () => {
    let enteredNumber = document.getElementById('enteraNumber').value;
    let splitTimes = document.getElementById('numberOFtimes').value;
    const boxesArray = [];
    let quoVal = Math.floor(enteredNumber / splitTimes);
    let remainderValue = enteredNumber % splitTimes;
    // console.log(quoVal);
    // console.log(remainderValue);
    let flag = true;
    if(remainderValue != 0){
        flag = false;
    }
    while(splitTimes > 0){
        if(flag == true){
            boxesArray.unshift(quoVal);
        }
        else if(flag == false && remainderValue != 0){
            let newVal = quoVal;
            newVal++;
            boxesArray.unshift(newVal);
            remainderValue--;
        }
        else{
            boxesArray.unshift(quoVal);
        }
        splitTimes--;
    }
    let BigBox = document.createElement('div');
    BigBox.classList.add('BigBox');
    document.getElementById('final').appendChild(BigBox);
    let newColors = ['newColor1' , 'newColor2' , 'newColor3' , 'newColor4'];
    for(let i=0;i<boxesArray.length;i++){
        // text1.concat(text2);
        let item = document.createElement('div');
        item.classList.add('item');
        item.classList.add(newColors[i % newColors.length]);
        item.style.width = `${(100*boxesArray[boxesArray.length-i-1])}`;
        item.innerText = boxesArray[boxesArray.length-i-1];
        BigBox.appendChild(item);
    }
});

1000






