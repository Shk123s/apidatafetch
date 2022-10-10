<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=30", initial-scale="1.0">
    <title>Document</title>
</head>
<body>
<p id="see">this is api data </p>
    <script>
        fetch("http://127.0.0.1:8000/api/list").then((data)=>{
            return data.json();

        }).then((objectData)=>{
            console.log(objectData[4]);
            let tableData = "";
            objectData.map((values)=>{
                tableData = `<h1>${values.id}</h1>
                <h1>${values.Name}</h1>
                <h1>${values.Roll}</h1>
                <h1>${values.created_at}</h1>`;
            });
            document.getElementById("see").innerHTML=tableData;
        })
// const p = document. getElementById("see")
//     const use = fetch('')
//   .then((response) => response.json())
//   .then((data) => console.log(data));
//   alert(p); 
        </script>
</body>
</html>