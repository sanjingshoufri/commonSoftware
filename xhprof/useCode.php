<?php
xhprof_enable();

// 引入xhprof库文件，路径请自行修改
$XHPROF_ROOT = realpath(dirname(__FILE__) .'/xhprof');
include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_lib.php";
include_once $XHPROF_ROOT . "/xhprof_lib/utils/xhprof_runs.php";
$xhprof_runs = new XHProfRuns_Default();

// 导出性能分析数据，默认xhprof.output_dir指定的目录
$run_id = $xhprof_runs->save_run($xhprof_data, 'xhprof');

// 关闭xhprof.
$xhprof_data = xhprof_disable();