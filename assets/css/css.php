<style>
/* chill it was loaded in php */
/* global */

@font-face{
  font-family: Rodus;
  src: url('assets/fonts/r/RODUSsquare700.otf');
}

@font-face{
  font-family: Rodus;
  src: url('assets/fonts/r/RODUSsquare300.otf');
  font-weight: 300;
}

body,
html{
  margin: 0;
  width: 100%;
  height: 100%;
<?php if($bg_type == 'img') { ?>
  background: url('<?php echo $bg_url; ?>');
<?php } else { ?>
  background-color: <?php echo $bg_color; ?>;
<?php } ?>
  background-position: center center;
  color: #fff;
  font-family: Rodus;
}

.container{
  margin-left: 15%;
  margin-right: 15%;
}

.bottom-box-container{
  position: absolute;
  bottom: .1px;
}

.top-head{
  width: 20%;
  position: relative;
  top: 249px;
  height: 186px;
  left: 162px;
  background: rgba(0,0,0,.5);
  font-family: Rodus;
  border-top: 1px solid rgb(233,145,20);
  border-right: 1px solid rgb(233,145,20);
  border-bottom: 1px solid rgb(233,145,20);
}

</style>
