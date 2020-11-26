const forms = document.querySelectorAll('#form-js');

// console.log(forms);

forms.forEach(form => function(){
    form.addEventListener('submit',function(e){
        e.preventDefault();
        console.log('formulaire clicke');
    });
});