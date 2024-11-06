

fetch('/api/anime')

    .then(response => response.json())

    .then(data => {
        let wrapper = document.querySelector('#wrapper');
        data.forEach(person => {
            let col = document.createElement('div');

            
            col.classList.add('col-12', 'col-md-3', 'my-3');

            col.innerHTML = ` <div class="card" style="width: 18rem;">
                <img src="${person.img}" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h2 class="card-title">${person.name} ${person.surname}</h2>
                        <p class="card-text">Anni ${person.age}</p>
                    </div>
                </div> `;
                wrapper.appendChild(col);
        });
        
    })

    .catch(error => { console.error('Si e verificato un errore; ', error); })

