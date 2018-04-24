<?php require 'inc/head.php'; ?>
<?php
if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
}
?>
<?php $articles = array( 46 => 'Pecan nuts',36 => 'Chocolate chips',58 => 'Chocolate cookie',32 =>'M&M\'s&copy; cookies');
?>
    <section class="cookies container-fluid">
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <th>Coockies</th>
                    <th>Quantity</th>
                </tr>
                <?php if (isset($_SESSION) && isset($_SESSION['bucket'])){
                    foreach($_SESSION['bucket'] as $id => $quantity) { ?>
                        <tr>
                            <td><?= $articles[$id] ?></td>
                            <td><?= $quantity ?></td>
                        </tr>
                    <?php }
                } ?>
            </table>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>
