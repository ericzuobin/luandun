<div class="<?php foundation_sharing_classes(); ?>">
	<a class="weibo-btn no-ajax" href="//v.t.sina.com.cn/share/share.php?url=<?php echo urlencode( get_permalink() ); ?>" target="_blank"><i class="fa fa-weibo"></i>&nbsp;微博</a>
	<a class="weibo-btn no-ajax" href="//www.douban.com/recommend/?url=<?php echo urlencode( get_permalink() ); ?>&title=<?php echo get_the_title();?>" target="_blank"><i class="icon iconfont">&#xe62f;</i>&nbsp;豆瓣</a>
	<a class="weibo-btn no-ajax" href="//www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink() ); ?>&title=<?php echo get_the_title();?>&source=www.zuobin.net" target="_blank"><i class="fa fa-linkedin"></i>&nbsp;Linkedin</a>
	<a class="email-btn no-ajax" href="mailto:?subject=<?php echo rawurlencode( get_the_title() ); ?>&body=<?php echo rawurlencode( get_permalink() ); ?>"><?php  _e( 'Mail', 'wptouch-pro' ); ?></a>

</div>