<!--DOCTYPE html-->

<html xmlns="http://www.w3.org/1999/xhtml" lang="tr-TR">
    <title>PDU - Power Distribution Unit</title>

    <head>
        <?php 
            include 'style.php'; 
            include 'constants.php';
        ?> 
    </head>

    <body style="background-color:white;">
         <div> 
            <?php

                if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['ac']))
                {
                    //ac('basla');
                }

                if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['kapa']))
                {
                    kapa('sen de');
                }

                function ac($gelen) {
                    echo "gelen deger: ".$gelen;
                    echo "test";
                    /*
                    $ch = curl_init("http://127.0.0.1/test.php");

                    curl_setopt($ch, CURLOPT_HEADER, 0);
    
                    echo curl_exec($ch);
                    */
                }
              
                function kapa($giden) {
                    echo "gelen deger: ".$giden;

                    $portStatus = readJsonFile();
                    header("Refresh:0");
                }     
                
                function readJsonFile2($fileName){
                    $jsonFile = json_decode(file_get_contents($fileName), true);
                    return $jsonFile;
                }
                
                function readJsonFile(){
                    $jsonFile = json_decode(file_get_contents("portsState.json"), true);
                    return $jsonFile;
                }

                function readAndRefresh(){
                    $portStatus = readJsonFile();
                    header("Refresh:0");
                }
                
                $portStatus = readJsonFile();

            ?>

        </div>

        <script>
            function openPort(port){
                //document.write("geldim!")
                const url = "http://192.168.1.110:8081/" + port + "/on";

                const options = {
                headers: {
                    Authorization: "Bearer 6Q************"
                }
                };

                fetch(url, options)
                .then( res => res.json() )
                    .then( data => console.log(data) );
            }

            function closePort(port){
                //document.write("geldim!")
                const url = "http://192.168.1.110:8081/" + port + "/off";

                const options = {
                headers: {
                    Authorization: "Bearer 6Q************"
                }
                };

                fetch(url, options)
                    .then( res => res.json() )
                    .then( data => console.log(data) )

                document.write(res);
            }

                
            function testPort(port){
                const url = "http://192.168.1.110:8081/" + port + "/off";
                const util = require('util');
                const exec = util.promisify(require('child_process').exec);

                const goCurl = async (url) => {
                    const { stdout, stderr } = await exec(`curl '${url}'`);

                    console.log('data:', stdout);
                    console.error('err:', stderr);

                }
            }
                
        </script>

        <div class="center_large">
        	<h1>Güç Kontrol Ünitesi</h1>
        </div>
        <button id="buttonRed" onclick='openPort("3");'>ON</button>
<!-- --------------------------------Headers--------------------------------------------- -->

        <div class="center">

            <span class="portHead">
                <span style="color:blue; line-height:40px; font-size: 25px;" > PORT </span>
            </span>

            <span class="buttonAndLeds">
                <span style="color:blue; line-height:40px; font-size: 25px;" > BUTTONS | LEDS </span>
            </span>

            <span class="device">
                <span style="color:blue; line-height:40px; font-size: 25px;" > CONNECTED DEVICES </span>
            </span>

        </div>

<!-- --------------------------------Port1---------------------------------------------- -->

        <div class="center">
            <span class="topic"> <b> Port1 : </span>
            
            <span class="button">

                <form action="hindex.php" method="post" >
                    <button onclick="openPort('1')" value="ON" id="buttonGreen">ON</button>

                    <button onclick="testPort('1')" value="OFF" id="buttonRed" >OFF</button>
                </form>

            </span>

            <span class="led">
                <?php
                    if($portStatus[1] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[1];
                    ?>
                </span>
            </span>
            
        </div>

<!-- --------------------------------Port2---------------------------------------------- -->

        <div class="center">
            <span class="topic"> <b> Port2 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>

            <span class="led">
                <?php
                    if($portStatus[2]=="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px>"; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[2];
                    ?>
                </span>
            </span>

        </div>

<!-- ----------------------------Port3------------------------------------------------- -->

        <div class="center">
            <span class="topic"> <b> Port3 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>

            <span class="led">                
                <?php
                    if($portStatus[3]=="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px>"; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[3];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port4---------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port4 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>

            <span class="led">                
                <?php
                    if($portStatus[4]=="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px>"; 
                ?>
            </span>
            
            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[4];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port5---------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port5 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>
		    
            <span class="led">                
                <?php
                    if($portStatus[5]=="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px>"; 
                ?>
            </span>
            
            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[5];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port6---------------------------------------------- -->
        
        <div class="center">
        <span class="topic"> <b> Port6 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>
		    
            <span class="led">
                <?php
                    if($portStatus[6] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[6];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port7---------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port7 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>
            
            <span class="led">
                <?php
                    if($portStatus[7] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[7];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port8---------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port8 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>

            <span class="led">
                <?php
                    if($portStatus[8] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[8];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port9---------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port9 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>
		    
            <span class="led">
                <?php
                    if($portStatus[9] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[9];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port10--------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port10 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>
            
            <span class="led">
                <?php
                    if($portStatus[10] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[10];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port11--------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port11 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>

            <span class="led">
                <?php
                    if($portStatus[11] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[11];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port12--------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port12 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>
		    
            <span class="led">
                <?php
                    if($portStatus[12] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[12];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port13--------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port13 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>
		    
            <span class="led">
                <?php
                    if($portStatus[13] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[13];
                    ?>
                </span>
            </span>

        </div>

 <!-- --------------------------------Port14--------------------------------------------- -->
        
        <div class="center">
        <span class="topic"> <b> Port14 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>

            <span class="led">
                <?php
                    if($portStatus[14] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[14];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port15--------------------------------------------- -->

        <div class="center">
        <span class="topic"> <b> Port15 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>
		    
            <span class="led">
                <?php
                    if($portStatus[15] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[15];
                    ?>
                </span>
            </span>

        </div>

<!-- --------------------------------Port16--------------------------------------------- -->

        <div class="center">

            <span class="topic"> <b> Port16 : </span>

            <span class="button">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="openPort('')" value="ON" id="buttonGreen" />
                    <input type="submit" name="closePort('')" value="OFF" id="buttonRed" />
                </form>
            </span>
		    
            <span class="led">
                <?php
                    if($portStatus[16] =="on")
                        echo "<img src=".$green." width=35px height=35px vspace=3px>"; 
                    else
                        echo "<img src=".$red." width=35px height=35px vspace=3px> "; 
                ?>
            </span>

            <span class="device">
                <span style="color:black; line-height:40px; font-size: 17px;" > 
                    <?php
                        $dutlar = readJsonFile2($jsonFileName_dutlar);
                        echo $dutlar[16];
                    ?>
                </span>
            </span>
        </div>

<!-- --------------------------------Get Current Status--------------------------------- -->

        <div class="center">
            <span class="topic"> <b> All : </span>

            <span class="bigButton">
                <form action="hindex.php" method="post" >
                    <input type="submit" name="readAndRefresh" value="GET CURRENT STATUS" id="bigButton" />
                </form>
            </span>

            <span class="device">
            </span>

        </div>
        
<!-- ---------------------------Open Them All------------------------------------------ -->

        <div class="center">
            <span class="topic"> <b> All : </span>

            <span class="bigButton">
                <button class="GFG_b" 
                    onclick="window.location.href =  <?php echo $ipAdress.':'.$port.'/openThemAll'; ?>;">
                    LET THEM LIVE
                </button>
            </span>

            <span class="device">

            </span>

        </div>

<!-- ---------------------------Kill Them All----------------------------------------- -->

        <div class="center">
            <span class="topic"> <b> All : </span>

            <span class="bigButton">

                <button class="GFG_b" 
                    onclick="window.location.href = <?php echo $ipAdress.':'.$port.'/killThemAll'; ?>;">
                    KILL THEM ALL
                </button>

            </span>

            <span class="device">

            </span> 
        </div>
<!-- --------------------------------------------------------------------------------- -->
  
    </body>
</html>