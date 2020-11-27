const forms = document.querySelectorAll('#form-js');

// console.log(forms);

forms.forEach(form => {
    form.addEventListener('submit',function(e){
        e.preventDefault();
        const url = this.getAttribute('action');
        const token = document.querySelector('meta[name = "csrf-token"]').content;
        const postId = this.querySelector('#post-id-js').value;
        const count  = this.querySelector('#count-js');

        // console.log(count);

        fetch(url , {
            headers : {
                'Content-Type' : 'application/json',
                'X-CSRF-TOKEN' : token,
            },
            method : 'post',
            body : JSON.stringify({
                id : postId
            })
        }).then(response => {
            response.json().then(data => {
                count.innerHTML = data.count + ' like(s)'
                console.log(data); 
            })
        }).catch(error => {
            console.log(error);
        });


    });
});

