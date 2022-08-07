<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://jsonplaceholder.typicode.com/todos/1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$response = json_decode($response, true); //because of true, it's in an array
// print_r ($response['title']); exit
// $response;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="User.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
          <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">Dreamcapes</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
          <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li>
          <li>
            <a href="./Index.php">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Dashboard</span>
            </a>
             <span class="tooltip">Dashboard</span>
          </li>
          <li>
           <a href="./User.php">
             <i class='bx bx-user' ></i>
             <span class="links_name">User</span>
           </a>
           <span class="tooltip">User</span>
         </li>
         <li class="profile">
             <div class="profile-details">
               <!--<img src="profile.jpg" alt="profileImg">-->
               <div class="name_job">
                 <div class="name">Rahul Sir</div>
                 <div class="job">Admin</div>
               </div>
             </div>
             <i class='bx bx-log-out' id="log_out" ></i>
         </li>
        </ul>
      </div>
        <section class="user-section">
            <div class="board">
        <table width = "100%">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Title</td>
                    <td>Status</td>
                    <td>Server</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <?php 
                    // print_r($response[0]['title']);exit;
                        foreach($response as $row)
                        // while($row = $response )
                        {
                            // print_r($row['title']);
                            // exit; 
                            // print_r(while($row = mysqli_fetch_assoc($tquery )));exit;
                            ?>
                            <td><?php echo $row->title ?></td>
                            
                            <?php
                        }
                    ?> -->

                    <td class="people">
                        <h5>Jhon Doe</h5>
                    </td>
                    <td class="people-des">
                        <h5>Player 1</h5>
                    </td>
                    <td class="active">
                        <p>Active</p>
                    </td>
                    <td class="server">
                        <p>Server 1</p>
                    </td>
                    <td class = "edit"><a href="#">Edit</a></td>
                    
                </tr>
            </tbody>
        </table>
            </div>
        </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");
      
        closeBtn.addEventListener("click", ()=>{
          sidebar.classList.toggle("open");
          menuBtnChange();//calling the function(optional)
        });
      
        searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
          sidebar.classList.toggle("open");
          menuBtnChange(); //calling the function(optional)
        });
      
        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
         if(sidebar.classList.contains("open")){
           closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
         }else {
           closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
         }
        }
        </script>
        <script src="user.js"></script>
</body>
</html>