function SandData(){

   var myName = document.getElementById('myName').value;
   var myClass = document.getElementById('myClass').value;
   var myRoll = document.getElementById('myRoll').value;

    var url ="/insetData";
    var data ={ name: myName, class: myClass, roll: myRoll};

    axios.post(url, data)

      .then(function (response) {
        alert(response.data);
      })

      .catch(function (error) {
        alert('Error');
      });

}

function DeleteData(){
    var myId = document.getElementById('myId').value;

    var url ="/deleteData";
    var data ={id:myId};

    axios.post(url, data)

    .then(function (response) {
      alert(response.data);
    })

    .catch(function (error) {
      alert('Error');
    });
}

function UpdateData(){

    var myId = document.getElementById('myId').value;
    var myName = document.getElementById('myName').value;
    var myClass = document.getElementById('myClass').value;
    var myRoll = document.getElementById('myRoll').value;
 
     var url ="/updateData";
     var data ={id:myId, name: myName, class: myClass, roll: myRoll};
 
     axios.post(url, data)
 
       .then(function (response) {
         alert(response.data);
       })
 
       .catch(function (error) {
         alert('Error');
       });

}