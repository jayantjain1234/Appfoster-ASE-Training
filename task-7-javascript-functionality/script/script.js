document.addEventListener('click', () => {


    let enteredNumber = document.getElementById('enteraNumber').value;
    let splitTimes = document.getElementById('numberOFtimes').value;

    if(enteredNumber < 0 || splitTimes < 0){
        document.addEventListener('click',() => {
            let element = document.createElement('div');
            element.classList.add('element');
            element.style.color = "red";
            element.style.fontSize = "20px";
            element.innerText = "please enter a valid number";
            document.getElementById('final').appendChild(element);
        });
    }
    else{
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
            item.style.width = `${(1000 * boxesArray[boxesArray.length-i-1])}px`;
            item.innerText = boxesArray[boxesArray.length-i-1];
            BigBox.appendChild(item);
        }
    }
});    