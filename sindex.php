<!DOCTYPE html>

<html>
    <title>TT PDU - Power Distribution Unit</title>
    <head>
		<?php include 'constants.php'; ?>

        <style>
            .GFG_g {
                background-color: rgb(255, 255, 255);
                color: rgb(0, 255, 0);
                padding: 4px 15px;
                text-align: center;
                display: inline-block;
                border-radius: 8px;
                font-size: 15px;
                margin: 2px 2px;
                font-weight: bold;
            }

            .GFG_g:hover {background-color: #3e8e41}
        </style>

        <style>
            .GFG_r {
                background-color: white;
                color: rgb(255, 0, 0);
                padding: 4px 15px;
                text-align: center;
                border-radius: 8px;
                font-size: 15px;
                margin: 5px 5px;
                font-weight: bold;
            }

            .GFG_r:hover {background-color: #f86363}
        </style>

        <style>
            .GFG_b {
                background-color: white;
                color: rgb(10, 10, 10);
                padding: 4px 9px;
                text-align: center;
                border-radius: 8px;
                font-size: 15px;
                margin: 5px 5px;
                font-weight: bold;
            }

            .GFG_b:hover {background-color: #a19f9f}
        </style>

        <style>
            .center {
              margin: auto;
              width: 21%;  
              border: 1px solid #919191;
              padding: 1px;
            }
        </style>

        <style>
            .center_large {
            margin: auto;
            width: 40%;
            border: 1px solid #ffffff;
            padding: 1px;
            color: rgb(38, 0, 255);
            font-weight: bold;
            }
        </style>
        
    </head>

    <body>
        <div class="center_large">
        	<h2>Turk Telekom Guc Kontrol Unitesi</h2>

        </div>

		<div>
			<?php
				echo $ipAdress.':'.$port.'/killThemAll'; 
			?>
		</div>

        <div class="center">
        	<b> Port1 : 
        	<button class="GFG_g"
		    	onclick="window.location.href = 'http://192.168.99.5:8081/1/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/1/off';">
		        OFF
		    </button>

        </div>
         
        <div class="center">
        	<b> Port2 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/2/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/2/off';">
		        OFF
		    </button>
		    
        </div>

        <div class="center">
        	<b> Port3 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/3/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/3/off';">
		        OFF
		    </button>
		    
        </div>

        <div class="center">
        	<b> Port4 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/4/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/4/off';">
		        OFF
		    </button>

        </div>

        <div class="center">
        	<b> Port5 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/5/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/5/off';">
		        OFF
		    </button>
		    
        </div>

        <div class="center">
        	<b> Port6 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/6/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/6/off';">
		        OFF
		    </button>
		    
        </div>

        <div class="center">
        	<b> Port7 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/7/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/7/off';">
		        OFF
		    </button>

        </div>

        <div class="center">
        	<b> Port8 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/8/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/8/off';">
		        OFF
		    </button>
		    
        </div>

        <div class="center">
        	<b> Port9 :
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/9/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/9/off';">
		        OFF
		    </button>
		    
        </div>

        <div class="center">
        	<b> Port10:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/10/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/10/off';">
		        OFF
		    </button>

        </div>

        <div class="center">
        	<b> Port11:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/11/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/11/off';">
		        OFF
		    </button>
		    
        </div>

        <div class="center">
        	<b> Port12:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/12/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/12/off';">
		        OFF
		    </button>
		    
        </div>

        <div class="center">
        	<b> Port13:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/13/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/13/off';">
		        OFF
		    </button>
		    
        </div>

        <div class="center">
        	<b> Port14:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/14/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/14/off';">
		        OFF
		    </button>

        </div>

        <div class="center">
        	<b> Port15:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/15/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/15/off';">
		        OFF
		    </button>
		    
        </div>

        <div class="center">
        	<b> Port16:
        	<button class="GFG_g" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/16/on';">
		        ON
		    </button>

        	<button class="GFG_r" 
		    	onclick="window.location.href = 'http://192.168.99.5:8081/16/off';">
		        OFF
		    </button>
		    
        </div>

        <div class="center">
            <b> Ports   :
            <button class="GFG_b" 
                onclick="window.location.href = 'http://192.168.99.5:8081/letThemLivespyth  ';">
                LET THEM LIVE
            </button>
        </div>

        <div class="center">
            <b> Ports   :
            <button class="GFG_b" 
                onclick="window.location.href = 'http://192.168.99.5:8081/killThemAll';">
                KILL THEM ALL
            </button>


                <button class="GFG_b" 
                    onclick="window.location.href = <?php echo $ipAdress.':'.$port.'/killThemAll'; ?>;">
                    KILL THEM ALL
                </button>

        </div>
        
    </body>
</html>