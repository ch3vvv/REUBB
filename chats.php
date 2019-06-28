<div id="div1">
</div>

<?php
<script>
    const pricesWs = new WebSocket('wss://ws.coincap.io/prices?assets=ALL')

    pricesWs.onmessage = function (msg) {
        console.log(msg.data);
        
            var obj = JSON.parse(msg.data);
            
document.getElementById("div1").innerHTML='<ol style="font-size:17px;font-family:Arial">' +
                                             '<li><a style="text-decoration:none;background-color:#b2b2b2;border-radius:5px;padding:3px 0px 3px 5px;color:#013370;" href="btcchat.php" >Bitcoin &emsp;<b>-BTC-</b> </a>' + '<em style="padding-left:400px;text-decoration:underline overline dotted #364a62;">' + obj.bitcoin + '</em>' + '</li><br><br>' +
                                             '<li><a style="text-decoration:none;background-color:#b2b2b2;border-radius:5px;padding:3px 0px 3px 5px;color:#013370;" href="ethchat.php" >Etherium &emsp;<b>-ETH-</b> </a>' + '<em style="padding-left:400px;text-decoration:underline overline dotted #364a62;">' + obj.ethereum + '</em>' + '</li><br><br>' +
                                             '<li><a style="text-decoration:none;background-color:#b2b2b2;border-radius:5px;padding:3px 0px 3px 5px;color:#013370;" href="xrpchat.php" >XRP &emsp;<b>-XRP-</b> </a>' + '<em style="padding-left:400px;text-decoration:underline overline dotted #364a62;">' + obj.ripple + '</em>' + '</li><br><br>' +
                                             '<li><a style="text-decoration:none;background-color:#b2b2b2;border-radius:5px;padding:3px 0px 3px 5px;color:#013370;" href="xlmchat.php" >Litecoin &emsp;<b>-LTC-</b> </a>' + '<em style="padding-left:400px;text-decoration:underline overline dotted #364a62;">' + obj.litecoin + '</em>' + '</li><br><br>' +
                                             '<li><a style="text-decoration:none;background-color:#b2b2b2;border-radius:5px;padding:3px 0px 3px 5px;color:#013370;" href="ltcchat.php" >Monero &emsp;<b>-XMR-</b> </a>' + '<em style="padding-left:400px;text-decoration:underline overline dotted #364a62;">' + obj.monero + '</em>' + '</li><br><br>' +
                                             '<li><a style="text-decoration:none;background-color:#b2b2b2;border-radius:5px;padding:3px 0px 3px 5px;color:#013370;" href="xlmchat.php" >Verge &emsp;<b>-XVG-</b> </a>' + '<em style="padding-left:400px;text-decoration:underline overline dotted #364a62;">' + obj.verge + '</em>' + '</li><br><br>' +
                                             '<li><a style="text-decoration:none;background-color:#b2b2b2;border-radius:5px;padding:3px 0px 3px 5px;color:#013370;" href="xlmchat.php" >Digibyte &emsp;<b>-DGB-</b> </a>' + '<em style="padding-left:400px;text-decoration:underline overline dotted #364a62;">' + obj.digibyte + '</em>' + '</li><br><br>' +
                                             '</ol>';
    };
</script>
?>
