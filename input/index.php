<?php require_once('../func/function.php'); ?>

<?php $id = getInfomation(); ?>
<?php echo $id; ?>
入浴<?php if(empty($user['visit'])) {?><input type="text"> <?php } ?> 
