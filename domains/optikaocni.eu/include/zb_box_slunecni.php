                
                <div class="clearfix">
                
                <?php foreach ($database->znacky->where("kategorie", 1) as $zaznam) { ?>
                <div class="col-md-4 col-sm-4" style="padding:2px;">
                   <a href="slunecni-bryle-novy?znacka=<?= $zaznam['id'] ?>">
                   <img src="admin/files/znacky/<?= $zaznam['pic'] ?>" width="100%">
                   </a>
                </div>
                <?php } ?>
                
                
                </div>

                   <div class="clearfix" style="margin-top:20px;">
                   
                   <a href="dioptricke-bryle">
                   <img src="assets/images/sluzby/page/1.jpg" alt=" " class="img-responsive figure">
                   </a>
                   <br>
                   <a href="slunecni-bryle">
                   <img src="assets/images/sluzby/page/2.jpg" alt=" " class="img-responsive figure">
                   </a>
                   <br>
                   <a href="kontaktni-cocky">
                   <img src="assets/images/sluzby/page/3.jpg" alt=" " class="img-responsive figure">
                   </a>
                   
                  </div>
                   
                   <style>
                    img.figure {
	opacity: 1;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
img.figure:hover {
	opacity: .5;
}
                   </style>
                   
                  