fetch('data.json')
        .then(response => response.json())
        .then(data => {
          const jsonDataDiv = document.getElementById('json-data');
          jsonDataDiv.innerHTML = `
            <p>Name: ${data.name}</p>
            <p>Age: ${data.age}</p>
            <p>Email: ${data.email}</p>
            <p>Phone Home: ${data.phone.home}</p>
            <p>Phone Work: ${data.phone.work}</p>
            <p>Hobbies: ${data.hobbies.join(', ')}</p>
            <p>Address: ${data.address.street}, ${data.address.city}, ${data.address.state} ${data.address.zip}</p>
          `;
        })
        .catch(error => console.error(error));