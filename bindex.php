<!--DOCTYPE html-->

<html>
    <title>PDU - Power Distribution Unit</title>
    <head>
       <?php include 'style.php'; ?> 
    </head>

    <body>
         <div> 
            <?php 
                echo "Bismillah!"."<br>";
            ?> 

            <?php
            echo 'User IP Address - '.getHostByName(getHostName());  
            /*

                $ch = curl_init("http://192.168.1.111:8081/9/o");

                curl_setopt($ch, CURLOPT_HEADER, 0);

                echo curl_exec($ch);
               
            */?>

            <?php
                if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ac']))
                {
                    ac();
                }
              
                if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['kapa']))
                {
                    kapa();
                }

                function ac() {
                    $ch = curl_init("http://192.168.1.111:8081/7/on");

                    curl_setopt($ch, CURLOPT_HEADER, 0);
    
                    echo curl_exec($ch);
                }
              
                function kapa() {
                    $portStatus = readJsonFile();
                    header("Refresh:0");

                    // $ch = curl_init("http://192.168.1.111:8081/7/off");

                    //curl_setopt($ch, CURLOPT_HEADER, 0);
    
                    //$eko = curl_exec($ch);
                    //echo $eko;
                }                
                
                function readJsonFile(){
                    $jsonFile = json_decode(file_get_contents("portsState.json"), true);
                    return $jsonFile;
                }

                function readAndRefresh(){
                    $portStatus = readJsonFile();
                    header("Refresh:0");
                }
                
                echo "<br/>";
                
                $portStatus = readJsonFile();

                /*
                for($i=1;$i<17;$i++){
                    echo $i."-".$portStatus[$i]."<br>";
                }
                */
                
                $red = 'redLed.jpg';
                $green = 'greenLed2.jpg';

            ?>
            
            <form action="bindex.php" method="post">
                <input type="submit" name="ac" value="ON" />
            </form>
            
            <form action="bindex.php" method="post" class="test" >
                <input type="submit" name="kapa" value="OFF" />
            </form>

        </div>

        <div class="center_large">
        	<h2>Guc Kontrol Unitesi</h2>
        </div>
<!-- --------------------------------Get Current Status--------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Ports : </span>

            <button class="GFG_b" onclick="readAndRefresh">
                GET CURRENT STATUS
            </button>
        </div>

<!-- --------------------------------Port1---------------------------------------------- -->

        <div class="center">
            <span class="topic"> <b> Port1 : </span>
            
            <span class="button">
                <button class="GFG_g" 
                    onclick="window.location.href = 'http://192.168.1.111:8081/1/on';">
                    ON
                </button>

                <button class="GFG_r" 
                    onclick="window.location.href = 'http://192.168.1.111:8081/1/off';">
                    OFF
                </button>
            </span>

            <?php
                $array = readJsonFile();
                if($portStatus[1] =="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>
            
        </div>

<!-- --------------------------------Port2---------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port2 : </span>

        <span class="button">
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/2/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/2/off';">
		        OFF
		    </button>
        </span>

        <?php
            $array = readJsonFile();
            if($portStatus[2]=="on")
                echo "<img src=".$green." width=25px height=25px>"; 
            else
                echo "<img src=".$red." width=25px height=25px>"; 
        ?>
        
        </div>

<!-- ----------------------------Port3------------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port3 : </span>

        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/3/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/3/off';">
		        OFF
		    </button>
		    
            <?php
                $array = readJsonFile();
                if($portStatus[3]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>

        </div>

<!-- --------------------------------Port4---------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port4 : </span>

        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/4/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/4/off';">
		        OFF
		    </button>

            <?php
                $array = readJsonFile();
                if($portStatus[4]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>

        </div>

<!-- --------------------------------Port5---------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port5 : </span>

        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/5/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/5/off';">
		        OFF
		    </button>
		    
            <?php
                $array = readJsonFile();
                if($portStatus[5]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>

        </div>

<!-- --------------------------------Port6---------------------------------------------- -->
        
        <div class="center">
        	<b> Port6 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/6/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/6/off';">
		        OFF
		    </button>
		    
            <?php
                $array = readJsonFile();
                if($portStatus[6]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>

        </div>

<!-- --------------------------------Port7---------------------------------------------- -->

        <div class="center">
        	<b> Port7 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/7/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/7/off';">
		        OFF
		    </button>
            
            <?php
                $array = readJsonFile();
                if($portStatus[7]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>

        </div>

<!-- --------------------------------Port8---------------------------------------------- -->

        <div class="center">
        	<b> Port8 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/8/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/8/off';">
		        OFF
		    </button>
		    
            <?php
                $array = readJsonFile();
                if($portStatus[8]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>

        </div>

<!-- --------------------------------Port9---------------------------------------------- -->

        <div class="center">
        	<b> Port9 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/9/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/9/off';">
		        OFF
		    </button>
		    
            <?php
                $array = readJsonFile();
                if($portStatus[9]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>

        </div>

<!-- --------------------------------Port10--------------------------------------------- -->

        <div class="center">
        	<b> Port10:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/10/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/10/off';">
		        OFF
		    </button>
            
            <?php
                $array = readJsonFile();
                if($portStatus[10]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>

        </div>

<!-- --------------------------------Port11--------------------------------------------- -->

        <div class="center">
        	<b> Port11:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/11/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/11/off';">
		        OFF
		    </button>
		    
            <?php
                $array = readJsonFile();
                if($portStatus[11]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>

        </div>

<!-- --------------------------------Port12--------------------------------------------- -->

        <div class="center">
        	<b> Port12:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/12/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/12/off';">
		        OFF
		    </button>
		    
            <?php
                $array = readJsonFile();
                if($portStatus[12]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>

        </div>

<!-- --------------------------------Port13--------------------------------------------- -->

        <div class="center">
        	<b> Port13:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/13/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/13/off';">
		        OFF
		    </button>
		    
            <?php
                $array = readJsonFile();
                if($portStatus[13]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>
        </div>

 <!-- --------------------------------Port14--------------------------------------------- -->
        
        <div class="center">
        	<b> Port14:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/14/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/14/off';">
		        OFF
		    </button>

            <?php
                $array = readJsonFile();
                if($portStatus[14]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>
        </div>

<!-- --------------------------------Port15--------------------------------------------- -->

        <div class="center">
        	<b> Port15:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/15/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/15/off';">
		        OFF
		    </button>
		    
            <?php
                $array = readJsonFile();
                if($portStatus[15]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>
        </div>

<!-- --------------------------------Port16--------------------------------------------- -->

        <div class="center">
        	<b> Port16:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/16/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.1.111:8081/16/off';">
		        OFF
		    </button>
		    
            <?php
                $array = readJsonFile();
                if($portStatus[16]=="on")
                    echo "<img src=".$green." width=25px height=25px>"; 
                else
                    echo "<img src=".$red." width=25px height=25px>"; 
            ?>
        </div>

<!-- ---------------------------Open Them All------------------------------------------ -->

        <div class="center">
            <b> Ports   :
            <button class="GFG_b" 
                onclick="window.location.href = 'http://192.168.1.111:8081/openThemAll';">
                LET THEM LIVE
            </button>
        </div>

<!-- ---------------------------Kill Them All----------------------------------------- -->

        <div class="center">
            <b> Ports   :
            <button class="GFG_b" 
                onclick="window.location.href = 'http://192.168.1.111:8081/killThemAll';">
                KILL THEM ALL
            </button>
        </div>
<!-- --------------------------------------------------------------------------------- -->
  
    </body>
</html>