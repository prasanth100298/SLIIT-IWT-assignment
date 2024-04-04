//https://youtu.be/8aEznmj40sc
const imgDiv = document.querySelector('.profilepic');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadbtn = document.querySelector('#uploadbtn');

//hover//
imgDiv.addEventListener('mouseenter',function()
{
    uploadbtn.style.display="block"
});

//hover out//
imgDiv.addEventListener('mouseleave',function()
{
    uploadbtn.style.display="none"
});

//image showing function//
file.addEventListener('change',function(){
    const choosedFile = this.files[0];

    if(choosedFile){
        const reader = new FileReader();

        reader.addEventListener('load',function(){
            img.setAttribute('src',reader.result);
        });

        reader.readAsDataURL(choosedFile);
    }
});