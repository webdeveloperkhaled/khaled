===========================Advace menu============================
<div class="home-product">{{block type="catalog/product_special" template="catalog/product/special.phtml"}}</div>
===========================Advace menu============================
<li class="<?php echo $class.' nav-'.$i; ?>"  style="background-image:url(<?php echo $this->getUrl().'media/'.$_menuItem['icon'];?>);background-position:center center;background-repeat:no-repeat;background-size:cover;">
</li>
===========================Free Maento Template============================
http://www.bsetec.com/free-magento-templates
=========================Newsletter Cll in PHP==============================================
<?php echo $this->getLayout()->createBlock('core/template')->setTemplate('hello/hello.phtml')->toHtml(); ?>
=========================Newsletter Cll in PHP==============================================
<?php echo $this->getLayout()->createBlock('newsletter/subscribe')->setTemplate('newsletter/subscribe.phtml')->toHtml(); ?>
=========================is home condition==============================================
<?php if( $this->getIsHomePage() ):?>
    <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('footer-content')->toHtml();?>
<?php endif; ?>
====================================================================
<?php 
// IF WE ARE ON HOMEPAGE
if(
Mage::getSingleton('cms/page')->getIdentifier() == 'home'  &&
Mage::app()->getFrontController()->getRequest()->getRouteName() == 'cms'
) : ?>
// Put your homepage-only code in here.
<?php endif; ?>
=======================================================================
<div class="home-content">
    <div class="col-md-8 welcome-content">
        <?php
            $model =Mage::getModel('cms/page')->load('welcome','identifier');
            echo '<h2 id="lastWord">'.$model->getContentHeading().'</h2>';
            echo '<p>'.substr(strip_tags($model->getContent()),0,330).'</p>';
            echo '<a href='.$this->getUrl('welcome').'>Read More</a>';
        ?>
    </div>
    <div class="col-md-4 latest-news-home">
        <h2>Latest <span>News</span></h2>
        <img border="0" alt="Logo" src="<?php echo $this->getSkinUrl('images/latestnews.png') ?>"/>
    </div>
</div>
=======================================================================
<?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('home-content')->toHtml();?>
=======================================================================
<?php if (Mage::helper('customer')->isLoggedIn() ): ?>
        <a href="<?php echo Mage::helper('customer')->getLogoutUrl(); ?>"><?php echo 'Log OUT'; ?></a>

<?php 
else: ?>
        <a href="<?php echo Mage::helper('customer')->getLoginUrl(); ?>">SIGN IN</a>
    <?php 
 
endif; ?>
=========Using Bootstarp===============
<?php $_menu = $this->getHtml('level-top') ?>
<?php if ($_menu): ?>
    <div class="container">
        <nav class="navbar navbar-default navbar-main" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <?php echo $this->__('Categories') ?>
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class="sr-only"><?php echo $this->__('Toggle Navigation') ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
 
            <div class="collapse navbar-collapse navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <?php echo $_menu ?>
                </ul>
            </div>
        </nav>
    </div>
<?php endif ?>
===================================================================


