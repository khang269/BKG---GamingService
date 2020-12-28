const imgDiv = document.querySelector('.pic-div');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');


imgDiv.addEventListener('mouseenter', function(){
    uploadBtn.style.display = 'block';
});
imgDiv.addEventListener('mouseleave', function(){
    uploadBtn.style.display = 'none';
});



file.addEventListener('change',function(){
    const imgPicked = this.files[0];

    if(imgPicked){
        const reader = new FileReader();

        reader.addEventListener('load',function(){
            img.setAttribute('src',reader.result)
        });
        reader.readAsDataURL(imgPicked);
    }
    
});