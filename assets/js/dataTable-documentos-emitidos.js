/*------------------------------------------------------------------------------------- */
//PRUEBA CONSUMIR DATOS DE UNA API (10 USUARIOS)
//Almacenar la datatable
let dataTable;
//Servira pra saber si la DataTable ya esta iniciada o no
let dataTableIsInitialized = false;

//Opciones de dataTable(centrado,Paginación,Pagina Destruible,Lenguaje)
const dataTableOptions = {
    //scroll para cuando hayan demasiados datos de ancho para mostrar
    //scrollX:"2000px",
    columnDefs: [
        { className: "centered", targets: [0, 1, 2, 3, 4, 5, 6, 7, 8] },
        //Busque datos en una columna en concreto
        //En este caso la primera columna con datos es "Nombre", por ello es "0"
        { searchable: false, targets: [0] },
        //ajustar parametros(parametro 0 (ancho))
        //{width:"50%", targets:[0]}
    ],
    
    lengthMenu: [5, 10, 15, 20], //Menu en el cual e definido traer cierta cantidad de filas
    destroy: true,
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún usuario encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún usuario encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando... ",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior"
        }
    }
};

/*
La funcion initDataTable sera la encargada de listar a los usuarios
- Realizar la peticion fetch
- convertir los datos de Json y recorrer cada uno de ellos para crear la tabla 
*/
const initDataTable = async () => {
    //Al preguntar si la variable dataTableIsInitialized esta en TRUE
    //Desde la Datatable llamamos su funcion destroy para destruirla 
    if (dataTableIsInitialized) {
        dataTable.destroy();
    }

    await listUsers();

    dataTable = $("#dataTable_users").DataTable(dataTableOptions);

    dataTableIsInitialized = true;
};

const listUsers = async () => {
    try {
        const response = await fetch("https://jsonplaceholder.typicode.com/users");
        const users = await response.json();

        let content = ``;
        users.forEach((user, index) => {
            content += `
            <tr> 
                <td>${index + 1}</td>
                <td>${user.name}</td>
                <td>${user.email}</td>
                <td>${user.address.city}</td>
                <td>${user.company.name}</td>
                <td>${user.username}</td>
                <td>${user.company.name}</td>
                <td>${user.company.name}</td>
                <td>${user.company.name}</td>
            </tr>`;
        });
        tableBody_users.innerHTML = content;
    } catch (ex) {
        alert(ex);
    }
};

window.addEventListener("load", async () => {
    await initDataTable();
});