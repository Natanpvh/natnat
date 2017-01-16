
<?php
/**
 *
 * O modelo para exibir o rodapé
 *
 * @package WordPress
 * @subpackage NatNat
 * @since Nat Nat 1.0
 */
?>
<footer class=" container-fluid footer-box">
    <div class="container">
        <div class="col-md-3 m-box">
            <img src="./img/logofooter.png">
        </div>
        <div class="col-md-2 m-box-footer">
            <h4>Nat Menu</h4>
            <ul class="menu-item-footer">
                <li><a href="#">Cras justo odio</a></li>
                <li><a href="#">Cras justo odio</a></li>
                <li><a href="#">Cras justo odio</a></li>
                <li><a href="#">Cras justo odio</a></li>
                <li><a href="#">Cras justo odio</a></li>
            </ul>
        </div>
        <div class="col-md-2 m-box-footer">
            <h4>Categorias</h4>
            <ul class="menu-item-footer">
                <li><a href="#">Cras justo odio</a></li>
                <li><a href="#">Cras justo odio</a></li>
                <li><a href="#">Cras justo odio</a></li>
                <li><a href="#">Cras justo odio</a></li>
                <li><a href="#">Cras justo odio</a></li>
            </ul>
        </div>
    </div>
    <div class="container footer-top">
        <a href="#" onclick="rolar_para('#topo')" class="pull-right"><i class="glyphicon glyphicon-chevron-up"></i> Topo</a>
    </div>

</footer>
<div class="container-fluid container-footer">
    © Company 2017
</div>

<!--Wp footer-->
<?php wp_footer(); ?>

</body>

</html>