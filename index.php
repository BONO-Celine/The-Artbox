    <!-- include du header et des oeuvres-->
    <?php 
    include('header.php'); 
    include('oeuvres.php');
    ?>

    <main>
        <div id="liste-oeuvres">
        <?php  foreach($oeuvres as $oeuvre){
        echo'<article class="oeuvre">';
        echo'<a href="oeuvre.php?id=' . $oeuvre['id'] . '">';
        echo'<img src="' . $oeuvre['image'] . '" alt="' . $oeuvre['title'] . '">';
        echo'<h2>' . $oeuvre['title'] . '</h2>';
        echo'<p class="description">' . $oeuvre['author'] . '</p>';
        echo'</a>';
        echo'</article>';
        }?>
        </div>
    </main>

    <!-- include du footer -->
    <?php include('footer.php'); ?>