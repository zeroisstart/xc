<?php $this->beginContent('/layouts/_root'); ?>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-yellow-light layout-top-nav">

<div class="wrapper">
<?php
$this->renderPartial ( '/layouts/_menu_return' );		
?>  
  
<div class="content-wrapper">
<?php 
echo $content;
?>  
</div>


</div>

</body>

<?php $this->endContent(); ?>


