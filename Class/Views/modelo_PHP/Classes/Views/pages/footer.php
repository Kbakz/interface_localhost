<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" defer></script>
<script src="https://kit.fontawesome.com/169263c84a.js" crossorigin="anonymous"></script>
<script src="<?php echo INCLUDE_PATH_STATIC?>js/main.js" defer></script>
<?php foreach ($js as $key => $value) { ?>
<script src="<?php echo INCLUDE_PATH_STATIC?>js/<?php echo $value?>.js" defer></script>
<?php }?>
</body>
</html>