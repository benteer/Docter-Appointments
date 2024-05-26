<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vertical Navbar</title>
  <link rel="stylesheet" href="style4.css">
  <link rel="stylesheet" href="style6.css">
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
 

  <div class="" style="display: flex;">
    
  </div>


  </div>
  <div class="navbar">
    <a href="#" class="active">Home</a>
    <a href="#">Dashboard  </a>
    <a href="#">appointment</a>
    <a href="#">appointment</a>
    <a href="#">Payment</a>
    <a href="#">Setting</a>
    <a href="login.html">Logout</a>
  </div>


  <div class="content">
    

    <div class="box">
      
        <div class="doctor">
            <p>All Doctor</p>
            <span id="doctor5">0++</span>

        </div>

        <div class="doctor2">
            <p>All Patients</p>
            <span id="count">0++</span>
        </div>


        <div class="doctor2">
          <p>All Operation</p>
          <span id="count">0++</span>
      </div>
        </div>

   

        </div>
    
    <div class="content">
    <button id="openModalBtn" class="btn">Add</button>
    <div id="modal" class="modal">
      <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Schedule Appointment</h2>
    <form id="appointmentForm" method="POST">
      <label for="patientName">Your Name:</label>
      <input type="text" id="Name" required>
      <label for="patienttime">Time</label>
      <input type="time" id="time" required>
      <label for="appointmentDate">Date:</label>
      <input type="date" id="Date" required>
      <input type="submit" value="Submit" >
      
    </form>
  </div>

</div>

  <?php 
    $servername = "localhost";
    $username = "debian-sys-maint";
    $password = "xveTEC8PboluHpDI";
    $dbname = "";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection Error Occured". $conn->connect_error);
    }


    if(isset( $_POST["Name"]) && isset($_POST["time"]) && isset($_POST["Date"]){
      $time = $_POST["time"];
      $name = $_POST["Name"];
      $date = $_POST["Date"];

      $sql = "INSERT INTO wt VALUES('$name','$time',$date)";
      $result = $conn->query($sql);
    }

    $sql1 = "SELECT * FROM  patient";
    $result1 = $conn->query($sql1);

    if($result1->num_rows > 0){
      echo '<div id="appointmentsList">';
      while($row = $result1->fetch_assoc()){
        echo '<div class="para5">
        <p>$row["name"]</p>
        <p>$row["date"]</p>
        <p>$row["time"]</p>
        </div>';
      }
      echo "</div>";
    }
  ?>

<div class="apoint" id="appointments">

  <h2>Schedule Appointment</h2>

  <div class="appoints">
  <span style="font-size: 20px; font-family: 'Courier New', Courier, monospace;">Name</span>
  <span style="font-size: 20px; font-weight: 300;">Date</span>
  <span>Time</span>

  </div>

  <div>
 
  </div>
  




</div>






  <script>


   
var modal = document.getElementById("modal");


var openModalBtn = document.getElementById("openModalBtn");


var closeBtn = document.getElementsByClassName("close")[0];


openModalBtn.onclick = function() {
  modal.style.display = "block";
}

closeBtn.addEventListener('click ' , function() {
  modal.style.display = "none";

} 
) 
  
  



window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

document.getElementById("appointmentForm").addEventListener("submit", function(event) {
  event.preventDefault();
  

  var patientName = document.getElementById("Name").value;
  var appointmentDate = document.getElementById("Date").value;
  var  appointtime = document.getElementById("time").value;

  const newAppointment = {
     patientName,
     appointmentDate,
     appointtime
  };




  const appendAppointment8 = {
    patientName: "patientName",
    appointmentDate: "appointmentDate",
    appointtime: "appointtime"



  }
  xampp-linux-x64-8.0.30-0-installer.run


  




  var appointmentDiv = document.createElement('div');



  appointmentDiv.innerHTML = `<div class="para5">
                                    <p>${patientName}</p>
                                    <p>${appointmentDate}</p>
                                    <p>${appointtime}</p>
                                    </div>`;


    document.getElementById("appointments").appendChild(appointmentDiv);
      



  modal.style.display = "none";

  addAppointment2(appointmentDiv);
  savappointment(newAppointment);







});










let cnt = 0;


function addAppointment2() {
    cnt++;
    document.getElementById("count").innerHTML = cnt;
    console.log(cnt);


}
 

document.getElementById("appointmentForm").addEventListener('click' , function(event) {
  let cnt = 0;
  cnt++;
  var doctor = document.getElementById("doctor5"); // Corrected ID
  doctor.innerHTML = cnt;
 
});




   function savappointment(appointment)
   {
    let appointments = JSON.parse(localStorage.getItem('appointments')) || [];
     appointments.push(appointment);
    localStorage.setItem('appointments', JSON.stringify(appointments));
    

   }

  </script>

    
      
    
      


</body>
</html>
