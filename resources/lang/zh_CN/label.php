<?php

return [
    'name' => '名称',
    'email' => '邮箱',
    'image' => '图片',
    'expire_at' => '过期时间',
    'username' => '用户',
    'status' => '状态',
    'enabled' => '启用',
    'disabled' => '禁用',
    'created_at' => '创建时间',
    'updated_at' => '更新时间',
    'begin' => '开始时间',
    'end' => '结束时间',
    'uploaded' => '上传量',
    'downloaded' => '下载量',
    'ratio' => '分享率',
    'seed_time_required' => '还需做种时间',
    'inspect_time_left' => '考察剩余时间',
    'added' => '添加时间',
    'last_access' => '最后访问时间',
    'priority' => '优先级',
    'priority_help' => '值越大，越靠前',
    'comment' => '备注',
    'duration' => '时长',
    'description' => '描述',
    'price' => '价格',
    'deadline' => '截止时间',
    'permanent' => '永久有效',
    'operator' => '操作者',
    'action' => '操作',
    'submit' => '提交',
    'cancel' => '取消',
    'reset' => '重置',
    'anonymous' => '匿名',
    'setting' => [
        'nav_text' => '设置',
        'backup' => [
            'tab_header' => '备份',
            'enabled' => '是否启用',
            'enabled_help' => '是否启用备份功能',
            'frequency' => '频率',
            'frequency_help' => '备份频率',
            'hour' => '小时',
            'hour_help' => '在这个点钟数进行备份',
            'minute' => '分钟',
            'minute_help' => "在前面点钟数的这一分钟进行备份。如果频率是按 'hourly'，此值会被忽略",
            'google_drive_client_id' => 'Google Drive client ID',
            'google_drive_client_secret' => 'Google Drive client secret',
            'google_drive_refresh_token' => 'Google Drive refresh token',
            'google_drive_folder_id' => 'Google Drive folder ID',
            'via_ftp' => '通过 FTP 保存',
            'via_ftp_help' => '是否通过 FTP 保存。如果通过，把配置信息添加到 .env 文件，参考 <a href="https://laravel.com/docs/master/filesystem#ftp-driver-configuration">Laravel 文档</a>',
            'via_sftp' => '通过 SFTP 保存',
            'via_sftp_help' => '是否通过 SFTP 保存。如果通过，把配置信息添加到 .env 文件，参考 <a href="https://laravel.com/docs/master/filesystem#sftp-driver-configuration">Laravel 文档</a>',
        ],
        'hr' => [
            'tab_header' => 'H&R',
            'mode' => '模式',
            'inspect_time' => '考察时长',
            'inspect_time_help' => '考察时长自下载完成后开始计算，单位：小时',
            'seed_time_minimum' => '达标做种时长',
            'seed_time_minimum_help' => '达标的最短做种时长，单位：小时，必须小于考察时长',
            'ignore_when_ratio_reach' => '达标分享率',
            'ignore_when_ratio_reach_help' => '达标的最小分享率',
            'ban_user_when_counts_reach' => 'H&R 数量上限',
            'ban_user_when_counts_reach_help' => 'H&R 数量达到此值，账号会被禁用',
        ],
        'seed_box' => [
            'tab_header' => 'SeedBox',
            'enabled_help' => '是否启用 SeedBox 规则',
            'no_promotion' => '无优惠',
            'no_promotion_help' => '不享受任何优惠，上传量/下载量按实际值计算',
            'max_uploaded' => '最大上传量倍数',
            'max_uploaded_help' => '总上传量最多为其体积的多少倍。设置为 0 无此限制',
            'not_seed_box_max_speed' => '非 SeedBox 最高限速',
            'not_seed_box_max_speed_help' => '单位：Mbps。若超过此值又不能匹配 SeedBox 记录，禁用下载权限',
            'max_uploaded_duration' => '最大上传量倍数有效时间范围',
            'max_uploaded_duration_help' => '单位：小时。种子发布后的这个时间范围内，最大上传量倍数生效，超过此范围不生效。设置为 0 一直生效',
        ],
        'system' => [
            'tab_header' => '系统',
            'change_username_card_allow_characters_outside_the_alphabets' => '改名卡是否允许英文字母外的字符',
            'change_username_min_interval_in_days' => '修改用户名最小间隔天数',
        ],
    ],
    'user' => [
        'label' => '用户',
        'uploaded' => '上传量',
        'downloaded' => '下载量',
        'invites' => '邀请',
        'seedbonus' => '魔力',
        'attendance_card' => '补签卡',
        'class' => '等级',
        'status' => '状态',
        'enabled' => '启用',
        'username' => '用户名',
        'invite_by' => '邀请人',
        'two_step_authentication' => '两步验证',
        'seed_points' => '做种积分',
        'downloadpos' => '下载权限',
        'parked' => '挂起',
        'offer_allowed_count' => '候选通过数',
    ],
    'medal' => [
        'label' => '勋章',
        'image_large' => '大图',
        'image_small' => '小图',
        'get_type' => '获取方式',
        'duration' => '有效时长',
        'duration_help' => '单位：天。如果留空，用户永久拥有',
    ],
    'user_medal' => [
        'label' => '用户勋章',
    ],
    'exam' => [
        'label' => '考核',
        'is_done' => '是否完成',
        'is_discovered' => '自动发现',
        'register_time_range' => [
            'begin' => '注册时间开始',
            'end' => '注册时间结束',
        ],
        'donated' => '是否捐赠',
        'index_formatted' => '考核指标',
        'filter_formatted' => '目标用户',
        'section_base_info' => '基本信息',
        'priority_help' => '值越大，优先级越高。当用户匹配多个考核时，优先级高的优先分配。',
        'section_time' => '时间',
        'duration_help' => '单位：天。分配给用户时，如果指定了开始/结束时间，用户考核的时间范围就是这个范围。否则，用户考核的开始时间是分配时间，结束时间是开始时间加上时长。',
        'section_target_user' => '目标用户',
        'index_required_value' => '要求量',
        'index_required_label' => '指标',
        'index_placeholder' => '上传增量/下载增量单位为：GB，平均做种时间单位为：小时',
        'index_current_value' => '当前量',
        'index_result' => '结果',
    ],
    'exam_user' => [
        'label' => '用户考核',
        'is_done' => '是否完成',
    ],
    'torrent' => [
        'label' => '种子',
        'owner' => '发布者',
        'size' => '大小',
        'ttl' => '存活时间',
        'seeders' => '做种',
        'leechers' => '下载',
        'times_completed' => '完成次数',
        'category' => '类型',
        'approval_status' => '审核状态',
        'pos_state' => '置顶',
        'sp_state' => '优惠',
        'visible' => '活种',
        'source' => '来源',
        'codec' => '编码',
        'audiocodec' => '音频编码',
        'medium' => '媒介',
        'team' => '制作组',
        'processing' => '处理',
        'standard' => '分辨率',
        'picktype' => '推荐',
        'promotion_time_type' => '优惠时间类型',
        'hr' => 'H&R',
    ],
    'hit_and_run' => [
        'label' => '用户 H&R',
    ],
    'tag' => [
        'label' => '标签',
        'color' => '背景颜色',
        'font_color' => '字体颜色',
        'font_size' => '字体大小',
        'margin' => '外边距',
        'padding' => '内边距',
        'border_radius' => '边框圆角',
        'torrents_count' => '种子数',
        'torrents_sum_size' => '种子体积',
    ],
    'agent_allow' => [
        'label' => '允许客户端',
        'family' => '系列',
        'start_name' => '起始名称',
        'peer_id_start' => 'Peer ID 超始',
        'peer_id_pattern' => 'Peer ID 正则',
        'peer_id_matchtype' => 'Peer ID 匹配类型',
        'peer_id_match_num' => 'Peer ID 匹配次数',
        'agent_start' => 'Agent 起始',
        'agent_pattern' => 'Agent 正则',
        'agent_matchtype' => 'Agent 匹配类型',
        'agent_match_num' => 'Agent 匹配次数',
        'exception' => '排除',
        'allowhttps' => '允许 https',
    ],
    'agent_deny' => [
        'label' => '拒绝客戶端',
        'peer_id' => 'Peer ID',
        'agent' => 'Agent',
    ],
    'claim' => [
        'label' => '用户认领',
        'last_settle_at' => '上次结算时间',
        'seed_time_this_month' => '本月做种时间',
        'uploaded_this_month' => '本月上传量',
        'is_reached_this_month' => '本月是否达标',
    ],
    'torrent_state' => [
        'label' => '全站优惠',
        'global_sp_state' => '全站优惠',
    ],
    'role' => [
        'class' => '关联用户等级',
    ],
    'ability' => [
        'name' => '标识',
        'title' => '名称',
    ],
    'seed_box_record' => [
        'label' => 'SeedBox 记录',
        'type' => '添加类型',
        'operator' => '运营商',
        'bandwidth' => '带宽(Mbps)',
        'ip' => 'IP(段)',
        'ip_begin' => '起始 IP',
        'ip_end' => '结束 IP',
        'ip_help' => '填写起始 IP + 结束 IP，或 IP(段)，不要同时填写',
        'status' => '状态',
    ],
    'menu' => [
        'label' => '自定义菜单',
        'enable_help' => '是否启用自定义菜单',
    ],
    'menu_item' => [
        'label' => '菜单项',
        'url' => '链接',
        'text' => '显示文本',
        'target' => '打开方式',
        'style' => '样式',
        'parent_id' => '父菜单',
        'min_class' => '最低可见等级',
    ],
    'user_meta' => [
        'meta_keys' => [
            \App\Models\UserMeta::META_KEY_CHANGE_USERNAME => '改名卡',
            \App\Models\UserMeta::META_KEY_PERSONALIZED_USERNAME => '彩虹 ID',
        ],
    ],
    'search_box' => [
        'label' => '分类模式',
        'name' => '名称',
        'section_name' => '分区名称',
        'section_name_help' => '若设置，显示在菜单上',
        'is_default' => '是否默认',
        'showsubcat' => '次分类',
        'taxonomies' => '分类法',
        'taxonomy_display_text' => '显示文案',
        'torrent_field' => '种子表字段',
        'catsperrow' => '每行项目数',
        'catsperrow_help' => "设置在搜索箱中每行显示的项目数，如'8'。",
        'catpadding' => "项目间距",
        'catpadding_help' => "单位为像素。搜索箱中项目的水平间隔距离，如'3'。",
        'custom_fields' => '启用自字义字段',
        'custom_fields_display_name' => '自定义字段展示名称',
        'custom_fields_display' => '自定义字段展示',
        'custom_fields_display_help' => '使用特殊的标签代表字段的名称和值，如某字段其 Name 为 artist，则它的名称为：<%artist.label%>，它的值为：<%artist.value%>',
        'category' => '分类',
        'torrent_field_duplicate' => '种子表字段：:field 不能重复使用！',
        'other' => '其他',
        'taxonomy' => [
            'name' => '名称',
            'sort_index' => '排序',
            'sort_index_help' => "递增排序，即'0'排在最前。",
            'class_name' => 'class属性值',
            'class_name_help' => "为图片指定class属性值。若无请留空。允许的字符: [a-z]（小写），[0-9]，[_]，第一个字符必须是字母。",
            'image' => '图片文件名',
            'image_help' => '图片文件的名字。允许的字符：[a-z]（小写），[0-9]，[_./]。',
            'icon_id' => '分类图标',
            'mode' => '分类模式',
            'mode_help' => '留空表示适用于全部分类模式',
        ],
    ],
    'icon' => [
        'label' => '分类图标',
        'folder' => '图标文件夹',
        'folder_help' => "分类图标所在的文件夹名。允许的字符：[a-z]（小写），[0-9]，[_./]。必须在末尾添加斜杠(/)，如'mycaticon/'",
        'cssfile' => 'CSS 文件',
        'cssfile_help' => "为此分类图标指定CSS文件。填写完整路径，如'styles/scenetorrents.css'。若无请留空。允许的字符：[a-z]（小写），[0-9]，[_./]。",
        'multilang' => '多语言',
        'multilang_help' => "是否为不同语言使用不同的分类图标。如果设为'是'，将多份图标分别放入命名如'en'，'chs'等的文件夹中。",
        'secondicon' => '第二图标',
        'secondicon_help' => "是否使用第二图标显示补充信息。如果设为'是'，将第二图标放入普通图标目录下命名为'additional'的文件夹中。",
        'designer' => '设计者',
        'designer_help' => '此图标集的设计者。',
        'comment' => '说明',
        'comment_help' => '此图标集的说明。',
        'desc' => "你必须将图标文件放入服务器正确的目录才能使得以下设定起作用。将普通的分类图标放入'pic/category/分类模式名字/图标文件夹[语言缩写/]'，将第二图标放入'pic/category/分类模式名字/图标文件夹[语言缩写/]additional/'.不明白？参考下面的例子：
当
    分类模式名字='nhd'
    图标文件夹='scenetorrents/'
    多语言='是'
    第二图标='否'
你应该将一个英语的电影类型的图标（如'movies.png'）文件放入'pic/category/nhd/scenetorrents/en/'。
当
    分类模式名字='chd'
    图标文件夹='nanosofts/'
    多语言='否'
    第二图标='是'
你应该将一个电影类型的图标（如'movies.png'）文件放入'pic/category/chd/nanosofts/'，将一个第二图标（如'bdh264.png'）放入'pic/category/chd/nanosofts/additional/'。

注意：在 1.8 中，可以省略'分类模式名字'这一部分，即规则是'pic/category/图标文件夹[语言缩写/]'。
",
    ],
    'second_icon' => [
        'label' => '第二图标',
        'name' => '名字',
        'name_help' => '不要使用过长的名字。建议在10个字母内。',
        'image' => "图片文件名",
        'image_help' => "图片文件的名字。允许的字符：[a-z]（小写），[0-9]，[_./]。",
        'class_name' => 'class属性值',
        'class_name_help' => "为图片指定class属性值。若无请留空。允许的字符: [a-z]（小写），[0-9]，[_]，第一个字符必须是字母。",
        'select_section' => '选择',
        'select_section_help' => "如果某个选择未指定，其所有选项都符合此规则。必须至少指定一个选择。",
    ],
];
