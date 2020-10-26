<style>
    .header-link a{color:black;text-decoration:none;background:white;padding:5px;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}
    .header-link a:hover{background:rgb(244,244,244);}
    .header-link{text-align:right;}
    .header-link-left{text-align:left;color:rgb(213,213,213);}
    </style>

<div class="container-fluid" style="<?php if($_SESSION["name"]=="technik"){echo'display:none';} ?>">
           <div class="row" style="background:rgb(32,32,32);padding:10px;">
           <div class="col-sm-6 header-link-left"> 
            
           </div> 
           <div class="col-sm-6 header-link"> 
            <a href="javascript:location.reload(true)" style="background:yellow;">Aktualizovat stránku</a>
            <a href="http://topkolo.netist.cz/pujcovna/" target="_blank">Půjčovna</a>
            <a href="http://topkolo.netist.cz/servis/" target="_blank">Servis</a>
           </div>
 </div>      </div>