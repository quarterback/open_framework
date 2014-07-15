<a href="#main" class="element-invisible element-focusable"><?php print t('Skip to content'); ?></a>
<?php if ($main_menu): ?>
<a href="#main-nav" class="element-invisible element-focusable" data-target=".nav-collapse" data-toggle="collapse"><?php print t('Skip to navigation'); ?></a>
<?php endif; ?>
<!-- /#skipnav -->
<?php if ((($user->uid) && ($page['admin_shortcuts'])) || (($user->uid) && ($secondary_nav))): ?>
<div id="admin-shortcuts" class="admin-shortcuts clearfix"> <?php print render($secondary_nav); ?> <?php print render($page['admin_shortcuts']); ?> </div>
<?php endif; ?>
<!-- /#admin-shortcuts -->
<?php if ($logo || $site_name || $site_slogan || ($page['header']) || ($page['search_box']) || ($page['site_login'])): ?>
<div id="header" class="clearfix header" role="banner">
  <div class="container">
    <div class="row">
      <div class="header-section <?php if (($page['search_box']) || ($page['site_login'])): print $part8; else: print $part12; endif; ?>">
        <?php if ($logo): ?>
        <div id="logo" class="site-logo"> <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" role="presentation" /> </a></div>
        <?php endif; ?>
        <!-- /#logo -->
        <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
          <div id="site-name" class="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></div>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
          <div id="site-slogan" class="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php if (!($site_name || $site_slogan)): ?>
        <div id="site" class="hide">
          <div id="name"><a href="<?php print $front_page; ?>"><?php print $my_site_title; ?></a></div>
        </div>
        <?php endif; ?>
        <!-- /#name-and-slogan -->
        <?php if ($page['header']): ?>
        <div id="header-content" class="<?php print $row_fluid; ?> header-content"><?php print render($page['header']); ?></div>
        <?php endif; ?>
        <!-- /#header-content -->
      </div>
      <?php if ($page['site_login']): ?>
      <div class="site-login" class="<?php print $part4; ?>">
        <?php print render($page['site_login']); ?>
      </div>
      <?php endif; ?>
      <!-- /#site-login -->
    </div>
  </div>
</div>
<!-- /#header -->
<?php endif; ?>
<?php if (($main_menu) || ($page['search_box'])): ?>
<div id="main-menu" class="clearfix site-main-menu">
  <div class="container">
    <?php if ($bootstrap_version == "bootstrap-3"): ?>
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <?php if (($primary_nav) && empty($page['navigation'])): ?>
          <?php print render($primary_nav); ?>
          <!-- /#primary-menu -->
        <?php endif; ?>
        <?php if (!empty($page['navigation'])): ?>
          <?php print render($page['navigation']); ?>
        <?php endif; ?>
        <?php if ($page['search_box']): ?>
          <div id="nav-search" class="nav-search"> <?php print render($page['search_box']); ?> </div>
        <?php endif; ?>
      </div>
    </nav>
    <?php endif; ?>

    <?php if ($bootstrap_version == "bootstrap-2"): ?>
    <div class="navbar">
      <?php if ($main_menu): ?>
      <div class="navbar-inner">
        <?php endif; ?>
        <?php if ($page['search_box']): ?>
        <div id="nav-search" class="nav-search"> <?php print render($page['search_box']); ?> </div>
        <?php endif; ?>
        <?php if ($main_menu): ?>
          <button class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse"> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
          </button>
        <?php if ($primary_nav || !empty($page['navigation'])): ?>
        <div class="nav-collapse collapse">
          <nav id="main-nav" role="navigation">
            <?php if (($primary_nav) && empty($page['navigation'])): ?>
            <?php print render($primary_nav); ?>
            <!-- /#primary-menu -->
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?><?php endif; ?>
          </nav>
        </div>
        <?php endif; ?>
        <?php endif; ?>
        <?php if ($main_menu): ?>
      </div>
      <?php endif; ?>
    </div>
    <?php endif; ?>
  </div>
</div>
<!-- /#main-menu -->
<?php endif; ?>
<div id="main" class="clearfix main" role="main">
  <div class="container">
    <?php if (!($is_front) && ($breadcrumb)): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>
    <?php if ($page['main_top']): ?>
    <div id="main-top" class="<?php print $row_fluid; ?> main-top"> <?php print render($page['main_top']); ?> </div>
    <?php endif; ?>
    <?php if ($page['main_upper']): ?>
    <div id="main-upper" class="<?php print $row_fluid; ?> main-upper"> <?php print render($page['main_upper']); ?> </div>
    <?php endif; ?>
    <div id="main-content" class="row main-content">
      <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="sidebar <?php if ($page_layout == "sidebar-4col"): print $part4; else: print $part3; endif; ?> site-sidebar-first">
        <div class="<?php print $row_fluid; ?>"><?php print render($page['sidebar_first']); ?></div>
      </div>
      <!-- /#sidebar-first -->
      <?php endif; ?>
      <div id="content" class="mc-content <?php if (($page_layout == "sidebar-4col") && (($page['sidebar_first']) && ($page['sidebar_second']))): print $part4; elseif (($page_layout == "sidebar-4col") && (($page['sidebar_first']) || ($page['sidebar_second']))): print $part8; elseif (($page['sidebar_first']) && ($page['sidebar_second'])): print $part6; elseif (($page['sidebar_first']) || ($page['sidebar_second'])): print $part9; else: print $part12; endif; ?>">
        <div id="content-wrapper" class="content-wrapper">
          <div id="content-head" class="<?php print $row_fluid; ?> content-head">
            <div class="<?php print $part12; ?> clearfix clear-row">
              <?php if ($page['highlighted']): ?>
              <div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div>
              <?php endif; ?>
              <?php print render($title_prefix); ?>
              <?php if ($title): ?>
              <h1 class="title" id="page-title"> <?php print $title; ?> </h1>
              <?php endif; ?>
              <?php print render($title_suffix); ?>
              <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
              <div class="tabs"> <?php print render($tabs); ?> </div>
              <?php endif; ?>
              <?php if ($messages): ?>
              <div id="console" class="clearfix"><?php print $messages; ?></div>
              <?php endif; ?>
              <?php if ($page['help']): ?>
              <div id="help" class="clearfix"> <?php print render($page['help']); ?> </div>
              <?php endif; ?>
              <?php if ($action_links): ?>
              <ul class="action-links">
                <?php print render($action_links); ?>
              </ul>
              <?php endif; ?>
            </div>
          </div>
          <?php if ($page['content_top']): ?>
          <div id="content-top" class="<?php print $row_fluid; ?> content-top"> <?php print render($page['content_top']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_upper']): ?>
          <div id="content-upper" class="<?php print $row_fluid; ?> content-upper"> <?php print render($page['content_upper']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content']) || ($feed_icons)): ?>
          <div id="content-body" class="<?php print $row_fluid; ?> content-body"> <?php print render($page['content']); ?> <?php print $feed_icons; ?> </div>
          <?php endif; ?>
          <?php if ($page['content_row2']): ?>
          <div id="content-row2" class="<?php print $row_fluid; ?> content-row2"> <?php print render($page['content_row2']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col2-1']) || ($page['content_col2-2'])): ?>
          <div id="content-col2" class="<?php print $row_fluid; ?> content-col2">
            <?php if ($page['content_col2-1']): ?>
            <div class="<?php print $part6; ?>">
              <div id="content-col2-1" class="<?php print $row_fluid; ?> content-col2"> <?php print render($page['content_col2-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col2-2']): ?>
            <div class="<?php print $part6; ?>">
              <div id="content-col2-2" class="<?php print $row_fluid; ?> content-col2"> <?php print render($page['content_col2-2']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_row3']): ?>
          <div id="content-row3" class="<?php print $row_fluid; ?> content-row3"> <?php print render($page['content_row3']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col3-1']) || ($page['content_col3-2']) || ($page['content_col3-3'])): ?>
          <div id="content-col3" class="<?php print $row_fluid; ?> content-col3">
            <?php if ($page['content_col3-1']): ?>
            <div class="<?php print $part4; ?>">
              <div id="content-col3-1" class="<?php print $row_fluid; ?> content-col3"> <?php print render($page['content_col3-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col3-2']): ?>
            <div class="<?php print $part4; ?>">
              <div id="content-col3-2" class="<?php print $row_fluid; ?> content-col3"> <?php print render($page['content_col3-2']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col3-3']): ?>
            <div class="<?php print $part4; ?>">
              <div id="content-col3-3" class="<?php print $row_fluid; ?> content-col3"> <?php print render($page['content_col3-3']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_row4']): ?>
          <div id="content-row4" class="<?php print $row_fluid; ?> content-row4"> <?php print render($page['content_row4']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content_col4-1']) || ($page['content_col4-2']) || ($page['content_col4-3']) || ($page['content_col4-4'])): ?>
          <div id="content-col4" class="<?php print $row_fluid; ?> content-col4">
            <?php if ($page['content_col4-1']): ?>
            <div class="<?php print $part3; ?>">
              <div id="content-col4-1" class="<?php print $row_fluid; ?> content-col4"> <?php print render($page['content_col4-1']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-2']): ?>
            <div class="<?php print $part3; ?>">
              <div id="content-col4-2" class="<?php print $row_fluid; ?> content-col4"> <?php print render($page['content_col4-2']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-3']): ?>
            <div class="<?php print $part3; ?>">
              <div id="content-col4-3" class="<?php print $row_fluid; ?> content-col4"> <?php print render($page['content_col4-3']); ?> </div>
            </div>
            <?php endif; ?>
            <?php if ($page['content_col4-4']): ?>
            <div class="<?php print $part3; ?>">
              <div id="content-col4-4" class="<?php print $row_fluid; ?> content-col4"> <?php print render($page['content_col4-4']); ?> </div>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if ($page['content_lower']): ?>
          <div id="content-lower" class="<?php print $row_fluid; ?> content-lower"> <?php print render($page['content_lower']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_bottom']): ?>
          <div id="content-bottom" class="<?php print $row_fluid; ?> content-bottom"> <?php print render($page['content_bottom']); ?> </div>
          <?php endif; ?>
        </div>
        <!-- /#content-wrap --> 
      </div>
      <!-- /#content -->
      <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="sidebar <?php if ($page_layout == "sidebar-4col"): print $part4; else: print $part3; endif; ?> site-sidebar-second">
        <div class="<?php print $row_fluid; ?>"><?php print render($page['sidebar_second']); ?></div>
      </div>
      <!-- /#sidebar-second -->
      <?php endif; ?>
    </div>
    <?php if ($page['main_lower']): ?>
    <div id="main-lower" class="<?php print $row_fluid; ?> main-lower"> <?php print render($page['main_lower']); ?> </div>
    <?php endif; ?>
    <?php if ($page['main_bottom']): ?>
    <div id="main-bottom" class="<?php print $row_fluid; ?> main-bottom"> <?php print render($page['main_bottom']); ?> </div>
    <?php endif; ?>
  </div>
</div>
<!-- /#main, /#main-wrapper -->
<?php if ($page['footer']): ?>
<div id="footer" class="clearfix site-footer" role="contentinfo">
  <div class="container">
    <div id="footer-content" class="<?php print $row_fluid; ?> footer-content"> <?php print render($page['footer']); ?> </div>
  </div>
</div>
<!-- /#footer -->
<?php endif; ?>
