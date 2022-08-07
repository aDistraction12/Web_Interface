fetch("https://jsonplaceholder.typicode.com/todos/1").then((data)=>{
    return data.json();
}).then((objectData)=>{
    console.log(objectData[0].userId);
})
